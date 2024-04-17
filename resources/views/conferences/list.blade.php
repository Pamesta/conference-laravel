@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="text-center mb-5">
            <h1>{{ __('conferences.all') }}</h1>

            @if (auth()->check() && auth()->user()->is_admin)
                <div class="d-flex flex-column mx-2">
                    <form method="GET" action={{ route('conferences/new') }}>
                        @csrf
                        <button type="submit" class="btn btn-primary w-10 m-0 mb-4">New</button>
                    </form>
                </div>
            @endif
        </div>

        @if ($conferences->isEmpty())
            <p>{{ __('conferences.empty') }}</p>
        @else
            <div class="list-group mx-auto w-50">

                @foreach ($conferences as $conference)
                    <div class="d-flex">
                        <div class="list-group-item border mb-3 flex-grow-1">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">{{ $conference->title }}</h5>
                                <small><strong>{{ $conference->date->format('Y-m-d H:i') }}</strong></small>
                            </div>

                            <p class="mb-3">{{ $conference->description }}</p>

                            <p class="small m-0"><strong><em>{{ $conference->adress }}</em></strong></p>
                        </div>

                        {{-- edit and delete buttons if admin --}}
                        @if (auth()->check() && auth()->user()->is_admin)
                            <div class="d-flex flex-column mx-2">
                                <form method="GET" action={{ route('conferences/edit', $conference->id) }}>
                                    @csrf
                                    <button type="submit"
                                        class="btn btn-primary w-100 m-0 mb-4">{{ __('conferences.editButton') }}</button>
                                </form>

                                <form method="POST" action={{ route('conferences/delete', $conference->id) }}>
                                    @csrf
                                    <button type="submit"
                                        class="btn btn-sm btn-danger m-2">{{ __('conferences.deleteButton') }}</button>
                                </form>
                            </div>
                        @endif
                    </div>
                @endforeach

            </div>
        @endif
    </div>
@endsection
