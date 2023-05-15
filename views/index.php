<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PRO301 - Guía N8</title>

  <!-- CSS -->
  <link rel="stylesheet" href="../assets/css/style.css" />

  <!-- bootstrap CDN  -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous" />
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

  <!-- SweetAlert2 CDN -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- css responsive -->
  <link rel="stylesheet" href="../assets/css/mobile.css" />

  <!-- css bg animado -->
  <link rel="stylesheet" href="../assets/css/bgAnimado.css" />

  <!-- jQuery CDN -->
  <script src=" https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body>
  <!-- Encabezado (header) -->
  <header class="bg-primary text-white text-center py-2">
    <h1>PRO301 - Guía N8</h1>
    <h5>
      <a href="https://github.com/luiguivinci/PRO301-900-Guia-N8-ajax" class="btn btn-dark">Repositorio en GitHub</a>
    </h5>
    <p class="font-weight-bolder">Luigui N. Vinci</p>
  </header>

  <!-- Contenido Principal (main) -->
  <main class="container my-5">
    <h2></h2>
    <p></p>

    <!-- Parte 1 (section) -->
    <section class="my-5 row">
      <form id="userForm" method="post" action="" class="form-control">
        <div class="mb-3">
          <label for="txtRut" class="form-label">Rut</label>
          <small><label id="labelRut" for="txtFormRut" class="d-none mb-2 d-none" style="color: red"><b>El RUT ingresado no es válido</b></label></small>
          <input type="text" name="txtRut" id="txtRut" class="form-control" value="" />
        </div>

        <div class="mb-3">
          <label for="txtNombre" class="form-label">Nombre</label>
          <input type="text" name="txtNombre" id="txtNombre" class="form-control" value="" />
        </div>

        <div class="mb-3">
          <label for="intEdad" class="form-label">Edad</label>
          <input type="number" name="intEdad" id="intEdad" class="form-control" value="" min="0" max="150" maxlength="3" step="1.0" />
        </div>

        <div class="mb-3">
          <label for="dateFNac" class="form-label">Fecha de Nacimiento</label>
          <input type="date" name="dateFNac" id="dateFNac" class="form-control" value="" />
        </div>

        <div class="mb-3">
          <label for="txtEmail" class="form-label">Email</label>
          <input type="email" name="txtEmail" id="txtEmail" class="form-control" value="" />
        </div>

        <div class="mb-3">
          <input type="button" name="btnSend" id="btnSend" value="ENVIAR" class="btn btn-primary d-none" />
        </div>
      </form>
    </section>
  </main>

  <!-- Pie de Página (footer) -->
  <footer class="bg-dark text-white text-center py-3">
    <p>
      &copy; Developed by
      <a href="https://github.com/luiguivinci" target="_blank"><b id="devTag">Luigui N. Vinci</b></a>
      All rights reserved<b id="actualYear"> | 2023</b>
    </p>
  </footer>
  <script src="../assets//js/app.js"></script>
  <script src="../assets/js/functions/formatInputRut.js"></script>
  <script src="../assets/js/functions/formatInputNombre.js"></script>
  <script src="../assets/js/functions/formatInputEdad.js"></script>
  <script src="../assets/js/functions/formatInputEmail.js"></script>
  <script src="../assets/js/functions/sendForm.js"></script>
</body>

</html>