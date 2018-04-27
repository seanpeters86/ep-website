<header id="centered-navigation" class="centered-navigation" role="banner" ng-controller="navCtrl" sm-scene="navpin" trigger-hook="0" sm-pin="navpin">
    <div class="centered-navigation-wrapper" >
        <a ui-sref="home" class="mobile-logo" >
            <img src="dist/img/EP_Icon.png" alt="Logo image">
            <span>Exiled Power</span>
        </a>
<!--        <a href="javascript:void(0)" id="js-centered-navigation-mobile-menu" class="centered-navigation-mobile-menu" ng-click="toggleMenu()" id="js-mobile-menu"></a>-->
        <a pageslide="left" ps-speed="0.5" ps-size="420" ps-timeout="0" ps-clicktoclose="yes" href="#mobile-menu" class="centered-navigation-mobile-menu">
            <div id="pageslide-tag">
                <div class="hamburger-menu">
                    <div class="bar" ng-class="{ 'animate': menu}"></div>
                </div>
            </div>
        </a>
        <nav role="navigation">
            <ul id="js-centered-navigation-menu" ng-class="{ 'open': menu}" class="centered-navigation-menu repeater-animation" ng-cloak ng-show="menu"  >
                <li ui-sref-active="active" class="nav-link logo">
                    <a ui-sref="home"  class="logo">
                        <img src="dist/img/EP_Icon.png" alt="Logo image">
                    </a>
                </li>
                <li ui-sref-active="active" class="nav-link"><a  ui-sref="recruitment">Recruitment</a></li>
                <li ui-sref-active="active" class="nav-link"><a  ui-sref="roster">Roster</a></li>
                <li ui-sref-active="active" class="nav-link"><a  ui-sref="bosskills">Boss Kills</a></li>
                <li ui-sref-active="active" class="nav-link"><a  ui-sref="classResources">Class Resources</a>
                </li>
                <li ui-sref-active="active" class="nav-link"><a  ui-sref="twitch">Twitch</a></li>
            </ul>
        </nav>
    </div>
</header>

<div id="mobile-menu" ng-cloak>
    <header>
        <div class="logo">
            <button id="mobile-menu-close">
                <i class="fa fa-icon fa-times"></i>
            </button>
            <img ui-sref="home" src="/dist/img/EP_Icon.png" alt="">
        </div>
    </header>
    <div id="menu-container" ng-iscroll="sidemenu" ng-iscroll-delay="100" ng-controller="menuCtrl" >
        <div class="scroller">

            <ul class="mainmenu">
                <li>
                    <a ui-sref="recruitment"><span>Recruitment</span></a>
                </li>
                <li>
                    <a ui-sref="roster"><span>Roster</span></a>
                </li>
                <li class="nav-link">
                    <a  ui-sref="bosskills">Boss Kills</a>
                </li>
                <li class="nav-link">
                    <a  ui-sref="classResources">Class Resources</a>
                    <rowtoggle class="closed"></rowtoggle>
                    <ul>
                        <li><a ui-sref="deathknight">Death Knight</a></li>
                        <li><a ui-sref="druid">Druid</a></li>
                        <li><a ui-sref="mage">Mage</a></li>
                        <li><a ui-sref="monk">Monk</a></li>
                        <li><a ui-sref="paladin">Paladin</a></li>
                        <li><a ui-sref="priest">Priest</a></li>
                        <li><a ui-sref="rogue">Rogue</a></li>
                        <li><a ui-sref="shaman">Shaman</a></li>
                        <li><a ui-sref="warlock">Warlock</a></li>
                        <li><a ui-sref="warrior">Warrior</a></li>
                    </ul>
                </li>
                <li class="nav-link"><a  ui-sref="twitch">Twitch</a></li>
            </ul>
        </div>
    </div>
</div>
