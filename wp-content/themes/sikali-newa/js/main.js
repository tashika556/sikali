

function openNav() {
  document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
// book now end 
// $(document).ready(function(){
//   $("#hide").click(function(){
//     $("#realtorModal").hide(10);
//   });
// });
// video hide end 
$(document).ready(function () {
  function reposition() {
    var modal = $(this),
      dialog = modal.find(".modal-dialog");

    modal.css("display", "block");

    dialog.css(
      "margin-top",
      Math.max(0, ($(window).height() - dialog.height()) / 2)
    );
  }

  $(".modal").on("show.bs.modal", reposition);

  $(window).on("resize", function () {
    $(".modal:visible").each(reposition);
  });

  $("#realtorModal").modal("show");

});
// youtube video end 
$(document).ready(function () {
  $("#myModal").modal("show");
});
// notice end
$(".slider")
  .slick({
    autoplay: true,
    speed: 800,
    lazyLoad: "progressive",
    arrows: false,
    dots: false,
  })
  .slickAnimation();

// slider home end

$(".room_slider").slick({
  dots: false,
  arrows: false,
  autoplay: true,
  infinite: true,

  speed: 400,
  slidesToShow: 2,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1199,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    }
    
  ],
});
// room slider end


$(".sidebar_slider").slick({
  dots: false,
  arrows: false,
  autoplay: true,
  infinite: true,

  speed: 400,
  slidesToShow: 1,
  slidesToScroll: 1,

});
// room slider end

$(".room_detail-slider").slick({
  dots: true,
  arrows: false,
  autoplay: true,
  infinite: true,

  speed: 900,
  slidesToShow: 1,
  slidesToScroll: 1,
});
// room detail end
$(".activities_slider").slick({
  dots: false,
  arrows: false,
  autoplay: false,
  infinite: true,

  speed: 900,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1199,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 556,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});
$(".about_services-slider").slick({
  dots: false,
  arrows: false,
  autoplay: true,
  infinite: true,

  speed: 900,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1500,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 556,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
  ],
});
// about services
// $(".activities_detail").slick({
//   dots: false,
//   arrows: false,
//   autoplay: true,
//   infinite: true,

//   speed: 900,
//   slidesToShow: 1,
//   slidesToScroll: 1,
//   responsive: [
//     {
//       breakpoint: 1199,
//       settings: {
//         slidesToShow: 3,
//         slidesToScroll: 1,
//       },
//     },
//     {
//       breakpoint: 767,
//       settings: {
//         slidesToShow: 2,
//         slidesToScroll: 1,
//       },
//     },
//     {
//       breakpoint: 556,
//       settings: {
//         slidesToShow: 1,
//         slidesToScroll: 1,
//       },
//     },
//   ],
// });
// room slider end
$(".booking_wrap").slick({
  dots: false,
  arrows: false,
  autoplay: true,
  infinite: true,

  speed: 900,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1199,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 556,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});
// room slider end

$(document).ready(function () {
  //jquery for toggle sub menus
  $(".sub-btn").click(function () {
    $(this).next(".sub-menu").slideToggle();
    $(this).find(".dropdown").toggleClass("rotate");
  });

  //jquery for expand and collapse the sidebar
  $(".menu-btn").click(function () {
    $(".side-bar").addClass("active");
    $(".menu-btn").css("visibility", "hidden");
  });

  $(".close-btn").click(function () {
    $(".side-bar").removeClass("active");
    $(".menu-btn").css("visibility", "visible");
  });
});
// menu mobile end

var btn = $("#button");

$(window).scroll(function () {
  if ($(window).scrollTop() > 300) {
    btn.addClass("show");
  } else {
    btn.removeClass("show");
  }
});

btn.on("click", function (e) {
  e.preventDefault();
  $("html, body").animate({ scrollTop: 0 }, "300");
});

// slide up end

$(document).ready(function () {
  window.addEventListener("scroll", function () {
    var header = document.querySelector(".header");
    header.classList.toggle("sticky-bar", window.scrollY > 50);
  });
});
// sticky end

$(".testimonial_slider").slick({
  dots: false,
  arrow: true,
  infinite: true,
  autoplay: true,
  speed: 300,
  slidesToShow: 3,
  responsive: [
    {
      breakpoint: 1199,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 556,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});
$(".slider_home").slick({
  dots: false,
  arrow: true,
  infinite: true,
  autoplay: true,
  fade: true,
  speed: 800,
  slidesToShow: 1,
});
// slider home end

// read more start
class readMore {
  constructor() {
    this.content = ".readmore__content";
    this.buttonToggle = ".readmore__toggle";
  }

  bootstrap() {
    this.setNodes();
    this.init();
    this.addEventListeners();
  }

  setNodes() {
    this.nodes = {
      contentToggle: document.querySelector(this.content),
    };

    this.buttonToggle = this.nodes.contentToggle.parentElement.querySelector(
      this.buttonToggle
    );
  }

  init() {
    const { contentToggle } = this.nodes;

    this.stateContent = contentToggle.innerHTML;

    contentToggle.innerHTML = `${this.stateContent.substring(0, 400)}...`;
  }

  addEventListeners() {
    this.buttonToggle.addEventListener("click", this.onClick.bind(this));
  }

  onClick(event) {
    const targetEvent = event.currentTarget;
    const { contentToggle } = this.nodes;

    if (targetEvent.getAttribute("aria-checked") === "true") {
      targetEvent.setAttribute("aria-checked", "false");
      contentToggle.innerHTML = this.stateContent;
      this.buttonToggle.innerHTML = "Show Less";
    } else {
      targetEvent.setAttribute("aria-checked", "true");
      contentToggle.innerHTML = `${this.stateContent.substring(0, 400)}...`;
      this.buttonToggle.innerHTML = "Show more";
    }
  }
}

const initReadMore = new readMore();
initReadMore.bootstrap();
//about read more end
