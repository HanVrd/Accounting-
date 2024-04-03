@extends('master')
@section('content')
<div id="appCapsule">
    <div class="section mt-6">
        <h2>Credit Term Management</h2>
        <caption class="">
            <a href="/dashboard">Home</a>/
            <a href="#">COA</a>/
            <a href="/list-credit-term">Credit Term Management</a>
        </caption>
        <br />
        <br />
        {{-- isi form --}}
        <div class="card">
            <div class="card-body">
                <form method="post" action="{{ route('update-credit-term', $creditTerm->id) }}">
                    @csrf
                    @method('PUT') <!--Gunakan metode PUT untuk mengedit-->

                    <div class="row mb-3">
                        <div class="col">
                            <label>Credit Term Code</label>
                            <input type="text" name="credit_term_code" class="form-control"
                                placeholder="Credit Term Code" value="{{ $creditTerm->credit_term_code }}" readonly>
                        </div>
                        <div class="col">
                            <label>Modul Code</label>
                            <select name="modul_code" class="form-control">
                                <option value="">Select Modul Code</option>
                                @foreach ($creditTerms as $modul)
                                    <option value="{{ $modul->modul_code }}" @if($modul->modul_code == $creditTerm->modul_code) selected @endif>{{ $modul->modul_code }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label>Credit Term Value</label>
                            <input type="number" name="credit_term_value" class="form-control"
                                placeholder="Credit Term Value" value="{{ $creditTerm->credit_term_value }}">
                        </div>
                        <div class="col">
                            <label>Credit Term Name</label>
                            <input type="text" name="credit_term_name" class="form-control"
                                placeholder="Credit Term Name" value="{{ $creditTerm->credit_term_name }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>Credit Term Status</label>
                            <select name="credit_term_status" class="form-control">
                                <option value="active" @if($creditTerm->credit_term_status == 'active') selected @endif>Active</option>
                                <option value="not active" @if($creditTerm->credit_term_status == 'not active') selected @endif>Not Active</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="d-grid">
                            <button class="btn btn-primary btn-block">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- *isi form* --}}
</div>
@endsection
