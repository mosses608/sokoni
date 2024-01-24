@include('partials.navigate')
@extends('partials.footer')
<br>
<center>
<div class="single_item_search">
    <form action="/video/showVideo" method="GET">
        @csrf
        <input type="text" name="search" id="" placeholder="Search artist name here"><button type="submit">Search</button>
    </form>
</div>
</center>

<iframe src="https://www.youtube.com/mosses608?controlls"></iframe>

@foreach($videos as $video)
<video width="440" height="360" controls="1">
    <source src="{{ asset('videos/' . $video->filename) }}" type="video/mp4">
</video>
@endforeach


<style>
    video{
        padding:4px;
        float:left;
    }
    .single_item_search{
        padding:10px;
    }
    .single_item_search form input{
        padding:12px;
        background-color:#FFFFFF;
        color:#000000;
        width:70%;
        border:1px solid #999;
    }
    .single_item_search form button{
        padding:10px;
        float:right;
        margin-right:4%;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color:#38419D;
        border:1px solid #999;
        width:20%;
        color:#FFFFFF;
        cursor:pointer;
    }
    .single_item_search form button:hover{
        background-color:#0000FF;
        color:#FFFFFF;
    }
</style>