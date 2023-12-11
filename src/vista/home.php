<?php
    use App\Pagos\controlador\operaciones;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Payrol</title>
</head>

<body>
    <h1 class="container">Payrol</h1>
    <h3 class="container">Calculadora de sueldos</h3>

    <div class="container mb-5">
        <div class="row">
            <form method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombres completos</label>
                    <input type="text" class="form-control" name="nombres" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Sueldo</label>
                    <input type="number" class="form-control" name="sueldo" required>
                </div>
                <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Valor de ventas</label>
                    <input type="number" class="form-control" name="ventas" required>
                </div>
                <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Porcentaje de aporte al IESS</label>
                    <input type="number" class="form-control" name="porcentaje" step="any" required>
                </div>
                <button type="submit" class="btn btn-primary">Calcular</button>
            </form>

            <div class="container">
                <?php
                    $imprimir = operaciones::operarComision();

                    echo $imprimir;
                ?>
            </div>
        </div>
    </div>

</body>

</html>