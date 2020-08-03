@component('mail::message')
<h1>Le news de FasoMag</h1>
@foreach($Articles as $Article)
    <div>
       <h3>$Article-></h3>
        <a href="">Lire l'article</a>
    </div>
@endforeach

@component('mail::button', ['url' => ''])
    Se desabonner
@endcomponent
{{ config('app.name') }}
@endcomponent
