<!-- Page Header-->
<header class="masthead" style="background-image: url('assets/img/enshi-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>Kamus Hukum Adat</h1>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Page Content -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <table id="table" class="table-responsive" data-toggle="table" data-search="true" data-pagination="true" data-sort-class="table-active" data-sortable="true">
                <thead>
                    <tr>
                        <th data-field="istilah" data-sortable="true">Istilah</th>
                        <th data-field="makna">Makna</th>
                        <th data-field="sumber" data-sortable="true">Sumber</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($kamus as $k) : ?>
                        <tr>
                            <td><?= $k['term']; ?></td>
                            <td><?= $k['mean']; ?></td>
                            <td><?= $k['source']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>