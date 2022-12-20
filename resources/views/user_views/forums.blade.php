@extends('layouts.components')

@section('title', 'Forum')

@section('content')
<h2 align="center" style="color: white;">
    <b>Online Chat</b>
</h2>
<br>
<div class="container">
    <h1 class="text-color-primary fw-bold text-center p-5">
        Forum Diskusi<br> <span class="text-black-50 fs-4 fw-normal"></span>
    </h1>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add Discussion
    </button>
    <div class="row mt-3">
        @foreach ($forum as $item)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">
                    {{ $item->title }}
                </h5>
                <p class="card-text">
                    {{ $item->created_at }} <br> <br>
                    {{ $item->content }}
                </p>
                <a href="/forums/{{ $item->id }}/view" class="btn btn-primary">Read More</a>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="add_forum">
                    @csrf
                    <div class="modal-body">
                        <div class="row mb-3">
                            <label for="" class="col-sm-3 col-form-label">Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="title" placeholder="title">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-3 col-form-label">Slug</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="slug" placeholder="Slug">
                            </div>
                        </div>
                        <input hidden type="text" class="form-control" name="user_id" value="{{ Auth::id() }}">
                        <div class="row mb-3">
                            <label for="" class="col-sm-3 col-form-label">Content</label>
                            <div class="col-sm-9">
                                <textarea name="content" class="form-control" rows="5" placeholder="Content"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    var myModal = document.getElementById('myModal')
    var myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', function() {
        myInput.focus()
    })
</script>
@endsection