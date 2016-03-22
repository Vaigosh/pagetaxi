    <!-- News Section -->
    <section id="news" class="news-section">
        <div class="container content-lg">
            <div class="title-v1">
                <a href="{{ url('/news') }}"><h2>Новости</h2></a>
                <p>События, акции, мероприятия.</p>
            </div>
            <div class="row news-v1">
                @foreach($data['news'] as $news)
                <div class="col-md-4 md-margin-bottom-40">
                    <div class="news-v1-in">
                        <img class="img-responsive" src="{{ $news->img_path }}" alt="">
                        <h3><a href="/news/{{$news->id}}">{{ $news->title }}</a></h3>
                        <p>{{ $news->text }}</p>
                        <ul class="list-inline news-v1-info">
                            <li><span>Опубликовано:</span> <a href="#">Бешига Любовь</a></li>
                            <li>|</li>
                            <li><i class="fa fa-clock-o"></i> {{ $news->created_at }} </li>
                            <li class="pull-right"><a href="#"><i class="fa fa-comments-o"></i> 14</a></li>
                        </ul>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="parallax-twitter parallaxBg">
            <div class="container parallax-twitter-in">
                <div class="margin-bottom-30">
                    <i class="icon-custom rounded-x icon-bg-blue fa fa-twitter"></i>
                </div>

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <ul class="list-unstyled owl-twitter-v1">
                            <li class="item">
                                <p>Желтая «шашечка», <br>
                                    Резвый сигнал. <br>
                                    Для пассажиров <br>
                                    Другом он стал.<p>
                            </li>
                            <li class="item">
                                <p>В курсе событий <br>
                                    Везде и всегда. <br>
                                    Мчится на вызов <br>
                                    В жару, в холода.</p>
                            </li>
                            <li class="item">
                                <p>Знаки дорожные <br>
                                    Знает он все. <br>
                                    Пусть же сопутствует <br>
                                    В жизни успех!</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End News Section -->