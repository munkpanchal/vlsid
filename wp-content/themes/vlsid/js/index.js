import "./modules/feature";
import "@splidejs/splide/css";
import Splide from "@splidejs/splide";

/* Hamburger  */
const dropdown = document.querySelector(".dropdown");
document.querySelector(".hamburger").addEventListener("click", function () {
  if (dropdown.classList.contains("active")) {
    dropdown.classList.remove("active");
    this.classList.remove("active");
  } else {
    dropdown.classList.add("active");
    this.classList.add("active");
  }
});
/* Hamburger End */

if (Splide) {
  if (document.querySelector("#conference-slider")) {
    const slide2 = new Splide("#conference-slider", {
      type: "loop",
      perPage: 3,
      center: true,
      perMove: 1,
      arrows: false,
      autoplay: true,
      speed: 300,
      gap: 16,
      pagination: false,
      breakpoints: {
        1024: {
          perPage: 3,
        },
      },
    }).mount();
    // Custom arrow functionality
    const prevArrow = document.querySelector("#custom-prev");
    const nextArrow = document.querySelector("#custom-next");
    prevArrow?.addEventListener("click", () => slide2.go("<"));

    nextArrow?.addEventListener("click", () => slide2.go(">"));

    if (document.querySelector("#splide-testimonial")) {
      const testimonialSlider = new Splide("#splide-testimonial", {
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
            perPage: 1,
          },
        },
      }).mount();
      // Custom arrow functionality
      const testPrevArrow = document.querySelector("#custom-test-prev");
      const testNextArrow = document.querySelector("#custom-test-next");

      testPrevArrow?.addEventListener("click", () => {
        console.log("first");
        testimonialSlider.go("<");
      });

      testNextArrow?.addEventListener("click", () => {
        console.log("second");
        testimonialSlider.go(">");
      });
    }
  }
}
