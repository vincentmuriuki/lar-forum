@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8"> --}}
            <div class="card">
                <div class="card-header text-center">Create a new Discussion</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('discussion.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group">

                            <label for="channel">Pick a Channel</label>

                            <select name="channel_id" id="channel_id" class="form-control">

                                @foreach($channels as $channel)

                            <option value="{{ $channel->id }}">{{ channel->title }}</option>

                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">

                            <label for="content">Ask a question</label>
                            <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-success pull-right" type="submit">Create discussion</button>
                        </div>
                    </form>
                </div>
            </div>
        {{-- </div>
    </div>
</div> --}}
@endsection
