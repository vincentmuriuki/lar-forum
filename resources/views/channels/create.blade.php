@extends('layouts.app')

@section('content')

            <div class="card">
                <div class="card-header">Create a new Channel</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('channels.store') }}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <input type="text" name="channel" class="form-control">
                        </div>

                        <div class="form-group">
                            <div class="text-center">
                                <button class=" btn btn-success" type="submit">
                                    Save channel
                                </button>
                            </div>
                        </div>


                    </form>
                </div>
            </div>

@endsection
