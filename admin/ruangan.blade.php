@extends('layouts.layout')
@section('content')
<div id="layoutSidenav_content">
          <div class="container mt-5">
		  <div class="card">
		  <div class="card-header">
		  <h2>Data Ruangan</h2>
		  </div>
		  <div class="card-body">
		  <button class="btn btn-primary"><a href=#">Tambahkan Data [+]</a></button><br><br>
		  <table class="table table-striped table-hover table-hover">
		  <thead class="bg-dark text-white">
		  <tr>
		  <th>No</th>
		  <th>Ruangan</th>
		  <th>Kapasitas Ruangan</th>
		  <th>fasilitas</th>
		  <th>gambar</th>
		  <th>Aksi</th>
		  </tr>
		   </thead>
		  </table>
		  <div class="row justify-content-center py-5">
		  <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>

		  </div>
           </div>			
            </div>
			@endsection