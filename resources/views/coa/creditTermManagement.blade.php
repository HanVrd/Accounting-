@extends('master')
@section('content')
<div id="appCapsule">
    <div class="section mt-6">
      <h2 >Credit Term Management</h2>
      <div class="row">
        <div class="col">
          <caption >
            <a href="/dashboard">Home</a>/
            <a href="#">COA</a>/
            <a href="/list-credit-term">Credit Term Management</a>
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
          <a href="/credit-term">
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
                <th>Credit Term Code</th>
                <th>Credit Term Name</th>
                <th>Credit Term Value</th>
                <th>Credit Term Status</th>
                <th>Modul Code</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($creditTerms as $creditTerm)
              <tr>
                <td>{{ $creditTerm->credit_term_code }}</td>
                <td>{{ $creditTerm->credit_term_name }}</td>
                <td>{{ $creditTerm->credit_term_value }}</td>
                <td>{{ $creditTerm->credit_term_status }}</td>
                <td>{{ $creditTerm->modul_code }}</td>
                <td>
                  <style>
                    .btn a ion-icon {
                      color: white;
                    }
                  </style>
                  <button class="btn btn-icon btn-info me-1">
                    <a href="{{ route('edit-credit-term', $creditTerm->id) }}">
                      <ion-icon name="create-outline" role="img" class="md hydrated" aria-label="create outline"></ion-icon>
                    </a>
                  </button>
                  <button class="btn btn-icon btn-danger me-1">
                    <a href="{{ route('delete-credit-term', $creditTerm->id) }}">
                      <ion-icon name="trash-outline" role="img" class="md hydrated" aria-label="trash outline"></ion-icon>
                    </a>
                  </button>
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
