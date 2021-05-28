@extends('layout.nav')
@section('content')
<div class="container my-4 col-8 p-5 contact">
    <h2 class="text-center">Contactez nous</h2>
    @if (Session::has('message_sent'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message_sent') }}
        </div>
    @endif
    <form method="POST" action="{{ route('contact.send') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Adresse email</label>
            <input type="email" class="form-control" id="exampleFormControlInput1"
               name="email" placeholder="name@example.com">
        </div>
        <div class="form-group">
            <label  for="exampleFormControlSelect1">Selectionner votre requête</label>
            <select class="form-control" id="exampleFormControlSelect1" name="requete">
                <option>Application Mobile</option>
                <option>Site internet</option>
                <option>Application pour PC</option>
            </select>
        </div>
        <div class="form-group" >
            <label for="exampleFormControlTextarea1">Votre message</label>
            <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button class="btn btn-primary w-25">Submit</button>
    </form>
</div>

    
@endsection
