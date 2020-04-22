@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h2>CREATE POST</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('posts.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="#">Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="#">Content</label>
                        <textarea name="content" id="" cols="30" rows="10" class="form-control my-editor"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Store Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@include('plugins.tinymce')
