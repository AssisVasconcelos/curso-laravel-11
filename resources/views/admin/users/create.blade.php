@extends('admin.layouts.app')

@section('content')
    <h1>Novo Usuário</h1>
    <form action="/users" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nome">
        <input type="email" name="email" placeholder="E-mail">
        <input type="password" name="password" placeholder="Senha">
        <button type="submit">Enviar</button>
    </form>
@endsection