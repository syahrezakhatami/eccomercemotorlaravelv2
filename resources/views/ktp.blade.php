@extends ('template')

@section('templateinfo')
<br>
<br>
<style>
img {
    width:200px;
    height:300px;
}

body {
    background-image: url('storage/ktpimage.jpg');
    background-repeat: no-repeat;
    background-position: center center;
    background-size: 800px 1100px;
    
}


</style>
    <table align="center">
        <tr>
        <h4><center>PROVINSI DKI JAKARTA</center></h4>
        <h4><center>JAKARTA TIMUR</center></h4>
        </tr>
        <tr>
            <td colspan="3"><h3>NIK : 31750516129910011</h3></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>SYAHREZA KHATAMI</td>
            <td rowspan="8"><img src="{{asset('storage/ktp.jpeg')}}" alt=""></td>
        </tr>
        <tr>
            <td>Tempat/Tgl Lahir</td>
            <td>:</td>
            <td>JAKARTA, 16-12-1999</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>LAKI-LAKI</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>JL KAMBOJA NO.30</td>
        </tr>
        <tr>
            <td text align="right">RT/RW</td>
            <td>:</td>
            <td>006/03</td>
        </tr>
        <tr>
            <td text align="right">Kel/Desa</td>
            <td>:</td>
            <td>CIJANTUNG</td>
        </tr>
        <tr>
            <td text align="right">Kecamatan</td>
            <td>:</td>
            <td>PASAR REBO</td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td>ISLAM</td>
        </tr>
        <tr>
            <td>Status Perkawinan</td>
            <td>:</td>
            <td>BELUM KAWIN</td>
            <td><center>JAKARTA TIMUR</center></td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>:</td>
            <td>PELAJAR/MAHASISWA</td>
            <td><center>09-05-2018</center></td>
        </tr>
        <tr>
            <td>Kewarganegaraan</td>
            <td>:</td>
            <td>WNI</td>
        </tr>
        <tr>
            <td>Berlaku Hingga</td>
            <td>:</td>
            <td>SEUMUR HIDUP</td>
        </tr>

@endsection