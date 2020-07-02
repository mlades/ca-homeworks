@extends('layout')
@section('content')
<div id="extra">
	<div class="container">
		<div class="row no-collapse-1">
		@foreach($cards as $card)
			<section class="4u"> <a href="#" class="image featured"><img src="{{$card->img_filename}}" alt=""></a>
				<div class="box">
					<p>{{$card->body}}</p>
					<a href="#" class="button">Read More</a> </div>
			</section>
		@endforeach
		</div>
		
	</div>
</div>
@endsection