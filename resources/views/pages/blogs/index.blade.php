@extends('layout')

@section('content')
    <div class="container">
        <div class="container py-5">
            <h2 class="mb-4">{!! __('page.blog.index.title') !!}</h2>
            <div class="row">
                @if($blogs->count() > 0)
                    @include('partials.blog',['blogs'=>$blogs])
                @endif
            </div>
        </div>
    </div>
@endsection
