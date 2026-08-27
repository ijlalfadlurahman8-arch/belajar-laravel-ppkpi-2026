@extends('app')
@section('content')
<div class="card">
  <div class="card-header">
        {{ $title ?? '' }}
  </div>
  <div class="card-body">
            <form action="{{route('user.store')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label fw-semibold">Nama</label>
                    <input type="text" name="name" id="name" class="form-control @error('name')
                        is-invalid
                    @enderror" name="name" value="{{ old('name') }}">
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
                    @enderror" required value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label fw-semibold">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary ">Simpan</button>
                    <a href="{{ url()->previous() }}" class="btn btn-secondary mt-2">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
