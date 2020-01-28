
  <?php get_header(); ?>
<div id="banner">
    
    <h1>Yb News </h1>
    <h3>lets get started with every news</h3>
</div>
<main>

    <a href="<?php echo site_url('/blog');?>">
        <h2 class="section-heading">News</h2>
    </a>
    <section>
    <?php 
    $args=array(
        'post_type' =>'post',
        'posts_per_page' =>2,

    );  
$blogposts = new wp_query($args);
while($blogposts->have_posts()){
    $blogposts->the_post();



     ?>
        <div class="card">
            <div class="card-image">
                <a href="<?php echo the_permalink();?>">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" alt="card-image">
                </a>
                <div class="card-description">
                    <a href="<?php the_permalink();?>">
                        <h3><?php  the_title();?></h3>
                        <p >
                        <?php echo wp_trim_words(get_the_excerpt(), 30); ?>

                        </p>
                        <a href="<?php the_permalink();?>" class="btn-readmore">read more</a>
                    </a>
                </div>
            </div>
        </div>

<?php }
wp_reset_query();?>
    </section>
    <h2 class="section-heading">recent news</h2> 
    <section id="section-source">
<p>
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti nulla ea debitis impedit quisquam expedita excepturi nisi officia, recusandae itaque, molestiae odit amet saepe, voluptatem pariatur totam. Dolorem, enim temporibus!
</p>
<a href="#" class="btn-readmore">read more</a>

    </section>
    <?php get_footer(); ?>