@extends('includef.headerAndFooter')
@section('content')



<main class="container mt-5 md-5">
  <div class="bg-light p-5 rounded">
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
        @foreach($getData as $data)
         <tr>
          <td>{{ $data->id }}</td>
          <td>{{ $data->name }}</td>
          <td>{{ $data->address }}</td>
         </tr>
        @endforeach
        </tbody>

    </table>

  </div>
</main>

<script>
  $(document).ready(function () {
    new DataTable('#example', {
    paging: false,
    scrollCollapse: true,
    scrollY: '50px'
});
  });
</script>

@endsection