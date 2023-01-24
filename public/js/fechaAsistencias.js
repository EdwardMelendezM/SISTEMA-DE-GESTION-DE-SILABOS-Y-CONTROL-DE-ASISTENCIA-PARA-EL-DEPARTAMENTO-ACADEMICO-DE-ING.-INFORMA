const d = document;

const fechaAsistencia = d.querySelectorAll("#fechaAsistencia");

console.log(fechaAsistencia);
listaFechas = [];
fechaAsistencia.forEach(element => {
    fechaElem = element.innerHTML
    const fecha = parseInt(fechaElem);
    const hora = new Date(fecha).toLocaleTimeString();
    const dia = new Date(fecha).toLocaleDateString();
    element.innerHTML = `<b>${dia}</b>${hora}`;

});
console.log(listaFechas)
