<!-- service section -->

<?php $wl_theme_options = weblizar_get_options(); ?>

<!-- デファルト変更-->
<?php  
	$wl_theme_options['service_1_title'] = 'フェイスブック';
	$wl_theme_options['service_1_icons'] = 'fa fa-facebook';
	$wl_theme_options['service_1_text'] = 'facebook page link';
	$wl_theme_options['service_1_link'] = 'https://ja-jp.facebook.com/ludolph2013';

	$wl_theme_options['service_2_title'] = 'ツイッター';
	$wl_theme_options['service_2_icons'] = 'fa fa-twitter';
	$wl_theme_options['service_2_text'] = 'twwiter page link';
	$wl_theme_options['service_2_link'] = 'https://twitter.com/rits_ultimate';

	$wl_theme_options['service_3_title'] = '公式サイト';
	$wl_theme_options['service_3_icons'] = 'fa fa-asterisk';
	$wl_theme_options['service_3_text'] = 'official site page link';
	$wl_theme_options['service_3_link'] = 'http://www.japanultimate.jp/';
	
	$wl_theme_options['home_service_heading'] = '関連サイト';
?>
<!-- 変更終了 -->


<div class="enigma_service">
<?php if($wl_theme_options['home_service_heading'] !='') { ?>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="enigma_heading_title">
				<h3><?php echo esc_attr($wl_theme_options['home_service_heading']); ?></h3>		
			</div>
		</div>
	</div>
</div>	
<?php } ?>



<div class="container">
		<div class="row isotope" id="isotope-service-container">		
			<?php for($i=1; $i<4; $i++ ) { ?>
			<div class=" col-md-4 service">
				<div class="enigma_service_area appear-animation bounceIn appear-animation-visible">
					<?php if($wl_theme_options['service_'.$i.'_icons'] !='') { ?><div class="enigma_service_iocn pull-left"><i class="<?php echo $wl_theme_options['service_'.$i.'_icons']; ?>"></i></div><?php } ?> 
					<div class="enigma_service_detail media-body">
						<?php if($wl_theme_options['service_'.$i.'_title'] !='') { ?><h3><a href="<?php echo esc_url($wl_theme_options['service_'.$i.'_link']); ?>" target="_blank"><?php echo esc_attr($wl_theme_options['service_'.$i.'_title']); ?></a></h3><?php } ?>
						<?php if($wl_theme_options['service_'.$i.'_text'] !='') { ?><p><?php echo apply_filters('the_content', $wl_theme_options['service_'.$i.'_text'], true); ?></p><?php } ?>
					</div>
				</div>
			</div>
			<?php } ?>	
		</div>
	</div>
</div>
<!-- /Service section -->