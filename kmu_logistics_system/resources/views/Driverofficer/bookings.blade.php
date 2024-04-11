
<!DOCTYPE html>
<html>
<head>
    <title>Driver Officer| KMU</title>
    @include('Driverofficer.style')
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <link rel="shortcut icon" type="image/x-icon" href="/assest/img/favicon.ico" />
    <script src="https://kit.fontawesome.com/dcdb05824e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/Dashboard/style.css">
</head>
<body>
@include('Driverofficer.sidebar')
<div class="home-section">
@include('Driverofficer.header')
<div class="home-content">
<div class="row">
    <div class="col p-3">

        <div class="card">
            <div class="card-header p-3 text-center text-white"  style="background:#0A2558">
                <h5>Booking Management</h5>
            </div>

            <div class="card-body p-3 bg-body">
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Trip Name</th>
      <th scope="col">No Of Seats</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($bookings as $item)
    <tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $item->trip_name }}</td>
    <td>{{ $item->number_of_seats }}</td>
    <td>

    @if($item->status == 'enabled')
            <form method="post"action="{{ route('trips.toggleStatus', $trip->id) }}">
                @csrf
                @method('post')
                <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-ban"></i> Disable</button>
            </form>
        @else
            <form method="post" action="{{ route('bookingDisable') }}">
                @csrf
                @method('post')
                <button type="submit" class="btn btn-primary btn-sm"><i class="fa-solid fa-square-check"></i> Enable</button>
            </form>
        @endif
    </td>
    </tr>
    @endforeach
  </tbody>
</table>
            </div>
        </div>
    </div>
</div>
</div>
</div>

@include('Driverofficer.script')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
