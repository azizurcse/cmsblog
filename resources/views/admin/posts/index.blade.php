@extends('layouts.admin')

@section('content')
    <h1>Post</h1>
    <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>User Id</th>
            <th>Category Id</th>
            <th>Photo</th>
            <th>Photo Id</th>
            <th>Title</th>
            <th>Body</th>
            <th>Created at</th>
            <th>Updated at</th>
          </tr>
        </thead>
        <tbody>
        @if($posts)
            @foreach($posts as $post)
          <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->user->name}}</td>
            <td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
            <td><img height="50px" width="50px" src="{{$post->photo ? $post->photo->file : 'http://placehold.it/400x400'}}" href=""></td>
            <td>{{$post->photo_id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->body}}</td>
            <td>{{$post->created_at->DiffForHumans()}}</td>
            <td>{{$post->updated_at->DiffForHumans()}}</td>

          </tr>
          @endforeach
        @endif
        </tbody>
      </table>

@stop
