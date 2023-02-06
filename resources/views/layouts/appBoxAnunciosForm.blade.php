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
    <h1 style="font-size: 18px; font-weight: 900; color:#000000; margin-bottom:'10px;">
        <?= 'Anunciar' ?></h1>

    <form method="POST" action="{{ url('/anuncios') }}" class="row g-3" style="margin-top: 20px;"
        enctype="multipart/form-data">
        @csrf

        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

        <div class="col-md-3" style="padding-right:10px;">
            <label for="inputNomeTutor" class="form-label">Nome do tutor</label>
            <input type="text" class="form-control" id="nometutor" name="nome_tutor" value="{{ Auth::user()->name }}"
                disabled>
        </div>
        <br><br><br>
        <div class="col-md-3" style="padding-right:10px; margin-top:5px;">
            <label for="inputAnuncio" class="form-label"><?= 'Tipo do anúncio' ?></label>
            <select id="inputAnuncio" class="form-select" name="tipo_anuncio" required>
                <option selected>Choose...</option>
                @foreach ($tipo_anuncios as $tipo_anuncio)
                    <option>{{ $tipo_anuncio->tipo_anuncio }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-3" style="padding-right:10px; margin-top:5px;">
            <label for="inputTipoPet" class="form-label"><?= 'Tipo do pet' ?></label>
            <select id="inputYipoPet" class="form-select" name="tipo_pet" required>
                <option selected>Choose...</option>
                @foreach ($tipo_pets as $tipo_pet)
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
            <textarea id="descricao" name="descricao" rows="5" cols="10" class="form-label" style="resize:none;"
                required></textarea>
        </div>
        <br><br><br><br>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-4">
                            <label for="formFile" class="custom-file-label"><?= 'Adicionar fotos' ?></label>
                            <input type="file" name='arquivo1' class=" form-control" id="File_1"><br>
                            <input type="file" name='arquivo2' class=" form-control" id="File_2"><br>
                            <input type="file" name='arquivo3' class=" form-control" id="File_3"><br>
                            <input type="file" name='arquivo4' class=" form-control" id="File_4"><br>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Fim -->
        <div class="col-md-10"> 
            <div class="nomeArquivo1"></div>
            <div class="nomeArquivo2"></div>
            <div class="nomeArquivo3"></div>
            <div class="nomeArquivo4"></div>
           </div>
        
        <div class="col-md-12" style="padding-top: 25px;">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Adicionar fotos</button>
            <button type="submit" class="btn btn-primary"><?= 'Gravar anúncio' ?></button>
        </div>
       

    </form>

</div>

</div>
<script>
    $(document).ready(function() {
        $('input[name="arquivo1"]').change(function(e) {
            var geekss = e.target.files[0].name;
            //$("h4").text(geekss + ' is the selected file.');
            div = document.getElementsByClassName("nomeArquivo1")[0];
            div.innerHTML = geekss;
        });

        $('input[name="arquivo2"]').change(function(e) {
            var geekss = e.target.files[0].name;
            //$("h4").text(geekss + ' is the selected file.');
            div = document.getElementsByClassName("nomeArquivo2")[0];
            div.innerHTML = geekss;
        });
        
        $('input[name="arquivo3"]').change(function(e) {
            var geekss = e.target.files[0].name;
            //$("h4").text(geekss + ' is the selected file.');
            div = document.getElementsByClassName("nomeArquivo3")[0];
            div.innerHTML = geekss;
        });
        
        $('input[name="arquivo4"]').change(function(e) {
            var geekss = e.target.files[0].name;
            //$("h4").text(geekss + ' is the selected file.');
            div = document.getElementsByClassName("nomeArquivo4")[0];
            div.innerHTML = geekss;
        });
    });
</script>
