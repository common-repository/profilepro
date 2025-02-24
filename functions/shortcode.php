<?php

if ( ! defined( 'WPINC' ) ) {
	die;
}

if( !class_exists( 'PROFILEPROShortcode' ) ){
	
	class PROFILEPROShortcode{
	
		function __construct(){
			add_shortcode( 'profilepro' , array( $this, 'callback' ), 10, 1 );
		}
		
		function callback( $atts ){
			global $profilepro;
			$form_type = get_post_meta( $atts['id'], 'profilepro_form_type', true );
			ob_start();
			
			switch( $form_type ){
				
				case 'register':
					if( is_user_logged_in() ){
						$atts['id'] = get_option('profilepro_default_profile');
						$user_id = profilepro_get_view_user();
						include_once( PROFILEPRO_PATH.'templates/profile.php');
					}else if( isset( $_GET['forgot']) ){
						include_once( PROFILEPRO_PATH.'templates/forgot.php');
					}else{
						include_once( PROFILEPRO_PATH.'templates/register.php');
					}
					break;
				
				case 'login':
					if( is_user_logged_in() ){
                                            
						$atts['id'] = get_option('profilepro_default_profile');
						$user_id = profilepro_get_view_user();
						include_once( PROFILEPRO_PATH.'templates/profile.php');
					}else if( isset( $_GET['forgot']) ){
                             
						include_once( PROFILEPRO_PATH.'templates/forgot.php');
					}
					else if( isset($_GET['reset'] ) ){
						include_once( PROFILEPRO_PATH.'templates/reset.php');
					}else{
                                                
						include_once( PROFILEPRO_PATH.'templates/login.php');
					}
					break;
					
				case 'profile':
					if( is_user_logged_in() ){
						if( isset( $atts['mode'] ) && $atts['mode'] == 'profile' ){
							$user_id = profilepro_get_edit_user();
							if ($user_id == 'not_found' || $user_id == 'not_authorized') {
							}else{
								$mode = 'profile';
								include_once( PROFILEPRO_PATH.'templates/edit.php');
							}
						}else{
							$user_id = profilepro_get_view_user();
							include_once( PROFILEPRO_PATH.'templates/profile.php');
						}
					}else{
						$atts['id'] = get_option('profilepro_default_login');
						
						include_once( PROFILEPRO_PATH.'templates/login.php');
					}
					
					break;		
			}
			
			$output = ob_get_contents();
			ob_get_clean();
			return $output;
		}
	}
	
	new PROFILEPROShortcode();
}


