<?php get_header(); ?>

<div class="blog-single gray-bg">
        <div class="container">
            <!-- <div class="row align-items-start"> -->
            <div class="row">
                <!-- <div class="col-lg-8 m-15px-tb"> -->
                <div class="col-lg-10 m-15px-tb">
                    <article class="article">
                        <div class="article-img">
                            <img src= 'https://images.unsplash.com/photo-1469474968028-56623f02e42e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=874&q=80' title="" alt="">
                        </div>
                        <div class="article-title"">
                            <h6><?php the_category()?></h6>
                            <h2><?php the_title()?></h2>
                            <div class="media">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" title="" alt="">
                                </div>
                                <div class="media-body">
                                    <label><?php the_author()?></label>
                                    <span><?php the_date()?></span>
                                </div>
                            </div>
                        </div>
                        <div class="article-content">
                            <?php the_content()?>
                        </div>
                        <div class="nav tag-cloud">
                            <!-- <a href="#">Design</a> -->
                            <?php the_tags()?>
                        </div>
                    </article>
                    <div class="contact-form article-comment">
                        <h4>Leave a Reply</h4>
                        <form id="contact-form" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="Name" id="name" placeholder="Name *" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="Email" id="email" placeholder="Email *" class="form-control" type="email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" placeholder="Your message *" rows="4" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="send">
                                        <button class="px-btn theme"><span>Submit</span> <i class="arrow"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
<!-- sidebar add -->
            </div>
        </div>
    </div>

    <?php get_footer(); ?>