<?php


class educare_toolkit_thumbnail_posts_widget extends WP_Widget {
    public function __construct(){
        
        $thumbnail_posts_title = __('Latest News', 'rrf-education-theme');
        
        parent::__construct('educare_toolkit_thumbnail_posts_widget', esc_html($thumbnail_posts_title), array(
            'description' => __('You can show recent posts with thumbnail by using this widget.', 'rrf-education-theme')
        ));
    }
    
    public function widget($args, $instance){
        
        $title = $instance['title'];
        $posts_per_page = $instance['posts_per_page'];
        
        ?>
            <?php echo $args['before_widget']; ?>
                <?php echo $args['before_title']; ?><?php echo esc_html($title); ?><?php echo $args['after_title']; ?>
                <div class="educare-thumbnail-posts">
                    <?php
                    global $post;
                    $post_args = array( 'posts_per_page' => $posts_per_page, 'post_type'=> 'post');
                    $myposts = get_posts( $post_args );
                    foreach( $myposts as $post ) : setup_postdata($post); ?>

                        <?php 
                            $teacher_designation = get_post_meta($post->ID, 'teacher_designation', true); 
                            $teacher_join_date = get_post_meta($post->ID, 'teacher_join_date', true); 
                        ?>

                        <div class="educare-single-thumbnail-post">
                            <a href="<?php echo esc_html(the_permalink()); ?>">
                                <?php the_post_thumbnail('thumbnail'); ?>
                                <h4><?php the_title(); ?></h4>
                            </a>
                            <p class="educare-post-meta"><?php echo esc_html(the_time('M d, Y')); ?></p>
                        </div>

                    <?php endforeach; ?>
                </div>
            <?php echo $args['after_widget']; ?>       
        <?php
    }
    
    public function form($instance){
        
        $instance = wp_parse_args( (array) $instance, array( 
            'posts_per_page' => __('3', 'rrf-education-theme'),
            'title' => __('Latest News', 'rrf-education-theme')
        ) );        
        
        $title = $instance['title'];
        $posts_per_page = $instance['posts_per_page'];
        
    ?>
    <p>
        <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Widget title', 'rrf-education-theme'); ?></label>
        <input type="text" value="<?php echo esc_attr($title); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" id="<?php echo esc_attr($this->get_field_id('title')); ?>" class="widefat">
    </p>
    <p>
        <label for="<?php echo esc_attr($this->get_field_id('posts_per_page')); ?>"><?php _e('Posts per page', 'rrf-education-theme'); ?></label>
        <input type="text" value="<?php echo esc_attr($posts_per_page); ?>" name="<?php echo esc_attr($this->get_field_name('posts_per_page')); ?>" id="<?php echo esc_attr($this->get_field_id('posts_per_page')); ?>" class="widefat">
    </p>
    <?php
    }
}


function educare_toolkit_widgets_register(){
    register_widget('educare_toolkit_thumbnail_posts_widget');
}
add_action('widgets_init', 'educare_toolkit_widgets_register');