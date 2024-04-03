@extends('master')
@section('content')
<div id="appCapsule">
    <div class="section mt-6">
      <h2 >Tax Management</h2>
      
      <div class="row">
        <div class="col">
          <caption class="">
            <a href="/dashboard">Home</a>/
            <a href="#">COA</a>/
            <a href="/list-tax-manage">Tax Management</a>
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
          <a href="/tax-manage">
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
      </button>
      
    </div>
      <br/>
      <div class="card">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th >Tax Code </th>
                <th >Input Tax Account</th>
                <th >Input Tax Name</th>
                <th >Output Tax Account</th>
                <th >Output Tax Name</th>
                <th >Tax Name </th>
                <th >Tax Description</th>
                <th >Tax Precentage</th>
                <th >Tax Method</th>
                <th >Tax Status</th>
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
                <td >$ 509.40</td>
                <td >$ 509.40</td>
                <td >$ 509.40</td>
                <td >$ 509.40</td>
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