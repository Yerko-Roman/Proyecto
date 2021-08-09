const actualizar = async function(){
    let idSemilla = this.idSemilla;
    let semilla = await obtenerPorId(idSemilla);
    let molde = this.parentNode.parentNode;
    semilla.nombre = molde.querySelector(".nombresem-txt").value.trim();
    semilla.tipo = molde.querySelector(".tipo-select").value.trim();
    semilla.thc = molde.querySelector(".thc-num").value;
    semilla.cbd = molde.querySelector(".cbd-num").value;
    semilla.precio = molde.querySelector(".preciosem-num").value;
    await actualizarSemilla(semilla);
    await Swal.close();
    let filtro = document.querySelector("#filtro-semilla").value;
    let semillas = await getSemillas(filtro);
    cargartabla(semillas);
};

const iniciarActualizacion = async function(){
    let idSemilla = this.idSemilla;
    let semilla = await obtenerPorId(idSemilla);
    
    let tipo = await getTipos();
    let filtrocbx = document.querySelector(".tipo-select");
    tipo.forEach(m=>{
        let option = document.createElement("option");
        option.innerText = m;
        option.value = m;
        filtrocbx.appendChild(option);
    });
  
    let molde = document.querySelector(".molde-actualizar-sem").cloneNode(true);

    molde.querySelector(".nombresem-txt").value = semilla.nombre;
    molde.querySelector(".thc-num").value = semilla.thc;
    molde.querySelector(".cbd-num").value = semilla.cbd;
    molde.querySelector(".preciosem-num").value = semilla.precio;
    molde.querySelector(".actualizar-btn").idSemilla = idSemilla;
    molde.querySelector(".actualizar-btn").addEventListener("click", actualizar);
    await Swal.fire({
        title:"Actualizar",
        html: molde,
        confirmButtonText: "Cerrar"
    });

    filtrocbx.innerHTML = "";
  
};

const cargarTipo= async ()=>{
    
    let filtrocbx = document.querySelector("#filtro-semilla");
    let tipo = await getTipos();
    tipo.forEach(m=>{
        let option = document.createElement("option");
        option.innerText = m;
        option.value = m;
        filtrocbx.appendChild(option);
    });
};

const iniciareliminacion = async function(){
    let id = this.idSemilla;
    let resp = await Swal.fire({title:"Esta seguro?", text:"Esta operacion es irrevercible."
        , icon:"error", showCancelButton:true});
    if(resp.isConfirmed){
        if(await eliminarSemillas(id)){
            let semilla = await getSemillas();
            cargartabla(semilla);
            Swal.fire("Semilla triturada", "semilla aniquilada exitosamente", "info");
        }else{
            Swal.fire("Error", "No se pudo atender la solicitud", "error")
        }
    }else{
        Swal.fire("Cancelado", "Cancelado a peticion del ususario", "info")
    }
}

const cargartabla = (semilla)=>{
    let tbody = document.querySelector("#tbody-semilla");
    tbody.innerHTML = "";
    for(let i = 0; i < semilla.length; ++i){
        let tr = document.createElement("tr");
        
        let tdnombre = document.createElement("td");
        tdnombre.innerText = semilla[i].nombre;
        let tdtipo = document.createElement("td");
        tdtipo.innerText = semilla[i].tipo;
        let tdthc = document.createElement("td");
        tdthc.innerText = semilla[i].thc  + "%";
        let tdcbd = document.createElement("td");
        tdcbd.innerText = semilla[i].cbd  + "%";
        let tdprecio = document.createElement("td");
        tdprecio.innerText = "$" + semilla[i].precio;
        
        
        let tdaccion1 = document.createElement("td");
        let botonEliminar = document.createElement("button");
        botonEliminar.innerText = "Eliminar";
        botonEliminar.classList.add("btn","btn-danger");
        botonEliminar.idSemilla = semilla[i].id;
        botonEliminar.addEventListener("click", iniciareliminacion);
        tdaccion1.appendChild(botonEliminar);

        let tdaccion2 = document.createElement("td");
        let botonActualizar = document.createElement("button");
        botonActualizar.innerText = "Actualizar";
        botonActualizar.classList.add("btn","btn-warning");
        botonActualizar.idSemilla = semilla[i].id;
        botonActualizar.addEventListener("click", iniciarActualizacion);
        tdaccion2.appendChild(botonActualizar);

        tr.appendChild(tdnombre);
        tr.appendChild(tdtipo);
        tr.appendChild(tdthc);
        tr.appendChild(tdcbd);
        tr.appendChild(tdprecio);
        tr.appendChild(tdaccion1);
        tr.appendChild(tdaccion2);

        tbody.appendChild(tr)

    }
};

document.querySelector("#filtro-semilla").addEventListener("change", async ()=>{
    let filtro = document.querySelector("#filtro-semilla").value;
    let semilla = await getSemillas(filtro);
    cargartabla(semilla);    
});

document.addEventListener("DOMContentLoaded", async()=>{
    await cargarTipo();
    let semilla =  await getSemillas();
    cargartabla(semilla);
});