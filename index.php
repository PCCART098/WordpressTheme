<?php get_header(); ?>

    <div class="container">
        <?php 
        if ( have_posts() ){
            while ( have_posts() ){
                the_post(); ?>
            <div>
                <header>        
                    <div class="row">
                        <div class="col-12">
                            <h1>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h1>
                            <div class="date">
                                <?php the_date(); ?>
                            </div>
                        </div>
                    </div>
                </header>
                <div class="row">
                    <div class="col-12 col-lg 8">
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>">
                            Read More...
                        </a>
                    </div>

                    <div class="col-12 col-lg-4">
                        <?php the_tags('Tags:', ',' , '<br>'); ?>
                    </div>
                </div>
            </div>
        
            <?php }
        } 
        ?>
        
    </div>
        
    </body>
</html>