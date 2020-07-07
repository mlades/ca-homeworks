@extends('layout')
@section('content')
<div id="extra">
	<div class="container">
		<div class="row no-collapse-1">
		
		@foreach($cards as $card)
		
			<section class="4u" style="margin-bottom:20px"> <a href="#" class="image featured"><img src="images/{{$card->img_filename}}" alt=""></a>
				<div class="box">
					<p>{{$card->body}}</p>
					<a href="/cards/{{$card->id}}" class="button">Read More</a> </div>
			</section>
		@endforeach
		</div>
		<a href="/cards/create" class="button">Create Card</a>
	</div>
</div>

@endsection