@include('partials.head')
<body>
    @include('partials.navbar')
    <main class="pt-4 pb-4">
        <div class="container">
            <h1 class="display-6"><strong>{{ $result['label'] }}</strong></h1>
            <hr />
            <div>
                {!! $result['description'] !!}
            </div>
        </div>
    </main>

    @include('partials.footer')
</body>
</html>
