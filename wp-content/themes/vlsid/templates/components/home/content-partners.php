<?php

$category_args = array(
    'taxonomy' => 'partner-category',
    'hide_empty' => false, // Show categories even if they have no posts
);

$categories = get_categories($category_args);


?>

<section class="partners">



    <div class="container py-20">

        <div class="flex flex-col gap-16">

            <?php
            if (!empty($categories) && !is_wp_error($categories)) {
                foreach ($categories as $category) {
            ?>
            <div>
                <h2 class="text-3xl font-medium mb-2">
                    <?php
                            echo $category->name;
                            ?>
                </h2>
                <div class="h-[2px] opacity-75 w-full"
                    style="background-image: linear-gradient(90deg, #001F60 0%, #24FFE5 100%);">
                </div>
            </div>
            <?php

                    $post_args = array(
                        'post_type' => 'partner',
                        'posts_per_page' => -1,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'partner-category',
                                'field' => 'term_id',
                                'terms' => $category->term_id,
                            ),
                        ),
                    );

                    $post_query = new WP_Query($post_args);

                    if ($post_query->have_posts()) {
                    ?>

            <div class="cards-wrapper">
                <?php
                            for ($i = 0; $i < 6; $i++) {
                                # code...

                                while ($post_query->have_posts()) {
                                    $post_query->the_post();

                                    $post_id = get_the_ID();

                                    $imageUrl = get_field('partner_logo', $post_id);
                            ?>

                <div class="card">
                    <figure class="card-image">
                        <img src="<?php echo $imageUrl ? $imageUrl : get_theme_file_uri("/public/placeholder.png") ?>"
                            alt="">
                    </figure>
                </div>
                <?php

                                }
                            }
                            ?>
            </div>
            <?php
                        wp_reset_postdata();
                    } else {
                        echo "<p>No partners found in this category.</p>";
                    }
                }
            } else {
                echo "<p>No partner categories found.</p>";
            }
            ?>


        </div>

    </div>
</section>