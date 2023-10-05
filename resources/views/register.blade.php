<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="position-absolute top-50 start-50 translate-middle" style="border: 1px solid black; padding: 3rem; border-radius: 6px">

            <form>
                <h2>Register</h2>
                <div class="mb-3">
                    <label for="name" class ="form-label">Username</label>
                    <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Masukkan Username">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Email Address">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Password">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Ulangi Password">
                </div>
                <button type="submit" class="btn btn-primary">Confirm</button>
              </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>