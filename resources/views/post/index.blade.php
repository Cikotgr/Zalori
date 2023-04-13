@extends('layouts.app')

@section('title', 'Post Index Page')

@section('scripts')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
@endsection

@section('content')
    {{-- <a href="{{ route('post.create') }}">
        <button>Tambah</button>
    </a> --}}

    <table id="exampleTable">
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection



@section('js')
    <script>
        $(document).ready(function() {
            $('#exampleTable').DataTable();
        });
    </script>
@endsection
