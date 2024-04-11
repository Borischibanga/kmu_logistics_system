
<!DOCTYPE html>
<html>
<head>
    <title>Driver Officer| KMU</title>
    @include('Driverofficer.style')
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <link rel="shortcut icon" type="image/x-icon" href="/assest/img/favicon.ico" />
    <link rel="stylesheet" href="assets/Dashboard/style.css">
</head>
<body>
@include('Driverofficer.sidebar')
<div class="home-section">
@include('Driverofficer.header')
<div class="home-content p-2">
<div>
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif

                @if (session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                @endif
            </div>
<div class="row">
    <div class="col p-3">
        <div class="card">
            <div class="card-header p-1 text-center text-white" style="background:#0A2558 ">
                <h5>Set Trips</h5>
            </div>

            <div class="card-body p-3 bg-body">

               <form method="post" action="{{url('/setTrips')}}">
               @csrf
               <div class="row p-3">
            <div class="col">
            <select class="form-control" name="trip_name">
                <option>Select Trip Name</option>
                <option value="trip 1"> Trip 1</option>
                <option value="trip 2"> Trip 2</option>
                <option value=" trip 3"> Trip 3</option>
                <option value="trip 4"> Trip 4</option>
                <option value="trip 5"> Trip 5</option>
</select>

</div></div>
<div class="row p-3 ">
    <div class="col">
        <input type="submit" class="form-control btn btn-primary" value="Set Trip">
    </div>
</div>
</form>
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
