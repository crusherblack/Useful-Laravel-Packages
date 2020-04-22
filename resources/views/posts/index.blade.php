@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h2>LIST POSTS <a href="{{ route('posts.create') }}" class="btn btn-success">Create Post</a></h2>
            </div>
            @foreach ($posts as $post)
            <div class="card">
                <img src="https://picsum.photos/seed/picsum/200/300" class="card-img-top" alt="..." style="height:400px;width:100%" class="img img-fluid">
                <div class="card-body">
                    <h5 class="card-title">ID: {{ $post->id }} </h5>
                    <h5 class="card-title">{{ $post->title }} </h5>
                    <h6>Slug: {{ $post->slug }} {{ $post->created_at }}</h6>
                    <p class="card-text">{!! $post->content !!}</p>
                    
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
