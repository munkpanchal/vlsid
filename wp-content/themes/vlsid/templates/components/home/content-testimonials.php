<section class="conference">
    <div class="container py-20">

        <div class="flex flex-col gap-16">
            <h1 class="section-title  text-center">
                <span class="font-bold ">Praised by </span> Experts
            </h1>
            <div class="splide splide-testimonial" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <ul class="splide__list">
                        <?php
                        for ($i = 0; $i < 10; $i++) {
                            # code...
                        ?>
                            <li class="splide__slide">

                                <div class="flex flex-col gap-4">
                                    <figure class="w-full aspect-square bg-slate-200 rounded-xl">
                                        video/image
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