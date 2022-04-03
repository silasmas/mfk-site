@include('parties.entete')
    <!-- Start Main Page Wrapper -->
    <main class="main-page-wrapper spybody" data-spy="scroll" data-target=".navbar-example2" data-offset="150">

     @include('parties.menu')
     @include('pages.banniere')
     @include('pages.about')
     @include('pages.services')
     @include('pages.realisation')

        <div class="bg-image-area-fitness attachment bg_image--10 bg_image">

        </div>

        @include('pages.client')
        @include('pages.temoignage')
        @include('pages.blog')
        @include('pages.contact')
        @include('parties.modal')     

    </main>

  @include('parties.footer')