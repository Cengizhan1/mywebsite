@extends('layout')

@section('content')
    <div class="container mt-5">
        <h2>Create a Blog</h2>
        <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data" onsubmit="prepareContent()">
            @csrf
            <div class="form-group">
                <label for="title">{!! __('page.blog.create.form.title') !!}</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="title">{!! __('page.blog.create.form.description_short') !!}</label>
                <input type="text" class="form-control" id="description_short" name="description_short">
            </div>
            <div class="form-group">
                <label for="description">{!! __('page.blog.create.form.description') !!}</label>
                <textarea class="form-control" id="description" name="description" rows="6" style="display:none;"></textarea>
            </div>
            <div class="form-group">
                <label for="slug">{!! __('page.blog.create.form.slug') !!}</label>
                <input type="text" class="form-control" id="slug" name="slug">
            </div>
            <div class="form-group">
                <label for="image">{!! __('page.blog.create.form.image') !!}</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <button type="submit" class="btn btn-primary">{!! __('page.blog.create.form.button') !!}</button>
        </form>
    </div>

    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.2/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });

        function prepareContent() {
            document.querySelector('#description').value = ClassicEditor.instances[0].getData();
        }
    </script>
@endsection
