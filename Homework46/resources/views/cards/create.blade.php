@extends('layout')
@section('content')
    
<div id="footer" class="wrapper style2">
    <div class="container">
        <section>
            <header class="major">
                <h2>Create new card</h2>
            </header>
            <form method="POST" action="/cards" enctype="multipart/form-data">
                @csrf
                <div class="row half">
                    <div class="12u">
                        <textarea name="body" id="body" cols="30" rows="10" placeholder="Body Text">Enter short description...</textarea>
                    </div>
                </div>
                <div class="row half">
                    <div class="12u">
                        <input type="file" name="img_filename">
                    </div>
                </div>
                <div class="row half">
                    <div class="12u">
                        <ul class="actions">
                            <li>
                                <input type="submit" value="Save card" class="button alt" />
                            </li>
                        </ul>
                    </div>
                </div>
            </form>
        </section>
    </div>
</div>

@endsection