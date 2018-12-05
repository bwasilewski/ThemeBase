<?php

class ThemeBase_Walker extends Walker_Nav_Menu {
  
  // Displays the start of an element. E.g '<li>Item Name'
  function start_el(&$output, $item, $depth=0, $args=array(), $id = 0) {
    $object = $item->object;
    $type = $item->type;
    $title = $item->title;
    $permalink = $item->url;

    $output .= '<a class="navbar-item" href="">' . $title;
  }
}