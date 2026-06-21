@extends('base.layout')

@section('content')
    <div class="container">
        <div class="col flex-column">
            @auth
                <div class="row pt-2 toolstrip">
                    <a href="{{ route('chapters.create') }}">
                        <i class="ti ti-playlist-add"></i> Nieuw hoofdstuk
                    </a>
                </div>
            @endauth

            <div class="row pt-3">
                @auth
                    @foreach ($chapters as $chapter)
                        <div class="col-md-4 mb-4">
                            <a href="{{ route('chapters.show', $chapter) }}" class="card h-100 text-decoration-none">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $chapter->title }}</h5>
                                    <p class="card-text">{{ Str::limit($chapter->content, 100) }}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endauth
                @guest
                    <p>Log in om alle hoofdstukken te bekijken.</p>
                @endguest
            </div>
        </div>

    </div>
@endsection
