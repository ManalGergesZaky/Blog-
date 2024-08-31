@extends('layouts.app')
@section('content')
<main class="main" id="main">

    <div class="container margin-top ">
      <div class="row justify-content-center ">
        <div class="col-lg-8 col-md-6 d-flex flex-column align-items-center justify-content-center">
  
          <div class="card mb-3">
  
            <div class="card-body">
              <div class="pt-4 pb-2">
                <h5 class="card-title text-center pb-0 fs-4"> Import New Users</h5>
              </div>
  
              <form method="POST" action="{{ route('users.import') }}" class="row g-3 needs-validation " enctype="multipart/form-data" novalidate>
                @csrf
                <div class="col-12">
                  <label for="yourUsername" class="form-label">Import Data in CSV File</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend"><i class="fa-solid fa-book-open"></i></span>
                    <input type="file" name="users" class="form-control " id="yourUsername" required>
                    <div class="invalid-feedback">Invalid extension</div>
                  </div>
                </div>
              
                <div class="col-12">
                  <button name="insert" class="btn btn-primary w-100" type="submit">Import</button>
                </div>
                
              </form>
  
            </div>
  
        </div>
      </div>
    </div>
  
  
  </main>
@endsection