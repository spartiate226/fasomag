@extends('admin.socle')

@section('content')
    <form action="@if(isset($actualite)) {{route('Adminarticle.update',[$actualite->id])}} @else {{route('Adminarticle.store')}}  @endif" method="POST" enctype="multipart/form-data">
        @csrf
        @if(isset($actualite)) @method('PUT') @endif
        @if(session('reponse'))
            <div class="section-heading ml-5 mr-5 mt-2 shadow">
                <h5>{{session('reponse')}}</h5>
            </div>
        @endif
        <input type="text" name="auteur" hidden value="auteur">
        <div class="row m-0 p-4">
            <section class="col-md-8 m-2 p-2 shadow">
                <div class="form-group">
                    <label>Titre de l'article</label>
                    <input class="form-control" required name="titre" type="text" @if(isset($actualite))  value="{{$actualite->titre}}" @endif placeholder="Titre">
                </div>
                <div class="form-group">
                    <label>Contenue</label>
                    <textarea class="form-control" name="contenue" required>
                        @if(isset($actualite)) {{$actualite->contenue}} @endif
                    </textarea>
                </div>
            </section>
            <section class="col-md-3 p-2 m-2 shadow">
                <div class="form-group" @if(isset($actualite)) hidden @endif>
                    <label>Image</label>
                    <input name="image"  class="form-control-file border p-2 bg-light" type="file" placeholder="Photo">
                </div>
                <div class="form-group">
                    <label>Categorie</label>
                    <select class="form-control" name="categorie_id">
                        @foreach($categorie as $categorie)
                        <option @if(isset($actualite) && $actualite->categorie->nom==$categorie->nom) selected @endif value="{{$categorie->id}}">{{$categorie->nom}}</option>
                        @endforeach
                    </select>
                </div>
            </section>
        </div>
        <div class="pl-4">
            <button class="btn btn-primary">Publier</button>
        </div>
    </form>
@endsection
