<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Transaksi Pembelian</title>

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
                    <h2>Transaksi Pembelian

                           </h2>
                  
                    <a href="#" data-toggle="modal" data-target="#largeModal" class="pull-right"><small><button class="btn btn-success"><span class="glyphicon glyphicon-search">                   
                    </span> Cari Produk!</button></small></a>
                     <form action="<?php echo site_url('Pembelian/simpan_detail_barang/') ?>" class="form-horizontal" method="POST">
                    <a href="" class="pull-right" style="padding-right:10px; "><small><button class="btn btn-info"><span class="glyphicon glyphicon-floppy-save">                   
                    </span> Simpan</button></small></a>
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
                        <th>No</th>
                        <th>Kode Barang</th>
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
                    <tr>
                         <td><?php echo $no++ ?></td>
                         <td><input style="border: none; width: 60px;" readonly="on" type="text" name="barang_id" value="<?=$items['id'];?>"></td>
                         <td><input style="border: none;" readonly="on" type="text" name="barang_nama" value="<?=$items['name'];?>"></td>
                         <td><input style="border: none; width: 60px;" readonly="on" type="text" name="barang_merk" value="<?=$items['merk'];?>"></td>
                         <td><input style="border: none;text-align: center;" readonly="on" type="text" name="barang_ukuran" value="<?=$items['ukuran'];?>"></td>
                         <td style="text-align:center;"><input style="border: none;text-align: center;" readonly="on" type="text" name="barang_satuan" value="<?=$items['satuan'];?>"></td>
                         <td style="text-align:right;"><input style="border: none;text-align: center;" readonly="on" type="text" name="barang_harga_jual" value="<?php echo number_format($items['price']);?>"></td>
                         <td style="text-align:center;"><input style="border: none;text-align: center;" readonly="on" type="text" name="barang_jumlah" value="<?php echo number_format($items['qty']);?>"></td>
                         <td style="text-align:right;"><input style="border: none;text-align: center;" readonly="on" type="text" name="barang_total" value="<?php echo number_format($items['subtotal']);?>"></td>
                        
                         <td style="text-align:center;"><a href="<?php echo site_url('Pembelian/remove/'.$items['rowid'])?>" class="btn btn-warning btn-xs"><span class="fa fa-close"></span> Batal</a></td>
                    </tr>
                    
                    <?php $i++; ?>
                    <?php endforeach; ?>
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
                            <th style="text-align:center;width:40px;">No</th>
                            <th style="width:120px;">Kode Barang</th>
                            <th style="width:240px;">Nama Barang</th>
                            <th>Merk</th>
                            <th>Ukuran</th>
                            <th>Satuan</th>
                            <th style="width:100px;">Harga</th>
                            <th>Stok</th>
                            <th style="width:100px;text-align:center;">Aksi</th>
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
                            $harjul=$a['barang_harga_beli'];
                            // $harjul=$a['barang_harga_jual'];
                            $stok=$a['barang_jumlah'];

                    ?>
                        <tr>
                            <td style="text-align:center;"><?php echo $no;?></td>
                            <td><?php echo $id;?></td>
                            <td><?php echo $nm;?></td>
                            <td style="text-align:center;"><?php echo $merk;?></td>
                            <td style="text-align:center;"><?php echo $ukuran;?></td>
                            <td style="text-align:center;"><?php echo $satuan;?></td>
                            <td style="text-align:right;"><?php echo 'Rp '.number_format($harjul);?></td>
                            <td style="text-align:center;"><?php echo $stok;?></td>
                            <td style="text-align:center;">
                            <form action="<?php echo site_url('Pembelian/add_to_cart')?>" method="post">
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
    