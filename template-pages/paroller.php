<?php
/**
 Template Name: Paroller
 https://tgomilar.github.io/paroller.js/
 */

get_header(); ?>

	<div id="primary" class="col content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
            
  <section id="vertical" class="my-5">
        <div class="jumbotron text-center bg-faded my-5"
             style="background: url('http://lorempixel.com/1200/600/abstract/8') no-repeat center;"
             data-paroller-factor="0.5">
            <h1 class="heading-1 py-5 text-white">Hello Parallax!</h1>
            <p class="text-white">data-paroller-factor="0.5"</p>
        </div>
        <div class="jumbotron text-center bg-faded my-5"
             style="background: url('http://lorempixel.com/1200/1200/abstract/0') no-repeat center;"
             data-paroller-factor="-0.15">
            <h1 class="heading-1 py-5 text-white">Scrolling is fun!</h1>
            <p class="text-white">data-paroller-factor="-0.15"</p>
        </div>
        <div class="row my-5">
            <div class="col col-md-4" data-paroller-factor="0.5" data-paroller-type="foreground">
                <div class="card">
                    <img class="card-img-top" src="http://lorempixel.com/400/200/abstract/1" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Card vertical</h4>
                        <p class="card-text">
                            <code>data-paroller-factor="0.5" data-paroller-type="foreground"</code>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col col-md-4" data-paroller-factor="0.1" data-paroller-type="foreground">
                <div class="card">
                    <img class="card-img-top" src="http://lorempixel.com/400/200/abstract/2" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Card vertical</h4>
                        <p class="card-text">
                            <code>data-paroller-factor="0.1" data-paroller-type="foreground"</code>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col col-md-4" data-paroller-factor="-0.1" data-paroller-type="foreground">
                <div class="card">
                    <img class="card-img-top" src="http://lorempixel.com/400/200/abstract/3" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Card vertical</h4>
                        <p class="card-text">
                            <code>data-paroller-factor="-0.1" data-paroller-type="foreground"</code>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-5">
            <div class="col col-md-4" data-paroller-factor="0.9" data-paroller-type="foreground"
                 data-paroller-direction="vertical">
                <div class="card">
                    <img class="card-img-top" src="http://lorempixel.com/400/200/abstract/3" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Card vertical</h4>
                        <p class="card-text">
                            <code>data-paroller-factor="0.9" data-paroller-type="foreground"
                                data-paroller-direction="vertical"</code>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col col-md-4" data-paroller-factor="0.15" data-paroller-type="foreground"
                 data-paroller-direction="vertical">
                <div class="card">
                    <img class="card-img-top" src="http://lorempixel.com/400/200/abstract/4" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Card vertical</h4>
                        <p class="card-text">
                            <code>data-paroller-factor="0.15" data-paroller-type="foreground"
                                data-paroller-direction="vertical"</code>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col col-md-4" data-paroller-factor="-0.1" data-paroller-type="foreground"
                 data-paroller-direction="vertical">
                <div class="card">
                    <img class="card-img-top" src="http://lorempixel.com/400/200/abstract/5" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Card vertical</h4>
                        <p class="card-text">
                            <code>data-paroller-factor="-0.1" data-paroller-type="foreground"
                                data-paroller-direction="vertical"</code>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-5">
            <div class="col col-sm-6" data-paroller-factor="0.1" data-paroller-type="foreground"
                 data-paroller-direction="vertical">
                <div class="card">
                    <img class="card-img-top" src="http://lorempixel.com/400/200/abstract/6" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Card vertical</h4>
                    </div>
                </div>
            </div>
            <div class="col col-sm-6" data-paroller-factor="-0.1" data-paroller-type="foreground"
                 data-paroller-direction="vertical">
                <div class="card">
                    <img class="card-img-top" src="http://lorempixel.com/400/200/abstract/7" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Card vertical</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="horizontal" class="my-5">
        <div class="jumbotron text-center bg-faded my-5"
             style="background: url('http://lorempixel.com/1200/600/abstract/8') no-repeat center;"
             data-paroller-factor="0.5"
             data-paroller-direction="horizontal">
            <h1 class="heading-1 py-5 text-white">Hola, horizontal Parallax!</h1>
            <p class="text-white">data-paroller-factor="0.5"</p>
        </div>
        <div class="jumbotron text-center bg-faded my-5"
             style="background: url('http://lorempixel.com/1200/1200/abstract/5') repeat center;"
             data-paroller-factor="-0.75"
             data-paroller-direction="horizontal">
            <h1 class="heading-1 py-5 text-white">Maybe some horizontal scrolling with repeated background?</h1>
            <p class="text-white">data-paroller-factor="-0.75"</p>
        </div>
        <div class="row my-5">
            <div class="col col-md-4" data-paroller-factor="-0.3" data-paroller-type="foreground"
                 data-paroller-direction="horizontal">
                <div class="card">
                    <img class="card-img-top" src="http://lorempixel.com/400/200/abstract/1" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Card horizontal</h4>
                        <p class="card-text">
                            <code>data-paroller-factor="-0.3" data-paroller-type="foreground"
                                data-paroller-direction="horizontal"
                            </code>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col col-md-4" data-paroller-factor="-0.1" data-paroller-type="foreground"
                 data-paroller-direction="horizontal">
                <div class="card">
                    <img class="card-img-top" src="http://lorempixel.com/400/200/abstract/2" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Card horizontal</h4>
                        <p class="card-text">
                            <code>data-paroller-factor="-0.1" data-paroller-type="foreground"
                                data-paroller-direction="horizontal"</code>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col col-md-4" data-paroller-factor="0.1" data-paroller-type="foreground"
                 data-paroller-direction="horizontal">
                <div class="card">
                    <img class="card-img-top" src="http://lorempixel.com/400/200/abstract/3" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Card horizontal</h4>
                        <p class="card-text">
                            <code>data-paroller-factor="0.1" data-paroller-type="foreground"
                                data-paroller-direction="horizontal"</code>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row my-5">
            <div class="col col-sm-6" data-paroller-factor="-0.2" data-paroller-type="foreground"
                 data-paroller-direction="horizontal">
                <div class="card">
                    <img class="card-img-top" src="http://lorempixel.com/400/200/abstract/6" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Card horizontal</h4>
                    </div>
                </div>
            </div>
            <div class="col col-sm-6" data-paroller-factor="-0.1" data-paroller-type="foreground"
                 data-paroller-direction="horizontal">
                <div class="card">
                    <img class="card-img-top" src="http://lorempixel.com/400/200/abstract/7" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Card horizontal</h4>
                    </div>
                </div>
            </div>
        </div>
       	  
            

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
