@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">channels</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-hover">
                        <thead>
                            <th>
                                Name
                            </th>
                            <th>
                                Edit
                            </th>
                            <th>
                                Delete
                            </th>
                        </thead>
                        <tbody>
                            @foreach($channels as $channel)
                                <tr>
                                <td>{{ $channel->title }}</td>

                                <td>
                                    <a href="{{ route('channels.edit', ['channel' => $channel->id ]) }}" class="btn bt-xs btn-info">Edit</a>
                                </td>

                                <td>


                                <form action="{{ route('channels.destroy', ['channel' => $channel->id ]) }}" method="post">
                                        {{ csrf_field() }}

                                        {{ method_field('DELETE') }} 

                                        <button class="btn bt-xs btn-danger" type="submit">Destroy</button>
                                </form>


                                    
                                </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
