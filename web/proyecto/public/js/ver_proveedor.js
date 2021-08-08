const iniciareliminacion = async function(){
    let id = this.idProveedor;
    let resp = await Swal.fire({title:"Esta seguro?", text:"Esta operacion es irrevercible."
        , icon:"error", showCancelButton:true});
    if(resp.isConfirmed){
        if(await eliminarProveedor(id)){
            let proveedor = await getProveedores();
            cargartabla(proveedor);
            Swal.fire("Proveedor eliminado", "Proveedor eliminado exitosamente", "info");
        }else{
            Swal.fire("Error", "No se pudo atender la solicitud", "error")
        }
    }else{
        Swal.fire("Cancelado", "Cancelado a peticion del ususario", "info")
    }
}

const cargartabla = (proveedor)=>{
    let tbody = document.querySelector("#tbody-proveedor");
    tbody.innerHTML = "";
    for(let i = 0; i < proveedor.length; ++i){
        let tr = document.createElement("tr");

        let tdnombre = document.createElement("td");
        tdnombre.innerText = proveedor[i].nombre;
        let tdrut = document.createElement("td");
        tdrut.innerText = proveedor[i].rut;
        let tdcorreo = document.createElement("td");
        tdcorreo.innerText = proveedor[i].correo;
        let tdtelefono = document.createElement("td");
        tdtelefono.innerText = proveedor[i].telefono;
        
        let tdaccion1 = document.createElement("td");
        let botonEliminar = document.createElement("button");
        botonEliminar.innerText = "Eliminar";
        botonEliminar.classList.add("btn","btn-danger");
        botonEliminar.idProveedor = proveedor[i].id;
        botonEliminar.addEventListener("click", iniciareliminacion);
        tdaccion1.appendChild(botonEliminar);

        let tdaccion2 = document.createElement("td");
        let botonActualizar = document.createElement("button");
        botonActualizar.innerText = "Actualizar";
        botonActualizar.classList.add("btn","btn-warning");

        tdaccion2.appendChild(botonActualizar);

        tr.appendChild(tdnombre);
        tr.appendChild(tdrut);
        tr.appendChild(tdcorreo);
        tr.appendChild(tdtelefono);
        tr.appendChild(tdaccion1);
        tr.appendChild(tdaccion2);

        tbody.appendChild(tr)

    }
};

document.addEventListener("DOMContentLoaded", async()=>{
    let proveedor =  await getProveedores();
    cargartabla(proveedor);
});