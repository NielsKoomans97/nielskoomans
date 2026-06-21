@extends('base.layout')

@section('content')
    <div class="container">
        <div class="col">
            <div class="row pt-3">
                @auth
                    <form action="{{ isset($chapter) ? route('chapters.update', $chapter) : route('chapters.store') }}"
                        class="background-less" method="POST">
                        @csrf
                        @if (isset($chapter))
                            @method('PUT')
                        @endif
                        <div class="mb-3">
                            <label for="title"><b>Titel</b></label>
                            <input type="text" class="inverted" id="title" name="title"
                                value="{{ $chapter->title ?? '' }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="content"><b>Inhoud</b></label>
                            <textarea class="inverted" id="content" name="content" rows="5" required>{{ $chapter->content ?? '' }}</textarea>
                        </div>
                        <button type="submit">{{ isset($chapter) ? 'Bijwerken' : 'Aanmaken' }}</button>
                    </form>
                @endauth
            </div>
        </div>
    </div>
@endsection
