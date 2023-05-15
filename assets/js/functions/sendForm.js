const sendFormAjax = async () => {
  const info = $("form").serialize();
  console.log(info);

  $.ajax({
    type: "POST",
    url: "../assets/php/dbAccess.php",
    data: info,
    dataType: "json",
    success: function (result) {
      console.log("Datos enviados");
      console.log(result);
      let datos = JSON.parse(result); // Decodifica los datos JSON en un objeto de JavaScript
      console.log(datos); // Imprime los datos decodificados
      return true;
    },
    error: function (xhr, status, error) {
      return false;
    },
  });
};
