<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <?php get_header(); ?>

</head>

<body <?php body_class(); ?>>

  <?php get_template_part('includes/header'); ?>

  <main class="wrapper">

    
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <div>
          <?php the_content(); ?>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
      
    index.phpが適用
    </main>

  <?php get_template_part('includes/footer'); ?>

  <?php get_footer(); ?>
</body>

</html>