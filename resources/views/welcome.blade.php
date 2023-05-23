@extends('layout\app')

@section('content')
    <div class="black">
        <div class="img">

        </div>
        <div class="container">
            <div class="category">
                CURRENT SERIES
            </div>
            <div class="triller">
                <div class="series">
                    @foreach ($comics as $comic)    
                    <div class="serie">
                        <div class="ima">
                            <img src="{{$comic['thumb']}}" alt="" id="Serial">
                        </div>
                        <p>{{ $comic['series'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
        <div class="load">
            <button>LOAD MORE</button>
        </div>
    </div>
    @include('partials.comerse')
    @include('partials.footer')
@endsection
