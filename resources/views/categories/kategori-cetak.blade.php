<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Data Category</title>
  <style>
    .table-data {
      border-collapse: collapse;
      width: 100%;
    }

    .table-data tr th,
    .table-data tr td {
      border: 1px solid black;
      font-size: 11pt;
      padding: 10px 20px;
      text-align: center;
    }

    .table-data tr th {
      background-color: #ff0000;
      color: white;
    }

    .table-data tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    .table-data tr:hover {
      background-color: #f5f5f5;
    }
  </style>
</head>

<body>
  <table class="table-data">
    <thead>
      <tr>
        <th>No</th>
        <th>category</th>
        <th>price</th>
        <th>description</th>
        <th>region</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($categories as $category)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $category->category }}</td>
        <td>{{$category->price }}</td>
        <td>{{ $category->description}}</td>
        <td>{{ $category->region }}</td>
      </tr>
      @empty
      <tr>
        <td colspan="7" align="center">Tidak ada data</td>
      </tr>
      @endforelse
    </tbody>
</body>

</html>
