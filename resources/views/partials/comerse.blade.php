@php
   include config_path('comerse.php')
@endphp

<div class="blue">
    <div class="container">
        <ul>
            @foreach ($options as $option)      
            <li >
                <a href="">
                    <img id="buys" src="{{ Vite::asset($option['img']) }}" alt="">
                    <p>{{ $option['text'] }}</p>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</div>