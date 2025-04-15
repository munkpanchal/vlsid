<!-- <section class="container">
    <div class="relative w-full overflow-hidden py-20">
        <div class="flex gap-10 overflow-x-auto scroll-smooth scrollbar-hide p-4" id="scrollableSection">
            <div class="flex-shrink-0 rounded-lg flex items-center justify-center">
                <div class="flex flex-col gap-4">
                    <h2 class="font-normal uppercase text-2xl">vlsid 2026</h2>
                    <h1 class="text-7xl font-extrabold"
                        style="background: linear-gradient(104.39deg, #00366E 10.21%, #24FFE5 118.59%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; padding-left: 4px;">
                        <em>A Legacy of <br> Innovation</em>
                    </h1>
                    <p class="w-full max-w-[54ch]">
                        VLSID has united 2,000+ experts worldwide to drive innovation in VLSI and embedded systems.
                        Join us for cutting-edge sessions and inspiring keynotes as we redefine technology together.
                    </p>
                </div>
            </div>
            <div class="flex-shrink-0 w-[900px] h-48 bg-gray-300 rounded-lg flex items-center justify-center">Item 2
            </div>
            <div class="flex-shrink-0 w-[900px] h-48 bg-gray-300 rounded-lg flex items-center justify-center">Item 3
            </div>
        </div>

    </div>
</section> -->

<section class="legacy">
    <div class="container py-20">
        <div class="legacy-wrapper flex sm:flex-row flex-col gap-10">
            <div class="flex flex-col gap-4 ">
                <h2 class="font-normal uppercase text-3xl">vlsid 2026</h2>
                <h1 class="text-5xl sm:text-8xl font-extrabold italic px-20"
                    style="background: linear-gradient(104.39deg, #00366E 10.21%, #24FFE5 118.59%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; padding-left: 10px;">
                    A Legacy of <br> Innovation
                </h1>
                <p class="w-full max-w-[54ch]">
                    VLSID has united 2,000+ experts worldwide to drive innovation in VLSI and embedded systems.
                    Join us for cutting-edge sessions and inspiring keynotes as we redefine technology together.
                </p>
            </div>

            <div class="flex-1 grid grid-cols-2 gap-4">
                <?php
                for ($i = 0; $i < 4; $i++) {
                    # code...
                ?>
                    <div class="box bg-gray-400">
                        <p class="opacity-0 min-h-60">
                            abc
                        </p>
                    </div>

                <?php

                }
                ?>
            </div>
        </div>
    </div>
</section>