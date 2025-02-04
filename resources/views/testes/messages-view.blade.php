<div>
    <h3>Message View</h3>

    @if(session()->has('message'))
    {{ session('message')}}
    @endif

</div>