
<html lang="en" moznomarginboxes mozdisallowselectionprint>
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/laporan.css')?>"/>
</head>
<body onload="window.print()">
<div id="laporan">
<table align="center" style="width:700px; border-bottom:3px double;border-top:none;border-right:none;border-left:none;margin-top:5px;margin-bottom:20px;">
<!--<tr>
    <td><img src="<?php// echo base_url().'assets/img/kop_surat.png'?>"/></td>
</tr>-->
</table>
<?php 
    $b=$kop->row_array();
?>
<table border="0" align="center" style="width:700px;border:none;margin-bottom: 2px;">
               <tr>
            <th colspan="4"><h1>Pare Makmur</h1></th>
        </tr>
        <tr>
            <th style="text-align:left;width: 10%;">Email</th>
            <th style="text-align:left;width: 40%;">: ristidam0909@gmail.com</th>
        </tr>
        <tr>
            <th style="text-align:left;">Telepon</th>
            <th style="text-align:left;">: 081930090069</th>
            <!-- <th style="text-align:center;width: 10%;">Daftar Harga pokok</th> -->
        <!--     <th style="text-align:left;width: 40%;">: </th> -->
        </tr>
        <tr>
            <th style="text-align:left;">Periode</th>
            <th style="text-align:left;">: </th>
            <th style="text-align:center;">Office</th>
            <th style="text-align:left;">: Jakarta</th>
        </tr>
        <tr>
            <td colspan="6"><h1>_________________________________________________________</h1></td>
        </tr>
       <!--  <tr>
            <th style="text-align:left;">Periode</th>
            <th style="text-align:left;">: <?php echo $b['periode'];?></th>
        </tr> -->
</table>
</div>
<table border="1" id="tabel" align="center" style="width:700px;margin-bottom:20px;">
<thead>

    <tr>
        <th style="width:50px;">No</th>
        <th style="width: 150px;">Nama Barang</th>
        <th style="width: 75px;">Satuan</th>
        <th style="width: 100px">Harga</th>
        <th style="width: 100px">Kategori</th>
    </tr>
</thead>
<tbody>
<?php 
$no=0;
    foreach ($data->result_array() as $i) {
        $no++;
        $nabar=$i['barang_nama'];
        $merk=$i['barang_merk'];       
        $ukuran=$i['barang_ukuran'];       
        $satuan=$i['barang_satuan'];       
        $beli=$i['barang_harga_beli'];
        $jual=$i['barang_harga_jual'];
         $kat=$i['barang_kategori'];
?>
    <tr>
        <td style="text-align:center;"><?php echo $no;?></td>
        <td style="text-align:left;"><?php echo $nabar;?></td>
        <td style="text-align:center;"><?php echo $satuan;?></td>
        <td style="text-align:right;"><?php echo 'Rp '.number_format($jual);?></td>
        <td style="text-align:center;"><?php echo $kat;?></td>
    </tr>
<?php }?>
</tbody>
</table>
<table align="center" style="width:700px; border:none;margin-top:5px;margin-bottom:20px;">
    <tr>
        <td></td>
</table>

<table align="center" style="width:700px; border:none;margin-top:5px;margin-bottom:20px;">
    <tr>
        <th><br/><br/></th>
    </tr>
    <tr>
        <th align="left"></th>
    </tr>
</table>
<style type="text/css">
    #tabel{
        border-collapse: collapse;
    }
</style>
</body>
</html>