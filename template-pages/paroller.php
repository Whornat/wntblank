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
            
<section id="demo" class="row">
        <div class="inner">
            <h2>Demo</h2>

            <h6 class="mega my-element"
                data-paroller-factor="0.5"
                data-paroller-factor-lg="0.4"
                data-paroller-factor-md="0.3"
                data-paroller-factor-sm="-0.2"
                data-paroller-factor-xs="-0.1"
                data-paroller-type="foreground"
                data-paroller-direction="horizontal"
            >
                👋 Heola! こんにちは! Ahoj! Cześć! Olá!
            </h6>
              
            <div class=" ">
                <div class=" -inner">
                    <div>
                        <h5>html</h5>
                        class="mega my-element"<br>
                        data-paroller-factor="0.5"<br>
                        data-paroller-factor-lg="0.4"<br>
                        data-paroller-factor-md="0.3"<br>
                        data-paroller-factor-sm="-0.2"<br>
                        data-paroller-factor-xs="-0.1"<br>
                        data-paroller-type="foreground"<br>
                        data-paroller-direction="horizontal"
                    </div>
                    <div>
                        <h5>js</h5>
                        $('.my-element').paroller();
                    </div>
                </div>
            </div>

            <h6 class="mega align-right paroller-example">
                გამარჯობა! Hello! Zdravo! Привет! 你好! Ciao! !مرحبا Hallå! Χαίρετε! ¡Hola! 👋
            </h6>
              
            <div class=" ">
                <div class=" -inner">
                    <div>
                        <h5>html</h5>
                        class="paroller-example"
                    </div>
                    <div>
                        <h5>js</h5>
                        $('.paroller-example').paroller({<br>
                        factorXs: 0.1,<br>
                        factorSm: 0.1,<br>
                        factorMd: -0.4,<br>
                        factorLg: -0.5,<br>
                        factorXl: -0.6,<br>
                        factor: -0.4,<br>
                        type: 'foreground',<br>
                        direction: 'horizontal'<br>
                        });
                    </div>
                </div>
            </div>

            <div class="jumbotron"
                 style="background: url('https://unsplash.it/1920/800?image=950') no-repeat center; background-size: cover;"
                 data-paroller-factor="0.5"
                 data-paroller-factor-xs="0.2"
            >
            </div>
              
            <div class=" ">
                <div class=" -inner">
                    <div>
                        <h5>html</h5>
                        class="jumbotron"
                        style="background: url('https://unsplash.it/1920/800?image=950') no-repeat center;<br>
                        background-size: cover;"<br>
                        data-paroller-factor="0.5"<br>
                        data-paroller-factor-xs="0.2"
                    </div>
                    <div>
                        <h5>js</h5>
                        $('.jumbotron').paroller();
                    </div>
                </div>
            </div>

            <div class="jumbotron text-center my-5"
                 style="background: url('https://unsplash.it/1920/800?image=152') repeat center; background-size: cover;"
                 data-paroller-factor="-0.5"
                 data-paroller-factor-sm="-0.2"
                 data-paroller-factor-xs="-0.1"
            >
            </div>
              
            <div class=" ">
                <div class=" -inner">
                    <div>
                        <h5>html</h5>
                        class="jumbotron"
                        style="background: url('https://unsplash.it/1920/800?image=152') repeat center; background-size:
                        cover;"<br>
                        data-paroller-factor="-0.5"<br>
                        data-paroller-factor-sm="-0.2"<br>
                        data-paroller-factor-xs="-0.1"
                    </div>
                    <div>
                        <h5>js</h5>
                        $('.jumbotron').paroller();
                    </div>
                </div>
            </div>

            <div class="jumbotron text-center my-5"
                 style="background: url('https://unsplash.it/1920/500?image=974') no-repeat center; background-size: cover;"
                 data-paroller-factor="-0.2">
            </div>
              
            <div class=" ">
                <div class=" -inner">
                    <div>
                        <h5>html</h5>
                        class="jumbotron"
                        style="background: url('https://unsplash.it/1920/500?image=974') no-repeat center;
                        background-size: cover;"<br>
                        data-paroller-factor="-0.2"
                    </div>
                    <div>
                        <h5>js</h5>
                        $('.jumbotron').paroller();
                    </div>
                </div>
            </div>

            <div class="d-flex">
                <div class="image"
                     style="background: url('https://unsplash.it/400/800?image=889') no-repeat center; background-size: cover;"
                     data-paroller-factor="0.5"
                     data-paroller-factor-md="0.3"
                     data-paroller-factor-sm="0.2"
                     data-paroller-factor-xs="0.1"
                >
                </div>

                <div class="image"
                     style="background: url('https://unsplash.it/400/800?image=889') repeat center; background-size: cover;"
                     data-paroller-factor="-0.4">
                </div>

                <div class="image"
                     style="background: url('https://unsplash.it/400/800?image=889') no-repeat center; background-size: cover;"
                     data-paroller-factor="-0.1">
                </div>
            </div>
              
            <div class=" ">
                <div class=" -inner">
                    <div>
                        <h5>html</h5>
                        class="image"
                        style="background: url('https://unsplash.it/400/800?image=889') repeat center; background-size:
                        cover;"<br>
                        data-paroller-factor="0.5"<br>
                        data-paroller-factor-md="0.3"<br>
                        data-paroller-factor-sm="0.2"<br>
                        data-paroller-factor-xs="0.1"
                        <hr>
                        class="image"
                        style="background: url('https://unsplash.it/400/800?image=889') repeat center; background-size:
                        cover;"<br>
                        data-paroller-factor="-0.4"
                        <hr>
                        class="image"
                        style="background: url('https://unsplash.it/400/800?image=889') repeat center; background-size:
                        cover;"<br>
                        data-paroller-factor="-0.1"
                    </div>
                    <div>
                        <h5>js</h5>
                        $('.image').paroller();
                        <hr>
                        $('.image').paroller();
                        <hr>
                        $('.image').paroller();
                    </div>
                </div>
            </div>

            <div class="jumbotron text-center my-5"
                 style="background: url('https://unsplash.it/1920/500?image=867') no-repeat center; background-size: cover;"
                 data-paroller-factor="-0.15" data-paroller-direction="horizontal">
            </div>
              
            <div class=" ">
                <div class=" -inner">
                    <div>
                        <h5>html</h5>
                        class="jumbotron"
                        style="background: url('https://unsplash.it/1920/500?image=867') no-repeat center;
                        background-size: cover;"<br>
                        data-paroller-factor="-0.15"<br>
                        data-paroller-direction="horizontal"
                    </div>
                    <div>
                        <h5>js</h5>
                        $('.jumbotron').paroller();
                    </div>
                </div>
            </div>

            <div class="jumbotron text-center my-5"
                 style="background: url('https://unsplash.it/1920/1200?image=249') repeat bottom; background-size: cover;"
                 data-paroller-factor="0.3" data-paroller-direction="horizontal">
            </div>
              
            <div class=" ">
                <div class=" -inner">
                    <div>
                        <h5>html</h5>
                        class="jumbotron"
                        style="background: url('https://unsplash.it/1920/1200?image=249') repeat bottom;
                        background-size: cover;"<br>
                        data-paroller-factor="0.3"<br>
                        data-paroller-direction="horizontal"
                    </div>
                    <div>
                        <h5>js</h5>
                        $('.jumbotron').paroller();
                    </div>
                </div>
            </div>

            <div class="jumbotron text-center my-5"
                 style="background: url('https://unsplash.it/1920/900?image=888') no-repeat center; background-size: cover;"
                 data-paroller-factor="-0.5" data-paroller-direction="horizontal">
            </div>
              
            <div class=" ">
                <div class=" -inner">
                    <div>
                        <h5>html</h5>
                        class="jumbotron"
                        style="background: url('https://unsplash.it/1920/900?image=888') no-repeat center;
                        background-size: cover;"<br>
                        data-paroller-factor="-0.5"<br>
                        data-paroller-direction="horizontal"
                    </div>
                    <div>
                        <h5>js</h5>
                        $('.jumbotron').paroller();
                    </div>
                </div>
            </div>

            <h6 class="mega align-center" data-paroller-factor="0.1" data-paroller-type="foreground">
                Scrolling is fun ✌️
            </h6>
              
            <div class=" ">
                <div class=" -inner">
                    <div>
                        <h5>html</h5>
                        class="mega align-center" data-paroller-factor="0.1" data-paroller-type="foreground"
                    </div>
                    <div>
                        <h5>js</h5>
                        $('.mega').paroller();
                    </div>
                </div>
            </div>
        </div>
    </section>
            

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
