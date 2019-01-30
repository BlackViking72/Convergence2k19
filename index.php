<?php ?>
<!DOCTYPE html>
<html>
<head>

    <link rel="icon" href="images/logo.png">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link type="text/css" rel="stylesheet" href="css/custom.css">
    <link type="text/css" rel="stylesheet" href="css/animate.css">
    <script type="text/javascript" src="js/particles.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <title>Convergence</title>
    <script>
        var countDownDate = <?php echo strtotime('Sep 15, 2019 00:00:00') ?> * 1000;
        var now = <?php echo time() ?> * 1000;

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get todays date and time
            // 1. JavaScript
            // var now = new Date().getTime();
            // 2. PHP
            now = now + 1000;

            // Find the distance between now an the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            document.getElementById("days").innerHTML = days;
            document.getElementById("hours").innerHTML = hours;
            document.getElementById("minutes").innerHTML = minutes;
            document.getElementById("seconds").innerHTML = seconds;

            // If the count down is over, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
            }
        }, 1000);
        function particle(){
            particlesJS("particles-js", {"particles":{"number":{"value":6,"density":{"enable":true,"value_area":800}},"color":{"value":"#1b1e34"},"shape":{"type":"polygon","stroke":{"width":0,"color":"#000"},"polygon":{"nb_sides":6},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.3,"random":true,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":160,"random":false,"anim":{"enable":true,"speed":10,"size_min":40,"sync":false}},"line_linked":{"enable":false,"distance":200,"color":"#ffffff","opacity":1,"width":2},"move":{"enable":true,"speed":8,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":false,"mode":"grab"},"onclick":{"enable":false,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});var count_particles, stats, update; stats = new Stats; stats.setMode(0); stats.domElement.style.position = 'absolute'; stats.domElement.style.left = '0px'; stats.domElement.style.top = '0px'; document.body.appendChild(stats.domElement); count_particles = document.querySelector('.js-count-particles'); update = function() { stats.begin(); stats.end(); if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) { count_particles.innerText = window.pJSDom[0].pJS.particles.array.length; } requestAnimationFrame(update); }; requestAnimationFrame(update);;
        }
    </script>
    <style>
        #particles-js{ position:absolute; width: 100%; height: 100%; background-color: #fff; background-image: url(""); background-repeat: no-repeat; background-size: cover; background-position: 50% 50%; } /* ---- stats.js ---- */ .count-particles{ background: #000022; position: absolute; top: 48px; left: 0; width: 80px; color: #fff; font-size: .8em; text-align: left; text-indent: 4px; line-height: 14px; padding-bottom: 2px; font-family: Helvetica, Arial, sans-serif; font-weight: bold; } .js-count-particles{ font-size: 1.1em; } #stats, .count-particles{ -webkit-user-select: none; margin-top: 5px; margin-left: 5px; } #stats{ border-radius: 3px 3px 0 0; overflow: hidden; } .count-particles{ border-radius: 0 0 3px 3px; }
    </style>
</head>
<body onload="particle()" style="background: #fff;">
<!-- particles.js container --> 
<div id="particles-js"></div>
<!-- stats - count particles -->

<!-- stats.js lib --> 

    <div class="temp">
        <div class="row"></div>
        <div class="row">
            <div class="col m12 s12 center" style="">
                <img src="images/1.png" style="height: 100%;width: 100%" class="animated slideInUp">
            </div>
        </div>
    <div class="row">
        <div class="col m4"></div>
        <div class="col m4 s12">


            <div style="margin-left: 13% ;" class="animated slideInUp">
                    <div class="days">
                        <span id="days"><b>---</b></span>
                        <span class="day">days</span>
                    </div>
                    <div class="time">
                        <div class="hours">
                            <span id="hours">-</span>
                            <span class="hms">H</span>
                        </div>
                        <div class="minutes">
                            <span id="minutes">-</span>
                            <span class="hms">M</span>
                        </div>
                        <div class="seconds">
                            <span id="seconds">-</span>
                            <span class="hms">S</span>
                        </div>
                    </div>
            </div>

        </div>
        <div class="col m4"></div>
    </div>

        <div class="row" style="margin-top:3rem">
            <div class="col m4"></div>
            <div class="col m4 s12">
                <div class="card btn-flat animated fadeInUp">
                    <div class="card-content center">
                        <span style="text-decoration: black; font-weight: bolder;font-size:1.2rem;">Stay tuned ... <br>Events will be added shortly...</span>
                    </div>
                </div>
            </div>
            <div class="col m4"></div>
        </div>
    </div>
</body>
</html>
