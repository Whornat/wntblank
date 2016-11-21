<?php
/**
 Template Name: Page demo typography
 */

get_header(); ?>
<style>

</style>

	<div id="primary" class="col-lg-9 col-md-7 content-area <?php echo get_theme_mod('content_position') ?>">
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
            <div class="container">
            <i class="fa fa-camera-retro fa-lg"></i> fa-lg
<i class="fa fa-camera-retro fa-2x"></i> fa-2x
<i class="fa fa-camera-retro fa-3x"></i> fa-3x
<i class="fa fa-camera-retro fa-4x"></i> fa-4x
<i class="fa fa-camera-retro fa-5x"></i> fa-5x
            </div>
            
            
          	<div class="container">
            <h1>FANCY BOX</h1>
            <p><a href="http://www.immo-visite.com/client_data/assets/2222222222.jpg" class="fancybox btn">lien Image avec effet fancy</a></p>
            <p><a href="<?php echo get_page_link(2); ?>" class="ajaxlink btn btn-success">lien Page interne avec effet fancy</a></p>
            </div>
       	  <div class="container">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi purus nisl, venenatis a dolor eget, volutpat feugiat neque. In hac habitasse platea dictumst. Etiam imperdiet dolor quis eros aliquam, ac tincidunt mi finibus. Phasellus tempor, libero quis elementum tempor, massa lectus sollicitudin sapien, a aliquet eros nulla eu tortor. In et scelerisque ipsum. Nunc fringilla sagittis quam, eget aliquam sapien scelerisque sollicitudin. Sed rhoncus lorem ipsum, ut sagittis purus mattis sed. Sed tristique ipsum et posuere hendrerit.</p>

<p class="lead">Proin et interdum nisi. Integer ultrices ut lacus eu venenatis. Sed dolor ante, eleifend et facilisis nec, feugiat non nisi. Morbi at diam ut nisi fermentum ultrices vitae ac odio.</p>
<h1><small>H1 :</small> Vivamus ut augue pharetra, euismod leo sed, ultrices sem.</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi purus nisl, venenatis a dolor eget, volutpat feugiat neque. In hac habitasse platea dictumst. Etiam imperdiet dolor quis eros aliquam, ac tincidunt mi finibus. Phasellus tempor, libero quis elementum tempor, massa lectus sollicitudin sapien, a aliquet eros nulla eu tortor. In et scelerisque ipsum. Nunc fringilla sagittis quam, eget aliquam sapien scelerisque sollicitudin. Sed rhoncus lorem ipsum, ut sagittis purus mattis sed. Sed tristique ipsum et posuere hendrerit.</p>
<h2><small>H2 :</small> Maecenas imperdiet ac lorem vel imperdiet.</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi purus nisl, venenatis a dolor eget, volutpat feugiat neque. In hac habitasse platea dictumst. Etiam imperdiet dolor quis eros aliquam, ac tincidunt mi finibus. Phasellus tempor, libero quis elementum tempor, massa lectus sollicitudin sapien, a aliquet eros nulla eu tortor. In et scelerisque ipsum. Nunc fringilla sagittis quam, eget aliquam sapien scelerisque sollicitudin. Sed rhoncus lorem ipsum, ut sagittis purus mattis sed. Sed tristique ipsum et posuere hendrerit.</p>
<h3><small>H3 :</small> Mauris viverra ex sit amet vulputate varius. Quisque port</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi purus nisl, venenatis a dolor eget, volutpat feugiat neque. In hac habitasse platea dictumst. Etiam imperdiet dolor quis eros aliquam, ac tincidunt mi finibus. Phasellus tempor, libero quis elementum tempor, massa lectus sollicitudin sapien, a aliquet eros nulla eu tortor. In et scelerisque ipsum. Nunc fringilla sagittis quam, eget aliquam sapien scelerisque sollicitudin. Sed rhoncus lorem ipsum, ut sagittis purus mattis sed. Sed tristique ipsum et posuere hendrerit.</p>

<h4><small>H4 :</small> felis ultricies turpis semper rutrum. Cras ac erat a metus maximus iaculis.</h4>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi purus nisl, venenatis a dolor eget, volutpat feugiat neque. In hac habitasse platea dictumst. Etiam imperdiet dolor quis eros aliquam, ac tincidunt mi finibus. Phasellus tempor, libero quis elementum tempor, massa lectus sollicitudin sapien, a aliquet eros nulla eu tortor. In et scelerisque ipsum. Nunc fringilla sagittis quam, eget aliquam sapien scelerisque sollicitudin. Sed rhoncus lorem ipsum, ut sagittis purus mattis sed. Sed tristique ipsum et posuere hendrerit.</p>

<h5><small>H5 :</small> Maecenas in nisi turpis. Pellentesque a sodales magna. Nam neque diam, iaculis</h5>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi purus nisl, venenatis a dolor eget, volutpat feugiat neque. In hac habitasse platea dictumst. Etiam imperdiet dolor quis eros aliquam, ac tincidunt mi finibus. Phasellus tempor, libero quis elementum tempor, massa lectus sollicitudin sapien, a aliquet eros nulla eu tortor. In et scelerisque ipsum. Nunc fringilla sagittis quam, eget aliquam sapien scelerisque sollicitudin. Sed rhoncus lorem ipsum, ut sagittis purus mattis sed. Sed tristique ipsum et posuere hendrerit.</p>

<h6><small>H6 :</small> vitae vehicula quis, suscipit id arcu. Donec eu est velit. Nulla dignissim ullamcorper lectus ut dictum. </h6>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi purus nisl, venenatis a dolor eget, volutpat feugiat neque. In hac habitasse platea dictumst. Etiam imperdiet dolor quis eros aliquam, ac tincidunt mi finibus. Phasellus tempor, libero quis elementum tempor, massa lectus sollicitudin sapien, a aliquet eros nulla eu tortor. In et scelerisque ipsum. Nunc fringilla sagittis quam, eget aliquam sapien scelerisque sollicitudin. Sed rhoncus lorem ipsum, ut sagittis purus mattis sed. Sed tristique ipsum et posuere hendrerit.</p>
<h2>Citation</h2>
<blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi purus nisl, venenatis a dolor eget, volutpat feugiat neque. In hac habitasse platea dictumst. Etiam imperdiet dolor quis eros aliquam, ac tincidunt mi finibus.</p></blockquote>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi purus nisl, venenatis a dolor eget, volutpat feugiat neque. In hac habitasse platea dictumst. Etiam imperdiet dolor quis eros aliquam, ac tincidunt mi finibus. Phasellus tempor, libero quis elementum tempor, massa lectus sollicitudin sapien, a aliquet eros nulla eu tortor. In et scelerisque ipsum. Nunc fringilla sagittis quam, eget aliquam sapien scelerisque sollicitudin. Sed rhoncus lorem ipsum, ut sagittis purus mattis sed. Sed tristique ipsum et posuere hendrerit.</p>

<h2>Adresse</h2>
<address>
  <strong>Twitter, Inc.</strong><br>
  1355 Market Street, Suite 900<br>
  San Francisco, CA 94103<br>
  <abbr title="Phone">P:</abbr> (123) 456-7890
</address>

<h2>Tableau</h2>
<table class="table table-striped"> <thead> <tr> <th>#</th> <th>First Name</th> <th>Last Name</th> <th>Username</th> </tr> </thead> <tbody> <tr> <th scope="row">1</th> <td>Mark</td> <td>Otto</td> <td>@mdo</td> </tr> <tr> <th scope="row">2</th> <td>Jacob</td> <td>Thornton</td> <td>@fat</td> </tr> <tr> <th scope="row">3</th> <td>Larry</td> <td>the Bird</td> <td>@twitter</td> </tr> </tbody> </table>

<h2>Boutons</h2>
<p>
  <button type="button" class="btn btn-primary btn-lg">Large button</button>
  <button type="button" class="btn btn-default btn-lg">Large button</button>
</p>
<p>
  <button type="button" class="btn btn-primary">Default button</button>
  <button type="button" class="btn btn-default">Default button</button>
</p>
<p>
  <button type="button" class="btn btn-primary btn-sm">Small button</button>
  <button type="button" class="btn btn-default btn-sm">Small button</button>
</p>
<p>
  <button type="button" class="btn btn-primary btn-xs">Extra small button</button>
  <button type="button" class="btn btn-default btn-xs">Extra small button</button>
</p>

<div class="bd-example" data-example-id="">
<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
<button type="button" class="btn btn-primary">Primary</button>

<!-- Secondary, outline button -->
<button type="button" class="btn btn-secondary">Secondary</button>

<!-- Indicates a successful or positive action -->
<button type="button" class="btn btn-success">Success</button>

<!-- Contextual button for informational alert messages -->
<button type="button" class="btn btn-info">Info</button>

<!-- Indicates caution should be taken with this action -->
<button type="button" class="btn btn-warning">Warning</button>

<!-- Indicates a dangerous or potentially negative action -->
<button type="button" class="btn btn-danger">Danger</button>

<!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
<button type="button" class="btn btn-link">Link</button>
</div>
<div class="alert alert-warning alert-dismissible fade in" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
</div>



</div><!-- container -->


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
