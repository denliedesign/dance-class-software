<form action="{{ route('dance.filter') }}" method="post">
    @csrf

    {{--            <h2 class="text-center mt-3"><label class="form-label" for="ages">Age</label></h2>--}}
    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-4 row-cols-lg-4" style="position: relative;">
        <div class="my-3">
            <input type="checkbox" class="form-check-input checkbox-image" id="age_6mo_2" name="ages[]" value="6mo - 2">
            <label class="form-check-label checkbox-image-label me-2" for="age_6mo_2">
                <div style="position:relative; width: 100%;">
                    <img src="/images/classes-6mo-2.jpg" alt="" class="img-fluid rounded shadow mb-3" style="max-height: 430px; width: auto;">
                    <div style="position: absolute; bottom: 12px; left: 0; z-index: 3; width: 100%;">
                        <p class="class-card-text">6mo-2 years old</p>
                    </div>
                </div>
            </label>
        </div>

        <div class="my-3">
            <input type="checkbox" class="form-check-input checkbox-image" id="age_2_4" name="ages[]" value="2 - 4">
            <label class="form-check-label checkbox-image-label me-2" for="age_2_4">
                <div style="position:relative; width: 100%;">
                    <img src="/images/classes-2-4.jpg" alt="" class="img-fluid rounded shadow mb-3" style="max-height: 430px; width: auto;">
                    <div style="position: absolute; bottom: 12px; left: 0; z-index: 3; width: 100%;">
                        <p class="class-card-text">2-4 years old</p>
                    </div>
                </div>
            </label>
        </div>

        <div class="my-3">
            <input type="checkbox" class="form-check-input checkbox-image" id="age_4_6" name="ages[]" value="4 - 6">
            <label class="form-check-label checkbox-image-label me-2" for="age_4_6">
                <div style="position:relative; width: 100%;">
                    <img src="/images/classes-4-6.jpg" alt="" class="img-fluid rounded shadow mb-3" style="max-height: 430px; width: auto;">
                    <div style="position: absolute; bottom: 12px; left: 0; z-index: 3; width: 100%;">
                        <p class="class-card-text">4-6 years old</p>
                    </div>
                </div>
            </label>
        </div>

        <div class="my-3">
            <input type="checkbox" class="form-check-input checkbox-image" id="age_7_18" name="ages[]" value="7 - 18">
            <label class="form-check-label checkbox-image-label me-2" for="age_7_18">
                <div style="position:relative; width: 100%;">
                    <img src="/images/classes-7-18.jpg" alt="" class="img-fluid rounded shadow mb-3" style="max-height: 430px; width: auto;">
                    <div style="position: absolute; bottom: 12px; left: 0; z-index: 3; width: 100%;">
                        <p class="class-card-text">7-18 years old</p>
                    </div>
                </div>
            </label>
        </div>
        <div class="quick p-0 m-0" style="position: absolute; right: -93px; z-index: 4; bottom: 0; font-size: 100px; transform: rotate(90deg) translate(-50%, -50%);">ages</div>

        <!-- Add more checkboxes for each age -->
    </div>

    <div class="mb-3"></div>
    {{--            <h2 class="text-center"><label class="form-label" for="dance_style">Dance Styles</label></h2>--}}
    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-4 row-cols-lg-4">
        <div class="d-flex align-items-center justify-content-center">
            <div class="quick p-0 m-0" style="font-size: 100px; transform: rotate(-90deg);">&nbsp;styles</div>
        </div>
        <div class="my-3">
            <input type="checkbox" class="form-check-input checkbox-image" id="dance_style_ballet" name="dance_style[]" value="Ballet">
            <label class="form-check-label checkbox-image-label me-2" for="dance_style_ballet">
                <div style="position:relative; width: 100%;">
                    <img src="/images/classes-ballet.jpg" alt="" class="img-fluid rounded shadow mb-3" style="max-height: 430px; width: auto;">
                    <div style="position: absolute; bottom: 12px; left: 0; z-index: 3; width: 100%;">
                        <p class="class-card-text">Ballet</p>
                    </div>
                </div>
            </label>
        </div>

        <div class="my-3">
            <input type="checkbox" class="form-check-input checkbox-image" id="dance_style_tap" name="dance_style[]" value="Tap">
            <label class="form-check-label checkbox-image-label me-2" for="dance_style_tap">
                <div style="position:relative; width: 100%;">
                    <img src="/images/classes-tap.jpg" alt="" class="img-fluid rounded shadow mb-3" style="max-height: 430px; width: auto;">
                    <div style="position: absolute; bottom: 12px; left: 0; z-index: 3; width: 100%;">
                        <p class="class-card-text">Tap</p>
                    </div>
                </div>
            </label>
        </div>

        <div class="my-3">
            <input type="checkbox" class="form-check-input checkbox-image" id="dance_style_jazz" name="dance_style[]" value="Jazz">
            <label class="form-check-label checkbox-image-label me-2" for="dance_style_jazz">
                <div style="position:relative; width: 100%;">
                    <img src="/images/classes-jazz.jpg" alt="" class="img-fluid rounded shadow mb-3" style="max-height: 430px; width: auto;">
                    <div style="position: absolute; bottom: 12px; left: 0; z-index: 3; width: 100%;">
                        <p class="class-card-text">Jazz</p>
                    </div>
                </div>
            </label>
        </div>

        <div class="my-3">
            <input type="checkbox" class="form-check-input checkbox-image" id="dance_style_hip_hop" name="dance_style[]" value="Hip Hop">
            <label class="form-check-label checkbox-image-label me-2" for="dance_style_hip_hop">
                <div style="position:relative; width: 100%;">
                    <img src="/images/classes-hip-hop.jpg" alt="" class="img-fluid rounded shadow mb-3" style="max-height: 430px; width: auto;">
                    <div style="position: absolute; bottom: 12px; left: 0; z-index: 3; width: 100%;">
                        <p class="class-card-text">Hip Hop</p>
                    </div>
                </div>
            </label>
        </div>

        <div class="my-3">
            <input type="checkbox" class="form-check-input checkbox-image" id="dance_style_contemporary" name="dance_style[]" value="Contemporary">
            <label class="form-check-label checkbox-image-label me-2" for="dance_style_contemporary">
                <div style="position:relative; width: 100%;">
                    <img src="/images/classes-contemporary.jpg" alt="" class="img-fluid rounded shadow mb-3" style="max-height: 430px; width: auto;">
                    <div style="position: absolute; bottom: 12px; left: 0; z-index: 3; width: 100%;">
                        <p class="class-card-text">Contemporary</p>
                    </div>
                </div>
            </label>
        </div>

        <div class="my-3">
            <input type="checkbox" class="form-check-input checkbox-image" id="dance_style_acro" name="dance_style[]" value="Acro">
            <label class="form-check-label checkbox-image-label me-2" for="dance_style_acro">
                <div style="position:relative; width: 100%;">
                    <img src="/images/classes-acro.jpg" alt="" class="img-fluid rounded shadow mb-3" style="max-height: 430px; width: auto;">
                    <div style="position: absolute; bottom: 12px; left: 0; z-index: 3; width: 100%;">
                        <p class="class-card-text">Acro</p>
                    </div>
                </div>
            </label>
        </div>

        <div class="my-3">
            <input type="checkbox" class="form-check-input checkbox-image" id="dance_style_musical_theater" name="dance_style[]" value="Musical Theater">
            <label class="form-check-label checkbox-image-label me-2" for="dance_style_musical_theater">
                <div style="position:relative; width: 100%;">
                    <img src="/images/classes-musical-theater.jpg" alt="" class="img-fluid rounded shadow mb-3" style="max-height: 430px; width: auto;">
                    <div style="position: absolute; bottom: 12px; left: 0; z-index: 3; width: 100%;">
                        <p class="class-card-text">Musical Theater</p>
                    </div>
                </div>
            </label>
        </div>
        <!-- Add more checkboxes for each dance style -->
    </div>


    <div class="mb-3"></div>
    {{--            <h2 class="text-center"><label class="form-label" for="days_of_week">Days of the Week</label></h2>--}}
    <div class="quick p-0 m-0 text-center" style="font-size: 100px;">&nbsp;days</div>
    <div class="d-flex justify-content-center">
        <input type="checkbox" class="form-check-input" id="day_monday" name="days_of_week[]" value="Monday">
        <label class="form-check-label ms-1 me-3" for="day_monday">Monday</label>

        <input type="checkbox" class="form-check-input" id="day_tuesday" name="days_of_week[]" value="Tuesday">
        <label class="form-check-label ms-1 me-3" for="day_tuesday">Tuesday</label>

        <input type="checkbox" class="form-check-input" id="day_wednesday" name="days_of_week[]" value="Wednesday">
        <label class="form-check-label ms-1 me-3" for="day_wednesday">Wednesday</label>

        <input type="checkbox" class="form-check-input" id="day_thursday" name="days_of_week[]" value="Thursday">
        <label class="form-check-label ms-1 me-3" for="day_thursday">Thursday</label>

        <input type="checkbox" class="form-check-input" id="day_friday" name="days_of_week[]" value="Friday">
        <label class="form-check-label ms-1 me-3" for="day_friday">Friday</label>

        <input type="checkbox" class="form-check-input" id="day_saturday" name="days_of_week[]" value="Saturday">
        <label class="form-check-label ms-1 me-3" for="day_saturday">Saturday</label>

        <input type="checkbox" class="form-check-input" id="day_sunday" name="days_of_week[]" value="Sunday">
        <label class="form-check-label ms-1 me-3" for="day_sunday">Sunday</label>
        <!-- Add more checkboxes for each day of the week -->
    </div>

    <div class="d-flex justify-content-center mt-4">
        <button type="submit" class="btn btn-lg btn-danger">Find Your Classes</button>
    </div>
</form>
