@extends('layouts.app')
@section('content')

    <div class="banner-wrap">
        <div class="banner">
            <img src="/images/banner-dancers.png" alt="banner" style="width: 100%; height: auto;">
        </div>
    </div>
    @if (session('sendEmail'))
SUCCESS!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    @endif


    <div class="container my-5">
        <h1 class="text-center my-4">Your Selected Classes</h1>

        <table class="table my-4">
            <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Dance Style</th>
                <th>Day</th>
                <th>Time</th>
{{--                <th>Enroll</th>--}}
                <th>Learn More</th>
            </tr>
            </thead>
            <tbody>
            @foreach($selectedClasses as $class)
                <tr>
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
{{--                    <td><a href="https://app.akadadance.com/customer/login?schoolId=AK600070J&c=1&danceClassId={{ $class->id }}" target="_blank" class="btn btn-danger" style="height: max-content;">Enroll</a></td>--}}
                    <td>
                        <div>
                            @switch($class->age_requirement)
                                @case('6 months-24 months')
                                <a href="https://www.breakinggrounddance.com/programs/boppin-babies"><img src="/images/jammin-juniors.png" alt="" class="img-fluid" style="height: 100px; width: auto;"></a>
                                @break
                                @case('2 years')
                                @case('3-4 years')
                                <a href="https://www.breakinggrounddance.com/programs/spin-sparkle"><img src="/images/spin-and-sparkle.png" alt="" class="img-fluid" style="height: 100px; width: auto;"></a>
                                @break
                                @case('5-6 years')
                                <a href="https://www.breakinggrounddance.com/programs/beautiful-beginnings"><img src="/images/beautiful-beginnings.png" alt="" class="img-fluid" style="height: 100px; width: auto;"></a>
                                @break
                                @case('7-9 years')
                                @case('10-13 years')
                                @case('14-18 years')
                                <a href="https://www.breakinggrounddance.com/programs/core-program"><img src="/images/core-program.png" alt="" class="img-fluid" style="height: 100px; width: auto;"></a>
                                @break
                            @endswitch
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="d-flex justify-content-center">
            <!-- Enroll Button -->
            <a href="https://app.akadadance.com/customer/login?schoolId=AK600070J&c=1" target="_blank" class="btn text-white mx-2 btn-primary">Register Now!</a>

            <!-- Download Button -->
            <a href="{{ route('downloadFavorites') }}" class="btn text-white mx-2 btn-red" target="_blank">Download</a>

            <!-- Print Button -->
            <button onclick="window.print()" class="btn text-white mx-2 btn-secondary">Print</button>
        </div>
        <div class="d-flex justify-content-center mt-3">
            <!-- Email Button -->
            <form action="{{ route('sendFavoritesEmail') }}" method="post">
                @csrf
                @method('POST')
                <label for="email">Enter your email:</label>
                <input type="email" name="sendEmail" required>
                <input type="hidden" name="sendEmailFlag" value="1"> <!-- Add hidden input to indicate email sending -->
                <button type="submit" class="btn text-white mx-2 btn-poison" style="background: #95A5A6; border: 1px solid #95A5A6;">
                    Send Favorites via Email
                </button>
            </form>
        </div>

    </div>

@endsection
