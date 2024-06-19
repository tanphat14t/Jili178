<?php

/**
 * Button 1 element.
 *
 * @package          Flatsome\Templates
 * @flatsome-version 3.16.0
 */

?>
<li class="header-button-cs header-button-1">
	<div class="header-button">
		<a href="<?php echo flatsome_option('header_button_1_link') ?>" target="<?php echo flatsome_option('header_button_1_link_target') ?>" rel="<?php echo get_theme_mod('header_button_1_link_rel') ?>" class="image-link">
			<img src="<?php echo get_template_directory_uri() . '-child/imgs/btn-login.webp'; ?>" alt="">
		</a>
	</div>
</li>