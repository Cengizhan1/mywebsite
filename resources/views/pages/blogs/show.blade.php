@extends('layout')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title">{{ $blog->title }}</h2>
                        <p class="card-text">{!! $blog->description !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
