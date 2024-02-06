@extends('pages.backend.index')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Categories</h4>
        </div>
    </div>
</div>
    <div class="row">
        <div class="col-xl-6 mx-auto">
            <div class="card">
                <div class="card-body">

                    <form method="post" action="{{route('category.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="formrow-email-input" class="form-label">Category Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Category Name">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="formrow-password-input" class="form-label">Slug</label>
                                    <input type="text" class="form-control" id="slug" name="slug"
                                        placeholder="Slug">
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
