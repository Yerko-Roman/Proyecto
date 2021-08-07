const getLocales = async ()=>{
    let resp = await axios.get("api/local/get");
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