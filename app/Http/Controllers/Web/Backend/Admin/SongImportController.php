<?php

namespace App\Http\Controllers\Web\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\SpotifyService;

class SongImportController extends Controller
{
    protected $spotifyService;

    public function __construct(SpotifyService $spotifyService)
    {
        // $this->middleware('auth');
        $this->spotifyService = $spotifyService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $artistId = '0TnOYISbd1XYRBk9myaseg';  // Example artist ID
            $artist = $this->spotifyService->getArtist($artistId);
            $albums = $this->spotifyService->getArtistAlbums($artistId); // Fetch albums
            return view('web.backend.artist.import-song', compact('artist', 'albums'));
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        // return view('web.backend.artist.import-song');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
