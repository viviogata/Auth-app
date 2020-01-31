<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <title>Auth App</title>
</head>
<body>
<div id="app">
    <a href="index.php" class="logo">Auth App</a>
    <img class="wave" src="img/Wave.png">
    <div class="container">
        <div class="img">
            <img src="img/back.svg">
        </div>
        <div class="login-container">
            <form action="../api/login.php" method="post">
            <input type="text" name="login" value="true" style="display: none">
                <img class="avatar" src="img/avatar.svg">
                <h2>Welcome</h2>
                <div class="input-div one focus">
                    <div class="i">
                        <i class="fa fa-user"></i>
                    </div>
                    <div>
                        <input class="input" type="email" name="email" placeholder="Email" required>
                    </div>
                </div>
                <div class="input-div two">
                    <div class="i">
                        <i class="fa fa-lock"></i>
                    </div>
                    <div>
                        <input class="input" type="password" name="password" placeholder="••••••••" required>
                    </div>
                </div>
                <button class="btn" type="submit">Login</button>
                <p>Don't have an account?<a href="#" @click="showAddModal=true">Register Now!</a></p>
            </form>
        </div>
    </div>
    <!-- Create account -->
    <div id="overlay" v-if="showAddModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create your account</h5>
                    <button type="button" class="close" @click="showAddModal=false">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-4">
                    <form method="POST">
                    <div class="form-group">
                          <input type="text" name="firstname" class="form-control form-control-lg" placeholder="First Name" v-model="newUser.firstname">
                      </div>
                      <div class="form-group">
                          <input type="text" name="lastname" class="form-control form-control-lg" placeholder="Last Name" v-model="newUser.lastname">
                      </div>
                      <div class="form-group">
                          <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" v-model="newUser.email">
                      </div>
                      <div class="form-group">
                          <input type="tel" name="phone" class="form-control form-control-lg" placeholder="Phone" v-model="newUser.phone">
                      </div>
                      <div class="form-group">
                          <input type="text" name="country" class="form-control form-control-lg" placeholder="Country" v-model="newUser.country">
                      </div>
                      <div class="form-group">
                          <input type="text" name="state" class="form-control form-control-lg" placeholder="State" v-model="newUser.state">
                      </div>
                      <div class="form-group">
                          <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" v-model="newUser.password">
                      </div>
                      <div class="form-group">
                          <input type="text" name="bio" class="form-control form-control-lg" placeholder="About you" v-model="newUser.bio">
                      </div>
                        <div class="form-group">
                            <button class="btn btn-info btn-block btn-lg" @click="addUser();">Sign on</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script src="js/main.js"></script>
</body>
</html>