const cargarTipos = async()=>{
    let tipos = await getTipos();

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

document.querySelector("#regsem-btn").addEventListener("click", async()=>{
    let nombre = document.querySelector("#nombresem-txt").value.trim();
    let tipo = document.querySelector("#tipo-select").value.trim();
    let thc = document.querySelector("#thc-num").value;
    let cbd = document.querySelector("#cbd-num").value;
    let precio = document.querySelector("#preciosem-num").value;


    let semilla = {};
    semilla.nombre = nombre;
    semilla.tipo = tipo;
    semilla.thc = thc;
    semilla.cbd = cbd;
    semilla.precio = precio;
    
    
    let res = await crearSemilla(semilla);
    
    await swal.fire("Semilla ingresado", "Semilla ingresado con exito.", "info")
    window.location.href = "ver_semilla";

});