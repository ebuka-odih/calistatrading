<style>
    #google_translate_element {

        color: transparent;
    }

    #google_translate_element a {

        display: none;
    }

    select.google_translate_element {

        color: black;
    }

    div.goog-te-gadget {

        color: transparent;
    }

    div.goog-te-gadget {

        color: transparent !important;
    }

    .goog-te-gadget .goog-te-combo {

        margin: 0px 0 !important;
        padding: 3px 2px;
        background: #1d1d1d;
        border: 1px solid #feb729;
        color: #ffffff;
        border-radius: 5px;
        cursor: pointer;
        outline: none;
    }
</style>

<section id="utility" class="region region-utility">
    <div class="wrap">
        <section id="block-menu-menu-secondary-menu" class="block block-menu first odd" role="navigation">
            <ul class="menu"><li class="menu__item is-leaf first leaf"><a href="/info" class="menu__link">Info</a></li>
                <li class="menu__item is-leaf leaf"><a href="careers" class="menu__link">Careers</a></li>
            </ul>
        </section>
    </div>
</section>

<header class="header" id="header" role="banner">
    <div class="wrap">


        <a href="/" title="Home" rel="home" class="header__logo" id="logo">
            <img src="{{ asset('sites/all/themes/geode_zen/logo-white.png') }}" alt="Home" class="header__logo-image" /></a>


        <div id="navigation">
            <div class="region region-navigation">
                <section id="block-responsive-dropdown-menus-main-menu" class="block block-responsive-dropdown-menus first last odd">

                    <ul id="main-menu" class="main-menu responsive-menu links">
                        <li class="menu-item menu-parent menu-item-primary first">
                            <div id="google_translate_element"></div>
                            <script>
                                function googleTranslateElementInit() {
                                    new google.translate.TranslateElement({
                                        pageLanguage: 'en'
                                    }, 'google_translate_element');
                                }
                            </script>
                        </li>
                        <li id="menu-item-484" class="menu-item menu-parent menu-item-primary first">
                            <a href="firm/about-geode.html" class="firm">Firm</a>
                            <ul class="sub-menu tier-two">
                                <li id="menu-item-489" class="menu-item menu-item-secondary first"><a href="{{ route('about') }}">About Geode</a></li>
                                <li id="menu-item-508" class="menu-item menu-item-secondary"><a href="{{ route('history') }}">Geode History</a></li>
                                <li id="menu-item-509" class="menu-item menu-parent menu-item-secondary last"><a href="{{ route('our-team') }}">Our Team</a>
                                    <ul class="sub-menu tier-three"><li id="menu-item-554" class="menu-item menu-item-tertiary first">
                                            <a href="firm/team/business-management">Business Management</a></li>
                                        <li id="menu-item-555" class="menu-item menu-item-tertiary"><a href="firm/team/investment-leadership">Investment Leadership</a></li>
                                        <li id="menu-item-556" class="menu-item menu-item-tertiary"><a href="{{ route('business-development') }}">Business Development</a></li>
                                        <li id="menu-item-656" class="menu-item menu-item-tertiary"><a href="firm/team/investment-leadership">Technology Leadership</a></li>
                                        <li id="menu-item-653" class="menu-item menu-item-tertiary last"><a href="firm/board-of-directors">Board of Directors</a></li>
                                    </ul></li>
                            </ul>
                        </li>
                        <li id="menu-item-485" class="menu-item menu-parent menu-item-primary"><a href="{{ route('our-approach') }}" class="investment-cap">Investment Capabilities</a>
                            <ul class="sub-menu tier-two"><li id="menu-item-510" class="menu-item menu-item-secondary first">
                                    <a href="{{ route('our-approach') }}">Our Approach</a></li>
                                <li id="menu-item-511" class="menu-item menu-item-secondary last"><a href="{{ route('strategies') }}">Strategies</a></li>
                            </ul></li>
                        <li id="menu-item-488" class="menu-item menu-item-primary last"><a href="{{ route('contact') }}">Contact Us</a></li>
                    </ul>
                </section>
            </div>

        </div>
    </div>
</header>
<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>



