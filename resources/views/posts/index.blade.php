@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-end">
    <a href={{route('posts.create')}} class="btn btn-success mb-2">Add Post</a>
</div>

<div class="card card-default">
    <div class="card-header">Posts</div>

    <div class="card-body">
        <table class="table">
            <thead>
                <th>Image</th>
                <th>Title</th>
                <th></th>
                <th></th>
            </thead>

            <tbody>
                @foreach($posts as $post)

                <tr>
                    <td><img src="{{asset('storage/'. $post->image)}}" alt="" width="50%"></td>
                    <td>{{$post->title}}</td>
                    <td>
                        <a href="" class="btn btn-info btn-sm">Edit</a>
                    </td>
                    <td>
                        <a href="" class="btn btn-danger btn-sm">Trash</a>
                    </td>

                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>



@endsection