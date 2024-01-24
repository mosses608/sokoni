@include('partials.navigate')
@include('partials.footer')<br>
<button class="back_button"><a href="/listings/show">&#8592;</a></button>
<center>
    <div class="read-more-about-me p-10 mt-10">
        <p class="rad-more">Read More About <span>{{$listing->artist_name}}</span></p><br>
        <div class="container">
            <p>{{$listing->description}}</p>
        </div>
    </div><br><br>
</center>

<style>
    body{
        background-color:#ddd;
    }
    .read-more-about-me{
        margin-bottom:10%;
        background-color:#F0F0F0;
        padding:10px;
        width:60%;
    }
    .read-more-about-me .rad-more span{
        color:#0000FF;
    }
    .read-more-about-me .rad-more{
        padding:10px;
        color:#000000;
        font-size:20px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .read-more-about-me .container p{
        padding:10px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .container{
        width:90%;
    }
    .back_button a{
        padding:10px;
        text-decoration:none;
        background-color:inherit;
        font-size:50px;
    }
    .back_button{
        float:left;
        background-color:inherit;
        border:none;
    }
</style>