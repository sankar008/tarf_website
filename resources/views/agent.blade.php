<x-header-component/>
 
           <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-image "  style="background-image:url('{{ asset('fontassets/img/innerBanner.png')}}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title text-color-white" data-aos="fade-right" data-aos-duration="3000">Our agent</h1>
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


    <div class="ltn__team-area pt-110--- pt-5 section-bg-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <h1 class="section-title" data-aos="fade-right" data-aos-duration="3000">Our Agents</h1>
                </div>
                @foreach($data as $val)
                <div class="col-lg-4 col-sm-6">
                    <div class="ltn__team-item ltn__team-item-3---">
                        <div class="team-img">
                            <img src="{{ $val -> image }}" alt="Image">
                        </div>
                        <div class="team-info">
                            <h4><a href="#">{{ $val -> name }}</a></h4>
                            <h6 class="ltn__secondary-color">{{ $val -> email }}</h6>
                            <h6 class="ltn__secondary-color">+1{{ $val -> mobile_no }}</h6>

                            <!-- <div class="ltn__social-media">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                </div>              
               @endforeach
            </div>
        </div>
    </div>


<x-footer-component/>