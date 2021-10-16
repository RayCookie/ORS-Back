@extends('layout.index')

@section('custom_top_script')
@stop

@section('content')
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>Ajouter article</h3>
        </div>
        <div class="module-body">
            <form method="post" action="{{ route('posts.store') }}">

                @csrf
                @include('posts.errors')

                <div class="field">
                    <label class="label">Title</label>
                    <div class="control">
                        <input type="text" name="title" value="{{ old('title') }}" class="input" placeholder="Title" minlength="5" maxlength="100" required />
                    </div>
                </div>

                <div class="field">
                    <label class="label">Content</label>
                    <div class="control">
                        <textarea name="content" class="textarea" placeholder="Content" minlength="5" maxlength="2000" required rows="10">{{ old('content') }}</textarea>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Author</label>
                    <div class="control">
                        <input name="author" value="{{old('author')}}" class="input" placeholder="Author"  minlength="5" maxlength="100" required />
                    </div>
                </div>

                <div class="field">
                    <label class="label">Category</label>
                    <div class="control">
                        <div class="select">
                            <select name="category" required>
                                <option value="" disabled selected>Select category</option>
                                <option value="html" {{ old('category') === 'html' ? 'selected' : null }}>HTML</option>
                                <option value="css" {{ old('category') === 'css' ? 'selected' : null }}>CSS</option>
                                <option value="javascript" {{ old('category') === 'javascript' ? 'selected' : null }}>JavaScript</option>
                                <option value="php" {{ old('category') === 'php' ? 'selected' : null }}>PHP</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Image</label><div class="field">

                    <input type="file" name="image" class="form-control" placeholder="image">
                </div>

                <div class="field">
                    <div class="control">
                        <button type="submit" class="button is-link is-outlined">Publish</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@stop

@section('custom_bottom_script')

    <script type="text/javascript" src="{{ asset('static/custom/js/script.addbook.js') }}"></script>

@stop
