@extends('base.layout', ['title' => 'Inloggen'])

@section('content')
    <section class="content padding-y-5">
        <div class="container">
            <div class="col flex-column">
                <div class="row justify-content-center align-items-center">
                    <div class="col-4 col-md-6 col-sm-12 col-12">
                        <form method="POST" action="{{ route('login') }}" class="padding-2">
                            @csrf

                            <div class="pb-3">
                                <p>
                                    <small>
                                        <b>Welkom terug!</b><br>
                                        Log in om verder te gaan.
                                    </small>
                                </p>
                            </div>

                            <div class="mb-4">
                                <label for="email" class="form-label">
                                    <small><b>E-mailadres</b></small>
                                </label>
                                <input type="email" name="email" id="email" class="mb-1" required
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
                                <input type="password" name="password" id="password" class="mb-1" required>
                                @error('password')
                                    <label>
                                        <small><i class="ti ti-info-circle me-2"></i><b>{{ $message }}</b></small>
                                    </label>
                                @enderror
                            </div>

                            <div class="row pt-5 m-0 gap-3 justify-content-end align-items-center">
                                <a href="{{ route('register') }}" class="d-flex align-items-center gap-2">
                                    <i class="ti ti-user-plus"></i>
                                    Registreren
                                </a>
                                <button type="submit" class="d-flex align-items-center align-self-end gap-2">
                                    <i class="ti ti-login"></i>
                                    Inloggen
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
    </section>
@endsection
