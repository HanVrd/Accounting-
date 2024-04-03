@extends('master')
@section('content')
<div id="appCapsule">
    <div class="section mt-6">
      <h2 >Customer Supplier Group Management</h2>
      <caption class="">
        <a href="/dashboard">Home</a>/
        <a href="#">COA</a>/
        <a href="/list-customer-supplier">Customer Supplier Group Management</a>
      </caption>
      <br />
      <br />
        {{-- isi form --}}
      <div class="card">
        <div class="card-body">
          <form method="post" action="">
          <div class="row mb-3">
              <div class="col">
                <label>Group Code</label>
                <input type="text" name="credit_term_code" class="form-control" placeholder="Group Code" readonly >
              </div>
              <div class="col">
                <label>Modul Code</label>
                <input type="text" name="year" class="form-control" placeholder="Modul Code" readonly >
              </div>
            </div>
          <div class="row mb-3">
              <div class="col">
                <label>COA Code</label>
                <input type="text" name="credit_term_value" class="form-control" placeholder="Credit Term Value" readonly>
              </div>
              <div class="col">
                <label>Group Description</label>
                <input type="text" name="credit_term_name" class="form-control" placeholder="Group Description" >
              </div>
            </div>
          <div class="row mb-3">
              <div class="col">
                <label>COA Name</label>
                <input type="text" name="credit_term_value" class="form-control" placeholder="Credit Term Value" >
              </div>
              <div class="col">
                <label>Group Name</label>
                <input type="text" name="credit_term_name" class="form-control" placeholder="Group Name" >
              </div>
            </div>
          <div class="row">
            <div class="col">
              <label>Currency Status</label>
              <select class="form-control">
                <option value="active">Active</option> 
                <option value="not active">Not Active</option> 
              </select>
            </div>
            </div>
          </br>
            <div class="row">
              <div class="d-grid">
                  <button class="btn btn-primary btn-block">submit</button>
              </div>
            </div>
      </form>
        </div>
      </div>
    </div>
        {{-- *isi form* --}}
    </div>

    
  </div>
@endsection