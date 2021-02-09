@extends('layout.master')
@section('title')
View Banner
@endsection
@section('banner')
active
@endsection
@push('plugin-styles')
  <link href="{{ asset('assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
@endpush


@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Service Table</li>
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
            View Service
          </div>
          <div class="col-lg-5" style="text-align:end;">
            <a style="color: #000;" href="{{url('create_services')}}"><i data-feather="plus-square"></i></a>
          </div>
        </div>
      </div>
      <div class="card-body">

        <div class="table-responsive">
          <table id="dataTableExample" class="table table-striped text-center">
            <thead>
              <tr>
                <th>SL No</th>
                <th>SERVICE ICON</th>
                <th>SERVICE NAME</th>
                <th>IMAGE</th>
                <th>IMAGE TITLE</th>
                <th>IMAGE SUB TITLE</th>
                <th>ACTION</th>
              </tr>
            </thead>
            <tbody>
            @php $i = 1; @endphp
            @foreach($all_service as $service)
            <tr>
              <td>{{$i}}</td>
              <td><img src="{{asset('uploads/service_icon/')}}/{{$service->service_icon}}" width="50px;" alt=""></td>
              <td>{{$service->service_name}}</td>
              <td><img src="{{asset('uploads/service/')}}/{{$service->image}}" width="50px;" alt=""></td>
              <td>{{$service->image_title}}</td>
              <td>{{$service->image_sub_title}}</td>
              <td>
                <a href="{{url('active_service')}}/{{$service->id}}" class="btn @php echo $service->status == 0?'bg-maroon':'bg-blue'@endphp">
                  @php
                  echo $service->status == 0?'Off&nbsp&nbsp&nbsp<i data-feather="toggle-left"></i>':'On&nbsp&nbsp&nbsp<i data-feather="toggle-right"></i>'
                  @endphp
                </a>
              </td>
              <td>
                <a style="color: #000;" href="{{url('edit_service')}}/{{$service->id}}"><i data-feather="edit"></i></a>
                <a style="color: #000;" href="{{url('delete_service')}}/{{$service->id}}"><i data-feather="trash"></i></a>
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
