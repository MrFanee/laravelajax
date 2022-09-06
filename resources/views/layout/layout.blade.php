<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    @yield('title')
</head>
<body>

<div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-md-2">
            <ul class="list-group">
                <li class="list-group-item active">MAIN MENU</li>
                <a href="{{ route('dashboard.index') }}" class="list-group-item" style="color: #212529;">Dashboard</a>
                <a href="{{ route('dashboard.profil') }}" class="list-group-item" style="color: #212529;">Profil</a>
                <a href="#" class="list-group-item" style="color: #212529;">coming soon</a>
                <a href="#" class="list-group-item" style="color: #212529;">coming soon</a>
            </ul>
            <ul class="list-group">
                <li class="list-group-item active">Coming Soon</li>
                <a href="{{ route('dashboard.logout') }}" class="list-group-item" style="color: #212529;">Logout</a>
            </ul>
        </div>

    @yield('conten')

    </div>

    <div id="footer" class="row">
        <div class="col-md-10 offset-md-2">
            <div class="card">
                <div class="card-body"><p style="text-align:center"> footer Cooming soon </p>
                </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
