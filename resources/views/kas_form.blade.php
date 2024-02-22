<!-- kas_index.blade.php -->

@extends('layouts.app_adminkit')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header">
                    <h2>Form Kas Masjid</h2>
                </div>
                <div class="card">
                    <div class="card-body">
                        {!! Form::model($kas, [
                            'route' => isset($kas->id) ? ['kas.update', $kas->id] : 'kas.store',
                            'method' => isset($kas->id) ? 'PUT' : 'POST',
                        ]) !!}

                        <div class="form-group mb-2">
                            {!! Form::label('tanggal', 'Tanggal:') !!}
                            {!! Form::date('tanggal', $kas->tanggal ?? now(), ['class' => 'form-control']) !!}
                            <span class="text-danger">{{ $errors->first('tanggal') }}</span>
                        </div>

                        <div class="form-group mb-2">
                            {!! Form::label('kategori', 'Kategori:') !!}
                            {!! Form::text('kategori', null, ['class' => 'form-control', 'placeholder' => 'Masukan Kategori Kas']) !!}
                            <span class="text-danger">{{ $errors->first('kategori') }}</span>
                        </div>

                        <div class="form-group mb-2">
                            {!! Form::label('keterangan', 'Keterangan:') !!}
                            {!! Form::textarea('keterangan', null, ['class' => 'form-control', 'placeholder' => 'Masukan Keterangan Kas']) !!}
                            <span class="text-danger">{{ $errors->first('keterangan') }}</span>
                        </div>

                        <div class="form-group mb-2">
                            {!! Form::label('jenis', 'Jenis Transaksi:') !!}
                            <div>
                                {!! Form::radio('jenis', 'masuk', true, ['id' => 'jenis_masuk']) !!}
                                {!! Form::label('jenis_masuk', 'Masuk') !!}
                            </div>
                            <div>
                                {!! Form::radio('jenis', 'keluar', false, ['id' => 'jenis_keluar']) !!}
                                {!! Form::label('jenis_keluar', 'Keluar') !!}
                            </div>
                            <span class="text-danger">{{ $errors->first('jenis') }}</span>
                        </div>


                        <div class="form-group mb-2">
                            {!! Form::label('jumlah', 'Jumlah:') !!}
                            {!! Form::number('jumlah', null, ['class' => 'form-control']) !!}
                            <span class="text-danger">{{ $errors->first('jumlah') }}</span>
                        </div>


                        {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
