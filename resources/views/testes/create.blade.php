@extends('layout')



@section('portal')
<div>

    <h2> Teste para criação e envio post</h2>
    <br><br><br>

    <form action="/test-post-create" method="post">

        @csrf

        <input type="text" name="name">

        <button type="submit">Enviar</button>

    </form>

</div>

@endsection