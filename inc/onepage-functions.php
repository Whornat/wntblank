<?php
/* Function pour afficher une navigation bullet au onepage ------------------------------------ */
function menu_onepagescrolling($arrayitemsname, $navclass ) {
		//$arrayitemsname = array("presentation", "etape2", "etape3");
	
		$output = '<nav id="scrollingnav" class="navscroll">';
	    $output .= '<ul class="nav navbar-nav navbar-dotted '.$navclass.'">';
		$i = 0;
foreach ($arrayitemsname as $value) {
    	$i++;
		$output .= '<li class="nav-item"><a class="nav-link" href="#step'.$i.'"><span class="nav-dot"></span><span class="nav-label">'.$value.'</span></a></li>';
}
		$output .= '</nav>';
	    $output .= '</ul>';	
   		return $output;
}
/* Function pour afficher une navigation bullet au onepage ------------------------------------ */