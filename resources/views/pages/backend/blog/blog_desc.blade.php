@extends('pages.backend.index')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Blog Details</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Blog</a></li>
                        <li class="breadcrumb-item active">Blog Details</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="pt-3">
                        <div class="row justify-content-center">
                            <div class="col-xl-8">
                                <div>
                                    <div class="text-center">
                                        <div class="mb-4">
                                            <a href="javascript: void(0);" class="badge bg-primary font-size-12">{{ $data->category->name }}</a>
                                        </div>
                                        <h4>{{ $data->title }}</h4>
                                        <p class="text-muted mb-4"><i class="mdi mdi-calendar me-1"></i>{{ $data->created_at->format('d-m-y') }}</p>
                                    </div>

                                    <hr>
                                    <div class="text-center">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div>
                                                    <p class="text-muted mb-2">Categories</p>
                                                    <h5 class="font-size-15">Project</h5>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="mt-4 mt-sm-0">
                                                    <p class="text-muted mb-2">Date</p>
                                                    <h5 class="font-size-15">{{ $data->created_at->format('d-m-y') }}</h5>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="mt-4 mt-sm-0">
                                                    <p class="text-muted mb-2">Post by</p>
                                                    <h5 class="font-size-15">Gilbert Smith</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="mt-4">
                                        <div class="text-muted font-size-14">
                                            <p class="mb-4">{{ $data->content }}</p>
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
@endsection
