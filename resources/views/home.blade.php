@extends('main.vendor.app.layouts.index')

@section('content')

<div class="container">
    
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                    @include('main.vendor.dasboard')
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
            
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                    </div>
                {{--  <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>  --}}
            </div>
        </div>
    </div>
</div>
@endsection
