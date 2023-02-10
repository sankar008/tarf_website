<x-header-component/>
       <!-- SLIDER AREA START (slider-4) -->
       <div class="ltn__slider-area ltn__slider-4">
        <div class="ltn__slide-one-active----- slick-slide-arrow-1----- slick-slide-dots-1----- arrow-white----- ltn__slide-animation-active">
            <!-- ltn__slide-item -->
            <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-4 bg-image bg-overlay-theme-black-60" style="background-image:url('{{ asset($slider -> image)}}')">
                <div class="bannerContant">
                    <h2>{{ $slider -> title }}</h2>
                    <p class="text-white text-center">
                      {!! $slider -> details !!}
                    </p>
                    <div class="btn-wrapper">
                        <a href="{{ route('whyus') }}" class="theme-btn-1 btn reverse-color btn-block" type="submit">Why Us</a>
                    </div>
                </div>
                <div class="ltn__slide-item-inner text-left d-none">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                                <div class="slide-item-car-dealer-form">
                                    <div class="ltn__car-dealer-form-tab">
                                        
                                        <div class="tab-content">
                                            <div class="tab-pane fade active show" id="ltn__form_tab_1_1">
                                                <div class="car-dealer-form-inner">
                                                    <form action="#" class="ltn__car-dealer-form-box row">
                                                        <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-calendar col-lg-4 col-md-6">
                                                            <select class="nice-select">
                                                                <option>Property Type</option>
                                                                <option>Apartment</option>
                                                                <option>Co-op</option>
                                                                <option>Condo</option>
                                                                <option>Single Family Home</option>
                                                            </select>
                                                        </div> 
                                                        <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-car col-lg-4 col-md-6">
                                                            <select class="nice-select">
                                                                <option>Location</option>
                                                                <option>chicago</option>
                                                                <option>London</option>
                                                                <option>Los Angeles</option>
                                                                <option>New York</option>
                                                                <option>New Jersey</option>
                                                            </select>
                                                        </div> 
                                                        <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-meter col-lg-4 col-md-6">
                                                            <select class="nice-select">
                                                                <option>Sub Location</option>
                                                                <option>Bayonne</option>
                                                                <option>Greenville</option>
                                                                <option>Manhattan</option>
                                                                <option>Queens</option>
                                                                <option>The Heights</option>
                                                                <option>Upper East Side</option>
                                                                <option>West Side</option>
                                                            </select>
                                                        </div> 
                                                        <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-ring col-lg-4 col-md-6">
                                                            <select class="nice-select">
                                                                <option>Bedrooms</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                            </select>
                                                        </div> 
                                                        <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-cog col-lg-4 col-md-6">                                                            
                                                            <div class="input-item input-item-name ltn__custom-icon">
                                                                <input type="text" name="name" placeholder="Min size (in sqft)">
                                                            </div>
                                                        </div> 
                                                        <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-cog col-lg-4 col-md-6">                                                            
                                                            <div class="input-item input-item-name ltn__custom-icon">
                                                                <input type="text" name="name" placeholder="Max size (in sqft)">
                                                            </div>
                                                        </div> 
                                                        <div class="car-price-filter-range col-lg-12">
                                                            <div class="price_filter">
                                                                <div class="price_slider_amount">
                                                                    <input type="submit"  value="Your range:"/> 
                                                                    <input type="text" class="amount" name="price"  placeholder="Add Your Price" /> 
                                                                </div>
                                                                <div class="slider-range"></div>
                                                            </div>
                                                            <div class="btn-wrapper text-center">
                                                                <a href="shop-right-sidebar.html" class="btn theme-btn-1 btn-effect-1 text-uppercase">Search Inventory</a>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="ltn__form_tab_1_2">
                                                <div class="car-dealer-form-inner">
                                                    <form action="#" class="ltn__car-dealer-form-box row">
                                                        <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-calendar col-lg-4 col-md-6">
                                                            <select class="nice-select">
                                                                <option>Property Type</option>
                                                                <option>Apartment</option>
                                                                <option>Co-op</option>
                                                                <option>Condo</option>
                                                                <option>Single Family Home</option>
                                                            </select>
                                                        </div> 
                                                        <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-car col-lg-4 col-md-6">
                                                            <select class="nice-select">
                                                                <option>Location</option>
                                                                <option>chicago</option>
                                                                <option>London</option>
                                                                <option>Los Angeles</option>
                                                                <option>New York</option>
                                                                <option>New Jersey</option>
                                                            </select>
                                                        </div> 
                                                        <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-meter col-lg-4 col-md-6">
                                                            <select class="nice-select">
                                                                <option>Sub Location</option>
                                                                <option>Bayonne</option>
                                                                <option>Greenville</option>
                                                                <option>Manhattan</option>
                                                                <option>Queens</option>
                                                                <option>The Heights</option>
                                                                <option>Upper East Side</option>
                                                                <option>West Side</option>
                                                            </select>
                                                        </div> 
                                                        <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-ring col-lg-4 col-md-6">
                                                            <select class="nice-select">
                                                                <option>Bedrooms</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                            </select>
                                                        </div> 
                                                        <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-cog col-lg-4 col-md-6">                                                            
                                                            <div class="input-item input-item-name ltn__custom-icon">
                                                                <input type="text" name="name" placeholder="Min size (in sqft)">
                                                            </div>
                                                        </div> 
                                                        <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-cog col-lg-4 col-md-6">                                                            
                                                            <div class="input-item input-item-name ltn__custom-icon">
                                                                <input type="text" name="name" placeholder="Max size (in sqft)">
                                                            </div>
                                                        </div> 
                                                        <div class="car-price-filter-range col-lg-12">
                                                            <div class="price_filter">
                                                                <div class="price_slider_amount">
                                                                    <input type="submit"  value="Your range:"/> 
                                                                    <input type="text" class="amount" name="price"  placeholder="Add Your Price" /> 
                                                                </div>
                                                                <div class="slider-range"></div>
                                                            </div>
                                                            <div class="btn-wrapper text-center">
                                                                <!-- <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase">Search Inventory</button> -->
                                                                <a href="shop-right-sidebar.html" class="btn theme-btn-1 btn-effect-1 text-uppercase">Search Inventory</a>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                        
                                </div>
                            </div>
                        </div>
                    </div>William
                </div>
            </div>
        </div>
    </div>
    <!-- SLIDER AREA END -->

    <!-- ABOUT US AREA START -->
    <div class="ltn__about-us-area py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="about-us-img-wrap about-img-left">
                        <img src="{{ $homedata -> image_1 }}" alt="About Us Image" data-aos="fade-up"
     data-aos-duration="3000">
                        <div class="about-us-img-info about-us-img-info-2 about-us-img-info-3">
                            
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="about-us-info-wrap">
                        <div class="section-title-area ltn__section-title-2--- mb-20">
                            <h6 data-aos="fade-down" data-aos-duration="3000" class="section-subtitle section-subtitle-2 ltn__secondary-color">About Us</h6>
                            <h1 class="section-title" data-aos="fade-right" data-aos-duration="3000">{{ $homedata -> title_1 }}<span>.</span></h1>
                            {!! $homedata -> details_1 !!}
                        </div>
                        
                        <div class="btn-wrapper animated" data-aos="zoom-in" data-aos-duration="3000">
                            <a href="{{ route('aboutus') }}" class="theme-btn-1 btn btn-effect-1">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT US AREA END -->

    <div class="ltn__team-area pt-110--- pt-5 section-bg-1">
        <div class="container">
            
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <h1 class="section-title" data-aos="fade-right" data-aos-duration="3000">Our Agents</h1>
                </div>
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                    @foreach($data as $val)
                    <div class="item">
                        <div class="">
                            <div class="ltn__team-item ltn__team-item-3---">
                                <div class="team-img">
                                    <img src="{{ asset($val -> image) }}" alt="Image">
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
                    </div>
                    @endforeach     
                        
                    </div>
                </div>
                          
            </div>
        </div>
    </div>

    <!-- ABOUT US AREA START -->
    <div class="ltn__about-us-area py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-us-info-wrap">
                        <div class="section-title-area ltn__section-title-2--- mb-30">                           
                            <h1 data-aos="fade-right" data-aos-duration="3000" class="section-title">{{ $homedata -> title_2 }}</h1>
                            {!! $homedata -> details_2 !!}
                        </div>
                        <div class="btn-wrapper animated" data-aos="zoom-in" data-aos-duration="3000">
                            <a href="buy.php" class="theme-btn-1 btn btn-effect-1">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="about-us-img-wrap about-img-right">
                        <img src="{{ asset($homedata -> image_2) }}" alt="About Us Image" data-aos="zoom-in" data-aos-duration="3000">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT US AREA END -->

    <!-- FEATURE AREA START ( Feature - 6) -->
    <div class="ltn__feature-area section-bg-1 py-5" data-aos="fade-right" data-aos-duration="3000">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Our Services</h6>
                        <h1 class="section-title">Our Main Focus</h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__custom-gutter--- justify-content-center">
                @foreach($service as $val)
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                        <div class="ltn__feature-icon">
                            <img src="{{ asset($val -> image) }}" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h3><a href="javascript:void(0)">{{ $val -> title }}</a></h3>
                            <p>{!! $val -> details !!}</p>
                            <a class="ltn__service-btn" href="{{ route('buy') }}">Find A Home <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- FEATURE AREA END -->
<x-footer-component/>