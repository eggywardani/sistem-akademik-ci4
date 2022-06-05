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

                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            Detail Jadwal
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">

                            <div class="row ml-4">
                                <label class="col-sm-3 col-form-label">Mata Pelajaran</label>
                                <label class="col-sm-9 col-form-label">: &nbsp &nbsp <?= $jadwal->nama_mapel; ?></label>
                            </div>
                            <div class="row ml-4">
                                <label class="col-sm-3 col-form-label">Hari</label>
                                <label class="col-sm-9 col-form-label">: &nbsp &nbsp <?= $jadwal->hari; ?></label>
                            </div>
                            <div class="row ml-4">
                                <label class="col-sm-3 col-form-label">Jam</label>
                                <label class="col-sm-9 col-form-label">: &nbsp &nbsp <?= $jadwal->jam_mulai; ?> - <?= $jadwal->jam_selesai; ?></label>
                            </div>
                            <div class="row ml-4">
                                <label class="col-sm-3 col-form-label">Semester</label>
                                <label class="col-sm-9 col-form-label">: &nbsp &nbsp <?= $jadwal->semester; ?> <?= $jadwal->tahun_ajaran; ?></label>
                            </div>
                            <div class="row ml-4">
                                <label class="col-sm-3 col-form-label">Guru Pengampu</label>
                                <label class="col-sm-9 col-form-label">: &nbsp &nbsp <?= $jadwal->nama; ?></label>
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