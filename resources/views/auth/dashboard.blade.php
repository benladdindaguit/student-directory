
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5" style="max-width: 650px;">
    <div class="card shadow-sm">
        <div class="card-body p-4">
            <h2>User Dashboard</h2>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <p>Welcome, {{ Auth::user()->name }}!</p>
            <p>Email: {{ Auth::user()->email }}</p>
            <p>Role: {{ Auth::user()->role }}</p>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">
                    Logout
                </button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
