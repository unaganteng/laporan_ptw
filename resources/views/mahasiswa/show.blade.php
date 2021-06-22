@extends('layout/main')

@section('title','Surat Keterangan')

@section('container')
<a href="#" class="btn btn-primary">Cetak PDF</a> 
<table align="center">
    <tr>
    <td><center>
        <font size="5"><b>UNIVERSITAS 17 AGUSTUS 1945 SURABAYA</b></font><br>
        <font size="3"><i>Jl. Semolowaru No.45, Menur Pumpungan, Kec. Sukolilo, Kota SBY, Jawa Timur 60118</i></font><br>
    </td>
    </tr>
    <tr>
        <td colspan="2"><hr> </td>
    </tr>
    <tr>
        <td colspan="2"><center><font size="5"><B>SURAT KETERANGAN</b></font><br> </center></td>
    </tr>
</table>
<br>
<table align="center">
    <tr>
        <td width="50"></td>
        <td width="50"></td>
        <td width="50"></td>
        <td width="300"></td>

    </tr>

    <tr>
        <td height="50" colspan="3">Yang bertanda tangan dibawah ini:</td>
        <td width="300"></td>

    </tr>
    <tr>
        <td height="50" colspan="2">Nama</td>
        <td width="300">:  Teknik Informatika</td></tr>
    </tr>
    <tr>
        <td height="50" colspan="2">Jabatan</td>
        <td width="300">:  Kepala Desa</td></tr>
    </tr>
    <tr>
        <td height="50" colspan="3">Menyatakan dengan sebenarnya bahwa:</td>
        <td width="300"></td></tr>
    </tr>
    <tr>
        <td height="50" colspan="2">NIK</td> 
        <td width="300">:  {{$mahasiswa->id}}</td></tr>
    </tr>
    <tr>
        <td height="50" colspan="2">Nama</td>
        <td width="300">:  {{$mahasiswa->nama}}</td><tr></tr>
    </tr>
    <tr>
        <td height="50" colspan="2">Tempat/Tanggal Lahir</td>
        <td width="300">:  {{$mahasiswa->tmp_tgl}}</td></tr>
    </tr>
    <tr>
        <td height="50" colspan="3">Adalah benar merupakan warga desa UNTAG.</td>
        <td width="300"></td></tr>
    </tr>
</table>
<table align = "right">
    <tr>
        <td height="50"><center>UNTAG, <?php echo date('d F Y');  ?></center></td>
        <td width="700"></td></tr>
    </tr>
    <tr>
       <td height="5"> <center>Kepala Desa</center></td>
       <td width="400"></td></tr>
    </tr>
    <tr>
        <td height="300" size="3"><center>Teknik Informatika</center></td>
       <td width="400"></td></tr>
    </tr>
    <tr>
       <td height="5"></td>
       <td width="400"></td></tr>
    </tr>
 </table>

@endsection