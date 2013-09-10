<?php
/**
 * @package Jordan Rift LLC
 * @subpackage 207 Miles Custom Theme
 */
 
get_header(); ?>

<div id="content">
    
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <input name="post_id" type="hidden" value="<?php the_ID(); ?>" />
        <?php the_content(); ?>
        
    <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
    
	<h3 id="sponsor-heading">Thank You To Our 2012 Sponsors</h3>
	<h4 class="sponsor-subhead">Take a moment to visit our 2012 Sponsors websites!</h4>
	<ul id="primary-sponsors">
		<li><a title="Faithfully Green" href="http://www.faithfullygreenturf.com/" target="_blank"><img src="wp-content/themes/207miles/images/faithfully-green-logo.png" alt="Faithfully Green" width="400" height="200" /></a></li>
		<li><a title="Dickens Quality Demolition" href="http://www.dickensquality.com/" target="_blank"><img src="wp-content/themes/207miles/images/dqd-logo.png" alt="Dickens Quality Demolition" width="400" height="200" /></a></li>
	</ul>
	<ul id="sponsors">
		<li><a title="Arrowhead Insurance" href="http://www.azarrowhead.com/" target="_blank"><img src="wp-content/themes/207miles/images/arrowheadlogo-small.png" alt="Arrowhead Insurance"width="200" height="100" /></a></li>
		<li><img src="wp-content/themes/207miles/images/green-global-logo.png" height="100" width="200" alt="Green Global"></li>
		<li><a title="GU Energy" href="https://guenergy.com/" target="_blank"><img src="wp-content/themes/207miles/images/gu-logo.png" alt="GU Energy" width="200" height="100" /></a></li>
		<li><img src="wp-content/themes/207miles/images/rnc-logo.png" alt="R&amp;C Service Solutions" width="200" height="100" /></li>
		<li><a href="http://healthylegs.net/" title="Center for Venous Disease" target="_blank"><img src="wp-content/themes/207miles/images/cvd-logo.png" alt="Center for Venous Disease" width="200" height="100" /></a></li>
		<li><a href="http://axiommediaproductions.net/" title="Axiom Media Productions" target="_blank"><img src="wp-content/themes/207miles/images/axiom-logo.png" alt="Axiom Media Productions" width="200" height="100" /></a></li>
		<li><a href="http://wellscti.com/" title="Wells CTI" target="_blank"><img src="wp-content/themes/207miles/images/wcti-logo.png" alt="Wells CTI" width="200" height="100" /></a></li>
		<li><a href="http://www.subway.com/" title="Subway" target="_blank"><img src="wp-content/themes/207miles/images/subway-logo.png" alt="Subway" width="200" height="100" /></a></li>
		<li><a href="http://nwchristiancounseling.com/" title="Northwest Christian Couseling" target="_blank"><img src="wp-content/themes/207miles/images/nwcc-logo.png" alt="Northwest Christian Counseling" width="200" height="100" /></a></li>
		<li><a href="http://www.drhoys.com/index.asp" title="Dr Hoy's" target="_blank"><img src="wp-content/themes/207miles/images/drhoys-logo.png" alt="Dr Hoy's" width="200" height="100" /></a></li>
		<li><a href="http://www.larabar.com/" title="Larabar" target="_blank"><img src="wp-content/themes/207miles/images/larbar-logo.png" alt="Larabar" width="200" height="100" /></a></li>
		<li><a href="http://ajoambulance.com/" title="Ajo Ambulance" target="_blank"><img src="wp-content/themes/207miles/images/ajo-logo.png" alt="Ajo Ambulance" width="200" height="100" /></a></li>
		<li><a href="http://www.bicyclevibe.com/" title="Bicycle Vibe" target="_blank"><img src="wp-content/themes/207miles/images/bicycle-vibe-logo.png" alt="Bicycle Vibe" width="200" height="100" /></a></li>
		<li><a title="Golden Rule Tattoo" href="http://www.thegoldenruletattoo.com/"><img src="wp-content/themes/207miles/images/golden-rule-logo.png" alt="Golden Rule Tattoo" width="200" height="100" /></a></li>
		<li class="border"><a title="Available Sponsorship" href="https://my207miles.com/donate"><img src="wp-content/themes/207miles/images/sponsor-placeholder.png" alt="Become A Sponsor" width="200" height="100" /></a></li>
		<li class="border"><a title="Available Sponsorship" href="https://my207miles.com/donate"><img src="wp-content/themes/207miles/images/sponsor-placeholder.png" alt="Become A Sponsor" width="200" height="100" /></a></li>
	</ul>
	<p class="center">For information about becoming a sponsor for the 2012 ride email us at <a href="mailto:info@207miles.com">info@207miles.com</a></p>
</div>

<?php get_footer(); ?>