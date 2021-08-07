
document.querySelector("#regprov-btn").addEventListener("click", async()=>{
    let nombre = document.querySelector("#nomemp-txt").value.trim();
    let rut = document.querySelector("#rut-txt").value.trim();
    let correo = document.querySelector("#prov-email").value.trim();
    let telefono = document.querySelector("#prov-tel").value;
    
    let proveedor = {};

    proveedor.nombre = nombre;
    proveedor.rut = rut;
    proveedor.correo = correo;
    proveedor.telefono = telefono;
    
    let res = await crearProveedor(proveedor);

    await swal.fire("Proveedor annadido", "Proveedor annadido con exito.", "info")
    window.location.href = "ver_proveedor";
});