<div class="container py-3">
    <div class="row align-items-center">
        @php
            $url = '';
        @endphp

        @if ($_SERVER['REQUEST_URI'] === '/')
            <i class="ti ti-chevron-right col-auto pe-0"></i>
            <div class="col-auto">
                <a href="{{ route('home') }}">Home</a>
            </div>
        @else
            @foreach ($parts as $part)
                <i class="ti ti-chevron-right col-auto pe-0"></i>
                <div class="col-auto">
                    @php
                        $url .= '/' . $part;
                    @endphp

                    <a href="{{ $url }}">{{ __('common.'.$part) }}</a>
                </div>
            @endforeach
        @endif


    </div>
</div>
