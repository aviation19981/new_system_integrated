<?php
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
$web = "http://" . $host;


?>
<!DOCTYPE html>
<html lang="es-CO" class="no-js">
	
	<head>
		<meta charset="utf-8">
        <title>IVAO Colombia</title>
        <meta name="description" content="En IVAO Colombia, división de IVAO (International Virtual Aviation Organisation), puedes volar o controlar un aeropuerto con el máximo profesionalismo posible. Además es totalmente gratis.">
        <meta name="keywords" content="IVAO, IVAO Colombia, Aviacion virtual, FSX, Prepar3d, Division IVAO Colombia, p3d" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Andres Zapata y Felipe Lobo">
    <meta property="og:title" content="IVAO Colombia" />
    <meta property="og:description" content="En IVAO Colombia, división de IVAO (International Virtual Aviation Organisation), puedes volar o controlar un aeropuerto con el máximo profesionalismo posible. Además es totalmente gratis." />
    <meta property="og:image" content="<?php echo $web; ?>/img/co.svg" />      
    <meta property="og:url" content="<?php echo $web; ?>" />
        <!-- ================= Favicon ================== -->
        <!-- Standard -->
        <link rel="shortcut icon" href="./img/favicon.png">
     
        <!-- ============== Resources style ============== -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700" />
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/combined.min.css" />


        <!-- <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css"> -->
        

		<!-- Modernizr runs quickly on page load to detect features -->
		<script src="js/modernizr.js"></script>
		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-91048650-1', 'auto');
  ga('send', 'pageview');

</script>
	</head>

	<body>

		<div class="loading-part animated-quick">

			<div class="loader-part opacity-0 animated-quick">

				<div class="loader-circle"></div>
				<div class="loader-text">IVAO Colombia</div>

			</div>

		</div>

		<button class="open-menu-mobile">
			<i class="fa fa-bars opening-menu"></i>
			<i class="fa fa-times closing-menu display-none"></i>
		</button>

		<div id="navigation" class="mobile-nav animated-middle">

			<ul class="main-navigation">

				
			

			

			</ul> <!-- CLOSE Main nav -->

			<ul class="bottom-nav">
		<li class="google-color">
					<a target="_blank" href="https://plus.google.com/u/0/109843136396902602405" title="">
						<i class="fa fa-google-plus"></i>
						Google
					</a>
				</li>
			<li class="instagram-color">
					<a target="_blank" href="https://www.instagram.com/ivaocolombia/" title="">
						<i class="fa fa-instagram"></i>
						Instagram
					</a>
				</li>
				
                <li class="youtube-color">
					<a target="_blank" href="https://www.youtube.com/channel/UCOUr_AMGqcMu2JZwSCzWPQA" title="">
						<i class="fa fa-youtube-play"></i>
						Youtube
					</a>
				</li>
				
				<li class="twitter-color">
					<a target="_blank" href="https://twitter.com/ivaoco" title="">
						<i class="fa fa-twitter"></i>
						Twitter
					</a>
				</li>

				<li class="facebook-color">
					<a  target="_blank" href="https://www.facebook.com/ivaoco/" title="">
						<i class="fa fa-facebook"></i>
						Facebook
					</a>
				</li>

			</ul> <!-- CLOSE .bottom-nav -->

		</div> <!-- CLOSE #navigation -->
		
		<?php
 
$idioma = substr ( $_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
 
if ($idioma == "es") {

?>

		<section id="home-part" class="scale-max">

			<div class="overlay"></div>

			<div class="item-title text-center animated-quick">

				<!-- Your logo -->
				<img src="./img/co.svg" alt="" class="brand-logo"/>
				
				<h1 class="cd-headline letters rotate-2">
					NOSOTROS SOMOS

					<div class="cd-words-wrapper">

						<b class="is-visible">IVAO &nbsp;COLOMBIA</b> <!-- use the code &nbsp; to add a space between 2 words -->
						<b>Los &nbsp;Mejores</b>
						<b>Profesionales &nbsp;del &nbsp;aire</b>

					</div>

				</h1>

			
			
			
			
			
			<!-- <p>Idiomas</p> -->

				<a class="btn open-newsletter btn-color" href="./../main/?lang=es"><i class="fa fa-home"></i> Español</a>

				<a class="btn open-newsletter btn-light" href="./../main/?lang=en"><i class="fa fa-globe"></i> English</a>
				
				<a class="btn open-newsletter btn-light" href="https://login.ivao.aero/index.php?url=<?php echo $web; ?>/usuarios/login.php"><i class="fa fa-plane"></i> Zona Usuarios</a>
				
				<a class="btn open-newsletter btn-light" href="https://login.ivao.aero/index.php?url=<?php echo $web; ?>/admin/intranet/login.php"><i class="fa fa-cog"></i> Staff</a>
			
			    <a class="btn open-newsletter btn-color" href="http://colxplane.<?php echo $host; ?>" ><i class="fa fa-plane"></i> ColXplane</a>
			
			    
			
			
			</div> <!-- CLOSE item-title -->
				

		</section> <!-- CLOSE #home-part -->

		
<?php } else {
	
	?>
	
	<section id="home-part" class="scale-max">

			<div class="overlay"></div>

			<div class="item-title text-center animated-quick">

				<!-- Your logo -->
				<img src="./img/co.svg" alt="" class="brand-logo"/>
				
				<h1 class="cd-headline letters rotate-2">
					WE ARE THE

					<div class="cd-words-wrapper">

						<b class="is-visible">Best &nbsp;Division</b> <!-- use the code &nbsp; to add a space between 2 words -->
						<b>best &nbsp;pilots</b>
						<b>best &nbsp;Air&nbsp;controllers</b>

					</div>

				</h1>

				<!-- <p>Languages</p> -->

				<a class="btn open-newsletter btn-light" href="./../main/?lang=en"><i class="fa fa-home"></i> English</a>
				
				<a class="btn open-newsletter btn-color" href="./../main/?lang=es"><i class="fa fa-globe"></i> Español</a>

				
				
				<a class="btn open-newsletter btn-light" href="https://login.ivao.aero/index.php?url=<?php echo $web; ?>/usuarios/login.php"><i class="fa fa-plane"></i> User zone</a>
			
			    <a class="btn open-newsletter btn-light" href="https://login.ivao.aero/index.php?url=<?php echo $web; ?>/admin/intranet/login.php"><i class="fa fa-cog"></i> Admin</a>
			
			    <a class="btn open-newsletter btn-color" href="http://colxplane.<?php echo $host; ?>" ><i class="fa fa-plane"></i> ColXplane</a>
			
			
			</div> <!-- CLOSE item-title -->
				

		</section> <!-- CLOSE #home-part -->
		
<?php
	
}
?>	

		

		<!-- Copyright -->
		<p class="copyright">©IVAO CO <?php date_default_timezone_set('UTC'); echo date('Y'); ?></p>


	<!-- ///////////////////\\\\\\\\\\\\\\\\\\\ -->
    <!-- ********** Resources jQuery ********** -->
    <!-- \\\\\\\\\\\\\\\\\\\/////////////////// -->
	
	<!-- * Libraries jQuery, Easing and Bootstrap - Be careful to not remove them * -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.easings.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

	<!-- Google Maps API -->
	<!-- <script src="http://maps.google.com/maps/api/js?sensor=false"></script> -->

	<!-- Countdown plugin -->
	<!-- <script src="js/countdown.js"></script> -->

	<!-- Newsletter plugin -->
	<!-- <script src="js/notifyMe.js"></script> -->

	<!-- Contact form plugin -->
	<!-- <script src="js/contact-me.js"></script> -->

	<!-- Swipebox plugin -->
	<script src="js/jquery.swipebox.js"></script>

	<!-- Text rotator plugin -->
	<script src="js/animated-headlines.js"></script>

	<!-- Scroll plugin -->
	<script src="js/jquery.mousewheel.js"></script>

	<!-- Slideshow plugin -->
	<script>
	/*!-----------------------------------------------------------------------------
 * Vegas - Fullscreen Backgrounds and Slideshows.
 * v2.1.3 - built 2015-04-28
 * Licensed under the MIT License.
 * http://vegas.jaysalvat.com/
 * ----------------------------------------------------------------------------
 * Copyright (C) 2010-2015 Jay Salvat
 * http://jaysalvat.com/
 * --------------------------------------------------------------------------*/

$(window).load(function() {

    setTimeout(function() {

        $('#home-part').vegas({
            slides: [
                { src: './main/img/portada/1.jpg' },
                { src: './main/img/portada/2.jpg' },
                { src: './main/img/portada/3.jpg' },
                { src: './main/img/portada/4.jpg' },
                { src: './main/img/portada/5.jpg' },
                { src: './main/img/portada/6.jpg' },
                { src: './main/img/portada/7.jpg' },
                { src: './main/img/portada/8.jpg' },
                { src: './main/img/portada/9.jpg' },
                { src: './main/img/portada/10.jpg' },
            ],

            // Delay beetween slides in milliseconds.
            delay: 5000,

            // Chose your transition effect (See the documentation provided in your download pack)
            transition: 'fade'
        });

    }, 1999);
    
});

(function ($) {
    'use strict';

    var defaults = {
        slide:              0,
        delay:              5000,
        preload:            false,
        preloadImage:       false,
        preloadVideo:       false,
        timer:              true,
        overlay:            false,
        autoplay:           true,
        shuffle:            false,
        cover:              true,
        color:              null,
        align:              'center',
        valign:             'center',
        transition:         'fade',
        transitionDuration: 1000,
        transitionRegister: [],
        animation:          null,
        animationDuration:  'auto',
        animationRegister:  [],
        init:  function () {},
        play:  function () {},
        pause: function () {},
        walk:  function () {},
        slides: [
            // {   
            //  src:                null,
            //  color:              null,
            //  delay:              null,
            //  align:              null,
            //  valign:             null,
            //  transition:         null,
            //  transitionDuration: null,
            //  animation:          null,
            //  animationDuration:  null,
            //  cover:              true,
            //  video: {
            //      src: [],
            //      mute: true,
            //      loop: true
            // }
            // ...
        ]
    };

    var videoCache = {};

    var Vegas = function (elmt, options) {
        this.elmt         = elmt;
        this.settings     = $.extend({}, defaults, $.vegas.defaults, options);
        this.slide        = this.settings.slide;
        this.total        = this.settings.slides.length;
        this.noshow       = this.total < 2;
        this.paused       = !this.settings.autoplay || this.noshow;
        this.$elmt        = $(elmt);
        this.$timer       = null;
        this.$overlay     = null;
        this.$slide       = null;
        this.timeout      = null;

        this.transitions = [
            'fade', 'fade2',
            'blur', 'blur2',
            'flash', 'flash2',
            'negative', 'negative2',
            'burn', 'burn2',
            'slideLeft', 'slideLeft2',
            'slideRight', 'slideRight2',
            'slideUp', 'slideUp2',
            'slideDown', 'slideDown2',
            'zoomIn', 'zoomIn2',
            'zoomOut', 'zoomOut2',
            'swirlLeft', 'swirlLeft2',
            'swirlRight', 'swirlRight2'
        ];

        this.animations = [
            'kenburns',
            'kenburnsLeft', 'kenburnsRight',
            'kenburnsUp', 'kenburnsUpLeft', 'kenburnsUpRight',
            'kenburnsDown', 'kenburnsDownLeft', 'kenburnsDownRight'
        ];

        if (this.settings.transitionRegister instanceof Array === false) {
            this.settings.transitionRegister = [ this.settings.transitionRegister ];
        }

        if (this.settings.animationRegister instanceof Array === false) {
            this.settings.animationRegister = [ this.settings.animationRegister ];
        }
        
        this.transitions = this.transitions.concat(this.settings.transitionRegister);
        this.animations  = this.animations.concat(this.settings.animationRegister);

        this.support = {
            objectFit:  'objectFit'  in document.body.style,
            transition: 'transition' in document.body.style || 'WebkitTransition' in document.body.style,
            video:      $.vegas.isVideoCompatible()
        };

        if (this.settings.shuffle === true) {
            this.shuffle();
        }

        this._init();
    };

    Vegas.prototype = {
        _init: function () {
            var $wrapper,
                $overlay,
                $timer,
                isBody  = this.elmt.tagName === 'BODY',
                timer   = this.settings.timer,
                overlay = this.settings.overlay,
                self    = this;

            // Preloading
            this._preload();

            // Wrapper with content
            if (!isBody) {
                this.$elmt.css('height', this.$elmt.css('height'));
                
                $wrapper = $('<div class="vegas-wrapper">')
                    .css('overflow', this.$elmt.css('overflow'))
                    .css('padding',  this.$elmt.css('padding'));

                // Some browsers don't compute padding shorthand
                if (!this.$elmt.css('padding')) {
                    $wrapper
                        .css('padding-top',    this.$elmt.css('padding-top'))
                        .css('padding-bottom', this.$elmt.css('padding-bottom'))
                        .css('padding-left',   this.$elmt.css('padding-left'))
                        .css('padding-right',  this.$elmt.css('padding-right'));
                }

                this.$elmt.clone(true).children().appendTo($wrapper);
                this.elmt.innerHTML = '';
            }

            // Timer
            if (timer && this.support.transition) {
                $timer = $('<div class="vegas-timer"><div class="vegas-timer-progress">');
                this.$timer = $timer;
                this.$elmt.prepend($timer);
            }

            // Overlay
            if (overlay) {
                $overlay = $('<div class="vegas-overlay">');

                if (typeof overlay === 'string') {
                    $overlay.css('background-image', 'url(' + overlay + ')');
                }

                this.$overlay = $overlay;
                this.$elmt.prepend($overlay);
            }

            // Container
            this.$elmt.addClass('vegas-container');

            if (!isBody) {
                this.$elmt.append($wrapper);
            }

            setTimeout(function () {
                self.trigger('init');
                self._goto(self.slide);

                if (self.settings.autoplay) {
                    self.trigger('play');
                }
            }, 1);
        },

        _preload: function () {
            var video, img, i;

            for (i = 0; i < this.settings.slides.length; i++) {
                if (this.settings.preload || this.settings.preloadImages) {
                    if (this.settings.slides[i].src) {
                        img = new Image();
                        img.src = this.settings.slides[i].src;
                    }
                }

                if (this.settings.preload || this.settings.preloadVideos) {
                    if (this.support.video && this.settings.slides[i].video) {
                        if (this.settings.slides[i].video instanceof Array) {
                            video = this._video(this.settings.slides[i].video);
                        } else {
                            video = this._video(this.settings.slides[i].video.src);
                        }
                    }
                }
            }
        },

        _random: function (array) {
            return array[Math.floor(Math.random() * (array.length - 1))];
        },

        _slideShow: function () {
            var self = this;

            if (this.total > 1 && !this.paused && !this.noshow) {
                this.timeout = setTimeout(function () {
                    self.next();
                }, this._options('delay')); 
            }
        },

        _timer: function (state) {
            var self = this;

            clearTimeout(this.timeout);

            if (!this.$timer) {
                return;
            }

            this.$timer
                .removeClass('vegas-timer-running')
                    .find('div')
                        .css('transition-duration', '0ms');

            if (this.paused || this.noshow) {
                return;
            }

            if (state) {
                setTimeout(function () {
                   self.$timer
                    .addClass('vegas-timer-running')
                        .find('div')
                            .css('transition-duration', self._options('delay') - 100 + 'ms');
                }, 100);
            }
        },

        _video: function (srcs) {
            var video, 
                source,
                cacheKey = srcs.toString();

            if (videoCache[cacheKey]) {
                return videoCache[cacheKey];
            }

            if (srcs instanceof Array === false) {
                srcs = [ srcs ];
            }

            video = document.createElement('video');
            video.preload = true;

            srcs.forEach(function (src) {
                source = document.createElement('source');
                source.src = src;
                video.appendChild(source);
            });

            videoCache[cacheKey] = video;

            return video;
        },

        _fadeOutSound: function (video, duration) {
            var self   = this,
                delay  = duration / 10,
                volume = video.volume - 0.09;

            if (volume > 0) {
                video.volume = volume;

                setTimeout(function () {
                    self._fadeOutSound(video, duration);
                }, delay);
            } else {
                video.pause();
            }
        },

        _fadeInSound: function (video, duration) {
            var self   = this,
                delay  = duration / 10,
                volume = video.volume + 0.09;
            
            if (volume < 1) {
                video.volume = volume;

                setTimeout(function () {
                    self._fadeInSound(video, duration);
                }, delay);
            }
        },

        _options: function (key, i) {
            if (i === undefined) {
                i = this.slide;
            }

            if (this.settings.slides[i][key] !== undefined) {
                return this.settings.slides[i][key];
            }

            return this.settings[key];
        },

        _goto: function (nb) {
            if (typeof this.settings.slides[nb] === 'undefined') {
                nb = 0;
            }

            this.slide = nb;

            var $slide,
                $inner,
                $video,
                $slides       = this.$elmt.children('.vegas-slide'),
                src           = this.settings.slides[nb].src,
                videoSettings = this.settings.slides[nb].video,
                delay         = this._options('delay'),
                align         = this._options('align'),
                valign        = this._options('valign'),
                color         = this._options('color') || this.$elmt.css('background-color'),
                cover         = this._options('cover') ? 'cover' : 'contain',
                self          = this,
                total         = $slides.length,
                video,
                img;

            var transition         = this._options('transition'),
                transitionDuration = this._options('transitionDuration'),
                animation          = this._options('animation' ),
                animationDuration  = this._options('animationDuration');

            if (transition === 'random' || transition instanceof Array) {
                if (transition instanceof Array) {
                    transition = this._random(transition);
                } else {
                    transition = this._random(this.transitions);
                }
            }

            if (animation === 'random' || animation instanceof Array) {
                if (animation instanceof Array) {
                    animation = this._random(animation);
                } else {
                    animation = this._random(this.animations);
                }
            }

            if (transitionDuration === 'auto' || transitionDuration > delay) {
                transitionDuration = delay;
            }

            if (animationDuration === 'auto') {
                animationDuration = delay;
            }

            $slide = $('<div class="vegas-slide"></div>');
            
            if (this.support.transition && transition) {
                $slide.addClass('vegas-transition-' + transition);
            }

            // Video

            if (this.support.video && videoSettings) {
                if (videoSettings instanceof Array) {
                    video = this._video(videoSettings);
                } else {
                    video = this._video(videoSettings.src);
                }

                video.loop  = videoSettings.loop !== undefined ? videoSettings.loop : true;
                video.muted = videoSettings.mute !== undefined ? videoSettings.mute : true;

                if (video.muted === false) {
                    video.volume = 0;
                    this._fadeInSound(video, transitionDuration);
                } else {
                    video.pause();
                }

                $video = $(video)
                    .addClass('vegas-video')
                    .css('background-color', color);

                if (this.support.objectFit) {
                    $video
                        .css('object-position', align + ' ' + valign)
                        .css('object-fit', cover)
                        .css('width',  '100%')
                        .css('height', '100%');
                } else if (cover === 'contain') {
                    $video
                        .css('width',  '100%')
                        .css('height', '100%');
                }

                $slide.append($video);

            // Image

            } else {
                img = new Image();

                $inner = $('<div class="vegas-slide-inner"></div>')
                    .css('background-image',    'url(' + src + ')')
                    .css('background-color',    color)
                    .css('background-position', align + ' ' + valign)
                    .css('background-size',     cover);

                if (this.support.transition && animation) {
                    $inner
                        .addClass('vegas-animation-' + animation)
                        .css('animation-duration',  animationDuration + 'ms');
                }

                $slide.append($inner);
            }

            if (!this.support.transition) {
                $slide.css('display', 'none');
            }

            if (total) {
                $slides.eq(total - 1).after($slide);
            } else {
                this.$elmt.prepend($slide);
            }

            self._timer(false);

            function go () {
                self._timer(true);

                setTimeout(function () {
                    if (transition) {
                        if (self.support.transition) {
                            $slides
                                .css('transition', 'all ' + transitionDuration + 'ms')
                                .addClass('vegas-transition-' + transition + '-out');

                            $slides.each(function () {
                                var video = $slides.find('video').get(0);

                                if (video) {
                                    video.volume = 1;
                                    self._fadeOutSound(video, transitionDuration);
                                }
                            });

                            $slide
                                .css('transition', 'all ' + transitionDuration + 'ms')
                                .addClass('vegas-transition-' + transition + '-in');
                        } else {
                            $slide.fadeIn(transitionDuration);
                        }
                    }

                    for (var i = 0; i < $slides.length - 4; i++) {
                         $slides.eq(i).remove();
                    }

                    self.trigger('walk');
                    self._slideShow();
                }, 100);
            }
            if (video) {
                if (video.readyState === 4) {
                    video.currentTime = 0;
                }
                
                video.play();
                go();
            } else {
                img.src = src;
                img.onload = go;
            }
        },

        shuffle: function () {
            var temp,
                rand;

            for (var i = this.total - 1; i > 0; i--) {
                rand = Math.floor(Math.random() * (i + 1));
                temp = this.settings.slides[i];

                this.settings.slides[i] = this.settings.slides[rand];
                this.settings.slides[rand] = temp;
            }
        },

        play: function () {
            if (this.paused) {
                this.paused = false;
                this.next();
                this.trigger('play');
            }
        },

        pause: function () {
            this._timer(false);
            this.paused = true;
            this.trigger('pause');
        },

        toggle: function () {
            if (this.paused) {
                this.play();
            } else {
                this.pause();
            }
        },

        playing: function () {
            return !this.paused && !this.noshow;
        },

        current: function (advanced) {
            if (advanced) {
                return {
                    slide: this.slide,
                    data:  this.settings.slides[this.slide]
                };
            }
            return this.slide;
        },

        jump: function (nb) {
            if (nb < 0 || nb > this.total - 1 || nb === this.slide) {
                return;
            }

            this.slide = nb;
            this._goto(this.slide);
        },

        next: function () {
            this.slide++;

            if (this.slide >= this.total) {
                this.slide = 0;
            }

            this._goto(this.slide);
        },

        previous: function () {
            this.slide--;

            if (this.slide < 0) {
                this.slide = this.total - 1;
            }

            this._goto(this.slide);
        },

        trigger: function (fn) {
            var params = [];

            if (fn === 'init') {
                params = [ this.settings ];
            } else {
                params = [ 
                    this.slide, 
                    this.settings.slides[this.slide]
                ];
            }

            this.$elmt.trigger('vegas' + fn, params);

            if (typeof this.settings[fn] === 'function') {
                this.settings[fn].apply(this.$elmt, params);
            }
        },

        options: function (key, value) {
            var oldSlides = this.settings.slides.slice();

            if (typeof key === 'object') {
                this.settings = $.extend({}, defaults, $.vegas.defaults, key);
            } else if (typeof key === 'string') {
                if (value === undefined) {
                    return this.settings[key];
                }
                this.settings[key] = value; 
            } else {
                return this.settings;
            }

            // In case slides have changed
            if (this.settings.slides !== oldSlides) {
                this.total  = this.settings.slides.length;
                this.noshow = this.total < 2;
                this._preload();   
            }
        },

        destroy: function () {
            clearTimeout(this.timeout); 

            this.$elmt.removeClass('vegas-container');
            this.$elmt.find('> .vegas-slide').remove();
            this.$elmt.find('> .vegas-wrapper').clone(true).children().appendTo(this.$elmt);
            this.$elmt.find('> .vegas-wrapper').remove();

            if (this.settings.timer) {
                this.$timer.remove();
            }

            if (this.settings.overlay) {
                this.$overlay.remove();
            }
            
            this.elmt._vegas = null;
        }
    };

    $.fn.vegas = function(options) {
        var args = arguments,
            error = false,
            returns;

        if (options === undefined || typeof options === 'object') {
            return this.each(function () {
                if (!this._vegas) {
                    this._vegas = new Vegas(this, options);
                }
            });
        } else if (typeof options === 'string') {
            this.each(function () {
                var instance = this._vegas;

                if (!instance) {
                    throw new Error('No Vegas applied to this element.');
                }

                if (typeof instance[options] === 'function' && options[0] !== '_') {
                    returns = instance[options].apply(instance, [].slice.call(args, 1));
                } else {
                    error = true;
                }
            });

            if (error) {
                throw new Error('No method "' + options + '" in Vegas.');
            }

            return returns !== undefined ? returns : this;
        }
    };

    $.vegas = {};
    $.vegas.defaults = defaults;

    $.vegas.isVideoCompatible = function () {
        return !/(Android|webOS|Phone|iPad|iPod|BlackBerry|Windows Phone)/i.test(navigator.userAgent);
    };

})(window.jQuery || window.Zepto);
</script>

	<!-- Custom Scrollbar plugin -->
	<script src="js/jquery.mCustomScrollbar.js"></script>

	<!-- Main JS File -->
	<script type="text/javascript" src="js/main.js"></script>

    <script type="text/javascript" src="js/app.js"></script>

	
	<!--[if lt IE 10]><script type="text/javascript" src="js/placeholder.js"></script><![endif]-->

	</body>

</html>