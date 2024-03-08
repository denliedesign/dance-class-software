<?php

namespace App\Http\Controllers;

use App\Imports\DanceClassesImport;
use App\Mail\FavoritesEmail;
use App\Models\DanceClass;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
use Dompdf\Dompdf;
use Dompdf\Options;


class DanceController extends Controller
{
    public function import()
    {
        Excel::import(new DanceClassesImport, public_path('images/dance-classes.xlsx'));

        return redirect('/')->with('success', 'All good!');
    }

    public function showForm()
    {
        // You can add logic here if needed before displaying the form
        return view('dance.form');
    }

    public function filterClasses(Request $request)
    {
        $request->validate([
            'age_requirement' => 'required|array|min:1',
            'age_requirement.*' => 'string',
            'dance_style' => 'required|array|min:1',
            'dance_style.*' => 'string',
            'day_of_week' => 'required|array|min:1',
            'day_of_week.*' => 'string',
            'sort_by' => 'nullable|in:age_requirement,dance_style,day_of_week', // Define the allowed sort fields
            'sort_order' => 'nullable|in:asc,desc',
        ]);

        $ageRequirement = $request->input('age_requirement');
        $danceStyle = $request->input('dance_style');
        $dayOfWeek = $request->input('day_of_week');
        $sortBy = $request->input('sort_by', 'age_requirement'); // Default to sorting by 'name'
        $sortOrder = $request->input('sort_order', 'asc'); // Default to ascending order

        $filteredClasses = DanceClass::where(function ($query) use ($ageRequirement) {
            $query->whereIn('age_requirement', $ageRequirement);
        })
            ->whereIn('dance_style', $danceStyle)
            ->whereIn('day_of_week', $dayOfWeek)
            ->orderBy($sortBy, $sortOrder)
            ->get();



        // Pass the filtered classes to the view
        return view('dance.results', ['classes' => $filteredClasses]);
    }

    public function showUploadForm()
    {
        return view('/dance/upload-form');
    }

    public function importDanceClasses(Request $request)
    {
        $request->validate([
            'your_file' => 'required|mimes:xlsx,xls',
        ]);

        try {
            Excel::import(new DanceClassesImport, $request->file('your_file'));
            return redirect()->back()->with('success', 'Dance classes imported successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error importing dance classes: ' . $e->getMessage());
        }
    }

//    public function showDanceClasses()
//    {
//        // Retrieve all dance classes from the database
//        $classes = DanceClass::all();
//
//        // Display the initial page with the form
//        return view('dance_classes', ['classes' => $classes]);
//    }

//    public function processFavorites(Request $request)
//    {
//        // Get the selected class IDs from the form submission
//        $selectedClassIds = $request->input('selectedClasses');
//
//        // Check if $selectedClassIds is set and is an array
//        if (isset($selectedClassIds) && is_array($selectedClassIds)) {
//            // Retrieve the selected classes from the database
//            $selectedClasses = DanceClass::whereIn('id', $selectedClassIds)->get();
//
//            // Store the selected classes in the session
//            session(['selectedClasses' => $selectedClasses]);
//
//            // Display the selected classes on the results page
//            return view('processFavorites', ['selectedClasses' => $selectedClasses]);
//        } else {
//            // Handle the case where $selectedClassIds is null or not an array
//            // For example, you might redirect back with an error message
//            session()->forget('selectedClasses');
//            return redirect()->back()->with('error', 'Invalid input for selected classes');
//        }
//    }


    public function downloadFavorites()
    {
// Retrieve the selected classes from the session
        $selectedClasses = session('selectedClasses', []);
        // Debug: Output selected classes data
//        dd($selectedClasses);
        // Create PDF
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);

        $dompdf = new Dompdf($options);

        // Load HTML content from the pdf_template.blade.php view
        $html = view('pdf_template', ['selectedClasses' => $selectedClasses])->render();
        $dompdf->loadHtml($html);

        // Set paper size (optional)
        $dompdf->setPaper('A4', 'landscape');

        // Render PDF (first page)
        $dompdf->render();

        // Stream PDF file to browser for download
        $output = $dompdf->output();
        return response($output, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename=favorites.pdf',
        ]);
    }

//    public function emailFavorites(Request $request)
//    {
//        // Retrieve the selected classes from the session
//        $selectedClasses = session('selectedClasses', []);
//
//        // Validate the user's input (you can customize the validation rules)
//        $request->validate([
//            'email' => 'required|email',
//        ]);
//
//        // Get the user's email from the form
//        $userEmail = $request->input('email');
//
//        // Add logic to send an email with selected classes information
//        Mail::to($userEmail)->send(new FavoritesEmail($selectedClasses));
//
//        // Redirect with success message
//        return redirect()->back()->with('success', 'Email sent successfully to ' . $userEmail);
//
//    }

    public function processFavorites(Request $request)
    {
        // Get the selected class IDs from the form submission
        $selectedClassIds = $request->input('selectedClasses');

        // Check if $selectedClassIds is set and is an array
        if (isset($selectedClassIds) && is_array($selectedClassIds)) {
            // Retrieve the selected classes from the database
            $selectedClasses = DanceClass::whereIn('id', $selectedClassIds)->get();

            // Store the selected classes in the session
            session(['selectedClasses' => $selectedClasses]);

            // Check if the 'sendEmail' parameter is present
            if ($request->has('sendEmailFlag')) {
                // Redirect to the email sending route
                return redirect()->route('sendFavoritesEmail');
            }

            // Display the selected classes on the results page
            return view('processFavorites', ['selectedClasses' => $selectedClasses]);
        } else {
            // Handle the case where $selectedClassIds is null or not an array
            // For example, you might redirect back with an error message
            session()->forget('selectedClasses');
            return redirect()->back()->with('error', 'Invalid input for selected classes');
        }
    }

    public function sendFavoritesEmail(Request $request)
    {
        // Retrieve the selected classes from the session
        $selectedClasses = session('selectedClasses', []);

        // Validate the user's input (you can customize the validation rules)
        $request->validate([
            'sendEmail' => 'required|email',
        ]);

        // Get the user's email from the form
        $userEmail = $request->input('sendEmail');

        // Add logic to send an email with selected classes information
        Mail::to($userEmail)->send(new FavoritesEmail($selectedClasses));

        // Return to the same page with the selected classes and a success message
        return view('/processFavorites', [
            'selectedClasses' => $selectedClasses,
            'successMessage' => 'Email sent successfully to ' . $userEmail,
        ]);
    }

}
