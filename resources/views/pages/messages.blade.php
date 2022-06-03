@extends('layouts.ad')
@section('content')
<style>
    .message {
        display: none;
    }
    p {
        margin-left: 280px;
    }
    form {
        margin-left: 280px;
    }
    textarea {
        width: 800px;
        height: 100px;
        font-size: 20px
    }
    button {
        color: #fff;
        background-color: #000;
        width: 150px;
        padding: 8px;
    }
    
    button:hover {
        background-color: red;
        border: 1px solid red;
        transition: 1s;
    }
</style>
<p class="text-sm" style="border-top: 1px solid black; font-size: 20px;font-weight: bold">{{$message->Email}}</p>
<p class="text-sm" style="font-size: 20px">{{$message->Message}}</p>
<p class="text-sm text-muted" style="border-bottom: 1px solid black;font-size: 20px">
<i class="fa fa-clock-o mr-1"></i> Send at: {{$message->created_at}}</p>

<form class="main_form" action="/pages/messages/{{$message->id}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <textarea class="textarea" placeholder="Message" name="Your_Reply"></textarea>
        </div>
        <div class="col-md-12">
            <button class="send">Send</button>
        </div>
    </div>
</form>
@endsection