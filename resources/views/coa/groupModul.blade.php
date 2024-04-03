@extends('master')
@section('content')
<div id="appCapsule">
    <div class="section mt-6">
        <h2>Group Modul</h2>

        <div class="row">
            <div class="col">
                <caption class="">
                    <a href="/dashboard">Home</a>/
                    <a href="#">COA</a>/
                    <a href="/list-group-modul">Group Modul</a>
                </caption>
            </div>
            <div class="form-group searchbox col ">
                <input type="text" class="form-control">
                <i class="input-icon">
                    <ion-icon name="search-outline" role="img" class="md hydrated ms-2"
                            aria-label="search outline"></ion-icon>
                </i>
            </div>
        </div>
        <div class="button-container">
            <a href="/group-modul" class="btn btn-icon btn-info me-1">
                <ion-icon name="add-circle" role="img" class="md hydrated" aria-label="add outline"></ion-icon>
            </a>
            <a href="link_kedua.html" class="btn btn-icon btn-info me-1">
                <ion-icon name="print-sharp" role="img" class="md hydrated" aria-label="add outline"></ion-icon>
            </a>
            <a href="link_ketiga.html" class="btn btn-icon btn-info me-1">
                <ion-icon name="cloud-download-sharp" role="img" class="md hydrated" aria-label="add outline"></ion-icon>
            </a>
        </div>
        <br/>
        <div class="card">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Group Modul Code</th>
                            <th>Group Modul Name</th>
                            <th>Group Modul Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($groupModuls as $group)
                        <tr>
                            <td>{{ $group->group_modul_code}}</td>
                            <td>{{ $group->group_modul_name }}</td>
                            <td>{{ $group->group_modul_desc }}</td>
                            <td>
                                <a href="/edit-group-modul/{{ $group->id }}" class="btn btn-icon btn-info me-1">
                                    <ion-icon name="create-outline" role="img" class="md hydrated" aria-label="create outline"></ion-icon>
                                </a>
                                <a href="{{ route('group_modul.delete', $group->id) }}" class="btn btn-icon btn-danger me-1" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $group->id }}').submit();">
                                    <ion-icon name="trash-outline" role="img" class="md hydrated" aria-label="trash outline"></ion-icon>
                                </a>
                                <form id="delete-form-{{ $group->id }}" action="{{ route('group_modul.delete', $group->id) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
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
