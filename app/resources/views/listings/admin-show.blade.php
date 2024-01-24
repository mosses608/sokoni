<section class="innerHtml">
@include('admins.navigate')
@extends('admins.footer')<br>
<center>
<button type="button" class="back_button"><a href="/listings/administration">&#8592;</a></button>

<div class="delete-update">
    <button type="button" class="update">&#9998;Edit</button>
    <form method="POST" action="/listings/{{$listing->id}}">
        @method('DELETE')
        @csrf
    <button type="submit" class="delete">&#128465;Delete</button>
    </form>
    </div>
    <div class="profile_picture" style="display:none;">
    <img src="{{$listing->profile ? asset('storage/' . $listing->profile) : asset('/images/user.png')}}" alt="Profile"><br>
</div><h2 class="welcome">{{$listing->artist_name}}'s Profile</h2><br></center>
    <div class="single-listing-data" id="single-listing-dat"><br>
            <p>Genre: {{$listing->music_movie_type}}</p>
            <p>Gender: {{$listing->gender}}</p>
            <p>Brand: {{$listing->brand}}</p>
            <p>Nationality: {{$listing->nationality}}</p>
            <p>Occupation: {{$listing->occupation}}</p>
            <br>
            <div class="social_media">
                <a href="https://www.instagram.com/{{$listing->instagram}}"><img src="{{asset('images/instagram.png')}}" alt="Instagram"></a>
                <a href="https://www.twitter.com/{{$listing->twitter}}"><img src="{{asset('images/twitter.png')}}" alt="Twitter"></a>
                <a href="https://wa.me/{{$listing->contact}}"><img src="{{asset('images/whatsapp.png')}}" alt="Whatsapp"></a>
                <a href="https://www.youtube.com/{{$listing->you_tube}}"><img src="{{asset('images/youtube.png')}}" alt="Youtube"></a>
            </div>
    </div><br>
    <center>

<x-updated-card />

<style>
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
    .active{
        display:block;
    }
</style>

<!-- VIEW REQUEST -->
<script>
    const closeButton=document.querySelector('.disappear');
    const containerDataHolder=document.querySelector('.collaboration-request-components');


    closeButton.addEventListener('click', function(){
        containerDataHolder.style.display='none';
    });
</script>

<!-- VIEW RESPONSE-->
<script>
    const viewReponseButton=document.querySelector('.view-response');
    const holderClass=document.querySelector('.collaboration-acceptance-rejection');
    const closeContentsButton=document.querySelector('.collapse');

    viewReponseButton.addEventListener('click', function(){
        holderClass.classList.toggle('active');
    });

    closeContentsButton.addEventListener('click', function(){
        holderClass.style.display='none';
    });
</script>



    <style>
        .paginate span,a{
            color:#FFFFFF;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .single-listing-data p{
            padding:10px;
            display:block;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .single-listing-data{
            padding:6px;
            cursor: pointer;
            width:100%;
            background-color:#FFFFFF;
        }
        .single-listing-data:hover{
            color:#FFFFFF;
            background-color:#444;
        }
        .response-button{
            float:right;
            padding:10px;
            background-color:#007BFF;
            cursor: pointer;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color:#000000;
            margin-right:1%;
            font-size:14px;
            border:none;
        }
        .response-button:hover{
            color:#FFFFFF;
            background-color:#222;
        }
        .collaboration-request-components{
            background-color:#444;
            border-radius:10px;
            width:60%;
            height:400px;
            padding:10px;
            display:none;
            position:absolute;
            overflow-y: scroll;
            left:20%;
            top:15%;
        }
        .collaboration-request-components span,em{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .collaboration-request-components span{
            color:#FF00FF;
        }
        .collaboration-request-components em{
            color:#FF0000;
        }
        .collaboration-request-components p{
            font-style:italic;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color:#FFFFFF;
        }
        .profile_picture img{
            width:70px;
            height:70px;
            border-radius:10rem;
            border:2px solid #FFFFFF;
        }
        .welcome{
            font-weight:400;
            color:#000000;
            text-align:center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .welcome:hover{
            color:#0000FF;
            cursor: pointer;
        }
        .social_media{
            left:35%;
        }
        .social_media img{
            width:50px;
            border-radius:10px;
            height:50px;
            border:1px solid #000000;
            padding :0px;
        }
        .post_class button{
            font-size:18px;
            color:#000000;
            cursor: pointer;
            text-transform:uppercase;
            border:none;
            padding:10px;
        }
        .post_class button a{
            color:#FFFFFF;
            text-decoration:none;
        }
        .post_class .postV a{
            color:#00FF00;
            text-decoration:none;
        }
        .post_class{
            position: fixed;
            bottom:14%;
        }
        .post_class .postV{;
            background-color:blue;
            right:10%;
        }
        .post_class .postN{
            background-color:green;
            left:10%;
        }
        .active{
            display:block;
        }
    </style>
    <center>
        <br><br>
    <!--<div class="social_media">
                <a href="https://www.instagram.com/{{$listing->instagram}}"><img src="{{asset('images/instagram.png')}}" alt="Instagram"></a>
                <a href="https://www.twitter.com/{{$listing->twitter}}"><img src="{{asset('images/twitter.png')}}" alt="Twitter"></a>
                <a href="https://wa.me/{{$listing->contact}}"><img src="{{asset('images/whatsapp.png')}}" alt="Whatsapp"></a>
                <a href="https://www.youtube.com/{{$listing->you_tube}}"><img src="{{asset('images/youtube.png')}}" alt="Youtube"></a>
            </div>-->
            <div class="post_class">
            <button class="postN"><a href="/listings/news/{{$listing->id}}">Post News</a></button><button class="postV"><a href="#">Post Video</a></button>
            </div>
            <br><br><br><br><br><br><br><br><br>
</center>
    </section>

    <center>
    <form action="/listings/{{$listing['id']}}" method="POST" class="update-form">
        @method('PUT')
        @csrf
        <p>Update This Form</p>
        <label for="occupation">Occupation</label><br>
        <input type="text" name="occupation" id="" value="{{$listing->occupation}}"><br><br>
        <label for="artist_name">Artist Name</label><br>
        <input type="text" name="artist_name" id="" value="{{$listing->artist_name}}"><br><br>
        <label for="nationality">Nationality</label><br>
        <input type="text" name="nationality" id="" value="{{$listing->nationality}}"><br><br>
        <label for="gender">Gender</label><br>
        <input type="text" name="gender" id="" value="{{$listing->gender}}"><br><br>
        <label for="contact">Contact</label><br>
        <input type="text" name="contact" id="" value="{{$listing->contact}}"><br><br>
        <label for="email">Email</label><br>
        <input type="email" name="email" id="" value="{{$listing->email}}"><br><br>
        <label for="brand">Brand</label><br>
        <input type="text" name="brand" id="" value="{{$listing->brand}}"><br><br>
        <label for="genre">Genre</label><br>
        <input type="text" name="music_movie_type" id="" value="{{$listing->music_movie_type}}"><br><br>
        <label for="instagram">Instagram Acccount</label><br>
        <input type="text" name="instagram" id="" value="{{$listing->instagram}}"><br><br>
        <label for="twitter">Twitter Acccount</label><br>
        <input type="text" name="twitter" id="" value="{{$listing->twitter}}"><br><br>
        <label for="you_tube">You-Tube Acccount</label><br>
        <input type="text" name="you_tube" id="" value="{{$listing->you_tube}}"><br><br>
        <label for="name">Description About You</label><br>
        <textarea name="description" value="{{$listing->description}}"></textarea><br><br>
        <button type="submit">Update</button><br><br><br><br><br><br><br>
    </form>
    <br><br><br>
    </center>
<style>
    .delete-update .update{
        float:left;
        margin-left:0.5%;
    }
    .delete-update .delete{
        float:right;
    }
    .delete-update{
        background-color:orange;
        width:15%;
        float:right;
        margin-top:-1.5%;
        background-size:cover;
    }
    .delete-update button{
        cursor: pointer;
        display:inline;
        background-color:inherit;
        padding:10px;
        font-size:16px;
        border:none;
    }
    .update-form{
        position:absolute;
        top:8%;    
        left:25%;
        display:none;
        background-color:#F0F0F0;
        padding:8px;
        width:50%;
    }
    .update-form input,textarea{
        width:98%;
        padding:10px;
    }
    .update-form label{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        float:left;
        margin-left:1%;
    }
    .update-form p{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        padding:10px;
        width:100%;
        background-color:#3B3486;
        color:#F0F0F0;
    }
    .update-form button{
        padding:10px;width:120px;
        background-color:#007BFF;
        border:none;
        color:#F0F0F0;
        cursor: pointer;
    }
    .active{
        display:block;
    }
</style>
<script>
    const responsebutton=document.querySelector('.response-button');
    const containerDataHoler=document.querySelector('.collaboration-request-components');

    responsebutton.addEventListener('click', function(){
        containerDataHoler.classList.toggle('active');
    });
</script>

<script>
    const Update=document.querySelector('.update');
    const FormUpdated=document.querySelector('.update-form');
    const innerHtml=document.querySelector('.innerHtml');

    Update.addEventListener('click', function(){
        innerHtml.style.opacity='0.2';

        FormUpdated.classList.toggle('active');
    });
</script>
