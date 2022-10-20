@extends('layouts.main')

@section('content')
<main class="py-5">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header card-title">
              <strong>Company Details</strong>
            </div>           
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <label for="name" class="col-md-3 col-form-label"><strong>Company Name</strong></label>
                    <div class="col-md-9">
                      <p class="form-control-plaintext text-muted">: {{ $company->name }}</p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="address" class="col-md-3 col-form-label"><strong>Company Address</strong></label>
                    <div class="col-md-9">
                      <p class="form-control-plaintext text-muted">: {{ $company->address }}</p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="pobox" class="col-md-3 col-form-label"><strong>P. O. Box</strong></label>
                    <div class="col-md-9">
                      <p class="form-control-plaintext text-muted">: {{ $company->pobox }}</p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="region" class="col-md-3 col-form-label"><strong>Region</strong></label>
                    <div class="col-md-9">
                      <p class="form-control-plaintext text-muted">: {{ $company->region }}</p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="website" class="col-md-3 col-form-label"><strong>Website</strong></label>
                    <div class="col-md-9">
                      <p class="form-control-plaintext text-muted">: {{ $company->website }}</p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="email" class="col-md-3 col-form-label"><strong>Email</strong></label>
                    <div class="col-md-9">
                      <p class="form-control-plaintext text-muted">: {{ $company->email }}</p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="phone" class="col-md-3 col-form-label"><strong>Phone</strong></label>
                    <div class="col-md-9">
                      <p class="form-control-plaintext text-muted">: {{ $company->phone }}</p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="contacts" class="col-md-3 col-form-label"><strong>Number Of Contacts</strong></label>
                    <div class="col-md-9">
                      <p class="form-control-plaintext text-muted">: {{ $company->contacts->count() }}</p>
                    </div>
                  </div>

                  <hr>

                  <div class="form-group row mb-0">
                    <div class="col-md-9 offset-md-3">
                        <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-info">Edit</a>
                        <a href="{{ route('companies.destroy', $company->id) }}" class="btn-delete btn btn-outline-danger">Delete</a>
                        <a href="{{ route('companies.index') }}" class="btn btn-outline-secondary">Cancel</a>
                    </div>
                    @include('layouts._delete-form')
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</main>
@endsection

@section('title', 'Contact Management | Company details')