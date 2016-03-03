@extends('layouts.app')

@section('content')
<div class="container content">
    <div class="row margin-bottom-20">
        <h2>{{ $event_block->title }}</h2>
        <div class="col-sm-5 sm-margin-bottom-20">
            <img class="img-responsive" src="../{{ $event_block->img_path }}" alt="">
        </div>
        <div class="col-sm-7">
            <div class="news-v3">
                <ul class="list-inline posted-info">
                    <li>Добавил(а):</li>
                    <li>Бешига Любовь</li>
                    <li>{{ $event_block->published_at }}</li>
                </ul>
                <p>{{ $event_block->text }}</p>

            </div>
        </div>
    </div><!--/end row-->
    <div class="clearfix"></div>
    @if(count($event_block->photo))
        <div class="row margin-bottom-20">
            <hr />
            <div class="cube-portfolio margin-bottom-20">
                <div id="grid-container" class="cbp-l-grid-agency">
                        @foreach($event_block->photo as $photos)
                            <div class="cbp-item {{ $photos->gallery_id }}">
                                <div class="cbp-caption margin-bottom-20">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="../{{ $photos->path }}" alt="">
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="cbp-l-caption-alignCenter">
                                            <div class="cbp-l-caption-body">
                                                <ul class="link-captions no-bottom-space">
                                                    <li><a href="../{{ $photos->path }}" class="cbp-lightbox" data-title="{{ $photos->name }}"><i class="rounded-x fa fa-search"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cbp-title-dark">
                                    <div class="cbp-l-grid-agency-title">{{ $photos->name }}</div>
                                    <div class="cbp-l-grid-agency-desc">{{ $photos->description }}</div>
                                </div>
                            </div>
                        @endforeach
                </div>
            </div>
            <!--=== End Cube-Portfdlio ===-->
        </div>
    @endif
</div>
@endsection
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