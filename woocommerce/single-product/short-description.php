<?php
/**
 * Single product short description
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/short-description.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  Automattic
 * @package WooCommerce/Templates
 * @version 3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $post, $product;

$short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt );

 if ( $product->is_on_sale() ) : ?>

<div class="ticket-price">
	
	<h3>
<?php echo $product->get_price_html(); ?>		
<strong>Early Bird Price*</strong>		
	</h3>
	
	
</div>


<?php endif;?>

<div class="ticket-meta">
	<p class="event-time"><i class="fa fa-clock-o" aria-hidden="true"></i><?php the_field('time'); ?></p>
	<p class="event-date"><i class="fa fa-calendar" aria-hidden="true"></i><?php the_field('date'); ?></p>	
	
<?php if ( get_field('artists_cb') ) { ?>
<div class="artist">
<i class="fa fa-music"></i>	
<p>Playing at the Castle & Ball Stage: <span><?php the_field('artists_cb'); ?></span></p>
<p><em>and</em></p>
<p>Playing at the St Peter's Stage: <span><?php the_field('artists_stp'); ?></span></p>
</div>

<?php } ?>	

	
	
	<p class="event-location"><i class="fa fa-map-marker" aria-hidden="true"></i><?php the_field('location'); ?></p>	
<?php if( get_field('info') ) { ?>
	<p class="event-info"><i class="fa fa-info" aria-hidden="true"></i><?php the_field('info'); ?></p>
<?php } ?>	
</div>









