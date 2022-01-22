<?php get_header(); ?>

<div >

    <div class="jumbotron jumbotron-fluid">
  <!-- <div class="container p-5">
    <h1>About this theme</h1>      
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta animi aperiam incidunt sed beatae cumque architecto corrupti veniam alias molestias error totam dolorum odit illo dolore quam, at distinctio nobis.</p>
  </div> -->

 
    <div class="container">
        <div class="row">
        <div>
            <h1 style="color: #777;">About this theme</h1>      
            <p style="color: #777;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta animi aperiam incidunt sed beatae cumque architecto corrupti veniam alias molestias error totam dolorum odit illo dolore quam, at distinctio nobis.</p>
        </div>
       
        </div>

</div>

<?php get_template_part('template-parts/services/service', 'list'); ?>

<?php get_template_part('template-parts/testimonials/testimonial', 'list'); ?>




</div>



<?php get_footer(); ?>