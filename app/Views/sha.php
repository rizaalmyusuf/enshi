<!-- Page Header-->
<header class="masthead" style="background-image: url('assets/img/enshi-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>Seputar Hukum Adat Indonesia</h1>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Page Content -->
<style>
    .list-group-item {
        border-width: 0 0 1px;
    }
</style>
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col">
            <div class="accordion-flush" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button id="pengertian" class="accordion-button <?php if (isset($_GET['t'])) {
                                                                            if ($_GET['t'] != 1) {
                                                                                echo 'collapsed';
                                                                            }
                                                                        } else {
                                                                            echo 'collapsed';
                                                                        } ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="<?php if (isset($_GET['t'])) {
                                                                                                                                                                        if ($_GET['t'] == 1) {
                                                                                                                                                                            echo 'true';
                                                                                                                                                                        } else {
                                                                                                                                                                            echo 'false';
                                                                                                                                                                        }
                                                                                                                                                                    } else {
                                                                                                                                                                        echo 'false';
                                                                                                                                                                    } ?>" aria-controls="collapseOne">
                            <h2>Pengertian Sistem Hukum Adat</h2>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse <?php if (isset($_GET['t'])) {
                                                                                    if ($_GET['t'] == 1) {
                                                                                        echo 'show';
                                                                                    }
                                                                                } ?>" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Rosdalina, 2017</div>
                                        Menurut kesimpulan hasil <i>“Seminar Hukum Adat dan Pembangunan Hukum Nasional”</i>, <b>hukum adat</b> diartikan sebagai hukum Indonesia asli yang tidak tertulis dalam bentuk perundang-undangan Republik Indonesia yang mengandung unsur-unsur agama.
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Pide, 2014</div>
                                        <b>Hukum Adat</b> merupakan aturan kebiasaan yang tidak tertulis, tidak dikodifikasi (tidak dibukukan), diputuskan oleh fungsionaris hukum (kepala adat), mempunyai sanksi, telah ada sejak lama dan masih hidup berkembang dan ditaati oleh masyarakat.
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Cornelis van Vollenhoven</div>
                                        <b>Hukum Adat</b> ialah hukum yang berlaku bagi masyarakat pribumi dan timur asing yang memuat sanksi (karena hukum) namun tidak dikodifikasikan (karena adat).
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">B. Ter Haar Bzn</div>
                                        <b>Hukum Adat</b> ialah segala aturan yang terbentuk dari keputusan-keputusan para fungsionaris hukum (kepala adat) yang memiliki kewibawaan serta pengaruh dan pelaksanaannya berlaku serta merta dan ditaati dengan sepenuh hati.
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start border-0">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Hazairin</div>
                                        <b>Hukum Adat</b> ialah hukum yang dijumpai dalam adat dan merupakan bagian yang tak terpisahkan.
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button id="proses-lahir" class="accordion-button <?php if (isset($_GET['t'])) {
                                                                                if ($_GET['t'] != 2) {
                                                                                    echo 'collapsed';
                                                                                }
                                                                            } else {
                                                                                echo 'collapsed';
                                                                            } ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="<?php if (isset($_GET['t'])) {
                                                                                                                                                                            if ($_GET['t'] == 2) {
                                                                                                                                                                                echo 'true';
                                                                                                                                                                            } else {
                                                                                                                                                                                echo 'false';
                                                                                                                                                                            }
                                                                                                                                                                        } else {
                                                                                                                                                                            echo 'false';
                                                                                                                                                                        } ?>" aria-controls="collapseTwo">
                            <h2>Proses Lahirnya Hukum Adat</h2>
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse <?php if (isset($_GET['t'])) {
                                                                                    if ($_GET['t'] == 2) {
                                                                                        echo 'show';
                                                                                    }
                                                                                } ?>" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <img src="assets/img/proses-lahirnya-hukum-adat.png" class="img-fluid" alt="Alur Proses Lahirnya Hukum Adat">
                            <p class="mt-0"><b>Manusia</b> dibekali dengan akal pikiran dalam bertingkah laku. Tingkah laku yang dilakukan secara terus menerus oleh individu dan diterima sebagai sebuah kepatutan disebut dengan <b>kebiasaan</b>. Kodrat manusia sebagai makhluk sosial menjadikan individu satu dengan yang lainnya saling berinteraksi sehingga kebiasaan itu menjelma menjadi <b>adat</b> yang menggambarkan perasaan masyarakat itu sendiri. Kemudian kelompok masyarakat menjadikan adat tersebut sebagai sesuatu yang harus dilaksanakan dan dipatuhi sehingga disebut dengan <b>hukum adat</b> (Pide, 2014).</p>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo-One">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-One" aria-expanded="false" aria-controls="collapseTwo-One">
                                        <h3>Teori Pembentukan Hukum Adat</h3>
                                    </button>
                                </h2>
                                <div id="collapseTwo-One" class="accordion-collapse collapse" aria-labelledby="headingTwo-One">
                                    <div class="accordion-body">
                                        <ol class="list-group list-group-numbered">
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="ms-2 me-auto">
                                                    <div class="fw-bold">Teori Kenyataan</div>
                                                    Menegaskan bahwa hukum adat terbentuk karena norma-norma yang berlaku memiliki sanksi dan pada kenyataannya masih ditaati dan dipatuhi oleh masyarakat secara sadar dan sepenuh hati (Mansur, 2018).
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="ms-2 me-auto">
                                                    <div class="fw-bold">Teori Keputusan</div>
                                                    - <b>Ter Haar</b> mengatakan bahwa hukum adat terbentuk dari adat istiadat yang digunakan oleh para fungsionaris hukum (kepala adat/lembaga pembentuk hukum adat) untuk memutus suatu sengketa (Mansur, 2018).<br>
                                                    - <b>Logeman</b> berpendapat bahwa suatu adat istiadat yang digunakan oleh fungsionaris hukum untuk menyelesaikan suatu sengketa belum menjadi hukum adat dan akan menjadi hukum adat jika diikuti oleh fungsionaris hukum lainnya (Mansur, 2018).
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="ms-2 me-auto">
                                                    <div class="fw-bold">Teori Receptio In Complexu</div>
                                                    Adat istiadat dan hukum adat suatu kelompok masyarakat adat merupakan hukum agama yang dianut oleh masyarakat tersebut. Masyarakat menerima secara bulat-bulat hukum agama yang dianutnya (Rosdalina, 2017).
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="ms-2 me-auto">
                                                    <div class="fw-bold">Teori Receptie</div>
                                                    Merupakan kritik dari <b>Snouck Hurgronje</b> dan <b>van Vollenhoven</b> yang menyatakan bahwa masyarakat Indonesia saat itu menganut sistem hukum yang berbeda dengan hukum agama, yaitu hukum adat. Adapun hukum agama terutama hukum Islam diterima masyarakat selama dikehendaki oleh hukum adat (Mansur, 2018).
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="ms-2 me-auto">
                                                    <div class="fw-bold">Teori Receptio A Contratio</div>
                                                    Hukum adat adalah hukum yang berbeda dengan hukum Islam dan tidak bisa dicampuradukkan. Hukum adat terbentuk karena adanya kepentingan hidup masyarakat dan dijalankan atas ketaatan anggota-anggota masyarakat apabila terjadi pertikaian (Mansur, 2018).
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="ms-2 me-auto">
                                                    <div class="fw-bold">Teori Penetration</div>
                                                    Teori ini mempercayai bahwa Islam telah masuk ke Indonesia secara damai, toleran dan konstruktif sehingga mengakar dalam kehidupan penduduk Indonesia dan membawa pengaruh yang bersifat normatif dalam kebudayaannya (Mansur, 2018).
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="ms-2 me-auto">
                                                    <div class="fw-bold">Teori Sinkritisme</div>
                                                    Terdapat hubungan yang erat antara Islam dan hukum adat yang menghasilkan sinkritisme yakni sikap rukun, saling memberi dan menerima (Mansur, 2018).
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-start border-0">
                                                <div class="ms-2 me-auto">
                                                    <div class="fw-bold">Teori Zat</div>
                                                    Teori Zat Hukum adat yang dijalankan adalah hukum yang tidak bertentangan dengan agama Islam. Jika bertentangan dengan hukum Islam maka hukum adat dengan sendirinya batal atau tidak berlaku (Mansur, 2018).
                                                </div>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button id="sifat-dan-corak" class="accordion-button <?php if (isset($_GET['t'])) {
                                                                                    if ($_GET['t'] != 3) {
                                                                                        echo 'collapsed';
                                                                                    }
                                                                                } else {
                                                                                    echo 'collapsed';
                                                                                } ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="<?php if (isset($_GET['t'])) {
                                                                                                                                                                                    if ($_GET['t'] == 3) {
                                                                                                                                                                                        echo 'true';
                                                                                                                                                                                    } else {
                                                                                                                                                                                        echo 'false';
                                                                                                                                                                                    }
                                                                                                                                                                                } else {
                                                                                                                                                                                    echo 'false';
                                                                                                                                                                                } ?>" aria-controls="collapseThree">
                            <h2>Sifat dan Corak Hukum Adat</h2>
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse <?php if (isset($_GET['t'])) {
                                                                                    if ($_GET['t'] == 3) {
                                                                                        echo 'show';
                                                                                    }
                                                                                } ?>" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="accordion accordion-flush" id="accordionThree">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree-One">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree-One" aria-expanded="false" aria-controls="collapseThree-One">
                                            <h3>Sifat Hukum Adat</h3>
                                        </button>
                                    </h2>
                                    <div id="collapseThree-One" class="accordion-collapse collapse" aria-labelledby="headingThree-One" data-bs-parent="#accordionThree">
                                        <div class="accordion-body">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    Sifat Hukum Adat adalah <b>statis</b> sekaligus <b>dinamis (monodualisme)</b> dan <b>plastis/elastis</b> (Rosdalina, 2017).
                                                    <ol class="list-group list-group-numbered">
                                                        <li class="list-group-item border-0"><b>Statis</b> karena hukum adat itu bertujuan membangun keteraturan.</li>
                                                        <li class="list-group-item border-0"><b>Dinamis</b> karena mengikuti perkembangan masyarakat.</li>
                                                        <li class="list-group-item border-0"><b>Plastis/elastis</b> karena hukum adat dapat menyesuaikan diri dengan kebutuhan masyarakat.</li>
                                                    </ol>
                                                </li>
                                                <li class="list-group-item">
                                                    Sifat Hukum Adat yaitu <b>magis religius, komunal, konkret</b> dan <b>kontan</b> (Mansur, 2018).
                                                    <ol class="list-group list-group-numbered">
                                                        <li class="list-group-item border-0"><b>Magis Religius,</b> maksudnya hukum adat erat kaitannya dengan kepercayaan pada hal-hal yang gaib.</li>
                                                        <li class="list-group-item border-0"><b>Komunal,</b> sifat kebersamaan artinya mementingkan kepentingan bersama di atas kepentingan pribadi.</li>
                                                        <li class="list-group-item border-0"><b>Konkret,</b> berarti hukum adat bersifat nyata, jelas, tidak diam-diam, tidak sembunyi-sembunyi, atau tidak samar-samar, diketahui dan didengar orang lain dan nampak terjadi ijab-kabul (serah-terima).</li>
                                                        <li class="list-group-item border-0"><b>Kontan,</b> Pemenuhan prestasi dilakukan secara serta merta atau dilakukan saat perbuatan atau pengucapan itu dilakukan atau dengan kata lain selesai seketika.</li>
                                                    </ol>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree-Two">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree-Two" aria-expanded="false" aria-controls="collapseThree-Two">
                                            <h3>Corak Hukum Adat</h3>
                                        </button>
                                    </h2>
                                    <div id="collapseThree-Two" class="accordion-collapse collapse" aria-labelledby="headingThree-Two" data-bs-parent="#accordionThree">
                                        <div class="accordion-body">
                                            <ol class="list-group list-group-numbered">
                                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                                    <div class="ms-2 me-auto">
                                                        <div class="fw-bold">Tradisional</div>
                                                        Hukum adat diwariskan secara turun temurun sejak dahulu hingga sekarang tetap dipakai dan dihormati (Mansur, 2018; Rosdalina, 2017; Wiranata, 2005; Pidie, 2014).
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                                    <div class="ms-2 me-auto">
                                                        <div class="fw-bold">Keagamaan</div>
                                                        Hukum adat tidak lepas dari pengaruh agama dan melingkup hidup-ati, maju-mundurnya hukum adat itu sendiri. Pengaruh agama ke dalam hukum adat menyebabkan hapusnya atau tidak berlakunya hukum adat yang bertentangan dengan hukum agama (Mansur, 2018; Rosdalina, 2017; Wiranata, 2005).
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                                    <div class="ms-2 me-auto">
                                                        <div class="fw-bold">Kebersamaan</div>
                                                        Kepentingan Bersama lebih diutamakan daripada kepentingan pribadi. Kepentingan pribadi dianggap sudah diwakili oleh kepentingan bersama tersebut (Mansur, 2018; Rosdalina, 2017; Wiranata, 2005).
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                                    <div class="ms-2 me-auto">
                                                        <div class="fw-bold">Konkret</div>
                                                        Berarti hukum adat bersifat nyata, jelas, tidak diam-diam, tidak sembunyi-sembunyi, atau tidak samar-samar, diketahui dan didengar orang lain dan nampak terjadi ijab-kabul (serah-terima) (Mansur, 2018; Rosdalina, 2017; Wiranata, 2005).
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                                    <div class="ms-2 me-auto">
                                                        <div class="fw-bold">Terbuka dan Sederhana</div>
                                                        <b>Terbuka</b> artinya hukum adat dapat menerima masuknya unsur-unsur baru dengan syarat tidak bertentangan dengan jiwa dan hukum adat itu sendiri (Mansur, 2018; Rosdalina, 2017; Wiranata, 2005).<br>
                                                        <b>Sederhana</b> artinya bersahaja, tidak banyak administrasinya, mudah dimengerti, dilaksanakan berdasarkan saling percaya, tidak rumit dan bahkan tidak tertulis (Mansur, 2018; Rosdalina, 2017; Wiranata, 2005).
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                                    <div class="ms-2 me-auto">
                                                        <div class="fw-bold">Dapat Berubah dan Menyesuaikan diri</div>
                                                        Hukum adat dapat berubah karena menyesuaikan perkembangan zaman, perubahan keadaan, waktu dan tempat (Mansur, 2018; Rosdalina, 2017; Wiranata, 2005; Pidie, 2014).
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                                    <div class="ms-2 me-auto">
                                                        <div class="fw-bold">Tidak Dikodifikasi</div>
                                                        Hukum adat sebagian besar tidak dihimpun dalam suatu atau beberapa kitab undang-undang menurut sistem tertentu. Meski demikian terdapat beberapa hukum adat yang dicatat sesuai dengan tata cara setempat (Mansur, 2018; Rosdalina, 2017; Wiranata, 2005).
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                                    <div class="ms-2 me-auto">
                                                        <div class="fw-bold">Musyawarah Mufakat</div>
                                                        Hukum adat menjunjung tinggi musyawarah dan mufakat dalam setiap aktivitas, terutama dalam penyelesaian sengketa yang terjadi di tengah-tengah masyarakat melalui peradilan adat (Mansur, 2018; Wiranata, 2005).
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-start border-0">
                                                    <div class="ms-2 me-auto">
                                                        <div class="fw-bold">Tunduk pada Persekutuan Hukum Adat Tertentu</div>
                                                        Hukum adat tunduk pada tempat tertentu dan jarang sekali berlaku unifikasi untuk seluruh persekutuan hukum adat. Artinya seseorang yang melanggar hukum adat di suatu tempat, meskipun di tempat asalnya tidak mengatur hal tersebut atau berbeda sanksinya, maka hukum adat yang berlaku adalah hukum adat di tempat terjadi pelanggaran (Di mana bumi dipijak, di situ langit dijunjung) (Mansur, 2018).
                                                    </div>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button id="masyarakat" class="accordion-button <?php if (isset($_GET['t'])) {
                                                                            if ($_GET['t'] != 4) {
                                                                                echo 'collapsed';
                                                                            }
                                                                        } else {
                                                                            echo 'collapsed';
                                                                        } ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="<?php if (isset($_GET['t'])) {
                                                                                                                                                                        if ($_GET['t'] == 4) {
                                                                                                                                                                            echo 'true';
                                                                                                                                                                        } else {
                                                                                                                                                                            echo 'false';
                                                                                                                                                                        }
                                                                                                                                                                    } else {
                                                                                                                                                                        echo 'false';
                                                                                                                                                                    } ?>" aria-controls="collapseFour">
                            <h2>Masyarakat Hukum Adat</h2>
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse <?php if (isset($_GET['t'])) {
                                                                                    if ($_GET['t'] == 4) {
                                                                                        echo 'show';
                                                                                    }
                                                                                } ?>" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="accordion accordion-flush" id="accordionFour">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour-One">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour-One" aria-expanded="false" aria-controls="collapseFour-One">
                                            <h3>Pengertian</h3>
                                        </button>
                                    </h2>
                                    <div id="collapseFour-One" class="accordion-collapse collapse" aria-labelledby="headingFour-One" data-bs-parent="#accordionFour">
                                        <div class="accordion-body">Masyarakat hukum adat adalah komunitas (paguyuban) sosial manusia yang merasa bersatu karena terikat oleh kesamaan leluhur dan atau wilayah tertentu, memiliki kekayaan sendiri, dipimpin oleh seseorang atau beberapa orang yang dipandang memiliki kewibawaan atau kekuasaan, memiliki tata nilai sebagai pedoman hidup, serta tidak mempunyai keinginan untuk memisahkan diri (Rosdalina, 2017).</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour-Two">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour-Two" aria-expanded="false" aria-controls="collapseFour-Two">
                                            <h3>Macam-Macam</h3>
                                        </button>
                                    </h2>
                                    <div id="collapseFour-Two" class="accordion-collapse collapse" aria-labelledby="headingFour-Two" data-bs-parent="#accordionFour">
                                        <div class="accordion-body">
                                            <div class="accordion accordion-flush" id="accordionFour-Two">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingFour-Two-One">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour-Two-One" aria-expanded="false" aria-controls="collapseFour-Two-One">
                                                            <h5>Geneologis</h5>
                                                        </button>
                                                    </h2>
                                                    <div id="collapseFour-Two-One" class="accordion-collapse collapse" aria-labelledby="headingFour-Two-One" data-bs-parent="#accordionFour-Two">
                                                        <div class="accordion-body">
                                                            Masyarakat adat yang anggota-anggotanya merasa terikat dalam suatu ketertiban berdasarkan pada kepercayaan bahwa mereka semua berasal dari satu keturunan yang sama.
                                                            <ol class="list-group list-group-numbered">
                                                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                                                    <div class="ms-2 me-auto">
                                                                        <div class="fw-bold">Patrilineal</div>
                                                                        Susunan masyarakat yang menarik garis keturunan melalui garis keturunan bapak/ laki-laki. Contoh pada masyarakat Gayo, Batak, Bali, Ambon.
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                                                    <div class="ms-2 me-auto">
                                                                        <div class="fw-bold">Matrilineal</div>
                                                                        Susunan masyarakat yang menarik garis keturunan melalui garis keturunan ibu/ perempuan. Contoh pada masyarakat Minangkabau dan Kerinci.
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                                                    <div class="ms-2 me-auto">
                                                                        <div class="fw-bold">Patrilineal Beralih-alih</div>
                                                                        Susunan masyarakat yang menarik garis keturunan secara bergantian tergantung pada bentuk perkawinan yang dilakukan oleh orang tuanya, yaitu apakah melaui kawin jujur, kawin semendo, ataupun kawin semendo rajo-rajo. Contoh pada masyarakat Rejang Lebong dan Lampung Papadon.
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item d-flex justify-content-between align-items-start border-0">
                                                                    <div class="ms-2 me-auto">
                                                                        <div class="fw-bold">Bilateral/ Parental</div>
                                                                        Pertalian keturunan yang ditarik melalui garis bapak maupun ibu. Contoh pada masyarakat Aceh, Jawa, Sunda, Makasar.
                                                                    </div>
                                                                </li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingFour-Two-Two">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour-Two-Two" aria-expanded="false" aria-controls="collapseFour-Two-Two">
                                                            <h5>Teritorial</h5>
                                                        </button>
                                                    </h2>
                                                    <div id="collapseFour-Two-Two" class="accordion-collapse collapse" aria-labelledby="headingFour-Two-Two" data-bs-parent="#accordionFour-Two">
                                                        <div class="accordion-body">
                                                            Masyarakat adat yang anggota-anggotanya merasa terikat dalam suatu ketertiban berdasarkan pada daerah atau tanah kelahirannya, yang didiami oleh orangtuanya, neneknya, nenek moyangnya secara turun temurun.
                                                            <ol class="list-group list-group-numbered">
                                                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                                                    <div class="ms-2 me-auto">
                                                                        <div class="fw-bold">Masyarakat Hukum Desa</div>
                                                                        Segolongan atau sekumpulan orang yang hidup bersama berasaskan pandangan hidup, cara hidup dan sistem kepercayaan yang sama, mendiami daerah yang sama, merupakan satu kesatuan tata susunan tertentu baik keluar maupun ke dalam.
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                                                    <div class="ms-2 me-auto">
                                                                        <div class="fw-bold">Masyarakat Hukum Wilayah (Persekutuan Desa)</div>
                                                                        Kesatuan yang melingkupi beberapa masyarakat hukum desa yang masing-masingnya tetap merupakan kesatuan-kesatuan yang berdiri sendiri. Contoh, Kuria di Angkola dan Mandailing sebagai masyarakat hukum wilayah melingkupi beberapa Huta.
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item d-flex justify-content-between align-items-start border-0">
                                                                    <div class="ms-2 me-auto">
                                                                        <div class="fw-bold">Masyarakat Hukum Serikat Desa (Perserikatan Desa)</div>
                                                                        Satu kesatuan sosial territorial yang didasarkan pada kerjasama di berbagai lapangan demi kepentingan bersama masyakat hukum desa yang tergabung dalam masyarakat hukum serikat desa.
                                                                    </div>
                                                                </li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingFour-Two-Three">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour-Two-Three" aria-expanded="false" aria-controls="collapseFour-Two-Three">
                                                            <h5>Teritorial-Geneologis</h5>
                                                        </button>
                                                    </h2>
                                                    <div id="collapseFour-Two-Three" class="accordion-collapse collapse" aria-labelledby="headingFour-Two-Three" data-bs-parent="#accordionFour-Two">
                                                        <div class="accordion-body">Masyarakat adat yang anggota-anggotanya merasa tidak terikat hanya pada kesamaan tempat tinggal, tetapi juga terdapat ikatan darah atau keturunan yang sama. Contohnya di pedalaman Kalimantan, Irian dan Sumatera.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingFour-Two-Four">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour-Two-Four" aria-expanded="false" aria-controls="collapseFour-Two-Four">
                                                            <h5>Masyarakat Adat Perantauan</h5>
                                                        </button>
                                                    </h2>
                                                    <div id="collapseFour-Two-Four" class="accordion-collapse collapse" aria-labelledby="headingFour-Two-Four" data-bs-parent="#accordionFour-Two">
                                                        <div class="accordion-body">Masyarakat adat saat ini yang tersebar di berbagai daerah di Indonesia yang kemudian di tempat perantauannya itu membentuk suatu kelompok masyarakat perantau. Contoh Himpunan Pemuda Pelajar Lampung Banuhampu.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingFour-Two-Five">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour-Two-Five" aria-expanded="false" aria-controls="collapseFour-Two-Five">
                                                            <h5>Masyarakat Adat-Agama</h5>
                                                        </button>
                                                    </h2>
                                                    <div id="collapseFour-Two-Five" class="accordion-collapse collapse" aria-labelledby="headingFour-Two-Five" data-bs-parent="#accordionFour-Two">
                                                        <div class="accordion-body">Kesatuan masyarakat adat yang berdasarkan pada kesamaan tujuan keagamaan. Contohnya pada masyarakat Bali yang umumnya bersatu karena alasan kesamaan “pura/sanggar pemujaan”.</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour-Three">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour-Three" aria-expanded="false" aria-controls="collapseFour-Three">
                                            <h3>Persekutuan Hukum Adat</h3>
                                        </button>
                                    </h2>
                                    <div id="collapseFour-Three" class="accordion-collapse collapse" aria-labelledby="headingFour-Three" data-bs-parent="#accordionFour">
                                        <div class="accordion-body">
                                            <div class="accordion accordion-flush" id="accordionFour-Three">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingFour-Three-One">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour-Three-One" aria-expanded="false" aria-controls="collapseFour-Three-One">
                                                            <h5>Pengertian</h5>
                                                        </button>
                                                    </h2>
                                                    <div id="collapseFour-Three-One" class="accordion-collapse collapse" aria-labelledby="headingFour-Three-One" data-bs-parent="#accordionFour-Three">
                                                        <div class="accordion-body">Berbeda dengan masyarakat hukum adat yang memiliki pengertian yang bersifat umum dan luas, seperti masyarakat hukum adat Batak, Minangkabau, Sunda, Jawa, Bali dan sebagainya. Persekutuan hukum adat mengandung pengertian yang lebih sempit, misalnya persekutuan hukum adat kekerabatan, persekutuan hukum adat ketetanggaan atau keorganisasian di masyarakat hukum adat Sunda.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingFour-Three-Two">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour-Three-Two" aria-expanded="false" aria-controls="collapseFour-Three-Two">
                                                            <h5>Bentuk-Bentuk</h5>
                                                        </button>
                                                    </h2>
                                                    <div id="collapseFour-Three-Two" class="accordion-collapse collapse" aria-labelledby="headingFour-Three-Two" data-bs-parent="#accordionFour-Three">
                                                        <div class="accordion-body">
                                                            <ol class="list-group list-group-numbered">
                                                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                                                    <div class="ms-2 me-auto">
                                                                        <div class="fw-bold">Persekutuan Kekerabatan</div>
                                                                        Bentuk-benuk hubungan kekerabatan yang terjadi karena ikatan darah (geneologis) berdasarkan keturunan melalui garis bapak (patrilineal), garis ibu (matrilineal) maupun orang tua (bilateral/ parental).
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                                                    <div class="ms-2 me-auto">
                                                                        <div class="fw-bold">Persekutuan Ketetanggaan</div>
                                                                        Hubungan bersebrangan rumah yang ikatanya didasarkan pada rasa kekeluargaan karena menempati suatu wilayah seperti pedukuhan atau desa.
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item d-flex justify-content-between align-items-start border-0">
                                                                    <div class="ms-2 me-auto">
                                                                        <div class="fw-bold">Persekutuan Keorganisasian</div>
                                                                        Para anggotanya terikat dalam rasa kekeluargaan karena terhimpun dalam satu kesatuan organisasi.
                                                                    </div>
                                                                </li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button id="landasan-hukum" class="accordion-button <?php if (isset($_GET['t'])) {
                                                                                if ($_GET['t'] != 5) {
                                                                                    echo 'collapsed';
                                                                                }
                                                                            } else {
                                                                                echo 'collapsed';
                                                                            } ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="<?php if (isset($_GET['t'])) {
                                                                                                                                                                            if ($_GET['t'] == 5) {
                                                                                                                                                                                echo 'true';
                                                                                                                                                                            } else {
                                                                                                                                                                                echo 'false';
                                                                                                                                                                            }
                                                                                                                                                                        } else {
                                                                                                                                                                            echo 'false';
                                                                                                                                                                        } ?>" aria-controls="collapseFive">
                            <h2>Landasan Hukum Berlakunya Hukum Adat</h2>
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse <?php if (isset($_GET['t'])) {
                                                                                    if ($_GET['t'] == 5) {
                                                                                        echo 'show';
                                                                                    }
                                                                                } ?>" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">UUD 1945</div>
                                        - Pasal I Aturan Peralihan Undang-Undang Dasar 1945 (setelah amandemen)<br>
                                        - Pasal 24 Undang-Undang Dasar 1945
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start border-0">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Undang-Undang Nomor 48 Tahun 2009 tentang Kekuasaan Kehakiman</div>
                                        Pasal 5 ayat (1), Pasal 10 ayat (1) dan Pasal 50 ayat (1)
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                        <button id="manfaat" class="accordion-button <?php if (isset($_GET['t'])) {
                                                                            if ($_GET['t'] != 6) {
                                                                                echo 'collapsed';
                                                                            }
                                                                        } else {
                                                                            echo 'collapsed';
                                                                        } ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="<?php if (isset($_GET['t'])) {
                                                                                                                                                                        if ($_GET['t'] == 6) {
                                                                                                                                                                            echo 'true';
                                                                                                                                                                        } else {
                                                                                                                                                                            echo 'false';
                                                                                                                                                                        }
                                                                                                                                                                    } else {
                                                                                                                                                                        echo 'false';
                                                                                                                                                                    } ?>" aria-controls="collapseSix">
                            <h2>Manfaat Mempelajari Hukum Adat</h2>
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse <?php if (isset($_GET['t'])) {
                                                                                    if ($_GET['t'] == 6) {
                                                                                        echo 'show';
                                                                                    }
                                                                                } ?>" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item">Dapat memahami budaya hukum di Indonesia dan mengerti bahwa pada hakikatnya bangsa Indonesia tidak menolak unsur-unsur lain dari kebudayaan hukum asing selama tidak bertentangan dengan budaya hukum Indonesia (Rosdalina, 2017).</li>
                                <li class="list-group-item">Memahami perkembangan dan proses perubahan hukum adat saat ini seiring dengan perkembangan zaman dan tuntutan pembangunan (Rosdalina, 2017).</li>
                                <li class="list-group-item">Menemukan kaidah-kaidah hukum adat, struktur kelembagaan yang pada dasarnya masih berlaku, dasar-dasar, konsep-konsep, asas-asas, serta sisem hukum adat sebagai bukti akan kehadiran hukum adat sebagai suatu ilmu yang dapat disejajarkan dengan berbagai ilmu lain (Wiranata, 2005).</li>
                                <li class="list-group-item">Memperoleh bahan penyelesaian masalah-masalah hukum yang timbul dalam praktek hukum sekaligus bahan kerangka yang uama atau esensial bagi pembentukan hukum nasional sehingga ketika akan membentuk sistem hukum baru, betul-betul berpijak pada kondisi yang nyata (Wiranata, 2005).</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>