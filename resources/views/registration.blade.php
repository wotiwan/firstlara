@extends('app')

@section('title', 'Регистрация') 

@section('styles')
<link href="css/registration.css" rel="stylesheet">
@endsection

@section('content') 
    <div class="registration-container">
        @if(session()->has('success'))
        <p>user {!! session('success') !!} successfully registered</p>
        @else
        <form action="/send" method="POST" id="main_form">
            @csrf
            <label for="name">Ваше имя</label>
            <input type="text" placeholder="Введите ваше имя" id="name" name="name">
            <input type="email" placeholder="example@something.com" name="email">
            <button type="confirm">Зарегистрироваться</button>
        </form>
        @if ($errors->any())
        <div class="exceptions-list">
            @foreach ($errors->all() as $error)
                <div class="exception">{{ $error }}</div>
            @endforeach
        </div>
        @endif
        @endif
    </div>
@endsection