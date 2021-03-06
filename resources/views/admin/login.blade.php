<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ mix('css/admin.css') }}" rel="stylesheet">
</head>

<body class="login-page">
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="login-panel card">
                    <div class="card-header">
                        <h3 class="card-title">Please Sign In</h3>
                    </div>
                    <div class="card-body">
                        <form role="form" action="{{ route('authenticate') }}" method="POST">
                            @csrf
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
