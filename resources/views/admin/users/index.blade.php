@extends('layouts.admin')



@section('content')

    <h1>Users</h1>
    <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>Email</th>
              <th>Role</th>
              <th>Status</th>
              <th>Created</th>
              <th>Updated</th>
              <th>Photo ID</th>

          </tr>
        </thead>
        <tbody>

        @if($users)

            @foreach($users as $user)
          <tr>
            <td>{{$user->id}}</td>
            <td><a href="{{route('admin.user.edit',$user->id)}}">{{$user->name}}</a></td>
            <td>{{$user->email}}</td>
              <td>{{$user->role->name}}</td>
              <td>{{$user->is_active ==1 ? 'Active' : 'Not Active'}}</td>
              <td>{{$user->created_at->diffForHumans()}}</td>
              <td>{{$user->updated_at->diffForHumans()}}</td>
              <td><img height="50" src="{{$user->photo ? $user->photo->file:'https:/placehold.it/400x400'}}" alt=""></td>
          </tr>

             @endforeach
            @endif
        </tbody>
      </table>

    @stop