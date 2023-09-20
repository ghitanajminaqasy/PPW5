<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku</title>
</head>
<body>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Harga</th>
                <th>Tgl.Terbit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_buku as $buku)
                <tr>
                    <td>{{ $buku->id }}</td>
                    <td>{{ $buku->judul }}</td>
                    <td>{{ $buku->penulis }}</td>
                    <td>{{ "Rp ".number_format($buku->harga, 2, ',', '.')}}</td>
                    <td>{{ $buku->tgl_terbit->format('d/m/Y') }}</td>
                </tr>
        </tbody>        
    </table>
    <td>
        <form action="{{ route('buku.destroy', $buku->id)}}" method="post">
            @csrf
            <buutton onClick="return confirm('Yakin mau dihapus?')">Hapus</buutton>
        </form>    
    </td>
    <p align="right"><a href= "{{ route ('buku.create') }}"> Tambah Buku </a></p>
    @endforeach

</body>
</html>