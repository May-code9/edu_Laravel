@extends('admin.base')
@section('content')

<div class="wrapper row-offcanvas row-offcanvas-left">
  <!-- Left side column. contains the logo and sidebar -->
  @include('admin.layouts.sidebar.classroom')


  <!-- Right side column. Contains the navbar and content of the page -->
  <aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <div class="col-md-12" style="padding-left:0px">
      @if(session('success_status'))
      <div class = "alert alert-success alert-dismissable">
        <i class="fa fa-check"></i>
        {{session('success_status')}}
      </div>
      @endif

      @if(session('failure_status'))
      <div class = "alert alert-warning alert-dismissable">
        <i class="fa fa-warning"></i>
        {{session('failure_status')}}
      </div>
      @endif
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Content</h3>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Course Title</th>
                    <th>Content Title</th>
                    <th>Content Details</th>
                    <th>PDF</th>
                    <th>Video</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Week No</th>
                    <th>Admin Editor</th>
                    <th></th>
                  </tr>
                </thead>
                @forelse($getContents as $getContent)
                <tbody>
                  <tr>
                    <td>{{ $getContent->id }}</td>
                    <td>{{ $getContent->course }}</td>
                    <td>{{ $getContent->content_title }}</td>
                    <td>{!! $getContent->shortContent !!}</td>
                    <td><a href="#" title="{{ $getContent->content_pdf }}">{{ $getContent->content_pdf }}</a></td>
                    @if(is_null($getContent->content_video))
                    <td>No Video</td>
                    @else
                    <td><a href="#">
                      <video width="200" height="150">
                       <source src="{{ asset('video/' . $getContent->content_video) }}" type="video/mp4">
                      </video></a>
                    </td>
                    @endif
                    @if(is_null($getContent->content_image))
                    <td>No Image</td>
                    @else
                    <td class="center"><img src="{{ asset('images/content/' . $getContent->content_image) }}" width="50" height="50"></td>
                    @endif
                    <td>{{ $getContent->category }}</td>
                    <td>{{ $getContent->week_no }}</td>
                    <td>{{ $getContent->first_name }} {{ $getContent->last_name }}</td>
                    <td class="center"><a href="/trashedContent/{{ $getContent->id }}/edit" id="edit" class="btn btn-md btn-primary mr-2" >Edit</a></td>
                  </tr>

                </tbody>
                @empty
                <h1 style="text-align:center">Course Table is empty</h1>
                @endforelse
                <tfoot>
                  <tr>
                    <th>Id</th>
                    <th>Course Title</th>
                    <th>Content Title</th>
                    <th>Content Details</th>
                    <th>PDF</th>
                    <th>Video</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Week No</th>
                    <th>Admin Editor</th>
                    <th></th>
                  </tr>
                </tfoot>
              </table>

            </div><!-- /.box-body -->
          </div><!-- /.box -->
        </div>
      </div>

    </section><!-- /.content -->
  </aside><!-- /.right-side -->
</div><!-- ./wrapper -->
@endsection
