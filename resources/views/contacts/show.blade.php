@extends('layouts.main')

@section('content')
<main class="py-5">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header card-title">
              <strong>Contact Details</strong>
            </div>           
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <label for="first_name" class="col-md-3 col-form-label"><strong>Full Name</strong></label>
                    <div class="col-md-9">
                      <p class="form-control-plaintext text-muted">: {{ $contact->first_name }} {{ $contact->last_name }}</p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="email" class="col-md-3 col-form-label"><strong>Job Title</strong></label>
                    <div class="col-md-9">
                      <p class="form-control-plaintext text-muted">: {{ $contact->person_title }}</p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="phone" class="col-md-3 col-form-label"><strong>Address</strong></label>
                    <div class="col-md-9">
                      <p class="form-control-plaintext text-muted">: {{ $contact->person_address }}</p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="name" class="col-md-3 col-form-label"><strong>Email</strong></label>
                    <div class="col-md-9">
                      <p class="form-control-plaintext text-muted">: {{ $contact->person_email }}</p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="last_name" class="col-md-3 col-form-label"><strong>Phone</strong></label>
                    <div class="col-md-9">
                      <p class="form-control-plaintext text-muted">: {{ $contact->person_phone }}</p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="company_id" class="col-md-3 col-form-label"><strong>Company</strong></label>
                    <div class="col-md-9">
                      <p class="form-control-plaintext text-muted">: {{ $contact->company->name }}</p>
                    </div>
                  </div>

                  <hr>

                  <div class="form-group row mb-0">
                    <div class="col-md-9 offset-md-3">
                        <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-info">Edit</a>
                        <a href="{{ route('contacts.destroy', $contact->id) }}" class="btn-delete btn btn-outline-danger">Delete</a>
                        <a href="{{ route('contacts.index') }}" class="btn btn-outline-secondary">Cancel</a>
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

@section('title', 'Contact Management | Contact details')