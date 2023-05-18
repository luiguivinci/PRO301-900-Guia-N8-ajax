const formSendedPopUp = (status = false) => {
  if (status !== false) {
    Swal.fire({
      title: "Formulario enviado!",
      text: "",
      icon: "success",
      confirmButtonText: "ACEPTAR",
    }).then((result) => {
      if (result.isConfirmed) {
        userForm.reset();
        btnSend.classList.add("d-none");
      }
    });
  } else {
    Swal.fire({
      title: "Error al enviar formulario!",
      text: "",
      icon: "error",
      confirmButtonText: "ACEPTAR",
    }).then((result) => {
      if (result.isConfirmed) {
        userForm.reset();
        btnSend.classList.add("d-none");
      }
    });
  }
};
