<?php include "functions/head.php" ?>
<?php $page = "aset" ?>

<body>
    <?php include "functions/navbar.php" ?>

    <!-- Content Table Data Gedung -->
    <section class="cContent">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4>Data Inventaris - Universitas Ngudi Waluyo</h4>
                    <hr>
                        <p>
                            Data inventaris yang ada di Universitas Ngudi Waluyo. Untuk mencetak data tanah dalam bentuk .pdf, silahkan lakukan login.
                        </p>
                </div>
            </div>
            <!-- Table -->
            <div class="row">
                <div class="col-12">
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
    </section>
    <?php include "functions/bottom_widget.php" ?>
    <?php include "functions/footer.php" ?>
    <?php include "functions/script.php" ?>
</body>

</html>