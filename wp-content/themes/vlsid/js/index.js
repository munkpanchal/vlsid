import "./modules/feature";
import "@splidejs/splide/css";
import Splide from "@splidejs/splide";

if (Splide) {
  if (document.querySelector(".splide")) {
    const slide2 = new Splide(".splide", {
      type: "loop",
      perPage: 3,
      center: true,
      perMove: 1,
      arrows: true,
      autoplay: false,
      speed: 300,
      gap: 16,
      pagination: false,
      breakpoints: {
        1024: {
          perPage: 3,
        },
      },
    }).mount();
    if (document.querySelector(".splide-testimonial")) {
      const slide2 = new Splide(".splide-testimonial", {
        type: "loop",
        perPage: 5,
        center: true,
        perMove: 1,
        arrows: true,
        autoplay: false,
        speed: 300,
        gap: 16,
        pagination: false,
        breakpoints: {
          1024: {
            perPage: 3,
          },
        },
      }).mount();

      // // Custom arrow functionality
      // const prevArrow = document.querySelectorAll("#custom-prev");
      // const nextArrow = document.querySelectorAll("#custom-next");
      // prevArrow.forEach((arrow) => {
      //   arrow?.addEventListener("click", () => slide2.go("<"));
      // });
      // nextArrow.forEach((arrow) => {
      //   arrow?.addEventListener("click", () => slide2.go(">"));
      // });
    }
  }
}
