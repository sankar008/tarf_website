<x-header-component/>
       <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-image " style="background-image:url('{{ asset('fontassets/img/innerBanner.png')}}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title text-color-white" data-aos="fade-right" data-aos-duration="3000">About Us</h1>
                        <div class="ltn__breadcrumb-list" data-aos="fade-down" data-aos-duration="3000">
                            <!-- <ul>
                                <li><a href="index-2.html"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                                <li>About Us</li>
                            </ul> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- ABOUT US AREA START -->
    <div class="ltn__about-us-area py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="about-us-img-wrap about-img-left">
                        <img src="{{ asset($data -> image_1) }}" alt="About Us Image" data-aos="fade-up"
     data-aos-duration="3000">
                        <div class="about-us-img-info about-us-img-info-2 about-us-img-info-3">
                            
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="about-us-info-wrap">
                        <div class="section-title-area ltn__section-title-2--- mb-20">
                            <h6 data-aos="fade-down" data-aos-duration="3000" class="section-subtitle section-subtitle-2 ltn__secondary-color">About Us</h6>
                            <h1 class="section-title" data-aos="fade-right" data-aos-duration="3000">{{ $data -> title_1 }}<span>.</span></h1>
                             {!! $data -> details_1 !!}
                        </div>
                        
                        <div class="btn-wrapper animated" data-aos="zoom-in" data-aos-duration="3000">
                            <!-- <a href="#" class="theme-btn-1 btn btn-effect-1">Learn More</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT US AREA END -->
    <!-- ABOUT US AREA START -->
    <div class="ltn__about-us-area py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="about-us-info-wrap">
                        <div class="section-title-area ltn__section-title-2--- mb-30">                           
                            <h1 class="section-title" data-aos="fade-down" data-aos-duration="3000">{{ $data -> title_2 }}</h1>
                            {!! $data -> details_2 !!}
                        </div>                     
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="about-us-img-wrap about-img-right">
                        <img src="{{ asset($data -> image_2) }}" alt="About Us Image" data-aos="zoom-in" data-aos-duration="3000">
                    </div>
                </div>
            </div>
        </div>
    </div>
<x-footer-component/>