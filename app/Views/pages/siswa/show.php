<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>

<!-- Page Wrapper -->


<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <?= $this->include('layouts/topbar'); ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->



            <!-- Content Row -->



            <!-- END -->
            <div class="row">

                <!-- Area Chart -->
                <div class="col-xl-12 col-lg-12">
                    <div class="card shadow mb-4">


                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="row ml-3">
                                <p class="font-weight-bold text-black">IDENTITAS SISWA</p>
                            </div>
                            <div class="row ml-4">
                                <label class="col-sm-3 col-form-label">Nama Siswa</label>
                                <label class="col-sm-9 col-form-label">: &nbsp &nbsp <?= $siswa['nama']; ?></label>
                            </div>
                            <div class="row ml-4">
                                <label class="col-sm-3 col-form-label">Nomor Induk Siswa</label>
                                <label class="col-sm-9 col-form-label">: &nbsp &nbsp <?= $siswa['nis']; ?></label>
                            </div>
                            <div class="row ml-4">
                                <label class="col-sm-3 col-form-label">Nomor Induk Kependudukan</label>
                                <label class="col-sm-9 col-form-label">: &nbsp &nbsp <?= $siswa['nik']; ?></label>
                            </div>
                            <div class="row ml-4">
                                <label class="col-sm-3 col-form-label">Nomor Kartu Keluarga</label>
                                <label class="col-sm-9 col-form-label">: &nbsp &nbsp <?= $siswa['no_kk']; ?></label>
                            </div>
                            <div class="row ml-4">
                                <label class="col-sm-3 col-form-label">Tempat, Tanggal Lahir</label>
                                <label class="col-sm-9 col-form-label">: &nbsp &nbsp <?= $siswa['tempat_lahir']; ?>, <?= date_format(date_create($siswa['tanggal_lahir']), "d F Y"); ?></label>
                            </div>
                            <div class="row ml-4">
                                <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                <label class="col-sm-9 col-form-label">: &nbsp &nbsp <?= $siswa['jekel']; ?></label>
                            </div>
                            <div class="row ml-4">
                                <label class="col-sm-3 col-form-label">Agama</label>
                                <label class="col-sm-9 col-form-label">: &nbsp &nbsp <?= $siswa['agama']; ?></label>
                            </div>
                            <div class="row ml-4">
                                <label class="col-sm-3 col-form-label">Alamat</label>
                                <label class="col-sm-9 col-form-label">: &nbsp &nbsp <?= $siswa['alamat']; ?></label>
                            </div>
                            <div class="row ml-4 mt-2">
                                <img class="col-sm-3 " src="/img/<?= $siswa['foto']; ?>" width="100px" height="200px">

                            </div>




                        </div>
                    </div>
                </div>


            </div>



        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Your Website 2021</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

</div>


<?= $this->endSection(); ?>