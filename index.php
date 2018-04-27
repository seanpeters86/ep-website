<!doctype html>
<html lang="en" data-ng-app="EP" ng-controller="AppCtrl">
<head>
    <meta charset="UTF-8">
    <base href="/" />
    <meta name="fragment" content="!" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <title ng-bind="$state.current.name + ' - Exiled Power'">Exiled Power</title>
    <link rel="stylesheet" href="dist/css/style.min.css">
    <script>
        (function(d) {
            var config = {
                    kitId: 'orf7obg',
                    scriptTimeout: 3000,
                    async: true
                },
                h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
        })(document);
    </script> 
</head>
<body>
<?php include_once('dist/partials/nav.php');
?>
<div ui-view="" class="mainStage-content" autoscroll="false"></div>
<div class="testrow">
    <div ui-view="bkg" class="top-bar-logo"  autoscroll="false"></div>
    <div ui-view="subcontent" class="mainStage-subcontent"  autoscroll="false"></div>
</div>
<div id="footer-wrapper">
    <footer  class="footer-2" role="contentinfo">
        <div class="footer-logo is-link" ui-sref="home">
            <img src="dist/img/EP_Icon.png" alt="Logo image">
        </div>
        <div class="footer-secondary-links">
            <ul class="footer-social">
                <li social-icon><a href="https://www.youtube.com/channel/UClDUcIXf0USA_WRRuFsmfCw">
                        <i class=" fa fa-icon fa-2x fa-youtube-square"></i>
                    </a></li>
                <li social-icon><a href="https://twitch.tv/exiledpowerus">
                        <i class=" fa fa-icon fa-2x fa-twitch"></i>
                    </a></li>
                <li social-icon><a href="https://plus.google.com/113225422740972540856/posts">
                    <i class=" fa fa-icon fa-2x fa-google-plus-square"></i>
                </a></li>
            </ul>
        </div>
    </footer>
</div>
<script src="dist/js/output.min.js?v=09.30.2017"></script>
<script src="dist/js/core.min.js?v=09.30.2017"></script>
<script src="dist/js/app.min.js?v=09.30.2017"></script>
</body>
</html>
