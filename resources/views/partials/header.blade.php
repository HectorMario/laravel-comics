@php
   include config_path('navBarr.php')
@endphp


    <div class="white-container">
        <div class="container">
            <div class="logo">
                <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="" id="logo">
            </div>
            <div class="options">
                <ul>
                    @foreach($list as $dato)
                        <li>{{ $dato['option'] }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
