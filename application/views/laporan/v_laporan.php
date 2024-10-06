<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url().'assets/css/bootstrap.min.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/style.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/font-awesome.css'?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url().'assets/css/4-col-portfolio.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/dataTables.bootstrap.min.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/jquery.dataTables.min.css'?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap-datetimepicker.min.css'?>">
    <link href="<?php echo base_url().'assets/dist/css/bootstrap-select.css'?>" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
   <?php 
        $this->load->view('admin/menu');
   ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Data
                    <small>Laporan</small>
                    <div class="pull-right" style="padding-right: 10px;"><a href="<?php echo site_url('administrator/berhasil') ?>" class="btn btn-sm btn-info"><span class="fa fa-backward"></span> Kembali</a></div>
                </h1>
            </div>
        </div>
        <!-- /.row -->
        <!-- Projects Row -->
        <div class="row">
            <div class="col-lg-12">
            <table class="table table-bordered table-condensed" style="font-size:12px;" >
                <thead>
                    <tr>
                        <th style="text-align:center;width:40px;">No</th>
                        <th>Laporan</th>
                        <th style="width:150px;text-align:center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                
                    <tr id="a">
                        <td style="text-align:center;vertical-align:middle">1</td>
                        <td style="vertical-align:middle;">Daftar Barang</td>
                        <td style="text-align:center;">
                            <a href="#" class="btn btn-sm btn-default" data-toggle="modal" data-target="#largeModal"><span class="fa fa-print"></span> Print</a>
                           <!--  <a class="btn btn-sm btn-default" href="<?php echo site_url('laporan/lap_data_barang')?>" target="_blank"><span class="fa fa-print"></span> Print</a> -->

                        </td>
                    </tr>
<!-- 
                    <tr>
                        <td style="text-align:center;vertical-align:middle">2</td>
                        <td style="vertical-align:middle;">Daftar Barang (Basah)</td>
                        <td style="text-align:center;">
                            <a href="#" class="btn btn-sm btn-default" data-toggle="modal" data-target="#largeModal"><span class="fa fa-edit"></span> Kop Surat</a>
                            <a class="btn btn-sm btn-default" href="<?php echo site_url('laporan/lap_data_barang_basah')?>" target="_blank"><span class="fa fa-print"></span> Print</a>
                        </td>
                    </tr> -->

                    <tr id="a">
                        <td style="text-align:center;vertical-align:middle">2</td>
                        <td style="vertical-align:middle;">Daftar Penawaran Harga</td>
                        <td style="text-align:center;">
                            <a href="#" class="btn btn-sm btn-default" data-toggle="modal" data-target="#basah"><span class="fa fa-print"></span> Print</a>
                            <!-- <a class="btn btn-sm btn-default" href="<?php echo site_url('laporan/lap_data_barang_pembeli')?>" target="_blank"><span class="fa fa-print"></span> Print</a> -->
                        </td>
                    </tr>

                   <!--  <tr>
                        <td style="text-align:center;vertical-align:middle">4</td>
                        <td style="vertical-align:middle;">Daftar Penawaran Harga (Basah)</td>
                        <td style="text-align:center;">
                            <a href="#" class="btn btn-sm btn-default" data-toggle="modal" data-target="#largeModal"><span class="fa fa-edit"></span> Kop Surat</a>
                            <a class="btn btn-sm btn-default" href="<?php echo site_url('laporan/lap_data_barang_pembeli_basah')?>" target="_blank"><span class="fa fa-print"></span> Print</a>
                        </td>
                    </tr>
 -->
<!--                     <tr id="a">
                        <td style="text-align:center;vertical-align:middle">3</td>
                        <td style="vertical-align:middle;">Laporan Penjualan PerTanggal</td>
                        <td style="text-align:center;">
                            <a class="btn btn-sm btn-default" href="#" data-toggle="modal" data-target="#lap_jual_pertanggal"><span class="fa fa-print"></span> Print</a>
                        </td>
                    </tr>

                    <tr id="a">
                        <td style="text-align:center;vertical-align:middle">4</td>
                        <td style="vertical-align:middle;">Laporan Penjualan PerBulan</td>
                        <td style="text-align:center;">
                            <a class="btn btn-sm btn-default" href="#lap_jual_perbulan" data-toggle="modal"><span class="fa fa-print"></span> Print</a>
                        </td>
                    </tr>

                    <tr id="a">
                        <td style="text-align:center;vertical-align:middle">5</td>
                        <td style="vertical-align:middle;">Laporan Penjualan PerTahun</td>
                        <td style="text-align:center;">
                            <a class="btn btn-sm btn-default" href="#lap_jual_pertahun" data-toggle="modal"><span class="fa fa-print"></span> Print</a>
                        </td>
                    </tr> -->
              
                </tbody>
            </table>
            </div>
        </div>
        <style type="text/css">
            #a:hover{background-color: #c9c9c9;}
        </style>
        <!-- /.row -->
  <!-- ============ MODAL ADD =============== -->
        <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Silahkan isi data tersebut.</h3>
            </div>
            <div class="form-horizontal">
            <form action="<?php echo site_url('laporan/lap_data_barang') ?>" method="post" target="_blank" >
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3">Kategori</label>
                    <div class="col-xs-9">
                    <select name="kategori" class="show-tick form-control" data-live-search="true" placeholder="Pilih Jenis Barang" style="width: 280px;">
                        <option value="Bahan Pangan">Bahan Pangan </option>
                        <option value="Barang Non-Food">Barang Non-Food</option>
                        <option value="Buah-Buahan">Buah-Buahan </option>
                        <option value="Sayuran">Sayuran</option>
                        <option value="Bumbu Dapur">Bumbu Dapur</option>
                        <option value="Bahan Pangan dan Lain-lain">Bahan Pangan dan Lain-lain</option>
                        <option value="Lauk Pauk">Lauk Pauk</option>
                        <option value="semua">Semua</option>
                    </select>
                    </div>
                    </div>
                    <!-- <div class="form-group">
                        <label class="control-label col-xs-3" >Periode</label>
                        <div class="col-xs-9">
                            <input name="periode" class="form-control" type="text" style="width:280px;" required>
                        </div>
                    </div>  -->
                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info">Simpan</button>
                </div>
           </form>
        </div>
            </div>
            </div>
        </div>
  <!-- ============ MODAL ADD =============== -->
        <div class="modal fade" id="basah" tabindex="-1" role="dialog" aria-labelledby="basah" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Silahkan isi data tersebut.</h3>
            </div>
            <div class="form-horizontal">
            <form action="<?php echo site_url('laporan/lap_data_barang_pembeli') ?>" method="post" target="_blank" >
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3">Kategori</label>
                    <div class="col-xs-9">
                    <select name="kategori" class="show-tick form-control" data-live-search="true" placeholder="Pilih Jenis Barang" style="width: 280px;">
                        <option value="Bahan Pangan">Bahan Pangan </option>
                        <option value="Barang Non-Food">Barang Non-Food</option>
                        <option value="Buah-Buahan">Buah-Buahan </option>
                        <option value="Sayuran">Sayuran</option>
                        <option value="Bumbu Dapur">Bumbu Dapur</option>
                        <option value="Bahan Pangan dan Lain-lain">Bahan Pangan dan Lain-lain</option>
                        <option value="Lauk Pauk">Lauk Pauk</option>
                        <option value="semua">Semua</option>
                    </select>
                    </div>
                    </div>
                    <!-- <div class="form-group">
                        <label class="control-label col-xs-3" >Periode</label>
                        <div class="col-xs-9">
                            <input name="periode" class="form-control" type="text" style="width:280px;" required>
                        </div>
                    </div>  -->
                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info">Simpan</button>
                </div>
            </form>
        </div>
            </div>
            </div>
        </div>
        <hr>

        <!-- Footer -->
        <footer>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url().'assets/dist/js/bootstrap-select.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/dataTables.bootstrap.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/jquery.dataTables.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/moment.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap-datetimepicker.min.js'?>"></script>
    <script type="text/javascript">
            $(function () {
                $('#datetimepicker').datetimepicker({
                    format: 'DD MMMM YYYY HH:mm',
                });
                
                $('#datepicker').datetimepicker({
                    format: 'YYYY-MM-DD',
                });
                $('#datepicker2').datetimepicker({
                    format: 'YYYY-MM-DD',
                });

                $('#timepicker').datetimepicker({
                    format: 'HH:mm'
                });
            });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#mydata').DataTable();
        } );
    </script>
    
</body>

</html>
