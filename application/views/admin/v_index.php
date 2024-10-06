<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman beranda</title>

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


      <style type="text/css">
      .bg {
           width: 100%;
           height: 100%;
           position: fixed;
           z-index: -1;
           float: left;
           left: 0;
           margin-top: -20px;
      }
      </style>
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
                <h1 class="page-header" style="color:#fcc;">Aplikasi Retail
                </h1>
            </div>
        </div>
        <!-- /.row -->
	<div class="mainbody-section text-center">

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-3 portfolio-item">
                <div class="menu-item blue" style="height:150px;">
                     <a href="<?php echo site_url('Barang/index')?>" data-toggle="modal">
                           <i class="fa fa-shopping-bag"></i>
                            <p style="text-align:left;font-size:14px;padding-left:5px;">Barang</p>
                      </a>
                </div> 
            </div>
            <div class="col-md-3 portfolio-item">
                <div class="menu-item green" style="height:150px;">
                     <a href="<?php echo site_url('Laporan/index')?>" data-toggle="modal">
                           <i class="fa fa-truck"></i>
                            <p style="text-align:left;font-size:14px;padding-left:5px;">Riwayat Penjualan</p>
                      </a>
                </div> 
            </div>
            <div class="col-md-3 portfolio-item">
                <div class="menu-item light-orange" style="height:150px;">
                     <a href="<?php echo site_url('Penjualan/index')?>" data-toggle="modal">
                           <i class="fa fa-users"></i>
                            <p style="text-align:left;font-size:14px;padding-left:5px;">Transaksi Jual</p>
                      </a>
                </div> 
            </div>
        <div class="row">
            <div class="col-md-3 portfolio-item">
                <div class="menu-item purple" style="height:150px;">
                     <a href="<?php echo site_url('Laporan/lapor')?>" data-toggle="modal">
                           <i class="fa fa-bar-chart"></i>
                            <p style="text-align:left;font-size:14px;padding-left:5px;">Laporan</p>

                      </a>
                </div> 
            </div>
<!-- Laporan -->
<div class="row">
            <div class="col-lg-12">
            <table class="table table-bordered table-condensed" style="font-size:12px;" id="mydata">
                <!-- <a class="btn btn-sm btn-default" href="<?php echo site_url('Laporan/index')?>" data-toggle="modal"><span class="fa fa-file"></span> Lihat Semua</a> -->
               <!--  <thead>
                    <tr>
                        <th style="text-align:center;width:40px;">No</th>
                        <th>No Transaksi</th>
                        <th>Nama Costumer</th>
                        <th>Tanggal Transaksi</th>
                        <th>Jatuh Tempo</th>
                        <th>Status</th>
                        <th style="width:150px;text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                <?php 
                    $no=0;
                    foreach ($data as $a){
                        $no++;
                         $id=$a['tj_id'];
                        $nm=$a['tj_costumer_id'];
                        $tgl=$a['tj_tanggal'];
                        $tempo=$a['tj_tempo_bayar'];
                        $total=$a['tj_total'];
                        $jml_uang=$a['tj_jumlah_uang'];
                        $kembalian=$a['tj_kembalian'];
                        $sts=$a['tj_status'];
                     ?>
                    <tr>
                        <td style="text-align:center;vertical-align:middle"><?php echo $no ?></td>
                        <td style="vertical-align:middle;"><?php echo $id ?></td>
                        <td style="vertical-align:middle;"><?php echo $nm ?></td>
                        <td style="vertical-align:middle;"><?php echo $tgl ?></td>
                        <td style="vertical-align:middle;"><?php echo $tempo ?></td>
                        <td style="vertical-align:middle;"><?php echo $sts ?></td>
                        <td style="text-align:center;">
                            <a class="btn btn-sm btn-default" href="#largeModal<?php echo $id?>" data-toggle="modal"><span class="fa fa-print"></span> Bayar</a>
                        </td>
                    </tr>


                <?php }  ?>
                </tbody>
            </table>
            </div>
        </div>
 -->
        <!-- end tble -->
                <!-- ============ MODAL Transaksi pembayaran =============== -->
                        <?php 
                    $no=0;
                    foreach ($data as $a){
                        $no++;
                         $id=$a['tj_id'];
                        $nama=$a['tj_costumer_id'];
                        $tgl=$a['tj_tanggal'];
                        $tempo=$a['tj_tempo_bayar'];
                        $total=$a['tj_total'];
                        $tunggakan=$a['tj_tunggakan'];
                        $jml_uang=$a['tj_jumlah_uang'];
                        $kembalian=$a['tj_kembalian'];
                        $sts=$a['tj_status'];
                     ?>
       <div class="modal fade" id="largeModal<?php echo $id?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Transaksi Pembayaran</h3>
            </div>
            <form action="<?php echo site_url('Laporan/update/'.$id) ?>" class="form-horizontal" method="POST">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >No Transaksi</label>
                        <div class="col-xs-9">
                            <input name="id" readonly="on" class="form-control" type="text" value="<?php echo $id ?>" style="">
                        </div>
                    </div>
                        
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama</label>
                        <div class="col-xs-9">
                            <input name="nama" readonly="on" value="<?php echo $nama ?>" class="form-control" type="text" style="" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Total</label>
                        <div class="col-xs-9">
                            <input name="total" readonly="on" value="<?php echo number_format($total);?>" class="form-control" type="text" style="" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Uang Masuk</label>
                        <div class="col-xs-9">
                            <input name="uang" readonly="on" value="<?php echo number_format($jml_uang);?>" class="form-control" type="text" style="" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Tunggakan</label>
                        <div class="col-xs-9">
                            <input name="tunggakan" readonly="on" value="<?php echo number_format($tunggakan);?>" class="form-control" type="text" style="" required>
                        </div>
                    </div>  

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Tunai</label>
                        <div class="col-xs-9">
                            <input name="tunai" maxlength="16" onkeyup="angka(this);" class="form-control" type="text" style="" required autocomplete="off" />
                        </div>
                    </div> 

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Status</label>
                        <div class="col-xs-9">
                                        <select style="width:280px;" id="selector" name="status" class="selectpicker show-tick form-control" data-live-search="true" title="Pilih Status" placeholder="Pilih Status"  required>
                                           <option value="Lunas">- Lunas</option>
                                           <option value="Belum Lunas">- Belum Lunas</option>    
                                        </select>
                        </div>
                    </div>

                    <div id="tgl" class="form-group">
                        <label class="control-label col-xs-3" >Jatuh Tempo</label>
                        <div class="col-xs-9">
                                <input type="date" name="tgl" class="form-control">
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info">Simpan</button>
                </div>
            </form>
            </div>
            </div>
        </div>
        <?php } ?>
        

        <!--END MODAL-->


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
        $(document).ready(function() {
            $('#mydata').DataTable();
        } );
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#selector').on('change', function(){
                if (this.value == 'Lunas') {
                    $("#tgl").hide();
                }else{
                    $("#tgl").show();
                }
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#tgl').hide();
        } );
    </script>
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
      function angka(e){
        if (!/^[0-9]+$/.test(e.value)) {
          e.value = e.value.substring(0,e.value.length-1);
        }
      }
    </script>
    <!-- Bootstrap Core JavaScript -->

</body>

</html>
