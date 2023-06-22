
<x-layout>



<div class="container">
    <div class="row">
        <div class="col-6">
        <form action="{{route('artista.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" name="name"class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Genere</label>
                <input type="text" name="type"class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <input type="text" name="description" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="img" class="form-label">Immagine</label>
                <input type="text" name="img" class="form-control" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
</div>



</x-layout>