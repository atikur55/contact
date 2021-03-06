@extends('layout.master')
@section('title')
Create Banner
@endsection
@section('banner')
active
@endsection
@push('plugin-styles')
  <link href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
@endpush
@section('content')

<div class="row">
  <div class="col-lg-12 stretch-card">
    <div class="card">
      @if(session('success'))  
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{session('success')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif
      <div class="card-header">
        <div class="row">
          <div class="col-lg-7">
            Add Service 
          </div>
          <div class="col-lg-5" style="text-align:end;">
            <a style="color: #000;" href="{{url('view_services')}}"><i data-feather="arrow-left-circle"></i></a>
          </div>
        </div>
      </div>
            <div class="card-body">
                <div class="col-lg-7 m-auto">
                  <form action="{{url('edit_service_post')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mt-2">
                      <img src="{{asset('uploads/service_icon/')}}/{{$service->service_icon}}" width="50px;" alt="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Service Icon Image</label>
                      <input type="file" name="service_icon" class="form-control" id="exampleInputUsername1" autocomplete="off" placeholder="Service Icon">
                      <input type="hidden" name="id" class="form-control" id="exampleInputUsername1" autocomplete="off" value="{{$service->id}}">
                      @error('service_icon')
                      <div class="alert alert-danger">
                        <strong>{{$message}}</strong>
                      </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Service Name</label><br>
                      <input type="text" name="service_name" class="form-control" id="exampleInputUsername1" autocomplete="off" value="{{$service->service_name}}">
                      @error('service_name')
                      <div class="alert alert-danger">
                        <strong>{{$message}}</strong>
                      </div>
                      @enderror
                    </div>
                    <div class="mt-2">
                      <img src="{{asset('uploads/service/')}}/{{$service->image}}" width="200px" alt="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Photo</label>
                      <input type="file" class="form-control" id="exampleInputUsername1" name="image" autocomplete="off">
                      @error('image')
                      <div class="alert alert-danger">
                        <strong>{{$message}}</strong>
                      </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Image Title</label><br>
                      <input type="text" name="image_title" class="form-control" id="exampleInputUsername1" autocomplete="off" value="{{$service->image_title}}">
                      @error('image_title')
                      <div class="alert alert-danger">
                        <strong>{{$message}}</strong>
                      </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Image Sub Title</label><br>
                      <input type="text" name="image_sub_title" class="form-control" id="exampleInputUsername1" autocomplete="off" value="{{$service->image_sub_title}}">
                      @error('image_sub_title')
                      <div class="alert alert-danger">
                        <strong>{{$message}}</strong>
                      </div>
                      @enderror
                    </div>
                    
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </div>
                  </form>
                </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/chartjs/Chart.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/jquery.flot/jquery.flot.js') }}"></script>
  <script src="{{ asset('assets/plugins/jquery.flot/jquery.flot.resize.js') }}"></script>
  <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/progressbar-js/progressbar.min.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/dashboard.js') }}"></script>
  <script src="{{ asset('assets/js/datepicker.js') }}"></script>
@endpush
@section('js_script')
<script type="text/javascript">
  $(".file_type").change(function()
  {
      $(".file_type").prop('checked',false);
      $(this).prop('checked',true);
  });
</script>
@endsection
