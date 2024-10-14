<?php
/**
 * Title: Newspaper Sidebar
 * Slug: newspaper-builder/sidebar
 * Categories: layout
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|superbspacing-small","bottom":"var:preset|spacing|superbspacing-small","left":"var:preset|spacing|superbspacing-small","right":"var:preset|spacing|superbspacing-small"}},"border":{"radius":"0px"}},"backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:0px;padding-top:var(--wp--preset--spacing--superbspacing-small);padding-right:var(--wp--preset--spacing--superbspacing-small);padding-bottom:var(--wp--preset--spacing--superbspacing-small);padding-left:var(--wp--preset--spacing--superbspacing-small)"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|superbspacing-xxsmall"}}},"fontSize":"superbfont-medium"} -->
<h3 class="wp-block-heading has-superbfont-medium-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--superbspacing-xxsmall)">Recent Posts</h3>
<!-- /wp:heading -->

<!-- wp:latest-posts {"postsToShow":3,"displayPostDate":true,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":50,"featuredImageSizeHeight":50,"addLinkToFeaturedImage":true,"style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast-dark"}}}},"textColor":"mono-2","fontSize":"superbfont-xsmall"} /-->

<!-- wp:spacer {"height":"10px"} -->
<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|superbspacing-xxsmall"}}},"fontSize":"superbfont-medium"} -->
<h3 class="wp-block-heading has-superbfont-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--superbspacing-xxsmall)">Social Media</h3>
<!-- /wp:heading -->

<!-- wp:social-links {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|superbspacing-xxsmall"},"margin":{"top":"0","bottom":"0"}}},"className":"is-style-default","layout":{"type":"flex","flexWrap":"wrap"}} -->
<ul class="wp-block-social-links is-style-default" style="margin-top:0;margin-bottom:0"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"facebook"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:spacer {"height":"10px"} -->
<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|superbspacing-xxsmall"}}},"fontSize":"superbfont-medium"} -->
<h3 class="wp-block-heading has-superbfont-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--superbspacing-xxsmall)">Advertisement</h3>
<!-- /wp:heading -->

<!-- wp:image {"sizeSlug":"large"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/banner.png");?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->