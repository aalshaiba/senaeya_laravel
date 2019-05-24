<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <a class="navbar-brand" href="/">
        <div class="row align-items-center">
            <div class="col-2 mr-5 pr-0"><i class="fas fa-cogs fa-2x"></i></div>
            <div class="col pl-0 ml-1">
                <div class="row">
                    <h3 class="mb-0 pb-0">Senaeya</h3>
                </div>
                <div class="row">
                    <small>Musaffah Directory</small>
                </div>
            </div>
        </div>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link {{request()->is('/') ? 'active':''}}" href="/"><i class="fas fa-home mr-2"></i>Home
                    <span
                            class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{request()->is('shops') ? 'active' : ''}}" href="/shops"><i
                            class="fas fa-car mr-2"></i>Shops</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{request()->is('privacy') ? 'active': ''}}" href="/privacy"><i
                            class="fas fa-bell-slash mr-2"></i>Privacy</a>
            </li>
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link {{request()->is('login') ? 'active':''}}" href="{{ route('login') }}"><i
                                class="fas fa-plus mr-2"></i>Add Your
                        Business</a>
                </li>
            @else
                @if(Auth::user()->name !=null)
                    <li class="nav-item">
                        <a class="nav-link {{request()->is('/') ? 'active':''}}" href="/">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link {{request()->is('/') ? 'active':''}}" href="/">
                            {{ Auth::user()->email }} <span class="caret"></span>
                        </a>
                    </li>
                @endif


                <li class="nav-item">
                    <a class="nav-link {{request()->is('logout') ? 'active':''}}" href="{{ route('logout') }}">
                        Logout
                    </a>
                </li>
            @endguest

            <li class="nav-item">
                <a href="/contact" class="nav-link {{request()->is('contact') ? 'active' : ''}}"><i
                            class="fas fa-info mr-2"></i>Contact us</a>
            </li>
        </ul>

    </div>
</nav>
