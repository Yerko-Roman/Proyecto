const getLocales = async (filtro ="todos")=>{
    let resp;
    if(filtro == "todos"){
        resp = await axios.get("api/local/get");
    }else{
        resp = await axios.get(`api/local/filtrar?filtro=${filtro}`);
    }
    return resp.data;

};

const crearLocales = async(local)=>{
    let resp = await axios.post("api/local/post",local, {
        headers: {
            'content-type': 'aplication/json'
        }
    });
    return resp.data;
};

const eliminarLocal = async(id)=>{
    try{
        let resp = await axios.post("api/local/delete", {id},{
            headers:{
                "Content-type": "application/json"
            }
        });
        return resp.data == "ok";
    }catch(e){
        return false;
    }
};