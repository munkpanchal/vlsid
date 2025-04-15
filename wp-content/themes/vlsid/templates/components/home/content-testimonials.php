<?php
$post_args = array(
    'post_type' => 'testimonial',
    'posts_per_page' => -1,
);

$post_query = new WP_Query($post_args);

?>

<section class="conference">
    <div class="container py-20 relative">

        <div class="flex flex-col gap-8 lg:gap-16">
            <h1 class="section-title  text-center">
                <span class="font-bold ">Praised by </span> Experts
            </h1>
            <div class="splide " id="splide-testimonial" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <ul class="splide__list">
                        <?php
                        while ($post_query->have_posts()) {
                            $post_query->the_post();

                            $post_id = get_the_ID();

                            $rating = get_field('testimonial_rating', $post_id);
                            $company = get_field('testimonial_company', $post_id);
                            $video = get_field('testimonial_video_review', $post_id);
                            $poster = get_field('poster', $post_id);
                            # code...
                        ?>
                            <li class="splide__slide">

                                <div class="flex flex-col gap-4">
                                    <figure class="w-full aspect-video bg-slate-200 rounded-xl overflow-hidden">
                                        <video class="h-full w-full object-cover" controls poster="<?php echo $poster ?>"
                                            muted playsinline controls="false">
                                            <source src="<?php echo $video ?>" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </figure>
                                    <div class="flex flex-col">
                                        <h2 class="flex justify-between">Venugopal Puvvada <img
                                                class="object-contain h-full"
                                                src="<?php echo get_theme_file_uri("/public/stars.png") ?>" alt=""></h2>
                                        <p class="text-sm">NXP</p>
                                    </div>

                                </div>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>

        </div>
    </div>


</section>