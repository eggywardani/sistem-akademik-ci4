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
                                <p class="font-weight-bold text-black">IDENTITAS GURU</p>
                            </div>

                            <div class="row ml-4 mt-3 mb-3">
                                <div class="col-4"></div>
                                <img class="col-4 " src="/img/<?= $guru['foto']; ?>" width="100px" height="200px">
                                <div class="col-4"></div>
                            </div>
                            <div class="row ml-4">
                                <label class="col-sm-3 col-form-label">Nama Guru</label>
                                <label class="col-sm-9 col-form-label">: &nbsp &nbsp <?= $guru['nama']; ?></label>
                            </div>
                            <div class="row ml-4">
                                <label class="col-sm-3 col-form-label">Nomor Induk Pegawai</label>
                                <label class="col-sm-9 col-form-label">: &nbsp &nbsp <?= $guru['nip']; ?></label>
                            </div>

                            <div class="row ml-4">
                                <label class="col-sm-3 col-form-label">Tempat, Tanggal Lahir</label>
                                <label class="col-sm-9 col-form-label">: &nbsp &nbsp <?= $guru['tempat_lahir']; ?>, <?= date_format(date_create($guru['tanggal_lahir']), "d F Y"); ?></label>
                            </div>
                            <div class="row ml-4">
                                <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                <label class="col-sm-9 col-form-label">: &nbsp &nbsp <?= $guru['jekel']; ?></label>
                            </div>

                            <div class="row ml-4">
                                <label class="col-sm-3 col-form-label">Alamat</label>
                                <label class="col-sm-9 col-form-label">: &nbsp &nbsp <?= $guru['alamat']; ?></label>
                            </div>
                            <div class="row ml-4">
                                <label class="col-sm-3 col-form-label">Pendidikan Terakhir</label>
                                <label class="col-sm-9 col-form-label">: &nbsp &nbsp <?= $guru['pendidikan_terakhir']; ?></label>
                            </div>
                            <div class="row ml-4">
                                <label class="col-sm-3 col-form-label">Nomor HP</label>
                                <label class="col-sm-9 col-form-label">: &nbsp &nbsp <?= $guru['no_hp']; ?></label>
                            </div>
                            <div class="row ml-4">
                                <label class="col-sm-3 col-form-label">Pangkat / Golongan</label>
                                <label class="col-sm-9 col-form-label">: &nbsp &nbsp <?= $guru['pangkat_golongan']; ?></label>
                            </div>
                            <div class="row ml-4">
                                <label class="col-sm-3 col-form-label">Terhitung Mulai Tugas</label>
                                <label class="col-sm-9 col-form-label">: &nbsp &nbsp <?= date_format(date_create($guru['tmt']), "d F Y"); ?></label>
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