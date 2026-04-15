// Scroll to Top
window.onscroll = function() {
  const sports_outlet_button = document.querySelector('.scroll-top-btn');
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    sports_outlet_button.style.display = "block";
  } else {
    sports_outlet_button.style.display = "none";
  }
};

document.querySelector('.scroll-top-btn a').onclick = function(event) {
  event.preventDefault();
  window.scrollTo({top: 0, behavior: 'smooth'});
};

// Blog Slider
jQuery(document).ready(function($) {
  const section = $('.blog-section');
  const owl = section.find('.owl-carousel').owlCarousel({
    loop: true,
    nav: true,
    navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
    dots: false,
    rtl: false,
    autoplay: true,
    responsive: {
      0: {        
        items: 1
      },
      768: {
        margin: 30,
        items: 2
      },
      992: {
        margin: 45,
        items: 3
      }
    }
  });
});

// Banner Product Slider
document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll(".slider-container").forEach(sports_outlet_container => {
    const sports_outlet_slider =
      sports_outlet_container.querySelector(".slider");
    if (!sports_outlet_slider) return;

    const sports_outlet_slides = Array.from(
      sports_outlet_slider.querySelectorAll(
        "li .bnr-product-box, .bnr-product-box"
      )
    );

    const sports_outlet_total = sports_outlet_slides.length;
    if (!sports_outlet_total) return;

    const sports_outlet_classes = Array.from(
      { length: sports_outlet_total },
      (_, i) => `slide-${i + 1}`
    );

    let sports_outlet_activeIndex = 0;

    function sports_outlet_applyClasses() {
      sports_outlet_slides.forEach((sports_outlet_slide, i) => {
        sports_outlet_slide.classList.remove(
          ...sports_outlet_classes
        );

        const sports_outlet_pos =
          (i - sports_outlet_activeIndex + sports_outlet_total) %
          sports_outlet_total;

        sports_outlet_slide.classList.add(
          sports_outlet_classes[sports_outlet_pos]
        );
      });
    }

    function sports_outlet_nextSlide() {
      sports_outlet_activeIndex =
        (sports_outlet_activeIndex + 1) %
        sports_outlet_total;

      sports_outlet_applyClasses();
    }

    function sports_outlet_prevSlide() {
      sports_outlet_activeIndex =
        (sports_outlet_activeIndex - 1 + sports_outlet_total) %
        sports_outlet_total;

      sports_outlet_applyClasses();
    }

    sports_outlet_applyClasses();

    sports_outlet_container
      .querySelector(".next-btn")
      ?.addEventListener("click", sports_outlet_nextSlide);

    sports_outlet_container
      .querySelector(".prev-btn")
      ?.addEventListener("click", sports_outlet_prevSlide);
  });
});

//  Single Product Link
document.addEventListener("click", function (e) {
  const sports_outlet_btn = e.target.closest(".bnr-product-btn a");
  if (!sports_outlet_btn) return;

  const sports_outlet_product = sports_outlet_btn.closest(".product, .wc-block-product, li");
  if (!sports_outlet_product) return;

  const sports_outlet_link = sports_outlet_product.querySelector("a[href]");
  if (!sports_outlet_link) return;

  e.preventDefault();
  window.location.href = sports_outlet_link.href;
}, true);