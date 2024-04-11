
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
<div class="home-content">
<div class="row">
    <div class="col p-3">
        <div class="card">

            <div class="card-body p-3 bg-body"></div>
        </div>
    </div>
</div>
</div>
</div>

@include('Driverofficer.script')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
