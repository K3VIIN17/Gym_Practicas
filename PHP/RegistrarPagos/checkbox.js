function cambiar() {
    let tipoDepago = document.getElementById('TipoPag');
    let pago = document.getElementById('tipoDepago').value;
    if(pago == "pagoatrasado"){
        tipoDepago.innerHTML =
        ` <br><label class="form-label" for="exampleInputPassword1"></label>
        <select class="form-select" name="Cantidad"  id="" require>
          <option id="385" value="250" default>Gimnasio</option>
       
        </select>`
    }else if(pago == "pagonormal"){
        tipoDepago.innerHTML =
        ` <br><label class="form-label" for="exampleInputPassword1">En</label>
        <select class="form-select" name="Cantidad" id="" require>
          <option id="250" value="250" default>Gimnasio</option>
        
        </select>`
    }
}
