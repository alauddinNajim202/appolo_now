$(document).ready(function () {
  // nice select

  $(".bi-products--details--common--input--wrapper select").niceSelect();

  $(".bi-billing--form--common--fieldset select").niceSelect();

  // initializing AOS
  AOS.init({
    once: true,
    disable: "mobile",
    duration: 1000,
  });

  //  open notification window
  const NotificationWindow = (btn, wrapper) => {
    const notificationBtn = document.querySelector(btn);

    const notificationScreen = document.querySelector(wrapper);
    if (notificationBtn && notificationScreen) {
      notificationBtn.addEventListener("click", (event) => {
        event.stopPropagation();
        notificationScreen.classList.toggle("active");
      });

      document.addEventListener("click", (event) => {
        if (
          !notificationScreen.contains(event.target) &&
          !notificationScreen.contains(event.target)
        ) {
          notificationScreen.classList.remove("active");
        }
      });
    }
  };
  NotificationWindow(
    ".dashboard-notification--icon",
    ".dashboard-notification--screen"
  );

  // Password field visibility
  const togglePasswordVisibility = (btns) => {
    const passwordToggleBtns = document.querySelectorAll(btns);

    if (passwordToggleBtns) {
      passwordToggleBtns.forEach((passwordToggleBtn) => {
        passwordToggleBtn.addEventListener("click", (e) => {
          e.preventDefault();

          // Toggle the password visibility
          const passwordField =
            passwordToggleBtn.parentElement.querySelector("input");

          if (passwordField.type === "password") {
            // Show the password and change the icon to "eye-off"
            passwordField.type = "text";
            passwordToggleBtn.innerHTML = `<i class="fa-regular fa-eye"></i>`;
          } else {
            // Hide the password and change the icon back to "eye"
            passwordField.type = "password";
            passwordToggleBtn.innerHTML = `
                  <i class="fa-regular fa-eye-slash"></i>
                  `;
          }
        });
      });
    }
  };

  // SwiperJs  For signup and signin page
  togglePasswordVisibility(".show-password--btn");

  const authPagesSwiper = () => {
    var swiper = new Swiper(".auth-page--swiper", {
      pagination: {
        el: ".swiper-pagination",
        clickable: true, // Makes pagination clickable
        // dynamicBullets: true,
      },
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      loop: true, // Loops the slides
    });
  };
  authPagesSwiper();
  // Swiper Js product details page thumbnails
  const productDetailsPageSwiper = () => {
    const swiperThumbs = new Swiper(".bi-product--details--thumbs--swiper", {
      loop: true,
      spaceBetween: 10,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesProgress: true,
      navigation: {
        nextEl: ".custom--next",
        prevEl: ".custom--prev",
      },
    });

    const swiperMain = new Swiper(".bi-product--details--preview--swiper", {
      loop: true,
      spaceBetween: 10,
      thumbs: {
        swiper: swiperThumbs,
      },
    });
  };

  productDetailsPageSwiper();

  function initializeOTPInput(selector) {
    const inputFields = document.querySelectorAll(selector);

    inputFields.forEach((field) => {
      field.addEventListener("input", handleInput);
      field.addEventListener("keydown", handleBackspace);
    });

    function handleInput(e) {
      let inputField = e.target;
      if (inputField.value.length >= 1) {
        let nextField = inputField.nextElementSibling;
        if (nextField) {
          nextField.focus();
        }
      }
    }

    function handleBackspace(e) {
      if (e.key === "Backspace" && e.target.value === "") {
        let prevField = e.target.previousElementSibling;
        if (prevField) {
          prevField.focus();
        }
      }
    }
  }

  // Initialize the OTP input fields
  initializeOTPInput("input.bi-common--otp--field");

  // selected artists today out 0/4 max four can be selected
  const selectArtist = () => {
    const selectedArtistArea = document.querySelector(
      ".bi-common--discover--page--selected--artist--lists"
    );
    const allArtistsListArea = document.querySelector(
      ".bi-common--discover--page--artist--lists"
    );
    const countDisplay = document.querySelector(
      ".bi-total--artist--selected--count"
    );

    if (allArtistsListArea) {
      const artists = document.querySelectorAll(
        ".bi-common--discover--page--artist--card"
      );

      artists.forEach((item) => {
        item.addEventListener("click", () => {
          // Check if the maximum limit (4) is reached
          if (selectedArtistArea.children.length < 4) {
            // Check if the artist is already selected
            const artistId = item.dataset.artistId;
            const alreadySelected = Array.from(
              selectedArtistArea.children
            ).some(
              (selectedItem) => selectedItem.dataset.artistId === artistId
            );

            if (!alreadySelected) {
              const selectedClone = item.cloneNode(true); // Clone the artist card
              selectedClone.dataset.artistId = artistId; // Set the data attribute on the cloned item
              selectedArtistArea.classList.add("items-added");
              selectedArtistArea.appendChild(selectedClone); // Append the clone

              // Update the artist count display
              updateArtistCount();
            } else {
              console.log("Artist already selected");
            }
          } else {
            console.log("Artist already selected");
          }
        });
      });
    }

    const updateArtistCount = () => {
      const totalSelected = selectedArtistArea.children.length;
      countDisplay.style.display = "block"; // Show the count display
      countDisplay.textContent = `${totalSelected}/4 Artists Selected Today`;
    };
  };

  selectArtist();

  // product quantity increment and decrement
  const quantityCounter = () => {
    const quantityBox = document.querySelectorAll(".bi-common-quantity--box");

    if (quantityBox.length > 0) {
      const decBtns = document.querySelectorAll(".quantity--btn.dec");
      const incBtns = document.querySelectorAll(".quantity--btn.inc");

      // Decrement button functionality
      decBtns.forEach((decBtn, index) => {
        decBtn.addEventListener("click", () => {
          const input = decBtn.parentNode.querySelector("input");
          let currentValue = parseInt(input.value, 10);

          if (currentValue > 1) {
            input.value = currentValue - 1;
          }
        });
      });

      // Increment button functionality
      incBtns.forEach((incBtn, index) => {
        incBtn.addEventListener("click", () => {
          const input = incBtn.parentNode.querySelector("input");
          let currentValue = parseInt(input.value, 10);

          input.value = currentValue + 1;
        });
      });
    }
  };

  quantityCounter();

  // paly music button functionality in modal in discover page in listener and artist

  const playButtonClick = () => {
    const wrapper = document.querySelector(
      ".bi-music--modal--music--player--section"
    );
    const playButton = document.querySelector(".bi-play--button--wrapper");
    const musicSection = document.querySelector(
      ".bi-modal--music--player--section"
    );

    if (wrapper) {
      playButton.addEventListener("click", () => {
        playButton.classList.add("removed");
        musicSection.classList.add("opened");
      });

      // Reset button and music section visibility when the modal closes
      const modal = document.getElementById("bi-listen--music--modal");
      modal.addEventListener("hidden.bs.modal", () => {
        playButton.classList.remove("removed");
        musicSection.classList.remove("opened");
      });
    }
  };

  // Initialize the functionality
  playButtonClick();

  const customMusicPlayer = () => {
    const audio = document.getElementById("audio");
    const playPauseButton = document.getElementById("play-pause");
    const playIcon = document.getElementById("play-icon");
    const progress = document.getElementById("song-progress");
    const currentTimeDisplay = document.getElementById("current-time");
    const durationDisplay = document.getElementById("duration");

    if (
      audio &&
      playPauseButton &&
      playIcon &&
      progress &&
      currentTimeDisplay &&
      durationDisplay
    ) {
      playPauseButton.addEventListener("click", () => {
        if (audio.paused) {
          audio.play();
          playIcon.classList.remove("fa-play");
          playIcon.classList.add("fa-pause");
        } else {
          audio.pause();
          playIcon.classList.remove("fa-pause");
          playIcon.classList.add("fa-play");
        }
      });
    }
  };

  // customMusicPlayer();

  // 






  // ============================= ::Bishal Code Ends here:: ==========================

  // select
  $(" .sm--featured-artist-and-metrics-select-container select").niceSelect();

  // counter
  if(document.querySelector('.counter-up')) {
    $(".counter-up").counterUp({
      delay: 10,
      time: 3000,
    });
  }
 

  // engage song summary
  //  appex chart for listener home

  const appexChartListener = () => {
    const wrapper = document.querySelector("#engage-song-summary");
    if (wrapper) {
      var options = {
        series: [
          {
            name: "Songs Name",
            data: [
              4, 3, 10, 9, 29, 19, 22, 9, 12, 7, 19, 5, 13, 9, 17, 2, 7, 5,
            ],
          },
        ],
        chart: {
          height: 350,
          type: "line",
        },

        stroke: {
          width: 4,
        },
        xaxis: {
          type: "datetime",
          categories: [
            "1/11/2024",
            "2/11/2024",
            "3/11/2024",
            "4/11/2024",
            "5/11/2024",
            "6/11/2024",
            "7/11/2024",
            "8/11/2024",
            "9/11/2024",
            "10/11/2024",
            "11/11/2024",
            "12/11/2024",
            "1/11/2025",
            "2/11/2025",
            "3/11/2025",
            "4/11/2025",
            "5/11/2025",
            "6/11/2025",
          ],
          tickAmount: 10,
          labels: {
            formatter: function (value, timestamp, opts) {
              return opts.dateFormatter(new Date(timestamp), "dd MMM yyyy");
            },
          },
        },

        fill: {
          type: "",
          gradient: {
            shade: "dark",

            shadeIntensity: 1,
            type: "horizontal",
            opacityFrom: 1,
            opacityTo: 1,
            stops: [0, 100, 100, 100],
          },
        },
      };

      var chart = new ApexCharts(
        document.querySelector("#engage-song-summary"),
        options
      );
      chart.render();
    }
  };
  appexChartListener();

  // audio player

  const audio = document.getElementById("sm--audio");
  const playPauseIcon = document.getElementById("sm--audio-play-pause-icon");
  const smTotalDuration = document.getElementById("sm--audio-total-duration");
  const smCurrentDuration = document.getElementById(
    "sm--audio-current-duration"
  );
  const smSongImage = document.getElementById("sm--audio-song-image");
  const smSongName = document.getElementById("sm--audio-song-name");
  const smSongArtist = document.getElementById("sm--audio-artist");
  const smSongNext = document.getElementById("sm--audio-player-next-btn");
  const progress = document.getElementById("sm--audio-track-range");

  function formatTime(seconds) {
    const minutes = Math.floor(seconds / 60);
    const remainingSeconds = Math.floor(seconds % 60);
    return `${minutes}:${remainingSeconds < 10 ? "0" : ""}${remainingSeconds}`;
  }

  const trackIndex = 0;

  const musicList = [
    {
      img: "../images/sm_song-image.png",
      name: "Shape of You",
      artist: "Ed Sheeran",
      music:
        "../assets/audios/Ed Sheeran - Shape of You (Official Music Video).mp3",
    },
    {
      img: "../images/artist-1.png",
      name: "Faded",
      artist: "Alan Walker",
      music: "../assets/audios/Alan Walker - Faded.mp3p3",
    },
    {
      img: "../images/artist-2.png",
      name: "Baby Baby",
      artist: "Ed Sheeran",
      music: "../assets/audios/Justin Bieber - Baby ft. Ludacris.mp3",
    },
    {
      img: "../images/artist-9.png",
      name: "Diamonds in the Sky",
      artist: "Rihana's",
      music: "../assets/audios/Rihanna - Diamonds.mp3",
    },
  ];

  if (progress && audio && playPauseIcon) {
    audio.onloadedmetadata = function () {
      progress.max = audio.duration;
      progress.value = audio.currentTime;

      if (audio.play()) {
        setInterval(() => {
          progress.value = audio.currentTime;
          smTotalDuration.innerText = formatTime(audio.duration);
          smCurrentDuration.innerText = formatTime(audio.currentTime);
        }, 500);
      }
    };


    progress.onchange = function () {
      audio.play();
      audio.currentTime = progress.value;
      playPauseIcon.classList.add("fa-circle-pause");
      playPauseIcon.classList.remove("fa-circle-play");
    };

    playPauseIcon.addEventListener("click", () => {
      if (audio.paused) {
        audio.play();
        playPauseIcon.classList.add("fa-circle-pause");
        playPauseIcon.classList.remove("fa-circle-play");
      } else {
        audio.pause();
        playPauseIcon.classList.remove("fa-circle-pause");
        playPauseIcon.classList.add("fa-circle-play");
      }
    });
  }





  // smSongNext.addEventListener('click', () => {
  //   audio.src = musicList[trackIndex].music
  //   trackIndex ++

  // })

  //  lenis for smoothing scroll
  function initializeLenis() {
    // Initialize Lenis
    const lenis = new Lenis({
      normalizeWheel: true,
      smoothWheel: true,
    });

    // Listen for the scroll event and log the event data
    lenis.on("scroll", (e) => {});

    // Use requestAnimationFrame to continuously update the scroll
    function raf(time) {
      lenis.raf(time);
      requestAnimationFrame(raf);
    }

    requestAnimationFrame(raf);

    // Select all scrollable sections and stop propagation of scroll events
    const scrollableSections = document.querySelectorAll(".scrollable-section");
    scrollableSections.forEach((section) => {
      section.addEventListener("wheel", (e) => {
        e.stopPropagation(); // Prevent Lenis from handling scroll events in this section
      });
    });
  }
  // Call the function to initialize
  // initializeLenis();
});
