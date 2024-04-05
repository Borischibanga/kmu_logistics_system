<!DOCTYPE html>
<html>
<head>
    <title>Super Admin| KMU</title>
    @include('superAdmin.style')
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <link rel="shortcut icon" type="image/x-icon" href="/assest/img/favicon.ico" />
    <link rel="stylesheet" href="assets/Dashboard/style.css">
</head>
<body>
@include('superAdmin.sidebar')
<div class="home-section">
@include('superAdmin.header')
@include('superAdmin.main-body')
</div>
@include('superAdmin.script')

</body>
</html>
