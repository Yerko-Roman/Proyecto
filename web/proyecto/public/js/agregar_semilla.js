const cargarTipos = async()=>{
    let resultado = await axios.get("api/tipo/get");
    let tipos = resultado.data;

    let tiposelect = document.querySelector("#tipo-select");
    tipos.forEach(m=> {
        let option = document.createElement("option");
        option.innerText = m;
        tiposelect.appendChild(option);
    });
};

document.addEventListener("DOMContentLoaded", ()=>{
    cargarTipos();
});