<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
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
            <h1>Método de trabalho</h1>
            <label for="despacho">Comunicação com o Despacho</label>
            <label for="despacho">Sim</label>
            <input type="radio" name="despacho" id="despacho" value="1"checked >
            <label for="despacho"> Não </label>
            <input type="radio" name="despacho" id="despacho" value="2">
            <label for="despacho">NAV</label>
            <input type="radio" name="despacho" id="despacho" value="3">
                <br>
            <label for="equipamentoOperado">Equipamentos Operados (desligado, blqueado, etc.)</label>
            <label for="equipamentoOperado">Sim</label>
            <input type="radio" name="equipamentoOperado" id="equipamentoOperado" value="1" checked>
            <label for="equipamentoOperado">Não</label>
            <input type="radio" name="equipamentoOperado" id="equipamentoOperado" value="2">
            <label for="equipamentoOperado">NAV</label>
            <input type="radio" name="equipamentoOperado" id="equipamentoOperado" value="3">
                <br>
            <label for="sinalizacao">Sinalização do Canteiro de Trabalho</label>
            <label for="sinalizacao">Sim</label>
            <input type="radio" name="sinalizacao" id="sinalizacao" value="1" checked>
            <label for="sinalizacao">Não</label>
            <input type="radio" name="sinalizacao" id="sinalizacao" value="2">
            <label for="sinalizacao">NAV</label>
            <input type="radio" name="sinalizacao" id="sinalizacao" value="3">
                <br>
            <label for="organizacao">Organizacao do Canteiro de Trabalho</label>
            <label for="organizacao">Sim</label>
            <input type="radio" name="organizacao" id="organizacao" value="1" checked>
            <label for="organizacao">Não</label>
            <input type="radio" name="organizacao" id="organizacao" value="2">
            <label for="organizacao">NAV</label>
            <input type="radio" name="organizacao" id="organizacao" value="3">
                <br>
            <label for="aterramento">Aterramento Temporário</label>
            <label for="aterramento">Sim</label>
            <input type="radio" name="aterramento" id="aterramento" value="1" checked>
            <label for="aterramento">Não</label>
            <input type="radio" name="aterramento" id="aterramento" value="2">
            <label for="aterramento">NAV</label>
            <input type="radio" name="aterramento" id="aterramento" value="3">
                <br>
            <label for="amarracao">Amarração de Escadas</label>
            <label for="amarracao">Sim</label>
            <input type="radio" name="amarracao" id="amarracao" value="1" checked>
            <label for="amarracao">Não</label>
            <input type="radio" name="amarracao" id="amarracao" value="2">
            <label for="amarracao">NAV</label>
            <input type="radio" name="amarracao" id="amarracao" value="3">
                <br>
            <label for="homem">Homem como Base de Apoio no pé da Escada</label>
            <label for="homem">Sim</label>
            <input type="radio" name="homem" id="homem" value="1" checked>
            <label for="homem">Não</label>
            <input type="radio" name="homem" id="homem" value="2">
            <label for="homem">NAV</label>
            <input type="radio" name="homem" id="homem" value="3">
                <br>
            <label for="utilizacao">Utilização de Carretilha e Sacol</label>
            <label for="utilizacao">Sim</label>
            <input type="radio" name="utilizacao" id="utilizacao" value="1" checked >
            <label for="utilizacao">Não</label>
            <input type="radio" name="utilizacao" id="utilizacao" value="2" >
            <label for="utilizacao">NAV</label>
            <input type="radio" name="utilizacao" id="utilizacao" value="3" >
                <br>
            <label for="bloqueio">Bloqueio Mecânico de Acionamento</label>
            <label for="bloqueio">Sim</label>
            <input type="radio" name="bloqueio" id="bloqueio" value="1" checked>
            <label for="bloqueio">Não</label>
            <input type="radio" name="bloqueio" id="bloqueio" value="2">
            <label for="bloqueio">NAV</label>
            <input type="radio" name="bloqueio" id="bloqueio" value="3">
                <br>
            <label for="sinalizacaoVida">Sinalização de Vida</label>
            <label for="sinalizacaoVida">Sim</label>
            <input type="radio" name="sinalizacaoVida" id="sinalizacaoVida" value="1" checked >
            <label for="sinalizacaoVida">Não</label>
            <input type="radio" name="sinalizacaoVida" id="sinalizacaoVida" value="2" >
            <label for="sinalizacaoVida">NAV</label>
            <input type="radio" name="sinalizacaoVida" id="sinalizacaoVida" value="3" >
                <br>
            <label for="procedimento">Procedimentos de Trabalho Estão Sendo Seguidos</label>
            <label for="procedimento">Sim</label>
            <input type="radio" name="procedimento" id="procedimento" value="1" checked>
            <label for="procedimento">Não</label>
            <input type="radio" name="procedimento" id="procedimento" value="2">
            <label for="procedimento">NAV</label>
            <input type="radio" name="procedimento" id="procedimento" value="3">
                <br>
            <label for="outrosMetodos">Outros Itens de Métodos de Trabalho</label>
            <label for="outrosMetodos">Sim</label>
            <input type="radio" name="outrosMetodos" id="outrosMetodos" value="1" checked>
            <label for="outrosMetodos">Não</label>
            <input type="radio" name="outrosMetodos" id="outrosMetodos" value="2">
            <label for="outrosMetodos">NAV</label>
            <input type="radio" name="outrosMetodos" id="outrosMetodos" value="3">

        </div>

        <div class="planejamento-servico">
            <h1>Planejamento de Serviço</h1>
            <label for="avaliacao">Avaliação das Condições do Local de Trabalho</label>
            <label for="avaliacao">Sim</label>
            <input type="radio" name="avaliacao" id="avaliacao" value="1" checked>
            <label for="avaliacao">Não</label>
            <input type="radio" name="avaliacao" id="avaliacao" value="2">
            <label for="avaliacao">NAV</label>
            <input type="radio" name="avaliacao" id="avaliacao" value="3">
                <br>
            <label for="procedimentoTrabalho">Existe Procedimento de Trablaho para as Tarefas</label>
            <label for="procedimentoTrabalho">Sim</label>
            <input type="radio" name="procedimentoTrabalho" id="procedimentoTrabalho" value="1" checked>
            <label for="procedimentoTrabalho">Não</label>
            <input type="radio" name="procedimentoTrabalho" id="procedimentoTrabalho" value="2">
            <label for="procedimentoTrabalho">NAV</label>
            <input type="radio" name="procedimentoTrabalho" id="procedimentoTrabalho" value="3">
                <br>
            <label for="avaliacaoCondicoes">Avaliação das Condições Fisicas de Postes e Escadas</label>
            <label for="avaliacaoCondicoes">Sim</label>
            <input type="radio" name="avaliacaoCondicoes" id="avaliacaoCondicoes" value="1" checked>
            <label for="avaliacaoCondicoes">Não</label>
            <input type="radio" name="avaliacaoCondicoes" id="avaliacaoCondicoes" value="2">
            <label for="avaliacaoCondicoes">NAV</label>
            <input type="radio" name="avaliacaoCondicoes" id="avaliacaoCondicoes" value="3">
                <br>
            <label for="preenchimento">Preenchimento da Análise Preliminar de Risco (APR)</label>
            <label for="preenchimento">Sim</label>
            <input type="radio" name="preenchimento" id="prenchimento" value="1" checked>
            <label for="preenchimento">Não</label>
            <input type="radio" name="preenchimento" id="prenchimento" value="2">
            <label for="preenchimento">NAV</label>
            <input type="radio" name="preenchimento" id="prenchimento" value="3">
                <br>
            <label for="mpts">MPT's e CTI's<p>Disponível/utilização/atualizações</p></label>    
            <label for="mpts">Sim</label>
            <input type="radio" name="mpts" id="mpts" value="1" checked>
            <label for="mpts">Não</label>
            <input type="radio" name="mpts" id="mpts" value="2">
            <label for="mpts">NAV</label>
            <input type="radio" name="mpts" id="mpts" value="3">
                <br>
            <label for="outroPlanejamento">Outros Itens de Planejamento de Serviço</label>
            <label for="outroPlanejamento">Sim</label>
            <input type="radio" name="outroPlanejamento" id="outroPlanejamento" value="1" checked>
            <label for="outroPlanejamento">Não</label>
            <input type="radio" name="outroPlanejamento" id="outroPlanejamento" value="2">
            <label for="outroPlanejamento">NAV</label>
            <input type="radio" name="outroPlanejamento" id="outroPlanejamento" value="3">
        </div>

        <div class="ferramentas">
            <h1>Ferramentas, Equipamentos e Materiais</h1>
            <label for="utilizacaoFerramentas">Utilização de Equipamentos Ferramentas e Materiais</label>
            <label for="utilizacaoFerramentas">Sim</label>
            <input type="radio" name="utilizacaoFerramentas" id="utilizacaoFerramentas" value="1" checked>
            <label for="utilizacaoFerramentas">Não</label>
            <input type="radio" name="utilizacaoFerramentas" id="utilizacaoFerramentas" value="2">
            <label for="utilizacaoFerramentas">NAV</label>
            <input type="radio" name="utilizacaoFerramentas" id="utilizacaoFerramentas" value="3">
                <br>
            <label for="estadoConservacao">Estado de Conservação de Ferramentas e Materiais</label>
            <label for="estadoConservacao">Sim</label>
            <input type="radio" name="estadoConservacao" id="estadoConservacao" value="1" checked>
            <label for="estadoConservacao">Não</label>
            <input type="radio" name="estadoConservacao" id="estadoConservacao" value="2">
            <label for="estadoConservacao">NAV</label>
            <input type="radio" name="estadoConservacao" id="estadoConservacao" value="3">
        </div>
        <div class="epc"> 
            <h1>E.P.C</h1>
            <span>Uso de:</span>
                <br>
            <label for="coneFita">Cone, Fita, Grade, Bandeirola</label>
            <label for="coneFita">Sim</label>
            <input type="radio" name="coneFita" id="coneFita" value="1" checked>
            <label for="coneFita">Não</label>
            <input type="radio" name="coneFita" id="coneFita" value="2">
            <label for="coneFita">NAV</label>
            <input type="radio" name="coneFita" id="coneFita" value="3">
                <br>
            <label for="aterramentoTemporario">Aterramento Temporário</label>
            <label for="aterramentoTemporario">Sim</label>
            <input type="radio" name="aterramentoTemporario" id="aterramentoTemporario" value="1" checked>
            <label for="aterramentoTemporario">Não</label>
            <input type="radio" name="aterramentoTemporario" id="aterramentoTemporario" value="2">
            <label for="aterramentoTemporario">NAV</label>
            <input type="radio" name="aterramentoTemporario" id="aterramentoTemporario" value="3">
                <br>
            <label for="loadBuste">Load Buster</label>
            <label for="loadBuste">Sim</label>
            <input type="radio" name="loadBuste" id="loadBuste" value="1" checked>
            <label for="loadBuste">Não</label>
            <input type="radio" name="loadBuste" id="loadBuste" value="2">
            <label for="loadBuste">NAV</label>
            <input type="radio" name="loadBuste" id="loadBuste" value="3">
                <br>
            <label for="VaraManobra">Vara de Manobra/Telescópio</label>
            <label for="VaraManobra">Sim</label>
            <input type="radio" name="VaraManobra" id="VaraManobra" value="1" checked>
            <label for="VaraManobra">Não</label>
            <input type="radio" name="VaraManobra" id="VaraManobra" value="2">
            <label for="VaraManobra">NAV</label>
            <input type="radio" name="VaraManobra" id="VaraManobra" value="3">
                <br>
            <label for="detectorTensao">Detector de Tensão</label>
            <label for="detectorTensao">Sim</label>
            <input type="radio" name="detectorTensao" id="detectorTensao" value="1" checked>
            <label for="detectorTensao">Não</label>
            <input type="radio" name="detectorTensao" id="detectorTensao" value="2">
            <label for="detectorTensao">NAV</label>
            <input type="radio" name="detectorTensao" id="detectorTensao" value="3">
                <br>
            <label for="detectorGases">Detector de Gases</label>
            <label for="detectorGases">Sim</label>
            <input type="radio" name="detectorGases" id="detectorGases" value="1" checked>
            <label for="detectorGases">Não</label>
            <input type="radio" name="detectorGases" id="detectorGases" value="2">
            <label for="detectorGases">NAV</label>
            <input type="radio" name="detectorGases" id="detectorGases" value="3">
                <br>
            <label for="ensaioDieletrico">Ensaio Dielétrico</label>
            <label for="ensaioDieletrico">Sim</label>
            <input type="radio" name="ensaioDieletrico" id="ensaioDieletrico" value="1" checked>
            <label for="ensaioDieletrico">Não</label>
            <input type="radio" name="ensaioDieletrico" id="ensaioDieletrico" value="2">
            <label for="ensaioDieletrico">NAV</label>
            <input type="radio" name="ensaioDieletrico" id="ensaioDieletrico" value="3">
                <br>
            <label for="outrosEPC">Outros Itens de EPC's</label>
            <label for="outrosEPC">Sim</label>
            <input type="radio" name="outrosEPC" id="outrosEPC" value="1" checked>
            <label for="outrosEPC">Não</label>
            <input type="radio" name="outrosEPC" id="outrosEPC" value="2">
            <label for="outrosEPC">NAV</label>
            <input type="radio" name="outrosEPC" id="outrosEPC" value="3">
        </div>

        <div class="epi">
            <h1>E.P.I</h1>
            <span>Uso de:</span>
                <br>
            <label for="capacete"> capacete </label>
            <label for="capacete">Sim</label>
            <input type="radio" name="capacete" id="capacete" value="1" checked>
            <label for="capacete">Não</label>
            <input type="radio" name="capacete" id="capacete" value="2">
            <label for="capacete">NAV</label>
            <input type="radio" name="capacete" id="capacete" value="3">
                <br>
            <label for="capaceteViseira">CApacete com Viseira</label>
            <label for="capaceteViseira">Sim</label>
            <input type="radio" name="capaceteViseira" id="capaceteViseira" value="1" checked>
            <label for="capaceteViseira">Não</label>
            <input type="radio" name="capaceteViseira" id="capaceteViseira" value="2">
            <label for="capaceteViseira">NAV</label>
            <input type="radio" name="capaceteViseira" id="capaceteViseira" value="3">
                <br>
            <label for="conjuto">Conjuto Trava Quedas</label>
            <label for="conjuto">Sim</label>
            <input type="radio" name="conjuto" id="conjuto" value="1" checked>
            <label for="conjuto">Não</label>
            <input type="radio" name="conjuto" id="conjuto" value="2">
            <label for="conjuto">NAV</label>
            <input type="radio" name="conjuto" id="conjuto" value="3">
                <br>
            <label for="outrosEPI"> Outros Itens de EPI's</label>
            <label for="outrosEPI">Sim</label>
            <input type="radio" name="outrosEPI" id="outrosEPI" value="1" checked>
            <label for="outrosEPI">Não</label>
            <input type="radio" name="outrosEPI" id="outrosEPI" value="2">
            <label for="outrosEPI">NAV</label>
            <input type="radio" name="outrosEPI" id="outrosEPI" value="3">
                <br>
        </div>
        <div class="veiculo">
            <h1>Veículo</h1>
            <label for="veiculoIdentificados">Veículos Identificados</label>
            <label for="veiculoIdentificados">Sim</label>
            <input type="radio" name="veiculoIdentificados" id="veiculoIdentificados" value="1" checked>
            <label for="veiculoIdentificados">Não</label>
            <input type="radio" name="veiculoIdentificados" id="veiculoIdentificados" value="2">
            <label for="veiculoIdentificados">NAV</label>
            <input type="radio" name="veiculoIdentificados" id="veiculoIdentificados" value="3">
                <br>
            <label for="limpezaConservacao">Limpeza e Estado de Conservação</label>
            <label for="limpezaConservacao">Sim</label>
            <input type="radio" name="limpezaConservacao" id="limpezaConservacao" value="1" checked>
            <label for="limpezaConservacao">Não</label>
            <input type="radio" name="limpezaConservacao" id="limpezaConservacao" value="2">
            <label for="limpezaConservacao">NAV</label>
            <input type="radio" name="limpezaConservacao" id="limpezaConservacao" value="3">
                <br>
            <label for="organizacaoMateriais">Organização de Materiais e Equipamentos</label>
            <label for="organizacaoMateriais">Sim</label>
            <input type="radio" name="organizacaoMateriais" id="organizacaoMateriais" value="1" checked>
            <label for="organizacaoMateriais">Não</label>
            <input type="radio" name="organizacaoMateriais" id="organizacaoMateriais" value="2">
            <label for="organizacaoMateriais">NAV</label>
            <input type="radio" name="organizacaoMateriais" id="organizacaoMateriais" value="3">
                <br>
            <label for="limireTransporte">Limite de Transporte de Passageiros</label>
            <label for="limireTransporte">Sim</label>
            <input type="radio" name="limireTransporte" id="limireTransporte" value="1" checked>
            <label for="limireTransporte">Não</label>
            <input type="radio" name="limireTransporte" id="limireTransporte" value="2">
            <label for="limireTransporte">NAV</label>
            <input type="radio" name="limireTransporte" id="limireTransporte" value="3">
                <br>
            <label for="calcamento">Calçamento do Veículo -1/4 do Pneu</label>
            <label for="calcamento">Sim</label>
            <input type="radio" name="calcamento" id="calcamento" value="1" checked>
            <label for="calcamento">Não</label>
            <input type="radio" name="calcamento" id="calcamento" value="2">
            <label for="calcamento">NAV</label>
            <input type="radio" name="calcamento" id="calcamento" value="3">
                <br>
            <label for="documentacao">Documentação</label>
            <label for="documentacao">Sim</label>
            <input type="radio" name="documentacao" id="documentacao" value="1" checked>
            <label for="documentacao">Não</label>
            <input type="radio" name="documentacao" id="documentacao" value="2">
            <label for="documentacao">NAV</label>
            <input type="radio" name="documentacao" id="documentacao" value="3">
                <br>
            <label for="calcoSapatos">Calço para Sapatos Estabilizadoras(Guindauto e Cesta)</label>
            <label for="calcoSapatos">Sim</label>
            <input type="radio" name="calcoSapatos" id="calcoSapatos" value="1" checked>
            <label for="calcoSapatos">Não</label>
            <input type="radio" name="calcoSapatos" id="calcoSapatos" value="2">
            <label for="calcoSapatos">NAV</label>
            <input type="radio" name="calcoSapatos" id="calcoSapatos" value="3">
                <br>
            <label for="extintor">Extintor</label>
            <label for="extintor">Sim</label>
            <input type="radio" name="extintor" id="extintor" value="1" checked>
            <label for="extintor">Não</label>
            <input type="radio" name="extintor" id="extintor" value="2">
            <label for="extintor">NAV</label>
            <input type="radio" name="extintor" id="extintor" value="3">
                <br>
            <label for="pneus">Pneus</label>
            <label for="pneus">Sim</label>
            <input type="radio" name="pneus" id="pneus" value="1" checked>
            <label for="pneus">Não</label>
            <input type="radio" name="pneus" id="pneus" value="2">
            <label for="pneus">NAV</label>
            <input type="radio" name="pneus" id="pneus" value="3">
                <br>
            <label for="pneuStep">Pneu-Step</label>
            <label for="pneuStep">Sim</label>
            <input type="radio" name="pneuStep" id="pneuStep" value="1" checked>
            <label for="pneus">Não</label>
            <input type="radio" name="pneuStep" id="pneuStep" value="2">
            <label for="pneuStep">NAV</label>
            <input type="radio" name="pneuStep" id="pneuStep" value="3">
                <br>
            <label for="macaco">Macaco</label>
            <label for="macaco">Sim</label>
            <input type="radio" name="macaco" id="macaco" value="1" checked>
            <label for="macaco">Não</label>
            <input type="radio" name="macaco" id="macaco" value="2">
            <label for="macaco">NAV</label>
            <input type="radio" name="macaco" id="macaco" value="3">
                <br>
            <label for="triangulo">Triangulo Refletivo</label>
            <label for="triangulo">Sim</label>
            <input type="radio" name="triangulo" id="triangulo" value="1" checked>
            <label for="triangulo">Não</label>
            <input type="radio" name="triangulo" id="triangulo" value="2">
            <label for="triangulo">NAV</label>
            <input type="radio" name="triangulo" id="triangulo" value="3">
                <br>
            <label for="chaveRodas">Chave de Rodas</label>
            <label for="chaveRodas">Sim</label>
            <input type="radio" name="chaveRodas" id="chaveRodas" value="1" checked>
            <label for="chaveRodas">Não</label>
            <input type="radio" name="chaveRodas" id="chaveRodas" value="2">
            <label for="chaveRodas">NAV</label>
            <input type="radio" name="chaveRodas" id="chaveRodas" value="3">
                <br>
            <label for="piscaSeta">Pisca Seta</label>
            <label for="piscaSeta">Sim</label>
            <input type="radio" name="piscaSeta" id="piscaSeta" value="1" checked>
            <label for="piscaSeta">Não</label>
            <input type="radio" name="piscaSeta" id="piscaSeta" value="2">
            <label for="piscaSeta">NAV</label>
            <input type="radio" name="piscaSeta" id="piscaSeta" value="3">
                <br>
            <label for="piscaAlerta">Pisca Alerta</label>
            <label for="piscaAlerta">Sim</label>
            <input type="radio" name="piscaAlerta" id="piscaAlerta" value="1" checked>
            <label for="piscaAlerta">Não</label>
            <input type="radio" name="piscaAlerta" id="piscaAlerta" value="2">
            <label for="piscaAlerta">NAV</label>
            <input type="radio" name="piscaAlerta" id="piscaAlerta" value="3">
                <br>
            <label for="giroflex">Giroflex</label>
            <label for="giroflex">Sim</label>
            <input type="radio" name="giroflex" id="giroflex" value="1" checked>
            <label for="giroflex">Não</label>
            <input type="radio" name="giroflex" id="giroflex" value="2">
            <label for="giroflex">NAV</label>
            <input type="radio" name="giroflex" id="giroflex" value="3">
                <br>
            <label for="highLight">High-Light</label>
            <label for="highLight">Sim</label>
            <input type="radio" name="highLight" id="highLight" value="1" checked>
            <label for="highLight">Não</label>
            <input type="radio" name="highLight" id="highLight" value="2">
            <label for="highLight">NAV</label>
            <input type="radio" name="highLight" id="highLight" value="3">
                <br>
            <label for="outroVeiculos">Outros Itens de Veículos</label>
            <label for="outroVeiculos">Sim</label>
            <input type="radio" name="outroVeiculos" id="outroVeiculos" value="1" checked>
            <label for="outroVeiculos">Não</label>
            <input type="radio" name="outroVeiculos" id="outroVeiculos" value="2">
            <label for="outroVeiculos">NAV</label>
            <input type="radio" name="outroVeiculos" id="outroVeiculos" value="3">
                <br>
        </div>

        <div class="rh">
            <h1>Recursos Humanos </h1>
            <label for="treinamentoCapacitacao">Treinamento e Capacitação</label>
            <label for="treinamentoCapacitacao">Sim</label>
            <input type="radio" name="treinamentoCapacitacao" id="treinamentoCapacitacao" value="1" checked>
            <label for="treinamentoCapacitacao">Não</label>
            <input type="radio" name="treinamentoCapacitacao" id="treinamentoCapacitacao" value="2">
            <label for="treinamentoCapacitacao">NAV</label>
            <input type="radio" name="treinamentoCapacitacao" id="treinamentoCapacitacao" value="3">
                <br>
            <label for="idFuncionarios">Identificação dos Funcionários</label>
            <label for="idFuncionarios">Sim</label>
            <input type="radio" name="idFuncionarios" id="idFuncionarios" value="1" checked>
            <label for="idFuncionarios">Não</label>
            <input type="radio" name="idFuncionarios" id="idFuncionarios" value="2">
            <label for="idFuncionarios">NAV</label>
            <input type="radio" name="idFuncionarios" id="idFuncionarios" value="3">
                <br>
        </div>
        <div class="avaliacaoGeralInspec">
            <h1>Avaliação Geral da Inspeção</h1>    
            <label for="avaliacaoGeralInspec">Paralização Total da Atividade </label>
            <input type="checkbox" name="avaliacaoGeralInspec" id="avaliacaoGeralInspec">
            <label for="avaliacaoGeralInspec">Paralização Parcial da Atividade</label>
            <input type="checkbox" name="avaliacaoGeralInspec" id="avaliacaoGeralInspec">
            <label for="avaliacaoGeralInspec">Sem Paralização da Atividade</label>
            <input type="checkbox" name="avaliacaoGeralInspec" id="avaliacaoGeralInspec">
        </div>

        <div class="observacao">
            <h1>Observação</h1>
            <label for="observacao">Obs</label>
            <textarea name="observacao" id="observacao" cols="30" rows="10"></textarea>
        </div>

        <div class="assInspetor">
            <h1>Assinatura do Inspetor</h1>
            <label for="assInspetor">Ass:</label>
            <textarea name="assInspetor" id="assInspetor" cols="30" rows="10"></textarea>
        </div>
                    <button type="submit" value="Enviar"></button>
    </form>




</body>
</html>