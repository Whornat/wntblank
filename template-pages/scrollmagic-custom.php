<?php
/**
 Template Name: Scrollmagic custom
 */
 get_header('simple'); ?>

<div id="primary" class="content-area">
<?php // NAVIGATION SCROLLING ------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------ ?>
<?php //get_template_part( 'template-parts/menu','onepage_bullet'); ?>
<?php echo menu_onepagescrolling(array("step1", "step2", "step3","step4" ),''); ?>
<?php // NAVIGATION SCROLLING ------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------ ?>
<section id="intro" class="content content_slide slide_fullheight">
	<div class="inner text-center">
			     			
				<header class="container title_slide"><h1>Demo de Scroll magic</h1></header>      		
         		<div class="container">
                <div class="row">
					<p class="lead">KKPKPPLP¨M¨KP,KLM,M</p>
					<div class="scrolling_icone"><a href="#step01"><i class="fa fa-chevron-down" aria-hidden="true"></i></a></div>
                </div><!-- .row -->
                </div><!--.container -->
                
                
      </div><!--.inner-->
</section>			
			  
			    
			        
<section id="step1" class="content content_slide slide_fullheight">
	<div class="bg_parallax"></div>
	<div class="inner">
			     			
				<header class="container title_slide"><h1>Section 01</h1></header>      		
         		<div class="container">
                <div class="row">
					<h2>Un après l'autre...</h2>
					<div class="col-sm-6">
						<div class="animated_bloc animation01" style="background: #424242">
						<h3>Animation 01</h3>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="animated_bloc animation02" style="background: #fff">
						<h3>Animation 02</h3>
						</div>
					</div>	
                </div><!-- .row -->
                <div class="row">
					<h2>...En même temps via le scroll</h2>
					<div class="col-sm-6">
						<div class="animated_bloc animation04" style="background: #424242">
						<h3>Animation 04</h3>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="animated_bloc animation05" style="background: #fff">
						<h3>Animation 05</h3>
						</div>
					</div>	
                </div><!-- .row -->                
                
                
                </div><!--.container -->
                
                
                </div><!--.inner-->
</section>
<section id="break1" class="content content_slide break">
         		<div class="container">
                <div class="row">
					--
                </div><!-- .row -->
                </div><!--.container-->
</section>

<section id="step2" class="content content_slide slide_fullheight">
	<div class="bg_parallax"></div>
        		<div class="inner">
				<header class="container title_slide"><h1>Section 02</h1></header>      		
         		<div class="container">
                <div class="row">
					<div class="col-sm-6">
						<div class="animated_bloc animation06" style="background: #999">
						<h3>Animation 06</h3>
						</div>
					</div>	                                
                </div><!-- .row -->
                </div><!--.container-->
                </div><!--.inner-->
</section>


<section id="step3" class="content content_slide slide_fullheight">
        		
				<header class="container title_slide"><h1>Section 03</h1></header>      		
         		<div class="container">
                <div class="row">
					<div class="col-sm-6">
						<div class="animated_bloc animation07" style="background: #ccc">
						<h3>Animation 07</h3>
						</div>
					</div>	                                
                </div><!-- .row -->
                <div class="row">
                
					<div class="col-sm-6">
						<div class="animated_bloc animation08 slideInUp">
						<h3>Animation 08</h3>
						</div>
					</div>                
                
                </div><!-- .row -->
                
                </div><!--.container-->
</section>

<section id="break2" class="content content_slide break">
         		<div class="container">
                <div class="row">
                --
                </div><!-- .row -->
                </div><!--.container-->
</section>

<section id="step4" class="content content_slide slide_fullheight">
	<div class="bg_parallax"></div>

			
				<header class="container"><h1>Section 04</h1></header>      		
         		<div class="container">
                <div class="row">
                --
                </div><!-- .row -->
                </div><!--.container-->
</section>
            
	</div><!-- #primary -->
    
<?php
//get_sidebar();
get_footer('simple');