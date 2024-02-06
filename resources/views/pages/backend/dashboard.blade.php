@extends('pages.backend.index')

@section('content')
    <div class="row">
        <div class="col-10">
            <div class="row">
                @foreach ($data as $datas)
                    <div class="col-sm-6 blog-card" data-category={{ $datas->category_id }}>
                        <div class="card p-1 border shadow-none">
                            <div class="p-3">
                                <h5><a href="blog-details.html"
                                        class="text-dark">{{ Str::limit($datas->title, 30, '...') }}</a>
                                </h5>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="text-muted mb-0">{{ $datas->created_at->format('d-m-Y') }}</p>
                                    <p class="text-success text-bolder mb-0">{{ $datas->category->name }}</p>
                                </div>
                            </div>
                            <div class="p-3">
                                <p>{{ Str::limit($datas->content, 150, '...') }}</p>

                                <div>
                                    <a href="{{ route('blog.show', ['id' => $datas->id]) }}" class="text-primary">Read more <i
                                            class="mdi mdi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $data->links('pagination::bootstrap-4') }}
        </div>
        <div class="col-2">
            <div class="col-12">
                <h3>Filter</h3>
                <hr/>
                <select name="category_id" class="form-select" id="category_id">
                    <option disabled>Select Category</option>
                    <option selected>All</option>
                    @foreach ($category as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
@endsection
