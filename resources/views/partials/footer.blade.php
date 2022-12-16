<?php
$links = config('comicsdb.navbar');
?>
<footer>
    <nav class="nav-bar-footer my-container">
        <div class="button">
                <span class="text-white fw-bold">Sign-up Now!</span>
        </div>
        <ul>
        <span class="text-white text-uppercase">follow us</span>
            @foreach ($links as $link)
            <li>
                <a class="text-white" href="{{$link['url']}}">{{$link['text']}}</a>
            </li>
            @endforeach
        </ul>
    </nav>

</footer>
