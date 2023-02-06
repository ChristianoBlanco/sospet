<div class="box content" style="font-size:15px; ">
    <h1 style="font-size: 18px; font-weight: 900; color:#000000; margin-bottom:50px;"><?= 'Meus anúncios'; ?>
    </h1>
    <table class="table table-hover" id="tabelaAnuncios">
        <thead>
            <th>#</th>
            <th><?= 'Tipo do anúncio'; ?></th>
            <th>Nome do pet</th>
            <th>Status</th>
            <th><?= 'Ações'; ?></th>
        </thead>

        <tbody>


            <tr>
                <td>0</td>
                <td><?= ' '; ?></td>
                <td><?= ' '; ?></td>
                <td><?= ' '; ?></td>
                <td>edit | del</td>
            </tr>


        </tbody>
    </table>


    <nav id="paginationNav">
        <ul class="pagination pagination-sm">
        </ul>
    </nav>




    <script type="text/javascript">
        function getNextItem(data) {
            i = data.current_page + 1;
            if (data.current_page >= data.last_page)
                s = '<li class="page-item disabled">';
            else
                s = '<li class="page-item">';
            s += '<a class="page-link" ' + 'pagina="' + i + '" ' + ' href="javascript:void(0);" disabled >Próximo</a></li>';
            return s;
        }

        function getPreviousItem(data) {
            i = data.current_page - 1;
            if (data.current_page == 1)
                s = '<li class="page-item disabled">';
            else
                s = '<li class="page-item">';
            s += '<a class="page-link" ' + 'pagina="' + i + '" ' + ' href="javascript:void(0);">Anterior</a></li>';
            return s;
        }

        function getItem(data, i) {
            if (data.current_page == i)
                s = '<li class="page-item active">';
            else
                s = '<li class="page-item">';
            s += '<a class="page-link" ' + 'pagina="' + i + '" ' + ' href="javascript:void(0);">' + i + '</a></li>';
            return s;
        }

        function montarPaginator(data) {

            $("#paginationNav>ul>li").remove();

            $("#paginationNav>ul").append(
                getPreviousItem(data)
            );
            // for (i=1;i<=data.last_page;i++) {
            //     $("#paginationNav>ul").append(
            //         getItem(data,i)
            //     );
            // }

            n = data.last_page;

            if (data.current_page - n / 2 <= 1)
                inicio = 1;
            else if (data.last_page - data.current_page < n)
                inicio = data.last_page - n + 1;
            else
                inicio = data.current_page - n / 2;

            fim = inicio + n - 1;

            for (i = inicio; i <= fim; i++) {
                $("#paginationNav>ul").append(
                    getItem(data, i)
                );
            }
            $("#paginationNav>ul").append(
                getNextItem(data)
            );
        }

        function montarLinha(cliente) {
            return '<tr>' +
                '  <th scope="row">' + cliente.id_anuncio + '</th>' +
                '  <td>' + cliente.tipo + '</td>' +
                '  <td>' + cliente.nome + '</td>' +
                '  <td>' + cliente.tipo_status + '</td>' +  
                '  <td><a href="{{ url('/anuncios-edit') }}{{ '/' }}' + cliente.id_anuncio +' ">Edit</a> | Del</td>' +
                '</tr>';
        }

        function montarTabela(data) {
            $("#tabelaAnuncios>tbody>tr").remove();
            for (i = 0; i < data.data.length; i++) {
                $("#tabelaAnuncios>tbody").append(
                    montarLinha(data.data[i])
                );
            }
        }

        function carregarClientes(pagina) { //Função que pega do JSON as informações para montar a tabela
            $.get('/json', {
                page: pagina
            }, function(resp) {
                console.log(resp); //Console lof IMPORTANTE! para verificar pelo browser os campos via json p chamar no jscript. !!!!!
                console.log(resp.data.length);
                montarTabela(resp);
                montarPaginator(resp);
                $("#paginationNav>ul>li>a").click(function() {
                    // console.log($(this).attr('pagina') );
                    carregarClientes($(this).attr('pagina'));
                })
                $("#cardtitle").html("Exibindo " + resp.per_page +
                    " clientes de " + resp.total +
                    " (" + resp.from + " a " + resp.to + ")");
            });
        }

        $(function() {
            carregarClientes(1);
        });
    </script>

</div>

</div>
