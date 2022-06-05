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

            <div class="alert alert-primary" role="alert">
                <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-person-chalkboard"></i> Daftar Kelas Siswa</h1>
            </div>

            <!-- Content Row -->



            <!-- END -->
            <div class="row">

                <!-- Area Chart -->
                <div class="col-xl-12 col-lg-12">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

                            <form action="/siswa/cari" method="post">
                                <div class="d-flex flex-row align-items-center justify-content-between">
                                    <select class="form-control" name="kelas">
                                        <option value="0">--Pilih Kelas--</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                    <button type="submit" name="action" class="btn btn-primary ml-1" value="naik">Naik</button>

                                </div>

                            </form>
                            <br>

                            <?php if (session()->getFlashdata('success')) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?= session()->getFlashdata('success'); ?>
                                </div>
                            <?php endif; ?>
                            <?php if (session()->getFlashdata('failed')) : ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= session()->getFlashdata('failed'); ?>
                                </div>
                            <?php endif; ?>



                        </div>

                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="dataTable-kelas-siswa" width="100%" cellspacing="0">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>No</th>
                                            <th>NIS</th>
                                            <th>Nama Siswa</th>
                                            <th>Kelas</th>
                                            <th>Alamat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($siswa as $data) : ?>
                                            <tr>
                                                <td class="col-md-1"><?= $i++; ?></td>
                                                <td class="col-md-2"><?= $data['nis']; ?></td>
                                                <td class="col-md-2"><?= $data['nama']; ?></td>
                                                <td class="col-md-2"><?= $data['kelas']; ?></td>
                                                <td class="col-md-3"><?= $data['alamat']; ?></td>

                                                <td class="col-md-1">
                                                    <a href="siswa/show/<?= $data['id']; ?>" class="btn btn-success"><i class="fas fa-fw fa-eye"></i></a>
                                                </td>
                                            </tr>

                                        <?php endforeach; ?>


                                    </tbody>
                                </table>
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