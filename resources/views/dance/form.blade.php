@extends('layouts.app')
@section('content')

    <div class="banner-wrap">
        <div class="banner">
            <img src="/images/banner-dancers.png" alt="banner" style="width: 100%; height: auto;">
        </div>
    </div>

    <div class="container my-5">
        <p class="text-center"><em>Welcome to our brand new dance class search feature!<br>You're steps away from finding the perfect dance class tailored just for you and your family.</em></p>
        <hr class="my-3" style="width: 60%; margin: 0 auto;">
        <h1 class="text-center">Family Flex Scheduler</h1>
        <h1 class="text-center"><span style="font-size: 0.7em;">Discover Your Perfect Dance Class<br>Easy as 1-2-3! <ion-icon name="checkbox" style="color: #DC3545;"></ion-icon></span></h1>
        <hr class="my-3" style="width: 60%; margin: 0 auto;">
        <p class="text-center">
            Select as many options as you’re interested in.
{{--            Welcome to our brand new dance class search feature. Select as many options as you’re interested in.--}}
{{--            <br>--}}
{{--            <span style="font-weight: bold; font-size: 1.5em;"></span>--}}
        </p>


    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('dance.filter') }}" method="post">
            @csrf

            <div class="mb-5"></div>
            <div>
                <div class="d-flex align-items-center justify-content-center quick p-0 m-0 text-center" style="font-size: 100px;"><span class="numero d-flex align-items-center"><span style="font-size: 25px;">step</span> 1</span>&nbsp;ages</div>
            </div>
            <div class="d-flex justify-content-center mt-2">
                <x-checkbox category="age_requirement" info="6 months-24 months" />
                <x-checkbox category="age_requirement" info="2 years" />
                <x-checkbox category="age_requirement" info="3-4 years" />
                <x-checkbox category="age_requirement" info="5-6 years" />
                <x-checkbox category="age_requirement" info="7-9 years" />
                <x-checkbox category="age_requirement" info="10-13 years" />
                <x-checkbox category="age_requirement" info="14-18 years" />
            </div>

            <div class="mb-5"></div>
            <div>
                <div class="d-flex align-items-center justify-content-center quick p-0 m-0 text-center" style="font-size: 100px;"><span class="numero d-flex align-items-center"><span style="font-size: 25px;">step</span> 2</span>&nbsp;styles</div>
            </div>
            <div class="d-flex justify-content-center mt-2">
                <x-checkbox category="dance_style" info="ballet" />
                <x-checkbox category="dance_style" info="tap" />
                <x-checkbox category="dance_style" info="jazz" />
                <x-checkbox category="dance_style" info="hip hop" />
                <x-checkbox category="dance_style" info="contemporary" />
                <x-checkbox category="dance_style" info="Acro" />
                <x-checkbox category="dance_style" info="musical theater" />
                <input type="checkbox" class="form-check-input" id="creative_dance" name="dance_style[]" value="Creative Dance" checked hidden>
                <label class="form-check-label ms-1 me-3" for="creative_dance"></label>

                <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-primary" id="selectAllStyles">Select All</button>
                </div>
            </div>

            <div class="mb-5"></div>
            <div>
                <div class="d-flex align-items-center justify-content-center quick p-0 m-0 text-center" style="font-size: 100px;"><span class="numero d-flex align-items-center"><span style="font-size: 25px;">step</span> 3</span>&nbsp;days</div>
            </div>
            <div class="d-flex justify-content-center mt-2">
                <x-checkbox category="day_of_week" info="Monday" />
                <x-checkbox category="day_of_week" info="Tuesday" />
                <x-checkbox category="day_of_week" info="Wednesday" />
                <x-checkbox category="day_of_week" info="Thursday" />
                <x-checkbox category="day_of_week" info="Friday" />
                <x-checkbox category="day_of_week" info="Saturday" />
                <x-checkbox category="day_of_week" info="Sunday" />
                <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-primary" id="selectAllDays">Select All</button>
                </div>
            </div>

            <div class="d-flex justify-content-center mt-5">
                <button type="submit" class="btn btn-lg btn-danger">Find Your Classes</button>
            </div>
        </form>
    </div>
@endsection
