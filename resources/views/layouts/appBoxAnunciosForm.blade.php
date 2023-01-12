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

    <form  method="POST" action="{{ url('/usuarios') }}" class="row g-3" style="margin-top: 20px;" enctype="multipart/form-data">
        @csrf

        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

        <div class="col-md-3" style="padding-right:10px;">
            <label for="inputNomeTutor" class="form-label">Nome do tutor</label>
            <input type="text" class="form-control" id="nometutor" name="nome_tutor" value="{{Auth::user()->name}}" disabled>
        </div>
        <br><br><br>
        <div class="col-md-3" style="padding-right:10px; margin-top:5px;">
            <label for="inputAnuncio" class="form-label"><?= 'Tipo do anúncio' ?></label>
            <select id="inputAnuncio" class="form-select" name="tipo_anuncio">
                <option selected>Choose...</option>
                @foreach ( $tipo_anuncios as $tipo_anuncio)
                  <option>{{ $tipo_anuncio->tipo_anuncio }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-3" style="padding-right:10px; margin-top:5px;">
            <label for="inputTipoPet" class="form-label"><?= 'Tipo do pet' ?></label>
            <select id="inputYipoPet" class="form-select" name="tipo_pet">
                <option selected>Choose...</option>
                @foreach ( $tipo_pets as $tipo_pet)
                  <option>{{ $tipo_pet->tipo_pet }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-4" style="padding-right:10px; margin-top:5px;">
            <label for="inputNomePet" class="form-label">Nome do Pet</label>
            <input type="text" name="nome_pet" class="form-control" id="nomepet">
        </div>
        <br><br><br><br>
        <div class="col-md-10">
            <label for="inputDescricao" class="form-label"><?= 'Descrição' ?></label>
            <textarea id="descricao" name="descricao" rows="5" cols="10" class="form-label"></textarea>
        </div>
        <br><br><br><br>
        <div class="col-md-4">
            <label for="formFile" class="custom-file-label"><?= 'Adicionar fotos' ?></label>
            <input type="file" name='arquivo1' class=" form-control" id="formFileLg" ><br>
            <input type="file" name='arquivo2' class=" form-control" id="formFileLg" ><br>
            <input type="file" name='arquivo3' class=" form-control" id="formFileLg" ><br>
            <input type="file" name='arquivo4' class=" form-control" id="formFileLg" ><br>
            
        </div>



        <div class="col-md-12" style="padding-top: 15px;">
            <button type="submit" class="btn btn-primary"><?= 'Gravar anúncio' ?></button>
        </div>
    </form>

</div>

</div>
