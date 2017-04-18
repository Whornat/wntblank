<?php
/**
 Template Name: Page demo animate
 http://jackonthe.net/css3animateit/
 */

get_header(); ?>
<style>
.repeat {
    background: #1a8ec9 none repeat scroll 0 0;
    height: 40px;
    margin: auto;
    width: 80px;
}
</style>

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
            
            
<div class='animatedParent container' data-sequence='500'>
	<h2 class='animated bounceInDown' data-id='1'>It Works!</h2>
	<h2 class='animated bounceInDown' data-id='2'>This animation will start 500ms after</h2>
	<h2 class='animated bounceInDown' data-id='3'>This animation will start 500ms after</h2>
</div>
            
            <div class="container animations" style="margin-bottom:30px">
			<div class="animatedParent">
				<h2 class="animated growIn slowest">Animations</h2>
			</div>

			<!-- bounceIn -->
			<div class="animatedParent row article">
			
				<div class="col-md-4">
					
					<h3 class="animated bounceInUp padded">bounceIn</h3>
				</div>
				<div class="animatedParent col-md-6">
<pre class="animated growIn slow">&lt;h2 class='animated <span class="highlighter">bounceIn</span>'&gt;It Works!&lt;/h2&gt;</pre>
				</div>
				<div class="col-md-2"><div class="repeat animated bounceIn slow"></div></div>
			</div>

			<div class="animatedParent">
				<hr class="animated fadeIn slow">
			</div>

			<!-- bounceInDown -->
			<div class="animatedParent row article">
			
				<div class="col-md-4">
					
					<h3 class="animated bounceInUp padded">bounceInDown</h3>
				</div>
				<div class="animatedParent col-md-6">
<pre class="animated growIn slow">&lt;h2 class='animated <span class="highlighter">bounceInDown</span>'&gt;It Works!&lt;/h2&gt;</pre>
				</div>
				<div class="col-md-2"><div class="repeat animated bounceInDown slow"></div></div>
			</div>

			<div class="animatedParent">
				<hr class="animated fadeIn slow">
			</div>

			<!-- bounceInRight -->
			<div class="animatedParent row article">
			
				<div class="col-md-4">
					
					<h3 class="animated bounceInUp padded">bounceInRight</h3>
				</div>
				<div class="animatedParent col-md-6">
<pre class="animated growIn slow">&lt;h2 class='animated <span class="highlighter">bounceInRight</span>'&gt;It Works!&lt;/h2&gt;</pre>
				</div>
				<div class="col-md-2"><div class="repeat animated bounceInRight slow"></div></div>
			</div>

			<div class="animatedParent">
				<hr class="animated fadeIn slow">
			</div>
			
			<!-- bounceInUp -->
			<div class="animatedParent row article">
			
				<div class="col-md-4">
					
					<h3 class="animated bounceInUp padded">bounceInUp</h3>
				</div>
				<div class="animatedParent col-md-6">
<pre class="animated growIn slow">&lt;h2 class='animated <span class="highlighter">bounceInUp</span>'&gt;It Works!&lt;/h2&gt;</pre>
				</div>
				<div class="col-md-2"><div class="repeat animated bounceInUp slow"></div></div>
			</div>


			<div class="animatedParent">
				<hr class="animated fadeIn slow">
			</div>
			
			<!-- bounceInLeft -->
			<div class="animatedParent row article">
			
				<div class="col-md-4">
					
					<h3 class="animated bounceInUp padded">bounceInLeft</h3>
				</div>
				<div class="animatedParent col-md-6">
<pre class="animated growIn slow">&lt;h2 class='animated <span class="highlighter">bounceInLeft</span>'&gt;It Works!&lt;/h2&gt;</pre>
				</div>
				<div class="col-md-2"><div class="repeat animated bounceInLeft slow"></div></div>
			</div>

			<div class="animatedParent">
				<hr class="animated fadeIn slow">
			</div>
			<!-- fadeInDownShort -->
			<div class="animatedParent row article">
			
				<div class="col-md-4">
					
					<h3 class="animated bounceInUp padded">fadeInDownShort (New!)</h3>
				</div>
				<div class="animatedParent col-md-6">
<pre class="animated growIn slow">&lt;h2 class='animated <span class="highlighter">fadeInDownShort</span>'&gt;It Works!&lt;/h2&gt;</pre>
				</div>
				<div class="col-md-2"><div class="repeat animated fadeInDownShort"></div></div>
			</div>

			<div class="animatedParent">
				<hr class="animated fadeIn slow">
			</div>

			<!-- fadeInUpShort -->
			<div class="animatedParent row article">
			
				<div class="col-md-4">
					
					<h3 class="animated bounceInUp padded">fadeInUpShort (New!)</h3>
				</div>
				<div class="animatedParent col-md-6">
<pre class="animated growIn slow">&lt;h2 class='animated <span class="highlighter">fadeInUpShort</span>'&gt;It Works!&lt;/h2&gt;</pre>
				</div>
				<div class="col-md-2"><div class="repeat animated fadeInUpShort"></div></div>
			</div>

			<div class="animatedParent">
				<hr class="animated fadeIn slow">
			</div>

			<!-- fadeInLeftShort -->
			<div class="animatedParent row article">
			
				<div class="col-md-4">
					
					<h3 class="animated bounceInUp padded">fadeInLeftShort (New!)</h3>
				</div>
				<div class="animatedParent col-md-6">
<pre class="animated growIn slow">&lt;h2 class='animated <span class="highlighter">fadeInLeftShort</span>'&gt;It Works!&lt;/h2&gt;</pre>
				</div>
				<div class="col-md-2"><div class="repeat animated fadeInLeftShort"></div></div>
			</div>

			<div class="animatedParent">
				<hr class="animated fadeIn slow">
			</div>

			<!-- fadeInRightShort -->
			<div class="animatedParent row article">
			
				<div class="col-md-4">
					
					<h3 class="animated bounceInUp padded">fadeInRightShort (New!)</h3>
				</div>
				<div class="animatedParent col-md-6">
<pre class="animated growIn slow">&lt;h2 class='animated <span class="highlighter">fadeInRightShort</span>'&gt;It Works!&lt;/h2&gt;</pre>
				</div>
				<div class="col-md-2"><div class="repeat animated fadeInRightShort"></div></div>
			</div>

			<div class="animatedParent">
				<hr class="animated fadeIn slow">
			</div>
			<!-- fadeInDown -->
			<div class="animatedParent row article">
			
				<div class="col-md-4">
					
					<h3 class="animated bounceInUp padded">fadeInDown</h3>
				</div>
				<div class="animatedParent col-md-6">
<pre class="animated growIn slow">&lt;h2 class='animated <span class="highlighter">fadeInDown</span>'&gt;It Works!&lt;/h2&gt;</pre>
				</div>
				<div class="col-md-2"><div class="repeat animated fadeInDown"></div></div>
			</div>

			<div class="animatedParent">
				<hr class="animated fadeIn slow">
			</div>

			<!-- fadeInUp -->
			<div class="animatedParent row article">
			
				<div class="col-md-4">
					
					<h3 class="animated bounceInUp padded">fadeInUp</h3>
				</div>
				<div class="animatedParent col-md-6">
<pre class="animated growIn slow">&lt;h2 class='animated <span class="highlighter">fadeInUp</span>'&gt;It Works!&lt;/h2&gt;</pre>
				</div>
				<div class="col-md-2"><div class="repeat animated fadeInUp"></div></div>
			</div>

			<div class="animatedParent">
				<hr class="animated fadeIn slow">
			</div>

			<!-- fadeInLeft -->
			<div class="animatedParent row article">
			
				<div class="col-md-4">
					
					<h3 class="animated bounceInUp padded">fadeInLeft</h3>
				</div>
				<div class="animatedParent col-md-6">
<pre class="animated growIn slow">&lt;h2 class='animated <span class="highlighter">fadeInLeft</span>'&gt;It Works!&lt;/h2&gt;</pre>
				</div>
				<div class="col-md-2"><div class="repeat animated fadeInLeft"></div></div>
			</div>

			<div class="animatedParent">
				<hr class="animated fadeIn slow">
			</div>

			<!-- fadeInRight -->
			<div class="animatedParent row article">
			
				<div class="col-md-4">
					
					<h3 class="animated bounceInUp padded">fadeInRight</h3>
				</div>
				<div class="animatedParent col-md-6">
<pre class="animated growIn slow">&lt;h2 class='animated <span class="highlighter">fadeInRight</span>'&gt;It Works!&lt;/h2&gt;</pre>
				</div>
				<div class="col-md-2"><div class="repeat animated fadeInRight"></div></div>
			</div>

			<div class="animatedParent">
				<hr class="animated fadeIn slow">
			</div>
			
			<!-- fadeIn -->
			<div class="animatedParent row article">
			
				<div class="col-md-4">
					
					<h3 class="animated bounceInUp padded">fadeIn</h3>
				</div>
				<div class="animatedParent col-md-6">
<pre class="animated growIn slow">&lt;h2 class='animated <span class="highlighter">fadeIn</span>'&gt;It Works!&lt;/h2&gt;</pre>
				</div>
				<div class="col-md-2"><div class="repeat animated fadeIn slowest"></div></div>
			</div>

			<div class="animatedParent">
				<hr class="animated fadeIn slow">
			</div>

			<!-- growIn -->
			<div class="animatedParent row article">
			
				<div class="col-md-4">
					
					<h3 class="animated bounceInUp padded">growIn</h3>
				</div>
				<div class="animatedParent col-md-6">
<pre class="animated growIn slow">&lt;h2 class='animated <span class="highlighter">growIn</span>'&gt;It Works!&lt;/h2&gt;</pre>
				</div>
				<div class="col-md-2"><div class="repeat animated growIn slow"></div></div>
			</div>

			<div class="animatedParent">
				<hr class="animated fadeIn slow">
			</div>

			<!-- shake -->
			<div class="animatedParent row article">
			
				<div class="col-md-4">
					
					<h3 class="animated bounceInUp padded">shake</h3>
				</div>
				<div class="animatedParent col-md-6">
<pre class="animated growIn slow">&lt;h2 class='animated <span class="highlighter">shake</span>'&gt;It Works!&lt;/h2&gt;</pre>
				</div>
				<div class="col-md-2"><div class="repeat animated shake slow"></div></div>
			</div>

			<div class="animatedParent">
				<hr class="animated fadeIn slow">
			</div>

			<!-- shakeUp -->
			<div class="animatedParent row article">
			
				<div class="col-md-4">
					
					<h3 class="animated bounceInUp padded">shakeUp</h3>
				</div>
				<div class="animatedParent col-md-6">
<pre class="animated growIn slow">&lt;h2 class='animated <span class="highlighter">shakeUp</span>'&gt;It Works!&lt;/h2&gt;</pre>
				</div>
				<div class="col-md-2"><div class="repeat animated shakeUp slow"></div></div>
			</div>

			<div class="animatedParent">
				<hr class="animated fadeIn slow">
			</div>

			<!-- rotateIn -->
			<div class="animatedParent row article">
			
				<div class="col-md-4">
					
					<h3 class="animated bounceInUp padded">rotateIn</h3>
				</div>
				<div class="animatedParent col-md-6">
<pre class="animated growIn slow">&lt;h2 class='animated <span class="highlighter">rotateIn</span>'&gt;It Works!&lt;/h2&gt;</pre>
				</div>
				<div class="col-md-2"><div class="repeat animated rotateIn slow"></div></div>
			</div>

			<div class="animatedParent">
				<hr class="animated fadeIn slow">
			</div>

			<!-- rotateInUpLeft -->
			<div class="animatedParent row article">
			
				<div class="col-md-4">
					
					<h3 class="animated bounceInUp padded">rotateInUpLeft</h3>
				</div>
				<div class="animatedParent col-md-6">
<pre class="animated growIn slow">&lt;h2 class='animated <span class="highlighter">rotateInUpLeft</span>'&gt;It Works!&lt;/h2&gt;</pre>
				</div>
				<div class="col-md-2"><div class="repeat animated rotateInUpLeft slow"></div></div>
			</div>

			<div class="animatedParent">
				<hr class="animated fadeIn slow">
			</div>

			<!-- rotateInDownLeft -->
			<div class="animatedParent row article">
			
				<div class="col-md-4">
					
					<h3 class="animated bounceInUp padded">rotateInDownLeft</h3>
				</div>
				<div class="animatedParent col-md-6">
<pre class="animated growIn slow">&lt;h2 class='animated <span class="highlighter">rotateInDownLeft</span>'&gt;It Works!&lt;/h2&gt;</pre>
				</div>
				<div class="col-md-2"><div class="repeat animated rotateInDownLeft slow"></div></div>
			</div>

			<div class="animatedParent">
				<hr class="animated fadeIn slow go">
			</div>

			<!-- rotateInUpRight -->
			<div class="animatedParent row article">
			
				<div class="col-md-4">
					
					<h3 class="animated bounceInUp padded go">rotateInUpRight</h3>
				</div>
				<div class="animatedParent col-md-6">
<pre class="animated growIn slow go">&lt;h2 class='animated <span class="highlighter">rotateInUpRight</span>'&gt;It Works!&lt;/h2&gt;</pre>
				</div>
				<div class="col-md-2"><div class="repeat animated rotateInUpRight slow"></div></div>
			</div>

			<div class="animatedParent">
				<hr class="animated fadeIn slow go">
			</div>

			<!-- rotateInDownRight -->
			<div class="animatedParent row article">
			
				<div class="col-md-4">
					
					<h3 class="animated bounceInUp padded go">rotateInDownRight</h3>
				</div>
				<div class="animatedParent col-md-6">
<pre class="animated growIn slow go">&lt;h2 class='animated <span class="highlighter">rotateInDownRight</span>'&gt;It Works!&lt;/h2&gt;</pre>
				</div>
				<div class="col-md-2"><div class="repeat animated rotateInDownRight slow"></div></div>
			</div>

			<div class="animatedParent">
				<hr class="animated fadeIn slow go">
			</div>
			
			<!-- rollIn -->
			<div class="animatedParent row article">
			
				<div class="col-md-4">
					
					<h3 class="animated bounceInUp padded go">rollIn</h3>
				</div>
				<div class="animatedParent col-md-6">
<pre class="animated growIn slow go">&lt;h2 class='animated <span class="highlighter">rollIn</span>'&gt;It Works!&lt;/h2&gt;</pre>
				</div>
				<div class="col-md-2"><div class="repeat animated rollIn slow"></div></div>
			</div>

			<div class="animatedParent">
				<hr class="animated fadeIn slow go">
			</div>
			
			<!-- wiggle -->
			<div class="animatedParent row article">
			
				<div class="col-md-4">
					
					<h3 class="animated bounceInUp padded go">wiggle</h3>
				</div>
				<div class="animatedParent col-md-6">
<pre class="animated growIn slow go">&lt;h2 class='animated <span class="highlighter">wiggle</span>'&gt;It Works!&lt;/h2&gt;</pre>
				</div>
				<div class="col-md-2"><div class="repeat animated wiggle slow"></div></div>
			</div>
			
			<div class="animatedParent">
				<hr class="animated fadeIn slow">
			</div>
			
			<!-- swing -->
			<div class="animatedParent row article">
			
				<div class="col-md-4">
					
					<h3 class="animated bounceInUp padded">swing</h3>
				</div>
				<div class="animatedParent col-md-6">
<pre class="animated growIn slow">&lt;h2 class='animated <span class="highlighter">swing</span>'&gt;It Works!&lt;/h2&gt;</pre>
				</div>
				<div class="col-md-2"><div class="repeat animated swing slow"></div></div>
			</div>

			<div class="animatedParent">
				<hr class="animated fadeIn slow">
			</div>
			
			<!-- tada -->
			<div class="animatedParent row article">
			
				<div class="col-md-4">
					
					<h3 class="animated bounceInUp padded">tada</h3>
				</div>
				<div class="animatedParent col-md-6">
<pre class="animated growIn slow">&lt;h2 class='animated <span class="highlighter">tada</span>'&gt;It Works!&lt;/h2&gt;</pre>
				</div>
				<div class="col-md-2"><div class="repeat animated tada slow"></div></div>
			</div>

			<div class="animatedParent">
				<hr class="animated fadeIn slow">
			</div>
			
			<!-- wobble -->
			<div class="animatedParent row article">
			
				<div class="col-md-4">
					
					<h3 class="animated bounceInUp padded">wobble</h3>
				</div>
				<div class="animatedParent col-md-6">
<pre class="animated growIn slow">&lt;h2 class='animated <span class="highlighter">wobble</span>'&gt;It Works!&lt;/h2&gt;</pre>
				</div>
				<div class="col-md-2"><div class="repeat animated wobble slow"></div></div>
			</div>

			<div class="animatedParent">
				<hr class="animated fadeIn slow">
			</div>
			
			<!-- pulse -->
			<div class="animatedParent row article">
			
				<div class="col-md-4">
					
					<h3 class="animated bounceInUp padded">pulse</h3>
				</div>
				<div class="animatedParent col-md-6">
<pre class="animated growIn slow">&lt;h2 class='animated <span class="highlighter">pulse</span>'&gt;It Works!&lt;/h2&gt;</pre>
				</div>
				<div class="col-md-2"><div class="repeat animated pulse slow"></div></div>
			</div>


			<div class="animatedParent">
				<hr class="animated fadeIn slow">
			</div>
			
			<!-- lightSpeedInRight -->
			<div class="animatedParent row article">
			
				<div class="col-md-4">
					
					<h3 class="animated bounceInUp padded">lightSpeedInRight</h3>
				</div>
				<div class="animatedParent col-md-6">
<pre class="animated growIn slow">&lt;h2 class='animated <span class="highlighter">lightSpeedInRight</span>'&gt;It Works!&lt;/h2&gt;</pre>
				</div>
				<div class="col-md-2"><div class="repeat animated lightSpeedInRight"></div></div>
			</div>

			<div class="animatedParent">
				<hr class="animated fadeIn slow">
			</div>
			
			<!-- lightSpeedInLeft -->
			<div class="animatedParent row article">
			
				<div class="col-md-4">
					
					<h3 class="animated bounceInUp padded">lightSpeedInLeft</h3>
				</div>
				<div class="animatedParent col-md-6">
<pre class="animated growIn slow">&lt;h2 class='animated <span class="highlighter">lightSpeedInLeft</span>'&gt;It Works!&lt;/h2&gt;</pre>
				</div>
				<div class="col-md-2"><div class="repeat animated lightSpeedInLeft"></div></div>
			</div>

			<div class="animatedParent">
				<hr class="animated fadeIn slow">
			</div>
			
			<!-- flip -->
			<div class="animatedParent row article">
			
				<div class="col-md-4">
					
					<h3 class="animated bounceInUp padded">flip</h3>
				</div>
				<div class="animatedParent col-md-6">
<pre class="animated growIn slow">&lt;h2 class='animated <span class="highlighter">flip</span>'&gt;It Works!&lt;/h2&gt;</pre>
				</div>
				<div class="col-md-2"><div class="repeat animated flip"></div></div>
			</div>

			<div class="animatedParent">
				<hr class="animated fadeIn slow">
			</div>
			
			<!-- flipInX -->
			<div class="animatedParent row article">
			
				<div class="col-md-4">
					
					<h3 class="animated bounceInUp padded">flipInX</h3>
				</div>
				<div class="animatedParent col-md-6">
<pre class="animated growIn slow">&lt;h2 class='animated <span class="highlighter">flipInX</span>'&gt;It Works!&lt;/h2&gt;</pre>
				</div>
				<div class="col-md-2"><div class="repeat animated flipInX slowest"></div></div>
			</div>

			<div class="animatedParent">
				<hr class="animated fadeIn slow">
			</div>
			
			<!-- flipInY -->
			<div class="animatedParent row article">
			
				<div class="col-md-4">
					
					<h3 class="animated bounceInUp padded">flipInY</h3>
				</div>
				<div class="animatedParent col-md-6">
<pre class="animated growIn slow">&lt;h2 class='animated <span class="highlighter">flipInY</span>'&gt;It Works!&lt;/h2&gt;</pre>
				</div>
				<div class="col-md-2"><div class="repeat animated flipInY slowest"></div></div>
			</div>

			
			

		</div>
          	
       	  
            

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
