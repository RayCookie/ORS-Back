@extends('layout.index')
@section('content')
    <div class="container-fluid">
        <div class="row">

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">All Events
                    </h1>
                    <a href="{{ route('create_event') }}" class="btn btn-primary float-right">Add Event</a>
                </div>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="row">
                    @foreach($events as $event)
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                @if($event->image)
                                <img class="card-img-top" src="{{ asset('images/'.$event->image) }}" alt="Blog Post Image">
                            @endif
                                <div class="card-body">
                                    <h5 class="card-title">{{ $event->title }} by <small><i>{{ $event->auteur }}</i></small></h5>
                                    <p class="card-text">
                                        {{ $event->body }}
                                    </p>
                                    <a href="{{ route('edit_event', ['event_id' => $event->id]) }}" class="card-link btn btn-primary">Edit</a>
                                    <form action="{{ url('destroy_eventpost',$event->id) }}" method="POST">
                                        <input type="hidden" name="_method" value="delete">
                                        {!! csrf_field() !!}

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </main>
        </div>
    </div>
@endsection
