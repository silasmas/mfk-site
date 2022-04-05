    <!-- Start Contact section -->
    <div class="rn-contact-area rn-section-gap section-separator" id="contacts">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="subtitle">@lang('general.menu.contact')</span>
                        <h2 class="title">@lang('general.page.contact')</h2>
                    </div>
                </div>
            </div>
            <div class="row mt--50 mt_md--40 mt_sm--40 mt-contact-sm">
                <div class="col-lg-5">
                    <div class="contact-about-area">
                        <div class="thumbnail">
                            <img src="{{asset('assets/photos/ph9.jpeg')}}" alt="contact-img">
                        </div>
                        <div class="title-area">
                            <h4 class="title">Nevine Acotanza</h4>
                            <span>Chief Operating Officer</span>
                        </div>
                        <div class="description">
                            <p>I am available for freelance work. Connect with me via and call in to my account.
                            </p>
                            <span class="phone">Phone: <a href="tel:01941043264">+01234567890</a></span>
                            <span class="mail">Email: <a href="mailto:admin@example.com">admin@example.com</a></span>
                        </div>
                        <div class="social-area">
                            <div class="name">FIND WITH ME</div>
                            <div class="social-icone">
                                <a href="#"><i data-feather="facebook"></i></a>
                                <a href="#"><i data-feather="linkedin"></i></a>
                                <a href="#"><i data-feather="instagram"></i></a>
                                <a href="#"><i data-feather="youtube"></i></a>
                                <a href="#"><i data-feather="twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos-delay="600" class="col-lg-7 contact-input">
                    <div class="contact-form-wrapper">
                        <div class="introduce">

                            <form class="rnt-contact-form rwt-dynamic-form row" id="contact-form" method="POST" action="mail.php">

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="contact-name">Your Name</label>
                                        <input class="form-control form-control-lg" name="contact-name" id="contact-name" type="text">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="contact-phone">Phone Number</label>
                                        <input class="form-control" name="contact-phone" id="contact-phone" type="text">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="contact-email">Email</label>
                                        <input class="form-control form-control-sm" id="contact-email" name="contact-email" type="email">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="subject">subject</label>
                                        <input class="form-control form-control-sm" id="subject" name="subject" type="text">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="contact-message">Your Message</label>
                                        <textarea name="contact-message" id="contact-message" cols="30" rows="10"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <button name="submit" type="submit" id="submit" class="rn-btn">
                                        <span>SEND MESSAGE</span>
                                        <i data-feather="arrow-right"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contuct section -->
