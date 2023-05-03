@extends("layout.base")
@section('container')
<table class="table table-striped mt-5">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Harga</th>
            <th>Tanggal Terbit</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data_buku as $buku)
        <tr>
            <td>{{$buku->id}}</td>
            <td>{{$buku->judul}}</td>
            <td>{{$buku->penulis}}</td>
            <td>{{"Rp ".number_format($buku->harga, 2, ',', '.')}}</td>
            <td>{{$buku->tgl_terbit}}</td>
            <td>
                <a class="btn btn-warning" href="{{route('buku.edit',$buku->id)}}">Edit</a>
                <a class="btn btn-danger" href="{{route('buku.destroy',$buku->id)}}">Hapus</a>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>

<p><a class="btn btn-primary mx-5" href="{{route('buku.create')}}">Tambah Buku</a></p>

<h5 class="mx-5">
    Jumlah Buku: {{$data_buku->count('id')}}
</h5>
<p class="mx-5">
    Total Harga: {{"Rp ".number_format($data_buku->sum('harga'))}}
</p>
@endsection


