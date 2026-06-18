@extends('base.layout', ['title' => 'Registreren'])

@section('content')
    <section class="content padding-y-5">
        <div class="container">
            <div class="col flex-column">
                <div class="row justify-content-center align-items-center">
                    <div class="col-4 col-md-6 col-sm-12 col-12">
                        <form method="POST" action="{{ route('register') }}" class="padding-2">
                            @csrf

                            <div class="pb-3">
                                <p>
                                    <small>
                                        <b>Welkom!</b><br>
                                        Maak een account aan om verder te gaan.
                                    </small>
                                </p>
                            </div>

                            <div class="mb-4">
                                <label for="name" class="form-label">
                                    <small><b>Naam</b></small>
                                </label>
                                <input type="text" name="name" id="name" class="form-control mb-1" required
                                    autofocus>
                                @error('name')
                                    <label>
                                        @dump($message)
                                        <small><i class="ti ti-info-circle me-2"></i><b>{{ $message }}</b></small>
                                    </label>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="email" class="form-label">
                                    <small><b>E-mailadres</b></small>
                                </label>
                                <input type="email" name="email" id="email" class="form-control mb-1" required
                                    autofocus>
                                @error('email')
                                    <label>
                                        <small><i class="ti ti-info-circle me-2"></i><b>{{ $message }}</b></small>
                                    </label>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="password" class="form-label">
                                    <small><b>Wachtwoord</b></small>
                                </label>
                                <input type="password" name="password" id="password" class="form-control mb-1" required>
                                @error('password')
                                    <label>
                                        <small><i class="ti ti-info-circle me-2"></i><b>{{ $message }}</b></small>
                                    </label>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="password_confirmation" class="form-label">
                                    <small><b>Bevestig Wachtwoord</b></small>
                                </label>
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    class="form-control mb-1" required>
                                @error('password_confirmation')
                                    <label>
                                        <small><i class="ti ti-info-circle me-2"></i><b>{{ $message }}</b></small>
                                    </label>
                                @enderror
                            </div>

                            <div class="row pt-5 m-0 gap-3 justify-content-end align-items-center">
                                <a href="{{ route('login') }}" class="d-flex align-items-center gap-2">
                                    <i class="ti ti-login"></i>
                                    Inloggen
                                </a>
                                <button type="submit" class="d-flex align-items-center align-self-end gap-2">
                                    <i class="ti ti-user-plus"></i>
                                    Registreren
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
    </section>
@endsection
