<?php
/**
 * Plugin Name: Produtos em Destaque
 * Description: Widget com carrossel de produtos em destaque.
 * Author: Mamangava
 * Author URI: http://mamangava.com/
 * Version: 0.0.1
 * License: GPLv2 or later
 */

/**
 * Adds Foo_Widget widget.
 */
class Foo_Widget extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    function __construct() {
        parent::__construct(
                'foo_widget', // Base ID
                'Produtos MAIS VENDIDOS', // Name
                array('description' => 'Carrossel dos produtos mais vendidos.',) // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget($args, $instance) {
        echo $args['before_widget'];
        if (!empty($instance['title'])) {
            echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        }

        $args = array(
            'post_type' => 'product',
            'product_cat' => 'mais-vendidas',
            'orderby' => 'rand',
        );
        $loop = new WP_Query($args);
        ?>

        <div class="wiget-carouser">

            <div class="passdor-widget">
                <a class="" href="#carousel-mais-vendidas-widget" role="button" data-slide="prev"><img src="<?php echo get_template_directory_uri() ?>/img/passador/seta-esq.png" ></a>
                <a class="" href="#carousel-mais-vendidas-widget" role="button" data-slide="next"><img src="<?php echo get_template_directory_uri() ?>/img/passador/seta-dir.png" ></a>
            </div>

            <div id="carousel-mais-vendidas-widget" class="carousel slide" data-ride="carousel" >
                <div class="carousel-inner" role="listbox">                            
                    <?php while ($loop->have_posts()) : $loop->the_post(); ?>                                
                        <div class="item <?php echo ($loop->current_post == 0) ? 'active' : ''; ?>">
                            <a href="<?php the_permalink(); ?>">
                                <?php woocommerce_template_loop_product_thumbnail(); ?>
                            </a>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>


        <?php
        wp_reset_postdata();





        echo $args['after_widget'];
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form($instance) {
        $title = !empty($instance['title']) ? $instance['title'] : __('New title', 'text_domain');
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        <?php
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title']) ) ? strip_tags($new_instance['title']) : '';

        return $instance;
    }

}

// class Foo_Widget
// register Foo_Widget widget
function register_foo_widget() {
    register_widget('Foo_Widget');
}

add_action('widgets_init', 'register_foo_widget');

