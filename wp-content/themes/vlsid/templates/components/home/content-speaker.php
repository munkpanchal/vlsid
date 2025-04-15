<?php

$category_args = array(
    'taxonomy' => 'speaker-category',
    'hide_empty' => false,
);

$categories = get_categories($category_args);

?>

<section class="speaker" style="background: linear-gradient(130.86deg, #E0AC6A -17.65%, #003B61 53.73%);
">




    <div class="container ">
        <div class="section-content">

            <div class="flex flex-col gap-8 lg:gap-16">
                <?php
                if (!empty($categories) && !is_wp_error($categories)) {
                    foreach ($categories as $category) {
                ?>
                        <h2 class="text-3xl font-medium mb-2 text-white text-center">
                            <?php
                            echo $category->name;
                            ?>
                        </h2>

                        <?php

                        $post_args = array(
                            'post_type' => 'speaker',
                            'posts_per_page' => -1,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'speaker-category',
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
                                        $imageUrl = get_field('speaker_logo', $post_id);
                                        $designation = get_field('speaker_designation', $post_id);
                                        $company = get_field('speaker_company', $post_id);

                                ?>
                                        <div class="card">
                                            <figure class="card-image aspect-square w-full">
                                                <img src="<?php echo $imageUrl ? $imageUrl : get_theme_file_uri("/public/placeholder.png") ?>"
                                                    alt="">
                                            </figure>
                                            <div class="card-content">
                                                <h2 class="title">
                                                    <?php
                                                    echo get_the_title($post_id);
                                                    ?>
                                                </h2>
                                                <?php
                                                if ($designation) {
                                                ?>
                                                    <p>
                                                        <?php
                                                        echo $designation;
                                                        ?>
                                                    </p>
                                                <?php
                                                }
                                                ?>

                                                <?php


                                                if ($company) {
                                                ?>
                                                    <p>
                                                        <?php
                                                        echo $company;
                                                        ?>
                                                    </p>
                                                <?php
                                                }
                                                ?>

                                            </div>

                                        </div>
                                <?php

                                    }
                                }
                                ?>
                            </div>
                <?php
                            wp_reset_postdata();
                        } else {
                            echo "<p>No speakers found in this category.</p>";
                        }
                    }
                } else {
                    echo "<p>No speaker categories found.</p>";
                }
                ?>


            </div>

        </div>



    </div>


</section>