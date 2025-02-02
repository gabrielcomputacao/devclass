<div>

    <div>
        @foreach($animals as $animal)
        <div>
            {{ $animal->raca }} - {{$animal->user->name}}
        </div>

        @endforeach
    </div>


</div>