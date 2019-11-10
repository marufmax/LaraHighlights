@extends('layouts.app')

@section('content')
<div class="container">
    <div class="columns is-centered">
        <div class="column is-half">
            <form method="post" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="modal-card" style="width: auto">
                    <header class="modal-card-head">
                        <p class="modal-card-title">Log in</p>
                    </header>
                    <section class="modal-card-body">
                        <b-field label="Email" >
                            <b-input
                                name="email"
                                type="email"
                                value="{{ old('email') }}"
                                placeholder="Your email"
                                required
                                autofocus>
                            </b-input>
                        </b-field>

                        @if ($errors->has('email'))
                        <b-notification
                            type="is-danger"
                            aria-close-label="Close notification"
                            role="alert">
                           {{ $errors->first('email') }}
                        </b-notification>
                        @endif

                        <b-field label="Password">
                            <b-input
                                name="password"
                                type="password"
                                ref="passwordInput"
                                password-reveal
                                placeholder="Your password"
                                required>
                            </b-input>
                        </b-field>

                        <b-checkbox>Remember Me</b-checkbox>
                    </section>
                    <footer class="modal-card-foot">
                        <button class="button" type="button" @click="$parent.close()">Close</button>
                        <button type="submit" class="button is-primary">Login</button>
                    </footer>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
