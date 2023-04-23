<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    

    <link rel="stylesheet" href="./Style/formulario.css">
    <title>Relato de Perigo</title>
</head>
<body>
<nav>
   <div class="circle" ></div>
   <div class="img">
    <img src="/../SESMTDigital/views/imagens/logBranca_SESMT.png"alt="">
   </div>
</nav>
            
    <form action="">
        <div class="inspecao">
                <h1>Informação de Inspeção</h1>
                <label for="data" > Data</label>
                <input type="date" name="data" id="data">
                <label for="inspecionador"> RE Inspecionador</label>
                <input type="text" name="inspecionador" id=" inspecionador">
                <label for="placa">Placa</label>
                <input type="text" name="placa" id="placa">
                <label for="base">Base</label>
                <input type="text" name="base" id="base">
                <label for="segmento">Segmento</label>
                <input type="text" name="segmento" id="segmento">
                <label for="endereco"> <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"  style="margin-top: 6px;"  class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                  </svg>Endereço</label>
                <input type="text" name="endereco" id="endereco" >
                       
                <label for="tp_servico">Tipo de Serviço</label>
                <input type="text" name="tp_servico" id="tp_servico">
        </div>

        <div class="mtd-trabalho">
            <div class="barra">
                <h1>Método de trabalho</h1>
            </div>
            <label for="despacho">Comunicação com o Despacho</label>
            <div class="opcoes-despacho">
                <div >
                <input type="radio" name="despacho" id="despacho-sim" value="1" checked>
                <label for="despacho-sim">Sim</label>
                <input type="radio" name="despacho" id="despacho-nao" value="2">
                <label for="despacho-nao">Não</label>
                <input type="radio" name="despacho" id="despacho-nav" value="3">
                <label for="despacho-nav">NAV</label>
                </div>
            </div>
                  <br>
            <label for="equipamentoOperado">Equipamentos Operados (desligado, blqueado, etc.)</label>
            <div class="opcoes-equipamentoOperado">
                <div >
                <input type="radio" name="equipamentoOperado" id="equipamentoOperado-sim" value="1" checked>
                <label for="equipamentoOperado-sim">Sim</label>
                <input type="radio" name="equipamentoOperado" id="equipamentoOperado-nao" value="2">
                <label for="equipamentoOperado-nao">Não</label>
                <input type="radio" name="equipamentoOperado" id="equipamentoOperado-nav" value="3">
                <label for="equipamentoOperado-nav">NAV</label>
                </div>
            </div>
                <br>
            <label for="sinalizacao">Sinalização do Canteiro de Trabalho</label>
            <div class="opcoes-sinalizacao">
                <div>
                <input type="radio" name="sinalizacao" id="sinalizacao-sim" value="1" checked>
                <label for="sinalizacao-sim">Sim</label>
                <input type="radio" name="sinalizacao" id="sinalizacao-nao" value="2">
                <label for="sinalizacao-nao">Não</label>
                <input type="radio" name="sinalizacao" id="sinalizacao-nav" value="3">
                <label for="sinalizacao-nav">NAV</label>
                </div>
            </div>
                <br>
            <label for="organizacao">Organizacao do Canteiro de Trabalho</label>
            <div class="opcoes-organizacao">
                <div>
                <input type="radio" name="organizacao" id="organizacao-sim" value="1" checked>
                <label for="organizacao-sim">Sim</label>
                <input type="radio" name="organizacao" id="organizacao-nao" value="2">
                <label for="organizacao-nao">Não</label>
                <input type="radio" name="organizacao" id="organizacao-nav" value="3">
                <label for="organizacao-nav">NAV</label>
                </div>
            </div>
                <br>
            <label for="aterramento">Aterramento Temporário</label>
            <div class="opcoes-aterramento">
                <div>
                <input type="radio" name="aterramento" id="aterramento-sim" value="1" checked>
                <label for="aterramento-sim">Sim</label>
                <input type="radio" name="aterramento" id="aterramento-nao" value="2">
                <label for="aterramento-nao">Não</label>
                <input type="radio" name="aterramento" id="aterramento-nav" value="3">
                <label for="aterramento-nav">NAV</label>
                </div>
            </div>
                <br>
            <label for="amarracao">Amarração de Escadas</label>
            <div class="opcoes-amarracao">
                <div>
                <input type="radio" name="amarracao" id="amarracao-sim" value="1" checked>
                <label for="amarracao-sim">Sim</label>
                <input type="radio" name="amarracao" id="amarracao-nao" value="2">
                <label for="amarracao-nao">Não</label>
                <input type="radio" name="amarracao" id="amarracao-nav" value="3">
                <label for="amarracao-nav">NAV</label>
                </div>
            </div>
                <br>
            <label for="homem">Homem como Base de Apoio no pé da Escada</label>
            <div class="opcoes-homem">
                <div>
                <input type="radio" name="homem" id="homem-sim" value="1" checked>
                <label for="homem-sim">Sim</label>
                <input type="radio" name="homem" id="homem-nao" value="2">
                <label for="homem-nao">Não</label>
                <input type="radio" name="homem" id="homem-nav" value="3">
                <label for="homem-nav">NAV</label>
                </div>
            </div>
                <br>
            <label for="utilizacao">Utilização de Carretilha e Sacol</label>
            <div class="opcoes-utilizacao">
                <div>
                <input type="radio" name="utilizacao" id="utilizacao-sim" value="1" checked>
                <label for="utilizacao-sim">Sim</label>
                <input type="radio" name="utilizacao" id="utilizacao-nao" value="2">
                <label for="utilizacao-nao">Não</label>
                <input type="radio" name="utilizacao" id="utilizacao-nav" value="3">
                <label for="utilizacao-nav">NAV</label>
                </div>
            </div>
                <br>
            <label for="bloqueio">Bloqueio Mecânico de Acionamento</label>
            <div class="opcoes-bloqueio">
                <div>
                <input type="radio" name="bloqueio" id="bloqueio-sim" value="1" checked>
                <label for="bloqueio-sim">Sim</label>
                <input type="radio" name="bloqueio" id="bloqueio-nao" value="2">
                <label for="bloqueio-nao">Não</label>
                <input type="radio" name="bloqueio" id="bloqueio-nav" value="3">
                <label for="bloqueio-nav">NAV</label>
                </div>
            </div>
                <br>
            <label for="sinalizacaoVida">Sinalização de Vida</label>
            <div class="opcoes-sinalizacaoVida">
                <div>
                <input type="radio" name="sinalizacaoVida" id="sinalizacaoVida-sim" value="1" checked>
                <label for="sinalizacaoVida-sim">Sim</label>
                <input type="radio" name="sinalizacaoVida" id="sinalizacaoVida-nao" value="2">
                <label for="sinalizacaoVida-nao">Não</label>
                <input type="radio" name="sinalizacaoVida" id="sinalizacaoVida-nav" value="3">
                <label for="sinalizacaoVida-nav">NAV</label>
                </div>
            </div>
                <br>
            <label for="procedimento">Procedimentos de Trabalho Estão Sendo Seguidos</label>
            <div class="opcoes-procedimento">
                <div>
                <input type="radio" name="procedimento" id="procedimento-sim" value="1" checked>
                <label for="procedimento-sim">Sim</label>
                <input type="radio" name="procedimento" id="procedimento-nao" value="2">
                <label for="procedimento-nao">Não</label>
                <input type="radio" name="procedimento" id="procedimento-nav" value="3">
                <label for="procedimento-nav">NAV</label>
                </div>
            </div>
                <br>
            <label for="outrosMetodos">Outros Itens de Métodos de Trabalho</label>
            <div class="opcoes-outrosMetodos">
                <div>
                <input type="radio" name="outrosMetodos" id="outrosMetodos-sim" value="1" checked>
                <label for="outrosMetodos-sim">Sim</label>
                <input type="radio" name="outrosMetodos" id="outrosMetodos-nao" value="2">
                <label for="outrosMetodos-nao">Não</label>
                <input type="radio" name="outrosMetodos" id="outrosMetodos-nav" value="3">
                <label for="outrosMetodos-nav">NAV</label>
                </div>
            </div>

        </div>

        <div class="planejamento-servico">
            <div class="barra">
            <h1>Planejamento de Serviço</h1>
            </div>
            <label for="avaliacao">Avaliação das Condições do Local de Trabalho</label>
            <div class="opcoes-avaliacao">
                <div>
                <input type="radio" name="avaliacao" id="avaliacao-sim" value="1" checked>
                <label for="avaliacao-sim">Sim</label>
                <input type="radio" name="avaliacao" id="avaliacao-nao" value="2">
                <label for="avaliacao-nao">Não</label>
                <input type="radio" name="avaliacao" id="avaliacao-nav" value="3">
                <label for="avaliacao-nav">NAV</label>
                </div>
            </div>
                <br>
            <label for="procedimentoTrabalho"> Existe Procedimento de Trablaho para as Tarefas</label>
            <div class="opcoes-procedimentoTrabalho">
                <div>
                <input type="radio" name="procedimentoTrabalho" id="procedimentoTrabalho-sim" value="1" checked>
                <label for="procedimentoTrabalho-sim">Sim</label>
                <input type="radio" name="procedimentoTrabalho" id="procedimentoTrabalho-nao" value="2">
                <label for="procedimentoTrabalho-nao">Não</label>
                <input type="radio" name="procedimentoTrabalho" id="procedimentoTrabalho-nav" value="3">
                <label for="procedimentoTrabalho-nav">NAV</label>
                </div>
            </div>
                <br>
            <label for="avaliacaoCondicoes">Avaliação das Condições Fisicas de Postes e Escadas</label>
            <div class="opcoes-avaliacaoCondicoes">
                <div>
                <input type="radio" name="avaliacaoCondicoes" id="avaliacaoCondicoes-sim" value="1" checked>
                <label for="avaliacaoCondicoes-sim">Sim</label>
                <input type="radio" name="avaliacaoCondicoes" id="avaliacaoCondicoes-nao" value="2">
                <label for="avaliacaoCondicoes-nao">Não</label>
                <input type="radio" name="avaliacaoCondicoes" id="avaliacaoCondicoes-nav" value="3">
                <label for="avaliacaoCondicoes-nav">NAV</label>
                </div>
            </div>
                <br>
            <label for="preenchimento">Preenchimento da Análise Preliminar de Risco (APR)</label>
            <div class="opcoes-preenchimento">
                <div>
                <input type="radio" name="preenchimento" id="preenchimento-sim" value="1" checked>
                <label for="preenchimento-sim">Sim</label>
                <input type="radio" name="preenchimento" id="preenchimento-nao" value="2">
                <label for="preenchimento-nao">Não</label>
                <input type="radio" name="preenchimento" id="preenchimento-nav" value="3">
                <label for="preenchimento-nav">NAV</label>
                </div>
            </div>
                <br>
            <label for="mpts">MPT's e CTI's<p>Disponível/utilização/atualizações</p></label>    
            <div class="opcoes-mpts">
                <div>
                <input type="radio" name="mpts" id="mpts-sim" value="1" checked>
                <label for="mpts-sim">Sim</label>
                <input type="radio" name="mpts" id="mpts-nao" value="2">
                <label for="mpts-nao">Não</label>
                <input type="radio" name="mpts" id="mpts-nav" value="3">
                <label for="mpts-nav">NAV</label>
                </div>
            </div>
                <br>
            <label for="outroPlanejamento">Outros Itens de Planejamento de Serviço</label>
            <div class="opcoes-outroPlanejamento">
                <div>
                <input type="radio" name="outroPlanejamento" id="outroPlanejamento-sim" value="1" checked>
                <label for="outroPlanejamento-sim">Sim</label>
                <input type="radio" name="outroPlanejamento" id="outroPlanejamento-nao" value="2">
                <label for="outroPlanejamento-nao">Não</label>
                <input type="radio" name="outroPlanejamento" id="outroPlanejamento-nav" value="3">
                <label for="outroPlanejamento-nav">NAV</label>
                </div>
            </div>
        </div>

        <div class="ferramentas">
            <div class="barra">
            <h1>Ferramentas, Equipamentos e Materiais</h1>
            </div>
            <label for="utilizacaoFerramentas">Utilização de Equipamentos Ferramentas e Materiais</label>
            <div class="opcoes-utilizacaoFerramentas">
                <div>
                <input type="radio" name="utilizacaoFerramentas" id="utilizacaoFerramentas-sim" value="1" checked>
                <label for="utilizacaoFerramentas-sim">Sim</label>
                <input type="radio" name="utilizacaoFerramentas" id="utilizacaoFerramentas-nao" value="2">
                <label for="utilizacaoFerramentas-nao">Não</label>
                <input type="radio" name="utilizacaoFerramentas" id="utilizacaoFerramentas-nav" value="3">
                <label for="utilizacaoFerramentas-nav">NAV</label>
                </div>
            </div>
                <br>
            <label for="estadoConservacao">Estado de Conservação de Ferramentas e Materiais</label>
            <div class="opcoes-estadoConservacao">
                <div>
                <input type="radio" name="estadoConservacao" id="estadoConservacao-sim" value="1" checked>
                <label for="estadoConservacao-sim">Sim</label>
                <input type="radio" name="estadoConservacao" id="estadoConservacao-nao" value="2">
                <label for="estadoConservacao-nao">Não</label>
                <input type="radio" name="estadoConservacao" id="estadoConservacao-nav" value="3">
                <label for="estadoConservacao-nav">NAV</label>
                </div>
            </div>
        </div>
        <div class="epc"> 
            <div class="barra">
                <h1>E.P.C</h1>
            </div>
            <span>Uso de:</span>
                <br>
            <label for="coneFita">Cone, Fita, Grade, Bandeirola</label>
            <div class="opcoes-coneFita">
                <div>
                <input type="radio" name="coneFita" id="coneFita-sim" value="1" checked>
                <label for="coneFita-sim">Sim</label>
                <input type="radio" name="coneFita" id="coneFita-nao" value="2">
                <label for="coneFita-nao">Não</label>
                <input type="radio" name="coneFita" id="coneFita-nav" value="3">
                <label for="coneFita-nav">NAV</label>
                </div>
            </div>
                <br>
            <label for="aterramentoTemporario">Aterramento Temporário</label>
            <div class="opcoes-aterramentoTemporario">
                <div>
                <input type="radio" name="aterramentoTemporario" id="aterramentoTemporario-sim" value="1" checked>
                <label for="aterramentoTemporario-sim">Sim</label>
                <input type="radio" name="aterramentoTemporario" id="aterramentoTemporario-nao" value="2">
                <label for="aterramentoTemporario-nao">Não</label>
                <input type="radio" name="aterramentoTemporario" id="aterramentoTemporario-nav" value="3">
                <label for="aterramentoTemporario-nav">NAV</label>
                </div>
            </div>
                <br>
            <label for="loadBuste">Load Buster</label>
            <div class="opcoes-loadBuste">
                <div>
                <input type="radio" name="loadBuste" id="loadBuste-sim" value="1" checked>
                <label for="loadBuste-sim">Sim</label>
                <input type="radio" name="loadBuste" id="loadBuste-nao" value="2">
                <label for="loadBuste-nao">Não</label>
                <input type="radio" name="loadBuste" id="loadBuste-nav" value="3">
                <label for="loadBuste-nav">NAV</label>
                </div>
            </div>
                <br>
            <label for="VaraManobra">Vara de Manobra/Telescópio</label>
            <div class="opcoes-VaraManobra">
                <div>
                <input type="radio" name="VaraManobra" id="VaraManobra-sim" value="1" checked>
                <label for="VaraManobra-sim">Sim</label>
                <input type="radio" name="VaraManobra" id="VaraManobra-nao" value="2">
                <label for="VaraManobra-nao">Não</label>
                <input type="radio" name="VaraManobra" id="VaraManobra-nav" value="3">
                <label for="VaraManobra-nav">NAV</label>
                </div>
            </div>
                <br>
            <label for="detectorTensao">Detector de Tensão</label>
            <div class="opcoes-detectorTensao">
                <div>
                <input type="radio" name="detectorTensao" id="detectorTensao-sim" value="1" checked>
                <label for="detectorTensao-sim">Sim</label>
                <input type="radio" name="detectorTensao" id="detectorTensao-nao" value="2">
                <label for="detectorTensao-nao">Não</label>
                <input type="radio" name="detectorTensao" id="detectorTensao-nav" value="3">
                <label for="detectorTensao-nav">NAV</label>
                </div>
            </div>
                <br>
            <label for="detectorGases">Detector de Gases</label>
            <div class="opcoes-detectorGases">
                <div>
                <input type="radio" name="detectorGases" id="detectorGases-sim" value="1" checked>
                <label for="detectorGases-sim">Sim</label>
                <input type="radio" name="detectorGases" id="detectorGases-nao" value="2">
                <label for="detectorGases-nao">Não</label>
                <input type="radio" name="detectorGases" id="detectorGases-nav" value="3">
                <label for="detectorGases-nav">NAV</label>
                </div>
            </div>
                <br>
            <label for="ensaioDieletrico">Ensaio Dielétrico</label>
            <div class="opcoes-ensaioDieletrico">
                <div>
                <input type="radio" name="ensaioDieletrico" id="ensaioDieletrico-sim" value="1" checked>
                <label for="ensaioDieletrico-sim">Sim</label>
                <input type="radio" name="ensaioDieletrico" id="ensaioDieletrico-nao" value="2">
                <label for="ensaioDieletrico-nao">Não</label>
                <input type="radio" name="ensaioDieletrico" id="ensaioDieletrico-nav" value="3">
                <label for="ensaioDieletrico-nav">NAV</label>
                </div>
            </div>
                <br>
            <label for="outrosEPC">Outros Itens de EPC's</label>
            <div class="opcoes-outrosEPC">
                <div>
                <input type="radio" name="outrosEPC" id="outrosEPC-sim" value="1" checked>
                <label for="outrosEPC-sim">Sim</label>
                <input type="radio" name="outrosEPC" id="outrosEPC-nao" value="2">
                <label for="outrosEPC-nao">Não</label>
                <input type="radio" name="outrosEPC" id="outrosEPC-nav" value="3">
                <label for="outrosEPC-nav">NAV</label>
                </div>
            </div>
        </div>

        <div class="epi">
            <div class="barra">
                <h1>E.P.I</h1>
            </div>
            <span>Uso de:</span>
                <br>
            <label for="capacete"> capacete </label>
            <div class="opcoes-capacete">
                <div>
                <input type="radio" name="capacete" id="capacete-sim" value="1" checked>
                <label for="capacete-sim">Sim</label>
                <input type="radio" name="capacete" id="capacete-nao" value="2">
                <label for="capacete-nao">Não</label>
                <input type="radio" name="capacete" id="capacete-nav" value="3">
                <label for="capacete-nav">NAV</label>
                </div>
            </div>
                <br>
            <label for="capaceteViseira">Capacete com Viseira</label>
            <div class="opcoes-capaceteViseira">
                <div>
                <input type="radio" name="capaceteViseira" id="capaceteViseira-sim" value="1" checked>
                <label for="capaceteViseira-sim">Sim</label>
                <input type="radio" name="capaceteViseira" id="capaceteViseira-nao" value="2">
                <label for="capaceteViseira-nao">Não</label>
                <input type="radio" name="capaceteViseira" id="capaceteViseira-nav" value="3">
                <label for="capaceteViseira-nav">NAV</label>
                </div>
            </div>
                <br>
            <label for="conjuto">Conjuto Trava Quedas</label>
            <div class="opcoes-conjuto">
                <div>
                <input type="radio" name="conjuto" id="conjuto-sim" value="1" checked>
                <label for="conjuto-sim">Sim</label>
                <input type="radio" name="conjuto" id="conjuto-nao" value="2">
                <label for="conjuto-nao">Não</label>
                <input type="radio" name="conjuto" id="conjuto-nav" value="3">
                <label for="conjuto-nav">NAV</label>
                </div>
            </div>
                <br>
            <label for="outrosEPI"> Outros Itens de EPI's</label>
            <div class="opcoes-outrosEPI">
                <div>
                <input type="radio" name="outrosEPI" id="outrosEPI-sim" value="1" checked>
                <label for="outrosEPI-sim">Sim</label>
                <input type="radio" name="outrosEPI" id="outrosEPI-nao" value="2">
                <label for="outrosEPI-nao">Não</label>
                <input type="radio" name="outrosEPI" id="outrosEPI-nav" value="3">
                <label for="outrosEPI-nav">NAV</label>
                </div>
            </div>
                <br>
        </div>
        <div class="veiculo">
        <div class="barra">
            <h1>Veículo</h1>
        </div> 
            <label for="veiuloIdentificados">Veículos Identificados</label>
            <div class="opcoes-veiuloIdentificados">
                <div>
                <input type="radio" name="veiuloIdentificados" id="veiuloIdentificados-sim" value="1" checked>
                <label for="veiuloIdentificados-sim">Sim</label>
                <input type="radio" name="veiuloIdentificados" id="veiuloIdentificados-nao" value="2">
                <label for="veiuloIdentificados-nao">Não</label>
                <input type="radio" name="veiuloIdentificados" id="veiuloIdentificados-nav" value="3">
                <label for="veiuloIdentificados-nav">NAV</label>
                </div>
            </div>
                <br>
            <label for="limpezaConservacao">Limpeza e Estado de Conservação</label>
            <div class="opcoes-limpezaConservacao">
                <div>
                <input type="radio" name="limpezaConservacao" id="limpezaConservacao-sim" value="1" checked>
                <label for="limpezaConservacao-sim">Sim</label>
                <input type="radio" name="limpezaConservacao" id="limpezaConservacao-nao" value="2">
                <label for="limpezaConservacao-nao">Não</label>
                <input type="radio" name="limpezaConservacao" id="limpezaConservacao-nav" value="3">
                <label for="limpezaConservacao-nav">NAV</label>
                </div>
            </div>
                <br>
            <label for="organizacaoMateriais">Organização de Materiais e Equipamentos</label>
            <div class="opcoes-organizacaoMateriais">
                <div>
                <input type="radio" name="organizacaoMateriais" id="organizacaoMateriais-sim" value="1" checked>
                <label for="organizacaoMateriais-sim">Sim</label>
                <input type="radio" name="organizacaoMateriais" id="organizacaoMateriais-nao" value="2">
                <label for="organizacaoMateriais-nao">Não</label>
                <input type="radio" name="organizacaoMateriais" id="organizacaoMateriais-nav" value="3">
                <label for="organizacaoMateriais-nav">NAV</label>
                </div>
            </div>
                <br>
            <label for="limireTransporte">Limite de Transporte de Passageiros</label>
            <div class="opcoes-limireTransporte">
                <div>
                <input type="radio" name="limireTransporte" id="limireTransporte-sim" value="1" checked>
                <label for="limireTransporte-sim">Sim</label>
                <input type="radio" name="limireTransporte" id="limireTransporte-nao" value="2">
                <label for="limireTransporte-nao">Não</label>
                <input type="radio" name="limireTransporte" id="limireTransporte-nav" value="3">
                <label for="limireTransporte-nav">NAV</label>
                </div>
            </div>
                <br>
            <label for="calcamento">Calçamento do Veículo -1/4 do Pneu</label>
            <div class="opcoes-calcamento">
                <div>
                <input type="radio" name="calcamento" id="calcamento-sim" value="1" checked>
                <label for="calcamento-sim">Sim</label>
                <input type="radio" name="calcamento" id="calcamento-nao" value="2">
                <label for="calcamento-nao">Não</label>
                <input type="radio" name="calcamento" id="calcamento-nav" value="3">
                <label for="calcamento-nav">NAV</label>
                </div>
            </div>
                <br>
            <label for="documentacao">Documentação</label>
            <div class="opcoes-documentacao">
                <div>
                <input type="radio" name="documentacao" id="documentacao-sim" value="1" checked>
                <label for="documentacao-sim">Sim</label>
                <input type="radio" name="documentacao" id="documentacao-nao" value="2">
                <label for="documentacao-nao">Não</label>
                <input type="radio" name="documentacao" id="documentacao-nav" value="3">
                <label for="documentacao-nav">NAV</label>
                </div>
            </div>
                <br>
            <label for="calcoSapatos">Calço para Sapatos Estabilizadoras(Guindauto e Cesta)</label>
            <div class="opcoes-calcoSapatos">
                <div>
                <input type="radio" name="calcoSapatos" id="calcoSapatos-sim" value="1" checked>
                <label for="calcoSapatos-sim">Sim</label>
                <input type="radio" name="calcoSapatos" id="calcoSapatos-nao" value="2">
                <label for="calcoSapatos-nao">Não</label>
                <input type="radio" name="calcoSapatos" id="calcoSapatos-nav" value="3">
                <label for="calcoSapatos-nav">NAV</label>
                </div>
            </div>
                <br>
            <label for="extintor">Extintor</label>
            <div class="opcoes-extintor">
                <div>
                <input type="radio" name="extintor" id="extintor-sim" value="1" checked>
                <label for="extintor-sim">Sim</label>
                <input type="radio" name="extintor" id="extintor-nao" value="2">
                <label for="extintor-nao">Não</label>
                <input type="radio" name="extintor" id="extintor-nav" value="3">
                <label for="extintor-nav">NAV</label>
                </div>
            </div>
                <br>
            <label for="pneus">Pneus</label>
            <div class="opcoes-pneus">
                <div>
                <input type="radio" name="pneus" id="pneus-sim" value="1" checked>
                <label for="pneus-sim">Sim</label>
                <input type="radio" name="pneus" id="pneus-nao" value="2">
                <label for="pneus-nao">Não</label>
                <input type="radio" name="pneus" id="pneus-nav" value="3">
                <label for="pneus-nav">NAV</label>
                </div>
            </div>
                <br>
            <label for="pneuStep">Pneu-Step</label>
            <div class="opcoes-pneuStep">
                <div>
                <input type="radio" name="pneuStep" id="pneuStep-sim" value="1" checked>
                <label for="pneuStep-sim">Sim</label>
                <input type="radio" name="pneuStep" id="pneuStep-nao" value="2">
                <label for="pneuStep-nao">Não</label>
                <input type="radio" name="pneuStep" id="pneuStep-nav" value="3">
                <label for="pneuStep-nav">NAV</label>
                </div>
            </div>
                <br>
            <label for="macaco">Macaco</label>
            <div class="opcoes-macaco">
                <div>
                <input type="radio" name="macaco" id="macaco-sim" value="1" checked>
                <label for="macaco-sim">Sim</label>
                <input type="radio" name="macaco" id="macaco-nao" value="2">
                <label for="macaco-nao">Não</label>
                <input type="radio" name="macaco" id="macaco-nav" value="3">
                <label for="macaco-nav">NAV</label>
                </div>
            </div>
                <br>
            <label for="triangulo">Triangulo Refletivo</label>
            <div class="opcoes-triangulo">
                <div>
                <input type="radio" name="triangulo" id="triangulo-sim" value="1" checked>
                <label for="triangulo-sim">Sim</label>
                <input type="radio" name="triangulo" id="triangulo-nao" value="2">
                <label for="triangulo-nao">Não</label>
                <input type="radio" name="triangulo" id="triangulo-nav" value="3">
                <label for="triangulo-nav">NAV</label>
                </div>
            </div>
                <br>
            <label for="chaveRodas">Chave de Rodas</label>
            <div class="opcoes-chaveRodas">
                <div>
                <input type="radio" name="chaveRodas" id="chaveRodas-sim" value="1" checked>
                <label for="chaveRodas-sim">Sim</label>
                <input type="radio" name="chaveRodas" id="chaveRodas-nao" value="2">
                <label for="chaveRodas-nao">Não</label>
                <input type="radio" name="chaveRodas" id="chaveRodas-nav" value="3">
                <label for="chaveRodas-nav">NAV</label>
                </div>
            </div>
                <br>
            <label for="piscaSeta">Pisca Seta</label>
            <div class="opcoes-piscaSeta">
                <div>
                <input type="radio" name="piscaSeta" id="piscaSeta-sim" value="1" checked>
                <label for="piscaSeta-sim">Sim</label>
                <input type="radio" name="piscaSeta" id="piscaSeta-nao" value="2">
                <label for="piscaSeta-nao">Não</label>
                <input type="radio" name="piscaSeta" id="piscaSeta-nav" value="3">
                <label for="piscaSeta-nav">NAV</label>
                </div>
            </div>
                <br>
            <label for="piscaAlerta">Pisca Alerta</label>
            <div class="opcoes-piscaAlerta">
                <div>
                <input type="radio" name="piscaAlerta" id="piscaAlerta-sim" value="1" checked>
                <label for="piscaAlerta-sim">Sim</label>
                <input type="radio" name="piscaAlerta" id="piscaAlerta-nao" value="2">
                <label for="piscaAlerta-nao">Não</label>
                <input type="radio" name="piscaAlerta" id="piscaAlerta-nav" value="3">
                <label for="piscaAlerta-nav">NAV</label>
                </div>
            </div>
                <br>
            <label for="giroflex">Giroflex</label>
            <div class="opcoes-giroflex">
                <div>
                <input type="radio" name="giroflex" id="giroflex-sim" value="1" checked>
                <label for="giroflex-sim">Sim</label>
                <input type="radio" name="giroflex" id="giroflex-nao" value="2">
                <label for="giroflex-nao">Não</label>
                <input type="radio" name="giroflex" id="giroflex-nav" value="3">
                <label for="giroflex-nav">NAV</label>
                </div>
            </div>
                <br>
            <label for="highLight">High-Light</label>
            <div class="opcoes-highLight">
                <div>
                <input type="radio" name="highLight" id="highLight-sim" value="1" checked>
                <label for="highLight-sim">Sim</label>
                <input type="radio" name="highLight" id="highLight-nao" value="2">
                <label for="highLight-nao">Não</label>
                <input type="radio" name="highLight" id="highLight-nav" value="3">
                <label for="highLight-nav">NAV</label>
                </div>
            </div>
                <br>
            <label for="outroVeiculos">Outros Itens de Veículos</label>
            <div class="opcoes-outroVeiculos">
                <div>
                <input type="radio" name="outroVeiculos" id="outroVeiculos-sim" value="1" checked>
                <label for="outroVeiculos-sim">Sim</label>
                <input type="radio" name="outroVeiculos" id="outroVeiculos-nao" value="2">
                <label for="outroVeiculos-nao">Não</label>
                <input type="radio" name="outroVeiculos" id="outroVeiculos-nav" value="3">
                <label for="outroVeiculos-nav">NAV</label>
                </div>
            </div>
                <br>
        </div>

        <div class="rh">
            <div class="barra">
                <h1>Recursos Humanos </h1>
            </div>
            <label for="treinamentoCapacitacao">Treinamento e Capacitação</label>
            <div class="opcoes-treinamentoCapacitacao">
                <div>
                <input type="radio" name="treinamentoCapacitacao" id="treinamentoCapacitacao-sim" value="1" checked>
                <label for="treinamentoCapacitacao-sim">Sim</label>
                <input type="radio" name="treinamentoCapacitacao" id="treinamentoCapacitacao-nao" value="2">
                <label for="treinamentoCapacitacao-nao">Não</label>
                <input type="radio" name="treinamentoCapacitacao" id="treinamentoCapacitacao-nav" value="3">
                <label for="treinamentoCapacitacao-nav">NAV</label>
                </div>
            </div>
                <br>
            <label for="idFuncionarios">Identificação dos Funcionários</label>
                <div class="opcoes-idFuncionarios">
                <div>
                <input type="radio" name="idFuncionarios" id="idFuncionarios-sim" value="1" checked>
                <label for="idFuncionarios-sim">Sim</label>
                <input type="radio" name="idFuncionarios" id="idFuncionarios-nao" value="2">
                <label for="idFuncionarios-nao">Não</label>
                <input type="radio" name="idFuncionarios" id="idFuncionarios-nav" value="3">
                <label for="idFuncionarios-nav">NAV</label>
                </div>
                <br>
        </div>
        <div class="avaliacaoGeralInspec"> 
        <div class="opcoes-avaliacaoGeralInspec">
                <div>
                <input type="radio" name="avaliacaoGeralInspec" id="avaliacaoGeralInspec-total" value="total" >
                <label for="avaliacaoGeralInspec-total">Paralização Total da Atividade</label>
                <input type="radio" name="avaliacaoGeralInspec" id="avaliacaoGeralInspec-parcial"  value="parcial">
                <label for="avaliacaoGeralInspec-parcial">Paralização Parcial da Atividade</label>
                <input type="radio" name="avaliacaoGeralInspec" id="avaliacaoGeralInspec-Sem" value="sem_paralização">
                <label for="avaliacaoGeralInspec-Sem">Sem Paralização da Atividade</label>
                </div>
      
        </div>
        </div>
        </div>
        <div class="observacao">
            <div class="barra">
                <h1>Observação</h1>
            </div>
            <label for="observcao">Obs</label>
            <textarea name="observacao" id="observacao" cols="30" rows="10"></textarea>
        </div>
        </div>
        
        <div class="assInspetor">
            <div class="barra">
                <h1>Assinatura do Inspetor</h1>
            </div>
            <label for="assInspetor">Ass:<label>
            <textarea name="assInspetor" id="assInspetor" cols="30" rows="10"></textarea>
        </div>
        <div>
        <input  class="btn-log" type="submit" value="Entrar">
        </div>

    </form>


</body>
</html>
</div>