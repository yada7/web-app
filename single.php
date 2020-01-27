<?php get_header(); ?>
<?php
$args=array(
'post_type'=>'project',
);

$blogposts = new wp_query($args);

  while ($blogposts->have_posts()){
     $blogposts->the_post();

     ?>
     <h2><?php the_title(); ?></h2>
     posted by <?php the_author(); ?>
     <img src="<?php echo get_the_post_thumbnail_url(get_the_id());  ?>"/>
     <?php the_content();
     comment_form();
}
 ?>

<?php get_footer(); ?>