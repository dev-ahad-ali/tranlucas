<?php
/**
 * Footer widget menu walker
 * 
 */
class Footer_Menu_Walker extends Walker_Nav_Menu {
    public function start_lvl( &$output, $depth = 0, $args = null ) {}
    
    public function end_lvl( &$output, $depth = 0, $args = null ) {}
    
    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $output .= '<li><a class="p14 text-decoration-none" href="' . $item->url . '">' . $item->title . '</a></li>';
    }
    
    public function end_el( &$output, $item, $depth = 0, $args = null ) {}
}