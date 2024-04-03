@extends('master')
@section('content')
<div id="appCapsule">
    <div class="section mt-6">
      <h2 >Journal Type Management</h2>
      <caption class="">
        <a href="/dashboard">Home</a>/
        <a href="#">COA</a>/
        <a href="/list-group-modul">Journal Type Management</a>
      </caption>
      <br />
      <br />
      {{-- isi form --}}
      <div class="card">
        <div class="card-body">
          <form method="post" action="">
          <div class="row mb-3">
              <div class="col">
                <label>Journal Type Code</label>
                <input type="text" name="credit_term_code" class="form-control" placeholder="Group Code" readonly >
              </div>
              <div class="col">
                <label>Modul Code</label>
                <input type="text" name="year" class="form-control" placeholder="Modul Code" readonly >
              </div>
            </div>
          <div class="row mb-3">
              <div class="col">
                <label>Journal Type Name</label>
                <input type="text" name="credit_term_value" class="form-control" placeholder="Credit Term Value" readonly>
              </div>
              <div class="col">
                <label>journal Type Description</label>
                <input type="text" name="credit_term_name" class="form-control" placeholder="Document Number Format" >
              </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <label>Credit Term Status</label>
                <select class="form-control">
                  <option value="active">Active</option> 
                  <option value="not active">Not Active</option> 
                </select>
              </div>
              </div> 
              <div class="row">
              <div class="d-grid">
                  <button class="btn btn-primary btn-block">submit</button>
              </div>
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