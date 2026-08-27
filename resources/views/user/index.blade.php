@extends('app')
@section('content')
<div class="card">
  <div class="card-header">
        {{ $title ?? '' }}
  </div>
  <div class="card-body">
    <div align="right" class="mb-3">
        <a href="{{route('user.create')}}" class="btn btn-primary">Tambah</a>
    </div>
   <table class="table table-bordered">
        <thead>
            <tr>
                <th>no</th>
                <th>nama</th>
                <th>email</th>
                <th>aksi</th>
            </tr>
        </thead>
        <body>
                    @foreach ($users as $index => $value)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->email }}</td>
                            <td>
                                <a href="{{ route('user.edit', $value->id) }}" class="btn btn-success btn-sm">Edit</a>
                                <form action="{{ route('user.destroy', $value->id) }}" method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-warning">Hapus</button>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                </body>


        </thead>
   </table>
  </div>
</div>
@endsection
