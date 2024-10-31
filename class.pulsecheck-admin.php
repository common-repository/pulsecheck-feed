<?php

class Pulsecheck_Admin{

	public static function display_notice(){
		global $hook_suffix;
		if($hook_suffix == 'plugins.php' && get_option('api-key') == ''){
			?><div class="updated" style="padding: 0; margin: 0; border: none; background: none;">
				<style type="text/css">
			.pulsecheck_activate{min-width:825px;border:1px solid #ff8800;padding:5px;margin:15px 0;background:#ff8800;background-image:-webkit-gradient(linear,0% 0,80% 100%,from(#ff8800),to(#f58732));background-image:-moz-linear-gradient(80% 100% 120deg,#ff8800,#f58732);-moz-border-radius:3px;border-radius:3px;-webkit-border-radius:3px;position:relative;overflow:hidden}.pulsecheck_activate .pp_p{position:absolute;top:0px;right:0px;}.pulsecheck_activate .pp_button{font-weight:bold;font-size:15px;text-align:center;padding:9px 0 8px 0;color:#FFF;background:#029DD6;background-image:-webkit-gradient(linear,0% 0,0% 100%,from(#029DD6),to(#0079B1));background-image:-moz-linear-gradient(0% 100% 90deg,#0079B1,#029DD6);-moz-border-radius:2px;border-radius:2px;-webkit-border-radius:2px}.pulsecheck_activate .pp_button:hover{text-decoration:none !important;border:1px solid #029DD6;border-bottom:1px solid #00A8EF;font-size:15px;text-align:center;padding:9px 0 8px 0;color:#F0F8FB;background:#0079B1;background-image:-webkit-gradient(linear,0% 0,0% 100%,from(#0079B1),to(#0092BF));background-image:-moz-linear-gradient(0% 100% 90deg,#0092BF,#0079B1);-moz-border-radius:2px;border-radius:2px;-webkit-border-radius:2px}.pulsecheck_activate .pp_button_border{border:1px solid #006699;-moz-border-radius:2px;border-radius:2px;-webkit-border-radius:2px;background:#029DD6;background-image:-webkit-gradient(linear,0% 0,0% 100%,from(#029DD6),to(#0079B1));background-image:-moz-linear-gradient(0% 100% 90deg,#0079B1,#029DD6)}.pulsecheck_activate .pp_button_container{cursor:pointer;display:inline-block;padding:5px;-moz-border-radius:2px;border-radius:2px;-webkit-border-radius:2px;width:266px}.pulsecheck_activate .pp_description{position:absolute;top:22px;left:285px;margin-left:25px;color:#E5F2B1;font-size:15px;z-index:1000}.pulsecheck_activate .pp_description strong{color:#FFF;font-weight:normal}
				</style>
				<form name="pulsecheck_activate" action="<?php echo esc_url(admin_url('admin.php?page=pulsecheck-plugin-settings')) ?>" method="POST">
					<div class="pulsecheck_activate">
						<img src="<?php echo plugins_url('_inc/img/Logo_tile_57px.jpg',__FILE__);?>" class="pp_p">
						<div class="pp_button_container" onclick="document.pulsecheck_activate.submit();">
							<div class="pp_button_border">
								<div class="pp_button"><?php esc_html_e('Activate', 'activate');?></div>
							</div>
						</div>
						<div class="pp_description"><?php _e('<strong>One more thing! - Please click to activate your PulseCheck Feed</strong>', 'pulsecheck');?></div>
					</div>
				</form>
			</div>	
			<?php
		}
	}



	
	public static function pulsecheck_plugin_settings(){
		register_setting("pulsecheck-settings-group",'api-key');
	}

	public static function add_menu(){
		add_menu_page('Pulsecheck Plugin Settings','PulseCheck Settings','administrator','pulsecheck-plugin-settings',array('Pulsecheck_Admin','pulsecheck_settings_page'),plugins_url('_inc/img/Logo_tile_20px.jpg',__FILE__));
	}
	

	public static function pulsecheck_settings_page(){

		?>
		<body>
		<div class="wrap">
		<img src="<?php echo plugins_url('_inc/img/Logo.png',__FILE__);?>">
		<h1>Pulsecheck Feed Options Page </h1>
		<h2> API Key</h2>

		<form method = 'POST' action="options.php">
			<?php settings_fields('pulsecheck-settings-group'); ?>
			<?php do_settings_sections('pulsecheck-settings-group');?>
			<table class='form-table' style="border-radius: 6px;" bgcolor="#ff8800" cellpadding="30">
				<tr valign="center" >
				<th scope="row" style="color: #ffffff; padding: 10px; vertical-align: middle;">Please enter your API Key: </th>
				<td><input type="text" name="api-key" style="border-radius: 3px;"  value="<?php echo esc_attr( get_option('api-key')); echo $_POST['api-key']; ?>"/></td> 
				</tr>
			</table>
		<?php submit_button(); ?>
		</form>
		</div>
	</body>
		
		<?php
	}





}
?>