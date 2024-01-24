@props(['listing'])

<x-card>
            <img src="{{$listing->profile ? asset('storage/' . $listing->profile) : asset('/images/user.png')}}" alt="Profile" class="profile">
            <h2><a href="#" class="name">Name: {{$listing->artist_name}}</a></h2>
            <p>Occupation: {{$listing->occupation}}</p>
            <p>Genre: {{$listing->music_movie_type}}</p>
            <p>Gender: {{$listing->gender}}</p>
            <br>
            <!--<p>Contact: {{$listing->contact}}</p>-->
            <div class="social_media">
                <button type="button" class="read-more p-10 mt-10"><a href="/listings/description/{{$listing->id}}">Read More</a></button><br><br>
                <a href="https://www.instagram.com/{{$listing->instagram}}"><img src="{{asset('images/instagram.png')}}" alt="Instagram"></a>
                <a href="https://www.twitter.com/{{$listing->twitter}}"><img src="{{asset('images/twitter.png')}}" alt="Twitter"></a>
                <a href="https://wa.me/{{$listing->contact}}"><img src="{{asset('images/whatsapp.png')}}" alt="Whatsapp"></a>
                <a href="https://www.youtube.com/{{$listing->you_tube}}"><img src="{{asset('images/youtube.png')}}" alt="Youtube"></a>
            </div><br>
            <div class="created-in">
            <p style="font-size:10px; background-color:#864AF9; width:95%; color:#FFFFFF; border-radius:10px;text-align:center;" id="created-in">{{$listing->artist_name}} posted this profile in {{$listing->created_at}}</p>
            </div>
</x-card>