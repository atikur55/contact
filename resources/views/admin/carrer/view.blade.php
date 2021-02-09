@extends('layout.master')
@section('title')
View Carrer
@endsection
@section('carrer')
active
@endsection
@push('plugin-styles')
  <link href="{{ asset('assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
@endpush


@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Career Table</li>
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
            View Career
          </div>
          <div class="col-lg-5" style="text-align:end;">
            <a style="color: #000;" href="{{url('create_carrer')}}"><i data-feather="plus-square"></i></a>
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
                <th>SHORT DESC.</th>
                <th>IMAGE</th>
                <th>IMAGE TITLE</th>
                <th>END TITLE</th>
                <th>END BUTTON</th>
                <th>STATUS</th>
                <th>ACTION</th>
              </tr>
            </thead>
            <tbody>
            @php $i = 1; @endphp
            @foreach($all_carrer as $carrer)
            <tr class="{{$carrer->status == 1?'bg-secondary':''}}">
              <td>{{$i}}</td>
              <td>{{\Illuminate\Support\str::limit($carrer->title,25,'....')}}</td>
              <td>{{\Illuminate\Support\str::limit($carrer->short_desc,25,'....')}}</td>
              <td><img src="{{asset('uploads/carrer/')}}/{{$carrer->image}}" width="80px;" alt=""></td>
              <td>{{\Illuminate\Support\str::limit($carrer->image_title,25,'....')}}</td>
              <td>{{\Illuminate\Support\str::limit($carrer->end_title,25,'....')}}</td>
              <td>{{\Illuminate\Support\str::limit($carrer->end_button,25,'....')}}</td>
              <td>
                <a href="{{url('active_carrer')}}/{{$carrer->id}}" class="btn @php echo $carrer->status == 0?'bg-maroon':'bg-blue'@endphp">
                  @php
                  echo $carrer->status == 0?'Off&nbsp&nbsp&nbsp<i data-feather="toggle-left"></i>':'On&nbsp&nbsp&nbsp<i data-feather="toggle-right"></i>'
                  @endphp
                </a>
              </td>
              <td>
                <a style="color: #000;" href="{{url('edit_carrer')}}/{{$carrer->id}}"><i data-feather="edit"></i></a>
                <a style="color: #000;" href="{{url('delete_carrer')}}/{{$carrer->id}}"><i data-feather="trash"></i></a>
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
