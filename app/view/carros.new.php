<div class="container">
    <form action="/add" method="post" >
        <div class="card" style="top:40px">
            <div class="card-header">
                <span class="card-title">Novo Carro</span>
            </div>
            <div class="card-body">
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Modelo:</label>
                <input type="text" class="form-control col-sm-8" name="model" id="model" required/>
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Ano:</label>
                <input type="number" class="form-control col-sm-8" name="year" id="year" required/>
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Cor:</label>
                <input type="text" class="form-control col-sm-8" name="color" id="color" required/>
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Marca:</label>
                <input type="text" class="form-control col-sm-8" name="brand" id="brand" required/>
            </div>
            <div class="card-footer">
                <button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
                <a class="btn btn-danger" href="/"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
            </div>
        </div>
    </form>
</div>