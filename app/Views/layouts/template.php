<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('css/sb-admin-2.min.css'); ?>" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="<?php echo base_url('css/dataTables.bootstrap4.min.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/bootstrap-clockpicker.min.css'); ?>">

</head>

<body id="page-top">

    <div id="wrapper">
        <?= $this->include('layouts/sidebar'); ?>
        <?= $this->renderSection('content'); ?>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('js/bootstrap.bundle.min.js'); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('js/jquery.easing.min.js'); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('js/sb-admin-2.min.js'); ?>"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url('js/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?php echo base_url('js/dataTables.bootstrap4.min.js'); ?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url('js/datatables-demo.js'); ?>"></script>

    <script type="text/javascript" src="<?php echo base_url('js/bootstrap-clockpicker.min.js'); ?>"></script>

    <script>
        $('.clockpicker-mulai').clockpicker({
            donetext: 'Selesai'
        });
        $('.clockpicker-selesai').clockpicker({
            donetext: 'Selesai'
        });

        var url = "<?php echo base_url(); ?>";

        function previewImg() {
            const img = document.querySelector('.img-preview');
            const foto = document.querySelector('#customFile');


            const fileFoto = new FileReader();
            fileFoto.readAsDataURL(foto.files[0]);


            fileFoto.onload = function(e) {
                img.src = e.target.result;
            }
        }

        $(document).ready(function() {

            $('#dataTable-kelas-siswa').DataTable({
                "columnDefs": [{
                    "targets": [0, 1, 2, 4],
                    "searchable": false
                }],
                "oLanguage": {
                    "sSearch": "Cari Kelas"
                }

            });
            $(".custom-file-input").on("change", function() {
                var fileName = $(this).val().split("\\").pop();
                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });


        });
    </script>

</body>

</html>