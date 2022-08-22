@extends('frontend.layouts.index')
@section('content')
<form action="create" method="post" class="text-center">
    @csrf
        <div class="mb-3">
          <label for="" class="form-label">Marque</label>
          <input type="text" name='marque' >
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Année</label>
            <input type="Date" name='annee' >
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Couleur</label>
            <input type="text" name='couleur' >
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Prix</label>
            <input type="number" name='prix' >
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Réduction</label>
            <input type="number" name='reduction' >
          </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection
