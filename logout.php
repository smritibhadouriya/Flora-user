<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout | FLORA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Logout</h3>
                    </div>
                    <div class="card-body">
                        <p class="text-center">Are you sure you want to log out?</p>
                        <div class="text-center">
                            <a href="logout2.php" class="btn btn-danger" onclick= <?php session_unset(); ?>>Logout</a>
                            <a href="home2.php" class="btn btn-secondary">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
