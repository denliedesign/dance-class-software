@extends('layouts.app')
@section('content')

    <div class="banner-wrap">
        <div class="banner">
            <img src="/images/banner-dancers.png" alt="banner" style="width: 100%; height: auto;">
        </div>
    </div>


    <div class="container my-5">
{{--        <hr class="my-3" style="width: 60%; margin: 0 auto;">--}}
        <h1 class="text-center mt-4">Family Flex Scheduler</h1>
        <h1 class="text-center mb-4"><span style="font-size: 0.7em;">Personalized Dance Recommendations for You!</span></h1>
{{--        <hr class="my-3" style="width: 60%; margin: 0 auto;">--}}

        <!-- Add sorting links/buttons -->
        <div class="text-center text-muted my-4 py-2 rounded shadow" style="border: 1px solid black;">
            <strong>Sort By:</strong>
            Age
            <a class="text-muted text-decoration-none" href="{{ route('dance.filter', array_merge(request()->except(['sort_by', 'sort_order']), ['sort_by' => 'age_requirement', 'sort_order' => 'asc'])) }}"><ion-icon name="caret-up-outline"></ion-icon></a>
            <a class="text-muted text-decoration-none" href="{{ route('dance.filter', array_merge(request()->except(['sort_by', 'sort_order']), ['sort_by' => 'age_requirement', 'sort_order' => 'desc'])) }}"><ion-icon name="caret-down-outline"></ion-icon></a>
            &nbsp; Dance Style
            <a class="text-muted text-decoration-none" href="{{ route('dance.filter', array_merge(request()->except(['sort_by', 'sort_order']), ['sort_by' => 'dance_style', 'sort_order' => 'asc'])) }}"><ion-icon name="caret-up-outline"></ion-icon></a>
            <a class="text-muted text-decoration-none" href="{{ route('dance.filter', array_merge(request()->except(['sort_by', 'sort_order']), ['sort_by' => 'dance_style', 'sort_order' => 'desc'])) }}"><ion-icon name="caret-down-outline"></ion-icon></a></a>
            &nbsp; Day of Week
            <a class="text-muted text-decoration-none" href="{{ route('dance.filter', array_merge(request()->except(['sort_by', 'sort_order']), ['sort_by' => 'day_of_week', 'sort_order' => 'asc'])) }}"><ion-icon name="caret-up-outline"></ion-icon></a>
            <a class="text-muted text-decoration-none" href="{{ route('dance.filter', array_merge(request()->except(['sort_by', 'sort_order']), ['sort_by' => 'day_of_week', 'sort_order' => 'desc'])) }}"><ion-icon name="caret-down-outline"></ion-icon></a></a>
            <!-- Add more sorting options for other fields as needed -->
        </div>

        @if(count($classes) > 0)
            <form id="favoritesForm" action="{{ route('processFavorites') }}" method="post">
                @csrf
            <table id="danceClassTable" class="table my-4">
                <thead>
                <tr>
                    <th>Select</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Dance Style</th>
                    <th>Day</th>
                    <th>Time</th>
{{--                    <th>Enroll</th>--}}
{{--                    <th>Learn More</th>--}}
                </tr>
                </thead>
                <tbody>
                @foreach($classes as $class)
                    <tr>
                        <td>
                            <input type="checkbox" name="selectedClasses[]" value="{{ $class->id }}">
                        </td>
                        <td><strong>{{ $class->name }}</strong></td>
                        <td>{{ $class->age_requirement }}</td>
                        <td>
                            @switch($class->name)
                                @case('Spin & Sparkle')
                                Ballet/Tap/Jazz
                                @break
                                @case('Contemporary/Lyrical')
                                Contemporary/Lyrical
                                @break
                                @case('Ballet/Tap')
                                Ballet/Tap
                                @break
                                @case('Ballet/Jazz')
                                Ballet/Jazz
                                @break
                                @default
                                {{ $class->dance_style }}
                            @endswitch
                        </td>
                        <td>{{ $class->day_of_week }}</td>
                        <td>{{ $class->time }}</td>
{{--                        <td><a href="https://app.akadadance.com/customer/login?schoolId=AK600070J&c=1&danceClassId={{ $class->id }}" target="_blank" class="btn btn-danger" style="height: max-content;">Enroll</a></td>--}}
{{--                        <td>--}}
{{--                            <div>--}}
{{--                                @switch($class->age_requirement)--}}
{{--                                    @case('6mo-2')--}}
{{--                                    <a href="https://www.breakinggrounddance.com/programs/boppin-babies"><img src="/images/jammin-juniors.png" alt="" class="img-fluid" style="height: 100px; width: auto;"></a>--}}
{{--                                    @break--}}
{{--                                    @case('2-4')--}}
{{--                                    <a href="https://www.breakinggrounddance.com/programs/spin-sparkle"><img src="/images/spin-and-sparkle.png" alt="" class="img-fluid" style="height: 100px; width: auto;"></a>--}}
{{--                                    @break--}}
{{--                                    @case('4-6')--}}
{{--                                    <a href="https://www.breakinggrounddance.com/programs/beautiful-beginnings"><img src="/images/beautiful-beginnings.png" alt="" class="img-fluid" style="height: 100px; width: auto;"></a>--}}
{{--                                    @break--}}
{{--                                    @case('7-18')--}}
{{--                                    <a href="https://www.breakinggrounddance.com/programs/core-program"><img src="/images/core-program.png" alt="" class="img-fluid" style="height: 100px; width: auto;"></a>--}}
{{--                                    @break--}}
{{--                                @endswitch--}}
{{--                            </div>--}}
{{--                        </td>--}}
                    </tr>
                @endforeach
                </tbody>
            </table>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-lg btn-primary">Submit Favorites</button>
                </div>
            </form>

            <p class="text-center my-3">
                Great job! You've got some fantastic dance classes to choose from.<br>If you want to fine-tune your preferences feel free to go back and adjust.<br>We're here to help you find the perfect fit!
            </p>
            <div class="d-flex justify-content-center my-3">
                <a href="/dance/form" class="btn btn-outline-danger">Back</a>
            </div>

        @else
            <p class="text-center my-3">Oops! It looks like we couldn't find any matches for your criteria.<br>Feel free to adjust your preferences or reach out to us for personalized assistance!</p>
            <div class="d-flex justify-content-center my-3">
                <a href="/dance/form" class="btn btn-outline-danger">Back</a>
            </div>
        @endif
    </div>
@endsection

<script>
    $(document).ready( function () {
        $('#danceClassTable').DataTable();
    });
</script>
{{--"Discover Your Perfect Dance Classes!"--}}
{{--"Your Personalized Dance Class Selection!"--}}
{{--"Classes Tailored Just for You!"--}}
{{--"Explore Dance Classes That Suit You Best!"--}}
{{--"Here's Your Ideal Dance Class Collection!"--}}
{{--"Unlock Your Ideal Dance Class Experience!"--}}
{{--"Classes Your Kids Will Love!"--}}
{{--"Your Unique Dance Class Recommendations!"--}}
{{--"Dance Classes Curated to Fit Your Style!"--}}
{{--"Classes Your Family Will Enjoy!"--}}
{{--"Your Dance Adventure Starts Here!"--}}
{{--"Personalized Dance Recommendations for You!"--}}
{{--"Discover the Perfect Dance Fit for You!"--}}
{{--"Here Are the Classes That Match Your Style!"--}}

{{--**"Oops! It looks like we couldn't find any matches for your criteria. Feel free to adjust your preferences or reach out to us for personalized assistance!"--}}
{{--**"We're sorry, but it seems there are no classes that perfectly match your criteria. Consider tweaking your preferences or get in touch with us for tailored recommendations!"--}}
{{--**"Oh no! It seems there are no dance classes that fit your criteria at the moment. Don't worry, we're here to help. Feel free to reach out, and we'll assist you in finding the perfect match!"--}}
{{--**"We apologize, but we couldn't find any classes that meet your criteria. If possible, try adjusting your preferences or contact us for a more personalized recommendation!"--}}
{{--**"Unfortunately, we didn't find any classes that match your criteria. No worries, though! You can modify your preferences or connect with us, and we'll gladly assist you in finding the right class."--}}
{{--**"Oops, it seems we couldn't find a perfect match for your criteria. Why not give it another shot with different preferences? If you need assistance, feel free to contact us anytime!"--}}
{{--**"We're sorry to inform you that there are no classes meeting your criteria at the moment. If you'd like, you can tweak your preferences or drop us a message, and we'll be delighted to help you find your ideal class!"--}}
{{--**"Oh dear! It appears there are no matches for your criteria right now. Feel free to make adjustments or get in touch with us for personalized assistance in finding the perfect dance class for you!"--}}
{{--**"We regret to inform you that we couldn't find any classes that align with your criteria. Don't worry, though – let's work together to refine your preferences or reach out for personalized guidance!"--}}
{{--**"We understand it can be disappointing, but currently, there are no classes that match your criteria. Consider adjusting your preferences or contacting us for a more personalized search. We're here to help!"--}}


{{--@switch($class->age_requirement)--}}
{{--    @case('6mo-2')--}}
{{--    <a href="https://www.breakinggrounddance.com/programs/boppin-babies"><strong>Jammin' Juniors</strong></a>--}}
{{--    @break--}}
{{--    @case('2-4')--}}
{{--    <a href="https://www.breakinggrounddance.com/programs/spin-sparkle"><strong>Spin & Sparkle</strong></a>--}}
{{--    @break--}}
{{--    @case('3-6')--}}
{{--    <a href="https://www.breakinggrounddance.com/programs/beautiful-beginnings"><strong>Beautiful Beginnings</strong></a>--}}
{{--    @break--}}
{{--    @case('7-18')--}}
{{--    <a href="https://www.breakinggrounddance.com/programs/core-program"><strong>Core Program</strong></a>--}}
{{--    @break--}}
{{--@endswitch--}}

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const table = document.getElementById("danceClassTable");
        const seen = new Set(); // To track unique row contents

        Array.from(table.rows).slice(1) // Skip the header row by slicing from 1
            .forEach((row) => {
                const rowContent = Array.from(row.cells).map(cell => cell.textContent.trim()).join('|');
                if (seen.has(rowContent)) {
                    // If the row content has been seen, remove the row
                    row.parentNode.removeChild(row);
                } else {
                    // Otherwise, mark this row content as seen
                    seen.add(rowContent);
                }
            });
    });
</script>
