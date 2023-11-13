@extends('layouts.admin')

@section('admin_content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Categpru</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
           <button class="btn btn-primary"data-toggle="modal" data-target="#catagorymodal">+Add New </button>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">All Category List Here</h3>
                </div>
                <!-- /.card-header -->

                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>SL</th>
                      <th>Category Name</th>
                      <th>Category Slug</th>
                      <th>Action</th>
                    </tr>
                    </thead>

                    @foreach ($data as $key=>$row )
                    <tbody>
                      <td>{{$key+1}}</td>
                      <td>{{$row->category_name}}</td>
                      <td>{{$row->category_slug}}</td>
                      <td>
                        <a href="#" class="btn btn-info btn-sm">edit</a>
                        <a href="#" class="btn btn-danger btn-sm">delet</a>
                      </td>
                    </tbody>
                    @endforeach
                  </table>

              </div>
            </div>
          </div>
        </div>
 </section>
  </div>


   <!-- Modal -->
   <div class="modal fade" id="catagorymodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
</div>
  @endsection
