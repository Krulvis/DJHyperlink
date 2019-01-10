<?php get_header(); ?>

<body <?php body_class(); ?>>

<!-- wrapper -->
<div class="wrapper">
    <main role="main">
        <!-- section -->
        <div class="content">
            <section>

                <h1><?php _e('Latest Posts', 'html5blank'); ?></h1>

                <?php get_template_part('loop'); ?>

                <?php get_template_part('pagination'); ?>

            </section>
        </div>
        <!-- /section -->

    </main>
    <?php //get_sidebar(); ?>

    <?php //get_footer(); ?>
