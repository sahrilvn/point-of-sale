
<html lang="en" moznomarginboxes mozdisallowselectionprint>
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/struk.css')?>"/>
</head>
<body onload="window.print()">
<div id="laporan">

<table border="0" align="center" style="width:700px; border:none;margin-top:5px;margin-bottom:0px;">
<tr>
    
</tr>
                       
</table>
<?php 
    $b=$data->row_array();
?>
<table border="0" align="center" style="width:700px;border:none;margin-bottom: 2px;">
        <tr>
            <th colspan="4"><h1><?php echo $b['kop_surat']; ?></h1></th>
        </tr>
        <tr>
            <th style="text-align:left;width: 25%;">No Transaksi</th>
            <th style="text-align:left;width: 25%;">: <?php echo $b['tj_id'];?></th>
            <th style="text-align:left;width: 25%;">Email</th>
            <th style="text-align:left;">: <?php echo $b['email']; ?></th>
        </tr>
        <tr>
            <th style="text-align:left;">Tanggal</th>
            <th style="text-align:left;">: <?php echo $b['tj_tanggal'];?></th>
            <th style="text-align:left;">Telp</th>
            <th style="text-align:left;">: <?php echo $b['telepon'];?></th>
        </tr>
        <tr>
            <th style="text-align:left;">Office</th>
            <th style="text-align:left;">: <?php echo $b['office'];?></th>
            <th style="text-align:left;">Kepada</th>
            <th style="text-align:left;">: <?php echo $b['tj_costumer_id'];?></th>
        </tr>
        <tr>
            <td colspan="6"><h1>_________________________________________________</h1></td>
        </tr>
       <!--  <tr>
            <th style="text-align:left;">Periode</th>
            <th style="text-align:left;">: <?php echo $b['periode'];?></th>
        </tr> -->
</table>

<table id="tabel" border="1px" align="center" style="width:700px;margin-bottom:20px;">
<thead>

    <tr id="kepala">
        <th style="width:50px;">No</th>
        <th>Nama Barang</th>
        <th>Merk</th>
        <th>Ukuran</th>
        <th>Satuan</th>
        <th>Harga</th>
        <th>Qty</th>
        <th>SubTotal</th>
    </tr>
</thead>
<tbody>
<?php 
$no=0;
    foreach ($data->result_array() as $i) {
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
    <tr id="isi">
        <td style="text-align:center;"><b><?php echo $no;?></b></td>
        <td style="text-align:left;"><b><?php echo $nabar;?></b></td>
        <td style="text-align:center;"><b><?php echo $merk;?></b></td>
        <td style="text-align:center;"><b><?php echo $ukuran;?></b></td>
        <td style="text-align:center;"><b><?php echo $satuan;?></b></td>
        <td style="text-align:right;"><b><?php echo number_format($harjul);?></b></td>
        <td style="text-align:center;"><b><?php echo $qty;?></b></td>
        <td style="text-align:right;"><b><?php echo number_format($total);?></b></td>
    </tr>
<?php }?>
</tbody>
</table>
<table align="center" style="width:700px; border:none;margin-bottom: 20px;">
 <tfoot>
    <tr>
        <td style="text-align:right;"><b>Total :</b></td>
        <td style="text-align:right;width: 20%;">Rp. <b><?php echo $b['tj_total'];?></b></td>
    </tr>
</tfoot>
</table>

<table align="center" style="width:700px; border:none;margin-top:5px;margin-bottom:20px;">
    <tr>
        <td>Tanda Terima</td>
        <td align="right">Hormat Kami</td>

    </tr>
    <tr>
        <td align="right"></td>
    </tr>
   
    <tr>
    <td><br/><br/><br/><br/></td>
    </tr>    
    <tr>
        <td align="left">___________</td>
        <td align="right">___________</td>
    </tr>
    <tr>
        <td align="center"></td>
    </tr>
</table>
</div>
<style type="text/css">
    #kepala{
       background-color: silver;
    }
    #isi{
        page-break-after: always;
    }
</style>
</body>
</html>