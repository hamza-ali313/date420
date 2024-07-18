document.addEventListener("DOMContentLoaded", function () {
  const hotlistButton = document.querySelector(".hotlist-toggle");
  hotlistButton.addEventListener("click", function () {
    this.classList.toggle("active");
  });
}),
  document.addEventListener("DOMContentLoaded", function () {
    // active start --------

    // active end --------

    // item dashboard slider start js
    // $(".item_dash_slides").slick({
    //   dots: false,
    //   arrows: true,
    //   speed: 200,
    //   slidesToShow: 5,
    //   slidesToScroll: 1,
    //   autoplay: false,
    //   responsive: [
    //     {
    //       breakpoint: 1800,
    //       settings: {
    //         dots: false,
    //         arrows: true,
    //         speed: 200,
    //         slidesToShow: 5,
    //         slidesToScroll: 1,
    //         autoplay: false,
    //       },
    //     },
    //     {
    //       breakpoint: 1099,
    //       settings: {
    //         slidesToShow: 3,
    //         autoplay: false,
    //         slidesToScroll: 1,
    //         infinite: true,
    //         dots: true,
    //         arrows: true,
    //       },
    //     },
    //     {
    //       breakpoint: 830,
    //       settings: {
    //         slidesToShow: 2,
    //         autoplay: false,
    //         slidesToScroll: 1,
    //       },
    //     },
    //     {
    //       breakpoint: 580,
    //       settings: {
    //         slidesToShow: 1,
    //         autoplay: false,
    //         slidesToScroll: 1,
    //       },
    //     },
    //   ],
    // });
    // item dashboard slider end js

    // dropdown js start
    $(document).ready(function () {
      $(".select-dropdown__button").on("click", function () {
        $(".select-dropdown__list").toggleClass("active");
      });
      $(".select-dropdown__list-item").on("click", function () {
        var itemValue = $(this).data("value");
        console.log(itemValue);
        $(".select-dropdown__button span")
          .text($(this).text())
          .parent()
          .attr("data-value", itemValue);
        $(".select-dropdown__list").toggleClass("active");
      });
    });
    // dropdown js end

    // select option custom start
    var customSelects = document.querySelectorAll(".custom-select");

    customSelects.forEach(function (select) {
      var classes = select.getAttribute("class");
      var template = '<div class="' + classes + '">';
      var placeholder =
        select.getAttribute("placeholder") || "Select an option";
      template +=
        '<span class="custom-select-trigger">' + placeholder + "</span>";
      template += '<div class="custom-options">';
      var options = select.querySelectorAll("option");
      options.forEach(function (option) {
        template +=
          '<span class="custom-option ' +
          option.getAttribute("class") +
          '" data-value="' +
          option.getAttribute("value") +
          '">' +
          option.innerHTML +
          "</span>";
      });
      template += "</div></div>";

      select.insertAdjacentHTML("afterend", template);
      select.style.display = "none";
    });

    document.addEventListener("click", function (event) {
      var clickedElement = event.target;
      var customSelectTrigger = clickedElement.closest(
        ".custom-select-trigger"
      );
      var customOption = clickedElement.closest(".custom-option");

      if (!customSelectTrigger && !customOption) {
        var openedSelects = document.querySelectorAll(".custom-select.opened");
        openedSelects.forEach(function (select) {
          select.classList.remove("opened");
        });
      }

      if (customSelectTrigger) {
        var select = customSelectTrigger.parentNode;
        select.classList.toggle("opened");
        event.stopPropagation();
      }

      if (customOption) {
        var option = $(customOption);
        var select = option.closest(".custom-select");
        var selectTrigger = select.find(".custom-select-trigger");
        var selectValue = select.find("select");
        selectTrigger.text(option.text());
        selectValue.val(option.data("value"));
        select.removeClass("opened");
      }
    });

    // $('.custom-select.sources').on('click', function () {
    //   var thiss = $(this);
    //   if (!thiss.hasClass('opened')) {
    //     thiss.addClass('opened');
    //   } else thiss.removeClass('opened')
    // });

    // $(document).on('click', function (event) {
    //   if (!$(event.target).closest('.custom-select.sources').length) {
    //     $('.custom-select.sources').removeClass('opened');
    //   }
    // });

    // select option custom end

    // banner slide
    $(".banner_slide").slick({
      dots: true,
      infinite: true,
      speed: 500,
      autoplay: true,
      fade: true,
      cssEase: "linear",
      arrows: false,
    });

    // file upload work
    var formFile = document.querySelector(".formFile");
    var imageList = document.querySelector(".imageList");
    if (formFile) {
      formFile.addEventListener("change", function (event) {
        var fileList = event.target.files;
        // Clear existing images
        imageList.innerHTML = "";

        // Iterate through the selected files
        for (var i = 0; i < fileList.length; i++) {
          var file = fileList[i];
          var reader = new FileReader();

          // Closure to capture the file information
          reader.onload = (function (theFile) {
            return function (e) {
              // Render thumbnail
              var listItem = document.createElement("li");
              var img = document.createElement("img");
              img.className = "img-fluid";
              img.src = e.target.result;
              img.alt = theFile.name;
              listItem.appendChild(img);
              imageList.appendChild(listItem);
            };
          })(file);

          // Read in the image file as a data URL
          reader.readAsDataURL(file);
        }
      });
    }

    // Define a function to handle the file input change event
    var formFile2 = document.querySelector("#formFile2");
    var imageContainer = document.querySelector("#imageContainer");
    var defaultImageURL = "images/profile_1.png"; // Replace with the URL of your default image
    if (formFile2) {
      formFile2.addEventListener("change", function (event) {
        var fileList = event.target.files;

        // Clear existing image
        imageContainer.innerHTML = "";

        // Render thumbnail or default image
        var renderImage = function (src, alt) {
          var img = document.createElement("img");
          img.className = "img-fluid";
          img.src = src;
          img.alt = alt;
          imageContainer.appendChild(img);
        };

        // Check if a file is selected
        if (fileList.length > 0) {
          var file = fileList[0];
          var reader = new FileReader();

          // Closure to capture the file information
          reader.onload = function (e) {
            renderImage(e.target.result, file.name);
          };

          // Read in the image file as a data URL
          reader.readAsDataURL(file);
        } else {
          // If no file is selected, display default image
          renderImage(defaultImageURL, "Default Image");
        }
      });
    }

    // Define a function to handle the file input change event
  });
document.addEventListener("DOMContentLoaded", function () {
  var formFile3 = document.querySelector("#formFile3");
  var imageContainer3 = document.querySelector("#imageContainer3");
  var defaultImageURL3 = "images/profile_1.png"; // Replace with the URL of your default image
  var defaultImage = document.querySelector("#uploadedImage3");

  if (defaultImage) {
    // Initially hide the default image
    defaultImage.style.display = "none";
  }

  if (formFile3) {
    formFile3.addEventListener("change", function (event) {
      var fileList3 = event.target.files;

      // Clear existing image
      imageContainer3.innerHTML = "";

      // Render thumbnail or default image
      var renderImage = function (src, alt) {
        var img = document.createElement("img");
        img.className = "img-fluid";
        img.src = src;
        img.alt = alt;
        imageContainer3.appendChild(img);
      };

      // Check if a file is selected
      if (fileList3.length > 0) {
        var file = fileList3[0];
        var reader = new FileReader();

        // Closure to capture the file information
        reader.onload = function (e) {
          renderImage(e.target.result, file.name);
        };

        // Read in the image file as a data URL
        reader.readAsDataURL(file);

        // Hide the default image if a file is selected
        if (defaultImage) {
          defaultImage.style.display = "none";
        }
      } else {
        // If no file is selected, display default image
        if (defaultImage) {
          defaultImage.style.display = "block";
        }
        renderImage(defaultImageURL3, "Default Image");
      }
    });
  }
});

var formFile4 = document.querySelector("#formFile4");
var imageContainer4 = document.querySelector("#imageContainer4");
var defaultImageURL4 = "images/profile_1.png"; // Replace with the URL of your default image
if (formFile4) {
  formFile4.addEventListener("change", function (event) {
    var fileList = event.target.files;

    // Clear existing image
    imageContainer4.innerHTML = "";

    // Render thumbnail or default image
    var renderImage = function (src, alt) {
      var img = document.createElement("img");
      img.className = "img-fluid";
      img.src = src;
      img.alt = alt;
      imageContainer4.appendChild(img);
    };

    // Check if a file is selected
    if (fileList.length > 0) {
      var file = fileList[0];
      var reader = new FileReader();

      // Closure to capture the file information
      reader.onload = function (e) {
        renderImage(e.target.result, file.name);
      };

      // Read in the image file as a data URL
      reader.readAsDataURL(file);
    } else {
      // If no file is selected, display default image
      renderImage(defaultImageURL4, "Default Image");
    }
  });
}

$(".ids-carousel").owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  dots: false,
  navText: [
    "<i class='fa-solid fa-chevron-left'></i>",
    "<i class='fa-solid fa-chevron-right'></i>",
  ],
  autoplay: true,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1,
    },
    480: {
      items: 2,
    },
    600: {
      items: 3,
    },
    1000: {
      items: 5,
    },
  },
});

$(".group-carousel").owlCarousel({
  // loop: true,
  margin: 10,
  nav: false,
  dots: true,
  navText: [
    "<i class='fa-solid fa-chevron-left'></i>",
    "<i class='fa-solid fa-chevron-right'></i>",
  ],
  autoplay: true,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 2,
    },
    1000: {
      items: 3,
    },
    1200: {
      items: 4,
    },
  },
});
document.addEventListener("DOMContentLoaded", function () {
  const tabMenuItems = document.querySelectorAll(".cl_item_inner");
  const tabMenuContainers = document.querySelectorAll(".chat_left");
  const tabContainers = document.querySelectorAll(".chat-right");
  const backButtons = document.querySelectorAll(".back-button6");

  tabMenuItems.forEach(function (tabMenuItem) {
    tabMenuItem.addEventListener("click", function () {
      tabContainers.forEach(function (tabContainer) {
        tabContainer.classList.remove("hidden1");
        tabContainer.classList.add("visible1");
      });
      tabMenuContainers.forEach(function (tabMenuContainer) {
        tabMenuContainer.classList.add("hidden1");
      });
    });
  });

  backButtons.forEach(function (backButton) {
    backButton.addEventListener("click", function () {
      tabContainers.forEach(function (tabContainer) {
        tabContainer.classList.remove("visible1");
        tabContainer.classList.add("hidden1");
      });
      tabMenuContainers.forEach(function (tabMenuContainer) {
        tabMenuContainer.classList.remove("hidden1");
      });
    });
  });
});
document.addEventListener("DOMContentLoaded", function () {
  // Get the elements
  const uploadDiv = document.querySelector(".ae_upload_image");
  const fileInput = document.getElementById("imageUpload");
  const uploadedImage = document.getElementById("uploadedImage");

  // When the user clicks on the upload div, trigger the file input click
  uploadDiv.addEventListener("click", function () {
    fileInput.click();
  });

  // When the user selects a file
  fileInput.addEventListener("change", function (event) {
    const file = event.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = function (e) {
        uploadedImage.src = e.target.result;
        uploadedImage.style.display = "block";
      };
      reader.readAsDataURL(file);
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const hotlistButtons = document.querySelectorAll(".m_pg");

  hotlistButtons.forEach((button) => {
    button.addEventListener("click", function () {
      // Remove the "active" class from all buttons
      hotlistButtons.forEach((btn) => btn.classList.remove("active"));
      // Add the "active" class to the clicked button
      this.classList.add("active");
    });
  });
});

$("#group_search").on("shown.bs.modal", function () {
  setTimeout(function () {
    $("#group_search").modal("hide");
  }, 1500);
});


