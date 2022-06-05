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
                <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-book"></i> Mata Pelajaran</h1>
            </div>

            <!-- Content Row -->



            <div class="row">

                <!-- Area Chart -->
                <div class="col-xl-12 col-lg-12">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <a href="/mapel/create" class="btn btn-primary"><i class="fas fa-fw fa-plus mr-2"></i>Tambah Mata Pelajaran</a>
                            <br>

                            <?php if (session()->getFlashdata('success')) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?= session()->getFlashdata('success'); ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Mapel</th>
                                            <th>Guru Pengampu</th>
                                            <th>Kelas</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($mapel as $data) : ?>
                                            <tr>
                                                <td><?= $i++; ?></td>
                                                <td><?= $data->nama_mapel; ?></td>
                                                <td><?= $data->nama_guru; ?></td>
                                                <td><?= $data->kelas; ?></td>
                                                <td>
                                                    <a href="mapel/show/<?= $data->id; ?>" class="btn btn-success"><i class="fas fa-fw fa-eye"></i></a>

                                                    <a href="mapel/delete/<?= $data->id ?>" class="btn btn-danger"><i class="fas fa-fw fa-trash-can"></i></a>
                                                    <a href="mapel/edit/<?= $data->id; ?>" class="btn btn-warning"><i class="fas fa-fw fa-pen-to-square"></i></a>

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