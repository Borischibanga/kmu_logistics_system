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
@include('Driverofficer.main-body')
</div>
@include('Driverofficer.script')

</body>
</html>
