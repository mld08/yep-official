@extends('admin.base')

@section('title')
    News
@endsection

@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                            <h6 class="text-white text-capitalize ps-3 m-0">News</h6>
                            <a href="{{ route('admin.news.create') }}" class="btn btn-secondary me-3">Add a news</a>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Title
                                        </th>
                                        <th
                                            class="text-right text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($news as $new)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-1 py-1">
                                                    <div class="d-flex flex-column justify-content-center ms-3">
                                                        <h6 class="mb-0 text-sm">{{$new->title}}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <a href="{{ route('admin.news.edit', $new) }}" class="btn btn-warning btn-sm">Modifier</a>
                                                <form action="{{ route('admin.news.destroy', $new) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-sm">Supprimer</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pagination -->
        <div class="d-flex justify-content-end mt-3">
            {{ $news->links() }}
        </div>
    </div>
@endsection
