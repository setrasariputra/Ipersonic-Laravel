<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container">
        <div>
            <a class="navbar-brand" href="{{ url('/') }}">iPersonic</a>
            <a href="{{ url('/quiz') }}" class="btn btn-sm btn-primary">Mulai Test <i class="bi bi-caret-right-fill"></i></a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Tipe Kepribadian
                    </a>
                    <ul class="dropdown-menu">
                        @if(isset($defineResult))
                            @foreach ($defineResult as $key)
                                <li><a class="dropdown-item" href="{{ url('result/'.$key['slug']) }}">{{ $key['label'] }}</a></li>
                            @endforeach
                        @endif
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
