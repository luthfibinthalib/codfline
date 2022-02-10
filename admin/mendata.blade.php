@extends('layouts.layout')
@section('content')
<div id="layoutSidenav_content">
          <div class="container mt-5">
		  <form>
		  <div class="mb-5">
		  <div class="card">
		  <div class="card-header">
		 <h2>Form mendata ruangan</h2>
		 </div>
		 <div class="card-body">
		 <div class="mb-4">
		 <input type="text"name="ruangan"class="form-control"placeholder="Ruangan"required/>
		 </div>
		 <div class="mb-4">
		  <input type="number"name="kapasitas_ruangan"class="form-control"placeholder="Kapasitas Ruangan"required/>
		  </div>
		  <div class="mb-4">
		
         <input class="form-control" type="file" name="gambar"id="formFile"required>
		  </div>
		  <div class="mb-4">
		  <input type="text"name="fasilitas"class="form-control"placeholder="fasilitas"required/>
		  </div>
		  <div class="mb-4">
		  <input type="submit"name="simpan"value="simpan"class="btn btn-primary">
		  </div>
		 </form>
		  </div>
           	</div>
			</div>
</div>
</div>			
            </div>
			@endsection