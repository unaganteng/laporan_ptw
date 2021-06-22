<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kop Surat</title>
</head>
@foreach($mahasiswa as $m)
<table align="center">
    <tr>
    <td><center>
        <font size="5">UNIVERSITAS 17 AGUSTUS 1945 SURABAYA<b></font><br>
        <font size="3">Jl. Semolowaru No.45, Menur Pumpungan, Kec. Sukolilo, Kota SBY, Jawa Timur 60118<i></font><br></center>
    </td>
    </tr>
    <tr>
        <td colspan="2"><hr> </td>
    </tr>
</table>
<br>
<table align="center">
    <tr>
        <td height="50">Yang bertanda tangan dibawah ini:</td>
        <td width="300"></td>

    </tr>
    <tr>
        <td height="50" colspan="3">Nama: Teknik Informatika</td>
        <td width="300"></td></tr>
    </tr>
    <tr>
        <td height="50" colspan="3">Jabatan: Kepala Desa</td>
        <td width="300"></td></tr>
    </tr>
    <tr>
        <td height="50" colspan="3">Menyatakan dengan sebenarnya bahwa:</td>
        <td width="300"></td></tr>
    </tr>
    <tr>
        <td height="50" colspan="3">NIK: {{$m->nbi}}</td> 
        <td width="300"></td></tr>
    </tr>
    <tr>
        <td height="50" colspan="3">Nama: {{$m->nama}}</td>
        <td width="300"></td><tr></tr>
    </tr>
    <tr>
        <td height="50" colspan="3">Tempat/Tanggal Lahir: {{$m->tmp_tgl}}</td>
        <td width="300"></td></tr>
    </tr>
    <tr>
        <td height="50" colspan="3">Adalah benar merupakan warga desa UNTAG.</td>
        <td width="300"></td></tr>
    </tr>
</table>
<table align = "right">
    <tr>
        <td height="50">UNTAG, 22 Juni 2021</td>
        <td width="600"></td></tr>
    </tr>
    <tr>
       <td height="5"> Kepala Desa</td>
       <td width="400"></td></tr>
    </tr>
    <tr>
        <td height="250" size="3">Teknik Informatika</td>
       <td width="400"></td></tr>
    </tr>
    <tr>
        <a href="#">print to pdf</a>
    </tr>
</table>
@endforeach
<body>
</body>
</html>