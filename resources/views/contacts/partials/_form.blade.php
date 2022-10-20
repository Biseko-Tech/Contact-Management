<div class="row">
    <div class="col-md-12">
        <div class="form-group row">
            <label for="first_name" class="col-md-3 col-form-label">First Name</label>
            <div class="col-md-9">
                <input type="text" name="first_name" value="{{ old('first_name', $contact->first_name) }}" id="first_name" class="form-control @error('first_name') is-invalid @enderror">
                @error('first_name')
                <div class="invalid-feedback">{{ $message }}</div>   
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="last_name" class="col-md-3 col-form-label">Last Name</label>
            <div class="col-md-9">
                <input type="text" name="last_name" value="{{ old('last_name', $contact->last_name) }}" id="last_name" class="form-control @error('last_name') is-invalid @enderror">
                @error('last_name')
                <div class="invalid-feedback">{{ $message }}</div>   
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="person_title" class="col-md-3 col-form-label">Job Title</label>
            <div class="col-md-9">
                <input type="text" name="person_title" value="{{ old('person_title', $contact->person_title) }}" id="person_title" class="form-control @error('person_title') is-invalid @enderror">
                @error('person_title')
                <div class="invalid-feedback">{{ $message }}</div>   
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="person_address" class="col-md-3 col-form-label">Address</label>
            <div class="col-md-9">
                <textarea name="person_address" rows="3" id="person_address" class="form-control @error('person_address') is-invalid @enderror">{{ old('person_address', $contact->person_address) }}</textarea>
                @error('person_address')
                <div class="invalid-feedback">{{ $message }}</div>   
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="person_email" class="col-md-3 col-form-label">Email</label>
            <div class="col-md-9">
                <input type="text" name="person_email" value="{{ old('person_email', $contact->person_email) }}" id="person_email" class="form-control @error('person_email') is-invalid @enderror">
                @error('person_email')
                <div class="invalid-feedback">{{ $message }}</div>   
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="person_phone" class="col-md-3 col-form-label">Phone</label>
            <div class="col-md-9">
                <input type="text" name="person_phone" value="{{ old('person_phone', $contact->person_phone) }}" id="person_phone" class="form-control @error('person_phone') is-invalid @enderror">
                @error('person_phone')
                <div class="invalid-feedback">{{ $message }}</div>   
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="company_id" class="col-md-3 col-form-label">Company</label>
            <div class="col-md-9">
                <select name="company_id" id="company_id" class="form-control @error('company_id') is-invalid @enderror">
                    @foreach ($companies as $id => $name)
                    <option {{ $id === old('company_id', $contact->company_id) ? 'selected' : '' }} value="{{ $id }}">{{ $name }}</option>
                    @endforeach
                </select>
                @error('company_id')
                <div class="invalid-feedback">{{ $message }}</div>   
                @enderror
            </div>
        </div>

        <hr>

        <div class="form-group row mb-0">
            <div class="col-md-9 offset-md-3">
                <button type="submit" class="btn btn-primary">{{ $contact->exists ? 'Update' : 'Save' }}</button>
                <a href="{{ route('contacts.index') }}" class="btn btn-outline-secondary">Cancel</a>
            </div>
        </div>
      
    </div>
</div>