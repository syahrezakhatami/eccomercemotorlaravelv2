@extends ('template')

@section('templateinfo')
<div class="container" style="min-height: 500px">
    <div class="card my-3">
        <div class="card-body">
            <h3>Inventory Motor</h3>
            <a href="{{route('motor.create')}}">Add Motor</a>
            <table class="table table-bordered table-stripped">
                <tr>
                    <th>Brand</th>
                    <th>Harga</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
                <tr>
                    <td>Yamaha R1</th>
                    <td>Rp 1.000.000.000</th>
                    <td><img src="{{asset('storage/r1.jpg')}}" alt="" height= 50px; padding="50px;"></th>
                    <td>
                        <a class="btn btn-warning" href="mainedit">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection

