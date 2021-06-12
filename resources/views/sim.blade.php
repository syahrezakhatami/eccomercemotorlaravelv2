@extends ('template')

@section('templateinfo')
<br>
<style>
    body {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        background-color: gray;
    }
    table{
        font-size: 80%;
    }
    td.f{
        font-size: 300%;
    }
</style>
    <table border="2" align="center" cellpading="0" width="100%">
        <tbody>
            <tr>
                <td rowspan="4"><center><img src="{{asset('storage/polda.jpeg')}}" alt="" width="70px" height="70px"></td>
                <td bgcolor="red"><center><b><font color="goldenrod">KEPOLISIAN NEGARA</td>
                <td class="f" rowspan="4"><center><img src="{{asset('storage/cmetrojaya.jpeg')}}" alt="" width="70px" height="70px"></td>
            <tr>
                <td bgcolor="red"><center><b><font color="goldenrod">REPUBLIK INDONESIA</td>
            </tr>
            <tr>
                <td><center>SURAT IZIN MENGEMUDI</td>
            <tr>
                <td><center>( Driving License )</td>
            </tr>
        </tbody>
    </table>

    <table width="100%" align="center">
        <tr>
            <td align="center"><b>Nama: </td>
            <td><b>SYAHREZA KHATAMI</td>
            <td><b>PRIA</td>
        </tr>
    </table>
        <table cellpading="0" align="center">
        <tr>
            <td align="right"><b>Alamat: </td>
            <td><b>&emsp;KAMBOJA NO 30 RT 006/03 </td>
        </tr>
        <tr>
            <td rowspan="14"><center><img src="{{asset('storage/ktp.jpeg')}}" alt="" width="180px" height="300px"></td>
        </tr>
        <tr>
            <td><b>&emsp;CIJANTUNG</td>
        </tr>
        <tr>
            <td><b>&emsp;JAKARTA TIMUR</td>
        </tr>
        <tr>
            <td>&emsp;Tempat &</td>
            <td>: JAKARTA</td>
        </tr>
        <tr>
            <td>&emsp;Tgl Lahir</td>
            <td>: 16-12-1998</td>
        </tr>
        <tr>
            <td>&emsp;Tinggi</td>
            <td>: 170 cm</td>
        </tr>
        <tr>
            <td>&emsp;Pekerjaan</td>
            <td>: PELAJAR/MAHASISWA</td>
        </tr>
        <tr>
            <td>&emsp;No.SIM</td>
            <td>: 991212059743431</td>
        </tr>
        <tr>
            <td>&emsp;Berlaku s/d</td>
            <td>: 16-12-2022</td>
        </tr>
        <tr>
            <td>&emsp;&emsp;, 23-03-2017</td>
        </tr>
        <tr>
            <td>&emsp;&emsp;DIRLANTAS POLDA METRO JAYA</td>
        </tr>
        <tr>
            <td>&emsp;&emsp;&emsp;&emsp;<img src="{{asset('storage/ttd.png')}}" alt="" width="150px" height="50px"></td>
        </tr>
        <tr>
            <td>&emsp;&emsp;<u>DRS. ERMAYUDI SUMARSONO</td>
        </tr>
        <tr>
            <td>&emsp;&emsp;KOMBES POL NRP .67020346</td>
        </tr>
    </table>



@endsection