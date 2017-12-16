<?php get_header(); ?>

    <div class="container">
        <?php 
        if ( have_posts() ){
            while ( have_posts() ){
                the_post(); ?>
            <div class="card card-body margins">
                <header>        
					
                    <div class="row">
                        <div class="col-12">

                            <h1>
                                <?php the_title(); ?>
                            </h1>
                            <div class="date">
                                <?php the_date(); ?>
                            </div>
                        </div>
                    </div>
                </header>
                <div class="row">
                    <div class="col-12">
                        <?php the_content(); ?>

                    </div>

                    <div class="col-12">
                        <p>
                            <?php the_tags('Tags:', ',' , '<br>'); ?>
                        </p>
                    </div>
                </div>
            </div>
        
            <?php }
        } 
        ?>
    </div>