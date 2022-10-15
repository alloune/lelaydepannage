@extends('layouts/templateDashboard')
@section('title','Dashboard - Le Lay dépannage')
@section('content')

    <div class="container">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Prenom</th>
                <th scope="col">Nom</th>
                <th scope="col">Email</th>
                <th scope="col">Sujet</th>
                <th scope="col">date de reception</th>
                <th scope="col">Messages</th>
                <th scope="col">Effacer</th>



            </tr>
            </thead>
            <tbody>
            @foreach($messages as $message)
                <tr>
                    <th scope="row">{{ $message->id }}</th>
                    <td>{{ $message->nom }}</td>
                    <td>{{ $message->prenom }}</td>
                    <td>{{ $message->email }}</td>
                    <td>{{ $message->sujet }}</td>
                    <td>{{ $message->created_at }}</td>
                    <td>{{ $message->message }}</td>
                    <th scope="col"><form method="post" action="{{ route('messages.destroy', ['message'=>$message->id]) }}">
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-danger" type="submit" value="Supprimer">
                        </form></th>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>


@endsection
