@include('partials.navigate')
@extends('partials.footer')
<form action="/logout" method="POST">
    @csrf
<button type="submit" class="back_button">&#8592;</button>
</form>
    <center><br>
    <form action="/users" method="POST" class="user_registration">
        @csrf
        <p>Fill This Form Correctly</p><br>
        <label for="email">Email</label>
        <input type="email" name="email" id="" placeholder="Create email" value="{{old('email')}}"><br>
        @error('email')
        <span>Email is required!</span>
        @enderror
        <br><br>
        <label for="username">UserName</label>
        <input type="text" name="name" id="" placeholder="Create username" value="{{old('username')}}" autocomplete="off"><br>
        @error('name')
        <span>Username is required!</span>
        @enderror
        <br><br>
        <label for="password">Password</label>
        <input type="password" name="password" id="" placeholder="Create password|passcode" autocomplete="off"><br>
        @error('password')
        <span>Password is required!</span>
        @enderror
        <br><br>
        <button type="submit">Register</button><br><br>
    </form>
    </center>
    <style>
        .back_button a{
            font-size:40px;
            color:#FF0000;
            text-decoration:none;
        }
        .back_button{
            font-size:40px;
            color:#176B87;cursor: pointer;
            float:left;
            padding:10px;
            background-color:inherit;
            border:none;
        }
        .back_button a:hover{
            color:#000000;
        }
        .user_registration{
            background-color:#FFFFFF;
            width:80%;
        }
        .user_registration p{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding:10px;
            background-color:#279EFF;
        }
        .user_registration p:hover{
            color:#F0F0F0;
        }
        .user_registration label{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size:18px;
            float:left;
            margin-left:1%;
        }
        .user_registration input{
            width:70%;
            padding:10px;
            margin-right:1%;
            border:1px solid #111;
            float:right;
        }
        .user_registration button{
            padding:10px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            border:none;
            width:20%;
            cursor: pointer;
            background-color:#007BFF;
            color:#FFFFFF;
        }
        .user_registration span{
            color:red;
            font-size:10px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-style:italic;
        }

        @media(max-width:768px){
            
        }
    </style>
