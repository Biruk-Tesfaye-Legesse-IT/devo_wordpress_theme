<?php get_header(); ?>

<div >

    <div class="jumbotron jumbotron-fluid">
  <div class="container p-5">
    <h1>About this theme</h1>      
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta animi aperiam incidunt sed beatae cumque architecto corrupti veniam alias molestias error totam dolorum odit illo dolore quam, at distinctio nobis.</p>
  </div>

</div>

<?php get_template_part('template-parts/services/service', 'list'); ?>
    <div class="row">
    <?php 
    if(have_posts()){
        while(have_posts()){
            the_post()?>
            

            <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><a href="<?php the_permalink()?>"><?php the_title()?></a></h4>
                    <p class="card-text"><?php the_excerpt()?></p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
            </div>
            
            <?php }} ?>
    </div>
</div>



<?php get_footer(); ?>