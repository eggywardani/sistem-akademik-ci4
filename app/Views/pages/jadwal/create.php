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
                <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-calendar-days"></i> Tambah Jadwal</h1>
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
                            <form class="m-3" method="POST" action="/jadwal/save">
                                <?= csrf_field(); ?>
                                <div class="form-group row">
                                    <label for="tahun_ajaran" class="col-sm-2 col-form-label">Tahun Ajaran</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="tahun_ajaran">
                                            <option value="2022/2023">2022/2023</option>
                                            <option value="2021/2022">2021/2022</option>
                                            <option value="2020/2021">2020/2021</option>
                                            <option value="2019/2020">2019/2020</option>
                                            <option value="2018/2019">2018/2019</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="guru" class="col-sm-2 col-form-label">Guru Pengampu</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="guru">
                                            <?php foreach ($guru as $data) : ?>
                                                <option value="<?= $data['id']; ?>"><?= $data['nama']; ?></option>
                                            <?php endforeach; ?>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="mapel" class="col-sm-2 col-form-label">Mata Pelajaran</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="mapel">
                                            <?php foreach ($mapel as $data) : ?>
                                                <option value="<?= $data->id; ?>"><?= $data->nama_mapel; ?></option>
                                            <?php endforeach; ?>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="kelas">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="semester" class="col-sm-2 col-form-label">Semester</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="semester">
                                            <option value="Gasal">Gasal</option>
                                            <option value="Genap">Genap</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="hari" class="col-sm-2 col-form-label">Hari</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="hari">
                                            <option value="Senin">Senin</option>
                                            <option value="Selasa">Selasa</option>
                                            <option value="Rabu">Rabu</option>
                                            <option value="Kamis">Kamis</option>
                                            <option value="Jumat">Jumat</option>
                                            <option value="Sabtu">Sabtu</option>
                                            <option value="Minggu">Minggu</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="jam" class="col-sm-2 col-form-label">Jam</label>
                                    <div class="col-sm-4 clockpicker-mulai">
                                        <input type="text" class="form-control" value="09:30" name="jam_mulai">
                                    </div>
                                    <div class="col-sm-2">
                                        <center>s/d</center>
                                    </div>

                                    <div class="col-sm-4 clockpicker-selesai">
                                        <input type="text" class="form-control" value="09:30" name="jam_selesai">
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