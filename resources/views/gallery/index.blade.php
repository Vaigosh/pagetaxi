@extends('layouts.app')
@section('cstyle')
    <link rel="stylesheet" href="{{ asset('assets/plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/cube-portfolio/cubeportfolio/custom/custom-cubeportfolio.css') }}">
@endsection
@section('navmenu')
    @include('layouts.navmenu')
@show

@section('content')
    <!--=== Breadcrumbs v3 ===-->
    <div class="breadcrumbs-v3 img-v3">
        <div class="container text-center">
            <p>События и мероприятия</p>
            <h1>Фотогалерея</h1>
        </div><!--/end container-->
    </div>
    <!--=== End Breadcrumbs v3 ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">Фотогалерея</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="/">Главная</a></li>
                <li><a href="/gallery">Фотогалерея</a></li>
            </ul>
        </div>
    </div>
    <!--=== Cube-Portfdlio ===-->
	@include ('errors.list');
	@if(count($gallerys))
	    <div class="cube-portfolio margin-bottom-20">
	        <div class="content-xs">
	            <div id="filters-container" class="cbp-l-filters-text content-xs">
	                <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> Все </div> |
					@foreach($gallerys as $gallery)
	                	<div data-filter=".{{ $gallery->id }}" class="cbp-filter-item"> {{ $gallery->name }} </div> |
	                @endforeach
	            </div>
	        </div>

	        <div id="grid-container" class="cbp-l-grid-agency">
	        @foreach($gallerys as $gallery)
				@if(count($gallery->photos))
                	@foreach($gallery->photos as $photo)
					    <div class="cbp-item {{ $photo->gallery_id }}">
			                <div class="cbp-caption margin-bottom-20">
			                    <div class="cbp-caption-defaultWrap">
			                        <img src="{{ $photo->path }}" alt="">
			                    </div>
			                    <div class="cbp-caption-activeWrap">
			                        <div class="cbp-l-caption-alignCenter">
			                            <div class="cbp-l-caption-body">
			                                <ul class="link-captions no-bottom-space">
			                                    <li><a href="{{ $photo->path }}" class="cbp-lightbox" data-title="Design Object"><i class="rounded-x fa fa-search"></i></a></li>
			                                </ul>
			                            </div>
			                        </div>
			                    </div>
			                </div>
			                <div class="cbp-title-dark">
			                    <div class="cbp-l-grid-agency-title">{{ $photo->name }}</div>
			                    <div class="cbp-l-grid-agency-desc">{{ $photo->description }}</div>
			                </div>
					    </div>
			        @endforeach
			    @endif
			@endforeach
	        </div>
	    </div>
	@endif
	<!--=== End Cube-Portfdlio ===-->
@endsection

@section('footer')
    @include('layouts.footer')
@endsection

</div><!--/wrapper-->
@section('scripts')
<!-- JS Global Compulsory -->
<script type="text/javascript" src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/jquery/jquery-migrate.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="{{ asset('assets/plugins/back-to-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/smoothScroll.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js') }}"></script>
<!-- JS Customization -->
<script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="{{ asset('assets/js/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/plugins/cube-portfolio/cube-portfolio-3.js') }}"></script>
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