const cargarRegiones= async ()=>{
    let filtrocbx = document.querySelector("#filtro-local");
    let regiones = await getRegiones();
    regiones.forEach(m=>{
        let option = document.createElement("option");
        option.innerText = m;
        option.value = m;
        filtrocbx.appendChild(option);
    });
};

const iniciareliminacion = async function(){
    let id = this.idLocal;
    let resp = await Swal.fire({title:"Esta seguro?", text:"Esta operacion es irrevercible."
        , icon:"error", showCancelButton:true});
    if(resp.isConfirmed){
        if(await eliminarLocal(id)){
            let local = await getLocales();
            cargartabla(local);
            Swal.fire("Local demolido", "local destruido exitosamente", "info");
        }else{
            Swal.fire("Error", "No se pudo atender la solicitud", "error")
        }
    }else{
        Swal.fire("Cancelado", "Cancelado a peticion del usuario", "info")
    }
}

const cargartabla = (local)=>{
    let tbody = document.querySelector("#tbody-local");
    tbody.innerHTML = "";
    for(let i = 0; i < local.length; ++i){
        let tr = document.createElement("tr");

        let tdregion = document.createElement("td");
        tdregion.innerText = local[i].region;
        let tdciudad = document.createElement("td");
        tdciudad.innerText = local[i].ciudad;
        let tdcalle = document.createElement("td");
        tdcalle.innerText = local[i].calle;
        let tdlocal = document.createElement("td");
        tdlocal.innerText = local[i].local;
        let tdtelefono = document.createElement("td");
        tdtelefono.innerText = local[i].telefono;
        
        let tdaccion1 = document.createElement("td");
        let botonEliminar = document.createElement("button");
        botonEliminar.innerText = "Eliminar";
        botonEliminar.classList.add("btn","btn-danger");
        botonEliminar.idLocal = local[i].id;
        botonEliminar.addEventListener("click", iniciareliminacion);
        tdaccion1.appendChild(botonEliminar);

        let tdaccion2 = document.createElement("td");
        let botonActualizar = document.createElement("button");
        botonActualizar.innerText = "Actualizar";
        botonActualizar.classList.add("btn","btn-warning");

        tdaccion2.appendChild(botonActualizar);

        tr.appendChild(tdregion);
        tr.appendChild(tdciudad);
        tr.appendChild(tdcalle);
        tr.appendChild(tdlocal);
        tr.appendChild(tdtelefono);
        tr.appendChild(tdaccion1);
        tr.appendChild(tdaccion2);

        tbody.appendChild(tr)

    }
};

document.querySelector("#filtro-local").addEventListener("change", async ()=>{
    let filtro = document.querySelector("#filtro-local").value;
    let local = await getLocales(filtro);
    cargartabla(local);    
});

document.addEventListener("DOMContentLoaded", async()=>{
    await cargarRegiones();
    let local =  await getLocales();
    cargartabla(local);
});