<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <?php get_header(); ?>

</head>

<body <?php body_class(); ?>>

    <?php get_template_part('includes/header'); ?>

    <main class="wrapper">

        <!-- page -->
        <section class="page" id="page">
            <div class="page__container">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="page__heading">
                            <!-- section-heading -->
                            <h2 class="section-heading">
                                <div class="section-heading__container">
                                    <div class="section-heading__text-main"><?php the_title(); ?></div>
                                </div>
                            </h2><!-- /.section-heading -->
                        </div>
                        <div class="page__content">
                            <div class="page__content-container">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </section><!-- /.page -->

    </main>

    <?php get_template_part('includes/footer'); ?>

    <?php get_footer(); ?>
</body>

</html>