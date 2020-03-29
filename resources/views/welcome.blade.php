
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">UEFA Winners</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- Table -->
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">Year</th>
                            <th scope="col">Match Played</th>
                            <th scope="col">Winner</th>
                            <th scope="col">Score</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($uefa as $key => $value)
                            <tr>
                            <th scope="row">{{ $key }}</th>
                            <td>{{ $value['played'] }}</td>
                            @if(Auth::user())
                            <td><a href="#" class="btn btn-sm btn-success">{{ $value['winner'] }}</a></td>
                            <td><a href="#" class="btn btn-sm btn-info">{{ $value['score'] }}</a></td>
                            @endif
                            @if(Auth::guest())
                            <td> <a href="/login" class="btn btn-sm btn-warning"> Login to see winner </a> </td>
                            <td> <a href="/login" class="btn btn-sm btn-danger"> SCORE </a> </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
