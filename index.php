<?php include "functions/head.php" ?>
<?php $page = "home" ?>

<body>
    <?php include "functions/navbar.php" ?>
    <?php include "functions/carousel.php" ?>

    <!-- Content Agenda -->
    <section class="cConhome">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4>Agenda - Universitas Ngudi Waluyo</h4>
                    <hr>
                </div>
            </div>
            <!-- Table -->
            <div class="row">
                <div class="col-12">
                    <table class="table table-striped table-bordered">
                        <thead class="text-white">
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Agenda</th>
                                <th scope="col">Penyelenggara</th>
                                <th scope="col">Waktu</th>
                                <th scope="col">Tempat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 1; $i <= 5; $i++) : ?>
                                <tr>
                                    <th scope="row"><?= $i ?></th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
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