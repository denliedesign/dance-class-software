{{--<div class="bg-white mb-4">--}}
{{--    <div class="container">--}}
{{--        <div id="next-steps-copy" class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3 d-flex justify-content-center bg-white pt-5 pb-3" style="font-size: 0.85em;">--}}
{{--            <div class="next-step mt-3 mt-md-0 shadow">--}}
{{--                <p class="txt-red"><strong>Ready To Leap In?</strong></p>--}}
{{--                <a href="https://app.akadadance.com/customer/login?schoolId=AK600070J&c=1" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-red btn-family">&#10097; Enroll today!</div></a>--}}
{{--            </div>--}}
{{--            --}}{{--            <div class="next-step mt-3 mt-md-0 shadow">--}}
{{--            --}}{{--                <p class="txt-blue">Want To Give It A Try?</p>--}}
{{--            --}}{{--                <div>--}}
{{--            --}}{{--                    <button type="button" class="shadow btn btn-lg btn-blue btn-family btn-opacity" data-bs-toggle="modal" data-bs-target="#exampleModal">&#10097; Schedule A Trial!</button>--}}
{{--            --}}{{--                </div>--}}
{{--            --}}{{--            </div>--}}
{{--            <div class="next-step mt-3 mt-md-0 shadow">--}}
{{--                <p class="txt-red"><strong>Still Have Questions?</strong></p>--}}
{{--                <a href="#footer" class="btn-opacity"><div class="shadow btn btn-lg btn-red-outline btn-family">&#10097; Contact Us!</div></a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<div style="background: #333; color: white;">
    <div class="container">
        <div class="pt-4 pb-1" id="footer">
            <div class="row">
                <div class="col-sm-3">
                    <h5 style="text-decoration: underline;">Contact Us</h5>
                    <p>
                        <ion-icon name="mail"></ion-icon>
                        <a class="text-white" style="text-decoration: none;" href="mailto:breakinggrounddance@hotmail.com">breakinggrounddance@hotmail.com</a>
                        <br><br>
                        <ion-icon name="call"></ion-icon>
                        914-747-3150
                        <br><br>
                        <ion-icon name="pin"></ion-icon>
                        101 Castleton Street,
                        <br>Pleasantville, NY 10570
                    </p>
                    <a href="/">
                        <img src="/images/bgdc-logo-white.png" alt="logo" class="img-fluid pb-2">
                    </a>
                </div>
                <div class="col-sm-3">
                    <h5 style="text-decoration: underline;">NAV</h5>
                    <ul id="footer-nav">
                        {{--                        <li>--}}
                        {{--                            <a href="/studio-livestream">Live Stream</a>--}}
                        {{--                        </li>--}}
                        <li>
                            <a href="https://keap.page/ol717/nhsda-requirements.html" target="_blank">National Honor Society of Dance Arts</a>
                        </li>
                        {{--                        <li>--}}
                        {{--                            <a href="https://youtu.be/lcFVd9_ge50" data-bs-toggle="modal" data-bs-target="#studioModal">Studio</a>--}}
                        {{--                        </li>--}}
                        {{--                        <li>--}}
                        {{--                            <a href="https://keap.app/booking/breakinggrounddancecenter1/bgdc-tourmeeting" target="_blank">Schedule A Tour</a>--}}
                        {{--                        </li>--}}
                        <li>
                            <a href="https://lt0z2swo.pages.infusionsoft.net/?cookieUUID=98545221-b97f-4ed5-8371-455cbede6dc8&affiliate=0" target="_blank">Request Makeup Class</a>
                        </li>
                        <li>
                            <a href="https://keap.page/ol717/studio-protocols.html" target="_blank">Studio Protocols</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm mb-3">
                    <form method="POST">
                        <div class="mb-3">
                            <input type="hidden" name="my_name" id="my_name" value="">
                            <input type="checkbox" name="contact_me_by_fax_only" id="contact_me_by_fax_only" value="1" tabindex="-1" autocomplete="off" class="d-none">
                            <label for="name" class="form-label">Name</label>
                            <input type="name" class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea name="message" class="form-control" id="message" rows="3"></textarea>
                        </div>
                        @csrf
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
                <div class="col-sm">
                    <div style="width: 100%"><iframe width="100%" height="335" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=101%20Castleton%20Street,%20Pleasantville,%20NY%2010570+(Breaking%20Ground%20Dance)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-3">
                <div class="mx-3">
                    <small>
                        <a class="text-decoration-none text-secondary" href="https://denliedesign.com" target="_blank">
                            Dance Website Design by Denlie Design
                        </a>
                    </small>
                </div>
                <div class="mx-3">
                    <small>
                        @guest
                            <a class="text-decoration-none text-secondary" href="{{ route('login') }}">{{ __('Staff Login') }}</a>
                        @else
                            <a class="text-decoration-none text-secondary" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @endguest
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="studioModal" tabindex="-1" aria-labelledby="studioModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="studioModalLabel">Studio Tour</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/lcFVd9_ge50" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            {{--            <div class="modal-footer">--}}
            {{--                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>--}}
            {{--            </div>--}}
        </div>
    </div>
</div>

<script>
    $('#studioModal').on('hidden.bs.modal', function (e) {
        // do something...
        $('#studioModal iframe').attr("src", jQuery("#studioModal  iframe").attr("src"));
    });
</script>
