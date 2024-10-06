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
    <link href="<?php echo base_url().'assets/css/bootstrap-datetimepicker.min.css'?>">
</head>


<body>


    <!-- Navigation -->
   <?php 
        $this->load->view('admin/menu');
   ?>

    <!-- Page Content -->
    <div class="container">

        <!-- kode transaksi -->
        <div style="padding-left: 15px;">
          <label>Kode transaksi</label>
          <form action="<?php echo site_url('Penjualan/add')?>" method="post">
          <input name="id" class="form-control" readonly="on" type="text" value="<?php echo $kode ?>" style="width:50%;" required> 
        </div>

         <input type="hidden" id="total" name="total" value="<?php echo number_format($this->cart->total());?>" class="form-control input-sm" style="text-align:right;margin-bottom:5px;" readonly>

        <div style="padding-left: 15px;padding-top: 15px;">
          <label>Kop Surat</label>
          <!-- <input name="kop_surat" class="form-control" type="text" style="width:50%;" required>  -->
           <select name="kop_surat" style="width: 50%;" class="show-tick form-control" data-live-search="true">
                    <option value="Dua Cahaya Makmur">Dua Cahaya Makmur</option>
                    <option value="Pare Makmur">Pare Makamur</option>   
                </select>
        </div>

        <div style="padding-left: 15px;padding-top: 15px;">
<!--           <label>Office</label> -->
          <input name="office" class="form-control" type="hidden" value="Jakarta" readonly style="width:50%;" required> 
        </div>

        <div style="padding-left: 15px;">
          <!-- <label>No Telepon</label> -->
          <input name="telpon" class="form-control" value="081930090069" readonly type="hidden" style="width:50%;" required> 
        </div>

        <div style="padding-left: 15px;">
         <!--  <label>Email</label> -->
          <input name="email" class="form-control" value="ristidam0909@gmail.com" readonly type="hidden" style="width:50%;" required> 
        </div>

        <div style="padding-left: 15px;">
          <label>Periode</label>
          <input name="periode" value="<?php echo date('Y'); ?>" class="form-control" type="text" style="width:50%;" required> 
        </div>

        <div style="padding-left: 15px;padding-top: 15px;">
          <label>Kepada</label>
          <input name="kepada" class="form-control" type="text" style="width:50%;" required> 
        </div>

        <div style="padding-top: 20px;padding-left: 20%;">
            <button style="width: 15%;" name="tombol" type="submit" class="btn btn-info"><span class="glyphicon glyphicon-floppy-save"></span> Simpan</button>
        </div>

    </form>
    </div>

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
