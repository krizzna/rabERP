<?php

if( ! function_exists('fa_link_to_action') ) {
 function fa_link_to_action($action, $text, $icon = '', $params = array(), $attrs = array() )
 {
 if($icon) {
$text = '<i class="fa fa-' . $icon . '"></i> ' . $text;
 }
 return link_to_action($action, $text, $params, $attrs);
 }
}
 
if( ! function_exists('fa_link_to_route') ) {
 function fa_link_to_route($route, $text, $icon = '', $params = array(), $attrs = array() )
 {
 if($icon) {
$text = '<i class="fa fa-' . $icon . '"></i> ' . $text;
 }
 return link_to_route($route, $text, $params, $attrs);
 }
}
 
 
if( ! function_exists('fa_link_to') ) {
 function fa_link_to($url, $text, $icon = '', $attrs = array(), $secure = null)
 {
	 if($icon) {
$text = '<i class="fa fa-' . $icon . '"></i> ' . $text;
	 }
	 return link_to($url, $text, $attrs, $secure);
 }
}

function link_to_route_html($name, $html, $parameters = array(), $attributes = array())
{
    $url = route($name, $parameters);
    return '<a href="'.$url.'"'.app('html')->attributes($attributes).'>'.$html.'</a>';
} //link_to_route_html('some.route', 'This is title with icon <i class="icon"></i>');
