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

        <div class="splide" id="conference-slider" aria-label="Splide Basic HTML Example">
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
        <div class="custom-arrows mt-10">
            <button id="custom-prev" class="custom-arrow prev">
                <svg viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M4.83325 14.5L4.12615 13.7929L3.41904 14.5L4.12615 15.2071L4.83325 14.5ZM22.9583 15.5C23.5105 15.5 23.9583 15.0523 23.9583 14.5C23.9583 13.9477 23.5105 13.5 22.9583 13.5V15.5ZM11.3761 6.54289L4.12615 13.7929L5.54036 15.2071L12.7904 7.95711L11.3761 6.54289ZM4.12615 15.2071L11.3761 22.4571L12.7904 21.0429L5.54036 13.7929L4.12615 15.2071ZM4.83325 15.5H22.9583V13.5H4.83325V15.5Z"
                        fill="white" />
                </svg>
            </button>
            <button id="custom-next" class="custom-arrow next">
                <svg viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M31.6667 19L32.3739 18.2929L33.081 19L32.3739 19.7071L31.6667 19ZM7.91675 20C7.36446 20 6.91675 19.5523 6.91675 19C6.91675 18.4477 7.36446 18 7.91675 18V20ZM22.8739 8.79289L32.3739 18.2929L30.9596 19.7071L21.4596 10.2071L22.8739 8.79289ZM32.3739 19.7071L22.8739 29.2071L21.4596 27.7929L30.9596 18.2929L32.3739 19.7071ZM31.6667 20H7.91675V18H31.6667V20Z"
                        fill="white" />
                </svg>

            </button>
        </div>
    </div>

</section>