<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesion</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.4/js/all.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Roboto:ital,wght@0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body>

    <div><img src="./assets/logo_sicadmi.png" alt=""></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="border border-2 bg-white shadow p-3 mb-5 bg-body rounded" >
                <form class="px-3 m-3" method="post" autocomplete="off">
                        <div class="text-center ">
                            <img style="height: 150px; width: 150px; " src="./img/login.jpg" alt="">
                        </div>
                        <div class=" text-center">
                        
                        <h5>Iniciar Sesion</h5><br>
                        </div>     
                        <div class="mb-3">            
                            <input type="text" class="form-control" name="usuario" placeholder="Usuario">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" name="password" placeholder="password">
                        </div><br>

                        <div class="text-center">
                            <button class="btn btn-primary" type="submit">Iniciar Sesion</button>
                        </div><br>
                        
                            <?php
                            if($_POST){
                                include './php/login.php';
                            }
                            ?>
                        
                    </form>
                </div>

            </div>
        </div>
    </div>
</body>

</html>