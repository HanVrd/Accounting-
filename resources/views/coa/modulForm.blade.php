<!-- modulForm.blade.php -->

@extends('master')

@section('content')
<div id="appCapsule">
    <div class="section mt-6">
      <h2 >Modul Form</h2>
      
      <div class="row">
        <div class="col">
          <caption class="">
            <a href="/dashboard">Home</a>/
            <a href="#">COA</a>/
            <a href="/list-modul-form">Modul Form</a>
          </caption>
        </div>
        <div class="form-group searchbox col ">
          <input type="text" class="form-control">
          <i class="input-icon">
              <ion-icon name="search-outline" role="img" class="md hydrated ms-2" aria-label="search outline"></ion-icon>
          </i>
      </div>
      </div>
      
      <div class="button-container">
        <button type="button" class="btn btn-icon btn-info me-1">
          <a href="/modul-form">
              <ion-icon name="add-circle" role="img" class="md hydrated" aria-label="add outline"></ion-icon>
          </a>
      </button>
      <button type="button" class="btn btn-icon btn-info me-1">
          <a href="link_kedua.html">
              <ion-icon name="print-sharp" role="img" class="md hydrated" aria-label="add outline"></ion-icon>
          </a>
      </button>
      <button type="button" class="btn btn-icon btn-info me-1">
          <a href="link_ketiga.html">
              <ion-icon name="cloud-download-sharp" role="img" class="md hydrated" aria-label="add outline"></ion-icon>
          </a>
    </div>
      <br/>
      <div class="card">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th >Modul Code</th>
                <th >Group Modul Code</th>
                <th >Group Modul Name</th>
                <th >Modul Name</th>
                <th >Modul Description</th>
                <th >Modul Status</th>
                <th >Modul url</th>
                <th >Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($modulForms as $modul)
              <tr>
                <td>{{ $modul->modul_code }}</td>
                <td>{{ $modul->group_modul_code }}</td>
                <td>{{ $modul->group_modul_name }}</td>
                <td>{{ $modul->modul_name }}</td>
                <td>{{ $modul->modul_description }}</td>
                <td>{{ $modul->modul_status }}</td>
                <td>{{ $modul->modul_url }}</td>
                <td>
                  <style>
                    .btn.btn-icon a ion-icon {
                        color: white;
                    }
                </style>                
                  <button class="btn btn-icon btn-info me-1">
                    <a href="/edit-modul-form/{{ $modul->id }}">
                      <ion-icon name="create-outline" role="img" class="md hydrated" aria-label="create outline"></ion-icon>
                    </a>
                  </button>
                  <form action="{{ route('modulFormDelete', $modul->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-icon btn-danger me-1">
                        <ion-icon name="trash-outline" role="img" class="md hydrated" aria-label="trash outline"></ion-icon>
                    </button>
                </form>                
                  </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

    
  </div>
@endsection
