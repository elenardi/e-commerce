@extends('layouts.app')

@section('content')
@include('layouts.headers.use')

    <div class="container-fluid mt--8">
        {{-- Content Header --}}
        <div class="header-body">
            <div class="row align-items-center py-3">
                <div class="col-lg-8 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Categories</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-auto">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{route('category')}}">Main Category</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add Category</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        {{-- End Content Header --}}
        {{-- Content --}}
        <div class="col-xl-12 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <h3 class="mb-0">{{ __('Add Category') }}</h3>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ url('/add_category')}}" autocomplete="off">
                        @csrf

                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <div class="pl-0">

                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-name">{{ __('Category Name') }}</label>
                                <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Category Name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-email">{{ __('Description') }}</label>
                                <input type="text" name="description" id="input-description" class="form-control form-control-alternative{{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="{{ __('Description') }}" required>

                                @if ($errors->has('description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('url') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-email">{{ __('URL') }}</label>
                                <input type="text" name="url" id="input-url" class="form-control form-control-alternative{{ $errors->has('url') ? ' is-invalid' : '' }}" placeholder="{{ __('URL') }}" required>

                                @if ($errors->has('url'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('url') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-success mt-4">{{ __('Add Category') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- End Content --}}
        @include('layouts.footers.auth')
    </div>

@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
