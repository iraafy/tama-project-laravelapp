@extends('layouts.forum_navbar')

@section('title', 'Forum')

@section('content')
<h2 align="center" style="color: white;">
    <b>Online Chat</b>
</h2>
<br>
<div class="container-fluid">
    <h1 class="text-color-primary fw-bold text-center p-5">
        Forum Diskusi<br> <span class="text-black-50 fs-4 fw-normal"></span>
    </h1>
    <div class="row">
        <div class="col-lg-2 col-sm-12"></div>
        <div class="col-lg-8 col-sm-12">
            <form method="POST" id="chat_form">
                <div class="form-group">
                    <textarea name="chat_content" id="chat_content" class="form-control" placeholder="Enter chat" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <input type="hidden" name="chat_id" id="chat_id" value="0" />
                    <br>
                    <input type="submit" name="submit" id="submit" class="flex btn" style="background-color: #592C75; color:white;" value="submit" />
                </div>
            </form>
            <span id="chat_message"></span>
            <br />
            <div id="display_chat"></div>
        </div>
        <div class="col-lg-2 col-sm-12"></div>
    </div>
</div>
@endsection