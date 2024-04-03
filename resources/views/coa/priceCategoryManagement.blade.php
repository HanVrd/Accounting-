@extends('master')
@section('content')
<div id="appCapsule">
    <div class="section mt-6">
      <h2 >Price Category Management</h2>
      <caption class="">
        <a href="/dashboard">Home</a>/
        <a href="#">COA</a>/
        <a href="/list-price-category">Price Category Management</a>
      </caption>
      <br />
      <div class="button-container">
        <button type="button" class="btn btn-icon btn-info me-1">
          <a href="link_pertama.html">
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
                <th >Journal Type Code</th>
                <th >Journal Type Name</th>
                <th >Journal Description</th>
                <th >Journal Type Status</th>
                <th >Modul Code</th>
                <th >Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>15323</td>
                <td>John</td>
                <td>Manager</td>
                <td >$ 509.40</td>
                <td >$ 509.40</td>
                <td>
                  <style>
                    .btn a ion-icon {
                      color: white;
                    }
                  </style>
                  <button class="btn btn-icon btn-info me-1">
                    <a href="form-edit.php">
                      <ion-icon name="create-outline" role="img" class="md hydrated" aria-label="create outline"></ion-icon>
                    </a>
                  </button>
                    <button class="btn btn-icon btn-danger me-1">
                      <a href="hapus.php" >
                        <ion-icon name="trash-outline" role="img" class="md hydrated" aria-label="trash outline"></ion-icon>
                      </a>
                    </button>
                  </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    
  </div>
@endsection