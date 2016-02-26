    <!-- Event Section -->
    <section id="portfolio" class="about-section">
        <div class="container content-lg">
            <div class="title-v1">
                <h2>Фотографии с мероприятий</h2>
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
                            <a href="/event/{{ $event_block->id }}" class="cbp-caption cbp-singlePageInline"
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
                    <div class="cbp-item web-design motion">
                        <a href="{{ asset('assets/ajax/project1.html') }}" class="cbp-caption cbp-singlePageInline"
                           data-title="World Clock Widget<br>by Paul Flavius Nechita">
                            <div class="cbp-caption-defaultWrap">
                                <img src="{{ asset('assets/img/portfolio/a1/5.jpg') }}" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">День рыбака без табака</div>
                                        <div class="cbp-l-caption-desc">Под таким лозунгом мы провели мероприятие от нашей диспетчерской службы заказа Такси 24.</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item web-design">
                        <a href="assets/ajax/project2.html" class="cbp-caption cbp-singlePageInline"
                           data-title="Bolt UI<br>by Tiberiu Neamu">
                            <div class="cbp-caption-defaultWrap">
                                <img src="{{ asset('assets/img/portfolio/a2/image5.jpg') }}" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">День рождения Такси 24</div>
                                        <div class="cbp-l-caption-desc">Нам 4 года.</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item web-design motion">
                        <a href="assets/ajax/project3.html" class="cbp-caption cbp-singlePageInline"
                           data-title="WhereTO App<br>by Tiberiu Neamu">
                            <div class="cbp-caption-defaultWrap">
                                <img src="{{ asset('assets/img/portfolio/a3/IMG_1984.jpg') }}" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">9 мая</div>
                                        <div class="cbp-l-caption-desc">Мы помним наших героев</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item web-design print">
                        <a href="assets/ajax/project4.html" class="cbp-caption cbp-singlePageInline"
                           data-title="iDevices<br>by Tiberiu Neamu">
                            <div class="cbp-caption-defaultWrap">
                                <img src="assets/img/portfolio/11.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">iDevices</div>
                                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item motion">
                        <a href="assets/ajax/project5.html" class="cbp-caption cbp-singlePageInline"
                           data-title="Seemple* Music for iPad<br>by Tiberiu Neamu">
                            <div class="cbp-caption-defaultWrap">
                                <img src="assets/img/portfolio/5.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Seemple* Music for iPad</div>
                                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item print motion">
                        <a href="assets/ajax/project6.html" class="cbp-caption cbp-singlePageInline"
                           data-title="Remind~Me Widget<br>by Tiberiu Neamu">
                            <div class="cbp-caption-defaultWrap">
                                <img src="assets/img/portfolio/6.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Remind~Me Widget</div>
                                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item web-design print">
                        <a href="assets/ajax/project7.html" class="cbp-caption cbp-singlePageInline"
                           data-title="Workout Buddy<br>by Tiberiu Neamu">
                            <div class="cbp-caption-defaultWrap">
                                <img src="assets/img/portfolio/7.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Workout Buddy</div>
                                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item print">
                        <a href="assets/ajax/project8.html" class="cbp-caption cbp-singlePageInline"
                           data-title="Digital Menu<br>by Cosmin Capitanu">
                            <div class="cbp-caption-defaultWrap">
                                <img src="assets/img/portfolio/8.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Digital Menu</div>
                                        <div class="cbp-l-caption-desc">by Cosmin Capitanu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item motion">
                        <a href="assets/ajax/project9.html" class="cbp-caption cbp-singlePageInline"
                           data-title="Holiday Selector<br>by Cosmin Capitanu">
                            <div class="cbp-caption-defaultWrap">
                                <img src="assets/img/portfolio/4.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Holiday Selector</div>
                                        <div class="cbp-l-caption-desc">by Cosmin Capitanu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="cbp-l-loadMore-button">
                    <a href="assets/ajax/loadMore.html" class="cbp-l-loadMore-button-link">LOAD MORE</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Event Section -->