<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Management Data Barang</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url().'assets/css/bootstrap.min.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/style.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/font-awesome.css'?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url().'assets/css/4-col-portfolio.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/dataTables.bootstrap.min.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/jquery.dataTables.min.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/dist/css/bootstrap-select.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/bootstrap-datetimepicker.min.css'?>">

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
            <center><?php echo $this->session->flashdata('msg');?></center>
                <h1 class="page-header">Data
                    <small>Barang Basah</small>

                    <div id="h" class="pull-right"><a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#largeModale"><span class="fa fa-plus"></span> Tambah Barang</a></div>

                    <div class="pull-right" style="padding-right: 10px;"><a href="<?php echo site_url('barang/index') ?>" class="btn btn-sm btn-primary"><span class="fa fa-share"></span> Bahan Kering</a></div>

                     <div class="pull-right" style="padding-right: 10px;"><a href="<?php echo site_url('administrator/berhasil') ?>" class="btn btn-sm btn-info"><span class="fa fa-backward"></span> Kembali</a></div>


                </h1>
            </div>
        </div>
        <!-- /.row -->
        <!-- Projects Row -->
       

        <!--Nyobaan Date-->
        
        <!---->

        <div class="row">
            <div class="col-lg-12">
            <table class="table table-bordered table-condensed" style="font-size:11px;" id="mydata">
                <thead>
                    <tr>
                        <th style="text-align:center;width:40px;">No</th>
                        <th>Nama Barang</th>
                        <th>Satuan</th>
                        <th>Harga Beli</th>
                        <th>Harga</th>
                        <th>Harga Jual</th>
                        <th>Stok</th>
                        <th style="width:140px;text-align:center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $no=0;
                    foreach ($data->result_array() as $a):
                        $no++;
                        $id=$a['barang_id'];
                        $nm=$a['barang_nama'];
                        $merk=$a['barang_merk'];
                        $ukuran=$a['barang_ukuran'];
                        $satuan=$a['barang_satuan'];
                        $harga_beli=$a['barang_harga_beli'];
                        $harga=$a['barang_harga'];
                        $barang_harga_jual=$a['barang_harga_jual'];
                        $stok=$a['barang_jumlah'];
                ?>
                    <tr id="a">
                        <td style="text-align:center;"><?php echo $no;?></td>
                        <td><?php echo $nm;?></td>
                        <td style="text-align: center;"><?php echo $satuan;?></td>
                        <td style="text-align: right;"><?php echo 'Rp '.number_format($harga_beli);?></td>
                        <td style="text-align: right;"><?php echo 'Rp '.number_format($harga) ;?></td>
                        <td style="text-align: right;"><?php echo 'Rp '.number_format($barang_harga_jual) ;?></td>
                        <td style="text-align: center;"><?php echo $stok;?></td>
                        <td style="text-align: center;">
                            <a class="btn btn-xs btn-warning" href="#modalEditPelanggan<?php echo $id?>" data-toggle="modal" title="Edit"><span class="fa fa-edit"></span> Edit</a>
                            <a class="btn btn-xs btn-danger" href="#modalHapusPelanggan<?php echo $id?>" data-toggle="modal" title="Hapus"><span class="fa fa-trash"></span> Hapus</a>
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
            </div>
        </div>
        <style type="text/css">
            #a:hover{background-color: #c9c9c9;}
        </style>
        <!-- /.row -->
          <!-- ============ MODAL ADD Barang=============== -->
        <div class="modal fade" id="largeModale" tabindex="-1" role="dialog" aria-labelledby="largeModale" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Tambah Barang</h3>
            </div>
            <div class="form-horizontal">
            <?php echo form_open_multipart('Barang/tambah_barang'); ?>

                <div class="modal-body">
                            <input name="kode" class="form-control" readonly="on" type="hidden" value="<?php echo $kode ?>" style="width:280px;" required>

                <div class="form-group">
                    <label class="control-label col-xs-3">Jenis Barang</label>
                    <div class="col-xs-9">
                    <select id="jenis" name="barang_jenis" class="show-tick form-control" data-live-search="true" placeholder="Pilih Jenis Barang" style="width: 280px;">
                        <option value="Barang-basah">Barang Basah</option>
                        <option value="Barang-kering">Barang Kering</option>
                    </select>                           
                    </div>
                </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Barang</label>
                        <div class="col-xs-9">
                            <input name="barang_nama" class="form-control" type="text" placeholder="Input Nama barang..." style="width:280px;" required>
                        </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label col-xs-3">Kategori</label>
                    <div class="col-xs-9">
                    <select name="barang_kategori" class="show-tick form-control" data-live-search="true" placeholder="Pilih Jenis Barang" style="width: 280px;">
                        <option>Bahan Pangan </option>
                        <option>Barang Non-Food</option>
                        <option>Buah-Buahan </option>
                        <option>Sayuran</option>
                        <option>Bumbu Dapur</option>
                        <option>Bahan Pangan dan Lain-lain</option>
                        <option>Lauk Pauk</option>
                    </select>                            
                    </div>
                </div>
                <div id="bahan_kering">
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Merk</label>
                        <div class="col-xs-9">
                            <input name="barang_merk" class="form-control" type="text" placeholder="Input Merk..." style="width:280px;">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Ukuran</label>
                        <div class="col-xs-9">
                            <input name="barang_ukuran" class="form-control" type="text" placeholder="Input Ukuran..." style="width:280px;">
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Satuan</label>
                        <div class="col-xs-9">
                            <input name="barang_satuan" class="form-control" type="text" placeholder="Ulangi Satuan..." style="width:280px;" required>
                        </div>
                    </div> 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Harga Beli</label>
                        <div class="col-xs-9">
                            <input id="harga_beli" name="barang_harga_beli" class="uang form-control input-sm" type="text" placeholder="Input Harga beli..." style="width:280px;" autocomplete="off" required maxlength="16" onkeyup="angka(this);"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Harga</label>
                        <div class="col-xs-9">
                            <input name="barang_harga" class="form-control" type="text" placeholder="Input Harga..." style="width:280px;" required autocomplete="off" maxlength="16" onkeyup="angka(this);"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Harga Jual</label>
                        <div class="col-xs-9">
                            <input name="barang_harga_jual" class="form-control" type="text" placeholder="Input Harga..." style="width:280px;" required autocomplete="off" maxlength="16" onkeyup="angka(this);"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jumlah</label>
                        <div class="col-xs-9">
                            <input name="barang_jumlah" class="form-control" type="text" placeholder="Input Jumlah..." style="width:280px;" required autocomplete="off" maxlength="16" onkeyup="angka(this);"/>
                        </div>
                    </div>
                </div>

                <div class="modal-footer" > 
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info" name="qty" value="1">Simpan</button>
                </div>
            <?php echo form_close() ?>;
        </div>
            </div>
            </div>
        </div>
       

        <!-- ============ MODAL EDIT =============== -->
        <?php
                    foreach ($data->result_array() as $a) {
                        $no++;
                        $id=$a['barang_id'];
                        $nm=$a['barang_nama'];
                        $merk=$a['barang_merk'];
                        $ukuran=$a['barang_ukuran'];
                        $satuan=$a['barang_satuan'];
                        $harga_beli=$a['barang_harga_beli'];
                        $harga=$a['barang_harga'];
                        $harga_jual=$a['barang_harga_jual'];
                        $stok=$a['barang_jumlah'];
                    ?>
                <div id="modalEditPelanggan<?php echo $id?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 class="modal-title" id="myModalLabel">Edit Barang</h3>
                    </div>
                    <div class="form-horizontal">
                     <form action="<?php echo site_url('Barang/update/'.$id) ?>" class="form-horizontal" method="POST">
                        <div class="modal-body">
                            <input name="barang_id" type="hidden" value="<?php echo $id;?>">

                    <div class="form-group">
                    <label class="control-label col-xs-3">Jenis Barang</label>
                    <div class="col-xs-9">
                    <select id="jenis" name="barang_jenis" class="show-tick form-control" data-live-search="true" placeholder="Pilih Jenis Barang" style="width: 280px;">
                        <option value="Barang-basah">Barang Basah</option>
                        <option value="Barang-kering">Barang Kering</option>
                    </select>                           
                    </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Barang</label>
                        <div class="col-xs-9">
                            <input name="barang_nama" class="form-control" type="text" value="<?php echo $nm;?>" placeholder="Input Nama..." style="width:280px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                    <label class="control-label col-xs-3">Kategori</label>
                    <div class="col-xs-9">
                    <select name="barang_kategori" class="show-tick form-control" data-live-search="true" placeholder="Pilih Jenis Barang" style="width: 280px;">
                        <option>Bahan Pangan </option>
                        <option>Barang Non-Food</option>
                        <option>Buah-Buahan </option>
                        <option>Sayuran</option>
                        <option>Bumbu Dapur</option>
                        <option>Bahan Pangan dan Lain-lain</option>
                        <option>Lauk Pauk</option>
                    </select>                            
                    </div>
                    </div>

                    <div id="bahan">
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Merk</label>
                        <div class="col-xs-9">
                            <input name="barang_merk" class="form-control" type="text" value="<?php echo $merk;?>" placeholder="Input Merk..." style="width:280px;">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Ukuran</label>
                        <div class="col-xs-9">
                            <input name="barang_ukuran" class="form-control" type="text" value="<?php echo $ukuran;?>" placeholder="Input Ukuran..." style="width:280px;">
                        </div>
                    </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Satuan</label>
                        <div class="col-xs-9">
                            <input name="barang_satuan" class="form-control" type="text" value="<?php echo $satuan;?>" placeholder="Input Satuan..." style="width:280px;">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-xs-3" >Harga Beli</label>
                        <div class="col-xs-9">
                            <input maxlength="16" onkeyup="angka(this);" name="barang_harga_beli" class="form-control" type="text" value="<?php echo $harga_beli;?>" placeholder="Input Harga beli..." style="width:280px;"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Harga</label>
                        <div class="col-xs-9">
                            <input maxlength="16" onkeyup="angka(this);" name="barang_harga" class="form-control" type="text" value="<?php echo $harga;?>" placeholder="Input Stok..." style="width:280px;"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Harga Jual</label>
                        <div class="col-xs-9">
                            <input maxlength="16" onkeyup="angka(this);" name="barang_harga_jual" class="form-control" type="text" value="<?php echo $harga_jual;?>" placeholder="Input Stok..." style="width:280px;"/>
                        </div>
                    </div>
      
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Stok</label>
                        <div class="col-xs-9">
                            <input maxlength="16" onkeyup="angka(this);" name="barang_jumlah" class="form-control" type="text" value="<?php echo $stok;?>" placeholder="Input Satuan..." style="width:280px;"/>
                        </div>
                    </div>

                    <div class="form-group">

                    </div>

                </div>
                        <div class="modal-footer" >
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button type="submit" class="btn btn-info">Update</button>
                        </div>
                        </form>
                    </div>
                </div>
                </div>
                </div>
            <?php
        }
        ?>

        <!-- ============ MODAL HAPUS =============== -->
        <?php
                    foreach ($data->result_array() as $a) {
                        $no++;
                        $id=$a['barang_id'];
                        $nm=$a['barang_nama'];
                        $merk=$a['barang_merk'];
                        $ukuran=$a['barang_ukuran'];
                        $satuan=$a['barang_satuan'];
                        $harga_beli=$a['barang_harga_beli'];
                        $harga=$a['barang_harga'];
                        $stok=$a['barang_jumlah'];
                    ?>
                <div id="modalHapusPelanggan<?php echo $id?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 class="modal-title" id="myModalLabel">Hapus Barang</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo site_url('Barang/hapus/'.$id=$a['barang_id']) ?>">
                        <div class="modal-body">
                            <p>Yakin mau menghapus barang <b><?php echo $nm;?></b> ?</p>
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

        <!--END MODAL-->

        <hr>

        <!-- Footer -->
        <footer>

            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <script type="text/javascript">
        $(function(){
            $('.uang').priceFormat({
                    prefix: '',
                    //centsSeparator: '',
                    centsLimit: 0,
                    thousandsSeparator: ','
            });
            $('#harga_beli').priceFormat({
                    prefix: '',
                    //centsSeparator: '',
                    centsLimit: 0,
                    thousandsSeparator: ''
            });
            $('#harga').priceFormat({
                    prefix: '',
                    //centsSeparator: '',
                    centsLimit: 0,
                    thousandsSeparator: ','
            });
            $('.harga_jual').priceFormat({
                    prefix: '',
                    //centsSeparator: '',
                    centsLimit: 0,
                    thousandsSeparator: ','
            });
        });
    </script>

    <!-- jQuery -->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url().'assets/dist/js/bootstrap-select.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/dataTables.bootstrap.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/jquery.dataTables.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/jquery.price_format.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/moment.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap-datetimepicker.min.js'?>"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#mydata').DataTable();
        } );
    </script>
    <script type="text/javascript">
      function angka(e){
        if (!/^[0-9]+$/.test(e.value)) {
          e.value = e.value.substring(0,e.value.length-1);
        }
      }
    </script>
        <script type="text/javascript">
        $(document).ready(function() {
            $('#bahan_kering').hide();
        } );
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#jenis').on('change', function(){
                if (this.value == 'Barang-kering') {
                    $("#bahan_kering").show();
                    $("kategori1").show();
                    $("kategori2").hide();
                }else{
                    $("#bahan_kering").hide();
                    $("#kategori2").show();
                    $("#kategori1").hide();
                }
            });
        });
    </script>
    
</body>

</html>
