    <!-- Start about Area -->
    <div id="about" class="rn-about-area rn-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100" data-aos-once="true" class="image-area">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/photos/ph8.jpeg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 mt_sm--30">
                    <div class="contant">
                        <div class="section-title text-left">
                            <span class="subtitle">@lang('general.page.smlTitreAbour')</span>
                            <h2 class="title">@lang('general.page.titreAbout')</h2>
                        </div>
                        <p class="discription">
                          {{Str::limit(__('general.autre.about'),1300,"...")}}
                        </p>

                        {{-- <a class="rn-btn" href="#"
                        data-toggle="modal" data-target="#modal-about"><span>@lang('general.page.btnAbout')</span>
                    </a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End about Area -->
