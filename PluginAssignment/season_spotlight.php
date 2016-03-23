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
	register_post_type('ssn_spotlight',
		array(
			'labels'=> array(
				'name'=>"Season's Spotlight",
				'add_new'=>'Add New',
				'edit'=>'Edit',
				'view'=>'View'
				),
			'public'=> true,
			'menu_position'=> 10,
			'supports'=> array(
				'title',
				'editor',
				'thumbnail',
				'custom-fields'),
			'taxonomies'=> array(''),
			'menu_icon'=>plugins_url('plugimgs/icon.png',__FILE__),
			'has_archive'=> true));
}
?>