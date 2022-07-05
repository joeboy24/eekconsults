

<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - PivoApps Hotel Assist</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    {{-- <link href="/dashdir/css/bootstrap.css" rel="stylesheet"> --}}
    <link href="/maindir/css/bootstrap.min.css" rel="stylesheet">

    <!-- Include Choices CSS -->
    <link rel="stylesheet" href="/dashdir/vendors/choices.js/choices.min.css" />
    <link rel="stylesheet" href="/dashdir/vendors/iconly/bold.css">

    <link rel="stylesheet" href="/dashdir/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="/dashdir/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="/dashdir/css/app.css">
    <link rel="stylesheet" href="/dashdir/css/main.css">
    <link rel="shortcut icon" href="/dashdir/images/favicon.svg" type="image/x-icon">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">



</head>

<body>
    <div id="app">
        @if (count($users) > 0)
            @foreach ($users as $user)
                <p>{{ $user->name }}</p>
            @endforeach
            {{ $users->links() }}
        @else
            
        @endif
        
    </div>
    {{-- <script src="/dashdir/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script> --}}
    {{-- <script src="/dashdir/js/bootstrap.bundle.min.js"></script> --}}

    <!-- Include Choices JavaScript -->
    {{-- <script src="/dashdir/vendors/choices.js/choices.min.js"></script>
    <script src="/dashdir/js/pages/form-element-select.js"></script>

    <script src="/dashdir/vendors/apexcharts/apexcharts.js"></script>
    <script src="/dashdir/js/pages/dashboard.js"></script>

    <script src="/dashdir/js/main.js"></script> --}}

</body>

</html>