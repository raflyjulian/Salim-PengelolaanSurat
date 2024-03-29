@extends('layouts.template')

@section('content')
<form action="{{ route('userg.update', $userg['id']) }}" method="POST" class="card p-5">
    @csrf
    @method('patch')

    @if ($errors->any())
    <ul class="alert alert-danger p-3">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">Nama :</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" value="{{ $userg['name'] }}">
        </div>
    </div>

    
    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">Email :</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="email" name="email" value="{{ $userg['email'] }}">
        </div>
    </div>

    
    <div class="mb-3 row">
        <label for="price" class="col-sm-2 col-form-label">Ubah Pasword:</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="password" name="password" value="{{ $userg['password'] }}">
        </div>
    </div>

    <button type="submit" class="btn btn-primary mt-3">Ubah Data</button>
</form>
@endsection