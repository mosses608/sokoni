
<div class="page_navigation_links">
    <button type="button" class="home_class"><a href="/">Home</a></button>
    <button type="button" class="about_class">About</button>
    <button type="button" class="news_class">News</button>
    <button type="button" class="collaboration"><a href="/listings/collabo">Collaborations</a></button>
    @auth
    <form action="/logout" method="POST">
        @csrf
    <button type="submit" class="sign_out_class">Sign Out</button>
    </form>
    </center>
 @endauth
 <button class="currentDate" style="color:#F0F0F0; margin-left:6%;">currentDate</button>
 <script>
    //get the current date
    const currentDate=new Date();

    //format the date
    const options={weekly: 'long', year: 'numeric', month: 'long', day: 'numeric'};
    const formattedDate=currentDate.toLocaleDateString('en-US', options);

    //display the date on the page
    document.querySelector('.currentDate').textContent=formattedDate;
 </script>
</div>
<br><br>
<div class="news_board">
    <a href="/listings/updates" class="recently-updates">News</a><br>
    <a href="#">Time Table</a><br>
    <a href="#">View Comments</a>
</div>
<div class="about_board">
    <a href="#">Program</a><br>
    <a href="#">Company</a>
</div><br>

<style>
    .page_navigation_links form{
        float:right;
        background-color:inherit;
    }
    .page_navigation_links{
        padding:10px;
        cursor: pointer;
        position:fixed;
        width:100%;
        top:0%;
        background-color:#176B87;
    }
    .page_navigation_links a{
        color:#000000;
        background-color:inherit;
        font-size:14px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        text-decoration:none;
    }
    .page_navigation_links button{
        padding:6px;
        border:none;
        font-size:14px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        padding-left:10px;
        color:#000000;
        background-color:inherit;
        display:inline;
        cursor: pointer;
    }
    .page_navigation_links button:hover, .page_navigation_links a:hover{
        color:#FF00FF;
    }
    .heading{
        display:none;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight:400;
    }
    .heading:hover{
        color:#0000FF
    }
    *{
        box-sizing:border-box;
        padding:0%;
        margin:0%;
    }
    html{
        background-color:#ddd;
    }
    .news_class{
        display:block;
    }
    .news_board{
        position:absolute;
        top:8%;
        display:none;
        left:5%;
        background-color:#000000;
        width:120px;
    }
    .news_board a{
        background-color:#000000;
        display:block;
        font-size:12px;
        padding:10px;
        text-align:center;
        padding-top:4px;
        text-decoration:none;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color:#FFFFFF;
    }
    .news_board a:hover{
        background-color:#FFFFFF;
        border:10px solid #FFFFFF;
        color:#000000;
    }
    .about_board{
        position:absolute;
        top:8%;
        left:0%;
        display:none;
        background-color:#000000;
        width:120px;
    }
    .about_board a{
        background-color:#000000;
        display:block;
        font-size:12px;
        padding:10px;
        text-align:center;
        padding-top:4px;
        text-decoration:none;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color:#FFFFFF;
    }
    .about_board a:hover{
        background-color:#FFFFFF;
        border:10px solid #FFFFFF;
        color:#000000;
    }
    .manage_board{
        position:absolute;
        top:8%;
        left:0%;
        display:none;
        background-color:#000000;
        width:120px;
    }
    .manage_board a{
        background-color:#000000;
        display:block;
        font-size:12px;
        padding:10px;
        text-align:center;
        padding-top:4px;
        text-decoration:none;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color:#FFFFFF;
    }
    .manage_board a:hover{
        background-color:#FFFFFF;
        border:10px solid #FFFFFF;
        color:#000000;
    }
    .recently-updates{
        display:block;
    }
    .active{
        display:block;
    }
</style>
<script>
    var close_button=document.querySelector('.close');
    var closed_items_about_list=document.querySelector('.about_board');
    var closed_items_news_list=document.querySelector('.news_board');
    var news_button=document.querySelector('.news_class');
    var about_button=document.querySelector('.about_class');
    var manage_button=document.querySelector('.manage_class');
    var manage_board=document.querySelector('.manage_board');

    about_button.addEventListener('click', function(){
        closed_items_about_list.classList.toggle('active');
    });

    news_button.addEventListener('click', function(){
        closed_items_news_list.classList.toggle('active');
    });
    manage_button.addEventListener('click', function(){
        manage_board.classList.toggle('active');
    })
</script>