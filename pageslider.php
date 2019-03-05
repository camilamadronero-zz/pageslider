defined( 'ABSPATH' ) or die( 'Be kind and leave' );

<?php
/**
 * Plugin Name: PageSlider
 * Plugin URI:  https://example.com/pageslider
 * Description: Simple Page Slider Feature
 * Version:     1.0.0
 * Author:      Camila Madroñero
 * Author URI:  https://author.example.com/
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: wporg
 * Domain Path: /languages
 */
PageSlider is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

PageSlider is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with PageSlider. If not, see {License URI}.
*/

function page-slider-add-menu() {
	add_submenu_page("options-general.php", "PageSlider", "PageSlider", "manage_options", "pageslider-hello-world", "pageslider_hello_world_page");
}
add_action("admin_menu", "pageslider_add_menu");

function pageslider_hello_world_page()
{
?>
<div class="wrap">
	<h1>
		Hello World Plugin Template By <a
			href="https://crunchify.com/optimized-sharing-premium/" target="_blank">Crunchify</a>
	</h1>
 
	<form method="post" action="options.php">
            <?php
	settings_fields("crunchify_hello_world_config");
	do_settings_sections("crunchify-hello-world");
	submit_button();
?>
         </form>
</div>
 
<?php
}
 
function crunchify_hello_world_settings() {
	add_settings_section("crunchify_hello_world_config", "", null, "crunchify-hello-world");
	add_settings_field("crunchify-hello-world-text", "This is sample Textbox", "crunchify_hello_world_options", "crunchify-hello-world", "crunchify_hello_world_config");
	register_setting("crunchify_hello_world_config", "crunchify-hello-world-text");
}
add_action("admin_init", "crunchify_hello_world_settings");
 
function crunchify_hello_world_options() {
?>
<div class="postbox" style="width: 65%; padding: 30px;">
	<input type="text" name="crunchify-hello-world-text"
		value="<?php
	echo stripslashes_deep(esc_attr(get_option('crunchify-hello-world-text'))); ?>" />
	Provide any text value here for testing<br />
</div>
<?php
}
