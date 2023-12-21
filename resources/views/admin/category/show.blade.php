@extends('admin.layouts.master')
@section('content')

    <div class="container-fluid">
          <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">

              <h5 class="card-title mb-4 d-inline">Categories</h5>
             <a  href="{{route('admin.category.create')}}" class="btn btn-primary mb-4 text-center float-right">Create Categories</a>

                <div class="card-bod">
                    {{$dataTable->table()}}
                </div>
            </div>
          </div>
        </div>
      </div>
  </div>
@endsection
@push('scripts')

    {{$dataTable->scripts(attributes:['type'=>'module'])}}

@endpush
