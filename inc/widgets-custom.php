<?php
/**
 * ====================================================
 * WIDGET A PROPOS
 * ==================================================== 
 * http://www.wpbeginner.com/wp-tutorials/how-to-create-a-custom-wordpress-widget/
 */
 
 
class about_widget extends WP_Widget {
function __construct() {
parent::__construct(
// Base ID of your widget
'about_widget', 

// Widget name will appear in UI
__('About widget Widget', 'about_widget_blank_bootstrap'), 

// Widget description
array( 'description' => __( 'Display "About" bloc ', 'about_widget_blank_bootstrap' ), ) 
);
}

// Creating widget front-end
// This is where the action happens
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
$content = apply_filters( 'widget_content', $instance['content'] );
$content_eng = apply_filters( 'widget_content_eng', $instance['content_eng'] );
$urlpage = apply_filters( 'widget_content', $instance['urlpage'] );


// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];
$readmore =  esc_html__( 'readmore', 'about_widget_blank_bootstrap' );
echo '<p class="fr_content">'.$content.'</p>';
echo '<p class="eng_content">'.$content_eng.'</p>';
echo '<p><a class="readmore" href="'.esc_url( get_permalink($urlpage) ).'">'.$readmore.'</a></p>';

echo $args['after_widget'];
}
		
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
$content = $instance[ 'content' ];
$content_eng = $instance[ 'content_eng' ];
$urlpage = $instance[ 'urlpage' ];
}
else {
$title = __( 'New title', 'about_widget_blank_bootstrap' );
$content = __( 'Your content', 'about_widget_blank_bootstrap' );
$content_eng = __( 'Your content (ENG)', 'about_widget_blank_bootstrap' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<p>
	<label for="<?php echo $this->get_field_id('content'); ?>"><?php _e('Content:'); ?></label>
	<textarea id="<?php echo $this->get_field_id('content'); ?>" name="<?php echo $this->get_field_name('content'); ?>"><?php echo $content; ?></textarea>
</p>
<p>
	<label for="<?php echo $this->get_field_id('content_eng'); ?>"><?php _e('Content (eng):'); ?></label>
	<textarea id="<?php echo $this->get_field_id('content_eng'); ?>" name="<?php echo $this->get_field_name('content_eng'); ?>"><?php echo $content_eng; ?></textarea>
</p>
<p>
<label for="<?php echo $this->get_field_id( 'urlpage' ); ?>"><?php _e( 'Url:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'urlpage' ); ?>" name="<?php echo $this->get_field_name( 'urlpage' ); ?>" type="text" value="<?php echo esc_attr( $urlpage ); ?>" />
</p>


<?php 
}
	
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
$instance['content'] = ( ! empty( $new_instance['content'] ) ) ? strip_tags( $new_instance['content'] ) : '';
$instance['content_eng'] = ( ! empty( $new_instance['content_eng'] ) ) ? strip_tags( $new_instance['content_eng'] ) : '';

$instance['urlpage'] = ( ! empty( $new_instance['urlpage'] ) ) ? strip_tags( $new_instance['urlpage'] ) : '';
return $instance;
}
} // Class about_widget ends here

// Register and load the widget
function aboutwidget_load_widget() {
	register_widget( 'about_widget' );
}
add_action( 'widgets_init', 'aboutwidget_load_widget' );

/**
 * ====================================================
 * WIDGET Next event
 * ==================================================== 
 * http://www.wpbeginner.com/wp-tutorials/how-to-create-a-custom-wordpress-widget/
 */
 
 
class nextevent_widget extends WP_Widget {
function __construct() {
parent::__construct(
// Base ID of your widget
'nextevent_widget', 

// Widget name will appear in UI
__('Next event Widget', 'nextevent_widget_blank_bootstrap'), 

// Widget description
array( 'description' => __( 'Display "Next Event" bloc ', 'nextevent_widget_blank_bootstrap' ), ) 
);
}

// Creating widget front-end
// This is where the action happens
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
//$content = apply_filters( 'widget_content', $instance['content'] );
//$urlpage = apply_filters( 'widget_content', $instance['urlpage'] );


// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'].'<i class="fa fa-calendar-check-o"></i> '. $title . $args['after_title'];


$loop = new WP_Query(
				array(
				'post_type' => 'events',
				'posts_per_page' => 1,
				'orderby' => 'post_date'
				)
				);
		$count =0;	

if ( $loop->have_posts() ) { 
	while ( $loop->have_posts() ) { 
		$loop->the_post();
		get_template_part( 'excerpt', 'eventforwidget' );
	}
}else{
	$noeventavailable = __( 'No event available', 'nextevent_widget_blank_bootstrap' );
	echo'<p>'.$noeventavailable.'</p>';
}

echo $args['after_widget'];
}
		
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
//$content = $instance[ 'content' ];
//$urlpage = $instance[ 'urlpage' ];
}
else {
$title = __( 'Next Event', 'nextevent_widget_blank_bootstrap' );
//$content = __( 'Your content', 'nextevent_widget_blank_bootstrap' );

}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<!--
<p>
	<label for="<?php echo $this->get_field_id('content'); ?>"><?php _e('Content:'); ?></label>
	<textarea id="<?php echo $this->get_field_id('content'); ?>" name="<?php echo $this->get_field_name('content'); ?>"><?php echo $content; ?></textarea>
</p>
<p>
<label for="<?php echo $this->get_field_id( 'urlpage' ); ?>"><?php _e( 'Url:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'urlpage' ); ?>" name="<?php echo $this->get_field_name( 'urlpage' ); ?>" type="text" value="<?php echo esc_attr( $urlpage ); ?>" />
</p>
-->


<?php 
}
	
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
//$instance['content'] = ( ! empty( $new_instance['content'] ) ) ? strip_tags( $new_instance['content'] ) : '';
//$instance['urlpage'] = ( ! empty( $new_instance['urlpage'] ) ) ? strip_tags( $new_instance['urlpage'] ) : '';
return $instance;
}
} // Class about_widget ends here

// Register and load the widget
function nextevent_load_widget() {
	register_widget( 'nextevent_widget' );
}

// WIDGET DESACTIVE!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
// WIDGET DESACTIVE!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
// WIDGET DESACTIVE!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

//add_action( 'widgets_init', 'nextevent_load_widget' );


?>