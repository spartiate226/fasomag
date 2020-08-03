@component('mail::message')
<h5>Hello !!</h5>

<p>
    Vous venez de vous abonner a notre newletter!Maintenant vous n'allez rien rater sur l'actualite national.
    Vous pouvez vous desabonner en appuyant sur le bouton ci dessous a n'importe quelle moment.
</p>
<span>Merci , <b><a href="">FasoMag</a></b></span>
{{ config('app.name') }}
<div>
    @component('mail::button', ['url' => ''])
        Se desabonner
    @endcomponent
</div>
@endcomponent
