<?php
$beAparts = [
    [
        "title" => "Exhibit at VLSID 2026",
        "image" => get_theme_file_uri("/public/bea-1.png"),
        "description" => "Showcase, digitally or in-person, your innovations, solutions and open innovation initiatives. Sponsor and add your brand to an incredible zone. There’s many ways to get involved!",
        "btnText" => "Partner With Us"
    ],
    [
        "title" => "Sponsorship Opportunities",
        "image" => get_theme_file_uri("/public/bea-2.png"),
        "description" => "Gain visibility among top industry professionals by sponsoring VLSID 2026. Leverage branding, networking, and thought leadership opportunities to maximize your impact. ",
        "btnText" => "become a sponser"

    ]
]

?>

<section class="be-apart">
    <div class="container py-20">

        <div class="flex flex-col gap-8 lg:gap-16">
            <h1 class="section-title  text-center">
                <span class="font-bold ">Be a Part at </span>VLSID in Pune
            </h1>

            <div class="grid sm:grid-cols-2 gap-8">
                <?php
                foreach ($beAparts as $beApart) {
                ?>
                    <div class=" shadow-sm hover:shadow-md transition-all duration-300">
                        <figure class="rounded-xl w-full aspect-[16/9] overflow-hidden">
                            <img class="w-full h-full object-cover" src="<?php echo $beApart["image"]; ?>"
                                alt="<?php echo $beApart["title"]; ?>">
                        </figure>
                        <div class="flex flex-col gap-2 p-4">
                            <h2 class="text-2xl font-bold">
                                <?php echo $beApart["title"]; ?>
                            </h2>
                            <p>
                                <?php echo $beApart["description"]; ?>
                            </p>
                            <a class="btn">
                                <?php echo $beApart["btnText"]; ?>
                            </a>

                        </div>

                    </div>
                <?php
                }
                ?>
            </div>

        </div>
    </div>


</section>