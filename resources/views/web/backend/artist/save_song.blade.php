$(document).ready(function () {
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
    $checkboxes.on("change", function () {
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
    $saveButton.on("click", function (e) {
        e.preventDefault();

        // Collect selected song IDs
        const selectedSongIds = [];
        $(".bi-album--common--checkbox:checked").each(function () {
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
                _token: $('meta[name="csrf-token"]').attr("content"), // Add CSRF token for Laravel
                selectedSongs: selectedSongIds,
            },
            success: function (response) {
                alert("Selected songs have been saved successfully!");
                console.log(response); // Optional: Log the response
            },
            error: function (xhr, status, error) {
                alert("An error occurred while saving the selected songs.");
                console.error(error); // Optional: Log the error
            },
        });
    });

    // Initial check to display the placeholder message
    toggleNoSongsMessage();
});
Route::post('/save-selected-songs', [SongController::class, 'saveSelectedSongs'])->name('save.selected.songs');
public function saveSelectedSongs(Request $request)
{
    $selectedSongs = $request->input('selectedSongs');

    if (empty($selectedSongs)) {
        return response()->json(['error' => 'No songs selected'], 400);
    }

    // Save the selected songs logic here, e.g., save to database
    // Example:
    foreach ($selectedSongs as $songId) {
        // Save song ID to user's selected songs
        SelectedSong::create([
            'user_id' => auth()->id(),
            'song_id' => $songId,
        ]);
    }

    return response()->json(['message' => 'Songs saved successfully!']);
}
