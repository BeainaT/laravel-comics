<header>
    <div class="header_top">
        <div class="top container">
            <span>
                <a href="">dc power℠ visa®</a>
            </span>
            <span>
                additional dc sites
            </span>
        </div>
    </div>
    <div class="header_bottom">
        <div class="bottom container">
            <div class="logo">
                <img src={{asset('img/dc-logo.png')}} alt="dc logo">
            </div>
            <nav>
                <ul>
                    <li><a href="">characters</a></li>
                    <li class="{{Route::is('home', 'card') ? 'active' : ''}}"><a href="{{route('home')}}">comics</a></li>
                    <li><a href="">movies</a></li>
                    <li><a href="">tv</a></li>
                    <li><a href="">games</a></li>
                    <li><a href="">collectibles</a></li>
                    <li><a href="">videos</a></li>
                    <li><a href="">fans</a></li>
                    <li><a href="">characters</a></li>
                    <li><a href="">shop</a></li>
                </ul>
            </nav>
            <span>
                <input type="text" placeholder="Search"><i class="fa-solid fa-magnifying-glass"></i>
            </span>
        </div>
    </div>
</header>