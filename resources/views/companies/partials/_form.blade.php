<div class="row">
    <div class="col-md-12">
        <div class="form-group row">
            <label for="name" class="col-md-3 col-form-label">Name</label>
            <div class="col-md-9">
                <input type="text" name="name" value="{{ old('name', $company->name) }}" id="name" class="form-control @error('name') is-invalid @enderror">
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>   
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="address" class="col-md-3 col-form-label">Address</label>
            <div class="col-md-9">
                <textarea name="address" rows="3" id="address" class="form-control @error('address') is-invalid @enderror">{{ old('address', $company->address) }}</textarea>
                @error('address')
                <div class="invalid-feedback">{{ $message }}</div>   
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="pobox" class="col-md-3 col-form-label">P. O. Box</label>
            <div class="col-md-9">
                <input type="text" name="pobox" value="{{ old('pobox', $company->pobox) }}" id="pobox" class="form-control @error('pobox') is-invalid @enderror">
                @error('pobox')
                <div class="invalid-feedback">{{ $message }}</div>   
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="region" class="col-md-3 col-form-label">Region</label>
            <div class="col-md-9">
                <input type="text" name="region" value="{{ old('region', $company->region) }}" id="region" class="form-control @error('region') is-invalid @enderror">
                @error('region')
                <div class="invalid-feedback">{{ $message }}</div>   
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="website" class="col-md-3 col-form-label">Website</label>
            <div class="col-md-9">
                <input type="text" name="website" value="{{ old('website', $company->website) }}" id="website" class="form-control @error('website') is-invalid @enderror">
                @error('website')
                <div class="invalid-feedback">{{ $message }}</div>   
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-3 col-form-label">Email</label>
            <div class="col-md-9">
                <input type="text" name="email" value="{{ old('email', $company->email) }}" id="email" class="form-control @error('email') is-invalid @enderror">
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>   
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="phone" class="col-md-3 col-form-label">Phone</label>
            <div class="col-md-9">
                <input type="text" name="phone" value="{{ old('phone', $company->phone) }}" id="phone" class="form-control @error('phone') is-invalid @enderror">
                @error('phone')
                <div class="invalid-feedback">{{ $message }}</div>   
                @enderror
            </div>
        </div>

        <hr>

        <div class="form-group row mb-0">
            <div class="col-md-9 offset-md-3">
                <button type="submit" class="btn btn-primary">{{ $company->exists ? 'Update' : 'Save' }}</button>
                <a href="{{ route('companies.index') }}" class="btn btn-outline-secondary">Cancel</a>
            </div>
        </div>
      
    </div>
</div>