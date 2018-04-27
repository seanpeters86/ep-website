<style>
    .nav-bar{
        width: 100%;
        min-height: 5rem;
    }
    .nav-bar-inner{
        position: relative;
    }
    .nav-bar .logo{
        height: 5rem;
        line-height: 5rem;
        float: left;
    }
    .nav-bar .logo{
        margin-right: 3rem;
    }
    .nav-bar .logo img{
        margin-top: -4px;
    }
    .nav-bar .logo-right{
        margin-left: 3rem;
        margin-right: 0;
        float: right;
    }
    .nav-bar .logo.logo-center{
        float: none;
        margin: 0 auto;
    }

    /* Nav Alignment */
    .navigation.nav-left{
        float: left !important;
    }
    .navigation.nav-left > ul > li:first-child > a{
        padding-left: 0;
        margin-left: 0;
    }
    .navigation.nav-right{
        float: right !important;
    }
    .navigation.nav-right > ul > li:last-child > a{
        padding-right: 0;
        margin-right: 0;
    }
    .navigation.nav-center{
        float: none !important;
        display: block;
    }

    /* Multiple Nav Blocks Margins & Padding */
    .navigation.nav-left{
        margin-right: 2.5rem;
    }
    .navigation.nav-right{
        margin-left: 2.5rem;
    }
    .navigation:last-child{
        margin: 0;
    }

    /* Nav Buttons and Dropdowns */
    .navigation .dropdown .button{
        width: auto;
    }
    .navigation .button [class*="icon-"]{
        margin-right: 0;
    }

    /* Nav Structure */
    .navigation ul,
    .navigation .dropdown-list{
        padding: 0;
        margin: 0;
        list-style: none;
    }
    .navigation.nav-center > ul{
        text-align: center;
    }
    .navigation ul li{
        margin: 0;
        float: left;
        position: relative;
    }
    .navigation ul li.contains-mega-sub-menu{
        position: inherit;
    }
    .navigation.nav-center > ul > li{
        margin-left: -0.4rem;
        float: none;
        display: inline-block !important;
        vertical-align: top;
    }

    /* Nav Styling */
    .navigation > ul > li > a{
        padding: 0 1.5rem;
        background-color: rgba(0,0,0,0);
        line-height: 5rem;
    }
    .navigation ul li a,
    .navigation .dropdown-list:not(.custom-content) li a{
        font-size: 1.1rem;
        color: #878787;
        text-decoration: none;
        display: block;
        word-wrap: break-word;
    }
    .navigation ul li > a:hover,
    .navigation .dropdown-list li > a:hover{
        background: none;
        color: #ffffff;
    }
    .navigation ul li:hover > .sub-menu{
        visibility: visible;
        opacity: 1;
    }
    .navigation ul li.current > a{
        color: #ffffff;
    }
    .navigation ul li.current > a:hover{
        color: #ffffff;
    }

    /* Sub Menus */
    .navigation .sub-menu,
    .navigation .dropdown-list{
        width: 18rem;
        text-align: left;
        background: #222222;
        background: rgba(34,34,34,1);
        box-shadow: 0 0.2rem 0.2rem rgba(0,0,0,.3);
        border: none;
        border-radius: 0;
        opacity: 0;
        visibility: hidden;
        position: absolute;
        z-index: 101;
    }
    .navigation .sub-menu li,
    .navigation .dropdown-list li{
        background: none;
        border-bottom: 1px solid #303030;
        float: none;
    }
    .navigation .dropdown-list.custom-content{
        width: auto;
        min-width: 25rem;
        padding: 2rem;
    }

    /* Sub Menu Positions */
    .navigation > ul > li:last-child > .sub-menu,
    .navigation > ul > li.sub-menu-right .sub-menu,
    .navigation .dropdown.pull-right .dropdown-list{
        right: 0;
    }
    .navigation .sub-menu ul{
        top: 0;
        left: 18rem;
    }
    .navigation > ul > li:last-child > .sub-menu ul,
    .navigation > ul > li.sub-menu-right .sub-menu ul{
        right: 18rem;
        left: auto;
    }

    /* Sub Menu Links */
    .navigation .sub-menu:not(.custom-content) li a,
    .navigation .dropdown-list:not(.custom-content) li a{
        padding: 1.2rem 1.5rem;
    }
    .navigation .sub-menu li a,
    .navigation .dropdown-list li a{
        line-height: 1.8;
        color: #666666;
    }
    .navigation .sub-menu li:last-child,
    .navigation .dropdown-list li:last-child{
        border-bottom: none;
    }

    /* Mega Sub Menu */
    .navigation .mega-sub-menu{
        padding: 2rem 0;
        background: #222222;
        background: rgba(34,34,34,1);
        box-shadow: 0 0.2rem 0.2rem rgba(0,0,0,.3);
        opacity: 0;
        visibility: hidden;
        display: block;
        position: absolute;
        left: 1.5rem;
        right: 1.5rem;
        z-index: 101;
    }
    .navigation .mega-sub-menu > li{
        width: 33.33333%;
        padding: 0 2rem;
        text-align: left;
        float: left;
        border-right: 1px solid #303030;
    }
    .navigation .mega-sub-menu > li > a{
        background: none;
        font-weight: bold;
    }
    .navigation .mega-sub-menu > li:hover > a{
        background: none;
    }
    .navigation .mega-sub-menu > li:last-child{
        border-right: none;
    }
    /* Mega Menu Link Parent */
    .navigation .mega-sub-menu > li > a{
        padding: 0rem 1.5rem 0.7rem 1.5rem;
        font-size: 1.2rem;
        line-height: 1.8;
        text-transform: uppercase;
    }
    .navigation .mega-sub-menu ul li p{
        padding: 0rem 1.5rem 0.7rem 1.5rem;
        font-size: 1.2rem;
        margin-bottom: 0;
    }
    /* Mega Menu Child Links */
    .navigation .mega-sub-menu ul li a{
        padding: 0.6rem 1.5rem;
    }
    .navigation .mega-sub-menu ul li.current > a{
        color: #ffffff;
    }
    .navigation .mega-sub-menu ul li:hover > a{
        background: #333333;
    }
    .navigation .mega-sub-menu li ul > li{
        float: none;
    }
    .navigation .mega-sub-menu li.content-column ul li{
        padding: 0.6rem 1.5rem;
    }
    .navigation .mega-sub-menu li.content-column ul li a{
        padding: 0;
    }
    .navigation ul li:hover > .mega-sub-menu{
        visibility: visible;
        opacity: 1;
    }

    /* Sub and Mega Menu Indication */
    .navigation.sub-menu-indicator > ul > li.contains-sub-menu > a:after,
    .navigation.sub-menu-indicator > ul > li.contains-mega-sub-menu > a:after,
    .navigation .sub-menu li.contains-sub-menu > a:after{
        font-family: 'icomoon';
        font-size: inherit;
        font-style: normal;
        font-weight: normal;
        font-variant: normal;
        text-transform: none;
        line-height: inherit;
        display: inline-block;
        position: absolute;
    }
    .navigation.sub-menu-indicator > ul > li.contains-sub-menu,
    .navigation.sub-menu-indicator > ul > li.contains-mega-sub-menu{
        padding-right: 1.2rem;
    }
    .navigation.sub-menu-indicator > ul > li.contains-sub-menu > a:after,
    .navigation.sub-menu-indicator > ul > li.contains-mega-sub-menu > a:after{
        margin-left: 0.5rem;
        content: "\e63e";
    }
    .navigation .sub-menu li.contains-sub-menu > a{
        padding-right: 2.2rem;
    }
    .navigation .sub-menu li.contains-sub-menu > a:after{
        right: 0.8rem;
        content: "\e640";
    }

    /* Menu Animation Attributes */
    .navigation .sub-menu,
    .navigation .mega-sub-menu{
        -webkit-transition-property: -webkit-transform, opacity, visibility, border-color;
        transition-property: transform, opacity, visibility, border-color;
        -webkit-transition-duration: 400ms;
        transition-duration: 400ms;
    }
    .navigation ul li a{
        -webkit-transition-property: background, border-color, color, line-height;
        transition-property: background, border-color, color, line-height;
        -webkit-transition-duration: 500ms;
        transition-duration: 500ms;
    }

    /* Aux Nav Toggle Button*/
    .aux-navigation{
        display: none;
    }
    .navigation-show,
    .navigation-hide{
        width: 4.4rem;
        height: 4.4rem;
        text-align: center;
        float: right;
    }
    .navigation-show a,
    .navigation-hide a{
        height: 4.4rem;
        text-align: center;
        display: block;
    }
    .navigation-show span,
    .navigation-hide span{
        width: 100%;
        line-height: 4.4rem;
    }
    .navigation-show a{
        color:#666666;
    }
    .navigation-show a:hover{
        color:#fff;
    }
    .navigation-hide{
        position: relative;
        z-index: 10;
    }
    .navigation-hide a{
        color: #666666;
    }
    .navigation-hide a:hover{
        color:#fff;
    }

    /* Mobile */
    .mobile .logo.logo-center{
        float: left;
    }
    .mobile header .navigation:not(.secondary-navigation){
        display: none !important;
    }

    /* Mobile Access */
    .mobile .aux-navigation{
        display: table !important;
        visibility: visible;
    }

    /*------------------------------------------------------------------
    [6. Side Navigation]
    */

    /* Associated Wrapper Class */
    .reveal-side-navigation > div:after {
        position: absolute;
        top: 0;
        right: 0;
        width: 0;
        height: 0;
        background: rgba(0,0,0,0);
        content: '';
        opacity: 0;
        z-index: 110;
        -webkit-transition: opacity 300ms, width 0ms, height 0ms;
        transition: opacity 300ms, width 0ms, height 0ms;
    }
    .inactive.reveal-side-navigation > div:after {
        width: 100%;
        height: 100%;
        opacity: 1;
        -webkit-transition: opacity 300ms;
        transition: opacity 300ms;
    }

    /* Associated Wrapper Animation */
    .element-reveal-left{
        -webkit-transform: translate3d(35rem,0,0);
        transform: translate3d(35rem,0,0);
    }
    .element-reveal-right{
        -webkit-transform: translate3d(-35rem,0,0);
        transform: translate3d(-35rem,0,0);
    }

    /* Side Navigation Wrapper */
    .side-navigation-wrapper,
    .side-navigation-inner{
        width: 35rem;
    }
    .side-navigation-wrapper{
        height: 100%;
        padding: 0;
        background: #292929;
        box-shadow: inset -7px 0 9px -7px rgba( 0, 0, 0, 0.6 );
        overflow-y: scroll;
        visibility: hidden;
        position: fixed;
        left: 0;
        right: auto;
        -webkit-transform: translate3d(-100%,0,0);
        transform: translate3d(-100%,0,0);
        -webkit-backface-visibility: hidden;
    }

    .side-navigation-wrapper.active{
        visibility: visible;
    }
    .side-navigation-wrapper.enter-right{
        text-align: left;
        box-shadow: inset 7px 0 9px -7px rgba( 0, 0, 0, 0.6 );
        right: 0;
        left: auto;
        -webkit-transform: translate3d(100%,0,0);
        transform: translate3d(100%,0,0);
    }
    .side-navigation-wrapper.no-scrollbar{
        overflow: hidden;
    }
    .no-scrollbar .side-navigation-scroll-pane{
        height: 100%;
        overflow-x: hidden;
        overflow-y: scroll;
        position: absolute;
        left: 0;
    }
    .no-scrollbar .side-navigation-scroll-pane::-webkit-scrollbar{
        display: none;
    }
    .side-navigation-inner{
        min-height: 100%;
        position: relative;
    }

    /* Side Navigation Animation Classes */
    /* no transition */
    .side-navigation-wrapper.no-transition-reset{
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0);
    }
    /* slide in */
    .side-navigation-wrapper.slide-in-reset{
        z-index: 104;
    }
    .side-navigation-wrapper.slide-in{
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0);
    }
    .element-reveal-left.slide-in,
    .element-reveal-right.slide-in{
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0);
    }

    /* push in */
    .side-navigation-wrapper.push-in-reset{
        -webkit-transform: translate3d(-60%,0,0);
        transform: translate3d(-60%,0,0);
    }
    .side-navigation-wrapper.enter-right.push-in-reset{
        -webkit-transform: translate3d(60%,0,0);
        transform: translate3d(60%,0,0);
    }
    .side-navigation-wrapper.push-in,
    .side-navigation-wrapper.enter-right.push-in{
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0);
    }

    /* reveal */
    .side-navigation-wrapper.reveal-reset,
    .side-navigation-wrapper.enter-right.reveal-reset{
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0);
    }

    /* scale in */
    .side-navigation-wrapper.scale-in-reset,
    .side-navigation-wrapper.enter-right.scale-in-reset{
        -webkit-transform: translate3d(0,0,0) scale(0.9);
        transform: translate3d(0,0,0) scale(0.9);
    }
    .side-navigation-wrapper.scale-in,
    .side-navigation-wrapper.enter-right.scale-in{
        -webkit-transform: translate3d(0,0,0) scale(1);
        transform: translate3d(0,0,0) scale(1);
    }

    /* Animation Properties */
    .side-navigation-wrapper,
    .reveal-side-navigation{
        -webkit-transition: -webkit-transform 550ms, visibility 0ms;
        transition: transform 550ms, visibility 0ms;
    }

    /* Side navigation fallback for
     non CSS3 supporting browsers */
    .side-navigation-wrapper.hide{
        visibility: hidden;
        left: -35rem;
    }
    .side-navigation-wrapper.enter-right.hide{
        right: -35rem;
    }
    .element-show-left{
        left: 35rem;
    }
    .element-show-right{
        left: -35rem;
    }
    .element-show-left,
    .element-show-right{
        position: relative !important;
    }

    /* Menu */
    .side-navigation{
        width: 100%;
    }
    .side-navigation:before,
    .side-navigation:after{
        content: ".";
        display: block;
        height: 0;
        overflow: hidden;
        clear: both;
    }
    .side-navigation ul{
        padding: 0;
        margin: 0;
        list-style: none;
    }
    .side-navigation ul li{
        width:100%;
        display:block;
        margin-bottom: 0;
    }
    .side-navigation > ul > li > a{
        padding: 1.3rem 4rem;
    }
    .side-navigation ul li a{
        font-size: 1.2rem;
        line-height: 1;
        color: #999999;
        text-decoration: none;
        display: block;
        word-wrap: break-word;
        -webkit-transition-property: background, color;
        transition-property: background, color;
        -webkit-transition-duration: 300ms;
        transition-duration: 300ms;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }
    .side-navigation ul li a:hover{
        color:#ffffff;
    }
    .side-navigation ul li.current > a{
        color:#ffffff;
        font-weight: bold;
    }
    .side-navigation ul li.current > a:hover{
        color:#ffffff;
    }
    .side-navigation .sub-menu:not(.custom-content) a{
        padding: 1.1rem 4rem 1.1rem 5.5rem;
    }
    .side-navigation.center .sub-menu:not(.custom-content) a{
        padding: 1.1rem 4rem 1.1rem 4rem;
    }
    .side-navigation .sub-menu .sub-menu a{
        padding-left: 7rem;
    }
    .side-navigation  ul li:hover > .sub-menu{
        opacity: 1;
    }
    .side-navigation .sub-menu{
        overflow: hidden;
    }
    .side-navigation .sub-menu{
        height: 0;
        -webkit-transition-property: height;
        transition-property: height;
        -webkit-transition-duration: 300ms;
        transition-duration: 300ms;
    }

    /*------------------------------------------------------------------
    [7. Overlay Navigation]
    */

    .overlay-navigation-wrapper,
    .overlay-navigation-inner{
        width: 100vw;
    }
    .overlay-navigation-wrapper{
        width: 100vw;
        height: 100%;
        min-height: 100%;
        background-color: rgba( 0, 0, 0, 0.8 );
        overflow-y: scroll;
        visibility: hidden;
        position: fixed;
        top: -100%;
        z-index: 101;
    }
    .overlay-navigation-wrapper.active{
        visibility: visible;
        top: 0 !important;
    }
    .overlay-navigation-wrapper.no-scrollbar{
        overflow: hidden;
    }
    .overlay-navigation-scroll-pane{
        height: 100%;
    }
    .no-scrollbar .overlay-navigation-scroll-pane{
        overflow-x: hidden;
        overflow-y: scroll;
        position: absolute;
        left: 0;
    }
    .no-scrollbar .overlay-navigation-scroll-pane::-webkit-scrollbar{
        display: none;
    }
    .overlay-navigation-inner{
        height: 100%;
        display: table;
        position: relative;
    }
    .overlay-navigation-inner .v-align-middle{
        min-height: 100%;
        display: table-cell;
        vertical-align: middle;
    }

    /* Overlay Navigation Animation Classes */
    /* no transition */
    .overlay-navigation-wrapper.no-transition-reset{
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0);
    }
    /* fade in */
    .overlay-navigation-wrapper.fade-in-reset{
        opacity: 0;
    }
    .overlay-navigation-wrapper.fade-in{
        opacity: 1;
    }
    /* slide in */
    .overlay-navigation-wrapper.slide-in-reset{
        -webkit-transform: translate3d(-100%,0,0);
        transform: translate3d(-100%,0,0);
        opacity: 0;
    }
    .overlay-navigation-wrapper.enter-top.slide-in-reset{
        -webkit-transform: translate3d(0,-100%,0);
        transform: translate3d(0,-100%,0);
        opacity: 0;
    }
    .overlay-navigation-wrapper.enter-right.slide-in-reset{
        -webkit-transform: translate3d(100%,0,0);
        transform: translate3d(100%,0,0);
        opacity: 0;
    }
    .overlay-navigation-wrapper.enter-bottom.slide-in-reset{
        -webkit-transform: translate3d(0,100%,0);
        transform: translate3d(0,100%,0);
        top: 100%;
        opacity: 0;
    }
    .overlay-navigation-wrapper.slide-in,
    .overlay-navigation-wrapper.enter-top.slide-in,
    .overlay-navigation-wrapper.enter-right.slide-in,
    .overlay-navigation-wrapper.enter-bottom.slide-in{
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0);
        opacity: 1;
    }

    /* scale in */
    .overlay-navigation-wrapper.scale-in-reset{
        -webkit-transform: translate3d(0,0,0) scale(0.8);
        transform: translate3d(0,0,0) scale(0.8);
        opacity: 0;
    }
    .overlay-navigation-wrapper.scale-in{
        -webkit-transform: translate3d(0,0,0) scale(1);
        transform: translate3d(0,0,0) scale(1);
        opacity: 1;
    }

    /* Animation Properties */
    .overlay-navigation-wrapper{
        -webkit-transition: -webkit-transform 550ms, opacity 550ms;
        transition: transform 550ms, opacity 550ms;
    }

    /* Menu */
    .overlay-navigation{
        max-width: 30rem;
        margin-left: auto;
        margin-right: auto;
    }
    .overlay-navigation:before,
    .overlay-navigation:after{
        content: ".";
        display: block;
        height: 0;
        overflow: hidden;
        clear: both;
    }
    .overlay-navigation ul{
        padding: 0;
        margin: 0;
        list-style: none;
    }
    .overlay-navigation ul li{
        width: 100%;
        display: block;
        margin-bottom: 0;
    }
    .overlay-navigation > ul > li > a{
        padding: 0.6rem 0;
    }
    .overlay-navigation ul li a{
        font-size: 1.2rem;
        line-height: 1.5;
        color: #878787;
        text-decoration: none;
        display: block;
        word-wrap: break-word;
        -webkit-transition-property: background, color;
        transition-property: background, color;
        -webkit-transition-duration: 300ms;
        transition-duration: 300ms;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }
    .overlay-navigation ul li a:hover{
        color: #ffffff;
    }
    .overlay-navigation ul li.current > a{
        color:#ffffff;
        font-weight: bold;
    }
    .overlay-navigation ul li.current > a:hover{
        color:#ffffff;
    }
    .overlay-navigation .sub-menu:not(.custom-content) a{
        padding: 1.1rem 4rem 1.1rem 5.5rem;
    }
    .overlay-navigation.center .sub-menu:not(.custom-content) a{
        padding: 1.1rem 4rem 1.1rem 4rem;
    }
    .overlay-navigation .sub-menu a{
        color: #666666;
    }
    .overlay-navigation .sub-menu .sub-menu a{
        padding-left: 7rem;
    }
    .overlay-navigation  ul li:hover > .sub-menu{
        opacity: 1;
    }
    .overlay-navigation .sub-menu{
        overflow: hidden;
    }
    .overlay-navigation .sub-menu{
        height: 0;
        -webkit-transition-property: height, border-color;
        transition-property: height, border-color;
        -webkit-transition-duration: 300ms;
        transition-duration: 300ms;
    }

    /*------------------------------------------------------------------
[5. Header & Navigation]
*/
    .nav-bar.nav-main{
        width: 100%;
        background: none;
        position: absolute;
        z-index: 100;
    }
    .nav-bar.nav-main > .row > .column{
        border-bottom: 1px solid rgba(255,255,255,0.1);
    }
    .nav-bar,
    .nav-bar .logo,
    .nav-bar .navigation > ul > li,
    .nav-bar .navigation > ul > li > a:not(.button){
        height: 6rem;
        line-height: 6rem;
    }
    .nav-bar.nav-main .logo a{
        color: #fff;
    }
    .nav-bar.nav-main .navigation > ul > li > a{
        color: #fff;
        opacity: 0.5;
    }
    .nav-bar.nav-main .navigation ul li a:hover,
    .nav-bar.nav-main .navigation ul li.current > a{
        background: none;
        opacity: 1;
    }
    .navigation .navigation-show{
        line-height: 1;
        font-size: 2.4rem;
    }
    .navigation-show > a{
        color: #fff;
    }

    /* Side Navigation */
    .side-navigation .label{
        float: right;
        font-size: 0.9rem;
        font-weight: 200;
    }
    .side-navigation-header,
    .side-navigation-footer{
        font-size: 1.4rem;
        line-height: 1.8;
    }
    .side-navigation-header{
        min-height: 5rem;
        padding: 0 4rem;
    }
    .side-navigation-footer{
        padding: 2rem 4rem;
    }
    .side-navigation-header .logo{
        min-height: 6rem;
        line-height: 6rem;
        float: left;
    }
    .navigation-header .logo a{
        font-size: 1.5rem;
        font-weight:bold;
        text-decoration: none;
        color: #666666;
    }
    .navigation-hide{
        position: absolute;
        right: 0;
        top: 1rem;
    }
    .navigation-hide a{
        color: #999;
    }
    .mobile .navigation-show{
        display: table;
    }
    .mobile .navigation-show a{
        height: 100%;
        display: table-cell;
        vertical-align: middle;
    }
    @media only screen and (max-width: 960px) {
        .navigation-show{
            display: table;
        }
        .navigation-show a{
            height: 100%;
            color: #fff;
            display: table-cell;
            vertical-align: middle;
        }
    }
</style>

<header class="header">
    <div class="header-inner">
        <div class="row nav-bar">
            <div class="column width-12 nav-bar-inner">
                <div class="logo">
                    <span>Your Logo</span>
                </div>
                <nav class="navigation nav-block secondary-navigation nav-right">
                    <ul>
                        <li>
                            <a class="nav-icon">
                                <span class="icon-shopping-cart medium"></span>
                            </a>
                        </li>
                        <li>
                            <a class="nav-icon">
                                <span class="icon-magnifying-glass medium"></span>
                            </a>
                        </li>
                        <li class="aux-navigation hide">
                            <a class="navigation-show side-nav-show nav-icon">
                                <span class="icon-menu medium"></span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <nav class="navigation nav-block primary-navigation nav-right">
                    <ul>
                        <li class="current"><a href="#">Menu Item 1</a></li>
                        <li><a href="#">Menu Item 2</a></li>
                        <li><a href="#">Menu Item 3</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
