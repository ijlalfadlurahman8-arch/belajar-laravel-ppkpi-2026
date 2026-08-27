@extends('app')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ $title ?? '' }}
        </div>
        <div class="card-body">
            <form action="{{route('user.update', $editUser->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label fw-semibold">Nama</label>
                    <input type="text" name="name" id="name" class="form-control @error('name')
                        is-invalid
                    @enderror" name="name" value="{{ $editUser->name }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label fw-semibold">Email</label>
                    <input type="email" name="email" id="email" class="form-control @error('email')
                        is-invalid
                    @enderror" required value="{{ $editUser->email }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label fw-semibold">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                    <small class="text-muted">Kosongkan jika tidak ingin mengubah password</small>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary ">Simpan Perubahan</button>
                    <a href="{{ url()->previous() }}" class="btn btn-secondary ">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
