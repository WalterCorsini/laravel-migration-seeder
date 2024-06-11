<header class="d-flex justify-content-between align-items-center ps-5 pe-5">
    <img src="{{ Vite::asset('resources/img/logo.png') }}" alt="logo">
    <ul class="d-flex justify-content-center align-items-center gap-3">
        {{-- per essere linkati ad una route --}}
        <li><a href="">About</a></li>
        <li><a href="">Contact</a></li>
        {{-- request --> per assegnare un eventuale classe css "active" alla link della pagina selezionata route('alias') -> per essere likati alla pagina home --}}
        <li class="{{ Request::route()->getName() === 'home' ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
    </ul>
</header>