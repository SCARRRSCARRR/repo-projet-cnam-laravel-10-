@extends('base')

@section('title', 'Admin - Actus - Index')

@section('content')

<section>
    <h2>Admin - Actus - Index</h2>

    <table>
        <tr>
            <th>id</th>
            <th>contenu</th>
            <th>date_publication</th>
            <th>created_at</th>
            <th>updated_at</th>
        </tr>
        @foreach ($actus as $actu)
            <tr>
                <td>{{ $actu->id }}</td>
                <td>{{ $actu->contenu }}</td>
                <td>{{ $actu->date_publication }}</td>
                <td>{{ $actu->created_at }}</td>
                <td>{{ $actu->updated_at }}</td>
                <td>
                    <a href="{{ route('admin.actus.show', ['id' => $actu->id])}}">Voir</a>
                    <a href="{{ route('admin.actus.edit', ['id' => $actu->id])}}">Modifier</a>
                    <form action="{{ route('admin.actus.delete', ['id' => $actu->id])}}" method="post" onsubmit=" return confirm('Supprimer cet élément ?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</section>

@endsection