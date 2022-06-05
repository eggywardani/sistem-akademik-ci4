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
                <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-person-chalkboard"></i> Ubah Siswa : <?= $siswa['nama']; ?></h1>
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
                            <form class="m-3" method="POST" action="/siswa/update/<?= $siswa['id']; ?>" enctype="multipart/form-data">
                                <?= csrf_field(); ?>
                                <div class="form-group row">
                                    <label for="nis" class="col-sm-2 col-form-label">Nomor Induk Siswa</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="nis" class="form-control" id="nis" placeholder="Nomor Induk Siswa" required value="<?= $siswa['nis']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama" class="col-sm-2 col-form-label">Nama Siswa</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Siswa" required value="<?= $siswa['nama']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="agama">
                                            <option value="Islam" <?= ($siswa['agama'] == 'Islam') ? 'selected' : ''; ?>>Islam</option>
                                            <option value="Protestan" <?= ($siswa['agama'] == 'Protestan') ? 'selected' : ''; ?>>Protestan</option>
                                            <option value="Katolik" <?= ($siswa['agama'] == 'Katolik') ? 'selected' : ''; ?>>Katolik</option>
                                            <option value="Hindu" <?= ($siswa['agama'] == 'Hindu') ? 'selected' : ''; ?>>Hindu</option>
                                            <option value="Buddha" <?= ($siswa['agama'] == 'Buddha') ? 'selected' : ''; ?>>Buddha</option>
                                            <option value="Khonghucu" <?= ($siswa['agama'] == 'Khonghucu') ? 'selected' : ''; ?>>Khonghucu</option>




                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jekel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="jekel">
                                            <option value="Laki-laki" <?= ($siswa['jekel'] == 'Laki-laki') ? 'selected' : ''; ?>>Laki-laki</option>
                                            <option value="Perempuan" <?= ($siswa['jekel'] == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>


                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir" required value="<?= $siswa['tempat_lahir']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" placeholder="Tanggal Lahir" required value="<?= $siswa['tanggal_lahir']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat" required value="<?= $siswa['alamat']; ?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="no_hp" class="col-sm-2 col-form-label">Nomor HP</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="no_hp" class="form-control" id="no_hp" placeholder="Nomor HP" required value="<?= $siswa['no_hp']; ?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="kelas">
                                            <option value="1" <?= ($siswa['kelas'] == '1') ? 'selected' : ''; ?>>1</option>
                                            <option value="2" <?= ($siswa['kelas'] == '2') ? 'selected' : ''; ?>>2</option>
                                            <option value="3" <?= ($siswa['kelas'] == '3') ? 'selected' : ''; ?>>3</option>
                                            <option value="4" <?= ($siswa['kelas'] == '4') ? 'selected' : ''; ?>>4</option>
                                            <option value="5" <?= ($siswa['kelas'] == '5') ? 'selected' : ''; ?>>5</option>
                                            <option value="6" <?= ($siswa['kelas'] == '6') ? 'selected' : ''; ?>>6</option>


                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required value="<?= $siswa['password']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="nik" class="form-control" id="nik" placeholder="Nomor Induk Kependudukan" required value="<?= $siswa['nik']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="no_kk" class="col-sm-2 col-form-label">Nomor KK</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="no_kk" class="form-control" id="no_kk" placeholder="Nomor Kartu Keluarga" required value="<?= $siswa['no_kk']; ?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                                    <div class="col-sm-10">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile" name="foto" onchange="previewImg()">
                                            <label class="custom-file-label" for="customFile"><?= $siswa['foto']; ?></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="foto" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <img src="/img/<?= $siswa['foto']; ?>" class="img-thumbnail img-preview">
                                    </div>
                                </div>
                                <input type="hidden" name="old-foto" class="form-control" required value="<?= $siswa['foto']; ?>">
                                <div class="form-group row">
                                    <label for="foto" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Ubah</button>
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