<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <a class="navbar-brand" href="#">Aset dan Penyusutan</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item <?= $page == 'home' ? 'active' : '' ?>">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item <?= $page == 'aset' ? 'active' : '' ?>">
                <a class="nav-link" href="aset.php">Aset</a>
            </li>
            <li class="nav-item <?= $page == 'pruang' ? 'active' : '' ?>">
                <a class="nav-link" href="#">Penggunaan Ruang</a>
            </li>
            <li class="nav-item <?= $page == 'pkendaraan' ? 'active' : '' ?>">
                <a class="nav-link" href="#">Penggunaan Kendaraan</a>
            </li>
            <!-- <li class="nav-item <?= $page == 'drenovasi' ? 'active' : '' ?>">
                <a class="nav-link" href="#">Daftar Renovasi</a>
            </li> -->
            <li class="nav-item <?= $page == 'login' ? 'active' : '' ?>">
                <a class="nav-link" href="#">Login</a>
            </li>
        </ul>
    </div>
</nav>