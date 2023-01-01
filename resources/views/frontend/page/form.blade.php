@extends('layouts.frontend')
@section('content')

<div class="container">
    <div class="alert alert-success" role="alert">
        <h3>validation</h3>
    </div>

    @if(session()->get('Success'))
        <div class="alert alert-primary">
            <span class="mb-0"><strong>Success: </strong>{{ session()->get('Success') }}</span>
        </div>
    @endif

    @if(session()->get('Error'))
        <div class="alert alert-danger">
            <span class="mb-0"><strong>Error: </strong>{{ session()->get('Error') }}</span>
        </div>
    @endif

    <form method="POST" action="{{ route('validation.store') }}">
        @csrf
        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label for="fname">First name</label>
            <input type="text" value="{{ old('fname') }}" class="form-control @error('fname') is-invalid @enderror" id="fname" name="fname">
            @error('fname')
                <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div class="col-md-6 mb-3">
            <label for="email">Email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" name="email">
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="phone">Phone</label>
              <input type="text" value="{{ old('phone') }}" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone">
              @error('phone')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="col-md-6 mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" value="{{ old('address') }}" name="address">
              @error('address')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
          </div>
        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label for="password">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" id="password">
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div class="col-md-3 mb-3">
            <label for="state">State</label>
            <select class="custom-select" id="state" name="state">
              <option  value="">Choose...</option>
              <option value="mirpur-1" {{ old('state') == 'mirpur-1' ? 'selected' : '' }}>Mirpur-1</option>
              <option value="mirpur-2" {{ old('state') == 'mirpur-2' ? 'selected' : '' }}>Mirpur-2</option>
              <option value="mirpur-10" {{ old('state') == 'mirpur-10' ? 'selected' : '' }}>Mirpur-10</option>
            </select>
            @error('state')
                <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div class="col-md-3 mb-3">
            <label for="zip">Zip</label>
            <input type="text" name="zip" class="form-control" id="zip">
          </div>
        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="terms" name="terms">
            <label class="form-check-label" for="terms">
              Agree to terms and conditions
            </label>
          </div>
          @error('terms')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button class="btn btn-primary" type="submit">Submit form</button>
      </form>


</div>






@endsection
