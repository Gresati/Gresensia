@extends('layouts.private.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">Edit Data Home</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('home.update', $home->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="hero">Hero</label>
                            <input id="hero" type="text" class="form-control @error('hero') is-invalid @enderror" name="hero" value="{{ $home->hero }}" required autofocus>
                            @error('hero')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea id="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" required>{{ $home->deskripsi }}</textarea>
                            @error('deskripsi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="foto1">Foto 1</label>
                            <input id="foto1" type="text" class="form-control @error('foto1') is-invalid @enderror" name="foto1" value="{{ $home->foto1 }}" required>
                            @error('foto1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="foto2">Foto 2</label>
                            <input id="foto2" type="text" class="form-control @error('foto2') is-invalid @enderror" name="foto2" value="{{ $home->foto2 }}" required>
                            @error('foto2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="foto3">Foto 3</label>
                            <input id="foto3" type="text" class="form-control @error('foto3') is-invalid @enderror" name="foto3" value="{{ $home->foto3 }}" required>
                            @error('foto3')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
