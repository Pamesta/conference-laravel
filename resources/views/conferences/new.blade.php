@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('New conference') }}</div>

                    @if (@session('status'))
                        <div class="mx-auto bg-success text-white px-3 w-100">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="card-body">
                        <form method="POST" action="{{ route('conferences/new') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="title"
                                    class="col-md-2 col-form-label text-md-end">{{ __('Title') }}</label>

                                <div class="col-md-10">
                                    <input id="title" type="text" class="form-control" name="title"
                                        value="{{ old('title') }}">

                                    @error('title')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="description"
                                    class="col-md-2 col-form-label text-md-end">{{ __('Description') }}</label>

                                <div class="col-md-10">
                                    <textarea id="description" type="text" class="form-control" name="description" rows="6">{{ old('description') }}</textarea>

                                    @error('description')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="date"
                                    class="col-md-2 col-form-label text-md-end">{{ __('Date') }}</label>

                                <div class="col-md-10">
                                    <input id="date" type="text" class="form-control" name="date"
                                        value="{{ old('date') }}">

                                    @error('date')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="adress"
                                    class="col-md-2 col-form-label text-md-end">{{ __('Adress') }}</label>

                                <div class="col-md-10">
                                    <input id="adress" type="text" class="form-control" name="adress"
                                        value="{{ old('adress') }}">

                                    @error('adress')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-5">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Create') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
