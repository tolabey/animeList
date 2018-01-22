@extends('welcome')



@section('main')

    @section('title')
        <h1>Add New Anime</h1>
    @endsection

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New Post</h1>
            <hr>

            {!! Form::open(['route' => 'anime.store']) !!}
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title', null, array('class' => 'form-control')) }}
            {{ Form::label('body', 'Post Body:') }}
            {{ Form::textarea('body', null, array('class' => 'form-control')) }}
            {{ Form::label('topic', 'Topic: ') }}
            {{ Form::select('Topic  ', array('topic1' => '23 nisan', 'topic2' => '19 mayıs')) }}

            {{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
            {!! Form::close() !!}

        </div>
    </div>
@endsection
