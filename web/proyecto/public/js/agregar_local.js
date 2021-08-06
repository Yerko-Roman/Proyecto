const cargarRegiones = async()=>{
    let resultado = await axios.get("api/regiones/get");
    let regiones = resultado.data;

    let regioneselect = document.querySelector("#region-select");
    regiones.forEach(m=> {
        let option = document.createElement("option");
        option.innerText = m;
        regioneselect.appendChild(option);
    });
};

document.addEventListener("DOMContentLoaded", ()=>{
    cargarRegiones();
});