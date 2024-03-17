<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tes Kepribadian Gratis dari iPersonic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href={{ asset('assets/css/style.css') }} rel="stylesheet">
</head>

<body>
    @include('partials.navbar')
    <main class="pt-4 pb-4 bg-primary-subtle">
        <div class="container">
            <div class="row">
                <div class="col col-md-6">
                    <h1 class="display-5 mt-4 mb-4">Coba tes kepribadian yang paling terkenal di
                        dunia.<br /><strong>Hanya 60
                            detik</strong>.</h1>
                    <a href="#" class="btn btn-lg btn-primary">Mulai tes Gratis <i
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
            <a href="#" class="btn btn-lg btn-primary">Mulai tes Gratis <i class="bi bi-caret-right-fill"></i></a>
            <div class="mt-3 mb-4">
                <small>Dapatkan hasil secepatnya. <strong>Tidak membutuhkan pendaftaran</strong>.</small>
            </div>
        </div>
    </section>

    @include('partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
