var unique = require('uniq');
var request = require('request');
var cheerio = require('cheerio');

document.getElementById("search").addEventListener("click", main);

function main() {
    function limpar() {
        document.getElementById("result").innerHTML = "";
    }

    limpar();

    var busca = document.getElementById("inputProduto").value;

    function myTrim(trim) {
        return trim.replace(/^\s+|\s+$/gm, '');
    }

    if (busca == "processador" || "placa de video") {
        url = "https://www.kabum.com.br/cgi-local/site/listagem/listagem.cgi?string=" + busca;
        spider();
    }

    if (busca == "ssd") {
        url = "https://www.kabum.com.br/hardware/ssd-2-5/" + busca;
        spider();
    }

    if (busca == "hd") {
        url = "https://www.kabum.com.br/hardware/disco-rigido-hd/" + busca;
        spider();
    }

    if (busca == "cooler") {
        url = "https://www.kabum.com.br/hardware/coolers/" + busca;
        spider();
    }

    function spider() {
        request(url, function (err, res, body) {
            if (err) console.log('Erro:' + err);

            var $ = cheerio.load(body);

            function crawler() {

                const produto = [];
                const titulo = [];
                const preco = [];
                const imagem = [];

                const i = 0;

                $(' .listagem-box').each(function (i, elem) {
                    $(' .H-titulo a').each(function (i, elem) {
                        titulo[i] = myTrim($(this).text());
                    });

                    $(' .listagem-preco').each(function (i, elem) {
                        preco[i] = myTrim($(this).text());
                    });

                    $(' .listagem-img img').each(function (i, elem) {
                        imagem[i] = myTrim($(this).attr('src'));
                    });

                    titulo.join(', ');
                    preco.join(', ');
                    imagem.join(', ');
                    produto.join(', ');

                    produto[i] = [titulo[i], preco[i], imagem[i]];

                    var html = '<div class="card my-3 mx-auto col-9" style="flex-direction: initial;"><div class="card-body"><div><img src="' + imagem[i] + '" border="0" id="imgtres" class="rounded d-blockcard-img-top my-2"/></div><div><h5 class="limitText" style="text-align: left;">' + titulo[i] + '</h5><p class="card-text limitText" style="text-align: left;">' + titulo[i] + '</p></div><div class="card-footer"><div class="d-flex justify-content-between align-items-center"><div class="btn-group"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font><button type="button" class="btn btn-outline-secondary mr-3 ml-3" data-toggle="modal" data-target="#exampleModalScrollable">Escolher</button><div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true"><div class="modal-dialog modal-dialog-scrollable" role="document"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" id="exampleModalScrollableTitle">title</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"></div></div></div></div><div><a href="#" class="btn btn-outline-secondary mr-3 ml-3" role="button" aria-pressed="true">' + preco[i] + '</a></div></div></div></div></div></div></div>';

                    document.getElementById("result").innerHTML += html;
                });

                console.log(produto);
            };
            crawler();
        });
    }
}

/*
<div class="card my-3 mx-auto col-9" style="flex-direction: initial;">
    <div class="card-body">
        <div>
            <img src="' + imagem[i] + '" border="0" id="imgtres" class="rounded d-blockcard-img-top my-2"/>
        </div>
            <div>
                <h5 class="limitText" style="text-align: left;">' + titulo[i] + '</h5>
                <p class="card-text limitText" style="text-align: left;">' + titulo[i] + '</p>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                            </font>
                        </font>
                        <button type="button" class="btn btn-outline-secondary mr-3 ml-3" data-toggle="modal" data-target="#exampleModalScrollable">Escolher</button>
                        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalScrollableTitle">title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <a href="#" class="btn btn-outline-secondary mr-3 ml-3" role="button" aria-pressed="true">' + preco[i] + '</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
*/

// <div class="card my-3 mx-auto col-9" style="flex-direction: initial;"><img src="' + imagem[i] + '" border="0" id="imgtres" class="rounded d-blockcard-img-top my-2"><div class="card-body"><h5 class="limitText" style="text-align: left;">' + titulo[i] + '</h5><p class="card-text limitText" style="text-align: left;">' + titulo[i] + '</p><div class="card-footer"><div class="d-flex justify-content-between align-items-center"><div class="btn-group"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font><button type="button" class="btn btn-outline-secondary mr-3 ml-3" data-toggle="modal" data-target="#exampleModalScrollable">Escolher</button><div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true"><div class="modal-dialog modal-dialog-scrollable" role="document"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" id="exampleModalScrollableTitle">title</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"></div></div></div></div><div><a href="#" class="btn btn-outline-secondary mr-3 ml-3" role="button" aria-pressed="true">' + preco[i] + '</a></div></div></div></div></div>