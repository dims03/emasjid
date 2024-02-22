<!-- kas_index.blade.php -->

@extends('layouts.app_adminkit')

@section('content')
<h1 class="mb-4">Form Kas Masjid</h1>
{!! Form::open(['route' => 'kas.store', 'method' => 'post']) !!}

    <div class="form-group mb-2">
        {!! Form::label('tanggal', 'Tanggal:') !!}
        {!! Form::date('tanggal', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group mb-2">
        {!! Form::label('kategori', 'Kategori:') !!}
        {!! Form::text('kategori', null, ['class' => 'form-control', 'placeholder' => 'Masukan Kategori Kas']) !!}
    </div>

    <div class="form-group mb-2">
        {!! Form::label('keterangan', 'Keterangan:') !!}
        {!! Form::textarea('keterangan', null, ['class' => 'form-control', 'placeholder' => 'Masukan Keterangan Kas']) !!}
    </div>

    <div class="form-group mb-2">
        {!! Form::label('jenis', 'Jenis:') !!}
        {!! Form::select('jenis', ['masuk' => 'Masuk', 'keluar' => 'Keluar'], null, ['class' => 'form-control', 'placeholder' => 'Pilih Jenis Kas']) !!}
    </div>

    <div class="form-group mb-2">
        {!! Form::label('jumlah', 'Jumlah:') !!}
        {!! Form::number('jumlah', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group mb-2">
        {!! Form::label('saldo_akhir', 'Saldo Akhir:') !!}
        {!! Form::number('saldo_akhir', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group mb-3">
        {!! Form::label('created_by', 'Created By:') !!}
        {!! Form::number('created_by', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    </div>
{!! Form::close() !!}
@endsection
