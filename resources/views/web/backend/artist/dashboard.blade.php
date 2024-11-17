@extends('web.backend.app')


@section('backend_content')
    <div class="dashboard-contents--wrapper">
        <!-- dashboard common top starts -->
        <div class="dashboard-header">
            <!-- title -->
            <div class="dashboard-header--left">
                <h3 class="dashboard-page--title">Artist Dashboard</h3>
            </div>


            @include('web.backend.partials.header')
        </div>
        <!-- dashboard common top starts -->

        <!-- dashboard pages area starts -->

        <div class="dynamic--pages--area">
            <!-- artist dashboard home  wrapper starts -->
            <div class="bi-artist--dashboard--home--page--wrapper">
                <!-- first home page -->
                <section class="bi-artist--dashboard--insights--overview--section">
                    <!-- header  -->
                    <div class="bi-artist--dashboard--insights--overview--section--header">
                        <h2 class="bi-dashboard--common--page--heading">Insight Overview</h2>



                        <a class="bi-import--songs--btn" href="{{ route('artist.dashboard.import_song') }}"><i
                                class="fa-solid fa-plus"></i>
                        </a>

                    </div>
                    <!-- overview counters -->
                    <div class="bi-insights--overview--counters">
                        <!-- published song -->
                        <div class="bi-common--overview--counter--box published--songs">
                            <div class="bi-common--overview--counter--box--icon">
                                <img src="../assets/images/music.svg" alt="">
                            </div>

                            <div class="bi-common--overview--counter--box--text">
                                <div class="bi-common--overview--counter--box--text--heading">
                                    <span>Published Songs</span>
                                </div>
                                <div class="bi-common--overview--counter--box--value">
                                    <span class="bi--counter--value">125</span>
                                </div>
                            </div>

                        </div>
                        <!-- discoveries -->
                        <div class="bi-common--overview--counter--box total--discoveries">
                            <div class="bi-common--overview--counter--box--icon">
                                <img src="../assets/images/music-search.svg" alt="">
                            </div>
                            <div class="bi-common--overview--counter--box--text">
                                <div class="bi-common--overview--counter--box--text--heading">
                                    <span>Discoveries</span>
                                </div>
                                <div class="bi-common--overview--counter--box--value">
                                    <span class="bi--counter--value">125</span>
                                </div>
                            </div>

                        </div>
                        <!-- listeners -->
                        <div class="bi-common--overview--counter--box total--listeners">
                            <div class="bi-common--overview--counter--box--icon">
                                <img src="../assets/images/music.svg" alt="">
                            </div>
                            <div class="bi-common--overview--counter--box--text">
                                <div class="bi-common--overview--counter--box--text--heading">
                                    <span>Listeners %</span>
                                    <a class="view-details--btn"
                                        href="artist-dashboard-home-listener-overview-map.html">View
                                        Details</a>
                                </div>
                                <div class="bi-common--overview--counter--box--value">
                                    <span class="bi--counter--value">8</span><span>%</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- investment lists accordion wrapper -->
                    <div class="bi-investments--lists--wrapper">

                        <div class="accordion bi-artist--investment--accordion" id="bi-artist--investment--accordion">
                            <!-- first song invest -->
                            <div class="accordion-item">

                                <div class="bi-artist--investment--accordion--header" data-bs-toggle="collapse"
                                    data-bs-target="#investOne" aria-expanded="true" aria-controls="investOne">
                                    <!-- image and name -->
                                    <div class="bi-artist--investment--accordion--header--info">

                                        <div class="bi-artist--invested--img">
                                            <img src="../assets/images/investment.png" alt="">
                                        </div>
                                        <div class="bi-artist--invested--song--text">
                                            <span class="bi-invested--song--name">Holiday</span>
                                            <span class="bi-invested--album--name">Green Day</span>
                                        </div>



                                    </div>
                                    <!-- time -->
                                    <span class="bi-invested--time">3 hr ago</span>
                                    <!-- invest graph arrow -->
                                    <div class="bi-artist--investment--header--graph">
                                        <!-- if green -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="132" height="44"
                                            viewBox="0 0 132 44" fill="none">
                                            <line x1="0.25" y1="-0.25" x2="129.75" y2="-0.25"
                                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 131 25)" stroke="white"
                                                stroke-width="0.5" stroke-linecap="round" stroke-dasharray="4 4" />
                                            <path
                                                d="M1 10.697L4.04687 17.1616L6.07812 15.1414L9.63281 18.3737V25.2424L14.2031 27.6667L20.2969 41L22.3281 31.7071L27.4062 27.6667L28.9297 22.8182L34.5156 18.3737L35.9528 13.9167L38.5781 19.5859L42.6406 21.202L44.6719 26.4545L47.7187 18.3737L51.2734 22.8182L54.3203 19.5859L61.0943 34.75L63.4609 29.2828L68.5391 27.6667L73.3585 14.3333L80.1038 18.9167L83.783 18.0833L87.4623 22.25L90.5283 18.5L94.2075 27.6667L98.5 18.9167L103.406 17.25L106.472 9.33333L110.151 15.5833L113.217 12.25L117.289 22.0101L119.32 17.1616L123.383 13.9293L125.414 6.25252L128.969 4.63636L131 1"
                                                stroke="#22C55E" stroke-width="1.5" stroke-linecap="round" />
                                        </svg>
                                        <!-- if green  -->
                                        <i class="fa-solid fa-arrow-up green-text"></i>

                                    </div>

                                </div>

                                <div id="investOne" class="accordion-collapse collapse "
                                    data-bs-parent="#bi-artist--investment--accordion">
                                    <div class="accordion-body">

                                        <select name="" id="">
                                            <option value="weakly">Weekly</option>
                                            <option value="weakly">Monthly</option>
                                            <option value="weakly">Yearly</option>
                                        </select>

                                        <div class="bi-artist--investment--graph--wrapper">
                                            <div class="artist__investment__graph"></div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <!-- second song invest -->
                            <div class="accordion-item">

                                <div class="bi-artist--investment--accordion--header" data-bs-toggle="collapse"
                                    data-bs-target="#investTwo" aria-expanded="true" aria-controls="investTwo">
                                    <!-- image and name -->
                                    <div class="bi-artist--investment--accordion--header--info">

                                        <div class="bi-artist--invested--img">
                                            <img src="../assets/images/investment.png" alt="">
                                        </div>
                                        <div class="bi-artist--invested--song--text">
                                            <span class="bi-invested--song--name">Holiday</span>
                                            <span class="bi-invested--album--name">Green Day</span>
                                        </div>



                                    </div>
                                    <!-- time -->
                                    <span class="bi-invested--time">3 hr ago</span>
                                    <!-- invest graph arrow -->
                                    <div class="bi-artist--investment--header--graph">
                                        <!-- if red -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="132" height="44"
                                            viewBox="0 0 132 44" fill="none">
                                            <line x1="1.25" y1="24.8154" x2="130.75" y2="24.8154"
                                                stroke="white" stroke-width="0.5" stroke-linecap="round"
                                                stroke-dasharray="4 4" />
                                            <path
                                                d="M131 10.7624L127.953 17.227L125.922 15.2068L122.367 18.4392V25.3079L117.797 27.7321L111.703 41.0654L109.672 31.7725L104.594 27.7321L103.07 22.8836L97.4844 18.4392L96.0472 13.9821L93.4219 19.6513L89.3594 21.2675L87.3281 26.52L84.2813 18.4392L80.7266 22.8836L77.6797 19.6513L70.9057 34.8154L68.5391 29.3483L63.4609 27.7321L58.6415 14.3988L51.8962 18.9821L48.217 18.1488L44.5377 22.3154L41.4717 18.5654L37.7925 27.7321L33.5 18.9821L28.5943 17.3154L25.5283 9.39876L21.8491 15.6488L18.783 12.3154L14.7109 22.0755L12.6797 17.227L8.61719 13.9947L6.58594 6.31795L3.03126 4.70179L1.00001 1.06543"
                                                stroke="#FF3B30" stroke-width="1.5" stroke-linecap="round" />
                                        </svg>
                                        <!-- if red  -->
                                        <i class="fa-solid fa-arrow-down red-text"></i>

                                    </div>

                                </div>

                                <div id="investTwo" class="accordion-collapse collapse "
                                    data-bs-parent="#bi-artist--investment--accordion">
                                    <div class="accordion-body">

                                        <select name="" id="">
                                            <option value="weakly">Weekly</option>
                                            <option value="weakly">Monthly</option>
                                            <option value="weakly">Yearly</option>
                                        </select>

                                        <div class="bi-artist--investment--graph--wrapper">
                                            <div class="artist__investment__graph"></div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <!-- third song invest -->
                            <div class="accordion-item">

                                <div class="bi-artist--investment--accordion--header" data-bs-toggle="collapse"
                                    data-bs-target="#investThree" aria-expanded="true" aria-controls="investThree">
                                    <!-- image and name -->
                                    <div class="bi-artist--investment--accordion--header--info">

                                        <div class="bi-artist--invested--img">
                                            <img src="../assets/images/investment.png" alt="">
                                        </div>
                                        <div class="bi-artist--invested--song--text">
                                            <span class="bi-invested--song--name">Holiday</span>
                                            <span class="bi-invested--album--name">Green Day</span>
                                        </div>



                                    </div>
                                    <!-- time -->
                                    <span class="bi-invested--time">3 hr ago</span>
                                    <!-- invest graph arrow -->
                                    <div class="bi-artist--investment--header--graph">
                                        <!-- if green -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="132" height="44"
                                            viewBox="0 0 132 44" fill="none">
                                            <line x1="0.25" y1="-0.25" x2="129.75" y2="-0.25"
                                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 131 25)" stroke="white"
                                                stroke-width="0.5" stroke-linecap="round" stroke-dasharray="4 4" />
                                            <path
                                                d="M1 10.697L4.04687 17.1616L6.07812 15.1414L9.63281 18.3737V25.2424L14.2031 27.6667L20.2969 41L22.3281 31.7071L27.4062 27.6667L28.9297 22.8182L34.5156 18.3737L35.9528 13.9167L38.5781 19.5859L42.6406 21.202L44.6719 26.4545L47.7187 18.3737L51.2734 22.8182L54.3203 19.5859L61.0943 34.75L63.4609 29.2828L68.5391 27.6667L73.3585 14.3333L80.1038 18.9167L83.783 18.0833L87.4623 22.25L90.5283 18.5L94.2075 27.6667L98.5 18.9167L103.406 17.25L106.472 9.33333L110.151 15.5833L113.217 12.25L117.289 22.0101L119.32 17.1616L123.383 13.9293L125.414 6.25252L128.969 4.63636L131 1"
                                                stroke="#22C55E" stroke-width="1.5" stroke-linecap="round" />
                                        </svg>
                                        <!-- if green  -->
                                        <i class="fa-solid fa-arrow-up green-text"></i>

                                    </div>

                                </div>

                                <div id="investThree" class="accordion-collapse collapse "
                                    data-bs-parent="#bi-artist--investment--accordion">
                                    <div class="accordion-body">

                                        <select name="" id="">
                                            <option value="weakly">Weekly</option>
                                            <option value="weakly">Monthly</option>
                                            <option value="weakly">Yearly</option>
                                        </select>

                                        <div class="bi-artist--investment--graph--wrapper">
                                            <div class="artist__investment__graph"></div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <!-- fourth song invest -->
                            <div class="accordion-item">

                                <div class="bi-artist--investment--accordion--header" data-bs-toggle="collapse"
                                    data-bs-target="#investFour" aria-expanded="true" aria-controls="investFour">
                                    <!-- image and name -->
                                    <div class="bi-artist--investment--accordion--header--info">

                                        <div class="bi-artist--invested--img">
                                            <img src="../assets/images/investment.png" alt="">
                                        </div>
                                        <div class="bi-artist--invested--song--text">
                                            <span class="bi-invested--song--name">Holiday</span>
                                            <span class="bi-invested--album--name">Green Day</span>
                                        </div>



                                    </div>
                                    <!-- time -->
                                    <span class="bi-invested--time">3 hr ago</span>
                                    <!-- invest graph arrow -->
                                    <div class="bi-artist--investment--header--graph">
                                        <!-- if red -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="132" height="44"
                                            viewBox="0 0 132 44" fill="none">
                                            <line x1="1.25" y1="24.8154" x2="130.75" y2="24.8154"
                                                stroke="white" stroke-width="0.5" stroke-linecap="round"
                                                stroke-dasharray="4 4" />
                                            <path
                                                d="M131 10.7624L127.953 17.227L125.922 15.2068L122.367 18.4392V25.3079L117.797 27.7321L111.703 41.0654L109.672 31.7725L104.594 27.7321L103.07 22.8836L97.4844 18.4392L96.0472 13.9821L93.4219 19.6513L89.3594 21.2675L87.3281 26.52L84.2813 18.4392L80.7266 22.8836L77.6797 19.6513L70.9057 34.8154L68.5391 29.3483L63.4609 27.7321L58.6415 14.3988L51.8962 18.9821L48.217 18.1488L44.5377 22.3154L41.4717 18.5654L37.7925 27.7321L33.5 18.9821L28.5943 17.3154L25.5283 9.39876L21.8491 15.6488L18.783 12.3154L14.7109 22.0755L12.6797 17.227L8.61719 13.9947L6.58594 6.31795L3.03126 4.70179L1.00001 1.06543"
                                                stroke="#FF3B30" stroke-width="1.5" stroke-linecap="round" />
                                        </svg>
                                        <!-- if red  -->
                                        <i class="fa-solid fa-arrow-down red-text"></i>

                                    </div>

                                </div>

                                <div id="investFour" class="accordion-collapse collapse "
                                    data-bs-parent="#bi-artist--investment--accordion">
                                    <div class="accordion-body">

                                        <select name="" id="">
                                            <option value="weakly">Weekly</option>
                                            <option value="weakly">Monthly</option>
                                            <option value="weakly">Yearly</option>
                                        </select>

                                        <div class="bi-artist--investment--graph--wrapper">
                                            <div class="artist__investment__graph"></div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>


                </section>
            </div>
            <!-- artist dashboard home  wrapper ends -->
        </div>

        <!-- dashboard pages area starts -->
    </div>
@endsection
