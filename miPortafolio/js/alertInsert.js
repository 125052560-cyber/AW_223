
const parametros =new URLSearchParams(window.location.search);
const estado=parametros.get("estadophp")

if(estado==="exitoso"){
    alert("Exito,tu mensaje fue guardado");
}else if(estado==="error"){
    alert ("algo fallo,intentalo de nuevo");
}
if(estado !=null){
    window.history.replaceState({},document.title,window.location.pathname);
}