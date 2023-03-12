@extends('layouts/app')

@section('content')
  <div class="container d-flex flex-column bg-light">
    <div>
      <h1 class="mb-5">{{ $user === "superAdmin" ? "Detail Employee" : "Edit Employee"}}</h1>
    </div>
    {{-- <div class="row mb-5">
      <div class="mb-3 col-lg-3 col-md-6 col-12 d-flex flex-column">
        <label for="name" class="form-label">Created by</label>
        <span>{{ $employee->created_by }}</span>
      </div>
      <div class="mb-3 col-lg-3 col-md-6 col-12 d-flex flex-column">
        <label for="name" class="form-label">Created date</label>
        <span>{{ date('d M Y', strtotime($employee->created_at)) }}</span>
      </div>
      <div class="mb-3 col-lg-3 col-md-6 col-12 d-flex flex-column">
        <label for="name" class="form-label">Last Updated By</label>
        <span>{{ $employee->updated_by }}</span>
      </div>
      <div class="mb-3 col-lg-3 col-md-6 col-12 d-flex flex-column">
        <label for="name" class="form-label">Last Updated Date</label>
        <span>{{ date('d M Y', strtotime($employee->updated_at)) }}</span>
      </div>
    </div> --}}
    <div>
      <form method="POST" action="/employee/{{ $employee->id }}" autocomplete="off">
          @csrf
          @method('PUT')
          <div class="row d-flex justify-content-between mb-3">
            <div class="mb-3 col-lg-3 col-12">
              <label for="name" class="form-label">Name</label>
              <input type="text" name="name" class="form-control" id="name" value="{{ $employee->name }}" {{ $user === "owner" ? "disabled" : ""}}>
              @error('name')
                <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
            <div class="mb-3 col-lg-3 col-12">
              <label for="email" class="form-label">Email address</label>
              <input type="text" name="email" class="form-control" id="email" value="{{ $employee->email }}" {{ $user === "owner" ? "disabled" : ""}}>
              @error('email')
                <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
            <div class="mb-3 col-lg-3 col-12">
              <label for="age" class="form-label">Age</label>
              <input type="text" name="age" class="form-control" id="age" value="{{ $employee->age }}" {{ $user === "owner" ? "disabled" : ""}}>
              @error('age')
                <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
          </div>
          
          <div class="row d-flex justify-content-between mb-3">
            <div class="mb-3 col-lg-3 col-12">
              <label for="gender" class="form-label">Gender</label> <br>
              <input type="radio" id="gender" name="gender" value="male" {{ ($employee->gender=="male") ? "checked" : "" }} {{ $user === "owner" ? "disabled" : ""}}>
              <label for="gender">male</label><br>
              <input type="radio" id="gender" name="gender" value="female" {{ ($employee->gender=="female") ? "checked" : "" }} {{ $user === "owner" ? "disabled" : ""}}>
              <label for="gender">female</label><br>
              @error('gender')
                <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
            <div class="mb-3 col-lg-3 col-12">
              <label for="phone" class="form-label">Phone</label>
              <input type="text" name="phone" class="form-control" id="phone" value="{{ $employee->phone }}" {{ $user === "owner" ? "disabled" : ""}}>
              @error('phone')
                <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
            <div class="mb-3 col-lg-3 col-12">
                <label for="position" class="form-label">Position</label>
                <select name="position" aria-placeholder="select position" type="text" class="form-select form-select-sm" aria-label=".form-select-sm example" {{ $user === "owner" ? "disabled" : ""}}>
                  <option value="" disabled selected>select position</option>
                  @foreach ($positions as $position)
                  <option value={{ $position->id }} {{ $position->id == $employee->position_type_id ? 'selected' : '' }}>{{ $position->position_name }}</option>  
                  @endforeach
                </select>
                @error('position')
                  <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
          </div>
          <div class="row d-flex justify-content-between mb-3">
            <div class="mb-3 col-12">
              <label for="address" class="form-label">Address</label>
              <textarea name="address" class="form-control" id="address" {{ $user === "owner" ? "disabled" : ""}}>{{ $employee->address }}</textarea>
              @error('address')
                <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
          </div>

          @if ($user === "superAdmin")
          <div class="d-flex mb-5">
            <a href="/employee"><button type="button" class="btn btn-outline-secondary">Back</button></a>
          </div>
        @else
          <div class="d-flex mb-5">
            <button type="submit" class="btn btn-outline-primary">Submit</button>
            <a href="/employee"><button type="button" class="btn btn-outline-danger mx-2">Cancel</button></a>
          </div>
        @endif
      </form>
    </div>
  </div>
@endsection