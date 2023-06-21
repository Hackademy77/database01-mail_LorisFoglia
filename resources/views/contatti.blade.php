<x-layout>



<div class="container">
    <div class="row">
        <div class="col-6">
        <form action="{{route('messaggiRicevuti')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome "class="form-control" id="nome" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Cognome</label>
                <input type="text" name="cognome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Scrivici</label>
                <textarea class="form-control" name="descrizione" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
</div>





</x-layout>