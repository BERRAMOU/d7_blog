<?php

/**
 * @file
 * Radix theme implementation to display a node.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>
<article class="post tag-learning tag-code featured elargy-post">
    <?php $path = image_style_url('image_style_news', $content['field_cover']['#items'][0]['uri']); ?>
    <!-- - - - - - - - - - - - - - Media section - - - - - - - - - - - - - -->
    <div class="elargy-post-media" data-bg-img-src="<?php print $path; ?>"
         style="background-image: url(<?php print $path; ?>)">
        <a href="/<?php print $node_url; ?>" class="elargy-post-link"></a>
        <img class="elargy-post-featured-image" src="<?php print $path; ?>"
             alt="<?php print $content['field_cover']['#items'][0]['alt']; ?>">
    </div>

    <div class="elargy-post-body">
        <header class="elargy-post-body-header">
            <!-- - - - - - - - - - - - - - Meta - - - - - - - - - - - - - -->
            <div class="elargy-post-meta">
                <time datetime="2017-10-20 10:41"><?php print $date_created; ?></time>
                in <a href="#"><?php print $content['field_category_taxo'][0]['#title']; ?></a>, by
                <a href="#">
                    <?php print $name; ?>
                    <?php print $last_name; ?>
                </a>
            </div>
            <!-- - - - - - - - - - - - - - End of Meta - - - - - - - - - - - - - -->

            <h2 class="elargy-post-title">
                <a href="<?php print $node_url; ?>">
                    <?php print  render($title); ?>
                </a>
            </h2>
        </header>

        <!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - -->
        <div class="elargy-post-body-content">
            <?php print  render($content['body']['#items'][0]['summary']); ?>
        </div>
        <!-- - - - - - - - - - - - - - End of Content - - - - - - - - - - - - - -->


        <footer class="elargy-post-body-footer">
            <a href="<?php print $node_url; ?>" class="elargy-post-read-more"><?php print t('Read More'); ?></a>
        </footer>

    </div>

    <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    ?>
</article>
