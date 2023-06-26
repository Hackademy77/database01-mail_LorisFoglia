<div class="card" style="width: 18rem;">
  <img src="{{ Storage::url($artistaimg) }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{ $artistaname }}</h5>
    <p class="card-text">{{ $artistadescription }}</p>
    <p class="card-text">{{ $artistatype }}</p>
    <a href="{{ route('show.dettagli', ['id' => $artistaid]) }}" class="btn btn-primary">Dettagli</a>
  </div>
</div>