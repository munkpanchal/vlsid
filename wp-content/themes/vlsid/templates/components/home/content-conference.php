<section class="conference" style="background: linear-gradient(115.59deg, #001F60 2.79%, #D89C5C 122.82%);
">
    <div class="container py-20">

        <div class="flex flex-col gap-8">
            <h1 class="section-title text-white text-center">
                <span class="font-bold uppercase">vlsid </span> Conference
            </h1>
            <p class="text-center text-white">
                International VLSI Design & Embedded Systems conference is a Premier Global conference with legacy of
                over three and half decades. This Global Annual technical conference that focusses on latest
                advancements in
                VLSI
                and Embedded Systems, is attended by over 2000 engineers, students & faculty, industry, academia,
                researchers, bureaucrats and government bodies.
                VLSI Design Conference started as a simple idea in 1985: to sense the level of VLSI activities in India
                with
                a focus on engineering education & research.
                With its global footprints VLSID is recognized as a ‘Sister Conference’ of Design Automation Conference.
                This conference is sponsored by VLSI Society of India (VSI)
            </p>
        </div>
    </div>

    <div class="pb-20">

        <div class="splide" aria-label="Splide Basic HTML Example">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php
                    for ($i = 0; $i < 3; $i++) {
                        # code...

                    ?>
                        <li class="splide__slide">
                            <img class="w-full h-full object-cover overflow-hidden rounded-2xl" src="<?php
                                                                                                        echo get_theme_file_uri("/public/" . $i + 1 . ".png");
                                                                                                        ?>" alt="">
                        </li>
                    <?php
                    }
                    ?>

                </ul>
            </div>
        </div>

    </div>

</section>