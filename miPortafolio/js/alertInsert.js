const parametros = new URLSearchParams(window.location.search);
const estado = parametros.get("estado");

if (estado === "exitoGuardar") {
  alert("Exito, tu mensaje fue guardado");
} else if (estado === "errorGuardar") {
  alert("Error, tu mensaje no se guardo correctamente");
} else if (estado === "exitoActualizar") {
  alert("Exito, tu mensaje fue actualizado");
} else if (estado === "errorActualizar") {
  alert("Error, tu mensaje no se actualizo correctamente");
} else if (estado === "exitoBorrar") {
  alert("Exito, tu mensaje fue eliminado");
} else if (estado === "errorBorrar") {
  alert("Error, tu mensaje no se elimino correctamente");
}

if (estado === "exitoActualizar" || estado === "errorActualizar") {
  window.history.replaceState({}, document.title, window.location.pathname);
}
