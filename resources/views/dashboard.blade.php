{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}


@extends('layouts.app')

@section('content')

    <a href="{{ route('todo.create') }}">
        {{-- Add Button --}}
        <button type="button" class="btn btn-success w-100">Add</button>                                
        </a>

{{-- Dashboard Table --}}
<table class="table">
<thead class="table-dark">
<tr>
<th scope="col">Title</th>
<th scope="col">Description</th>
<th scope="col">Edit</th>
<th scope="col">Delete</th>
</tr>
</thead>
<tbody class="bg-light">
<tr>

{{-- forelse START --}}
@forelse ($todos as $todo)
<tr>

<td>{{ $todo->title }}</td>
<td>{{ $todo->description }}</td>

<td>
<a href="{{ route('todo.edit', $todo->id) }}">
    <button type="button" class="btn btn-warning">Edit</button>
</a>
</td>

<td>
<form action="{{ route('todo.destroy', $todo->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
</form>

</td>
</tr>
@empty
<td>
No Items Added!
</td>
@endforelse
{{-- forelse END --}}

</tr>
</tbody>
</table>

@endsection
