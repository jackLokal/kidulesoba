@extends("layout.base")
@section('container')
    <div class="container mx-5">
        <h4>Tambah Buku</h4>
        <form method="post" action="{{route('buku.store')}}" class="form form-control">
        @csrf
        <label for="" class="form-label">Judul</label>
        <br>
        <input type="text" name="judul">
        <br>
        <label for="" class="form-label">Penulis</label>
        <br>
        <input type="text" name="penulis">
        <br>
        <label for="" class="form-label">Harga</label>
        <br>
        <input type="text" name="harga">
        <br>
        <label for="" class="form-label">Tanggal Terbit</label>
        <br>
        <input type="date" name="tgl_terbit">
        <br>
        <button type="submit" class="btn btn-success mt-4">Simpan</button>
        <a href="/buku" class="btn btn-danger mt-4">Batal</a>
        </form>
    </div>
@endsection
