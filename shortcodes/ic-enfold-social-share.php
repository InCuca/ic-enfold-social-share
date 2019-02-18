<?php
error_log(class_exists( 'ic_enfold_social_share' ));

if ( !class_exists( 'ic_enfold_social_share' ) ) {
    class ic_enfold_social_share extends aviaShortcodeTemplate
	{
		function shortcode_insert_button()
		{
			// Configure shortcode
			$this->config['name']		= __('Social Share Links', 'ic_enfold_social_share' );
			$this->config['icon']		= plugin_dir_url(__FILE__) . '../images/ic-template-icon.png';
			$this->config['target']		= 'avia-target-insert';
			$this->config['shortcode'] 	= 'ic-enfold-social-share';
			$this->config['tooltip'] 	= __('Creates social media share links', 'ic_enfold_social_share' );
			$this->config['preview'] 	= false;
		}

		/**
		 * Popup Elements
		 *
		 * If this function is defined in a child class the element automatically gets an edit button, that, when pressed
		 * opens a modal window that allows to edit the element properties
		 *
		 * @return void
		 */
		function popup_elements()
		{
			$this->elements = array(

				array(
					"name" 	=> __("Text", 'avia_framework' ),
					"desc" 	=> __("This is the text that appears.", 'avia_framework' ),
					"id" 	=> "text",
					"type" 	=> "input",
					"std" => __("Compartilhe este post:", 'avia_framework' )
				),

			);
		}

		/**
		 * Frontend Shortcode Handler
		 *
		 * @param array $atts array of attributes
		 * @param string $content text within enclosing form of shortcode element
		 * @param string $shortcodename the shortcode found, when == callback name
		 * @return string $output returns the modified html string
		 */
		function shortcode_handler($atts, $content = "", $shortcodename = "", $meta = "")
		{
			ob_start();
			avia_social_share_links(array(), array(), $atts["text"]);
			$output = ob_get_clean();
			ob_end_flush();
			return $output;
		}
	}
}