const getProveedores = async ()=>{
    let resp = await axios.get("api/proveedor/get"); 
    return resp.data;
}

const crearProveedor = async(proveedor)=>{
    let resp = await axios.post("api/proveedor/post", proveedor, {
        headers: {
            'Content-Type': 'application/json'
        }
    });
    return resp.data;
}

const eliminarProveedor = async(id)=>{
    try{
        let resp = await axios.post("api/proveedor/delete", {id}, {
            headers:{
                'Content-Type': 'application/json'
            }
        });
        return resp.data == "ok";
    }catch(e){
        return false;
    }
};