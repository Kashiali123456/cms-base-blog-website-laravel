
@extends('layout')
@section('content')
  
        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>


          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i> Add Post
              <a href="{{url('admin/post')}}" class="float-right btn btn-sm btn-dark">All Data</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">

                @if($errors)
                  @foreach($errors->all() as $error)
                    <p class="text-danger">{{$error}}</p>
                  @endforeach
                @endif

                @if(Session::has('success'))
                <p class="text-success">{{session('success')}}</p>
                @endif

                <form method="post" action="{{url('admin/post')}}" enctype="multipart/form-data" id="save-content-form">
                  @csrf
                  <table class="table table-bordered" class="mb-3">
                      <tr>
                          <th>Category<span class="text-danger">*</span></th>
                          <td>
                            <select class="form-control" name="category">
                              @foreach($cats as $cat)
                              <option value="{{$cat->id}}">{{$cat->title}}</option>
                              @endforeach
                            </select>
                          </td>
                      </tr>
                      <tr>
                          <th>Post Title<span class="text-danger">*</span></th>
                          <td><input type="text" name="title" class="form-control" /></td>
                      </tr>
                    

                      <tr>
                          <th>Featured Image</th>
                          <td><input type="file" name="post_image" /></td>
                      </tr>
                      <tr>
                          <th> Full Description<span class="text-danger" >*</span></th>
                          <td>
                            <textarea class="ckeditor" style="width: 730px; height: 200px"  maxlength="300" name="detail" autofocus ></textarea>
                            <div id="the-count">
                            <span id="current">0</span>
                            <span id="maximum">/ 300</span>
                          </div>
                          </td>
                      </tr>
                      <!-- <tr>
                          <th> Meta Description<span class="text-danger" >*</span></th>
                          <td>
                            <textarea class="ckeditor form-control" style="width: 730px; height: 200px" name="description" ></textarea>
                          </td>
                      </tr> -->
                      <tr>
                          <th>Slug Parameter<span class="text-danger">*</span></th>
                          <td><input type="text" name="slug" class="form-control" /></td>
                      </tr>
                      <!-- <tr>
                          <th>Excerpt<span class="text-danger">*</span></th>
                          <td><input type="text" name="excerpt" class="form-control" /></td>
                      </tr> -->

                      <tr>
                          <th>Schema Data<span class="text-danger">*</span></th>
                          <td><textarea type="text" name="data" class="form-control" ></textarea></td>
                      </tr>

                      <tr>
                          <th>Tags</th>
                          <td>
                            <textarea class="form-control" name="tags"></textarea>
                          </td>
                      </tr>
                      <tr>
                          <th>Meta Title<span class="text-danger">*</span></th>
                          <td><input type="text" name="meta" class="form-control" /></td>
                      </tr>
                      <tr>
                          <th> Meta Description<span class="text-danger" >*</span></th>
                          <td>
                            <textarea class="form-control"  name="description" ></textarea>
                          </td>
                      </tr>
                      <tr>
                          <td colspan="2">
                              <input type="submit" class="btn btn-primary" />
                          </td>
                      </tr>
                  </table>
                </form>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
@endsection

