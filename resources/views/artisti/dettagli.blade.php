<x-layout>


<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <div class="mt-5">
                <h2>L'artista è: <br>
                {{$artista['name']}}</h2>
                <img src="{{Storage::url($artista['img'])}}" class="img-fluid" alt="">
            </div>
        </div>
        <div class="col-6">
            <div class="mt-5">
                <p>{{$artista['description']}}</p>
                <p>Il genere è: {{$artista['type']}}</p>
            </div>  
        </div>
    </div>
</div>




</x-layout>