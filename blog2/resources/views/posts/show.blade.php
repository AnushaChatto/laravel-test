@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
           <!-- <div class="col-md-8 col-md-offset-2"> -->
                <div class="panel panel-default">

                    <div class="panel-body">
                        <h4>{{ $post->title }}</h4>
                        <p>{{ $post->content }}</p>
                        @if ($post_editable == 1)
                            <form action="{{ route('posts.destroy', ['id' => $post->id]) }}" method="post">
                                <input type="hidden" name="_method" value="delete">
                                <a class="btn btn-primary" href="{{ route('posts.edit', ['id' => $post->id]) }}">Edit</a>
                                <button class="btn btn-danger" type="submit">Delete Post</button>
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                {{ csrf_field() }}
                            </form>
                        @endif
                    </div>
               <!-- </div> -->
            </div>
        </div>
    </div>
@endsection