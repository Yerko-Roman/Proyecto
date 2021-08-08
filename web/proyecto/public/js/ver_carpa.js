const iniciareliminacion = async function(){
    let id = this.idCarpa;
    let resp = await Swal.fire({title:"Esta seguro?", text:"Esta operacion es irrevercible."
        , icon:"error", showCancelButton:true});
    if(resp.isConfirmed){
        if(await eliminarCarpa(id)){
            let carpa = await getCarpas();
            cargartabla(carpa);
            Swal.fire("Carpa eliminada", "carpa eliminada exitosamente", "info");
        }else{
            Swal.fire("Error", "No se pudo atender la solicitud", "error")
        }
    }else{
        Swal.fire("Cancelado", "Cancelado a peticion del ususario", "info")
    }
}

const cargartabla = (carpa)=>{
    let tbody = document.querySelector("#tbody-carpa");
    tbody.innerHTML = "";
    for(let i = 0; i < carpa.length; ++i){
        let tr = document.createElement("tr");
        
        let tdmarca = document.createElement("td");
        tdmarca.innerText = carpa[i].marca;
        let tdtela = document.createElement("td");
        tdtela.innerText = carpa[i].tela;
        let tdcantidad = document.createElement("td");
        tdcantidad.innerText = carpa[i].cantidad;

        let tdmedidas = document.createElement("td");
        tdmedidas.innerText = carpa[i].largo + "x" + carpa[i].alto + "x" + carpa[i].ancho;

        let tdbandeja = document.createElement("td");
        if(carpa[i].bandeja == 0){
            tdbandeja.innerText = "NO";
        }else{
            tdbandeja.innerText = "SI";
        }

        let tdprecio = document.createElement("td");
        tdprecio.innerText = carpa[i].precio;

        let tdaccion1 = document.createElement("td");
        let botonEliminar = document.createElement("button");
        botonEliminar.innerText = "Eliminar";
        botonEliminar.classList.add("btn","btn-danger");
        botonEliminar.idCarpa = carpa[i].id;
        botonEliminar.addEventListener("click", iniciareliminacion);
        tdaccion1.appendChild(botonEliminar);

        let tdaccion2 = document.createElement("td");
        let botonActualizar = document.createElement("button");
        botonActualizar.innerText = "Actualizar";
        botonActualizar.classList.add("btn","btn-warning");

        tdaccion2.appendChild(botonActualizar);

        tr.appendChild(tdmarca);
        tr.appendChild(tdtela);
        tr.appendChild(tdcantidad);
        tr.appendChild(tdmedidas);
        tr.appendChild(tdbandeja);
        tr.appendChild(tdprecio);
        tr.appendChild(tdaccion1);
        tr.appendChild(tdaccion2);
        
        tbody.appendChild(tr)

    }
};


document.addEventListener("DOMContentLoaded", async()=>{
    let carpa =  await getCarpas();
    cargartabla(carpa);
});