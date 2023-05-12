@extends('layouts.app')
@section('scripts')
    <script type="text/javascript" src="{{ asset('js/intlTelInput.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('js/passwordChecker.js') }}" defer></script>
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card my-4">
                    <div class="card-header"><h1 class="fw-bold">{{ __('Créer un compte') }}</h1></div>
                    <div class="card-body justify-content-center">
                        <form method="POST" action="{{ route('register') }}" autocomplete="on">
                            @csrf
                            <div class="row justify-content-center">
                                <div class="form-group col-sm-6 col-xs-12 form-error">
                                    <label class="input-block">
                                        <input id="firstname"
                                               type="text"
                                               class="form-control @error('firstname') is-invalid @enderror"
                                               name="firstname"
                                               placeholder="Prénom"
                                               value="{{ old('firstname') }}" autocomplete="name" autofocus>
                                        @error('firstname')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </label>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="form-group col-sm-6 col-xs-12 form-error">
                                    <label class="input-block">
                                        <input id="lastname"
                                               type="text"
                                               class="form-control @error('lastname') is-invalid @enderror"
                                               name="lastname"
                                               placeholder="lastname"
                                               value="{{ old('lastname') }}" autocomplete="name" autofocus>
                                        @error('lastname')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </label>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="form-group col-sm-6 col-xs-12 form-error">
                                    <label class="input-block">
                                        <input id="birthday"
                                               type="date"
                                               class="form-control @error('birthday') is-invalid @enderror"
                                               name="birthday"
                                               placeholder="birthday"
                                               value="{{ old('birthday') }}" autocomplete="name" autofocus>
                                        @error('birthday')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </label>
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="form-group col-sm-6 col-xs-12 form-error">
                                    <label class="input-block">
                                        <input id="contact_firstname"
                                               type="text"
                                               class="form-control @error('contact_firstname') is-invalid @enderror"
                                               name="contact_firstname"
                                               placeholder="contact_firstname"
                                               value="{{ old('contact_firstname') }}" autocomplete="name" autofocus>
                                        @error('contact_firstname')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </label>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="form-group col-sm-6 col-xs-12 form-error">
                                    <label class="input-block">
                                        <input id="contact_lastname"
                                               type="text"
                                               class="form-control @error('contact_lastname') is-invalid @enderror"
                                               name="contact_lastname"
                                               placeholder="contact_lastname"
                                               value="{{ old('contact_lastname') }}" autocomplete="name" autofocus>
                                        @error('contact_lastname')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </label>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="form-group col-sm-6 col-xs-12 form-error">
                                    <label class="input-block">
                                        <input id="contact_lastname"
                                               type="text"
                                               class="form-control @error('contact_lastname') is-invalid @enderror"
                                               name="contact_lastname"
                                               placeholder="contact_lastname"
                                               value="{{ old('contact_lastname') }}" autocomplete="name" autofocus>
                                        @error('contact_lastname')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </label>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="form-group col-sm-6 col-xs-12 form-error">
                                    <label class="input-block">
                                        <input id="email"
                                               type="email"
                                               class="form-control @error('email') is-invalid @enderror"
                                               name="email"
                                               placeholder="email"
                                               value="{{ old('email') }}" autocomplete="name" autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </label>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="form-group col-sm-6 col-xs-12 form-error">
                                    <label class="input-block">
                                        <input id="phone"
                                               type="number"
                                               class="form-control @error('phone') is-invalid @enderror"
                                               name="phone"
                                               placeholder="phone"
                                               value="{{ old('phone') }}" autocomplete="name" autofocus>
                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </label>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="form-group col-sm-6 col-xs-12 form-error">
                                    <label class="input-block">
                                        <input id="email"
                                               type="email"
                                               class="form-control @error('email') is-invalid @enderror"
                                               name="email"
                                               placeholder="exemple@gmail.com"
                                               value="{{ old('email') }}" autocomplete="email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </label>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="form-group col-sm-6 col-xs-12 form-error">
                                    <label class="input-block">
                                        <div>
                                            <div class="input-password">
                                                <input type="password"
                                                       id="password"
                                                       name="password"
                                                       placeholder="Votre mot de passe"
                                                       class="form-control">


                                                <small class="password-info">
                                                    Le mot de passe doit comporter au minimum 8 caractères et doit
                                                    comporter au moins une Majuscule et un Chiffre
                                                </small>
                                                <span class="d-none msg">Le mot de passe est requis</span>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <button type="submit" class="btn-primary-action col-8 col-lg-6">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
