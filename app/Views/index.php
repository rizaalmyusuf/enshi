<!-- Page Header-->
<header class="masthead" style="background-image: url('assets/img/enshi-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>ENSHI</h1>
                    <span class="subheading">Elektronik Ensiklopedia Sistem Hukum Adat Indonesia</span>
                    <form action="/" method="post">
                        <div class="input-group my-3">
                            <input type="text" name="c" class="form-control" placeholder="Cari istilah disini..." aria-label="Cari istilah disini..." aria-describedby="cari" required>
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit" id="cari" name="cari">Cari</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
<?php if (isset($_POST['cari'])) : ?>
    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <p>Hasil penelusuran dari: <?= $_POST['c']; ?></p>
                <!-- Post preview-->
                <?php if ($baris == 0) : ?>
                    <h4>Istilah tidak ditemukan.</h4>
                <?php endif ?>
                <?php foreach ($kamus as $k) : ?>
                    <div class="post-preview">
                        <h2 class="post-title"><?= $k['term']; ?></h2>
                        <h3 class="post-subtitle"><?= $k['mean']; ?></h3>
                        <p class="post-meta">
                            Sumber: <?= $k['source']; ?>
                        </p>
                    </div>
                <?php endforeach; ?>
                <!-- Divider-->
                <hr class="my-4" />
                <!-- Pager-->
                <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="/kamus">Istilah Lainnya →</a></div>
            </div>
        </div>
    </div>
<?php endif; ?>