@include('partials.head')
<body>
    @include('partials.navbar', ['defineResult' => $defineResult])
    <main class="pt-4 pb-4">
        <div class="container">
            <h1 class="display-6"><strong>Tes Kepribadian</strong></h1>
            <hr />
            <div>
                <ul class="list-inline">
                    @foreach($defineQuiz as $val => $key)
                        @php
                        $btn_color = 'btn-light';
                        if($step === $key['step']['init']) {
                            $btn_color = 'btn-secondary';
                        }
                        @endphp
                        <li class="list-inline-item"><button type="button" class="btn btn-sm {{ $btn_color }} disabled">{{ $key['step']['label'] }}</button></li>
                    @endforeach
                </ul>
            </div>
            <div class="test-option mt-4">
                <div class="row">
                    @php
                        $options = [];
                    @endphp
                    @foreach($defineQuiz as $val => $key)
                        @php
                        if($step === $key['step']['init']) {
                            $options = $key['options'];
                        }
                        @endphp
                    @endforeach
                    @foreach($options as $val => $key)
                        <div class="col">
                            <div class="p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">
                                <p class="lead mb-4"><strong>{{ $key }}</strong></p>
                                <form action="/quiz/{{ $nextStep }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="value" value="{{ $val }}" />
                                    <input type="hidden" name="accumulate" value="{{ $accumulate }}" />
                                    <button type="submit" class="btn btn-primary"><i class="bi bi-caret-right-fill"></i> Hal ini berlaku untuk saya</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>

    @include('partials.footer')
</body>

</html>
