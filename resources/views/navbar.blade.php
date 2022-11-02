<div class="container">
    <div class="row">
        <div class="col"></div>
        @auth
            <div class="col text-end">
                <p style="margin-top: 7px">Logged in as {{auth()->user()->name}}</p>
            </div>
            <div class="col-sm-1 text-end">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="btn">Logout</button>
                </form>
            </div>
        @else
            <div class="col-sm-1 text-end">
                <h4 style="cursor: pointer">
                    <a href=@php(env('WDU'))"/login" class="btn">Login</a>
                </h4>
            </div>
        @endauth
    </div>
</div>


