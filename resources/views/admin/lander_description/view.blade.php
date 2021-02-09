@extends('layout.master')
@section('title')
View Banner
@endsection
@section('lan_description')
active
@endsection
@push('plugin-styles')
  <link href="{{ asset('assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
@endpush


@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Description Table</li>
  </ol>
</nav>

<div class="row">
  @if(session('delete'))  
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{session('delete')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-lg-7">
            View Service Description
          </div>
          <div class="col-lg-5" style="text-align:end;">
            <a style="color: #000;" href="{{url('create_lander_description')}}"><i data-feather="plus-square"></i></a>
          </div>
        </div>
      </div>
      <div class="card-body">

        <div class="table-responsive">
          <table id="dataTableExample" class="table table-striped text-center">
            <thead>
              <tr>
                <th>SL No</th>
                <th>TITLE</th>
                <th>PARAGRAPH</th>
                <th>IMAGE</th>
                <th>STATUS</th>
                <th>ACTION</th>
              </tr>
            </thead>
            <tbody>
            @php $i = 1; @endphp
            @foreach($all_banner as $banner)
            <tr>
              <td>{{$i}}</td>
              <td>{{\Illuminate\Support\str::limit($banner->title,25,'....')}}</td>
              <td>{{\Illuminate\Support\str::limit($banner->paragraph,25,'....')}}</td>
              <td><img src="{{asset('uploads/lander_description/')}}/{{$banner->image}}" width="80px;" alt=""></td>
              <td>
                <a href="{{url('active_lander_description')}}/{{$banner->id}}" class="btn @php echo $banner->status == 0?'bg-maroon':'bg-blue'@endphp">
                  @php
                  echo $banner->status == 0?'Off&nbsp&nbsp&nbsp<i data-feather="toggle-left"></i>':'On&nbsp&nbsp&nbsp<i data-feather="toggle-right"></i>'
                  @endphp
                </a>
              </td>
              <td>
                <a style="color: #000;" href="{{url('edit_lander_description')}}/{{$banner->id}}"><i data-feather="edit"></i></a>
                <a style="color: #000;" href="{{url('delete_lander_descriptionr')}}/{{$banner->id}}"><i data-feather="trash"></i></a>
              </td>
            </tr>
            @php $i++; @endphp
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/datatables-net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatables-net-bs4/dataTables.bootstrap4.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/data-table.js') }}"></script>
@endpush
