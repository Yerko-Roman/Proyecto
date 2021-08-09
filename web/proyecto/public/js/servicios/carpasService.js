const getCarpas = async ()=>{
    let resp = await axios.get("api/carpa/get");
    return resp.data;
};

const crearCarpas = async(carpa)=>{
    let resp = await axios.post("api/carpa/post",carpa, {
        headers: {
            'content-type': 'aplication/json'
        }
    });
    return resp.data;
};

const eliminarCarpa = async(id)=>{
    try{
        let resp = await axios.post("api/carpa/delete", {id},{
            headers:{
                "Content-type": "application/json"
            }
        });
        return resp.data == "ok";
    }catch(e){
        return false;
    }
};

const actualizarCarpa = async(carpa)=>{
    try{
        let resp = await axios.post("api/carpa/actualizar", carpa, {
            headers:{
                "Content-Type": "application/json"
            }
        });
        return resp.data;
    }catch(e){
        return false;
    }
    
}

const obtenerPorId = async (id)=>{
    let resp = await axios.get(`api/carpa/findById?id=${id}`);
    return resp.data;
}