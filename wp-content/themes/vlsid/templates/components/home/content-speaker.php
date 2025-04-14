<?php

$args = array(
    'post_type' => 'speaker',
    'posts_per_page' => -1, // Retrieve all posts
);

$query = new WP_Query($args);

$categories = get_categories($args);

?>

<section class="speaker" style="background: linear-gradient(130.86deg, #E0AC6A -17.65%, #003B61 53.73%);
">

    <div class="container py-20">


        <div class="cards-wrapper">

            <?php


            for ($i = 0; $i < 10; $i++) {

                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();
                        $post_id = get_the_ID();

                        $imageUrl = get_field('speaker_image', $post_id);
                        $designation = get_field('speaker_designation', $post_id);
                        $company = get_field('speaker_company', $post_id);


            ?>


            <div class="card">
                <figure class="card-image">
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
            }
            ?>
        </div>



    </div>

</section>