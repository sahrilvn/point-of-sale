
<html lang="en" moznomarginboxes mozdisallowselectionprint>
<head>
    <title>Faktur Penjualan Barang</title>
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

<table border="0" align="center" style="width:700px; border:none;margin-top:5px;margin-bottom:0px;">
<tr>
    
</tr>
                       
</table>
	<?php if($print) {

		$id = $print->tj_id;
		

	}?>
<table border="0" align="center" style="width:700px;border:none;">
        <tr>
            <th style="text-align:left;">No Transaksi</th>
            <th style="text-align:left;">: <?php echo $id;?></th>
            <th style="text-align:left;">Total</th>
            <th style="text-align:left;">: <?php echo 'Rp '.number_format($b['tj_total']).',-';?></th>
        </tr>
        <tr>
            <th style="text-align:left;">Tanggal</th>
            <th style="text-align:left;">: <?php echo $b['tj_tanggal'];?></th>
            <th style="text-align:left;">Tunai</th>
            <th style="text-align:left;">: <?php echo $b['tj_jumlah_uang'];?></th>
        </tr>
        <tr>
   
            <th style="text-align:left;">Kembalian</th>
            <th style="text-align:left;">: <?php echo $b['tj_kembalian'];?></th>
        </tr>
</table>

<table border="1" align="center" style="width:700px;margin-bottom:20px;">
<thead>

    <tr>
        <th style="width:50px;">No</th>
        <th>Nama Barang</th>
        <th>Merk</th>
        <th>Satuan</th>
        <th>Harga Jual</th>
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
        $satuan=$i['jd_barang_satuan'];       
        $harjul=$i['jd_barang_harga_jual'];
        $qty=$i['jd_barang_jumlah'];
        $total=$i['jd_barang_total'];
?>
    <tr>
        <td style="text-align:center;"><?php echo $id;?></td>
        <td style="text-align:left;width: 150px;"><?php echo $nabar;?></td>
        <td style="text-align:left;width: 150px;"><?php echo $merk;?></td>
        <td style="text-align:center;width: 150px;"><?php echo $satuan;?></td>
        <td style="text-align:right;width: 150px;"><?php echo 'Rp '.number_format($harjul);?></td>
        <td style="text-align:center;"><?php echo $qty;?></td>
        <td style="text-align:right;width: 150px;"><?php echo 'Rp '.number_format($total);?></td>
    </tr>
<?php }?>
</tbody>
<tfoot>

    <tr>
        <td colspan="6" style="text-align:center;"><b>Total</b></td>
        <td style="text-align:right;"><b><?php echo 'Rp '.number_format($b['jual_total']);?></b></td>
    </tr>
</tfoot>
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
</div>
</body>
</html>