
<html lang="en" moznomarginboxes mozdisallowselectionprint>
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/struk.css')?>"/>
</head>
<body onload="window.print()">
<div id="laporan">
<?php 
    $b=$data->row_array();
?>
<table border="0" align="center" style="width:700px;border:none;margin-bottom: 2px;">

        <tr>
            <?php if ($b['barang_jenis'] == 'Barang-kering') { ?>
                <th colspan="4"><h1>Dua Cahaya Makmur</h1></th>
           <?php }else{ ?>
                 <th colspan="4"><h1>Pare Makmur</h1></th>
          <?php } ?>     
        </tr>
        <tr>
            <th style="text-align:left;width: 10%;">Email</th>
            <th style="text-align:left;width: 40%;">: ristidam0909@gmail.com</th>
        </tr>
        <tr>
            <th style="text-align:left;">Telepon</th>
            <th style="text-align:left;">: 081930090069</th>
            
            <th style="text-align:center;width: 10%;">Kategori</th>
            <th style="text-align:left;width: 40%;">:<?php if ($b['barang_kategori'] == 'Bahan Pangan') {
                echo " Bahan Pangan";
            }elseif ($b['barang_kategori'] == 'Barang Non-Food') {
                echo " Barang Non-Food";
            }elseif ($b['barang_kategori'] == 'Buah-Buahan') {
                echo " Buah - buahan";
            }elseif ($b['barang_kategori'] == 'Sayuran') {
                echo " Sayuran";
            }elseif ($b['barang_kategori'] == 'Bumbu Dapur') {
                echo " Bumbu Dapur";
            }elseif ($b['barang_kategori'] == 'Bahan Pangan dan Lain-lain') {
                echo " Bahan Pangan dan Lain-lain";
            }elseif ($b['barang_kategori'] == 'Lauk Pauk') {
                echo " Lauk Pauk";
            } ?> </th>
        </tr>
        <tr>
            <th style="text-align:left;">Periode</th>
            <th style="text-align:left;">:<?php echo date(' Y'); ?></th>
            <th style="text-align:center;">Office</th>
            <th style="text-align:left;">: Jakarta</th>
        </tr>
        <tr>
            <td colspan="6"><h1>____________________________________________________</h1></td>
        </tr>
       <!--  <tr>
            <th style="text-align:left;">Periode</th>
            <th style="text-align:left;">: <?php echo $b['periode'];?></th>
        </tr> -->
</table>
</div>
<table id="tabel" border="1" align="center" style="width:750px;margin-bottom:20px;">
<thead>

    <tr>
        <?php if ($b['barang_jenis'] == 'Barang-kering') { ?>
        <th style="width:50px;">No</th>
        <th style="width: 150px;">Nama Barang</th>
        <th style="width: 100px;">Merk</th>
        <th>Ukuran</th>
        <th>Satuan</th>
        <th style="width: 85px">Harga</th>
      <?php  }else{ ?>
        <th style="width:50px;">No</th>
        <th style="width: 150px;">Nama Barang</th>
        <th>Satuan</th>
        <th style="width: 85px">Harga</th>
    <?php  } ?>
        
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
        <?php if ($b['barang_jenis'] == 'Barang-kering') { ?>
        <td style="text-align:center;"><?php echo $no;?></td>
        <td style="text-align:left;"><?php echo $nabar;?></td>
        <td style="text-align:center;"><?php echo $merk;?></td>
        <td style="text-align:center;"><?php echo $ukuran;?></td>
        <td style="text-align:center;"><?php echo $satuan;?></td>
        <td style="text-align:right;"><?php echo number_format($jual);?></td>
       <?php }else{ ?>
        <td style="text-align:center;"><?php echo $no;?></td>
        <td style="text-align:left;"><?php echo $nabar;?></td>
        <td style="text-align:center;"><?php echo $satuan;?></td>
        <td style="text-align:right;"><?php echo number_format($jual);?></td>
     <?php  } ?>
        
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