@extends('pages.layouts.app')
@section('content')


<div id="main">


    <div id="upper-content" class="column">
    </div>

    <div id="content" class="column" role="main">
        <a id="main-content"></a>



        <section id="block-views-homepage-slideshow-block" class="block block-views even">


            <div class="view view-homepage-slideshow view-id-homepage_slideshow view-display-id-block view-dom-id-d4e4ca38ab81cc22854ab6e574ac85ad">



                <div class="view-content">

                    <div class="skin-default">

                        <div id="flexslider_views_slideshow_main_homepage_slideshow-block_1" class="flexslider_views_slideshow_main views_slideshow_main"><div class="flex-nav-container">
                                <div class="flexslider">
                                    <ul id="flexslider_views_slideshow_homepage_slideshow-block_1" class="flexslider-views-slideshow-main-frame slides">
                                        <li class="flexslider-views-slideshow-main-frame-row flexslider_views_slideshow_slide views-row-1 views-row-odd">

                                            <div class="slide-content">
                                                <h1><span>Capturing Systematic</span>
                                                    <span>Sources of Return</span></h1>
                                                <a href="{{ route('register') }}" class="btn yellow">Get Started</a>
{{--                                                <a href="our-team" class="btn black">Login</a>--}}

                                            </div>
                                            <img typeof="foaf:Image" src="sites/default/files/hp-slider-boston-skyline4.jpg" width="1580" height="460" alt="" />    </li>
                                        <li class="flexslider-views-slideshow-main-frame-row flexslider_views_slideshow_slide views-row-2 views_slideshow_cycle_hidden views-row-even">

                                            <div class="slide-content">
                                                <h1><span>Research-Driven</span>
                                                    <span>Team-Based Investing</span></h1>
                                                <a href="firm/our-team" class="btn yellow">Meet Our Team</a>
                                            </div>
                                            <img typeof="foaf:Image" src="sites/default/files/new-stock-opt-5-2.jpg" width="1580" height="460" alt="" />    </li>
                                        <li class="flexslider-views-slideshow-main-frame-row flexslider_views_slideshow_slide views-row-3 views_slideshow_cycle_hidden views-row-odd">

                                            <div class="slide-content">
                                                <h1><span>Providing Efficient Exposures</span>
                                                    <span>to Institutional Investors</span></h1>
                                                <a href="{{ route('strategies') }}" class="btn yellow">Our Strategies</a>
                                            </div>
                                            <img typeof="foaf:Image" src="sites/default/files/0010_new-stock-opt-7-2.jpg" width="1580" height="460" alt="" />    </li>
                                    </ul>
                                </div>
                            </div></div>
                    </div>
                </div>






            </div>
        </section>
        <section id="block-block-1" class="block block-block assets-under-mgmt odd">
            <div class="wrap">

                <!--<dl><dt>$212.3B</dt>
              <dd>Geode Capital has $212.3B Assets Under Management and that includes, Equity Index, Quantitative Active Equity, Absolute Return and Commodities.</dd>
              </dl>
              <p>-->
                <ul class="breakdown">
                    <li><span>2001</span>Founded</li>
                    <li><span>$975B</span>AUM</li>
                    <li><span style="font-size:36px;">90 </span>Global Exchanges</li>
                </ul>
                <p>Information as of March 31, 2022</p>
            </div>
        </section>
        <section id="block-block-2" class="block block-block about-geode even">
            <div class="wrap">

                <p class="rtejustify">Geode Capital invest Management is a global asset manager providing efficient exposures and systematic investment solutions across multiple asset classes. Geode offers both alpha-generating and beta-tracking strategies. The investment team utilizes quantitative techniques supported by an integrated investment infrastructure and a dedicated research group. Geode is committed to providing clients with a transparent investment process with a focus on risk-adjusted performance.</p>
                <p class="rtecenter"><a class="btn yellow" href="firm/about-geode">Learn More About Geode</a></p>
            </div>
        </section>
        <section id="block-block-3" class="block block-block our-capabilities odd">
            <div class="wrap">
                <h1 class="block__title block-title">Our Investment Expertise Spans the Globe</h1>

                <p>Our Investment Capabilities span the globe. We have experience trading and investing in approximately 100 different markets.</p>
            </div>
        </section>
        <section id="block-block-4" class="block block-block investment-capabilities last even">
            <div class="wrap">
                <h1 class="block__title block-title">Investment Capabilities</h1>

                <p>Systematic investment capabilities across multiple asset classes</p>
                <ul>
                    <li><img alt="" src="sites/default/files/icon-equity-index.svg" />Equity Index</li>
                    <li><img alt="" src="sites/default/files/icon-options.svg" />Options</li>
                    <li><img alt="" src="sites/default/files/icon-commodities.svg" />Commodities</li>
                </ul>
                <p> </p>
                <ul>
                    <li><a class="btn yellow" href="investment-capabilities/strategies.html">Our Strategies</a></li>
                </ul>
            </div>
        </section>
    </div>




</div>

@endsection
