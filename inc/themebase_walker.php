<?php

class ThemeBase_Walker extends Walker_Nav_Menu {

  function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent\n";
	}
  
  function end_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat("\t", $depth);
		$output .= "$indent\n";
	}
  
  // Displays the start of an element. E.g '<li>Item Name'
  function start_el(&$output, $item, $depth=0, $args=array(), $id=0) {
    $object = $item->object;
    $type = $item->type;
    $title = $item->title;
    $permalink = $item->url;

    $output .= '<a class="navbar-item" href="' . $permalink . '">' . $title;
  }

  function end_el(&$output, $item, $depth=0, $args=array()) {
    $output .= '</a>';
  }
}