<main>
    <section>
        <a href= "  index.php"> <button class= "btn btn-success"> Voltar </button> </a> <h2 style="text-align:center"> Cadastro de GPU </h2>
    </section>
    <form method="post">
        <div class="form-group">
            <label>Modelo</label>
            <input type="text" class="form-control" name="modelo">
        </div>
        <div class="form-group">
            <label>Marca</label>
            <select class="form-control" name="marca" >
                                <optgroup label="Marcas" >
                                <option value="Gigabyte">Gigabyte</option>
                                <option value="XFX">XFX</option>
                                <option value="Asus">Asus</option>
                                <option value="Asrock">Asrock</option>
                                <option value="Peladn">Peladn</option>
                                <option value="Zotac">Zotac</option>
                                <option value="Palit">Palit</option>
                                <option value="Galax">Galax</option>
                                <option value="Sapphire">Sapphire</option>
                                <option value="EVGA">EVGA</option>
                                <option value="Colorfull">Colorfull</option>
                            </select>
        </div>
        <div class="form-group">
            <label>Preço</label>
            <input type="number" min="0" class="form-control" name="preco">
        </div> 
        <div class="form-group">
            <label>Quantidade</label>
            <input type="number" min="0" class="form-control" name="quantidade">
        </div>
        <div class="form-group">
            <label>Lote</label>
            <input type="date" class="form-control" name="lote">
        </div>
         <div class="form-group">
            <label>Especificações</label>
            <textarea class="form-control" name="specs" rows=5></textarea>
        </div>
        <div class="form-group">
                <button type=submit class=" btn btn-success"> Cadastrar</button>
        </div>


    </form>

</main>