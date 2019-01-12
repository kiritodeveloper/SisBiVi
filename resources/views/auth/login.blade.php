@extends('main.vendor.app.layouts.indexauth')

@section('content')
<div class="form-container">
    <p class="text-center" style="margin-top: 17px;">
           <i class="zmdi zmdi-account-circle zmdi-hc-5x"></i>
    </p>
       <h4 class="text-center all-tittles" style="margin-bottom: 30px;">inicia sesión con tu cuenta</h4>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="group-material-login">
                    <input id="email" type="email" class="material-login-control" name="email" required="" maxlength="70" >
                    <span class="highlight-login"></span>
                    <span class="bar-login"></span>
                    <label><i class="zmdi zmdi-account"></i> &nbsp; Email</label>
                 </div>
                <div class="group-material-login">
                    <input id="password" type="password" class="material-login-control"  name="password" required>
                    <span class="highlight-login"></span>
                    <span class="bar-login"></span>
                    <label><i class="zmdi zmdi-lock"></i> &nbsp; Contraseña</label>
                </div>
                <button class="btn-login" type="submit" >{{ __('Login') }} <i class="zmdi zmdi-arrow-right"></i></button>
            </form>
    </div>
@endsection
