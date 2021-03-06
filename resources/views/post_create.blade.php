@extends('layout.index')
@section('content')
    <div class="container-fluid">
        <div class="row">

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Create A Post</h1>
                </div>
                    <form action="{{ route('store_new_post') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Enter blog title" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="body">Blog Content</label>
                            <textarea class="form-control" rows="5" name="body" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="auteur">Author</label>
                            <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Enter blog author" name="auteur" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Feature Image</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Create Post</button>
                    </form>
            </main>
        </div>
    </div>
@endsection
