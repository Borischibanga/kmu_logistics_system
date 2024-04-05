<!DOCTYPE html>
<html>
<head>
    <title>Students Logistics System| KMU</title>
    @include('Students.style')
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <link rel="shortcut icon" type="image/x-icon" href="/assest/img/favicon.ico" />
    <link rel="stylesheet" href="assets/Dashboard/style.css">
</head>
<body>
@include('Students.sidebar')
<div class="home-section">
@include('Students.header')
@include('Students.main-body')
</div>
@include('Students.script')

</body>
</html>
