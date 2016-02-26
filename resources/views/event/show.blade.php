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
</div>