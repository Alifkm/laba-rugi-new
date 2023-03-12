@extends('layouts/app')

@section('content')
  <div class="container d-flex flex-column bg-light">
    <div>
      <h1 class="mb-5">{{ $user === "owner" ? "Detail Project" : "Edit Project"}}</h1>
    </div>
    {{-- <div class="row mb-5">
      <div class="mb-3 col-lg-3 col-md-6 col-12 d-flex flex-column">
        <label for="name" class="form-label">Created by</label>
        <span>{{ $project->created_by }}</span>
      </div>
      <div class="mb-3 col-lg-3 col-md-6 col-12 d-flex flex-column">
        <label for="name" class="form-label">Created date</label>
        <span>{{ date('d M Y', strtotime($project->created_at)) }}</span>
      </div>
      <div class="mb-3 col-lg-3 col-md-6 col-12 d-flex flex-column">
        <label for="name" class="form-label">Last Updated By</label>
        <span>{{ $project->updated_by }}</span>
      </div>
      <div class="mb-3 col-lg-3 col-md-6 col-12 d-flex flex-column">
        <label for="name" class="form-label">Last Updated Date</label>
        <span>{{ date('d M Y', strtotime($project->updated_at)) }}</span>
      </div>
    </div> --}}
    <div>
      <form method="POST" action="/project/{{ $project->id }}" autocomplete="off">
        @csrf
        @method('PUT')
        <div class="row d-flex justify-content-between mb-3">
          <div class="mb-3 col-lg-3 col-12">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $project->name }}" {{ $user === "owner" ? "disabled" : ""}}>
            @error('name')
              <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <div class="mb-3 col-lg-3 col-12">
            <label for="start_date" class="form-label">Start Date</label>
            <input type="date" name="start_date" class="form-control" id="start_date" value="{{ $project->start_date }}" max="<?php echo date("Y-m-d"); ?>" {{ $user === "owner" ? "disabled" : ""}}>
            @error('start_date')
              <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <div class="mb-3 col-lg-3 col-12">
            <label for="end_date" class="form-label">End Date</label>
            <input type="date" name="end_date" class="form-control" id="end_date" value="{{ $project->end_date }}" {{ $user === "owner" ? "disabled" : ""}}>
            @error('end_date')
              <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
        </div>

        <div class="row d-flex justify-content-between mb-3">
          <div class="mb-3 col-lg-3 col-12">
            <label for="client_name" class="form-label">Client Name</label>
            <input type="text" name="client_name" class="form-control" id="client_name" value="{{ $project->client_name }}" {{ $user === "owner" ? "disabled" : ""}}>
            @error('client_name')
              <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <div class="mb-3 col-lg-3 col-12">
            <label for="location" class="form-label">Location</label>
            <input type="text" name="location" class="form-control" id="location" value="{{ $project->location }}" {{ $user === "owner" ? "disabled" : ""}}>
            @error('location')
              <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <div class="mb-3 col-lg-3 col-12">
            <label for="price" class="form-label">Price</label>
            <input type="text" name="price" class="form-control" id="price" value="{{ $project->price }}" {{ $user === "owner" ? "disabled" : ""}}>
            @error('price')
              <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
        </div>

        <div class="row d-flex justify-content-start mb-3">
          <div class="mb-3 col-lg-3 col-12">
            <label for="status" class="form-label">Status</label> <br>
            <input type="radio" id="status" name="status" value="active" {{ ($project->status=="active") ? "checked" : "" }} {{ $user === "owner" ? "disabled" : ""}}>
            <label for="status">active</label><br>
            <input type="radio" id="status" name="status" value="inactive" {{ ($project->status=="inactive") ? "checked" : "" }} {{ $user === "owner" ? "disabled" : ""}}>
            <label for="status">inactive</label><br>
            @error('status')
              <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
        </div>

        <div class="row d-flex justify-content-between mb-3">
          <div class="mb-3 col-12">
            <label for="description" class="form-label">Description</label>
            <textarea rows="4" cols="50" type="text" class="form-control" name="description" class="form-control" id="description" {{ $user === "owner" ? "disabled" : ""}}>{{ $project->description }}</textarea>
            @error('description')
              <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
        </div>

        @if ($user === "owner")
          <div class="d-flex mb-5">
            <a href="/project"><button type="button" class="btn btn-outline-secondary">Back</button></a>
          </div>
        @else
          <div class="d-flex mb-5">
            <button type="submit" class="btn btn-outline-primary">Submit</button>
            <a href="/project"><button type="button" class="btn btn-outline-danger mx-2">Cancel</button></a>
          </div>
        @endif
      </form>
    </div>
  </div>

  <script type="text/javascript">
		const rupiah = document.getElementById('price');
		rupiah.addEventListener('keyup', function(e){
			// tambahkan 'Rp.' pada saat form di ketik
			// gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
			rupiah.value = formatRupiah(this.value, '');
		});
 
		/* Fungsi formatRupiah */
		function formatRupiah(angka, prefix){
			let number_string = angka.replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
 
			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}
 
			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return prefix == undefined ? rupiah : (rupiah ? '' + rupiah : '');
		}
	</script>
@endsection