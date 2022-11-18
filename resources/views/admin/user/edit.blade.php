@extends('layouts.master')

@section('title', 'Edit Users')

@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">

        <div class="card-header">
            <h4>Edit Users</h4>
            <a href="{{ url('admin/users') }}" class="btn btn-danger float-end">BACK</a>
          </div>
        <div class="card-body">

                <div class="mb-3">
                    <label for="">Full Name</label>
                    <p class="form-control">{{ $user->name }}</p>
                </div>
                <div class="mb-3">
                    <label for="">Email Id</label>
                    <p class="form-control">{{ $user->email }}</p>
                </div>

                <div class="mb-3">
                    <label for="">Created At</label>
                    <p class="form-control">{{ $user->created_at->format('d/m/Y') }}</p>
                </div>


            <form action="{{ url('admin/update-user/'.$user->id) }}" method="POST">
                @csrf
                @method('PUT')
          <div class="mb-3">
         <label class="text-danger h4">Role as</label>
          <select name="role_as" class="form-control">
                <option value="1" {{ $user->role_as == '1' ? 'selected':''}}>Admin</option>
                <option value="0" {{ $user->role_as == '0' ? 'selected':''}}>User</option>
                <option value="2" {{ $user->role_as == '2' ? 'selected':''}}>Blogger</option>

           </select>
          </div>
          <div class="mb-3">
            <button class="btn btn-primary">Update User Role</button>
          </div>

            </form>

        </div>

    </div>

</div>

@endsection
