@extends('layout.app')

@section('title')
barang
@endsection

@section('content')
<div class="card mt-3">
 <div class="card-header">
  <div class="card-title">
            <h5>Supplier</h5>

            <button type="button" class="btn btn-success btn-sm float-end"
            data-bs-toggle="modal" data-bs-target="#modalTambah"><i class="fa fa-plus"></i></button>
</div>
     </div>
           </div>
<div class="card-body">
<table class="table table-dark table-striped-columns">

 <thead>
    <tr>
        <th>Nama</th>
        <th>NO telp</th>
        <th>Alamat</th>
        <th>aksi</th>
    </tr>
 </thead>
 

 <tbody>
    <tr>
        <td>Osama Bin laden </td>
        <td>idk</td>
        <td>riyadh,arab saudi</td>
        <td>alat perang</td>
        <td>
            <a href="#" class=" btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
            <a href="#" class=" btn btn-warning btn-sm"><i class="fa-solid fa-trash"></i></a>
        </td>
    </tr>
 </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
@endsection