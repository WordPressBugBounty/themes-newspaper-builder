<?php
/**
 * Title: About Us Section
 * Slug: newspaper-builder/about-us-section
 * Categories: Content
 * Description: About Us Section
 * Keywords: About Us Section
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|superbspacing-large","right":"var:preset|spacing|superbspacing-small","bottom":"var:preset|spacing|superbspacing-large","left":"var:preset|spacing|superbspacing-small"},"blockGap":"0"}},"backgroundColor":"mono-4","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-mono-4-background-color has-background" style="padding-top:var(--wp--preset--spacing--superbspacing-large);padding-right:var(--wp--preset--spacing--superbspacing-small);padding-bottom:var(--wp--preset--spacing--superbspacing-large);padding-left:var(--wp--preset--spacing--superbspacing-small)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|superbspacing-medium","left":"var:preset|spacing|superbspacing-medium"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|superbspacing-xsmall"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"textAlign":"left","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|superbspacing-xsmall"}}},"fontSize":"superbfont-large"} -->
<h2 class="wp-block-heading has-text-align-left has-superbfont-large-font-size" style="margin-bottom:var(--wp--preset--spacing--superbspacing-xsmall)">Why We Started Writing</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","textColor":"secondary","fontSize":"superbfont-small"} -->
<p class="has-text-align-left has-secondary-color has-text-color has-superbfont-small-font-size">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam non nisl in velit dignissim mollis a rhoncus dolor. Vivamus egestas condimentum erat, in iaculis nulla blandit ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam non nisl in velit dignissim mollis a rhoncus dolor. Vivamus egestas condimentum erat, in iaculis nulla blandit ut</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">Read More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"15px","padding":{"right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"0px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/about-us-section.jpg");?>" alt="" style="border-radius:0px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->