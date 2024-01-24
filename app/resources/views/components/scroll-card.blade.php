<button class="scroll" onclick="scrollToTop()" style="">&#8593;</button>
<style>
    .scroll{
        border-radius:30px;width:55px;height:55px;font-size:40px;text-align:center;position:fixed;bottom:16%;right:2%;padding:10px;background-color:#444;color:#FFFFFF;border:none;background-size:contain;cursor:pointer;
    }
    .scroll:hover{
        color:#00FFFF;
    }

    @media(max-width:400px){
        .scroll{
            bottom:12%;
            padding:4px;
            height:40px;
            width:40px;
            font-size:20px;
        }
    }
</style>
<script>
    const topscroll=document.querySelector('.scroll');
    function scrollToTop(){
        window.scrollTo({
            top:0,
            behavior:'smooth'
        });
        topscroll.textcontent="Top";
    }
</script>