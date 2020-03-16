<?php get_header(); ?>

<main>
  <div class="header-image">
    <img src="<?php echo get_template_directory_uri(); ?>/images/header-menu.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/header-menu.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/header-menu@2x.jpg 2x">
    <h1 class="font-serif">MENU</h1>
  </div>

  <article class="menu-list">
    <?php
      if(have_posts()):
        while(have_posts()) : the_post();
        ?>
        <section class="menu-list-item">
          <img src="<?php the_field('image'); ?>" width=154 height=154>
          <h2><?php the_title(); ?></h2>
          <p class="menu-list-item-price"><?php the_field('price'); ?>yen</p>
          <p class="menu-list-item-description"><?php the_field('description'); ?></p>
        </section>
    <?php
        endwhile;
      else:
    ?>
    <p>お探しの記事はありませんでした</p>
    <?php endif; ?>
  </article>
  
  <!-- ページネーション -->
  <nav class="posts-navigation">
    <div class="nav-links">
      <?php 
          if(get_next_post()):
            echo '<div class="nav-left">';
            next_post_link('%link', '次へ');
            echo '</div>';
          else:
            echo '<div class="nav-left off">';
            echo '<span></span>';
            echo '</div>';
          endif;
        ?>
      <div class="nav-page">
        <a href="/news/">一覧へ</a>
      </div>
      <?php 
      if(get_previous_post()):
        echo '<div class="nav-right">';
        previous_post_link('%link', '前へ');
        echo '</div>'; 
      else:
        echo '<div class="nav-right off">';
        echo '<span></span>';
        echo '</div>'; 
      endif;
      ?>
    </div>
  </nav>
</main>

</main>

<?php get_footer(); ?>