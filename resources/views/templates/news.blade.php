<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from wallsproperty.netlify.app/homepage-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Aug 2020 09:44:42 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
@include('templates.partials._head')

<body>
<!-- HEADER -->
<header class="jumbotron bg-theme-v5">
    <div class="bg-overlay"></div>
    <!-- NAVBAR -->
   @include('templates.partials._navbar')
    <!-- END NAVBAR -->
    <!-- HERO -->
    <div class="wrap__intro d-flex align-items-md-center  ">
        <div class="container  ">
            <div class="row align-items-center justify-content-start flex-wrap">
                <div class="col-lg-12 mx-auto">
                    <div class="wrap__intro-heading" data-aos="fade-up">

                        <h1 class="text-capitalize">
                            Find your dream house </h1>
                        <p>Your Property, Our Priority and From as low as $10 per day with limited time offer
                            discounts</p>

                        <div class="bg__overlay-black p-4">
                            <div class="search__property">
                                <div class="position-relative">
                                    <ul class="nav nav-tabs nav-tabs-02 mb-3 justify-content-start" id="pills-tab"
                                        role="tablist">
                                        <li class="nav-item mr-1">
                                            <a class="nav-link active" id="buy-tab" data-toggle="pill" href="#buy"
                                               role="tab" aria-controls="buy" aria-selected="true">Buy </a>
                                        </li>
                                        <li class="nav-item mr-1">
                                            <a class="nav-link" id="rent-tab" data-toggle="pill" href="#rent"
                                               role="tab" aria-controls="rent" aria-selected="false">Rent</a>
                                        </li>

                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade active show" id="buy" role="tabpanel"
                                             aria-labelledby="buy-tab">
                                            <div class=" search__container">
                                                <div class="row input-group no-gutters">
                                                    <div class="col-lg-2">
                                                        <select class="select_option form-control" name="select">
                                                            <option selected>Type Property</option>
                                                            <option>House</option>
                                                            <option>Apartement </option>
                                                            <option>Hotel</option>
                                                            <option>Residential</option>
                                                            <option>Land</option>
                                                            <option>Luxury</option>

                                                        </select>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <select class="select_option form-control" name="select">
                                                            <option data-display="Area From">Area From </option>
                                                            <option>1500</option>
                                                            <option>1200</option>
                                                            <option>900</option>
                                                            <option>600</option>
                                                            <option>300</option>
                                                            <option>100</option>

                                                        </select>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <select class="select_option form-control" name="select">
                                                            <option data-display="Bedrooms">Bedrooms</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>

                                                        </select>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <select class="select_option form-control" name="select">
                                                            <option data-display="Bathrooms">Bathrooms</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>

                                                        </select>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <select class="select_option form-control" name="select">
                                                            <option data-display="Locations">Locations</option>
                                                            <option>United Kingdom</option>
                                                            <option>American Samoa</option>
                                                            <option>Belgium</option>
                                                            <option>Canada</option>
                                                            <option>Delaware</option>

                                                        </select>
                                                    </div>
                                                    <div class="col-lg-2 input-group-append">
                                                        <button class="btn btn-primary btn-block" type="submit">
                                                            <i class="fa fa-search"></i> <span
                                                                    class="ml-1 text-uppercase">search</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="rent" role="tabpanel"
                                             aria-labelledby="rent-tab">
                                            <div class=" search__container">
                                                <div class="row input-group no-gutters">
                                                    <div class="col-lg-2">
                                                        <select class="select_option form-control" name="select">
                                                            <option selected>Type Property</option>
                                                            <option>House</option>
                                                            <option>Apartement </option>
                                                            <option>Hotel</option>
                                                            <option>Residential</option>
                                                            <option>Land</option>
                                                            <option>Luxury</option>

                                                        </select>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <select class="select_option form-control" name="select">
                                                            <option data-display="Area From">Area From </option>
                                                            <option>1500</option>
                                                            <option>1200</option>
                                                            <option>900</option>
                                                            <option>600</option>
                                                            <option>300</option>
                                                            <option>100</option>

                                                        </select>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <select class="select_option form-control" name="select">
                                                            <option data-display="Bedrooms">Bedrooms</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>

                                                        </select>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <select class="select_option form-control" name="select">
                                                            <option data-display="Bathrooms">Bathrooms</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>

                                                        </select>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <select class="select_option form-control" name="select">
                                                            <option data-display="Locations">Locations</option>
                                                            <option>United Kingdom</option>
                                                            <option>American Samoa</option>
                                                            <option>Belgium</option>
                                                            <option>Canada</option>
                                                            <option>Delaware</option>

                                                        </select>
                                                    </div>
                                                    <div class="col-lg-2 input-group-append">
                                                        <button class="btn btn-primary btn-block" type="submit">
                                                            <i class="fa fa-search"></i> <span
                                                                    class="ml-1 text-uppercase">search</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END HERO -->
</header>
<!-- END HEADER -->

@yield('content')
<section>
    <div class="container">
<div class="row">
    <!-- BLOG START -->
    <div class="col-lg-8">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="blog__grid mt-0">
                    <!-- BLOG  -->
                    <div class="card__image">
                        <div class="card__image-header h-250">
                            <img src="{{asset('assets/images/blog3.jpg')}}" alt="" class="img-fluid w100 img-transition">
                            <div class="info"> event</div>
                        </div>
                        <div class="card__image-body">
                            <!-- <span class="badge badge-secondary p-1 text-capitalize mb-3">May 08, 2019
                            </span> -->
                            <h6 class="text-capitalize">
                                <a href="blog-single.html">Happy family with new house </a>
                            </h6>
                            <p class=" mb-0">
                                Real estate festival is one of the famous feval for explain to you how all
                                this mistaolt deand praising pain
                                wasnad I will give complete

                            </p>


                        </div>
                        <div class="card__image-footer">
                            <figure>
                                <img src="{{asset('assets/images/profile-blog.jpg')}}" alt="" class="img-fluid rounded-circle">
                            </figure>
                            <ul class="list-inline my-auto">
                                <li class="list-inline-item">

                                    <a href="#">
                                        tom wilson
                                    </a>

                                </li>

                            </ul>
                            <ul class="list-inline my-auto ml-auto">
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-sm btn-primary "><small
                                                class="text-white ">read more <i
                                                    class="fa fa-angle-right ml-1"></i></small></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!-- END BLOG -->
                </div>
            </div>
            <div class="col-md-6 col-lg-6 ">
                <div class="blog__grid mt-0">
                    <!-- BLOG  -->
                    <div class="card__image">
                        <div class="card__image-header h-250">
                            <img src="{{asset('assets/images/gallery17.jpg')}}" alt="" class="img-fluid w100 img-transition">
                            <div class="info"> event</div>
                        </div>
                        <div class="card__image-body">
                            <!-- <span class="badge badge-secondary p-1 text-capitalize mb-3">May 08, 2019
                            </span> -->
                            <h6 class="text-capitalize">
                                <a href="blog-single.html">Best Interior Oppertunity </a>
                            </h6>
                            <p class=" mb-0">
                                Real estate festival is one of the famous feval for explain to you how all
                                this mistaolt deand praising pain
                                wasnad I will give complete

                            </p>


                        </div>
                        <div class="card__image-footer">
                            <figure>
                                <img src="{{asset('assets/images/profile-blog.jpg')}}" alt="" class="img-fluid rounded-circle">
                            </figure>
                            <ul class="list-inline my-auto">
                                <li class="list-inline-item ">
                                    <a href="#">
                                        tom wilson
                                    </a>

                                </li>

                            </ul>
                            <ul class="list-inline my-auto ml-auto">
                                <li class="list-inline-item ">
                                    <a href="blog-single.html" class="btn btn-sm btn-primary "><small
                                                class="text-white ">read more <i
                                                    class="fa fa-angle-right ml-1"></i></small></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!-- END BLOG -->
                </div>
            </div>
        </div>
    </div>
    <!-- END BLOG  -->

    <!-- WIDGET BLOG -->
    <div class="col-lg-4">
        <div class="sticky-top">
            <aside>
                <div class="widget__sidebar mt-0">
                    <div class="widget__sidebar__header">
                        <h6 class="text-capitalize">search</h6>
                    </div>
                    <div class="widget__sidebar__body">
                        <div class="input-group">
                            <input type="text" name="search_term_string" class="form-control"
                                   placeholder="Search article . . .">
                            <span class="input-group-btn">
                                            <button type="submit" class="btn-search btn"><i
                                                        class="fa fa-search"></i></button>
                                        </span>
                        </div>
                    </div>

                </div>
            </aside>
            <aside>
                <div class="widget__sidebar">
                    <div class="widget__sidebar__header">
                        <h6 class="text-capitalize">category</h6>
                    </div>
                    <div class="widget__sidebar__body">
                        <ul class="list-unstyled">
                            <li>
                                <a href="#" class="text-capitalize">
                                    apartement
                                    <span class="badge badge-primary">14</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-capitalize">
                                    villa
                                    <span class="badge badge-primary">4</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-capitalize">
                                    family house
                                    <span class="badge badge-primary">2</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-capitalize">
                                    modern villa
                                    <span class="badge badge-primary">8</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-capitalize">
                                    town house
                                    <span class="badge badge-primary">10</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-capitalize">
                                    office
                                    <span class="badge badge-primary">12</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </aside>
            <aside>
                <div class="widget__sidebar">
                    <div class="widget__sidebar__header">
                        <h6 class="text-capitalize">recents news</h6>
                    </div>
                    <div class="widget__sidebar__body">
                        <!-- ONE -->
                        <div class="widget__sidebar__body-img">
                            <img src="images/gallery.jpg" alt="" class="img-fluid">

                            <div class="widget__sidebar__body-heading">
                                <h6 class="text-capitalize">
                                    tips memilih rumah bagi kelurga muda
                                </h6>

                            </div>
                            <span class="badge badge-secondary p-1 text-capitalize mb-1">May 08, 2019
                                        </span>
                        </div>
                        <!-- TWO -->
                        <div class="widget__sidebar__body-img">
                            <img src="images/gallery1.jpg" alt="" class="img-fluid">

                            <div class="widget__sidebar__body-heading">
                                <h6 class="text-capitalize">
                                    tips memilih rumah bagi kelurga muda
                                </h6>

                            </div>
                            <span class="badge badge-secondary p-1 text-capitalize mb-1">May 08, 2019
                                        </span>
                        </div>
                        <!-- THREE -->
                        <div class="widget__sidebar__body-img">
                            <img src="images/gallery2.jpg" alt="" class="img-fluid">
                            <div class="widget__sidebar__body-heading">
                                <h6 class="text-capitalize">
                                    twe are experience more than 10 years
                                </h6>

                            </div>
                            <span class="badge badge-secondary p-1 text-capitalize mb-1">May 08, 2019
                                        </span>
                        </div>
                        <!-- FOUR -->
                        <div class="widget__sidebar__body-img">
                            <img src="images/gallery3.jpg" alt="" class="img-fluid">

                            <div class="widget__sidebar__body-heading">
                                <h6 class="text-capitalize">
                                    tips & trick in real estate
                                </h6>

                            </div>
                            <span class="badge badge-secondary p-1 text-capitalize mb-1">May 08, 2019
                                        </span>
                        </div>

                        <div class="widget__sidebar__body-img">
                            <img src="images/gallery4.jpg" alt="" class="img-fluid">

                            <div class="widget__sidebar__body-heading">
                                <h6 class="text-capitalize">
                                    how buy real estate dream house
                                </h6>
                            </div>
                            <span class="badge badge-secondary p-1 text-capitalize mb-1">May 08, 2019
                                        </span>
                        </div>
                    </div>
                </div>
            </aside>
            <aside>
                <div class="widget__sidebar">
                    <div class="widget__sidebar__header">
                        <h6 class="text-capitalize">tags</h6>
                    </div>
                    <div class="widget__sidebar__body">
                        <div class="blog__tags p-0">
                            <ul class="list-inline">

                                <li class="list-inline-item">
                                    <a href="#">
                                        #property
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        #wfh
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        #estate
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        #real estate
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        #listing
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        #rent
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        #sell
                                    </a>
                                </li>

                                <li class="list-inline-item">
                                    <a href="#">
                                        #family
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        #happy
                                    </a>
                                </li>

                                <li class="list-inline-item">
                                    <a href="#">
                                        #agents
                                    </a>
                                </li>

                                <li class="list-inline-item">
                                    <a href="#">
                                        #promo
                                    </a>
                                </li>


                            </ul>
                        </div>
                    </div>

                </div>
            </aside>
        </div>
    </div>
    <!-- END WIDGET BLOG -->
</div>
    </div>
</section>

<!-- FOOTER -->
<!-- Footer  -->
@include('templates.partials._footer')
<!-- End Footer  -->
<!-- END FOOTER -->

<!-- SCROLL TO TOP -->
<a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>
<!-- END SCROLL TO TOP -->
<script src="{{ asset('assets/js/index.bundlebd04.js?8918068d71def746395d') }}"></script>
</body>


<!-- Mirrored from wallsproperty.netlify.app/homepage-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Aug 2020 09:44:43 GMT -->
</html>