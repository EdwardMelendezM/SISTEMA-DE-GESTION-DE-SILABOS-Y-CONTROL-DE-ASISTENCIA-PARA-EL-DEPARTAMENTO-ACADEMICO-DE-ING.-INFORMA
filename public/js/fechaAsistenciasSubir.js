const d = document;

const hora = new Date().toLocaleTimeString();
const dia = new Date().toLocaleDateString();
const horaFecha = d.getElementById("horaFecha");
const horario = d.getElementById("horario").innerHTML;
const horarioActual = new Date().getHours();
const horarioPos = d.getElementById("horario");
const fechaAsistenciaPos = d.getElementById("fecha");
if (horarioActual > 12) {
    horarioPos.innerHTML = `Tarde`;
}
else {
    horarioPos.innerHTML = `Mañana`;
}
horaFecha.innerHTML = `<b>${hora}</b> ${dia}`;

fechaAsistenciaPos.innerHTML = `<b>${dia}</b>
${hora}`;
setInterval(() => {
    const hora = new Date().toLocaleTimeString();
    const dia = new Date().toLocaleDateString();
    horaFecha.innerHTML = `<b>${hora}</b> ${dia}`;

    fechaAsistenciaPos.innerHTML = `<b>${dia}</b>
${hora}`;
}, 1000);


const guardarAsistenciaAlumnos = d.getElementById("guardarAsistenciaAlumnos");
guardarAsistenciaAlumnos.addEventListener("click", (e) => {
    window.location.href = "./";
})



