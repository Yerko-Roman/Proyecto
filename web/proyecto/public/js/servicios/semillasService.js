const getSemillas = async (filtro ="todos")=>{
    let resp;
    if(filtro == "todos"){
        resp = await axios.get("api/semilla/get");
    }else{
        resp = await axios.get(`api/semilla/filtrar?filtro=${filtro}`);
    }
    return resp.data;
};

const crearSemilla = async(semilla)=>{
    let resp = await axios.post("api/semilla/post",semilla, {
        headers: {
            'content-type': 'aplication/json'
        }
    });
    return resp.data;
};

const eliminarSemillas = async(id)=>{
    try{
        let resp = await axios.post("api/semilla/delete", {id},{
            headers:{
                "Content-type": "application/json"
            }
        });
        return resp.data == "ok";
    }catch(e){
        return false;
    }
};

const obtenerPorId = async (id)=>{
    let resp = await axios.get(`api/semilla/findById?id=${id}`);
    return resp.data;
}

const actualizarSemilla = async(semilla)=>{
    try{
        let resp = await axios.post("api/semilla/actualizar", semilla, {
            headers:{
                "Content-Type": "application/json"
            }
        });
        return resp.data;
    }catch(e){
        return false;
    }
    
}
