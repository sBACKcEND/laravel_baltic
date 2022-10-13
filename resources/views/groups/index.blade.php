
@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h3>Groups</h3>{{Auth::user()->name}} {{Auth::user()->surname}}
                </div>
                <div class="card-body">
{{--                    @can('create', \App\Models\Group::class)--}}
                    <a class="btn btn-primary" href="{{ route('groups.create') }}">Add new group</a>
{{--                    @endcan--}}
                        <table class="table">
                        <thead>
                        <tr>
                            <th>Group name</th>
                            <th>Start date</th>
                            <th>End date</th>
                            <th>Course</th>
                            <th># of students</th>
                            <th></th>
                            <th></th>
                            <th></th>
{{--                            <th></th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($groups as $group)
{{--                            @can('viewAny', $group)--}}
                        <tr>
                            <td>{{ $group->name }}</td>
                            <td>{{ $group->start }}</td>
                            <td>{{ $group->end }}</td>
                            <td>{{ $group->course->name }}</td>
                            <td></td>
                            <td><a class="btn btn-success" href="{{ route('group.subjects', $group->id) }}">Subjects</a> </td>
                            <td><a class="btn btn-success" href="{{ route('students.groups', $group->id) }}">Student list</a> </td>
                            <td><a class="btn btn-success" href="{{ route('groups.edit', $group->id) }}">Edit</a> </td>
{{--                            <td>--}}
{{--                                <form action="{{ route('groups.destroy', $group->id) }}" method="post">--}}
{{--                                    @csrf--}}
{{--                                    @method('DELETE')--}}
{{--                                    <button class="btn btn-danger">Delete</button>--}}
{{--                                </form>--}}
{{--                            </td>--}}
                        </tr>
{{--                            @endcan--}}
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
