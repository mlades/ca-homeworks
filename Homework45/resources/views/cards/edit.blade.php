@extends('layout')
@include('include.head')
@section('content')
    
<div id="footer" class="wrapper style2">
    <div class="container">
        <section>
            <header class="major">
                <h2>Edit card</h2>
            </header>
            <form method="POST" action="/cards/{{$card->id}}">
                @csrf
                @method('PUT')
                <div class="row half">
                    <div class="12u">
                    <textarea name="body" id="body" cols="30" rows="10" placeholder="Body Text">{{$card->body}}</textarea>
                    </div>
                </div>
                <div class="row half">
                    <div class="12u">
                        <input type="text" name="img_filename" value="{{$card->img_filename}}">
                    </div>
                </div>
                <div class="row half">
                    <div class="12u">
                        <ul class="actions">
                            <li>
                                <input type="submit" value="Edit Card" class="button alt" />
                            </li>
                        </ul>
                    </div>
                </div>
            </form>
        </section>
    </div>
</div>

@endsection