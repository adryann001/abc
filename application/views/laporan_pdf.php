<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Cuti</title>
</head>

<body>
    <?php
function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
 
	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
?>

    <?php

$id = 0;
foreach($cuti as $i)
:
$id++;
$id_cuti = $i['id_cuti'];
$id_user = $i['id_user'];
$nama_lengkap = $i['nama_lengkap'];
$alasan = $i['alasan'];
$nip = $i['nip'];
$pangkat = $i['pangkat'];
$jabatan = $i['jabatan'];
$perihal_cuti = $i['perihal_cuti'];
$tgl_diajukan = $i['tgl_diajukan'];
$mulai = $i['mulai'];
$berakhir = $i['berakhir'];
$id_status_cuti = $i['id_status_cuti'];

?>

    <?php $diff = abs(strtotime($mulai) - strtotime($berakhir));
    $years = floor($diff / (365*60*60*24));
    $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
    $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
    ?>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:150%; font-size:12pt;"><span
            style="height:0pt; text-align:left; display:block; position:absolute; z-index:-1;">
            <img src="<?= base_url();?>assets/login/images/ptricky.jpg" alt="IMG"
                width="105" height="105" alt="" class="fr-fir fr-dib fr-draggable"></span><strong><span
                style="font-family:'Times New Roman';">PT RICKY KENCANA SUKSES MANDIRI</span></strong></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:150%;"><span
            style="font-family:Arial;">Jalan Sebatok Tembus Patal - Pusri No. 1B Palembang 30114 - Indonesia</span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:150%;"><span
            style="font-family:Arial;">Telp +62 711-311700 Fax. +62 711-379600</span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:150%;"><span
            style="font-family:Arial;">email : ricky_ksm@yahoo.co.id</span></p>
            <p></p>
    <hr>
    <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%;"><span
            style="font-family:'Times New Roman';">&nbsp;</span></p>
    <p
        style="margin-top:0pt; margin-left:252pt; margin-bottom:0pt; text-indent:36pt; text-align:justify; line-height:150%;">
        <span style="font-family:'Times New Roman';">Palembang, <?= tgl_indo($tgl_diajukan)?></span>
    </p>
    <p
        style="margin-top:0pt; margin-left:252pt; margin-bottom:0pt; text-indent:36pt; text-align:justify; line-height:150%;">
        <span style="font-family:'Times New Roman';">Kepada</span>
    </p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span
            style="font-family:'Times New Roman';">Nomor</span><span
            style="width:4.84pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span style="font-family:'Times New Roman';">: 020/
            30 /Penda/2020</span><span style="width:11.14pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span style="font-family:'Times New Roman';">Yth.
            Ke</span><span style="font-family:'Times New Roman';">Direktur PT Ricky Kencana Sukses Mandiri
            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; Lampiran</span><span style="font-family:'Times New Roman';">&nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp;&nbsp;</span><span style="font-family:'Times New Roman';">: 1 (satu) lembar</span><span
            style="font-family:'Times New Roman';">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp; &nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;&nbsp;Daerah Kota Palembang&nbsp;</span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span
            style="font-family:'Times New Roman';">Perihal</span><span
            style="width:4.84pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span style="font-family:'Times New Roman';">:
            <?=$perihal_cuti?>&nbsp;</span><span style="width:22.14pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span>
    <p
        style="margin-top:0pt; margin-left:36pt; margin-bottom:0pt; text-indent:36pt; text-align:justify; line-height:150%;">
        <span style="font-family:'Times New Roman';">&nbsp;&nbsp;</span><span
            style="width:1.09pt; text-indent:0pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; text-indent:0pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; text-indent:0pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; text-indent:0pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; text-indent:0pt; display:inline-block;">&nbsp;</span><span
            style="width:45pt; text-indent:0pt; display:inline-block;">&nbsp;</span><span
            style="font-family:'Times New Roman';">Di-</span>
    </p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:55pt; display:inline-block;">&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
            style="font-family:'Times New Roman';">Palembang</span><span
            style="width:6.02pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
    </p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span style="font-family:'Times New Roman';">Dengan Hormat,</span
            style="width:36pt; display:inline-block;">&nbsp;</span><span style="font-family:'Times New Roman';">Yang bertanda tangan dibawah ini:</span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%;"><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;Nama</span><span
            style="width:6.9pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span style="font-family:'Times New Roman';">:
            <?=$nama_lengkap?></span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%;"><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;Nip</span><span
            style="width:16.75pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span style="font-family:'Times New Roman';">:
            <?=$nip?></span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%;"><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;Pangkat</span><span
            style="width:16.75pt; display:inline-block;">&nbsp;</span><span
            style="width:34pt; display:inline-block;">&nbsp;</span><span
            style="width:16.46pt; display:inline-block;"></span><span style="font-family:'Times New Roman';">:
            <?=$pangkat?></span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%;"><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;Jabatan</span><span
            style="width:0.27pt; display:inline-block;">&nbsp;</span><span
            style="width:34pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span style="font-family:'Times New Roman';">: <?=$jabatan?></span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%;"><span
            style="font-family:'Times New Roman';">&nbsp;</span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span
            style="width:0pt; display:inline-block;">&nbsp;</span><span
            style="width:0pt; display:inline-block;">&nbsp;</span><span style="font-family:'Times New Roman';">Dengan
            ini saya mengajukan Permohonan Cuti selama <?=$days?> hari kerja, yaitu
            terhitung mulai
            tanggal <?=$mulai?> s.d <?=$berakhir?> yang akan di pergunakan untuk <?=$alasan?>.</span>
    </p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:250%;"><span
            style="width:0pt; display:inline-block;">&nbsp;</span><span
            style="width:0pt; display:inline-block;">&nbsp;</span><span
            style="width:0pt; display:inline-block;">&nbsp;</span><span style="font-family:'Times New Roman';">Demikian
            Permohonan ini saya ajukan, atas pertimbangan dan perhatian Bapak diucapkan terima kasih.</span></p>
    <<p
        style="margin-top:20pt; margin-left:36pt; margin-bottom:0pt; text-indent:36pt; text-align:justify; line-height:150%;">
        <span style="font-family:'Times New Roman';">&nbsp;&nbsp;</span><span
            style="width:0pt; text-indent:0pt; display:inline-block;">&nbsp;</span><span
            style="width:0pt; text-indent:0pt; display:inline-block;">&nbsp;</span><span
            style="width:0pt; text-indent:0pt; display:inline-block;">&nbsp;</span><span
            style="width:7pt; text-indent:0pt; display:inline-block;">&nbsp;</span><span
            style="font-family:'Times New Roman';">Hormat saya,</span>
        </P>
    <p style="margin-top:60pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span
            style="width:0pt; display:inline-block;">&nbsp;</span><span
            style="width:65pt; display:inline-block;">&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
            style="width:-10pt; display:inline-block;">&nbsp;</span><span style="font-family:'Times New Roman';">
            <?=$nama_lengkap?></span></p>
    <p></p>
    <?php endforeach; ?>
</body>

</html>