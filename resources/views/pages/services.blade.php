   <!-- Start Service Area -->
   <div id="service" class="rn-service-area rn-section-gap section-separator">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="section-title text-left">
                    <span class="subtitle">@lang('general.page.smltTitreService')</span>
                    <h2 class="title">@lang('general.page.TitreService')</h2>
                </div>
            </div>
        </div>
        <div class="row row--25 mt_md--10 mt_sm--10">

            <!-- Start Single Service -->
            <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30" >
                <div class="rn-service">
                    <div class="inner">
                        <div class="icon">
                            <i data-feather="menu"></i>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="#">@lang("general.page.psychologue")</a></h4>
                            <p class="description">
                                {{ Str::limit(__("general.autre.psycho"),100,'..') }}
                            </p>
                            <a class="read-more-button" href="#" ><i class="feather-arrow-right"></i></a>
                        </div>
                    </div>
                    <a class="over-link" href="#" data-toggle="modal" data-target="#modal-service1"></a>
                </div>
            </div>
            <!-- End SIngle Service -->
            <!-- Start Single Service -->
            <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                <div class="rn-service">
                    <div class="inner">
                        <div class="icon">
                            <i data-feather="book-open"></i>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="#">@lang("general.page.artiste")</a></h4>
                            <p class="description">
                                {{ Str::limit(__("general.autre.music"),100,'..') }}
                            </p>
                            <a class="read-more-button" href="#"><i class="feather-arrow-right"></i></a>
                        </div>
                    </div>
                    <a class="over-link" href="#"  data-toggle="modal" data-target="#modal-service2"></a>
                </div>
            </div>
            <!-- End SIngle Service -->
            <!-- Start Single Service -->
            <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                <div class="rn-service">
                    <div class="inner">
                        <div class="icon">
                            <i data-feather="tv"></i>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="#">@lang("general.page.humour")</a></h4>
                            <p class="description">
                                {{ Str::limit(__("general.autre.humour"),100,'..') }}
                            </p>
                            <a class="read-more-button" href="#"><i class="feather-arrow-right"></i></a>
                        </div>
                    </div>
                    <a class="over-link" href="#"  data-toggle="modal" data-target="#modal-service3"></a>
                </div>
            </div>
            <!-- End SIngle Service -->

        </div>
    </div>
</div>
<!-- End Service Area  -->
