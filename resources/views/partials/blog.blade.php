@foreach($blogs as $blog)
    <div class="col-md-6 mb-4">
        <div class="card">
            <img src="{{ $blog->image }}" width="100%" height="300px%">
            <div class="card-body">
                <h5 class="card-title">{{$blog->title}}</h5>
                <p class="card-text">{{$blog->description_short}}</p>
                <a href="{{ route('blog.show', $blog->slug) }}" class="btn btn-primary">{!! __('page.blog.index.button') !!}</a>
            </div>
        </div>
    </div>

@endforeach
