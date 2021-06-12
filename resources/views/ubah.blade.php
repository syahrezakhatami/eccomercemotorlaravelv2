@extends ('template')

@section('templateinfo')
<div class="container my-3 w-50" style="min-height: 500px">
    <div class="card">
        <div class="card-body">
            <h3>Edit Inventory Motor</h3>
            <form action="#" method="POST">
                <ul class="list-group">
                    Brand <input type="text" name="brand" value="Yamaha R1" required>
                    Harga <input type="text" name="harga" value="Rp 1.000.0000.000,-" required>
                    Gambar <input type="text" name="gambar" value="r1.jpg" required>
                </ul>
                <hr>
                <a href="{{route('motor.index')}}" class= "btn btn-primary">Kembali</a>
                <input type="submit" value="Simpan" class= "btn btn-success">
            </form>
        </div>
    </div>
</div>

@endsection