<!-- Incluir el archivo de encabezado -->
<?php include('../layaouts/header.php'); ?>



    <!-- Contenido de tu página -->
    <div class="primary">

        <h1 class="tittle">Certificado de Funciones</h1><br>

          <form action="../fuction/funciones.php" method="POST">
            <input type="number" name="dni" id="dni"  placeholder="Ingrese su Cedula" class="input-text"><br><br><br>
            <button class="btn btn-primary">Buscar</button>
          </form>
     
    </div>


<!-- Incluir el archivo del pie de página -->
<?php include('../layaouts/footer.php'); ?>

