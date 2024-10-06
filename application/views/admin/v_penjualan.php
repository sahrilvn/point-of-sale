<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Transaksi Penjualan</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url().'assets/css/bootstrap.min.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/style.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/font-awesome.css'?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url().'assets/css/4-col-portfolio.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/dataTables.bootstrap.min.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/jquery.dataTables.min.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/dist/css/bootstrap-select.css'?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap-datetimepicker.min.css'?>">
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
                <h1 class="">
                    <h2>Transaksi Penjualan 

                           </h2>
                  
                    <a href="#" data-toggle="modal" data-target="#largeModal" class="pull-right"><small><button class="btn btn-sm btn-success"><span class="glyphicon glyphicon-search">                   
                    </span> Cari Produk!</button></small></a>
                     <form action="<?php echo site_url('Penjualan/simpan_detail_barang/') ?>" class="form-horizontal" method="POST">
                    <a href="" class="pull-right" style="padding-right:10px; "><small><button class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-floppy-save">                   
                    </span> Simpan</button></small></a>
                    <div class="pull-right" style="padding-right: 10px;"><a href="<?php echo site_url('administrator/berhasil') ?>" class="btn btn-sm btn-info"><span class="fa fa-backward"></span> Kembali</a></div>

                    <input name="kode" class="form-control" readonly="on" type="text" value="<?php echo $kode ?>" style="width:280px;" required>
                </h1> 
            </div>
        </div>
        <!-- /.row -->
        <!-- Projects Row -->
        <div class="row">
            <div class="col-lg-12">
            <table class="table table-bordered table-condensed" style="font-size:11px;margin-top:10px;">
                <thead>
                    <tr>
                        <th style="width: 50px;text-align: center;">No</th>
                        <th>Nama Barang</th>
                        <th>Merk</th>
                        <th style="text-align:center;">Ukuran</th>
                        <th style="text-align:center;">Satuan</th>
                        <th style="text-align:center;">Harga(Rp)</th>
                        <th style="text-align:center;">Qty</th>
                        <th style="text-align:center;">Sub Total</th>
                        <th style="width:100px;text-align:center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php $no=1; foreach ($this->cart->contents() as $items): ?>
                    <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
                    <tr id="a">
                         <td style="text-align: center;"><?php echo $no++ ?></td>
                         <input style="border: none; width: 60px;" readonly="on" type="hidden" name="barang_id" value="<?=$items['id'];?>">
                         <td><input style="border: none;" readonly="on" type="text" name="barang_nama" value="<?=$items['name'];?>"></td>
                         <td><input style="border: none; width: 60px;" readonly="on" type="text" name="barang_merk" value="<?=$items['merk'];?>"></td>
                         <td><input style="border: none;text-align: center;" readonly="on" type="text" name="barang_ukuran" value="<?=$items['ukuran'];?>"></td>
                         <td style="text-align:center;"><input style="border: none;text-align: center;" readonly="on" type="text" name="barang_satuan" value="<?=$items['satuan'];?>"></td>
                         <td style="text-align:right;"><input style="border: none;text-align: center;" readonly="on" type="text" name="barang_harga_jual" value="<?php echo number_format($items['price']);?>"></td>
                         <td style="text-align:center;"><input style="border: none;text-align: center;" readonly type="text" name="barang_jumlah" value="<?php echo number_format($items['qty']);?>"></td>
                         <td style="text-align:right;"><input style="border: none;text-align: center;" readonly="on" type="text" name="barang_total" value="<?php echo number_format($items['subtotal']);?>"></td>
                        
                         <td style="text-align:center;"><a href="<?php echo site_url('Penjualan/remove/'.$items['rowid'])?>" class="btn btn-warning btn-xs"><span class="fa fa-close"></span> Batal</a></td>
                    
                    <?php $i++; ?>
                    <?php endforeach; ?>
                    </tr>
                </tbody>
            </table>

            <hr/>
        </div>
      
    <div class="col-lg-12">
      <table>
        <tr>
          <td style="width:760px;" rowspan="2"></td>
          <th style="width:140px;">Total(Rp)</th>
          <th style="text-align:right;width:140px;"><input type="text" name="barang_total" value="<?php echo number_format($this->cart->total());?>" class="form-control input-sm" style="text-align:right;margin-bottom:5px;" readonly></th>
          <input type="hidden" id="total" name="total" value="<?php echo $this->cart->total();?>" class="form-control input-sm" style="text-align:right;margin-bottom:5px;" readonly>
        </tr>
        </tr>

      </table>
    </div>
    </div></form>
        <!-- /.row -->
        <!-- ============ MODAL ADD =============== -->
        <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
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
                            <th style="text-align:center;width:25px;">No</th>
                            <!-- <th style="width:120px;">Kode Barang</th> -->
                            <th style="width:150px;">Nama Barang</th>
                            <th style="width: 75px;">Merk</th>
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
                            $id=$a['barang_id'];
                            $nm=$a['barang_nama'];
                            $merk=$a['barang_merk'];
                            $ukuran=$a['barang_ukuran'];
                            $satuan=$a['barang_satuan'];
                            $harpok=$a['barang_harga_beli'];
                            $harjul=$a['barang_harga_jual'];
                            $stok=$a['barang_jumlah'];

                    ?>
                        <tr id="a">
                            <td style="vertical-align:middle;text-align: center;"><?php echo $no;?></td>
                            <!-- <td style="vertical-align:middle;"><?php echo $id;?></td> -->
                            <td style="vertical-align:middle;"><?php echo $nm;?></td>
                            <td style="vertical-align:middle;"><?php echo $merk;?></td>
                            <td style="vertical-align:middle;"><?php echo $ukuran;?></td>
                            <td style="vertical-align:middle;"><?php echo $satuan;?></td>
                            <td style="text-align:right;vertical-align: middle;"><?php echo 'Rp '.number_format($harjul);?></td>
                            <td style="vertical-align:middle;text-align: center;"><?php echo $stok;?></td>
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
                            <input type="text" autocomplete="off" name="qty" required style="margin-bottom: 7px;width: 100px;text-align: center;" placeholder="Masukan Qty">
                                <button type="submit" class="btn btn-xs btn-info" title="Pilih"><span class="fa fa-edit"></span> Pilih</button>
                            </form>
                            </td>
                        </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>          
                <style type="text/css">
                    #a:hover{background: #cfcfcf;}
                </style>
                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    
                </div>
            </div>
            </div>
        </div>
        <!--END MODAL-->

                <!-- ============ MODAL lanjut transaksi Gak kepake =============== -->

        <div class="modal fade" id="largeModale" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content" style="width: 75%;">
        <div class="modal-header">
          
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <div class="form-group">
        <label style="padding-left: 15px;">Metode Pembayaran</label>
        <div class="col-xs-9">
            <select id="selector" name="satuan" class="selectpicker show-tick form-control" data-live-search="true" title="Pilih Metode Pembayaran" data-width="80%" placeholder="Pilih Metode Pembayaran" required>
              <option value="buka-tunai">- Tunai</option>
              <option value="buka-non">- Non Tunai</option>    
            </select>
        </div>
        </div>
        </div>
        <div class="modal-body" style="height:350px;">
        <div style="padding-bottom: 15px;padding-left: 15px;">
        <label>Kode transaksi</label>
        <form action="<?php echo site_url('Penjualan/simpan')?>" method="post">
        <input name="kode" class="form-control" readonly="on" type="text" value="<?php echo $kode ?>" style="width:250px;" required> 
        </div>
        <table>
            <tr>
            <th>
            <div class="form-group">
            <label style="padding-left: 15px;">Pilih Nama Customer</label>
                <div class="col-xs-9">
                <select name="costumer_nama" class="selectpicker show-tick form-control" data-live-search="true" title="Pilih Nama Customer" data-width="80%" placeholder="Pilih Metode Pembayaran" required>
                    <?php 
                        $no=0;
                        foreach ($data->result_array() as $a):
                            $no++;
                            $id=$a['costumer_id'];
                            $nm=$a['costumer_nama'];
                          

                    ?>
                    <option> <?php echo $nm ?> </option>   
                    <?php endforeach; ?>

                </select>
                             
                </div>
            </div>
            
            <div style="padding-left: 15px;padding-top: 25px">
            <label>Total(Rp)</label>
            <input type="text" name="total2" value="<?php echo number_format($this->cart->total());?>" class="form-control input-sm" style="text-align:right;margin-bottom:5px;" readonly>
            </div>
            <div id="tunai">
            <div style="padding-left: 15px;padding-top: 5px">
            <label>Jumlah Uang(Rp)</label>
            <input type="text" id="jml_uang" name="jml_uang" class="jml_uang form-control input-sm" style="text-align:right;margin-bottom:5px;" required>
            <input type="hidden" id="jml_uang2" name="jml_uang2" class="form-control input-sm" style="text-align:right;margin-bottom:5px;" required>
            </div>
            <div style="padding-left: 15px;padding-top: 5px">
            <label>Kembalian(Rp)</label>
            <input type="text" id="kembalian" name="kembalian" class="form-control input-sm" style="text-align:right;margin-bottom:5px;" required>
            </div>
            </div>
                            <button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-floppy-save"></span> Simpan</button>
                </form>
        <!--    <div id="non-tunai">
            <label style="padding-left: 15px;">Jatuh Tempo</label>
            <div class='input-group date' id='datepicker' style="width:200px;padding-left: 15px;">
            <input type='text' name="tgl" class="form-control" value="<?php echo $this->session->userdata('tglfak');?>" placeholder="Tanggal..." required/>
              <span class="input-group-addon">
              <span class="glyphicon glyphicon-calendar"></span>
              </span>
            </div>
            </div>-->
            </th>
            </tr>
        </table>

    </div>

 
                <div class="modal-footer">

                <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    
                </div>
            </div>
            </div>
        </div>
 
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
    <script src="<?php echo base_url().'assets/js/jquery.price_format.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/moment.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap-datetimepicker.min.js'?>"></script>
    <script type="text/javascript">
        $(function(){
            $('#jml_uang').on("input",function(){
                var total=$('#total').val();
                var jumuang=$('#jml_uang').val();
                var hsl=jumuang.replace(/[^\d]/g,"");
                $('#jml_uang2').val(hsl);
                $('#kembalian').val(hsl-total);
            })
            
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#mydata').DataTable();
        } );
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#tunai').hide();
        } );
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#non-tunai').hide();
        } );
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#selector').on('change', function(){
                if (this.value == 'buka-tunai') {
                    $("#tunai").show();
                    $("#non-tunai").hide();
                }else{
                    $("#tunai").hide();
                    $("#non-tunai").show();
                }
            });
        });
    </script>
    <script type="text/javascript">
        $(function(){
            $('.jml_uang').priceFormat({
                    prefix: '',
                    //centsSeparator: '',
                    centsLimit: 0,
                    thousandsSeparator: ','
            });
            $('#jml_uang2').priceFormat({
                    prefix: '',
                    //centsSeparator: '',
                    centsLimit: 0,
                    thousandsSeparator: ''
            });
            $('#kembalian').priceFormat({
                    prefix: '',
                    //centsSeparator: '',
                    centsLimit: 0,
                    thousandsSeparator: ','
            });
            $('.harjul').priceFormat({
                    prefix: '',
                    //centsSeparator: '',
                    centsLimit: 0,
                    thousandsSeparator: ','
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            //Ajax kabupaten/kota insert
            $("#kode_brg").focus();
            $("#kode_brg").on("input",function(){
                var kobar = {kode_brg:$(this).val()};
                   $.ajax({
               type: "POST",
               url : "<?php echo base_url().'admin/penjualan/get_barang';?>",
               data: kobar,
               success: function(msg){
               $('#detail_barang').html(msg);
               }
            });
            }); 

            $("#kode_brg").keypress(function(e){
                if(e.which==13){
                    $("#jumlah").focus();
                }
            });
        });
    </script>
    
    
</body>

</html>
    