@include('partials.head')

<body>
    @include('partials.navbar')
    <main class="pt-4 pb-4 bg-primary-subtle">
        <div class="container">
            <div class="row">
                <div class="col col-md-6">
                    <h1 class="display-5 mt-4 mb-4">Coba tes kepribadian yang paling terkenal di
                        dunia.<br /><strong>Hanya 60
                            detik</strong>.</h1>
                    <a href="{{ url('/quiz') }}" class="btn btn-lg btn-primary">Mulai tes Gratis <i
                            class="bi bi-caret-right-fill"></i></a>
                    <div class="mt-3 mb-4">
                        <small>Dapatkan hasil secepatnya. <strong>Tidak membutuhkan pendaftaran</strong>.</small>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <section class="pt-4 pb-4">
        <div class="container">
            <p class="lead"><strong>iPersonic dikembangkan oleh psikolog</strong>. Felicitas Heyne, pengembang dan
                pendiri tes kepribadian iPersonic adalah psikolog terkenal dan penulis buku. Beliau adalah anggota
                afiliasi internasional American Psychological Association (APA).</p>
            <a href="{{ url('/quiz') }}" class="btn btn-lg btn-primary">Mulai tes Gratis <i class="bi bi-caret-right-fill"></i></a>
            <div class="mt-3 mb-4">
                <small>Dapatkan hasil secepatnya. <strong>Tidak membutuhkan pendaftaran</strong>.</small>
            </div>
        </div>
    </section>

    @include('partials.footer')
</body>

</html>
