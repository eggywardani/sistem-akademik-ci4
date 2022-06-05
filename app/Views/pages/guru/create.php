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
                <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-person-chalkboard"></i> Tambah Guru</h1>
            </div>

            <!-- Content Row -->



            <!-- END -->
            <div class="row">

                <!-- Area Chart -->
                <div class="col-xl-12 col-lg-12">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">


                            <?php if (session()->getFlashdata('success')) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?= session()->getFlashdata('success'); ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- Card Body -->
                        <div class="card-body">
                            <form class="m-3" method="POST" action="/guru/save" enctype="multipart/form-data">
                                <?= csrf_field(); ?>
                                <div class="form-group row">
                                    <label for="nip" class="col-sm-2 col-form-label">NIP</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nip" class="form-control" id="nip" placeholder="NIP Guru" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama" class="col-sm-2 col-form-label">Nama Guru</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Guru" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" placeholder="Tanggal Lahir" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pangkat" class="col-sm-2 col-form-label">Pangkat/Golongan</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="pangkat" class="form-control" id="pangkat" placeholder="Pangkat/Golongan" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tmt" class="col-sm-2 col-form-label">Terhitung Mulai Tanggal</label>
                                    <div class="col-sm-10">
                                        <input type="date" name="tmt" class="form-control" id="tmt" placeholder="Terhitung Mulai Tanggal" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="pend_terakhir" class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="pend_terakhir" class="form-control" id="pend_terakhir" placeholder="Pendidikan Terakhir" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="no_hp" class="col-sm-2 col-form-label">Nomor HP</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="no_hp" class="form-control" id="no_hp" placeholder="Nomor HP" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="no_hp" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="jekel">
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                                    <div class="col-sm-10">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile" name="foto" onchange="previewImg()">
                                            <label class="custom-file-label" for="customFile">Pilih Gambar</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="foto" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <img src="/img/img.png" class="img-thumbnail img-preview">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="foto" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>






                            </form>
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