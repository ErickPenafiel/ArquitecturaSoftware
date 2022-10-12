<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registro de cliente</title>
     <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
      <!--
      bootstrap
      --
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- 
        pattern: "[a-zA-Z0-9]{3,}" -> solo letras y numeros de 3 o mas digitos
        pattern: "[a-zA-Z0-9]{3,5}" -> solo letras y numeros de 3 a 5 digitos
        - ACTION es la url a la que se envian los datos ej: .php .html .js ect.
    -->
    <div class="container py-5">
      <h1>Iniciar sesion</h1>
      <br />
      
      <form action="verificar.php" method="POST">
        <!-- ! USUARIO -->
        <div class="form-outline mb-4 mt-3">
          <label class="form-label" for="nombre">Usuario:</label>
          <input type="text" id="nombre"  name="nombre" class="form-control" required/>
        </div>

        <!-- ! CONTRASEÑA -->
        <div class="form-outline mb-4">
          <label class="form-label" for="clave">Contraseña: </label>
          <input type="password" id="clave" name="clave" class="form-control" required/>
        </div>
        

        <!-- 2 column grid layout for inline styling -->
        <div class="row mb-4">
          <div class="col d-flex justify-content-center">
            <!-- Checkbox -->
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="recordar"
                checked
              />
              <label class="form-check-label" for="recordar">
                Recordar
              </label>
            </div>
          </div>

          <div class="col">
            <!-- Simple link -->
            <a href="#!">Olvido la contraseña?</a>
          </div>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">
          Iniciar sesion
        </button>

        <!-- Register buttons -->
        <div class="text-center">
          <p>No eres miembro? <a href="formulario.php">Registrese</a></p>
          <p>Registrate con:</p>
          <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-facebook-f"></i>
          </button>

          <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-google"></i>
          </button>

          <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-twitter"></i>
          </button>

          <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-github"></i>
          </button>
        </div>
      </form>
    </div>
  </body>
</html>
