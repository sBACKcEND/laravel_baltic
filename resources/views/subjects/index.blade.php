@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h3>Subjects</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Subject name</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                            @foreach($subjects as $subject)
                                    @if($subject->group_id == request()->route('name') )
                                        <td>{{ $subject->name }}</td>
                                        <td></td>
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
