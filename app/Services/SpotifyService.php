<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Exception;
use Illuminate\Support\Facades\Log;

class SpotifyService
{
    private $clientId;
    private $clientSecret;
    private $accessToken;

    public function __construct()
    {
        $this->clientId = config('services.spotify.client_id');
        $this->clientSecret = config('services.spotify.client_secret');
        $this->accessToken = $this->getAccessToken();
    }

    // Fetch access token
    private function getAccessToken()
    {
        $response = Http::asForm()->post('https://accounts.spotify.com/api/token', [
            'grant_type' => 'client_credentials',
            'client_id' => $this->clientId,
            'client_secret' => $this->clientSecret,
        ]);

        if ($response->successful()) {
            return $response->json()['access_token'];
        }

        throw new Exception("Unable to retrieve Spotify access token: " . $response->body());
    }

    // Fetch artist information by artist ID
    public function getArtist($artistId)
    {
        $response = Http::withToken($this->accessToken)
            ->get("https://api.spotify.com/v1/artists/{$artistId}");

        if ($response->successful()) {
            return $response->json();
        }

        throw new Exception("Unable to retrieve artist information: " . $response->body());
    }




    // In SpotifyService
    public function getArtistAlbums($artistId)
    {
        $response = Http::withToken($this->accessToken)
            ->get("https://api.spotify.com/v1/artists/{$artistId}/albums");

        if (!$response->successful()) {
            throw new Exception("Unable to retrieve artist albums: " . $response->body());
        }

        $albums = $response->json();
        //dd($albums);
        $albumsWithTracks = [];

        foreach ($albums['items'] as $album) {
            $albumId = $album['id'];
            $tracksResponse = Http::withToken($this->accessToken)
                ->get("https://api.spotify.com/v1/albums/{$albumId}/tracks");

            if ($tracksResponse->successful()) {
                $album['tracks'] = $tracksResponse->json()['items'];
                $albumsWithTracks[] = $album;
            }
        }

        return $albumsWithTracks;
    }








    // In SpotifyService.php

    // Fetch album details
    public function getAlbumDetails($albumId)
    {
        $response = Http::withToken($this->accessToken)
            ->get("https://api.spotify.com/v1/albums/{$albumId}");

        if ($response->successful()) {
            return $response->json();
        }

        throw new Exception("Unable to retrieve album details: " . $response->body());
    }

    // Fetch tracks for a specific album
    public function getAlbumTracks($albumId)
    {
        $response = Http::withToken($this->accessToken)
            ->get("https://api.spotify.com/v1/albums/{$albumId}/tracks");

        if ($response->successful()) {
            return $response->json()['items'];
        }

        throw new Exception("Unable to retrieve album tracks: " . $response->body());
    }










    // Fetch multiple predefined artists
    public function getPredefinedArtists()
    {
        // List of 10 Spotify artist IDs
        $artistIds = [
            '0TnOYISbd1XYRBk9myaseg', // Pitbull
            '1vCWHaC5f2uS3yhpwWbIA6', // Avicii
            '5K4W6rqBFWDnAN6FQUkS6x', // Kanye West
            '3TVXtAsR1Inumwj472S9r4', // Drake
            '7dGJo4pcD2V6oG8kP0tJRR', // Eminem
            '66CXWjxzNUsdJxJ2JdwvnR', // Ariana Grande
            '6eUKZXaKkcviH0Ku9w2n3V', // Ed Sheeran
            '6M2wZ9GZgrQXHCFfjv46we', // Dua Lipa
            '3fMbdgg4jU18AjLCKBhRSm', // Michael Jackson
            '53XhwfbYqKCa1cC15pYq2q', // Imagine Dragons
        ];

        $ids = implode(',', $artistIds);
        $response = Http::withToken($this->accessToken)
            ->get("https://api.spotify.com/v1/artists?ids={$ids}");

        if ($response->successful()) {
            return $response->json()['artists'];
        }

        throw new Exception("Unable to retrieve predefined artists information: " . $response->body());
    }


    // Search for items in Spotify's catalog
    public function searchItems($query, $type = 'artist', $limit = 10)
    {
        $response = Http::withToken($this->accessToken)->get('https://api.spotify.com/v1/search', [
            'q' => $query,
            'type' => $type,
            'limit' => $limit,
        ]);

        if ($response->successful()) {
            return $response->json()[$type . 's']['items'];
        }

        throw new Exception("Unable to search for items: " . $response->body());
    }





    // Get details of a specific song by track ID
    public function getSongDetails($trackId)
    {
        // dd($this->accessToken);
        $response = Http::withToken($this->accessToken)
            ->get("https://api.spotify.com/v1/tracks/{$trackId}");

        if ($response->successful()) {
            return $response->json();
        }

        throw new Exception("Unable to get song details: " . $response->body());
    }



    // Fetch the currently playing song
    public function getCurrentlyPlayingSong()
    {
        $response = Http::withToken($this->accessToken)
            ->get('https://api.spotify.com/v1/me/player/currently-playing');

        // Log the response for debugging purposes
        Log::info('Currently Playing Response:', ['response' => $response->body()]);

        if ($response->successful()) {
            // Check if there's a song playing
            $data = $response->json();
            if (empty($data)) {
                throw new Exception("No song is currently playing.");
            }
            return $data;
        }

        throw new Exception("Unable to fetch currently playing song. Error: " . $response->body());
    }


    // Fetch recently played songs
    public function getRecentlyPlayedSongs($limit = 10)
    {
        $response = Http::withToken($this->accessToken)
            ->get("https://api.spotify.com/v1/me/player/recently-played?limit={$limit}");

        if ($response->successful()) {
            return $response->json()['items'];
        }

        throw new Exception("Unable to fetch recently played songs.");
    }








    // Fetch current user profile
    public function getCurrentUserProfile($id)
    {
        $response = Http::withToken($this->accessToken)
            ->get("https://api.spotify.com/v1/users/{$id}");
        // dd($response->json());
        if ($response->successful()) {
            return $response->json();
        }

        throw new Exception("Unable to fetch user profile.");
    }


    // Fetch current user profile
    public function getPlayList($playlist_id)
    {
        $response = Http::withToken($this->accessToken)
            ->get("https://api.spotify.com/v1/playlists/{$playlist_id}");

        if ($response->successful()) {
            return $response->json();  // Return the playlist data
        }

        // Throw an exception if the request failed
        throw new Exception("Unable to fetch playlist data.");
    }
}
