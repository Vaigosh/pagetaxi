    <!-- Event Section -->
    <section id="portfolio" class="about-section">
        <div class="container content-lg">
            <div class="title-v1">
                <h2>События и мероприятия</h2>
                <p>Тут Вы можете найти свои фотографии, если участвывали в наших мероприятиях.</p>
            </div>


            <div class="cube-portfolio">
                <div id="filters-container" class="cbp-l-filters-button">
                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> Все </div>
                    <div data-filter=".print" class="cbp-filter-item"> 2016 </div>
                    <div data-filter=".web-design" class="cbp-filter-item"> 2015 </div>
                    <div data-filter=".motion" class="cbp-filter-item"> 2014 </div>
                </div><!--/end Filters Container-->
                <div id="grid-container" class="cbp-l-grid-gallery">
                    @foreach($data['event_block'] as $event_block)
                        <div class="cbp-item web-design motion">
                            <a href="single/{{ $event_block->id }}" class="cbp-caption cbp-singlePageInline"
                               data-title="World Clock Widget<br>by Paul Flavius Nechita">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="{{ $event_block->img_path }}" alt="">
                                </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignLeft">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title">{{ $event_block->title }}</div>
                                            <div class="cbp-l-caption-desc">{{ $event_block->description }}</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>

                <div class="cbp-l-loadMore-button">
                    <a href="event/" class="cbp-l-loadMore-button-link">Показать больше</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Event Section -->