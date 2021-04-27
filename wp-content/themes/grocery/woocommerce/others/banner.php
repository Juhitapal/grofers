<?php

$page_id = get_option( 'woocommerce_shop_page_id' );
$banner_img=get_the_post_thumbnail_url($page_id);
//echo "<pre>";
//print_r($banner_img);
//exit();

?>


<div class="w3l_banner_nav_right_banner3" style="background:url(<?php echo $banner_img; ?>) no-repeat 0px 0px" >
    <h3><?php echo get_field('banner_text',$page_id);?><span class="blink_me"></span></h3>
</div>