<style>
.botao-formulario {
  background-color: #3498db;
  border-radius: 5px;
  color: #fff;
  cursor: pointer;
  margin: 10px;
  padding: 6px 20px
}

</style>
<div class="box content" style="font-size:15px;">

    <form class="row g-3" style="margin-top: 20px;">
        @csrf
        <div class="col-md-4" style="padding-right:10px;">
            <label for="inputNomeTutor" class="form-label">Nome do tutor</label>
            <input type="text" class="form-control" id="nometutor" disabled>
        </div>
        <br><br><br>
        <div class="col-md-3" style="padding-right:10px; margin-top:5px;">
            <label for="inputAnuncio" class="form-label"><?= utf8_encode('Tipo do an�ncio') ?></label>
            <select id="inputAnuncio" class="form-select">
                <option selected>Choose...</option>
                <option>...</option>
            </select>
        </div>

        <div class="col-md-3" style="padding-right:10px; margin-top:5px;">
            <label for="inputTipoPet" class="form-label"><?= utf8_encode('Tipo do pet') ?></label>
            <select id="inputYipoPet" class="form-select">
                <option selected>Choose...</option>
                <option>...</option>
            </select>
        </div>

        <div class="col-md-4" style="padding-right:10px; margin-top:5px;">
            <label for="inputNomePet" class="form-label">Nome do Pet</label>
            <input type="text" class="form-control" id="nomepet">
        </div>
        <br><br><br><br>
        <div class="col-md-10">
            <label for="inputDescricao" class="form-label"><?= utf8_encode('Descri��o') ?></label>
            <textarea id="descricao" rows="5" cols="10" class="form-label"></textarea>
        </div>
        <br><br><br><br>
        <div class="col-md-4">
            <label for="formFile" class="form-label"><?= utf8_encode('Adicionar fotos') ?></label>
            <input class="form-control form-control-lg" id="formFileLg" type="file" id="formFile">
        </div>



        <div class="col-md-12" style="padding-top: 15px;">
            <button type="submit" class="btn btn-primary"><?= utf8_encode('Adicionar an�ncio') ?></button>
        </div>
    </form>

</div>

</div>
