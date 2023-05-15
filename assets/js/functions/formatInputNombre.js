const formatInputNombre = (inputHtml, longitudMaxima = 50) => {
  return (inputHtml.value = inputHtml.value
    .replace(/[^a-zA-ZáéíóúÁÉÍÓÚñÑüÜ\s]/g, "")
    .slice(0, longitudMaxima)
    .toUpperCase());
};
