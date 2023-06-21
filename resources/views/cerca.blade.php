<x-layout>


<div class="container">
    <div class="row">

        @if(count($artisti) > 0)
            @foreach($artisti as $artista)
            <div class="col-12, col-md-4">
                <x-card 
                artistaid="{{$artista['id']}}"
                artistaname="{{$artista['name']}}"
                artistatype="{{$artista['type']}}"
                artistaimg="{{$artista['img']}}"
                artistadescription="{{$artista['description']}}"
                />
            </div>
            @endforeach
        @else
            <p>Nessun artista corrisponde alla ricerca</p>
        @endif

        
    </div>
</div>




</x-layout>