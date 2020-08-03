@extends('admin.socle')

@section('content')
    <div class="m-3">
        <table class="table table-striped table-hover table-light">
            <thead>
            <tr>
                <th>Titre</th>
                <th>Categorie</th>
                <th>Date de publication</th>
                <th>Date de modification</th>-
                <th>Option</th>
            </tr>
            </thead>
            <tbody>
                @foreach($Article as $Article)
                    <tr>
                <td>{{$Article->titre}}</td>
                <td>{{$Article->categorie->nom}}</td>
                <td>{{$Article->created_at}}</td>
                <td>{{$Article->updated_at}}</td>
                <td>
                    <form class="d-inline" action="{{route('Adminarticle.destroy',[$Article->id])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="badge badge-light"><i class="fa fa-minus-circle"></i></button>
                    </form>
                    <a href="{{route('Adminarticle.edit',[$Article->id])}}" class="badge badge-light"><i class="fa fa-eye"></i></a>
                </td>
            </tr>
                @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>Titre</th>
                <th>Categorie</th>
                <th>Date de publication</th>
                <th>Date de modification</th>
                <th>Option</th>
            </tr>
            </tfoot>
        </table>
    </div>
    <div>

    </div>
@endsection
