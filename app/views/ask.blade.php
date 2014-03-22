@extends('layouts.master')

@section('content')
<div id="ask">
    <form class="form-horizontal" role="form">
      <div class="form-group">
        <label for="inputSubject" class="col-sm-2 control-label">Onderwerp</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputSubject" placeholder="Onderwerp">
        </div>
      </div>
      <div class="form-group">
        <label for="inputBody" class="col-sm-2 control-label">Details</label>
        <div class="col-sm-10">
          <textarea class="form-control"  id="inputBody" placeholder="Meer info" rows="5"></textarea>
        </div>
      </div>
      <div class="form-group">
        <label for="inputLocation" class="col-sm-2 control-label">Locatie</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputLocation" placeholder="Gent">
        </div>
      </div>
      <div class="form-group">
        <label for="inputCategory" class="col-sm-2 control-label">Categorie</label>
        <div class="col-sm-10">
          <select class="form-control" id="inputCategory">
              <option>Bestuur en beleid</option>
              <option>Bevolking</option>
              <option>Cultuur-Sport-Vrije tijd</option>
              <option>Doelgroepen</option>
              <option>Gezondheid</option>
              <option>Grondgebied</option>
              <option>Infrastructuur</option>
              <option>Milieu en Natuur</option>
              <option>Mobiliteit</option>
              <option>Onderwijs en opvoeding</option>
              <option>Toerisme</option>
              <option>Veiligheid</option>
              <option>Welzijn</option>
              <option>Werk en Economie</option>
              <option>Wonen</option>
            </select>
        </div>
      </div>
      <div class="form-group">
        <label for="inputTags" class="col-sm-2 control-label">Tags</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputTags" placeholder="boom, natuur, fauna">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-primary">Stel vraag</button>
        </div>
      </div>
    </form>

</div>
@stop
