
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <style>
        body{
            /* background-color: #957DAD; */
            text-align: center
        }
    </style>
</head>
<body>
    <form action="{{ url('user/auth') }}" method="post">
        @csrf
        <div class="mt-5 ">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-4 text-center">
                        <div class="card bg-secondary text-white">
                            <h2 class="text-center mt-5">LOGIN</h2>
                            <div class="card-body">
                                <form action="">
                                    <div class="mb-3 text-center">
                                        <label for="" class="form-label">EMAIL</label>
                                        <input type="text" name="email" id="email"  class="form-control" placeholder="masukan email">
                                    </div>
                                    <div class="mb-3 text-center">
                                        <label for="" class="form-label">PASSWORD</label>
                                        <input type="password" name="password" id="password" class="form-control" placeholder="masukan password">
                                    </div>
                                    <div class="my-3 text-center">
                                        <input type="submit" value="login" class="btn btn-primary">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    
        </div>
    </form>
</body>
</html>
