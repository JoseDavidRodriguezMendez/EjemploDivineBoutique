function guardarDatos() {
    // Obtener el usuario o datos ingresados por el usuario
    var dato = document.getElementById("inputData").value;
    
    // Guardar el dato en el almacenamiento local del navegador de los datos ingresados
    localStorage.setItem("datoGuardado", dato);
    
    // Redirigir a la página que muestra los datos
    window.location.href = "index.php";
  }
  