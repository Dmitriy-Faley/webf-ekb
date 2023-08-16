<?php

add_action("wp_ajax_load_more", "load_posts");
add_action("wp_ajax_nopriv_load_more", "load_posts");
function load_posts()
{
    $args = json_decode(stripslashes($_POST["query"]), true);
    $args["paged"] = $_POST["page"] + 1;

    $posts = new WP_Query($args);
    $html = '';

    if ($posts->have_posts()) : while ($posts->have_posts()) : $posts->the_post();

			$html .= get_template_part("template-parts/blog");

        endwhile;
    endif;

    wp_reset_postdata();
    die($html);
}
