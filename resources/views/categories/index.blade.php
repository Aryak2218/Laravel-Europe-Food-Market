@extends('layout.dashboard')
@section('content')
    <h3>Categories</h3>
    <button type="button" class="btn btn-tambah">
        <a href="/category/tambah">Input Data</a>
    </button>
    <table class="table-data">
        <thead>
            <tr>
                <th scope="col" style="width: 10%">category</th>
                <th scope="col" style="width: 10%">price</th>
                <th scope="col" style="width: 15%">description</th>
                <th scope="col" style="width: 10%">region</th>
                <th scope="col" style="width: 25%">action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($categories as $category)
                <tr>
                    <td>{{ $category->category }}</td>
                    <td>{{ $category->price }}</td>
                    <td>{{ $category->description }}</td>
                    <td>{{ $category->region }}</td>
                    <td>
                        <a class='btn-edit' href="/category/edit/{{ $category->id }}">Edit</a>
                        ||
                        <a class='btn-delete' href="/category/hapus/{{ $category->id }}">Delete</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" align="center">Data Not Found!!</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
