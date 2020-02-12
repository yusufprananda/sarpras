<?php include "functions/head.php" ?>
<?php $page = "aset" ?>

<body>
    <?php include "functions/navbar.php" ?>

    <!-- Content Table Data Gedung -->
    <section class="cContent">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="nav flex-column nav-pills cSidemenu" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active cSidemenu-item" id="v-pills-dataTanah-tab" data-toggle="pill" href="#v-pills-dataTanah" role="tab" aria-controls="v-pills-dataTanah" aria-selected="true">Data Tanah</a>
                        <a class="nav-link cSidemenu-item" id="v-pills-dataGedung-tab" data-toggle="pill" href="#v-pills-dataGedung" role="tab" aria-controls="v-pills-dataGedung" aria-selected="false">Data Gedung</a>
                        <a class="nav-link cSidemenu-item" id="v-pills-dataRuang-tab" data-toggle="pill" href="#v-pills-dataRuang" role="tab" aria-controls="v-pills-dataRuang" aria-selected="false">Data Ruang</a>
                        <a class="nav-link cSidemenu-item" id="v-pills-inventaris-tab" data-toggle="pill" href="#v-pills-inventaris" role="tab" aria-controls="v-pills-inventaris" aria-selected="false">Inventaris</a>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-dataTanah" role="tabpanel" aria-labelledby="v-pills-dataTanah-tab">
                            <h4>Data Aset Gedung - Universitas Ngudi Waluyo</h4>
                            <hr>
                            <p>Data aset gedung yang ada di Universitas Ngudi Waluyo. Untuk mencetak data tanah dalam bentuk .pdf, silahkan lakukan login.</p>
                            <table class="table table-striped table-bordered">
                                <thead class="text-white">
                                    <tr>
                                        <th scope="col">Nama Kampus (Area)</th>
                                        <th scope="col">Luas Tanah</th>
                                        <th scope="col">Lokasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i = 1; $i <= 5; $i++) : ?>
                                        <tr>
                                            <td>Diponegoro</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                        </tr>
                                    <?php endfor; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="v-pills-dataGedung" role="tabpanel" aria-labelledby="v-pills-dataGedung-tab">
                            <h4>Data Aset Gedung - Universitas Ngudi Waluyo</h4>
                            <hr>
                            <p>Data aset gedung yang ada di Universitas Ngudi Waluyo. Untuk mencetak data tanah dalam bentuk .pdf, silahkan lakukan login.</p>
                            <table class="table table-striped table-bordered">
                                <thead class="text-white">
                                    <tr>
                                        <th scope="col">Nama Kampus</th>
                                        <th scope="col">Nama Gedung</th>
                                        <th scope="col">Luas Gedung</th>
                                        <th scope="col">Jumlah Lantai</th>
                                        <th scope="col">Tempat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i = 1; $i <= 5; $i++) : ?>
                                        <tr>
                                            <td>Diponegoro</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                        </tr>
                                    <?php endfor; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="v-pills-dataRuang" role="tabpanel" aria-labelledby="v-pills-dataRuang-tab">
                            <h4>Data Aset Ruang - Universitas Ngudi Waluyo</h4>
                            <hr>
                            <p>Data aset ruangan yang ada di Universitas Ngudi Waluyo. Untuk mencetak data tanah dalam bentuk .pdf, silahkan lakukan login.</p>
                            <table class="table table-striped table-bordered">
                                <thead class="text-white">
                                    <tr>
                                        <th scope="col">Nama Gedung</th>
                                        <th scope="col">Fakultas / Unit</th>
                                        <th scope="col">Nama Ruang (Keterangan)</th>
                                        <th scope="col">Luas</th>
                                        <th scope="col">Kapasitas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i = 1; $i <= 5; $i++) : ?>
                                        <tr>
                                            <td>Diponegoro</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                        </tr>
                                    <?php endfor; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="v-pills-inventaris" role="tabpanel" aria-labelledby="v-pills-inventaris-tab">
                            <h4>Data Inventaris - Universitas Ngudi Waluyo</h4>
                            <hr>
                            <p>Data Inventaris yang ada di Universitas Ngudi Waluyo. Untuk mencetak data tanah dalam bentuk .pdf, silahkan lakukan login.</p>
                            <table class="table table-striped table-bordered">
                                <thead class="text-white">
                                    <tr>
                                        <th scope="col">Fakultas / Unit</th>
                                        <th scope="col">Nama Ruang (Keterangan)</th>
                                        <th scope="col">Inventaris</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i = 1; $i <= 5; $i++) : ?>
                                        <tr>
                                            <td>Diponegoro</td>
                                            <td>Mark</td>
                                            <td>
                                                <table class="table table-striped">
                                                    <thead class="text-white">
                                                        <tr>
                                                            <th scope="col">Jenis</th>
                                                            <th scope="col">Jumlah</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php for ($j = 1; $j <= 5; $j++) : ?>
                                                            <tr>
                                                                <td>Diponegoro</td>
                                                                <td>Mark</td>
                                                            </tr>
                                                        <?php endfor; ?>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    <?php endfor; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include "functions/bottom_widget.php" ?>
    <?php include "functions/footer.php" ?>
    <?php include "functions/script.php" ?>
</body>

</html>