@extends('admin')
@section('content')
<link rel="stylesheet" href="admin-css/booked.css">
<section>
  <!--for demo wrap-->
  <h1>Fixed Table header</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Email</th>
          <th>Check In</th>
          <th>Check Out</th>
		  <th>Adult</th>
		  <th>Child</th>
		  <th>Room No.</th>
		  <th>Action</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <tr>
          <td>01</td>
          <td>shaheen </td>
          <td>shaheen@gmail.com</td>
          <td>08/18/2024</td>
          <td>08/20/2024</td>
		  <td>2</td>
		  <td>2</td>
		  <td>101</td>
		  <td>edit</td>
		  </tbody>
    </table>
  </div>
</section>
@endsection