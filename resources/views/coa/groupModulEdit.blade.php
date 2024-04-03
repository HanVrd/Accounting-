@extends('master')
@section('content')
<div id="appCapsule">
    <div class="section mt-6">
        <h2>Edit Group Modul</h2>
        <caption class="">
            <a href="/dashboard">Home</a>/
            <a href="#">COA</a>/
            <a href="/list-group-modul">Group Modul</a>/
        </caption>
        <br />
        <br />
        {{-- isi form --}}
        <div class="card">
            <div class="card-body">
              <form method="post" action="{{ route('group_modul.update', $groupModul->id) }}">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <div class="col">
                          <label>Group Modul Code</label>
                        <input type="text" name="group_modul_code" class="form-control" placeholder="Group Code" value="{{ $groupModul->group_modul_code }}" readonly>
                    </div>
                    <div class="col">
                        <label>Group Modul Name</label>
                        <input type="text" name="group_modul_name" class="form-control" placeholder="Modul Code" value="{{ $groupModul->group_modul_name }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label>Group Modul Description</label>
                        <input type="text" name="group_modul_description" class="form-control" placeholder="Group Modul Description" value="{{ $groupModul->group_modul_desc }}">
                    </div>
                    <div class="col">
                        <label></label>
                    </div>
                </div>
                <div class="row">
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-block">Update</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    {{-- *isi form* --}}
</div>
@endsection
