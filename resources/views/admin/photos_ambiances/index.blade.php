@extends('base')

@section('title', 'Admin - Photos_Ambiances - Index')

@section('content')

<section>
    <h2>Admin - Photos_Ambiances - Index</h2>

    <table>
        <tr>
            <th>id</th>
            <th>fichier</th>
            <th>description</th>
            <th>created_at</th>
            <th>updated_at</th>
        </tr>
        @foreach ($photosambiances as $photosambiance)
            <tr>
                <td>{{ $photosambiance->id }}</td>
                <td>{{ $photosambiance->fichier }}</td>
                <td>{{ $photosambiance->description }}</td>
                <td>{{ $photosambiance->created_at }}</td>
                <td>{{ $photosambiance->updated_at }}</td>
                <td>
                    <a href="{{ route('admin.photos_ambiances.show', ['id' => $photosambiance->id])}}">Voir</a>
                    <a href="{{ route('admin.photos_ambiances.edit', ['id' => $photosambiance->id])}}">Modifier</a>
                    <form action="{{ route('admin.photos_ambiances.delete', ['id' => $photosambiance->id])}}" method="post" onsubmit=" return confirm('Supprimer cet élément ?')">
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