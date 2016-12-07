<?php
/**
 Template Name: Scrollmagic
 */
 get_header(isloading); ?>

<style type="text/css">
	
#preloader {
  position: absolute;
  width: 100%;
  height: 100%;
  z-index: 101;
  background-color: #212121;
  color: #ffffff; }
  #preloader .txt {
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%); }
  #preloader .txt-perc {
    font-size: 35px;
    font-family: 'Roboto Condensed', Helvetica, Helvetica Neue, Arial, sans-serif;
    opacity: 1;
    margin: 0 0 6px 0;
    max-width: 400px;
    text-align: center; }
  #preloader .progress {
    width: 100px;
    height: 3px;
    background-color: rgba(255, 255, 255, 0.2);
    margin: 0 auto 15px auto; }
    #preloader .progress span {
      display: block;
      width: 0;
      height: 100%;
      background-color: rgba(255, 255, 255, 0.8); }
  #preloader.is-hidden {
    visibility: hidden;
    opacity: 0; }

.is-loading {
  overflow: hidden; }

/* =Header */
.header-container {
  text-align: center;
  color: #ffffff;
}
  .header-container .container {
    padding-top: 120px;
    z-index: 2;
    position: relative; }
  .header-container .bcg {
    -webkit-transition: -webkit-transform 4s ease-out;
            transition: transform 4s ease-out;
    -webkit-transform: scale(1.05);
        -ms-transform: scale(1.05);
            transform: scale(1.05);
    -webkit-transform-origin: top center;
        -ms-transform-origin: top center;
            transform-origin: top center; }
  .header-container.is-loaded .bcg {
    -webkit-transform: scale(1);
        -ms-transform: scale(1);
            transform: scale(1); }

.bcg {
  background: no-repeat center center;
  background-size: cover;
  position: absolute;
  width: 100%;
  height: 100%;
  z-index: 1;
  opacity: 0.5; }
  .header-container .bcg {
    background-image: url(<?php echo get_template_directory_uri(); ?>/IMG/demo/img_mountains01.jpg);
    background-size: cover; }
  #step01 .bcg {
    background: url(<?php echo get_template_directory_uri(); ?>/IMG/demo/img_mountains02.jpg) no-repeat center center;
    background-size: cover; }
  #step02 .bcg {
    background: url(<?php echo get_template_directory_uri(); ?>/IMG/demo/img_mountains03.jpg) no-repeat center center;
    background-size: cover; }
  #step03 .bcg {
    background: url(<?php echo get_template_directory_uri(); ?>/IMG/demo/img_mountains01.jpg) no-repeat center center;
    background-size: cover;
    opacity: 0.7; }

	.fs {
  height: 100vh; }

.slide {
  color: #ffffff;
  position: relative; }
  .slide .container {
    padding-top: 30px;
    text-align: center;
    position: relative;
    z-index: 2; }
  .slide#step01 .container {
    position: absolute;
    top: 10%; }
  .slide#step02 .container {
    position: absolute;
    bottom: 10%; }
  .slide#step03 .button {
    border-color: #ffffff;
    color: #212121;
    background-color: rgba(255, 255, 255, 0.9); }
    .slide#step03 .button:hover {
      border-color: #212121;
      background-color: #212121;
      color: #ffffff; }
  .slide#step03 .container {
    padding-top: 100px; }
  .slide#step04 {
    background-color: #be4c2c; }
	
	
/* =Simple animation up */
.no-touch .slideInUp {
  visibility: hidden;
  opacity: 0;
  -webkit-transition: all 0.7s ease-out;
          transition: all 0.7s ease-out;
  -webkit-transform: translate3d(0, 50px, 0);
  transform: translate3d(0, 50px, 0); }
.no-touch .is-active .slideInUp {
  visibility: visible;
  opacity: 1;
  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0); }
.slideInUp.slideInUp2 {
  -webkit-transition-delay: 0.2s;
          transition-delay: 0.2s; }
.slideInUp.slideInUp3 {
  -webkit-transition-delay: 0.4s;
          transition-delay: 0.4s; }
	

	.header-container, .slide {overflow: hidden; position: relative;}	
	
.content-block {
  background-color: #212121;
  color: rgba(255, 255, 255, 0.9);
}
	
</style>
<!--<section id="step01" class="content content_slide slide_fullheight">-->


<div id="primary" class="content-area">

        <div id="preloader">
            <div class="txt">
                <p class="txt-perc">0%</p>
                <div class="progress"><span></span></div>
            </div>
        </div>

        <div id="intro" class="header-container fs">
            <div class="bcg"></div>
            <header class="container">
                <h1 class="title">Unleash Your Potentional!</h1>
                <p>Learn GreenSock and ScrollMagic and create something amazing!</p>
            </header>
            <span class="scroll-hint">Scroll Down</span>
        </div>


<?php // NAVIGATION SCROLLING ------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------ ?>
<?php get_template_part( 'template-parts/menu','onepage_bullet'); ?>
<?php // NAVIGATION SCROLLING ------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------ ?>
        
        
		<div id="main" class="main-container">

            <article id="cb01" class="content-block">
                <div class="container">
                    <header class="slideInUp">
                        <h1>SIMPLIFY</h1>
                    </header>
                    <section>
                        <p class="slideInUp slideInUp2">Simplify your content to a MINIMUM.</p>
                    </section>
                </div> <!-- .container -->
            </article>
            
            <article id="step01" class="slide fs">
                <div class="bcg"></div>
                <div class="container">
                    <header class="slideInUp">
                        <h1>A picture is worth a thousand words</h1>
                    </header>
                    <section>
                        <p class="slideInUp slideInUp2">Let the images do the talking and use text for short summaries.</p>
                    </section>
                </div> <!-- .container -->
            </article>

            <article id="cb02" class="content-block">
                <div class="container">
                    <header class="slideInUp">
                        <h1>FOCUS</h1>
                    </header>
                    <section>
                        <p class="slideInUp slideInUp2">Focus on the most IMPORTANT thing. The one thing!</p>
                    </section>
                </div> <!-- .container -->
            </article>

            <article id="step02" class="slide fs">
                <div class="bcg"></div>
                <div class="container">
                    <header class="slideInUp">
                        <h1>Position and Timing</h1>
                    </header>
                    <section>
                        <p class="slideInUp slideInUp2">Position elements based on the background image and trigger animation at the right time.</p>
                        <p class="slideInUp slideInUp3">Use different triggerElements in combination with offsets to be in full control.</p>
                    </section>
                </div> <!-- .container -->
            </article>

            <article id="cb03" class="content-block">
                <div class="container">
                    <header class="slideInUp">
                        <h1>ASK</h1>
                    </header>
                    <section>
                        <p class="slideInUp slideInUp2">You don't ask, you don't get. Always end with CALL TO ACTION.</p>
                    </section>
                </div> <!-- .container -->
            </article>

            <article id="step03" class="slide fs">
                <div class="bcg"></div>
                <div class="container">
                    <header class="slideInUp">
                        <a href="https://ihatetomatoes.net/blog/" title="Petr Tichy's Front End Development Blog">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="iht_logo" x="0" y="0" viewBox="0 0 308.8 152.1" xml:space="preserve" enable-background="new 0 0 308.8 152.1" style="visibility: inherit; opacity: 1;">
                            <style>
                            .s0{
                                fill:#D74022;
                            }
                            .s1{
                                fill:#4D4D4F;
                            }
                            .s2{
                                fill:none;
                                stroke-linecap:round;
                                stroke-miterlimit:10;
                                stroke-width:10;
                                stroke:#FFF;
                            }

                            </style>  <path d="M139.7 17.2C106 18.3 78.6 45.7 77.5 79.4 76.9 98 84.2 114.9 96.3 127l91-91C175.2 23.9 158.3 16.6 139.7 17.2z" fill="#D74022"></path>
                              <path d="M122.3 127c12.1 12.1 29 19.4 47.6 18.8 33.7-1.1 61.1-28.5 62.2-62.2 0.6-18.6-6.7-35.5-18.8-47.6L122.3 127z" fill="#D74022"></path>
                              <polygon points="238.3 152.1 225.6 139.3 283.4 81.5 225.6 23.8 238.3 11 308.8 81.5 " fill="#4D4D4F"></polygon>
                              <polygon points="70.5 152.1 0 81.5 70.5 11 83.2 23.8 25.5 81.5 83.2 139.3 " fill="#4D4D4F"></polygon>
                              <path d="M144.5 30.6" class="s2"></path>
                              <path d="M132.6 30.4" class="s2"></path>
                              <path d="M128.6 10.9c0-1.5 0-3 0.1-4.5 0.1-1.4 0.8-3.1 0.3-4.5 -0.8-2.5-4.3-2.6-5.5-0.3 -1.8 4.5-2.5 9.2-2.4 14 -6.7 3.2-17 2-24-0.2 5.1 4 11.2 6.7 18 7.5 -6.5 3-12.5 7-17.6 11.9 13.7-9.2 32.4-7.6 44.4 3.7 -1.3-4.6-3.5-8.7-6.4-12.3 7.3-5.2 16.3-7.4 25.1-6.3 -7-2.1-14.2-3-21.5-2.8 3.2-2.1 6-4.7 8.3-7.7 -6.3 3.5-11.4 4.1-18.5 4.4C128.8 13.2 128.7 11.6 128.6 10.9" fill="#95D600"></path>
                            </svg>
                        </a>
                        <h1>Do you want to learn ScrollMagic?</h1>
                    </header>
                    <section>
                        <p class="slideInUp slideInUp2">Explore the source code and start learning ScrollMagic today.</p>
                        <div class="slideInUp slideInUp3">
                            <a href="https://ihatetomatoes.net/5-days-with-scrollmagic/" class="button">DOWNLOAD FILES</a>
                        </div>

                    </section>
                </div> <!-- .container -->
            </article>

        </div><!-- #main -->
	</div><!-- #primary -->
   					<script type="text/javascript">
	(function ($) {
	
	}(jQuery));						
					</script>

   
    
<?php
//get_sidebar();
get_footer();