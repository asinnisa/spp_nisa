<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-item">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="" target="_blank">
            <img src="<?= base_url(); ?>/assets/img/rpl.jpg" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">Aplikasi SPP</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">

    <ul class="navbar-nav">
        <li class="nav-item ">
            <a class="nav-link active" href="<?= base_url('dashboard'); ?>">
                <div class="icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                    <img src="<?php echo base_url() ?>assets/img/dashboard.jpg" width="70px" height="40px">
                    
                </div>
                <span class="nav-link-text ms-1">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="<?= base_url('admin/guru'); ?>">
                <div class="icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                    <img src="<?php echo base_url() ?>assets/img/CPNS.png" width="60px" height="40px">
                </div>
                <span class="nav-link-text ms-1">Data Guru</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link active " href="<?= base_url('admin/siswa'); ?>">
                <div class="icon-shape bg-white text-center me-2 d-flex align-items-center justify-content-center">
                    <img src="<?php echo base_url() ?>assets/img/SMA.png" width="60px" height="40px">
                </div>
                <span class="nav-link-text ms-1">Data siswa</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link active " href="<?= base_url('admin/transaksi'); ?>">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                    <img src="<?php echo base_url() ?>assets/img/bayar.jpg" width="70px" height="40px">
                </div>
                <span class="nav-link-text ms-1">Transaksi</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link active " href="<?= base_url('admin/laporan'); ?>">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                    <img src="<?php echo base_url() ?>assets/img/r.jpg" width="70px" height="40px">
                </div>
                <span class="nav-link-text ms-1">Laporan </span>
            </a>
        </li>
        <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Halaman Akun</h6>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="<?php echo base_url('admin/user') ?>">
                <div class="icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                    <img src="<?php echo base_url() ?>assets/img/profil.jpg" width="70px" height="40px">
                </div> 
                <span class="nav-link-text ms-1">Profil</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="<?php echo base_url('admin/user/ubahPassword') ?>">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                    <img src="<?php echo base_url() ?>assets/img/password.jpg" width="70px" height="40px">
                </div>
                <span class="nav-link-text ms-1">Ubah Password</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="<?= base_url('auth/logout'); ?>">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                    <img src="<?php echo base_url() ?>assets/img/logout.jpg" width="70px" height="40px">
                </div>
                <span class="nav-link-text ms-1">logout</span>
            </a>
        </li>

        <li class="nav-item">
        <a class="nav-link active" href="<?= base_url('auth/logout'); ?>">
                <div class=" bg-white text-center me-2 d-flex align-items-center justify-content-center">
                    
                </div>
                <div>
    <style>
        body {
        margin: 20px;
        padding: 20px;
        background-color: #fcfcfc;
        color: #333333;
        transition: .5s;
        }
        input[type="checkbox"]{
        position: relative;
        width: 40px;
        height: 20px;
        appearance: none;
        background-color: #434343;
        outline: none;
        border-radius: 10px;
        transition: .5s ease;
        cursor: pointer;
        }
        input[type="checkbox"]:checked{
            background-color: #3664ff;
        }
        input[type="checkbox"]::before{
        content: '';
        position: absolute;
        width: 16px;
        height: 16px;
        background-color: #fcfcfc;
        border-radius: 50%;
        top: 2px;
        left: 2px;
        transition: .5s ease;
        }
        input[type="checkbox"]:checked::before{
            transform: translate(20px);

        }
        .dark{
            background-color: #333333;
            color: #fcfcfc;
        }
    </style>
    </div>
    <body>
        
    
    <input type="checkbox" onclick="ubahMode()">
    <script>
    function ubahMode(){
        const ubah = document.body;
        ubah.classList.toggle("dark");

    }
    </script>
    </body>
        
            </a>
        </li>
    </ul>

</aside>