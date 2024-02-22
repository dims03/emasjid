<!-- kas_index.blade.php -->

@extends('layouts.app_adminkit')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header"><h2>Data Kas</h2></div>
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('kas.create') }}" class="btn btn-primary mb-3">Tambah Data Kas</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Masjid ID</th>
                                <th>Tanggal</th>
                                <th>Kategori</th>
                                <th>Keterangan</th>
                                <th>Jenis</th>
                                <th>Jumlah</th>
                                <th>Saldo Akhir</th>
                                <th>Created By</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $k)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $k->masjid_id }}</td>
                                <td>{{ $k->tanggal }}</td>
                                <td>{{ $k->kategori }}</td>
                                <td>{{ $k->keterangan }}</td>
                                <td>{{ $k->jenis }}</td>
                                <td>{{ $k->jumlah }}</td>
                                <td>{{ $k->saldo_akhir }}</td>
                                <td>{{ $k->created_by }}</td>
                                <td>
                                    <a href="{{ route('kas.show', $k->id) }}" class="btn btn-info btn-sm">Show</a>
                                    <a href="{{ route('kas.edit', $k->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <form action="{{ route('kas.destroy', $k->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
