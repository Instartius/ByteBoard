<?php 
    $featucat = "carousel";
	//$featucount = get_option('grft_gldct');
	//$my_query = new WP_Query('showposts='. $featucount .'&category_name='. $featucat .'');
    $my_query = new WP_Query('&category_name=' . $featucat . '');
	if ($my_query->have_posts())
    {
        while ($my_query->have_posts()) 
        {
            $my_query->the_post();
            $do_not_duplicate = $post->ID;
            if (has_post_thumbnail())
            {
			    echo "<li>";
                //echo '<img src="' . get_the_post_thumbnail() . '" alt="" />' ;
                the_post_thumbnail();
				echo '<a href="' . get_permalink() . '">';
				echo '<div class="title-item-carrousel">';
                echo '<p>' . the_title() . '</p>';
				echo '</div>';
                echo '</a>';
                echo "</li>";
            }
        }
    }
?>