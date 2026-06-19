@extends('base.layout')

@section('content')
    <div class="container">
        <div class="col flex-column">
            <div class="row pt-3">
                <h4 class="padding">Hoofdstukken</h4>
            </div>
            <div class="row padding-y">
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
