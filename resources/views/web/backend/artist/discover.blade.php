@extends('web.backend.app')


@section('backend_content')
<div class="dashboard-contents--wrapper">
    <!-- dashboard common top starts -->
    <div class="dashboard-header">
        <!-- title -->
        <div class="dashboard-header--left">
            <h3 class="dashboard-page--title">Listener Dashboard</h3>
        </div>


        @include('web.backend.partials.header')


    </div>
    <!-- dashboard common top starts -->

    <!-- dashboard pages area starts -->
    <div class="dynamic--pages--area">
        <!-- common discover page artist and listener start -->
        <div class="bi-common--discover--page--wrapper">
          <div class="bi-common--discover--page--content">
            <h1 class="bi-dashboard--common--page--heading">
              <span>Select Artists:</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                <path
                  d="M15.7989 28.717C8.77878 28.7093 3.08974 23.0203 3.08203 16.0001V15.7458C3.22183 8.75726 8.97579 3.19161 15.9651 3.28435C22.9544 3.37708 28.5587 9.09343 28.513 16.0832C28.4674 23.073 22.7889 28.7156 15.7989 28.717ZM13.2556 10.2775V21.7227L20.8857 16.0001L13.2556 10.2775Z"
                  fill="#024CDA" />
              </svg>
            </h1>
            <div class="bi-common--discover--page--artist--section">
              <h1 class="bi-total--artist--selected--count">
                0/4 Artists Selected Today
              </h1>
              <div class="bi-all--artists--and--selected--artists--section">
                <div class="bi-common--discover--page--selected--artist--lists"></div>

                <div class="bi-common--discover--page--artist--lists">
                  <!-- item 1 -->
                  <div class="bi-common--discover--page--artist--card" style="
                        background-image: url('../assets/images/artist-1.png');
                      " data-artist-id="1">
                    <!-- <div class="bi-common--discover--page--artist--card--img">
                      <img src="../assets/images/artist-1.png" alt="" srcset="">
                    </div> -->
                    <div class="bi-common--discover--page--artist--card--infos">
                      <h1 class="bi-common--discover--page--artist--name">
                        Gotye Aussie
                      </h1>
                      <p class="bi-common--discover--page--artist--song--genre">
                        Rock
                      </p>
                    </div>
                  </div>
                  <!-- item 2 -->
                  <div class="bi-common--discover--page--artist--card" style="
                        background-image: url(../assets/images/artist-2.png);
                      " data-artist-id="2">
                    <!-- <div class="bi-common--discover--page--artist--card--img">
                      <img src="../assets/images/artist-2.png" alt="" srcset="">
                    </div> -->
                    <div class="bi-common--discover--page--artist--card--infos">
                      <h1 class="bi-common--discover--page--artist--name">
                        Ad Sharen
                      </h1>
                      <p class="bi-common--discover--page--artist--song--genre">
                        Country
                      </p>
                    </div>
                  </div>
                  <!-- item 3 type unavailable -->
                  <div class="bi-common--discover--page--artist--card" style="
                        background-image: url(../assets/images/artist-3.png);
                      " data-artist-id="3">
                    <!-- <div class="bi-common--discover--page--artist--card--img">
                      <img src="../assets/images/artist-3.png" alt="" srcset="">
                    </div> -->
                    <div class="bi-common--discover--page--artist--card--infos">
                      <h1 class="bi-common--discover--page--artist--name">
                        Adele
                      </h1>
                      <p class="bi-common--discover--page--artist--song--genre">
                        Pop
                      </p>
                    </div>
                    <div class="bi-common--discover--page--artist--card--unavailable">
                      Unavailable
                    </div>
                  </div>
                  <!-- item 4 -->
                  <div class="bi-common--discover--page--artist--card" style="
                        background-image: url(../assets/images/artist-4.png);
                      " data-artist-id="4">
                    <!-- <div class="bi-common--discover--page--artist--card--img">
                      <img src="../assets/images/artist-4.png" alt="" srcset="">
                    </div> -->
                    <div class="bi-common--discover--page--artist--card--infos">
                      <h1 class="bi-common--discover--page--artist--name">
                        Beyoncé
                      </h1>
                      <p class="bi-common--discover--page--artist--song--genre">
                        Classical music
                      </p>
                    </div>
                  </div>
                  <!-- item 5 -->
                  <div class="bi-common--discover--page--artist--card" style="
                        background-image: url(../assets/images/artist-5.png);
                      " data-artist-id="5">
                    <!-- <div class="bi-common--discover--page--artist--card--img">
                      <img src="../assets/images/artist-5.png" alt="" srcset="">
                    </div> -->
                    <div class="bi-common--discover--page--artist--card--infos">
                      <h1 class="bi-common--discover--page--artist--name">
                        Florence 
                      </h1>
                      <p class="bi-common--discover--page--artist--song--genre">
                        Funk
                      </p>
                    </div>

                    <span class="bi-common--discover--page--artist--card--icon" data-bs-toggle="modal"
                      data-bs-target="#bi-listen--music--modal">
                      <i class="fa-solid fa-circle-exclamation text-white"></i>
                    </span>
                  </div>
                  <!-- item 6 type unavailable -->
                  <div class="bi-common--discover--page--artist--card" style="
                        background-image: url(../assets/images/artist-6.png);
                      " data-artist-id="6">
                    <!-- <div class="bi-common--discover--page--artist--card--img">
                      <img src="../assets/images/artist-6.png" alt="" srcset="">
                    </div> -->
                    <div class="bi-common--discover--page--artist--card--infos">
                      <h1 class="bi-common--discover--page--artist--name">
                        Lady Gaga
                      </h1>
                      <p class="bi-common--discover--page--artist--song--genre">
                        Hip hop
                      </p>
                    </div>
                    <div class="bi-common--discover--page--artist--card--unavailable">
                      Unavailable
                    </div>
                  </div>
                  <!-- item 7 type unavailable -->
                  <div class="bi-common--discover--page--artist--card" style="
                        background-image: url(../assets/images/artist-7.png);
                      " data-artist-id="7">
                    <!-- <div class="bi-common--discover--page--artist--card--img">
                      <img src="../assets/images/artist-7.png" alt="" srcset="">
                    </div> -->
                    <div class="bi-common--discover--page--artist--card--infos">
                      <h1 class="bi-common--discover--page--artist--name">
                        Bruce Springsteen
                      </h1>
                      <p class="bi-common--discover--page--artist--song--genre">
                        Metal
                      </p>
                    </div>
                    <div class="bi-common--discover--page--artist--card--unavailable">
                      Unavailable
                    </div>
                  </div>
                  <!-- item 8 type unavailable -->
                  <div class="bi-common--discover--page--artist--card" style="
                        background-image: url(../assets/images/artist-8.png);
                      " data-artist-id="8">
                    <!-- <div class="bi-common--discover--page--artist--card--img">
                      <img src="../assets/images/artist-8.png" alt="" srcset="">
                    </div> -->
                    <div class="bi-common--discover--page--artist--card--infos">
                      <h1 class="bi-common--discover--page--artist--name">
                        Coldplay Kings
                      </h1>
                      <p class="bi-common--discover--page--artist--song--genre">
                        Jazz fusion
                      </p>
                    </div>
                    <div class="bi-common--discover--page--artist--card--unavailable">
                      Unavailable
                    </div>
                  </div>
                  <!-- item 9 type unavailable -->
                  <div class="bi-common--discover--page--artist--card" style="
                        background-image: url(../assets/images/artist-9.png);
                      " data-artist-id="9">
                    <!-- <div class="bi-common--discover--page--artist--card--img">
                      <img src="../assets/images/artist-9.png" alt="" srcset="">
                    </div> -->
                    <div class="bi-common--discover--page--artist--card--infos">
                      <h1 class="bi-common--discover--page--artist--name">
                        Azealia Banks
                      </h1>
                      <p class="bi-common--discover--page--artist--song--genre">
                        Jazz
                      </p>
                    </div>
                    <div class="bi-common--discover--page--artist--card--unavailable">
                      Unavailable
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- common discover page artist and listener end -->
      </div>

    <!-- dashboard pages area starts -->
</div>
@endsection
