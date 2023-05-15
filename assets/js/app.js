const userForm = document.getElementById("userForm");

const txtRut = document.getElementById("txtRut");
const txtNombre = document.getElementById("txtNombre");
const intEdad = document.getElementById("intEdad");
const dateFNac = document.getElementById("dateFNac");
const txtEmail = document.getElementById("txtEmail");

const btnSend = document.getElementById("btnSend");

// Declaración de variables que contienen el booleano de rut válido
let rutValido;

//
// Declaración de variables auxiliares
let yearNacimiento;
let dataFormulario = new Array();

/* LOGICA DE LA APP */

document.addEventListener("DOMContentLoaded", () => {
  // validador rut
  txtRut.addEventListener("input", () => {
    rutValido = formatInputRut(txtRut);
    if (!formatInputRut(txtRut)) {
      labelRut.classList.remove("d-none");
      txtRut.removeAttribute("disabled");
    } else {
      labelRut.classList.add("d-none");
    }
  });

  // validar nombres
  txtNombre.addEventListener("input", () => {
    formatInputNombre(txtNombre);
  });

  // validador edad
  intEdad.addEventListener("input", () => {
    yearNacimiento = formatInputEdad(intEdad)[1];
    dateFNac.value = `${yearNacimiento}-01-01`;
  });

  // validador fecha de nacimiento
  dateFNac.addEventListener("input", () => {
    let fechaNac = dateFNac.value.slice(4);
    dateFNac.value =
      dateFNac.value === ""
        ? `${yearNacimiento}${"-01-01"}`
        : `${yearNacimiento}${fechaNac}`;
  });

  // validador email
  txtEmail.addEventListener("change", () => {
    txtEmail.value = formatInputEmail(txtEmail);
  });

  document.addEventListener("input", () => {
    if (
      txtRut.value !== "" &&
      rutValido != false &&
      txtNombre.value !== "" &&
      intEdad.value !== "" &&
      dateFNac.value !== "" &&
      txtEmail.value !== "" &&
      txtEmail.value.includes("@") &&
      txtEmail.value.includes(".")
    ) {
      btnSend.classList.remove("d-none");
    } else {
      btnSend.classList.add("d-none");
    }
  });

  btnSend.addEventListener("click", (e) => {
    e.preventDefault;

    const respuesta = sendFormAjax();
    if (respuesta !== false) {
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
  });
});
