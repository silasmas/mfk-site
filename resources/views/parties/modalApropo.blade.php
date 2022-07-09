 <!-- Modal Blog Body area Start -->
 <div class="modal fade" id="modal-about" tabindex="-1" role="dialog" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-news" role="document">
         <div class="modal-content">

             <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true"><i data-feather="x"></i></span>
                 </button>
             </div>

             <!-- End of .modal-header -->

             <div class="modal-body">
                 <img src="assets/photos/ph8.jpeg" alt="news modal" class="img-fluid modal-feat-img">
                 <div class="news-details">
                     <h2 class="title">
                         @lang('general.page.titreAbout')
                     </h2>
                     <p>
                         @lang('general.autre.about')
                     </p>

                 </div>

             </div>
             <!-- End of .modal-body -->
         </div>
     </div>
 </div>
 <!-- End Modal Blog area -->
 <!-- Modal SeRVICe -->
 <div class="modal fade" id="modal-service1" tabindex="-1" role="dialog" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-news" role="document">
         <div class="modal-content">

             <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true"><i data-feather="x"></i></span>
                 </button>
             </div>

             <!-- End of .modal-header -->

             <div class="modal-body">
                 <img src="{{ asset('assets/images/portfolio/ph3.png') }}" alt="news modal"
                     class="img-fluid modal-feat-img">
                 <div class="news-details">
                     <h2 class="title">@lang('general.page.psychologue')</h2>
                     <p>
                         @lang('general.autre.psycho')
                     </p>
                 </div>

                 <!-- Comment Section Area Start -->
                 <div class="comment-inner">
                     <h3 class="title mb--40 mt--50">Leave a Reply</h3>
                     <form action="#">
                         <div class="row">
                             <div class="col-lg-6 col-md-12 col-12">
                                 <div class="rnform-group"><input type="text" placeholder="Name">
                                 </div>
                                 <div class="rnform-group"><input type="email" placeholder="Email">
                                 </div>
                                 <div class="rnform-group"><input type="text" placeholder="Website">
                                 </div>
                             </div>
                             <div class="col-lg-6 col-md-12 col-12">
                                 <div class="rnform-group">
                                     <textarea placeholder="Comment"></textarea>
                                 </div>
                             </div>
                             <div class="col-lg-12">
                                 <a class="rn-btn" href="#"><span>SUBMIT NOW</span></a>
                             </div>
                         </div>
                     </form>
                 </div>
                 <!-- Comment Section End -->
             </div>
             <!-- End of .modal-body -->
         </div>
     </div>
 </div>
 <div class="modal fade" id="modal-service2" tabindex="-1" role="dialog" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-news" role="document">
         <div class="modal-content">

             <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true"><i data-feather="x"></i></span>
                 </button>
             </div>

             <!-- End of .modal-header -->

             <div class="modal-body">
                 <img src="{{ asset('assets/images/portfolio/ph3.png') }}" alt="news modal"
                     class="img-fluid modal-feat-img">
                 <div class="news-details">
                     <h2 class="title">
                        @lang("general.page.artiste")
                     </h2>
                     <p>
@lang("general.autre.music")
                     </p>
                 </div>
             </div>
             <!-- End of .modal-body -->
         </div>
     </div>
 </div>
 <div class="modal fade" id="modal-service3" tabindex="-1" role="dialog" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-news" role="document">
         <div class="modal-content">

             <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true"><i data-feather="x"></i></span>
                 </button>
             </div>

             <!-- End of .modal-header -->

             <div class="modal-body">
                 <img src="{{ asset('assets/images/portfolio/ph3.png') }}" alt="news modal"
                     class="img-fluid modal-feat-img">
                 <div class="news-details">
                     <h2 class="title">@lang("general.page.humour")</h2>
                     <p>
@lang("general.autre.humour")
                     </p>
                 </div>
             </div>
             <!-- End of .modal-body -->
         </div>
     </div>
 </div>
 <!-- End Modal service -->
 <!-- Back to  top Start -->
 <div class="backto-top">
     <div>
         <i data-feather="arrow-up"></i>
     </div>
 </div>
 <!-- Back to top end -->
