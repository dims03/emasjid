@extends('layouts.app_adminkit')

@section('content')

<h1 class="h3 mb-3">Ubah Data User</h1>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    {!! Form::model(auth()->user(), [
                        'route' => ['userprofil.update',0],
                        'method' => 'PUT',
                    ]) !!}
                        <div class="form-group mb-2">
                            <label for="name">Nama</label>
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                            <span class="text-danger">{!! $errors->first('name') !!}</span>
                        </div>
                        <div class="form-group mb-2">
                            <label for="email">Email</label>
                            {!! Form::text('email', null, ['class' => 'form-control']) !!}
                            <span class="text-danger">{!! $errors->first('email') !!}</span>
                        </div>
                        <div class="form-group mb-2">
                            <label for="password">Password</label>
                            {!! Form::password('password', ['class' => 'form-control']) !!}
                            <span class="text-danger">{!! $errors->first('password') !!}</span>
                        </div>
                        <div class="mt-4">
                            {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
                        </div>

                        {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
