@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
         <div class="now-playing-movies" id="now-playing-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Now Playing</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($nowPlayingMovies as $movie)
                    <x-movie-card :movie="$movie" />
                @endforeach
            </div>
        </div> <!-- end now-playing-movies -->
        <div class="popular-movies py-24" id="popular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular Movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($popularMovies as $movie)
                    <x-movie-card :movie="$movie" />
                @endforeach

            </div>
        </div> <!-- end pouplar-movies -->
        <div class="top-rated-movies py-24" id="top-rated-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Top Rated</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($topRatedMovies as $movie)
                    <x-movie-card :movie="$movie" />
                @endforeach
            </div>
        </div> <!-- end now-playing-movies -->
        <div class="upcoming-movies py-24" id="upcoming-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Upcoming</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($upcomingMovies as $movie)
                    <x-movie-card :movie="$movie" />
                @endforeach
            </div>
        </div> <!-- end now-playing-movies -->
    </div>
@endsection
