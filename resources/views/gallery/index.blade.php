@extends('layouts.app')

@section('navmenu')
    @include('layouts.navmenu')
@show

@section('content')
    <!--=== Breadcrumbs v3 ===-->
    <div class="breadcrumbs-v3 img-v1">
        <div class="container text-center">
            <p>События и мероприятия</p>
            <h1>Фотогалерея</h1>
        </div><!--/end container-->
    </div>
    <!--=== End Breadcrumbs v3 ===-->
    <!--=== Cube-Portfdlio ===-->
    <div class="cube-portfolio margin-bottom-20">
        <div class="content-xs">
            <div id="filters-container" class="cbp-l-filters-text content-xs">
	            <div data-filter="*" class="cbp-filter-item"> Все </div> |
	            @if(count($gallerys))
					@foreach($gallerys as $gallery)
		                <div data-filter=".{{ $gallery->id }}" class="cbp-filter-item"> {{ $gallery->name }} </div> |
					@endforeach
				@endif
            </div><!--/end Filters Container-->
        </div>
    </div>
	@include ('errors.list');
<!--     <div class="cube-portfolio margin-bottom-20">
        <div class="content-xs">
            <div id="filters-container" class="cbp-l-filters-text content-xs">
                <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> All </div> |
                <div data-filter=".identity" class="cbp-filter-item"> Identity </div> |
                <div data-filter=".web-design" class="cbp-filter-item"> Web Design </div> |
                <div data-filter=".graphic" class="cbp-filter-item"> Graphic </div> |
                <div data-filter=".logos" class="cbp-filter-item"> Logo </div>
            </div>
        </div>

        <div id="grid-container" class="cbp-l-grid-agency">
        	@if(count($gallerys))
				@foreach($gallerys as $gallery)
		            <div class="cbp-item graphic">
		                <div class="cbp-caption margin-bottom-20">
		                    <div class="cbp-caption-defaultWrap">
		                        <img src="assets/img/main/img3.jpg" alt="">
		                    </div>
		                    <div class="cbp-caption-activeWrap">
		                        <div class="cbp-l-caption-alignCenter">
		                            <div class="cbp-l-caption-body">
		                                <ul class="link-captions no-bottom-space">
		                                    <li><a href="portfolio_single_item.html"><i class="rounded-x fa fa-link"></i></a></li>
		                                    <li><a href="assets/img/main/img3.jpg" class="cbp-lightbox" data-title="Design Object"><i class="rounded-x fa fa-search"></i></a></li>
		                                </ul>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		                <div class="cbp-title-dark">
		                    <div class="cbp-l-grid-agency-title">Design Object 01</div>
		                    <div class="cbp-l-grid-agency-desc">Web Design</div>
		                </div>
		            </div>
				@endforeach
			@endif
        </div>
    </div> -->
    <!--=== End Cube-Portfdlio ===-->

     <!--=== Footer Version 1 ===-->
    <div class="footer-v1">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <!-- About -->
                    <div class="col-md-3 md-margin-bottom-40">
                        <a href="index.html"><img id="logo-footer" class="footer-logo" src="assets/img/logo2-default.png" alt=""></a>
                        <p>About Unify dolor sit amet, consectetur adipiscing elit. Maecenas eget nisl id libero tincidunt sodales.</p>
                        <p>Duis eleifend fermentum ante ut aliquam. Cras mi risus, dignissim sed adipiscing ut, placerat non arcu.</p>
                    </div><!--/col-md-3-->
                    <!-- End About -->

                    <!-- Latest -->
                    <div class="col-md-3 md-margin-bottom-40">
                        <div class="posts">
                            <div class="headline"><h2>Latest Posts</h2></div>
                            <ul class="list-unstyled latest-list">
                                <li>
                                    <a href="#">Incredible content</a>
                                    <small>May 8, 2014</small>
                                </li>
                                <li>
                                    <a href="#">Best shoots</a>
                                    <small>June 23, 2014</small>
                                </li>
                                <li>
                                    <a href="#">New Terms and Conditions</a>
                                    <small>September 15, 2014</small>
                                </li>
                            </ul>
                        </div>
                    </div><!--/col-md-3-->
                    <!-- End Latest -->

                    <!-- Link List -->
                    <div class="col-md-3 md-margin-bottom-40">
                        <div class="headline"><h2>Useful Links</h2></div>
                        <ul class="list-unstyled link-list">
                            <li><a href="#">About us</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">Portfolio</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">Latest jobs</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">Community</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">Contact us</a><i class="fa fa-angle-right"></i></li>
                        </ul>
                    </div><!--/col-md-3-->
                    <!-- End Link List -->

                    <!-- Address -->
                    <div class="col-md-3 map-img md-margin-bottom-40">
                        <div class="headline"><h2>Contact Us</h2></div>
                        <address class="md-margin-bottom-40">
                            25, Lorem Lis Street, Orange <br />
                            California, US <br />
                            Phone: 800 123 3456 <br />
                            Fax: 800 123 3456 <br />
                            Email: <a href="mailto:info@anybiz.com" class="">info@anybiz.com</a>
                        </address>
                    </div><!--/col-md-3-->
                    <!-- End Address -->
                </div>
            </div>
        </div><!--/footer-->

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            2015 &copy; All Rights Reserved.
                           <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
                        </p>
                    </div>

                    <!-- Social Links -->
                    <div class="col-md-6">
                        <ul class="footer-socials list-inline">
                            <li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype">
                                    <i class="fa fa-skype"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dribbble">
                                    <i class="fa fa-dribbble"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Social Links -->
                </div>
            </div>
        </div><!--/copyright-->
    </div>
    <!--=== End Footer Version 1 ===-->
</div><!--/wrapper-->
@endsection
@section('scripts')
<!-- JS Global Compulsory -->
<script type="text/javascript" src="assets/plugins/jquery/jquery-migrate.min.js"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
<script type="text/javascript" src="assets/plugins/smoothScroll.js"></script>
<script type="text/javascript" src="assets/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
<!-- JS Customization -->
<script type="text/javascript" src="assets/js/custom.js"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript" src="assets/js/plugins/cube-portfolio/cube-portfolio-4-fw-tx.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
    });
</script>
<!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
    <script src="assets/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->
@endsection