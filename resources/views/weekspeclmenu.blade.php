<section class="section" id="offers">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 text-center">
                <div class="section-heading">
                    <h6>Klassy Week</h6>
                    <h2>This Week’s Special Meal Offers</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row" id="tabs">
                    <div class="col-lg-12">
                        <div class="heading-tabs">
                            <div class="row">
                                <div class="col-lg-6 offset-lg-3">
                                    <ul>
                                      <li><a href='#tabs-1'><img src="assets/images/tab-icon-01.png" alt="">Breakfast</a></li>
                                      <li><a href='#tabs-2'><img src="assets/images/tab-icon-02.png" alt="">Lunch</a></a></li>
                                      <li><a href='#tabs-3'><img src="assets/images/tab-icon-03.png" alt="">Dinner</a></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-12">
                        <section class='tabs-content'>
                            <article id='tabs-1'>
                                <div class="row">
                                    @foreach ($menu as $menuitems)

                                    <div class="col-lg-6">
                                        <div class="row">
                                            {{-- @if ($menuitem->category == 'Breakfast') --}}
                                            <div class="left-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="{{ asset('specialmenuimage/' . $menuitems->image) }}" alt="">
                                                        <h4>{{$menuitems->name}}</h4>
                                                        <div class="price">
                                                            <h6>{{$menuitems->price}}Rs</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- @endif --}}
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </article>


                            <article id='tabs-2'>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="left-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-04.png" alt="">
                                                        <h4>Eggs Omelette</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$14</h6>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="right-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-01.png" alt="">
                                                        <h4>Fresh Chicken Salad</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$10</h6>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            {{-- <article id='tabs-3'>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="left-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-05.png" alt="">
                                                        <h4>Eggs Omelette</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$14</h6>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="right-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-06.png" alt="">
                                                        <h4>Fresh Chicken Salad</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$8.50</h6>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article> --}}
                        </section>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
