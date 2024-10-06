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
                <h1 class="page-header"><h4>Metode Pembayaran</h4>
                </h1> 
            </div>
        </div>
    
            <select id="selector" name="satuan" class="selectpicker show-tick form-control" data-live-search="true" title="Pilih Metode Pembayaran" data-width="80%" placeholder="Pilih Metode Pembayaran" required>
              <option value="buka-tunai">- Tunai</option>
              <option value="buka-non">- Non Tunai</option>    
            </select>

        <!-- kode transaksi -->
        <div id="kode_trans">
        <div style="padding-bottom: 15px;padding-left: 15px;padding-top: 15px;">
          <label>Kode transaksi</label>
          <form action="<?php echo site_url('Pembelian/simpan_pembelian')?>" method="post">
          <input name="kode" class="form-control" readonly="on" type="text" value="<?php echo $kode ?>" style="width:250px;" required> 
        </div>
        <!-- end kode transaksi -->

        <!-- nama costumer -->
        <table>
            <tr>
            <th>
            <div class="form-group">
            <label style="padding-left: 15px;">Pilih Nama Supplier</label>
                <div class="col-xs-9">
                <select name="nama_cos" class="show-tick form-control" data-live-search="true" title="Pilih Nama Customer" data-width="80%" placeholder="Pilih Nama Costumer">
                    <?php 
                        $no=0;
                        foreach ($data->result_array() as $a):
                            $no++;
                            $id=$a['suplier_id'];
                            $nm=$a['suplier_nama'];
                          

                    ?>
                    <option> <?php echo $nm ?> </option>   
                    <?php endforeach; ?>

                </select>
                             
                </div>
            </div>
            <!-- end nama costumer -->

            <div style="padding-left: 15px;padding-top: 25px">
            <label>Total(Rp)</label>
            <input type="text" id="total" name="total" value="<?php echo number_format($this->cart->total());?>" class="form-control input-sm" style="text-align:right;margin-bottom:5px;" readonly>
            </div>
            </div>
            <!-- tunai -->
            <div id="tunai">
            <div style="padding-left: 15px;padding-top: 5px">
            <label>Jumlah Uang(Rp)</label>
            <input type="text" id="jml_uang" name="jml_uang" class="jml_uang form-control input-sm" style="text-align:right;margin-bottom:5px;" required>
            <input type="hidden" id="jml_uang2" name="jml_uang2" class="form-control input-sm" style="text-align:right;margin-bottom:5px;">
            </div>
            <div style="padding-left: 15px;padding-top: 5px">
<!--             <label>Kembalian(Rp)</label>
            <input type="text" id="kembalian" name="kembalian" class="form-control input-sm" style="text-align:right;margin-bottom:5px;"> -->
            <div style="padding-top: 20px;">
            <button name="tombol" value="Lunas" type="submit" class="btn btn-info"><span class="glyphicon glyphicon-floppy-save"></span> Simpan</button>
            </div>
            </div>
            </div>
            </th></tr></table>
            </form>
            </div>
            <!-- end tunai -->

            <!-- non tunai -->
        <div id="non-tunai">
             <!-- kode transaksi -->
        <div style="padding-bottom: 15px;padding-left: 15px;padding-top: 15px;">
          <label>Kode transaksi</label>
          <form action="<?php echo site_url('Pembelian/simpan')?>" method="post">
          <input name="kode" class="form-control" readonly="on" type="text" value="<?php echo $kode ?>" style="width:250px;" required> 
        </div>
        <!-- end kode transaksi -->
         <!-- nama costumer -->
        <table>
            <tr>
            <th>
            <div class="form-group">
            <label style="padding-left: 15px;">Pilih Nama Supplier</label>
                <div class="col-xs-9">
                <select name="nama_cos" class="show-tick form-control" data-live-search="true" title="Pilih Nama Supplier" data-width="80%" placeholder="Pilih Nama Supplier">
                    <?php 
                        $no=0;
                        foreach ($data->result_array() as $a):
                            $no++;
                            $id=$a['suplier_id'];
                            $nm=$a['suplier_nama'];
                          

                    ?>
                    <option> <?php echo $nm ?> </option>   
                    <?php endforeach; ?>

                </select>
                             
                </div>
            </div>
            <!-- end nama costumer -->
            <div style="padding-left: 15px;padding-top: 25px">
            <label>Total(Rp)</label>
            <input type="text" id="total" name="total" value="<?php echo number_format($this->cart->total());?>" class="form-control input-sm" style="text-align:right;margin-bottom:5px;" readonly>
            </div>

            <div style="padding-left: 15px;padding-top: 5px">
            <label>Jatuh Tempo</label>
            <input type="date" id="tempo" name="tempo" class="form-control input-sm" style="text-align:right;margin-bottom:5px;">
            <div style="padding-top: 20px;">
            <button name="tombol" value="Belum Lunas" type="submit" class="btn btn-info"><span class="glyphicon glyphicon-floppy-save"></span> Simpan</button>
            </div>
            </div>
        </th>
    </tr>
</table>
</form>
</div>
            <!-- end non tunai -->

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
                    $("#kode_trans").show();
                    $("#non-tunai").hide();
                }else{
                    $("#tunai").hide();
                    $("#kode_trans").hide();
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
