
    <style>
        .card {
            position: relative;
            border: 0.1rem solid #e5e5e5;
            border-radius: 0.4rem;
            background-color: #FFF;
            color: #000;
        }
        .card-img-top {

            border-radius: 0.4rem 0.4rem 0 0;
        }
        .card-block {
            padding: 1.25rem;
        }

        .card-block img.card-img {
            margin-top: -36px;
            width: 72px;
            border: 3px solid #FFF;
            border-radius: 0.4rem;
            float: left;
            position: relative;
            z-index: 99;
        }
        .card-block .card-title {
            float: left;

            margin: 0;
            margin-left: 0.5em;
        }
        .card-block .card-title small {
            display: block;
        }
        .card-block .card-text {
            clear: both;
            padding-top: 0.25em;
            margin-bottom: 1.5em;
        }

        .card-block ul a:hover {
            text-decoration: none;
        }
        .card-block ul .profile-stats {
            color: #777;
            display: block;
            text-transform: uppercase;
            font-size: 0.63em;
        }
        .card-block ul .profile-value {
            font-size: 1.2em;
            font-weight: bold;
            color: #2F92CA;

        }

    </style>


    <div id="profile-resume" class="card">
        <img class="card-img-top img-responsive" src="{{asset('img/user-bg.jpg')}}">
        <div class="card-block">
            <img src="{{ asset($user->profile->file) }}" class="card-img">
            <h5 class="card-title">{{ $user->name }}<small>{{$user->email}}</small></h5>
            <p class="card-text">{{$user->profile->body}}</p>
            <ul class="list-inline" style="text-align: right">
                <li class="list-inline-item" id="card-tweets" >
                    <a href="#">
                        <span class="profile-stats">Tweets</span>
                        <span class="profile-value">{{$user->comments->count()}}</span>
                    </a>
                </li>
                <li  class="list-inline-item" id="card-following">
                    <a href="#">
                        <span class="profile-stats">Following</span>
                        <span class="profile-value">{{$user->followings->count()}}</span>
                    </a>
                </li>
                <li class="list-inline-item" id="card-followers" >
                    <a href="#">
                        <span class="profile-stats">Followers</span>
                        <span class="profile-value">{{$user->followers->count()}}</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>





