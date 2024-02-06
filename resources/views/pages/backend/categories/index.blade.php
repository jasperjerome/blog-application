@extends('pages.backend.index')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Categories</h4>

                <div class="page-title-right">
                    <a href="{{ route('category.create') }}" type="button"
                        class="btn btn-success waves-effect waves-light">Add New</a>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        @if (\Session::has('add'))
                <div class="my-3 alert alert-success alert-dismissible fade show" role="alert" id="updateAlert">
                    <i class="uil uil-pen me-2"></i>
                    {!! \Session::get('add') !!}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (\Session::has('update'))
                <div class="my-3 alert alert-primary alert-dismissible fade show" role="alert" id="updateAlert">
                    <i class="uil uil-pen me-2"></i>
                    {!! \Session::get('update') !!}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (\Session::has('delete'))
                <div class="my-3 alert alert-danger alert-dismissible fade show" role="alert" id="updateAlert">
                    <i class="uil uil-pen me-2"></i>
                    {!! \Session::get('delete') !!}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category Name</th>
                                    <th>Slug</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $index => $datas)
                                    <tr>
                                        <th scope="row">{{ $index + 1 }}</th>
                                        <td>{{ $datas->name }}</td>
                                        <td>{{ $datas->slug }}</td>
                                        <td>
                                            <a href="{{ route('category.edit', ['id' => $datas->id]) }}"
                                                class="btn btn-warning waves-effect waves-light">
                                                <i class="bx bx-pencil font-size-16 align-middle"></i>
                                            </a>
                                            <a href="#deleteCat{{ $datas->id }}" data-bs-toggle="modal"
                                                data-bs-target="#deletemodal{{ $datas->id }}"
                                                class="btn btn-danger waves-effect waves-light">
                                                <i class="bx bx-trash font-size-16 align-middle"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    {{-- category delete modal --}}
                                    <div class="modal fade" id="deletemodal{{ $datas->id }}" aria-hidden="true"
                                        aria-labelledby="..." tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Delete</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="text-muted font-size-16 mb-4">Are you sure you want to delete
                                                        this Category permanently</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <form autocomplete="off" method="POST"
                                                        action="{{ route('category.delete', ['id' => $datas->id]) }}">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger">Yes, Delete</button>
                                                    </form>
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">No, Get
                                                        Back</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
