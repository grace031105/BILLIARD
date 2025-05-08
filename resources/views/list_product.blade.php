@extends('layouts.list')

@section('title', 'INI ADALAH JUDUL PADA META')
@section('content')

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Produk</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $post)
            <tr>
                <td>{{ $post['id'] }}</td>
                <td>{{ $post['produk'] }}</td>
                <!--data lainnya-->
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
