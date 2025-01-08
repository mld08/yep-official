@extends('admin.base')

@section('title')
    Add a News
@endsection

@section('content')

<div class="container">
    <h1>Create a news</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route($news->exists ? 'admin.news.update' : 'admin.news.store', $news) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method($news->exists ? 'put' : 'post')
        <div class="mb-3 p-3">
            <label for="title" class="form-label">Titre</label>
            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror shadow p-3" required value="{{ old('title', $news->title) }}">
        </div>
        <div class="mb-3 p-3">
            <label for="content" class="form-label">Contenu</label>
            <textarea name="content" class="form-control shadow @error('content') is-invalid @enderror p-3" rows="5" required>{{ old('content', $news->content) }}</textarea>
        </div>
        <div class="mb-3 p-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror shadow p-3">
        </div>
        <div class="mb-3 p-3">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
    </form>
</div>


@endsection
