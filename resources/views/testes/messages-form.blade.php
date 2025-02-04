<div style="margin-left:200px">

    @include('includes.errors')

    <br><br>

    @if(session()->has('message'))
    {{ session('message')}}
    @endif

    <h2>Message Form</h2>


    <div>
        <form action="/message-view" method="post">

            @csrf

            <br><br>
            <input type="text" name="name">
            <br><br>
            <input type="text" name="email">
            <br><br>
            <input type="password" name="password">
            <br><br>

            <button type="submit">Enviar</button>
        </form>
    </div>


</div>