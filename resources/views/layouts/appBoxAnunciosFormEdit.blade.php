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
        <?= 'Alterar anúncio' ?></h1>

    <form method="POST" action="{{ url('/anuncios') }}{{ '/' }}{{ $anuncios->id_anuncio }}" class="row g-3" style="margin-top: 20px;"
        enctype="multipart/form-data">
        @csrf

        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

        <div class="col-md-3" style="padding-right:10px;">
            <label for="inputNomeTutor" class="form-label">Nome do tutor</label>
            <input type="text" class="form-control" id="nometutor" name="nome_tutor" value="{{ Auth::user()->name }}"
                disabled>
        </div>
        <br><br><br>
        <div class="col-md-3" style="padding-right:10px; margin-top:0px;">
            <label for="inputAnuncio" class="form-label"><?= 'Tipo do anúncio' ?></label>
            <select id="inputAnuncio" class="form-select" name="tipo_anuncio" required>
                <option selected>{{ $anuncios->tipo }}</option>
                @foreach ($tipo_anuncios as $tipo_anuncio)
                    <option>{{ $tipo_anuncio->tipo_anuncio }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-3" style="padding-right:10px; margin-top:0px;">
            <label for="inputTipoPet" class="form-label"><?= 'Tipo do pet' ?></label>
            <select id="inputYipoPet" class="form-select" name="tipo_pet" required>
                <option selected>{{ $anuncios->pet }}</option>
                @foreach ($tipo_pets as $tipo_pet)
                    <option>{{ $tipo_pet->tipo_pet }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-4" style="padding-right:10px; margin-top:5px;">
            <label for="inputNomePet" class="form-label">Nome do Pet</label>
            <input type="text" name="nome_pet" class="form-control" id="nomepet" value="{{ $anuncios->nome }}">
        </div>
        <br><br><br><br>
        <div class="col-md-10">
            <label for="inputDescricao" class="form-label"><?= 'Descrição' ?></label>
            <textarea id="descricao" name="descricao" rows="5" cols="10" class="form-label" style="resize:none;"
                required>{{ $anuncios->descricao }}</textarea>
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



        <div class="col-md-12" style="padding-top: 15px;">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Adicionar
                fotos</button>
            <button type="submit" class="btn btn-primary"><?= 'Gravar anúncio' ?></button>
        </div>
    </form>

    <!-- Exibição das imagens adicionadas -->
    <div class="row" style="margin-left:5px; margin-top:30px;">
        @foreach ($lista_anuncios as $lista_anuncio)
            @if ($lista_anuncio->foto1 == 'Null' || $lista_anuncio->foto1 == '')
            @else
                <div class="col-lg-3">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top figure-img img-fluid rounded"
                            src="/storage/{{ $lista_anuncio->foto1 }}" width="100" height="105">
                        <div class="card-body">
                            <p class="card-text"></p>
                            <p class="card-text">{{ 'Foto-01:' . $lista_anuncio->nome }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <!--button type="button" class="btn btn-sm btn-outline-secondary">Download</button-->
                                    <a type="button" class="btn btn-sm btn-outline-secondary"
                                        href="/download/{{ $lista_anuncio->id_anuncio }}">Download</a>
                                    <form action="/{{ $lista_anuncio->foto1 }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="_method" value="delete">
                                        <button type="submit" class="btn btn-sm btn-success">Apagar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if ($lista_anuncio->foto2 == 'Null' || $lista_anuncio->foto2 == '')
            @else
                <div class="col-lg-3">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top figure-img img-fluid rounded"
                            src="/storage/{{ $lista_anuncio->foto2 }}" width="100" height="105">
                        <div class="card-body">
                            <p class="card-text"></p>
                            <p class="card-text">{{ 'Foto-02:' . $lista_anuncio->nome }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <!--button type="button" class="btn btn-sm btn-outline-secondary">Download</button-->
                                    <a type="button" class="btn btn-sm btn-outline-secondary"
                                        href="/download/{{ $lista_anuncio->id_anuncio }}">Download</a>
                                    <form action="/{{ $lista_anuncio->foto2 }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="_method" value="delete">
                                        <button type="submit" class="btn btn-sm btn-success">Apagar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @if ($lista_anuncio->foto3 == 'Null' || $lista_anuncio->foto3 == '')
            @else
                <div class="col-lg-3">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top figure-img img-fluid rounded"
                            src="/storage/{{ $lista_anuncio->foto3 }}" width="100" height="105">
                        <div class="card-body">
                            <p class="card-text"></p>
                            <p class="card-text">{{ 'Foto-03:' . $lista_anuncio->nome }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <!--button type="button" class="btn btn-sm btn-outline-secondary">Download</button-->
                                    <a type="button" class="btn btn-sm btn-outline-secondary"
                                        href="/download/{{ $lista_anuncio->id_anuncio }}">Download</a>
                                    <form action="/{{ $lista_anuncio->foto3 }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="_method" value="delete">
                                        <button type="submit" class="btn btn-sm btn-success">Apagar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if ($lista_anuncio->foto4 == 'Null' || $lista_anuncio->foto4 == '')
            @else
                <div class="col-lg-3">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top figure-img img-fluid rounded"
                            src="/storage/{{ $lista_anuncio->foto4 }}" width="100" height="105">
                        <div class="card-body">
                            <p class="card-text"></p>
                            <p class="card-text">{{ 'Foto-04:' . $lista_anuncio->nome }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <!--button type="button" class="btn btn-sm btn-outline-secondary">Download</button-->
                                    <a type="button" class="btn btn-sm btn-outline-secondary"
                                        href="/download/{{ $lista_anuncio->id_anuncio }}">Download</a>
                                    <form action="/{{ $lista_anuncio->foto4 }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="_method" value="delete">
                                        <button type="submit" class="btn btn-sm btn-success">Apagar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>

</div>



</div>

</div>
