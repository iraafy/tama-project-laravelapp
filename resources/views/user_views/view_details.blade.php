@extends('layouts.components')

@section('title', 'Forum')

@section('content')
<div class="container">
    <h1 class="text-color-primary fw-bold text-center p-5">
        Forum Diskusi<br> <span class="text-black-50 fs-4 fw-normal"></span>
    </h1>
    <div class="row">
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title
                    ">
                    {{ $forum->title }}
                </h5>
                <p class="card-text">
                    {{ $forum->created_at }} <br> <br>
                    {{ $forum->content }}
                </p>
                <form action="/add-comment" method="post">
                    @csrf
                    <textarea name="content" class="form-control" rows="5" placeholder="Tambah komentar"></textarea>
                    <input hidden type="text" name="user_id" id="" value="{{ Auth::id() }}">
                    <input hidden type="text" name="forum_id" id="" value="{{ $forum->id }}">
                    <input hidden type="text" name="parent_id" id="" value="0">
                    <button type="submit" class="btn btn-secondary mt-3">Kirim</button>
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <h4>
            <b>
                Komentar
            </b>
        </h4>
        @foreach ($comment as $commentData)
        @if ($commentData->forum_id == $forum->id)
        <div class="card mb-3 mt-3">
            <div class="card-body">
                <p class="card-text">
                    {{ $commentData->content }}
                </p>
            </div>
        </div>
        @endif
        @endforeach
    </div>
</div>
@endsection