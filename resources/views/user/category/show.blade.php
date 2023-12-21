


@extends('user.layouts.master')
@section('content')

    <section id="wsus__dashboard">
        <div class="container-fluid">
          @include('user.includes.sidebar')

          <div class="section-body">
            <div class="row">
                <div class="col-xl-9 col-xxl-10 col-lg-9 ms-auto">
                    <div class="dashboard_content mt-2 mt-md-0">
                        <div class="card">
                  <div class="card-header">
                    <h4>Categories</h4>
                    {{-- <div class="card-header-action">
                      <a href="{{route('user.post.create')}}" class="btn btn-primary">
                          <i class="fas fa-plus"></i> </a>
                    </div> --}}
                  </div>
                </div>
                  <div class="wsus__dashboard_profile">
                    <div class="wsus__dash_pro_area">
                      {{ $dataTable->table() }}
                    </div>
                  </div>

              </div>
            </div>
            </div>
          </div>

    </div>
  </section>

  @push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}

@endpush

@endsection
