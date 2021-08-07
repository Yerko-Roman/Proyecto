document.querySelector("#regcarpa-btn").addEventListener("click", async()=>{
    let marca = document.querySelector("#marcacarpa-txt").value.trim();
    let tela = document.querySelector("#tela-txt").value.trim();
    let cantidad = document.querySelector("#cap-num").value.trim();
    let largo = document.querySelector("#largo-num").value.trim();
    let alto = document.querySelector("#alto-num").value.trim();
    let ancho = document.querySelector("#ancho-num").value.trim();
    let bandeja = document.querySelector("#bandeja-si").checked ? 1: 0;
    let precio = document.querySelector("#preciocap-num").value.trim();
    
    let carpa = {};
    carpa.marca = marca;
    carpa.tela = tela;
    carpa.cantidad = cantidad;
    carpa.largo = largo;
    carpa.alto = alto;
    carpa.ancho = ancho;
    carpa.bandeja = bandeja;
    carpa.precio = precio;
    
    let res = await crearCarpas(carpa);
    
    await swal.fire("Carpa creada", "Carpa creada con exito.", "info")
    window.location.href = "ver_carpa";

});