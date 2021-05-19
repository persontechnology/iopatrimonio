@extends('layouts.app')

@section('content')

<script src="{{ asset('js/youtube-playlist-player.min.js') }}"></script>
<div class="container">
    <div id="player" style="width: 100%;height: 500px;"></div>
    <script>
		$(document).ready(function(){

        var links=@json($videos);
        
            var mp = $("#player").YTPL(
				links
			);
			window.MP = mp.data('YTPL');
			mp.on('changed',function(event,index){
				console.log(index);
			});
			
			
			
		});
		</script>


</div>


@endsection
