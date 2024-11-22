@extends('app')
@section('title', 'Список пользователей')
@section('styles')
<link href="css/users-table.css" rel="stylesheet">
@endsection

@section('content')

<table>
    <thead>
        <tr>
            <th>№</th>
            <th>Имя</th>
            <th>email</th>
        </tr>
    </thead>
    <tbody>
        @foreach($submissions as $index => $submission)
        <tr>
            <td>{{$index + 1}}</td>
            <td>{{$submission['name']}}</td>
            <td>{{$submission['email']}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection