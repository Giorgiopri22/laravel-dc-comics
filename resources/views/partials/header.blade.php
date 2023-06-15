<div id="topBar" class="p-1">
    <div id="topBarContainer">
        <span class="text-uppercase">dc power sm visa <i class="fa-regular fa-registered"></i></span>
        <div class="dropdown ms-3">
            <span class="dropdown-toggle text-uppercase" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                additional dc sites
            </span>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Site 1</a></li>
                <li><a class="dropdown-item" href="#">Site 2</a></li>
                <li><a class="dropdown-item" href="#">Site 3</a></li>
            </ul>
        </div>
    </div>
</div>

<header class="d-flex justify-content-between align-items-center">

    <!-- logo sx -->
    <a href="{{ route('home') }}"> 
        <div>
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo-small">
        </div>
    </a>

     <!-- navbar dx -->
    <nav>
        <ul class="d-flex">
            <li>
                <a class="text-uppercase" href="#">caharacters</a> 
            </li>
            <li class="borderLightBlue">
                <a href="{{ route('comics.index') }}" class="text-uppercase colorLightBlue" href="#">comics</a> 
            </li>
            <li>
                <a class="text-uppercase" href="#">movies</a> 
            </li>
            <li>
                <a class="text-uppercase" href="#">tv</a> 
            </li>
            <li>
                <a class="text-uppercase" href="#">games</a> 
            </li>
            <li>
                <a class="text-uppercase" href="#">collectibles</a> 
            </li>
            <li>
                <a class="text-uppercase" href="#">videos</a> 
            </li>
            <li>
                <a class="text-uppercase" href="#">fans</a> 
            </li>
            <li>
                <a class="text-uppercase" href="#">news</a> 
            </li>
            <li>
                <a href="{{ route('comics.create') }}" class="text-uppercase" href="#">Add Comic</a> 
            </li>
        </ul>
    </nav>

    <div class="input-group">
        <input type="text" class="form-control rounded-0" placeholder="Search">
        <button class="" type="button" id="button-addon2">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>
    </div>


</header>

<div id="jumbotron">
</div>