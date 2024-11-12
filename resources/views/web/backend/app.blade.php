<!DOCTYPE html>
<html lang="en">

<head>
    @include('web.backend.partials.style')
</head>

<body>
    <!-- heading part start -->
    <header></header>
    <!-- heading part end -->

    <!-- play music modal starts -->
    <div class="modal fade bi-listen--music--modal" id="bi-listen--music--modal" tabindex="-1"
        aria-labelledby="bi-listen--music--modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="bi-artist--music--info--modal"
                        style="
                background-image: url('../assets/images/music-player-modal.png');
              ">
                        <div class="bi-artist--music--info--modal--content">
                            <span class="bi-mmodal--close" data-bs-dismiss="modal"><i
                                    class="fa-solid fa-xmark fa-xl text-white"></i></span>
                            <h1 class="bi-music--modal--title">Florence </h1>
                            <div class="bi-music--modal--des">
                                The country bombshell kicked off her career as a
                                wide-eyed American Idol winner back in 2005, but over the
                                years, she's evolved into a versatile, self-assured crossover
                                star capable of belting out soaring ballads (''So Small'') and
                                done-me-wrong barn burners (how many cars have been gleefully
                                keyed to ''Before He Cheats''?) with equal, rafters-reaching
                                verve.
                            </div>
                            <!-- song details -->
                            <div class="bi-music--modal--song--details">
                                <p class="bi-music--modal--song--details--song--type">
                                    FEATURED SONG
                                </p>
                                <h1 class="bi-music--modal--title">One of the girl</h1>
                                <h3 class="bi-music--modal--song--details--song--sub">
                                    The Weekn & JENNIE & Lily Rose Depp
                                </h3>
                            </div>
                            <!-- song player -->
                            <div class="bi-music--modal--music--player--section">
                                <div class="bi-play--button--wrapper">
                                    <div class="circle pulse"></div>
                                    <div class="circle">
                                        <i class="fa-solid fa-play fa-2xl" style="color: #024cda"></i>
                                    </div>
                                </div>
                                <div class="bi-modal--music--player--section">
                                    <div class="bi-audio--timeline">
                                        <span class="bi--audio--time" id="current-time">0:00</span>
                                        <progress id="song-progress" value="0" max="100"></progress>
                                        <audio id="audio" src="../assets/audios/VFwmKL5OL-Q128.mp3" hidden></audio>
                                        <span class="bi--audio--time" id="duration">3:27</span>
                                    </div>

                                    <div class="bi-audio--buttons">
                                        <button class="bi-audio--controls" id="shuffle">
                                            <i class="fa-solid fa-shuffle"></i>
                                        </button>
                                        <button class="bi-audio--controls" id="prev">
                                            <i class="fa-solid fa-backward"></i>
                                        </button>
                                        <button class="bi-audio--controls bi-audio--controls--play--and--pause"
                                            id="play-pause">
                                            <i class="fa-solid fa-play" id="play-icon"></i>
                                        </button>
                                        <button class="bi-audio--controls" id="next">
                                            <i class="fa-solid fa-forward"></i>
                                        </button>
                                        <button class="bi-audio--controls" id="repeat">
                                            <i class="fa-solid fa-repeat"></i>
                                        </button>
                                    </div>
                                </div>





                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- play music modal ends -->

    <!-- notification screen starts -->
    <div class="dashboard-notification--screen">
        <!-- header -->
        <div class="notification-header">
            <span>Notification</span>
            <span class="total--notifications">5</span>
        </div>
        <ul class="notification--lists scrollable-section">
            <li class="notification-list">
                <div class="notification--user--img">
                    <img src="../assets/images/artist-profile-img.png" alt="" srcset="" />
                    <span class="active-dot"></span>
                </div>
                <div class="notification--info">
                    <p>earnings updates</p>
                    <p class="notification-time">Last Wednesday at 9:42 AM</p>
                </div>
            </li>
            <li class="notification-list">
                <div class="notification--user--img">
                    <img src="../assets/images/artist-profile-img.png" alt="" srcset="" />
                    <span class="active-dot"></span>
                </div>
                <div class="notification--info">
                    <p>new streams</p>
                    <p class="notification-time">Last Wednesday at 9:42 AM</p>
                </div>
            </li>
            <li class="notification-list">
                <div class="notification--user--img">
                    <img src="../assets/images/artist-profile-img.png" alt="" srcset="" />
                    <span class="active-dot"></span>
                </div>
                <div class="notification--info">
                    <p>
                        If the family hasn’t logged in to update their selections, a
                        reminder email is sent: “Your gift card preferences will renew.
                        Log in to make changes if needed.
                    </p>
                    <p class="notification-time">Last Wednesday at 9:42 AM</p>
                </div>
            </li>
            <li class="notification-list">
                <div class="notification--user--img">
                    <img src="../assets/images/artist-profile-img.png" alt="" srcset="" />
                    <span class="active-dot"></span>
                </div>
                <div class="notification--info">
                    <p>
                        If the family hasn’t logged in to update their selections, a
                        reminder email is sent: “Your gift card preferences will renew.
                        Log in to make changes if needed.
                    </p>
                    <p class="notification-time">Last Wednesday at 9:42 AM</p>
                </div>
            </li>
            <li class="notification-list">
                <div class="notification--user--img">
                    <img src="../assets/images/artist-profile-img.png" alt="" srcset="" />
                    <span class="active-dot"></span>
                </div>
                <div class="notification--info">
                    <p>
                        If the family hasn’t logged in to update their selections, a
                        reminder email is sent: “Your gift card preferences will renew.
                        Log in to make changes if needed.
                    </p>
                    <p class="notification-time">Last Wednesday at 9:42 AM</p>
                </div>
            </li>
            <li class="notification-list">
                <div class="notification--user--img">
                    <img src="../assets/images/artist-profile-img.png" alt="" srcset="" />
                    <span class="active-dot"></span>
                </div>
                <div class="notification--info">
                    <p>earnings updates</p>
                    <p class="notification-time">Last Wednesday at 9:42 AM</p>
                </div>
            </li>
            <li class="notification-list">
                <div class="notification--user--img">
                    <img src="../assets/images/artist-profile-img.png" alt="" srcset="" />
                    <span class="active-dot"></span>
                </div>
                <div class="notification--info">
                    <p>new streams</p>
                    <p class="notification-time">Last Wednesday at 9:42 AM</p>
                </div>
            </li>
            <li class="notification-list">
                <div class="notification--user--img">
                    <img src="../assets/images/artist-profile-img.png" alt="" srcset="" />
                    <span class="active-dot"></span>
                </div>
                <div class="notification--info">
                    <p>
                        If the family hasn’t logged in to update their selections, a
                        reminder email is sent: “Your gift card preferences will renew.
                        Log in to make changes if needed.
                    </p>
                    <p class="notification-time">Last Wednesday at 9:42 AM</p>
                </div>
            </li>
            <li class="notification-list">
                <div class="notification--user--img">
                    <img src="../assets/images/artist-profile-img.png" alt="" srcset="" />
                    <span class="active-dot"></span>
                </div>
                <div class="notification--info">
                    <p>
                        If the family hasn’t logged in to update their selections, a
                        reminder email is sent: “Your gift card preferences will renew.
                        Log in to make changes if needed.
                    </p>
                    <p class="notification-time">Last Wednesday at 9:42 AM</p>
                </div>
            </li>
            <li class="notification-list">
                <div class="notification--user--img">
                    <img src="../assets/images/artist-profile-img.png" alt="" srcset="" />
                    <span class="active-dot"></span>
                </div>
                <div class="notification--info">
                    <p>
                        If the family hasn’t logged in to update their selections, a
                        reminder email is sent: “Your gift card preferences will renew.
                        Log in to make changes if needed.
                    </p>
                    <p class="notification-time">Last Wednesday at 9:42 AM</p>
                </div>
            </li>
        </ul>
    </div>
    <!-- notification screen ends -->

    <!-- main part start -->
    <main>
        <div class="dashboard-page--wrapper">
            <div class="dashboard-container">


                <!-- sidebar area starts -->
                @include('web.backend.partials.sidebar')
                <!-- sidebar area ends -->



                <!-- main display starts -->
                @yield('backend_content')
                <!-- main display ends -->
            </div>
        </div>
    </main>
    <!-- main part end -->

    <!-- footer part start -->

    <!-- footer  -->
    <footer></footer>
    <!-- Footer  -->

    <!-- footer part end -->

    <!-- <script src="assets/js/plugins.js"></script> -->

    @include('web.backend.partials.scripts')


</body>

</html>
