@extends('admin.base')

@section('title')
    Gallery
@endsection

@section('content')
    <div class="container-fluid py-2">
        <div class="card-header p-0 position-relative mx-3 z-index-2 my-4">
            <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                <h6 class="text-white text-capitalize ps-3 m-0">Gallery</h6>
                <a href="{{ route('admin.gallery.create') }}" class="btn btn-secondary me-3">Add an image</a>
            </div>
        </div>
        <div class="row">
            @foreach($galleries as $gallery)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{ asset('storage/' . $gallery->image_path) }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Image-{{ $gallery->id }}</h5>
                            <form action="{{ route('admin.gallery.destroy', $gallery) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Pagination -->

    </div>
@endsection
