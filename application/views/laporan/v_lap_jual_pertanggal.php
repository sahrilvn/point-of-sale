<html lang="en" moznomarginboxes mozdisallowselectionprint>
<head>
    <title>Laporan Penjualan Pertanggal</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/laporan.css')?>"/>
</head>
<body onload="window.print()">
<div id="laporan">
<table align="center" style="width:900px; border-bottom:3px double;border-top:none;border-right:none;border-left:none;margin-top:5px;margin-bottom:20px;">
<!--<tr>
    <td><img src="<?php// echo base_url().'assets/img/kop_surat.png'?>"/></td>
</tr>-->
</table>

<table border="0" align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:0px;">
<tr>
    <td colspan="2" style="width:800px;paddin-left:20px;"><center><h4>LAPORAN PENJUALAN BARANG</h4></center><br/></td>
</tr>
                       
</table>
 
<table border="0" align="center" style="width:900px;border:none;">
        <tr>
            <th style="text-align:left"></th>
        </tr>
</table>
<?php 
    $b=$jml->row_array();
?>
<table border="1" align="center" style="width:900px;margin-bottom:20px;">
<thead>
<tr>
<th colspan="9" style="text-align:left;">Tanggal : <?php echo $b['tj_tanggal'];?></th>
</tr>
    <tr>
        <th style="width:50px;">No</th>
        <th>No Transaksi</th>
        <th>Tanggal</th>
        <th>Nama Barang</th>
        <th>Merk/Cap</th>
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
        $nofak=$i['tj_id'];
        $tgl=$i['tj_tanggal'];
        $kobar=$i['jd_barang_id'];
        $merk=$i['jd_barang_merk'];
        $nabar=$i['jd_barang_nama'];
        $satuan=$i['jd_barang_satuan'];
        
        $harjul=$i['jd_barang_harga_jual'];
        $qty=$i['jd_barang_jumlah'];
        $total=$i['jd_barang_total'];
?>
    <tr>
        <td style="text-align:center;"><?php echo $no;?></td>
        <td style="padding-left:5px;"><?php echo $nofak;?></td>
        <td style="text-align:center;"><?php echo $tgl;?></td>
        <td style="text-align:left;"><?php echo $nabar;?></td>
        <td style="text-align:center;"><?php echo $merk;?></td>
        <td style="text-align:left;"><?php echo $satuan;?></td>
        <td style="text-align:right;"><?php echo 'Rp '.number_format($harjul);?></td>
        <td style="text-align:center;"><?php echo $qty;?></td>
        <td style="text-align:right;"><?php echo 'Rp '.number_format($total);?></td>
    </tr>
<?php }?>
</tbody>
<tfoot>

    <tr>
        <td colspan="8" style="text-align:center;"><b>Total</b></td>
        <td style="text-align:right;"><b><?php echo 'Rp '.number_format($b['total']);?></b></td>
    </tr>
</tfoot>
</table>
<table align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:20px;">
    <tr>
        <td></td>
</table>
<table align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:20px;">
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