<body class="text-center">
    <main class="form-signin w-100 m-auto">
        <form action="./add_user.php" method="POST">
            <h2>Xác thực quyền quản trị</h2>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="admin">
                <label for="floatingInput">nhập "admin"</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        </form>
    </main>
</body>