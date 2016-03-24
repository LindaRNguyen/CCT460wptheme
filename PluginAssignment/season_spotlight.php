<?php
/*
Plugin Name: Season SPotlight
Plugin URI: https://phoenix.sheridanc.on.ca/~ccit3414/
Description: A plugin with a custom post type that will display in a widget
Version: 1.0
Author: Linda Nguyen, Marta Bielak & Samantha Kozicki
Author URI: https://phoenix.sheridanc.on.ca/~ccit3414/
Icon made by Freepik from http://www.flaticon.com licensed by CC 3.0 BY
*/

add_action('init', 'shine_spotlight');

function shine_spotlight(){

		 $labels = array(
				'name'=>__("Season's Spotlight"),
				'add_new'=>__('Add New'),
				'edit'=>__('Edit'),
				'view'=>__('View')
				);

		$moreargs = array(
			'label'=>__('ssn_spotlight','glorydeer'),
			'description'=>__('Posts used for displaying seasonal designers that are not featured in the main collection','glorydeer'),
			'labels'=>$labels,
			'public'=> true,
			'menu_position'=> 10,
			'supports'=> array(
				'title',
				'editor',
				'thumbnail',
				'custom-fields'),
			'taxonomies'=> array(''),
			'menu_icon'=>plugins_url('plugimgs/icon.png',__FILE__),
			'rewrite'=>array(
				'slug'=> 'highlight', 'with_front'=> true),
			'has_archive'=> true);
		register_post_type('ssn_spotlight', $moreargs);

}

add_action ('init', 'shine_spotlight')

?>