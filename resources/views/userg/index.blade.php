@extends('layouts.template')

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@section('content')

    @if(Session::get('success'))
            <div class="alert alert-success"> {{ Session::get('success') }} </div>
    @endif
    @if(Session::get('deleted'))
        <div class="alert alert-warning"> {{ Session::get('deleted') }} </div>
    @endif
    <a href="{{ route('userg.create') }}" class="btn btn-secondary mb-4" style="float: right">Tambah Pengguna</a>

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach ($userg as $item)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['email'] }}</td>
                    <td>{{ $item['role'] }}</td>
                    <td class="d-flex justify-content-center">
                         <a href="{{ route('userg.edit', $item['id']) }}" class="btn btn-primary me-3">Edit</a>
                            <form action="{{ route('userg.delete', $item['id']) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Hapus</button>
                            </form> 
                    </td>  
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection