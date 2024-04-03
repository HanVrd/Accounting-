@extends('master')

@section('content')
<div id="appCapsule">
    <div class="section mt-6">
      <h2 >Tambah Modul Form</h2>
      <caption class="">
        <a href="/dashboard">Home</a>/
        <a href="#">COA</a>/
        <a href="/list-modul-form">Modul Form</a>
      </caption>
      <br/>
      <br/>
      <div class="card">
        <div class="card-body">
          <form action="{{ route('modulFormUpdate', $modulForm->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <div class="col">
                  <select class="form-control" id="group_modul_code" name="group_modul_code" required>
                    <option value="" readonly>Select Group Code</option>
                    @foreach ($groupModuls as $groupModul)
                        <option value="{{ $groupModul->group_modul_code }}" {{ $groupModul->group_modul_code == $modulForm->group_modul_code ? 'selected' : '' }}>{{ $groupModul->group_modul_code }}</option>
                    @endforeach
                </select>
                              
                </div>
              <div class="col">
                <label>Modul Code</label>
                <input type="number" name="modul_code" class="form-control" value="{{$modulForm->modul_code}}" placeholder="Modul Code"  >
              </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <label>Group Modul Name</label>
                <input type="text" name="group_modul_name" class="form-control" value="{{$modulForm->group_modul_name}}" placeholder="Credit Term Value" >
              </div>
              <div class="col">
                <label> Modul Name</label>
                <input type="text" name="modul_name" class="form-control" value="{{$modulForm->modul_name}}" placeholder="Document Number Format" >
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label> Modul Description</label>
                <input type="text" name="modul_description" class="form-control" value="{{$modulForm->modul_description}}" placeholder="Document Number Format" >
              </div>
              <div class="col mb-3">
                <label> Modul url</label>
                <input type="text" name="modul_url" class="form-control" value="{{$modulForm->modul_url}}" placeholder="Document Number Format" >
              </div>
            </div>
            <div class="row">
              <div class="col mb-3">
                <label>Modul Status</label>
                <select name="modul_status" class="form-control">
                  <option value="active">Active</option> 
                  <option value="not active">Not Active</option> 
                </select>
              </div>
            </div>
            <div class="row">
              <div class="d-grid">
                  <button type="submit" class="btn btn-primary btn-block">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection
