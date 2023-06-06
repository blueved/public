<?php
$havePost = have_posts();
?>
<div> have post ? 
  <?php if(have_posts()){ ?>
      <span>YES</span>
    <?php  } else { ?>
      <span>NO</span>
    <?php  }; ?> 
  </div>
  
<?php 
get_header(); ?>
<hr />

<!-- example react component -->
<div id="render-react-example-here"></div>
<!-- end example react component -->

<hr />
<?php if (have_posts()) {
  while(have_posts()) {
    the_post(); ?>
    <div>
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <?php the_content(); ?>
    </div>
  <?php }
}

?>
<hr />

<?php
get_footer();
?>