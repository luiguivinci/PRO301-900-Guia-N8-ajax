/**
Función que recibe un RUT completo y valida su dígito verificador.
@param {string} rutCompleto - El RUT completo que se desea validar.
@returns {boolean} Retorna true si el dígito verificador es válido y false en caso contrario.
@example
validarDigitoVerificador('12.345.678-5'); // true
validarDigitoVerificador('12.345.678-k'); // true
validarDigitoVerificador('12.345.678-9'); // false
*/

const validarDigitoVerificador = (rutCompleto) => {
  if (rutCompleto.length !== 12) return false;
  let rutSinDV = rutCompleto.slice(0, -2).replace(/\D/g, "");
  let dv = rutCompleto.slice(-1).toUpperCase();
  let m = 0,
    s = 1;
  for (; rutSinDV; rutSinDV = Math.floor(rutSinDV / 10)) {
    s = (s + (rutSinDV % 10) * (9 - (m++ % 6))) % 11;
  }
  return dv === (s ? s - 1 + "" : "K");
};

/**
Función que recibe un elemento input y formatea su valor como un RUT válido.
@param {HTMLInputElement} elementoHTML - El elemento input que se desea formatear.
@returns {boolean} Retorna true si el RUT es válido y false en caso contrario.
@example
// HTML:
// <input type="text" id="rut-input">
const inputRut = document.getElementById('rut-input');
formatInputRut(inputRut); // true o false
*/
const formatInputRut = (elementoHTML) => {
  // Obtener el valor actual del input
  let rut = elementoHTML.value;

  // Eliminar todos los caracteres que no sean números ni la letra "k"
  rut = rut.replace(/[^0-9kK]/g, "");

  // Separar el RUT en su parte numérica y su dígito verificador
  let rutNumerico = rut.slice(0, -1);
  let digitoVerificador = rut.slice(-1);

  // Agregar puntos y guión al número del RUT
  rutNumerico = rutNumerico.replace(/\B(?=(\d{3})+(?!\d))/g, ".");

  // Reunir el número del RUT formateado y el dígito verificador
  rut = rutNumerico + "-" + digitoVerificador.toUpperCase();

  // Verificar que el rut sea válido
  let esValido = validarDigitoVerificador(rut);

  // Actualizar el valor del input con el RUT formateado
  elementoHTML.value = rut;

  // Retornar si el rut es válido o no
  return esValido;
};
