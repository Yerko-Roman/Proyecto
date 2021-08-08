const cargarRegiones = async()=>{
    let regiones = await getRegiones();

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

document.querySelector("#reglocal-btn").addEventListener("click", async()=>{
    let region = document.querySelector("#region-select").value.trim();
    let calle = document.querySelector("#calle-txt").value.trim();
    let ciudad = document.querySelector("#ciudad-txt").value.trim();
    let numlocal = document.querySelector("#local-num").value;
    let telefono = document.querySelector("#local-tel").value;


    let local = {};
    local.region = region;
    local.calle = calle;
    local.ciudad = ciudad;
    local.local = numlocal;
    local.telefono = telefono;
    
    
    let res = await crearLocales(local);
    
    await swal.fire("Local ingresado", "Local ingresado con exito.", "info")
    window.location.href = "ver_local";

});