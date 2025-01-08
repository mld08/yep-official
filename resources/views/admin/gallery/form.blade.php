@extends('admin.base')

@section('title', $gallery->exists ? "Edit an image" : "Add an image")

@section('content')

<div class="container">
    <h1>@if ($gallery->exists) Edit an Image @else Create an image(s) @endif</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 p-3">
            <label class="form-label">Images</label>
            <input type="file" name="images[]" class="form-control @error('images[]') is-invalid @enderror shadow p-3" multiple required>
        </div>
        <div class="mb-3 p-3">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
    </form>
</div>


@endsection
