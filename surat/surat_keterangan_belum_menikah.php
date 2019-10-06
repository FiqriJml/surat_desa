<?php

require_once __DIR__ . '/../vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();

$nomer_surat = $_GET['nomer_surat'];
$nama = $_GET['nama'];
$tempat_lahir = $_GET['tempat_lahir'];
$tgl_lahir = $_GET['tgl_lahir'];
$jenis_kelamin = $_GET['jenis_kelamin'];
$warganegara = $_GET['warganegara'];
$goldar = $_GET['goldar'];
$agama = $_GET['agama'];
$status_perkawinan = $_GET['status_perkawinan'];
$pekerjaan = $_GET['pekerjaan'];
$alamat = $_GET['alamat'];

$yang_ttd = $_GET['yang_ttd'];

// menentukan tanggal sekarang Lokasi Waktu Indonesia
date_default_timezone_set('Asia/Singapore');
setlocale(LC_ALL, 'IND');
$hari_ini = strftime('%e %B %Y');

//create html of the data
ob_start();
?>

<style type="text/css">
    .surat{
        // width: 20.9cm;
        // height: 29.6cm;
        /*background-color: pink;*/
        background-color: #fff;
    }
    .surat h1{
        margin: 0px -15px; 
        padding: 12px;
    }
    .surat-isi{
        padding: 0cm 1.5cm;
    }
    .surat-kop{
        border-bottom: solid;
        /*background-color: #ff6;*/
        font-size: 13px;
    }
    .surat-badan{
        padding-top: 1cm;
        /*background-color: #fe4;*/
        /*height:100%; display:block;*/
    }
    .surat-ttd{
        /*background-color: #eef;*/
        width: 6cm;
        margin-left: 9.2cm;
    }
    .kop-logo{
        float: left;
        width: 80px;
    }
    .kop-isi{
        text-align: center;
        font-weight: bold;
    }
    .clearfix {
      overflow: auto;
    }
    .text-center{
        text-align: center;
    }
    .text-justify{
        text-align: justify;
    }
    .text-top{
        vertical-align: top;
    }
    .tabel{
        padding-left: 2.5cm;
        padding-right: 2cm;
    }
    .tabel .label-td{
        width: 3.6cm;
    }
    .tabel td{
        font-size: 14px;
    }
    .garis_bawah{
        border-bottom: solid 2px;
    }
    .form-surat{
        background-color: #fff;
        /*padding: 20px 30px;*/
        padding-bottom: 50px;
        margin-bottom: 50px;
    }
    .form-surat h1{
        /*font-weight: bold;*/
        padding: 12px;

    }
</style>
        <div class="surat">
            <div class="surat-isi">
                <div class="surat-kop clearfix">
                    <div class="kop-logo"> 
                        <img src="../assets/images/logo_lombok_barat.png" width="80px;">
                    </div>
                    <div class="kop-isi">
                        PEMERINTAH KABUPATEN LOMBOK BARAT<br>
                        <!-- K E C A M A T A N  L A B U A P I <br> -->
                        KECAMATAN LABUAPI<br>
                                DESA PERAMPUAN <br>
                        Alamat Jln. Raya Pengsong No.  21  Tlp. 085303700606 Desa Perampuan 
                  <br> E-Mail: desaperampuan@gmail.com Kode Pos 83361
                    </div>
                </div>
                <div class="surat-badan">
                    <div class="text-center">
                        <span class="garis_bawah"><b>SURAT KETERANGAN</b></span> <br>
                        <div style="margin-top: 3px;">
                        Nomor : <?= $nomer_surat; ?>. /&emsp;&emsp;/ PRM / 2019 <br>
                        </div>
                    </div>
                    <br>
                    <div class="text-justify">
                        <p>&emsp;&emsp;&emsp;Yang bertandatangan dibawah ini Kepala Desa Perampuan, Kecamatan Labuapi, Kabupaten Lombok Barat, menerangkan dengan sebenarnya bahwa:</p>
                        <div class="tabel">
                            <table border="0">
                                <tr>
                                    <td class="label-td">Nama</td> <td>:&emsp;</td> <td> <b><?= $nama; ?></b></td>
                                </tr>
                                <tr>
                                    <td>Tempat/tgl. lahir</td> <td>:</td> <td><?= $tempat_lahir; ?>, <?= $tgl_lahir; ?></td>
                                </tr>
                                <tr>
                                    <td>Jenis kelamin</td> <td>:</td> <td><?= $jenis_kelamin; ?></td>
                                </tr>
                                <tr>
                                    <td>Warganegara</td> <td>:</td> <td><?= $warganegara; ?></td>
                                </tr>
                                <tr>
                                    <td>Golongan darah</td> <td>:</td> <td><?= $goldar; ?></td>
                                </tr>
                                <tr>
                                    <td>Agama</td> <td>:</td> <td><?= $agama; ?></td>
                                </tr>
                                <tr>
                                    <td>Status Perkawinan</td> <td>:</td> <td><?= $status_perkawinan; ?></td>
                                </tr>
                                <tr>
                                    <td>Pekerjaan</td> <td>:</td> <td><?= $pekerjaan; ?></td>
                                </tr>
                                <tr>
                                    <td valign="top">Alamat</td> <td valign="top">:</td> 
                                    <td class="text-justify" valign="top"><?= $alamat; ?> </td>
                                </tr>
                            </table>
                        </div>  
                        <br>
                        <p>&emsp;&emsp;&emsp;Yang namanya tersebut diatas memang benar penduduk yang berdomisili dan bertempat tinggal di wilayah kami Desa Perampuan, Kecamatan Labuapi, Kabupaten Lombok Barat. Sepanjang pengetahuan dan pengecekan kami serta menurut keterangan yang bersangkutan bahwa, yang bersangkutan memang benar sampai saat ini, <strong><i>Belum Menikah</i></strong>.</p>
                        <p>&emsp;&emsp;&emsp;Demikian surat keterangan ini kami buat dengan sebenarnya untuk dapat dipergunakan sebagaimana mestinya.</p>
                    </div>
                    <br><br> <br><br>
                    <div class="surat-ttd">
                        Perampuan, <?= $hari_ini ?><br>
                        Kepala Desa Perampuan <br> <br><br><br> <br> <br> <br>



                            <div class="text-center">
                            <b>(    <?= $yang_ttd; ?>    )</b></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php 
$body = ob_get_clean();
$mpdf->WriteHTML($body);
ob_get_clean();
$mpdf->Output("Surat Keterangan Belum Menikah.pdf", 'I');
?>