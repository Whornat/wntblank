<?php
/**
 Template Name: Scrollmagic
 */
 get_header(isloading); ?>

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
						<h1></h1>
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

    
<?php
//get_sidebar();
get_footer(simple);