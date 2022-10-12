<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registro de cliente</title>
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
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- 
        pattern: "[a-zA-Z0-9]{3,}" -> solo letras y numeros de 3 o mas digitos
        pattern: "[a-zA-Z0-9]{3,5}" -> solo letras y numeros de 3 a 5 digitos
        - ACTION es la url a la que se envian los datos ej: .php .html .js ect.
    -->
    <div class="container py-2">

      <h1 class="my-3">Formulario de registro</h1>

      <form action="insertarUsuario.php" method="POST">
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input
            type="text"
            class="form-control"
            id="nombre"
            name="nombre"
            placeholder="Nombre"
            required
          />
        </div>
        <div class="mb-3">
          <label for="apellido" class="form-label">Apellido</label>
          <input
            type="text"
            class="form-control"
            id="apellido"
            name="apellido"
            placeholder="Apellido"
            required
          />
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input
            type="email"
            class="form-control"
            id="email"
            name="email"
            placeholder="Email"
            required
          />
        </div>
        <div class="mb-3">
          <label for="fecha" class="form-label">Fecha de nacimiento</label>
          <input
            type="date"
            class="form-control"
            id="fecha"
            name="fecha"
            placeholder="Fecha de nacimiento"
            required
          />
        </div>
        <div class="mb-3">
          <label for="telefono" class="form-label">Telefono</label>
          <input
            type="tel"
            class="form-control"
            id="telefono"
            name="telefono"
            placeholder="Telefono"
            required
          />
        </div>
        <div class="mb-3">
          <label for="genero" class="form-label">Genero</label>
          <select class="form-select" aria-label="Default select example" name="genero" id="genero">
            <option selected>Selecciona un genero</option>
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
            <option value="Otro">Otro</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="clave" class="form-label">Contraseña</label>
          <input
            type="password"
            class="form-control"
            id="clave" class  = "form-control" placeholder="Contraseña" name="clave" required
          />
        </div>
        <div class="mb-3">
          <label for="clave_r" class="form-label">Repetir contraseña</label>
          <input
            type="password"
            class="form-control"
            id="clave_r" class  = "form-control" placeholder="Repetir contraseña" name="clave_r" required
          />
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
      </form>
    </div>
      <!-- <form action="insertarUsuario.php" method="post" autocomplete="true">
        <fieldset>
          <legend>Datos Personales</legend>
          <label class="form-label" for="nombre">Nombre: </label>
          <input
            type="text"
            name="nombre"
            id="nombre"
            placeholder="ingrese su nombre"
            required
          />
          <br />
          <br />
          <label class="form-label" for="apellido">Apellidos: </label>
          <input
            type="text"
            name="apellido"
            id="apellido"
            placeholder="ingrese su apellido"
            required
          />
          <br />
          <br />
          <label class="form-label" for="email">Email: </label>
          <input
            type="email"
            name="email"
            id="email"
            placeholder="ingrese su email"
            required
          />

          <br />
          <br />
          <label class="form-label" for="fecha" required>Fecha de nacimiento: </label>
          <input type="date" name="fecha" id="fecha" />
          <br />
          <br />
          <label class="form-label" for="telefono" required>Telefono: </label>
          <input type="tel" name="telefono" id="telefono" />
          <br /><br />
          <label class="form-label" for="genero" required>Genero: </label>

          <select name="genero" id="genero">
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
          </select>
          <br />
          <br />
          <label class="form-label" for="password">Password: </label>
          <input
            type="password"
            name="clave"
            id="clave"
            placeholder="ingrese su password"
            required
          />
          <br />
          <br />
          <label class="form-label" for="password_r">Repeat Password</label>
          <input
            type="password"
            name="clave_r"
            id="claves_r"
            placeholder="Repeat su password"
            required
          />
          <br /><br />
          <input class="btn btn-primary btn-block mb-4" type="submit" name="submit" id="submit" value="Enviar" />
          <input class="btn btn-primary btn-block mb-4" type="reset" name="reset" id="reset" value="Restablecer" />
        </fieldset>
      </form> -->
  </body>
</html>
