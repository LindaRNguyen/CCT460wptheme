<?php
//Options Page Functions
function gd_add_submenu() {
		add_submenu_page( 'themes.php', 'Theme Options', 'Theme Options', 'manage_options', 'theme_options', 'themeoptions_page');
	}
add_action( 'admin_menu', 'gd_add_submenu' );


function themeoptions_page()
{
	//here is the main function that will generate our options page
	?>
	<div class="wrap">
		<div id="icon-themes" class="icon32"><br /></div>
		<h2>Theme Options</h2>

		<form method="POST" action="">
			<input type="hidden" name="update_themeoptions" value="true" />

			<h4>Colour Stylesheet To Use</h4>
			<select name ="color">
				<option value="red">Red Stylesheet</option>
				<option value="green">Green Stylesheet</option>
				<option value="blue">Blue Stylesheet</option>
			</select>

			<h4>Advertising Spot #2</h4>
			<p><input type="text" name="ad2image" id="ad2image" size="32" value=""/> Advert Image</p>
			<p><input type="text" name="ad2url" id="ad2url" size="32" value=""/> Advert Link</p>
 
            <h4><input type="checkbox" name="display_sidebar" id="display_sidebar" /> Display Sidebar</h4>
 
            <h4><input type="checkbox" name="display_search" id="display_search" /> Display Search Box</h4>
 
            <h4><input type="checkbox" name="display_twitter" id="display_twitter" /> Display Twitter Stream</h4>
            <p><input type="text" name="twitter_username" id="twitter_username" size="32" value="" /> Twitter Username</p> 
			
			<p><input type="submit" name="search" value="Update Options" class="button" /></p>
		</form>

	</div>
	<?php ;}