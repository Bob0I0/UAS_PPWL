@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">List Donatur</div>
    <div class="card-body">
        @can('create-donatur')
        <a href="{{ route('donaturs.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Add New Donatur</a>
        @endcan
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">S#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($donaturs as $donatur)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $donatur->name }}</td>
                    <td>{{ $donatur->amount }}</td>
                    <td>{{ $donatur->description }}</td>
                    <td>
                        <form action="{{ route('donaturs.destroy', $donatur->id) }}" method="post">
                            @csrf
                            @method('DELETE')

                            <a href="{{ route('donaturs.show', $donatur->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i>
                                Show</a>

                            @can('edit-donatur')
                            <a href="{{ route('donaturs.edit', $donatur->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                            @endcan

                            @can('delete-donatur')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this donatur?');"><i class="bi bi-trash"></i> Delete</button>

                            @endcan
                        </form>
                    </td>
                </tr>
                @empty
                <td colspan="4">
                    <span class="text-danger">
                        <strong>No Donatur Found!</strong>
                    </span>
                </td>
                @endforelse
            </tbody>
        </table>

        {{ $donaturs->links() }}

    </div>
</div>
@endsection