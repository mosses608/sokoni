@extends('partials.footer')
@include('partials.navigate')
<button type="button" class="back_button"><a href="/listings/show">&#8592;</a></button><br>

@foreach($users as $user)
@endforeach
<center>
    <div class="postVideo p-10 mt-10">
        <form action="/videos" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="Name">Name</label><br><br>
            <input type="text" name="name" id="" placeholder="Enter your artist name" value="{{auth()->user()->name}}"><br>
            @error('name')
            <span>Fill This Field, Please!</span>
            @enderror
            <br>
            <label for="Upload Video">Upload video</label><br><br>
            <input type="file" name="video" id=""><br>
            @error('video')
            <span>This field cannot be empty!</span>
            @enderror
            <br>
            <button type="submit">Upload</button><br><br>
        </form>
    </div>
</center>

<style>
    .postVideo form span{
        color:red;
        font-style:italic;
        float:left;
        margin-left:2%;
        font-size:12px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .postVideo form button{
        padding:10px;
        width:98%;
        border:none;
        background-color:#176B87;
        color:#F0F0F0;
        cursor: pointer;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .postVideo form input{
        padding:10px;
        width:98%;
    }
    .postVideo form label{
        float:left;
        margin-left:1%;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .postVideo form{
        width:60%;
        background-color:#F0F0F0;
    }
    .back_button a{
        padding:10px;
        text-decoration:none;
        background-color:inherit;
        font-size:50px;
        color:#176B87;
    }
    .back_button{
        float:left;
        background-color:inherit;
        border:none;
    }
</style>