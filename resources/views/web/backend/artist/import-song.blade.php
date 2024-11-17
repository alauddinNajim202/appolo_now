@extends('web.backend.app')


@push('styles')
    <style>
        #noSongsMessage {
            font-size: 1rem;
            text-align: center;
            margin: 1rem 0;
        }
    </style>
@endpush

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
                <!-- second home page song import section -->
                <section class="bi-artist--dashboard--import--song--section">
                    <!-- header  -->
                    <h1 class="bi-dashboard--common--page--heading">
                        <a href="{{ route('artist.dashboard') }}" class="me-1 text-black"><i
                                class="fa-solid fa-arrow-left"></i></a>
                        <span>Import Songs</span>
                    </h1>
                    <!-- import song container -->
                    <div class="bi-artist--dashboard--import--songs--container">
                        <!-- apple songs side -->
                        <div class="bi-apple--song--import--side--wrapper">
                            <!-- buttons wrapper -->
                            <div class="bi-songs--import--common--btn--wrapper">
                                <!-- if not connected -->
                                <!-- <a href="#" class="bi-import--songs--common--btn">
                                                                                      <i class="fa-brands fa-apple fa-lg"></i>  <span>Apple</span>
                                                                                    </a> -->
                                <!-- if connected -->
                                <a href="#" class="bi-import--songs--common--btn white-text bg-blue"><i
                                        class="fa-brands fa-apple fa-lg"></i><span>Connected</span></a>
                                <a href="#" class="bi-import--songs--common--btn">Import</a>
                            </div>


                            <!-- songs wrapper -->
                            <div class="bi-songs--import--common--song--wrapper apple">
                                <!-- breadcrumb -->
                                <div class="bi-songs--import--common--song--wrapper--breadcrumb">
                                    <span>Apple Album</span>
                                </div>
                                <!-- album lists -->
                                <div class="bi-artist--import--song--album--lists--wrapper">
                                    <div class="accordion bi-common--album--lists--accordion"
                                        id="apple__album__lists__accordion">
                                        <!-- album one -->
                                        <div class="accordion-item">
                                            <!-- header -->
                                            <div class="bi-common--album--item--header collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#apple__album__one" aria-expanded="false"
                                                aria-controls="apple__album__one">
                                                <div class="bi-album--cover--photo">
                                                    <img src="{{ asset('assets/images/investment.png') }}" alt="">
                                                </div>
                                                <div class="bi-album--info">
                                                    <h2 class="bi-album--name">21 Guns</h2>
                                                    <h3 class="bi-album--sub--name">Green Day</h3>
                                                </div>

                                            </div>
                                            <!-- album songs lists -->
                                            <div id="apple__album__one" class="accordion-collapse collapse"
                                                data-bs-parent="#apple__album__lists__accordion">
                                                <div class="accordion-body">
                                                    <div class="bi-common--album--songs--lists--wrapper">
                                                        <!-- song list -->
                                                        <label for="song_1" class="bi-album--song--list--wrapper">
                                                            <div class="bi-album--song--list--info--side">
                                                                <div class="bi-album--cover--photo">
                                                                    <img src="{{ asset('assets/images/investment.png') }}"
                                                                        alt="">
                                                                </div>
                                                                <div class="bi-album--info">
                                                                    <h2 class="bi-album--name">21 Guns</h2>
                                                                    <h3 class="bi-album--sub--name">Green Day</h3>
                                                                </div>
                                                            </div>
                                                            <input class="bi-album--common--checkbox" type="checkbox"
                                                                name="song" id="song_1">
                                                        </label>
                                                        <!-- song list -->
                                                        <label for="song_2" class="bi-album--song--list--wrapper">
                                                            <div class="bi-album--song--list--info--side">
                                                                <div class="bi-album--cover--photo">
                                                                    <img src="{{ asset('assets/images/song_1.png') }}"
                                                                        alt="">
                                                                </div>
                                                                <div class="bi-album--info">
                                                                    <h2 class="bi-album--name">See the Light</h2>
                                                                    <h3 class="bi-album--sub--name">Green Day</h3>
                                                                </div>
                                                            </div>
                                                            <input class="bi-album--common--checkbox" type="checkbox"
                                                                name="song" id="song_2">
                                                        </label>
                                                        <!-- song list -->
                                                        <label for="song_3" class="bi-album--song--list--wrapper">
                                                            <div class="bi-album--song--list--info--side">
                                                                <div class="bi-album--cover--photo">
                                                                    <img src="{{ asset('assets/images/song_2.png') }}"
                                                                        alt="">
                                                                </div>
                                                                <div class="bi-album--info">
                                                                    <h2 class="bi-album--name">Holiday</h2>
                                                                    <h3 class="bi-album--sub--name">Green Day</h3>
                                                                </div>
                                                            </div>
                                                            <input class="bi-album--common--checkbox" type="checkbox"
                                                                name="song" id="song_3">
                                                        </label>



                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        <!-- album two -->
                                        <div class="accordion-item">
                                            <!-- header -->
                                            <div class="bi-common--album--item--header collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#apple__album__two" aria-expanded="false"
                                                aria-controls="apple__album__two">
                                                <div class="bi-album--cover--photo">
                                                    <img src="{{ asset('assets/images/slide-image-1.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="bi-album--info">
                                                    <h2 class="bi-album--name">Holiday</h2>
                                                    <h3 class="bi-album--sub--name">Green Day</h3>
                                                </div>

                                            </div>
                                            <!-- album songs lists -->
                                            <div id="apple__album__two" class="accordion-collapse collapse"
                                                data-bs-parent="#apple__album__lists__accordion">
                                                <div class="accordion-body">
                                                    <div class="bi-common--album--songs--lists--wrapper">
                                                        <!-- song list -->
                                                        <label for="song_4" class="bi-album--song--list--wrapper">
                                                            <div class="bi-album--song--list--info--side">
                                                                <div class="bi-album--cover--photo">
                                                                    <img src="{{ asset('assets/images/investment.png') }}"
                                                                        alt="">
                                                                </div>
                                                                <div class="bi-album--info">
                                                                    <h2 class="bi-album--name">21 Guns</h2>
                                                                    <h3 class="bi-album--sub--name">Green Day</h3>
                                                                </div>
                                                            </div>
                                                            <input class="bi-album--common--checkbox" type="checkbox"
                                                                name="song" id="song_4">
                                                        </label>
                                                        <!-- song list -->
                                                        <label for="song_5" class="bi-album--song--list--wrapper">
                                                            <div class="bi-album--song--list--info--side">
                                                                <div class="bi-album--cover--photo">
                                                                    <img src="{{ asset('assets/images/song_1.png') }}"
                                                                        alt="">
                                                                </div>
                                                                <div class="bi-album--info">
                                                                    <h2 class="bi-album--name">See the Light</h2>
                                                                    <h3 class="bi-album--sub--name">Green Day</h3>
                                                                </div>
                                                            </div>
                                                            <input class="bi-album--common--checkbox" type="checkbox"
                                                                name="song" id="song_5">
                                                        </label>
                                                        <!-- song list -->
                                                        <label for="song_6" class="bi-album--song--list--wrapper">
                                                            <div class="bi-album--song--list--info--side">
                                                                <div class="bi-album--cover--photo">
                                                                    <img src="{{ asset('assets/images/song_1.png') }}"
                                                                        alt="">
                                                                </div>
                                                                <div class="bi-album--info">
                                                                    <h2 class="bi-album--name">Holiday</h2>
                                                                    <h3 class="bi-album--sub--name">Green Day</h3>
                                                                </div>
                                                            </div>
                                                            <input class="bi-album--common--checkbox" type="checkbox"
                                                                name="song" id="song_6">
                                                        </label>



                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        <!-- album three -->
                                        <div class="accordion-item">
                                            <!-- header -->
                                            <div class="bi-common--album--item--header collapsed"
                                                data-bs-toggle="collapse" data-bs-target="#apple__album__three"
                                                aria-expanded="false" aria-controls="apple__album__three">
                                                <div class="bi-album--cover--photo">
                                                    <img src="{{ asset('assets/images/slide-image-2.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="bi-album--info">
                                                    <h2 class="bi-album--name">Boulevard of Broken Dreams</h2>
                                                    <h3 class="bi-album--sub--name">Green Day</h3>
                                                </div>
                                            </div>
                                            <!-- album songs lists -->
                                            <div id="apple__album__three" class="accordion-collapse collapse"
                                                data-bs-parent="#apple__album__lists__accordion">
                                                <div class="accordion-body">
                                                    <div class="bi-common--album--songs--lists--wrapper">
                                                        <label for="song_7" class="bi-album--song--list--wrapper">
                                                            <div class="bi-album--song--list--info--side">
                                                                <div class="bi-album--cover--photo">
                                                                    <img src="{{ asset('assets/images/investment.png') }}"
                                                                        alt="">
                                                                </div>
                                                                <div class="bi-album--info">
                                                                    <h2 class="bi-album--name">Boulevard of Broken Dreams
                                                                    </h2>
                                                                    <h3 class="bi-album--sub--name">Green Day</h3>
                                                                </div>
                                                            </div>
                                                            <input class="bi-album--common--checkbox" type="checkbox"
                                                                name="song" id="song_7">
                                                        </label>
                                                        <label for="song_8" class="bi-album--song--list--wrapper">
                                                            <div class="bi-album--song--list--info--side">
                                                                <div class="bi-album--cover--photo">
                                                                    <img src="{{ asset('assets/images/song_1.png') }}"
                                                                        alt="">
                                                                </div>
                                                                <div class="bi-album--info">
                                                                    <h2 class="bi-album--name">Are We the Waiting</h2>
                                                                    <h3 class="bi-album--sub--name">Green Day</h3>
                                                                </div>
                                                            </div>
                                                            <input class="bi-album--common--checkbox" type="checkbox"
                                                                name="song" id="song_8">
                                                        </label>
                                                        <label for="song_9" class="bi-album--song--list--wrapper">
                                                            <div class="bi-album--song--list--info--side">
                                                                <div class="bi-album--cover--photo">
                                                                    <img src="{{ asset('assets/images/song_1.png') }}"
                                                                        alt="">
                                                                </div>
                                                                <div class="bi-album--info">
                                                                    <h2 class="bi-album--name">Give Me Novacaine</h2>
                                                                    <h3 class="bi-album--sub--name">Green Day</h3>
                                                                </div>
                                                            </div>
                                                            <input class="bi-album--common--checkbox" type="checkbox"
                                                                name="song" id="song_9">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- album four -->
                                        <div class="accordion-item">
                                            <!-- header -->
                                            <div class="bi-common--album--item--header collapsed"
                                                data-bs-toggle="collapse" data-bs-target="#apple__album__four"
                                                aria-expanded="false" aria-controls="apple__album__four">
                                                <div class="bi-album--cover--photo">
                                                    <img src="{{ asset('assets/images/slide-image-3.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="bi-album--info">
                                                    <h2 class="bi-album--name">Wake Me Up When September Ends</h2>
                                                    <h3 class="bi-album--sub--name">Green Day</h3>
                                                </div>
                                            </div>
                                            <!-- album songs lists -->
                                            <div id="apple__album__four" class="accordion-collapse collapse"
                                                data-bs-parent="#apple__album__lists__accordion">
                                                <div class="accordion-body">
                                                    <div class="bi-common--album--songs--lists--wrapper">
                                                        <label for="song_10" class="bi-album--song--list--wrapper">
                                                            <div class="bi-album--song--list--info--side">
                                                                <div class="bi-album--cover--photo">
                                                                    <img src="{{ asset('assets/images/investment.png') }}"
                                                                        alt="">
                                                                </div>
                                                                <div class="bi-album--info">
                                                                    <h2 class="bi-album--name">Wake Me Up When September
                                                                        Ends</h2>
                                                                    <h3 class="bi-album--sub--name">Green Day</h3>
                                                                </div>
                                                            </div>
                                                            <input class="bi-album--common--checkbox" type="checkbox"
                                                                name="song" id="song_10">
                                                        </label>
                                                        <label for="song_11" class="bi-album--song--list--wrapper">
                                                            <div class="bi-album--song--list--info--side">
                                                                <div class="bi-album--cover--photo">
                                                                    <img src="{{ asset('assets/images/song_1.png') }}"
                                                                        alt="">
                                                                </div>
                                                                <div class="bi-album--info">
                                                                    <h2 class="bi-album--name">American Idiot</h2>
                                                                    <h3 class="bi-album--sub--name">Green Day</h3>
                                                                </div>
                                                            </div>
                                                            <input class="bi-album--common--checkbox" type="checkbox"
                                                                name="song" id="song_11">
                                                        </label>
                                                        <label for="song_12" class="bi-album--song--list--wrapper">
                                                            <div class="bi-album--song--list--info--side">
                                                                <div class="bi-album--cover--photo">
                                                                    <img src="{{ asset('assets/images/song_1.png') }}"
                                                                        alt="">
                                                                </div>
                                                                <div class="bi-album--info">
                                                                    <h2 class="bi-album--name">She</h2>
                                                                    <h3 class="bi-album--sub--name">Green Day</h3>
                                                                </div>
                                                            </div>
                                                            <input class="bi-album--common--checkbox" type="checkbox"
                                                                name="song" id="song_12">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- album five -->
                                        <div class="accordion-item">
                                            <!-- header -->
                                            <div class="bi-common--album--item--header collapsed"
                                                data-bs-toggle="collapse" data-bs-target="#apple__album__five"
                                                aria-expanded="false" aria-controls="apple__album__five">
                                                <div class="bi-album--cover--photo">
                                                    <img src="{{ asset('assets/images/slide-image-4.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="bi-album--info">
                                                    <h2 class="bi-album--name">21st Century Breakdown</h2>
                                                    <h3 class="bi-album--sub--name">Green Day</h3>
                                                </div>
                                            </div>
                                            <!-- album songs lists -->
                                            <div id="apple__album__five" class="accordion-collapse collapse"
                                                data-bs-parent="#apple__album__lists__accordion">
                                                <div class="accordion-body">
                                                    <div class="bi-common--album--songs--lists--wrapper">
                                                        <label for="song_13" class="bi-album--song--list--wrapper">
                                                            <div class="bi-album--song--list--info--side">
                                                                <div class="bi-album--cover--photo">
                                                                    <img src="{{ asset('assets/images/investment.png') }}"
                                                                        alt="">
                                                                </div>
                                                                <div class="bi-album--info">
                                                                    <h2 class="bi-album--name">21st Century Breakdown</h2>
                                                                    <h3 class="bi-album--sub--name">Green Day</h3>
                                                                </div>
                                                            </div>
                                                            <input class="bi-album--common--checkbox" type="checkbox"
                                                                name="song" id="song_13">
                                                        </label>
                                                        <label for="song_14" class="bi-album--song--list--wrapper">
                                                            <div class="bi-album--song--list--info--side">
                                                                <div class="bi-album--cover--photo">
                                                                    <img src="{{ asset('assets/images/song_1.png') }}"
                                                                        alt="">
                                                                </div>
                                                                <div class="bi-album--info">
                                                                    <h2 class="bi-album--name">Know Your Enemy</h2>
                                                                    <h3 class="bi-album--sub--name">Green Day</h3>
                                                                </div>
                                                            </div>
                                                            <input class="bi-album--common--checkbox" type="checkbox"
                                                                name="song" id="song_14">
                                                        </label>
                                                        <label for="song_15" class="bi-album--song--list--wrapper">
                                                            <div class="bi-album--song--list--info--side">
                                                                <div class="bi-album--cover--photo">
                                                                    <img src="{{ asset('assets/images/song_1.png') }}"
                                                                        alt="">
                                                                </div>
                                                                <div class="bi-album--info">
                                                                    <h2 class="bi-album--name">Last of the American Girls
                                                                    </h2>
                                                                    <h3 class="bi-album--sub--name">Green Day</h3>
                                                                </div>
                                                            </div>
                                                            <input class="bi-album--common--checkbox" type="checkbox"
                                                                name="song" id="song_15">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                        <!-- spotify song side  -->
                        <div class="bi-spotify--song--import--side--wrapper">
                            <!-- buttons wrapper -->
                            <div class="bi-songs--import--common--btn--wrapper">
                                <!-- if not connected -->
                                <!-- <a href="#" class="bi-import--songs--common--btn">
                                                                                      <i class="fa-brands fa-spotify fa-lg green-text"></i> <span>Spotify</span>
                                                                                    </a> -->
                                <!-- if connected -->
                                <a href="#" class="bi-import--songs--common--btn white-text bg-blue"><i
                                        class="fa-brands fa-spotify fa-lg"></i></i><span>Connected</span></a>
                                <a href="#" class="bi-import--songs--common--btn">Import</a>




                            </div>
                            <!-- songs wrapper -->
                            <div class="bi-songs--import--common--song--wrapper spotify">
                                <!-- breadcrumb -->
                                <div class="bi-songs--import--common--song--wrapper--breadcrumb">
                                    <span>Spotify Album</span>
                                </div>


                                <!-- album lists -->

                                <div class="bi-artist--import--song--album--lists--wrapper">
                                    <div class="accordion bi-common--album--lists--accordion"
                                        id="spotify__album__lists__accordion">
                                        <!-- Check if albums exist -->
                                        @if (!empty($albums))
                                            @foreach ($albums as $index => $album)
                                                <div class="accordion-item">
                                                    <!-- Album Header -->
                                                    <div class="bi-common--album--item--header collapsed"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#spotify_album_{{ $index }}"
                                                        aria-expanded="false"
                                                        aria-controls="spotify_album_{{ $index }}">
                                                        <div class="bi-album--cover--photo">
                                                            <img src="{{ $album['images'][0]['url'] ?? asset('assets/images/default_album.png') }}"
                                                                alt="Album Cover">
                                                        </div>
                                                        <div class="bi-album--info">
                                                            <h2 class="bi-album--name">{{ $album['name'] }}</h2>
                                                            <h3 class="bi-album--sub--name">{{ $album['release_date'] }}
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <!-- Album Songs -->
                                                    <div id="spotify_album_{{ $index }}"
                                                        class="accordion-collapse collapse"
                                                        data-bs-parent="#spotify__album__lists__accordion">
                                                        <div class="accordion-body">
                                                            <div class="bi-common--album--songs--lists--wrapper">
                                                                @foreach ($album['tracks'] as $track)
                                                                    <label for="song_{{ $track['id'] }}"
                                                                        class="bi-album--song--list--wrapper">
                                                                        <div class="bi-album--song--list--info--side">
                                                                            <div class="bi-album--cover--photo">
                                                                                <img src="{{ $album['images'][0]['url'] ?? asset('assets/images/default_album.png') }}"
                                                                                    alt="Track Cover">
                                                                            </div>
                                                                            <div class="bi-album--info">
                                                                                <h2 class="bi-album--name">
                                                                                    {{ $track['name'] }}</h2>
                                                                                <h3 class="bi-album--sub--name">Duration:
                                                                                    {{ gmdate('i:s', $track['duration_ms'] / 1000) }}
                                                                                </h3>

                                                                                <!-- Audio preview -->
                                                                                {{-- @if (!empty($track['preview_url']))

                                                                                        <audio style="font-size:10px" controls class="song-preview">
                                                                                            <source
                                                                                                src="{{ $track['preview_url'] }}"
                                                                                                type="audio/mpeg">
                                                                                            Your browser does not support the
                                                                                            audio element.
                                                                                        </audio>

                                                                                @else
                                                                                    <p class="text-muted">Preview not
                                                                                        available</p>
                                                                                @endif --}}
                                                                            </div>
                                                                        </div>
                                                                        <input class="bi-album--common--checkbox"
                                                                            type="checkbox" name="song"
                                                                            id="song_{{ $track['id'] }}">
                                                                    </label>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            <p>No albums found.</p>
                                        @endif
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                    <!-- selected songs from both album -->
                    <div class="bi-selected--songs--from--both--album--wrapper" id="selectedSongsContainer">
                        <p id="noSongsMessage" class="text-muted">There is no song selected yet.</p>
                        <a href="#" class="bi-common--save--btn">Save</a>
                    </div>



                </section>
            </div>

            <!-- artist dashboard home  wrapper starts -->
        </div>

        <!-- dashboard pages area starts -->
    </div>
@endsection


@push('scripts')
    <script>
        $(document).ready(function() {
            const $checkboxes = $(".bi-album--common--checkbox");
            const $selectedSongsContainer = $("#selectedSongsContainer");
            $(document).ready(function() {
                const $checkboxes = $(".bi-album--common--checkbox");
                const $selectedSongsContainer = $("#selectedSongsContainer");
                const $noSongsMessage = $("#noSongsMessage");
                const $saveButton = $(".bi-common--save--btn");

                // Function to toggle placeholder message
                const toggleNoSongsMessage = () => {
                    const hasSongs = $selectedSongsContainer.find(".bi-selected--song--row").length > 0;
                    $noSongsMessage.toggle(!hasSongs); // Show if no songs, hide otherwise
                };

                // Function to add a song to the selected list
                const addSongToSelectedList = (songData) => {
                    const $songRow = $(`
            <div class="bi-selected--song--row" data-song-id="${songData.id}">
                <div class="bi-album--cover--photo">
                    <img src="${songData.image}" alt="">
                </div>
                <div class="bi-album--info">
                    <h1 class="bi-album--name">${songData.name}</h1>
                    <h2 class="bi-album--sub--name">${songData.artist}</h2>
                </div>
            </div>
        `);

                    $selectedSongsContainer.find(".bi-common--save--btn").before($songRow);
                    toggleNoSongsMessage();
                };

                // Function to remove a song from the selected list
                const removeSongFromSelectedList = (songId) => {
                    $selectedSongsContainer.find(`[data-song-id="${songId}"]`).remove();
                    toggleNoSongsMessage();
                };

                // Attach event listeners to checkboxes
                $checkboxes.on("change", function() {
                    const $checkbox = $(this);
                    const $parentWrapper = $checkbox.closest(".bi-album--song--list--wrapper");
                    const songData = {
                        id: $checkbox.attr("id"),
                        image: $parentWrapper.find(".bi-album--cover--photo img").attr("src"),
                        name: $parentWrapper.find(".bi-album--name").text().trim(),
                        artist: $parentWrapper.find(".bi-album--sub--name").text().trim(),
                    };

                    if ($checkbox.is(":checked")) {
                        addSongToSelectedList(songData);
                    } else {
                        removeSongFromSelectedList(songData.id);
                    }
                });

                // Save selected songs
                $saveButton.on("click", function(e) {
                    e.preventDefault();

                    // Collect selected song IDs
                    const selectedSongIds = [];
                    $(".bi-album--common--checkbox:checked").each(function() {
                        selectedSongIds.push($(this).attr("id"));
                    });

                    // If no songs are selected, show a message and stop
                    if (selectedSongIds.length === 0) {
                        alert("No songs selected to save.");
                        return;
                    }

                    // Send selected songs to the backend using AJAX
                    $.ajax({
                        url: "/save-selected-songs", // Replace with your actual backend endpoint
                        method: "POST",
                        data: {
                            _token: $('meta[name="csrf-token"]').attr(
                                "content"), // Add CSRF token for Laravel
                            selectedSongs: selectedSongIds,
                        },
                        success: function(response) {
                            alert("Selected songs have been saved successfully!");
                            console.log(response); // Optional: Log the response
                        },
                        error: function(xhr, status, error) {
                            alert("An error occurred while saving the selected songs.");
                            console.error(error); // Optional: Log the error
                        },
                    });
                });

                // Initial check to display the placeholder message
                toggleNoSongsMessage();
            });

            const $noSongsMessage = $("#noSongsMessage");

            // Function to toggle placeholder message
            const toggleNoSongsMessage = () => {
                const hasSongs = $selectedSongsContainer.find(".bi-selected--song--row").length > 0;
                $noSongsMessage.toggle(!hasSongs); // Show if no songs, hide otherwise
            };

            // Function to add a song to the selected list
            const addSongToSelectedList = (songData) => {
                const $songRow = $(`
            <div class="bi-selected--song--row" data-song-id="${songData.id}">
                <div class="bi-album--cover--photo">
                    <img src="${songData.image}" alt="">
                </div>
                <div class="bi-album--info">
                    <h1 class="bi-album--name">${songData.name}</h1>
                    <h2 class="bi-album--sub--name">${songData.artist}</h2>
                </div>
            </div>
        `);

                $selectedSongsContainer.find(".bi-common--save--btn").before($songRow);
                toggleNoSongsMessage();
            };


            const removeSongFromSelectedList = (songId) => {
                $selectedSongsContainer.find(`[data-song-id="${songId}"]`).remove();
                toggleNoSongsMessage();
            };


            $checkboxes.on("change", function() {
                const $checkbox = $(this);
                const $parentWrapper = $checkbox.closest(".bi-album--song--list--wrapper");
                const songData = {
                    id: $checkbox.attr("id"),
                    image: $parentWrapper.find(".bi-album--cover--photo img").attr("src"),
                    name: $parentWrapper.find(".bi-album--name").text().trim(),
                    artist: $parentWrapper.find(".bi-album--sub--name").text().trim(),
                };

                if ($checkbox.is(":checked")) {
                    addSongToSelectedList(songData);
                } else {
                    removeSongFromSelectedList(songData.id);
                }
            });


            toggleNoSongsMessage();
        });
    </script>
@endpush
