<?php //echo get_new_royalslider(1); ?>

<style type="text/css">
.rsSlide { }
#step01 .rsContent {padding:5rem;}
</style>

		  
<div id="new-royalslider-1" class="royalSlider new-royalslider-1 rsDefaultInv rs-default-template" style="width:100%; height:100vh;">
<div class="rsContent" style="background:#FF0004">
  <div class="ui-draggable-handle rsABlock" style="width: auto; height: auto; left: 6rem; top: 6rem;" data-move-effect="right" data-delay="500">
  <h3>Block HTML text</h3>
  </div>
</div><!-- fin .rsContent -->
<div class="rsContent" style="background:#8CC44A">
  <div class="ui-draggable-handle rsABlock" style="width: auto; height: auto; left: 6rem; top: 6rem;" data-move-effect="right" data-delay="500">
  <h3>Block HTML text</h3>
  </div>
</div><!-- fin .rsContent -->

</div>

<script id="new-royalslider-init-code" type="text/javascript">
jQuery(document).ready(function($) {
	$('.new-royalslider-1').royalSlider({
		template:'default',
		image_generation:{imageWidth:'',imageHeight:'',thumbImageWidth:'',thumbImageHeight:''},
		//thumbs:{thumbWidth:96,thumbHeight:72},
		//autoPlay:{enabled:!0},
		video:{forceMaxVideoCoverResolution:'standard'},
		block:{moveOffset:20,speed:400,delay:200},
		//width:'100%',height:'',
		//autoScaleSlider:!0,
		//autoScaleSliderWidth:1200,
		//autoScaleSliderHeight:500,
		imageAlignCenter:!1});
});
</script>