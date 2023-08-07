@extends('layouts.app')
@section('content')
    <div class="blog-hero set-bg" data-setbg="{{ asset('cake-main/') }}/img/blog/details/blog-hero.jpg">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-7">
                    <div class="blog__hero__text">
                        <div class="label">Recipes</div>
                        <h2>Cooking Cajun Food</h2>
                        <ul>
                            <li>By <span>James Myers</span></li>
                            <li>13 Nov 2020</li>
                            <li>112 Views</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Hero End -->

    <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="blog__details__content">
                        <div class="blog__details__share">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="youtube"><i class="fa fa-youtube-play"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        </div>
                        <div class="blog__details__text">
                            <p>The cast brass and cast stainless steel burners have the smallest burrs — by far. This
                                will mean less chaos in the gas flow, fewer trapped particulate matter in the burner and
                                a cleaner burning grill. The following comparison shows how the ports are formed.</p>
                            <p>Why is port formation important? Several reasons. If the hole is punched into a sheet
                                metal burner, it leaves a large tab inside the burner that will caus e more chaos while
                                burning. It is more apt to hold trapped food particles and grease, and is therefore more
                                likely to burn through. (Note the Alfresco burner photo below.</p>
                        </div>
                        <div class="blog__details__recipe">
                            <div class="blog__details__recipe__item">
                                <h6><img src="{{ asset('cake-main/') }}/img/blog/details/user.png" alt=""> SERVES
                                </h6>
                                <span>2 as a main, 4 as a side</span>
                            </div>
                            <div class="blog__details__recipe__item">
                                <h6><img src="{{ asset('cake-main/') }}/img/blog/details/clock.png" alt=""> PREP
                                    TIME</h6>
                                <span>15 minute</span>
                            </div>
                            <div class="blog__details__recipe__item">
                                <h6><img src="{{ asset('cake-main/') }}/img/blog/details/clock.png" alt=""> COOK
                                    TIME</h6>
                                <span>15 minute</span>
                            </div>
                        </div>
                        <div class="blog__details__recipe__details">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="blog__details__ingredients">
                                        <h6>Ingredients</h6>
                                        <ul>
                                            <li><span>.</span> 1 cup (240 ml) whole milk</li>
                                            <li><span>.</span> 1 cup (240 ml) water, plus more as needed</li>
                                            <li><span>.</span> 1 teaspoon fine sea salt</li>
                                            <li><span>.</span> 2 tablespoons olive oil</li>
                                            <li><span>.</span> 3/4 cup (120 g) fine polenta</li>
                                            <li><span>.</span> 3 cups sunflower oil, plus more as needed</li>
                                            <li><span>.</span> 7 ounces (200 g) peeled parsnips,</li>
                                            <li><span>.</span> 1 pinch fine sea salt, plus more to taste</li>
                                            <li><span>.</span> 2 tablespoons (30 g) unsalted butter</li>
                                            <li><span>.</span> 1/2 tablespoon maple syrup</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="blog__details__ingredients__pic">
                                        <img src="{{ asset('cake-main/') }}/img/blog/details/blog-details.jpg"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog__details__direction">
                            <h6>Directions</h6>
                            <ul>
                                <li><span>01.</span> Combine all of the ingredients, kneading to form a smooth dough.
                                </li>
                                <li><span>02.</span> Allow the dough to rise, in a lightly greased, covered bowl, until
                                    it’s doubled in size,</li>
                                <li><span>03.</span> about 90 minutes.</li>
                                <li><span>04.</span> Gently divide the dough in half; it’ll deflate somewhat. Gently
                                    shape the dough into two oval loaves; or, for longer loaves, two 10″ to 11″ logs.
                                </li>
                                <li><span>05.</span> Place the loaves on a lightly greased or parchment-lined baking
                                    sheet. Cover and let</li>
                                <li><span>06.</span> rise until very puffy, about 1 hour. Towards the end of the rising
                                    time, preheat the oven</li>
                                <li><span>07.</span> to 425°F.</li>
                                <li><span>08.</span> Spray the loaves with lukewarm water. Make two fairly deep diagonal
                                    slashes in each; a serrated bread knife, wielded firmly,</li>
                            </ul>
                        </div>
                        <div class="blog__details__print">
                            <a href="#" class="primary-btn"><i class="fa fa-print"></i> Print recipe</a>
                        </div>
                        <div class="blog__details__text">
                            <p>Molded ports in cast burners seem like they would be a good idea, but there is
                                considerable difficulty in making them uniform. Thus, it is quicker and less expensive
                                to drill.</p>
                            <p>Fire Magic grill burner has drilled orifices Notice (from the photo on our site) the lack
                                of extensive burring, allowing for a smooth flow of gas. Cast stainless leaves few, if
                                any, burrs when drilled. This burner has a lifetime warranty, including against rust and
                                burn-through.</p>
                        </div>
                        <div class="blog__details__tags">
                            <span>Tag</span>
                            <a href="#">Food</a>
                            <a href="#">Material</a>
                            <a href="#">Cakes</a>
                            <a href="#">Baking</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
