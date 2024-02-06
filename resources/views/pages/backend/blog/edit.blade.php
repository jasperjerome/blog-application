@extends('pages.backend.index')

@section('content')
    <div class="row">
        <div class="col-xl-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Form Grid Layout</h4>

                    <form method="post" action="{{ route('blog.update', ['id' => $data->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            @if (\Session::has('error'))
                                <div class="my-3 alert alert-danger alert-dismissible fade show" role="alert"
                                    id="updateAlert">
                                    <i class="uil uil-pen me-2"></i>
                                    {!! \Session::get('error') !!}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="formrow-email-input" class="form-label">Blog Title</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        placeholder="Enter Your Email ID" value="{{ $data->title }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="formrow-password-input" class="form-label">Blog Content</label>
                                    <textarea class="form-control" id="content" name="content"
                                        placeholder="">{{ $data->content }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="formrow-password-input" class="form-label">Category Id</label>
                                    <select name="category_id" class="form-select" id="category_id">
                                        <option disabled selected>Select Category</option>
                                        @foreach ($category as $cat)
                                            <option value="{{ $cat->id }}" {{ $cat->id == $data->category_id ? 'selected' : '' }}>{{ $cat->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary w-md">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
        <!-- end col -->
    </div>
@endsection
