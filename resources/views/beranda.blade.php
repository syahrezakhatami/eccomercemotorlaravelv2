@extends ('layouts.app')

@section('content')
<div class="container" style="min-height: 500px">
    <div class="card my-3">
        <div class="card-body">
            <h3>Inventory Motor</h3>
            <a href="{{route('motor.create')}}">Add Motor</a>
            <table class="table table-bordered table-stripped">
                <tr>
                    <th>Kode Produk</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
                @foreach ($products as $product)
                <tr>
                    <td>{{$product->kode_produk}}</td>
                    <td>{{$product->nama}}</td>
                    <td>{{$product->deskripsi}}</td>
                    <td>
                        <a class="btn btn-warning" href="mainedit">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection

