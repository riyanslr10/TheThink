@extends('dashboard.layouts.main')

@section('container')
<div class="flex justify-between flex-wrap items-center pt-3 pb-2 mb-2 border-b">
  <h1 class="text-2xl">Users</h1>
</div>

@if (session()->has('success'))
<div class="bg-green-500 text-white p-4 mb-4">
  {{ session('success') }}
</div>
@endif

<div class="col-lg-8">
  <a href="/dashboard/users/create" class="btn btn-primary mb-3">Create New User</a>
  <div class="overflow-x-auto">
    <table class="table-auto w-full">
      <thead>
        <tr>
          <th class="px-4 py-2">No</th>
          <th class="px-4 py-2">Name</th>
          <th class="px-4 py-2">Username</th>
          <th class="px-4 py-2">Email</th>
          <th class="px-4 py-2">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($User as $user)
        <tr>
          <td class="border px-2 py-2">{{ $loop->iteration }}</td>
          <td class="border px-2 py-2">{{ $user->name }}</td>
          <td class="border px-2 py-2">{{ $user->username }}</td>
          <td class="border px-2 py-2">{{ $user->email }}</td>
          <td class="border px-2 py-2">
            <a href="/dashboard/profiles/{{ $user->id }}" class="badge bg-info px-2 py-2">View</a>
            <a href="/dashboard/profiles/{{ $user->id }}/edit" class="badge bg-warning px-2 py-2">Edit</a>
            <form action="/dashboard/profiles/{{ $user->id }}" method="post" class="inline">
              @csrf
              @method('delete')
              <button class="badge bg-danger border-0 px-2 py-2" onclick="return confirm('Are You Sure?')">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
