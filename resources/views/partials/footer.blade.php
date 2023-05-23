@php
    include config_path('footer.php');
@endphp
<div class="backgraund">
    <div class="container">
        <div class="left">
            @foreach ($links as $key => $link)
                <ul>
                    <strong>
                        {{ $key }}
                    </strong>
                    @foreach ($link as $item)
                        <li>
                            <a href="">
                                {{ $item['name'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            @endforeach
        </div>
        <div class="right">
            <img src="{{Vite::asset('resources/images/dc-logo-bg.png')}}" alt="" id="dc-logo">
        </div>
    </div>
</div>
<div class="contact">
    <div class="container">
        <div class="left-contact">
            <button>
                SIGN-UP NOW!
            </button>
        </div>
        <div class="right-contact">
            <strong>
                FOLLOW US
            </strong>
            <ul>
                @foreach ($social as $image)
                <li v-for="image in social">
                    <a href="">
                        <img :src="{{vite::asset($image['name'])}}" alt="" id="social">
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
