@extends('layout')
@section('content')
    
    <!-- Page -->
    <div id="page" class="container">
        <section>
            <header class="major">
                <img src="/images/{{$card->img_filename}}" alt="">
            </header>
            <p>{{ $card->body }}</p>
            <p>
					@foreach($card->categories as $category)
						<a href="/cards?category={{ $category->name}}"> {{ $category->name}}</a>
					@endforeach
				</p>
        </section>
        <div class="row half">
            <a href="/cards/{{$card->id}}/edit" class="button">Edit</a>
            <form action="/cards/{{$card->id}}/delete" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="button">Delete</button>
            </form>
        </div>
    </div>
    <!-- /Page -->

@endsection