<?php
/*
Template Name: contact
*/
?>   

    <?php get_header(); ?>

    <main class="wrapper">

        <!-- contact -->
        <section class="page-contact" id="contact">
            <div class="page-contact__container">
                <div class="page-contact__heading">
                    <!-- section-heading -->
                    <h2 class="section-heading">
                        <div class="section-heading__container">
                            <div class="section-heading__text-main">CONTACT</div>
                            <div class="section-heading__text-sub">お問い合わせ</div>
                        </div>
                    </h2><!-- /.section-heading -->
                </div>
                <div class="page-contact__content">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <div class="page-contact__content-container">
                                <?php the_content(); ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section><!-- /.contact -->

    </main>

<?php get_footer(); ?>
</body>

</html>