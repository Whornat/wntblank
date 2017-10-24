<?php
//https://amaze.website/customizing-wordpress-embed-links-preview/


// Add style to embed links
//add_action( 'embed_head', 'embed_top_style' );	
function embed_top_style(){ ?>
	<style type="text/css">
		
	.wp-embedded-content {
	width:100% !important;
	min-height:270px !important;
	}
	.wp-embed-more { display: none}
	.wp-embed-footer { display: none}
		
	</style>	

<?php 
}


// Add custom footer after embed links preview
//add_action( 'embed_footer', 'embed_custom_footer_line' );	
function embed_custom_footer_line(){ ?>
	<div id="custom-embed-footer">
		<h3>Our custom Footer line!</h3>
	</div>
<?php }