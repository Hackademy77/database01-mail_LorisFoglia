<x-layout>


<div class="container">
    <div class="row">
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
    </div>
</div>




</x-layout>