@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Auth::user())
                    <!-- Table -->
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Character</th>
                            <th scope="col">Real Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($characters as $key => $value)
                            <tr>
                            <th scope="row">1</th>
                            <td>{{ $key }}</td>
                            <td>{{ $value }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
