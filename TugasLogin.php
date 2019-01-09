<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Modul 3 PHP/style.css">
    <title>Form Login</title>
</head>
<body>
    <div id="form">
    <h1>Login</h1>
    <form action="login.php" method="post" onSubmit="validasi()">
    <p>
    <label for="username" id="username"> <b> Username : </b></label> <br> <br>
    <input type="text" name="username" id="user">
    </p>
    <p>
    <label for="password" id="pass"> <b> Password : </b> </label> <br> <br>
    <input type="password" name="password" id="password">
    </p>
    <p>
    <input type="submit" value="Simpan" name="btnsimpan" id="simpan">
    </p>
    </form>
    </div>
</body>
<script>
    function validasi() {
        var nama = document.getElementById('user').value
        var pass = document.getElementById('password').value

        if(nama == "lyra" && pass == "hehehe"){
            return true;
        }else{
            alert('Login Anda Gagal');
        }
    }

</script>
</html>