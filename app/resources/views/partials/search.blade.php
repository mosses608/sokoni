
<center>
    <div class="single_item_search"><br>
    <center><marquee behavior="smooth" direction="left"  class="heading"><h1>{{$heading}}</h1></marquee></center>

        <form action="/" method="GET" class="search_single_form">
            <input type="text" name="search" id="search" class="search" placeholder="Search an artist here" autocomplete="on">
            <button type="submit" class="submit">Search</button><br><br>
            @auth
                <p class="profile_name" style="text-align:center;margin-top:0%;color:#008000;font-weight:400;">Welcome, {{auth()->user()->name}}</p>
                @endauth
        </form>
    </div>
    <script>
        var searchInput=document.querySelector('.search');
        var submit_button=document.querySelector('.submit');

        submit_button.addEventListener('click', function(){
            const inputValue=searchInput.value;

            if(inputValue===""){
                alert('This field should not be empty!');
            }
        });
    </script>
</center>
<style>
    .single_item_search{
        padding:10px;
        margin-top:-4%;
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
    .all_listings{
        background-color:#FFFFFF;
        background-size:cover;
        padding:6px;
        width:50%;
        height:380px;
        border:2px solid #3B3486;
        float:left;
        display:inline;
        
    }
    .all_listings:hover{
        background-color:#666;
        color:#FFFFFF;
        cursor: pointer;
    }
    .all_listings p,h2,img{
        padding:4px;
    }
    .all_listings .profile{
        width:60px;
        height:60px;
        border-radius:20px;
    }
    .all_listings h2,a{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight:400;
        text-decoration:none;
    }
    .all_listings p{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .social_media img{
        width:30px;
        border-radius:10px;
        border:1px solid #333;
        margin-left:6px;
        padding:0px;
        height:30px;
    }
    .created-in p:hover{
        background-color:orange;
        opacity: 0.5;
    }
    .social_media .read-more a{
        text-decoration:none;
        color:#F0F0F0;
    }
    .social_media .read-more{
        padding:10px;
        border:none;    
        background-color:#007BFF;
        border-radius:10px;
        cursor:pointer;
    }
    @media(max-width:768px){
        .social_media img{
            width:25px;
            height:25px;
        }
        .name{
            font-size:18px;
        }
        .all_listings{
            padding:2px;
            height:400px;
            margin-bottom:1%;
        }
        .all_listings h2{
            font-size:16px;
        }
        .heading{
            font-size:18px;
        }
        .single_item_search{
            margin-top:-6%;
        }
    }

    @media(max-width:400px){
        body{
            height:900px;
        }
        .heading h1{
            display:block;
            margin-top:8%;
            font-size:24px;
        }
        .all_listings{
            padding:5px;
            height:320px;
            margin-bottom:1%;
        }
        .all_listings p{
            font-size:10px;
        }
        .created-in p{
            width:100%;
            font-size:6px;
            padding:4px;
        }
        .social_media img{
            width:30px;
            height:30px;
        }
        .social_media .read-more{
            padding:4px;
            font-size:12px;
        }
        .all_listings .profile{
            padding:4px;
            width:30px;
            height:30px;
        }
        .all_listings h2 a{
            font-size:14px;
        }
    }

    @media(max-width:412px){
        .heading h1{
            display:block;
            margin-top:8%;
            font-size:24px;
        }
        .all_listings{
            padding:5px;
            height:320px;
            margin-bottom:1%;
        }
        .all_listings p{
            font-size:10px;
        }
        .created-in p{
            width:100%;
            font-size:6px;
            padding:4px;
        }
        .social_media img{
            width:30px;
            height:30px;
        }
        .social_media .read-more{
            padding:4px;
            font-size:12px;
        }
        .all_listings .profile{
            padding:4px;
            width:30px;
            height:30px;
        }
        .all_listings h2 a{
            font-size:14px;
        }
    }

    @media(max-width:414px){
        body{
            height:900px;
        }
        .heading h1{
            display:block;
            margin-top:8%;
            font-size:24px;
        }
        .all_listings{
            padding:5px;
            height:320px;
            margin-bottom:1%;
        }
        .all_listings p{
            font-size:10px;
        }
        .created-in p{
            width:100%;
            font-size:6px;
            padding:4px;
        }
        .social_media img{
            width:30px;
            height:30px;
        }
        .social_media .read-more{
            padding:4px;
            font-size:12px;
        }
        .all_listings .profile{
            padding:4px;
            width:30px;
            height:30px;
        }
        .all_listings h2 a{
            font-size:14px;
        }
    }
    @media(max-width:320px){
        body{
            height:900px;
        }
        .heading h1{
            display:block;
            margin-top:8%;
            font-size:24px;
        }
        .all_listings{
            padding:5px;
            height:320px;
            margin-bottom:1%;
        }
        .all_listings p{
            font-size:10px;
        }
        .created-in p{
            width:100%;
            font-size:6px;
            padding:4px;
        }
        .social_media img{
            width:30px;
            height:30px;
        }
        .social_media .read-more{
            padding:4px;
            font-size:12px;
        }
        .all_listings .profile{
            padding:4px;
            width:30px;
            height:30px;
        }
        .all_listings h2 a{
            font-size:14px;
        }
    }

    @media(max-width:360px){
        .heading h1{
            display:block;
            margin-top:8%;
            font-size:24px;
        }
        .all_listings{
            padding:5px;
            height:320px;
            margin-bottom:1%;
        }
        .all_listings p{
            font-size:10px;
        }
        .created-in p{
            width:100%;
            font-size:6px;
            padding:4px;
        }
        .social_media img{
            width:30px;
            height:30px;
        }
        .social_media .read-more{
            padding:4px;
            font-size:12px;
        }
        .all_listings .profile{
            padding:4px;
            width:30px;
            height:30px;
        }
        .all_listings h2 a{
            font-size:14px;
        }
    }
</style>