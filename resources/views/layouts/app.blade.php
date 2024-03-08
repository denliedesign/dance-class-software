<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Breaking Ground Dance Center</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Courgette&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Montserrat&family=Playfair+Display&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap');
        </style>

        <!-- Scripts -->
        <!-- for sorting -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
        <!-- end for sorting -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/css/style.css">
{{--        @vite(['resources/css/app.css', 'resources/js/app.js'])--}}
    </head>
    <body>
    @include('nav')
    @yield('content')
    @include('footer')
    </body>
</html>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const selectAllStylesButton = document.getElementById('selectAllStyles');
        const styleCheckboxes = document.querySelectorAll('input[name="dance_style[]"]');

        selectAllStylesButton.addEventListener('click', function() {
            const isChecked = styleCheckboxes[0].checked; // Use the first checkbox as a reference
            styleCheckboxes.forEach(checkbox => {
                checkbox.checked = !isChecked; // Toggle the checkboxes
            });
        });

        const selectAllDaysButton = document.getElementById('selectAllDays');
        const dayCheckboxes = document.querySelectorAll('input[name="day_of_week[]"]');

        selectAllDaysButton.addEventListener('click', function() {
            const isChecked = dayCheckboxes[0].checked; // Use the first checkbox as a reference
            dayCheckboxes.forEach(checkbox => {
                checkbox.checked = !isChecked; // Toggle the checkboxes
            });
        });
    });
</script>
