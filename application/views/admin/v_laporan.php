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
                    <small>Laporan penjualan</small>
                     <div class="pull-right" style="padding-right: 10px;"><a href="<?php echo site_url('administrator/berhasil') ?>" class="btn btn-sm btn-info"><span class="fa fa-backward"></span> Kembali</a></div>
                </h1>
            </div>
        </div>
        <!-- /.row -->
        <!-- Projects Row -->
        <div class="row">
            <div class="col-lg-12">
            <table class="table table-bordered table-condensed" style="font-size:12px;" id="mydata">
                <thead>
                    <tr>
                        <th style="text-align:center;width:40px;">No</th>
                        <th>No Transaksi</th>
                        <th>Kepada</th>
                        <th>Tanggal</th>
                        <th>Total</th>
                        <th style="width: 75px;text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                <?php 
                    $no=0;
                    foreach ($data->result_array() as $a){
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
                    <tr id="a">
                        <td style="text-align:center;vertical-align:middle"><?php echo $no ?></td>
                        <td style="text-align:center;vertical-align:middle"><?php echo $id ?></td>
                        <td style="text-align:left;vertical-align:middle"><?php echo $nm ?></td>
                        <td style="text-align:center;vertical-align:middle"><?php echo $tgl ?></td>
                        <td style="text-align:right;vertical-align:middle">Rp. <?php echo $total ?></td>
                        <td style="text-align:center;vertical-align:middle">
                            <a class="btn btn-sm btn-default" href="#modalHapusPelanggan<?php echo $id?>" data-toggle="modal" title="Hapus"><span class="fa fa-trash"> Hapus</span></a>

                        </td>
                    </tr>


                <?php }  ?>
                </tbody>
            </table>
            </div>
        </div>
        <style type="text/css">
            #a:hover{background: silver;}
        </style>
        <!-- /.row -->
                <!-- ============ MODAL HAPUS =============== -->
        <?php
                    foreach ($data->result_array() as $a) {
                        $no++;
                         $id=$a['tj_id'];
                        $nm=$a['tj_costumer_id'];
                    ?>
                <div id="modalHapusPelanggan<?php echo $id?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 class="modal-title" id="myModalLabel">Hapus Riwayat Penjualan</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo site_url('laporan/hapus/'.$id=$a['tj_id']) ?>">
                        <div class="modal-body">
                            <p>Yakin mau menghapus Riwayat penjualan <b><?php echo $nm;?></b> ?</p>
                                    <input name="barang_id" type="hidden" value="<?php echo $id; ?>">
                        </div>
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button type="submit" class="btn btn-primary">Hapus</button>
                        </div>
                    </form>
                </div>
                </div>
                </div>
            <?php
        }
        ?>
        <!-- ============ MODAL ADD =============== -->
        <div class="modal fade" id="modal_bayar" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Pilih Tanggal</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/laporan/lap_penjualan_pertanggal'?>" target="_blank">
                <div class="modal-body">

             <!--        <div class="form-group">
                        <label class="control-label col-xs-3" >Tanggal</label>
                        <div class="col-xs-9">
                            <div class='input-group date' id='datepicker' style="width:300px;">
                                <input type='text' name="tgl" class="form-control" value="" placeholder="Tanggal..." required/>
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                    </div> -->
                           

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info"><span class="fa fa-print"></span> Cetak</button>
                </div>
            </form>
            </div>
            </div>
        </div>

<!-- ============ MODAL ADD =============== -->
        <div class="modal fade" id="a" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Data Barang</h3>
            </div>
                <div class="modal-body" style="overflow:scroll;height:500px;">

                  <table class="table table-bordered table-condensed" style="font-size:11px;" id="mydata">
                    <thead>
                        <tr>
                            <th style="text-align:center;width:40px;">No</th>
                            <th style="width:120px;">Kode Barang</th>
                            <th style="width:240px;">Nama Barang</th>
                            <th>Merk</th>
                            <th>Ukuran</th>
                            <th>Satuan</th>
                            <th style="width:100px;">Harga Jual</th>
                            <th>Stok</th>
                            <th style="width:100px;text-align:center;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $no=0;
                        foreach ($datas->result_array() as $a):
        $no++;
        $id=$i['jd_tj_id'];
        $nabar=$i['jd_barang_nama'];
        $merk=$i['jd_barang_merk'];       
        $ukuran=$i['jd_barang_ukuran'];       
        $satuan=$i['jd_barang_satuan'];       
        $harjul=$i['jd_barang_harga_jual'];
        $qty=$i['jd_barang_jumlah'];
        $total=$i['jd_barang_total'];

                    ?>
                        <tr>
                            <td style="text-align:center;"><?php echo $no;?></td>
                            <td><?php echo $id;?></td>
                            <td><?php echo $nabar;?></td>
                            <td style="text-align:center;"><?php echo $merk;?></td>
                            <td style="text-align:center;"><?php echo $ukuran;?></td>
                            <td style="text-align:center;"><?php echo $satuan;?></td>
                            <td style="text-align:right;"><?php echo 'Rp '.number_format($harjul);?></td>
                            <td style="text-align:center;"><?php echo $stok;?></td>
                            <td style="text-align:center;">
                            <form action="<?php echo site_url('Penjualan/add_to_cart')?>" method="post">
                            <input type="hidden" name="kode_brg" value="<?php echo $id?>">
                            <input type="hidden" name="nabar" value="<?php echo $nm;?>">
                            <input type="hidden" name="merk" value="<?php echo $merk;?>">
                            <input type="hidden" name="ukuran" value="<?php echo $ukuran;?>">
                            <input type="hidden" name="satuan" value="<?php echo $satuan;?>">
                            <input type="hidden" name="stok" value="<?php echo $stok;?>">
                            <input type="hidden" name="harjul" value="<?php echo number_format($harjul);?>">
                            <input type="hidden" name="amount" value="">
                            <input type="hidden" name="qty" value="1" required>
                                <button type="submit" class="btn btn-xs btn-info" title="Pilih"><span class="fa fa-edit"></span> Pilih</button>
                            </form>
                            </td>
                        </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>          

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    
                </div>
            </div>
            </div>
        </div>
        <!--END MODAL-->
                <!-- ============ MODAL Transaksi pembayaran =============== -->
                        <?php 
                    $no=0;
                    foreach ($data->result_array() as $a){
                        $no++;
                        $id=$a['tj_id'];
                        $nama=$a['tj_costumer_id'];
                        $tgl=$a['tj_tanggal'];
                        $tempo=$a['tj_tempo_bayar'];
                        $t=$a['tj_total'];
                        $total=$a['tj_tunggakan'];
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
                            <input name="total" readonly="on" value="<?php echo number_format($t);?>" class="form-control" type="text" style="" required>
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
                            <input name="tunggakan" readonly="on" value="<?php echo number_format($total);?>" class="form-control" type="text" style="" required>
                        </div>
                    </div>  

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Tunai</label>
                        <div class="col-xs-9">
                            <input name="tunai" maxlength="16" onkeyup="angka(this);" class="form-control" type="text" style="" required/>
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
        $(document).ready(function() {
            $('#mydata').DataTable();
        } );
    </script>
    
</body>

</html>
