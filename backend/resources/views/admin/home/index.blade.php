@section('title')
    {{ 'Dashboard' }}
@endsection
@extends('admin.layout')
@section('content')

<div class="row">
  <div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
          <h6 class="text-white text-capitalize ps-3">Homepage Table</h6>
        </div>
      </div>
      <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">
          <a href="{{ route('create.home') }}" class="badge badge-sm bg-gradient-success m-4" >Tambah</a>
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Images</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Title</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                @foreach ($home as $item)
                <td>
                  <div class="d-flex px-2 py-1">
                    <div>
                      <img src="{{ asset('img/'.$item->img) }}" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                    </div>
                    {{-- <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-sm">John Michael</h6>
                      <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                    </div> --}}
                  </div>
                </td>
                <td>
                  <p class="text-xs font-weight-bold mb-0">{{ $item->title }}</p>
                  {{-- <p class="text-xs text-secondary mb-0">Organization</p> --}}
                </td>

                <td class="align-middle text-center text-sm">
                  <span class="badge badge-sm bg-gradient-success">Edit</span>
                </td>
                @endforeach

              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection