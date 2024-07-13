<div id="aba1" class="aba" style="display: block; margin-top: 0px; border-top-width: 0px;">
    <div id="FILTRO_AG">

        <form action="/consulta_touro/listar_ag.php" method="POST" id="f_filtro" name="f_filtro" onsubmit="return false;">

            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#E8E8FF">
                <tbody>
                    <tr>
                        <td>
                            <table width="100%" border="0" align="center">
                                <tbody>
                                    <tr>
                                        <td width="31%" bgcolor="#0C3A5B">
                                            <font color="#FFFFFF"> Raça::</font>
                                        </td>
                                        <td width="34%" bgcolor="#0C3A5B">
                                            <font color="#FFFFFF">Central</font>
                                        </td>
                                        <td width="35%" bgcolor="#0C3A5B">
                                            <font color="#FFFFFF">Reprodução Programada </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left">
                                            <font size="2">
                                                <select name="FILTRO[IDENTIFICACAO][RC]" id="FILTRO_IDENTIFICACAO_RC" size="1" class="form" onchange="AlterarID(value);mostraMsgRaca(this.value);">
                                                    <option value="">Selecione a raça...</option>
                                                    <option value="1">Nelore</option>
                                                    <option value="2">Guzerá</option>
                                                    <option value="4">Brahman</option>
                                                    <!--<option value="7">Gir</option>-->
                                                    <option value="8">Tabapuã</option>
                                                    <option value="19">Nelore CL</option>
                                                </select>
                                            </font>
                                            <font size="2">&nbsp; </font>
                                            <input name="CGA" type="hidden" value="">
                                            <input name="ABA" type="hidden" value="">
                                            <input name="PAGE" id="PAGE" type="hidden" value="">
                                            <input name="NR" id="NR" type="hidden" value="15">
                                            <input name="TMOV" type="hidden">
                                        </td>
                                        <td align="left">
                                            <select name="FILTRO[CENTRAL][ID_CENTRAL]" size="1" class="form" id="select">
                                                <option value="">&nbsp;</option>
                                                <option value="-1">Todas as Centrais</option>
                                                <option value="1">ABS</option>
                                                <option value="2">Alta Genetics</option>
                                                <option value="3">Jacarezinho Genetics</option>
                                                <option value="4">Jóia da Índia</option>
                                                <option value="5">CRV</option>
                                                <option value="6">Cebran</option>
                                                <option value="7">Sembra</option>
                                                <option value="8">Semex</option>
                                                <option value="9">Sersia Brasil</option>
                                                <option value="10">VR</option>
                                                <option value="11">Bela Vista</option>
                                                <option value="12">Nova Índia</option>
                                                <option value="13">MSGEN</option>
                                                <option value="14">Genex Brasil</option>
                                                <option value="15">Araucária Genética Bovina</option>
                                                <option value="16">Tairana</option>
                                                <option value="17">Axelgen Inseminação Artificial</option>
                                                <option value="18">J.D. Hudgins </option>
                                                <option value="19">Yakult</option>
                                                <option value="20">Multigenes - Bolívia</option>
                                                <option value="21">Naviraí</option>
                                                <option value="22">Berrante</option>
                                                <option value="23">Maya Genética</option>
                                                <option value="24">CSA Genética Bovina LTDA</option>
                                                <option value="25">Seleon Biotecnologia</option>
                                                <option value="26">Top Bulls Semen Technology</option>
                                                <option value="27">Frutab S/A</option>
                                                <option value="28">Select Sires do Brasil</option>
                                                <option value="29">Premium Gen - Pecuária Sustentável</option>
                                                <option value="30">Central Uberaba</option>
                                                <option value="31">AG Brasil</option>
                                            </select>
                                        </td>
                                        <td align="left">
                                            <select name="FILTRO[RP][ANO]" size="1" class="form" id="select">
                                                <option value="">&nbsp;</option>
                                                <option value="-1">Todas as RP</option>
                                                <option value="2024">2024</option>
                                                <option value="2023">2023</option>
                                                <option value="2022">2022</option>
                                                <option value="2021">2021</option>
                                                <option value="2020">2020</option>
                                                <option value="2019">2019</option>
                                                <option value="2018">2018</option>
                                                <option value="2017">2017</option>
                                                <option value="2016">2016</option>
                                                <option value="2015">2015</option>
                                                <option value="2014">2014</option>
                                                <option value="2013">2013</option>
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr bgcolor="#0C3A5B">
                        <td><a href="javascript:expand(0)">
                                <font color="#FFFFFF">.::Filtro por Animal::..</font>
                            </a></td>
                    </tr>
                    <tr id="e0">
                        <td>
                            <table width="100%" border="0" align="center">
                                <tbody>
                                    <tr>
                                        <td height="26">
                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                <tbody>
                                                    <tr>
                                                        <td width="100">
                                                            <font size="2">Série:
                                                                <input name="FILTRO[IDENTIFICACAO][SERIE]" type="text" class="form" id="FILTRO_IDENTIFICACAO_SERIE" size="4" maxlength="4" value="" spellcheck="false" data-ms-editor="true">
                                                            </font>
                                                        </td>
                                                        <td width="100">
                                                            <font size="2">RGN
                                                                <input name="FILTRO[IDENTIFICACAO][RGN]" type="text" class="form" id="FILTRO[IDENTIFICACAO][RGN]" size="6" maxlength="16" value="" spellcheck="false" data-ms-editor="true">
                                                            </font>
                                                        </td>
                                                        <td width="100">
                                                            <font size="2">RGD
                                                                <input name="FILTRO[IDENTIFICACAO][RGD]" type="text" class="form" id="FILTRO[IDENTIFICACAO][RGD]" size="6" maxlength="16" value="" spellcheck="false" data-ms-editor="true">
                                                            </font>
                                                        </td>
                                                        <td>
                                                            <font size="2">Nome:
                                                                <input name="FILTRO[IDENTIFICACAO][NOME]" type="text" class="form" id="FILTRO[IDENTIFICACAO][NOME]" size="50" maxlength="20" value="" spellcheck="false" data-ms-editor="true">
                                                            </font>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr bgcolor="#0C3A5B">
                        <td><a href="javascript:expand(1)">
                                <font color="#FFFFFF">.::Filtro por Grupo::..</font>
                            </a></td>
                    </tr>
                    <tr id="e1">
                        <td>
                            <table width="95%" border="0" align="center">
                                <tbody>
                                    <tr>
                                        <td width="84" height="7" valign="top">
                                            <div align="right">
                                                <font size="2">Categoria:</font>
                                            </div>
                                        </td>
                                        <td width="98">
                                            <div align="left">
                                                <font size="2">
                                                    <select name="FILTRO[IDENTIFICACAO][CAT]" size="1" class="form" id="categoria">
                                                        <option value="">Todas</option>
                                                        <option value="CL">CL</option>
                                                        <option value="LA">LA</option>
                                                        <option value="PA">PA</option>
                                                        <option value="PC">PC</option>
                                                        <option value="PO">PO</option>
                                                        <option value="PI">PI</option>
                                                    </select>
                                                </font>
                                            </div>
                                        </td>
                                        <td width="143">
                                            <div align="right">
                                                <font size="2">Situação do Animal:</font>
                                            </div>
                                        </td>
                                        <td width="102">
                                            <div align="left">
                                                <font size="2">
                                                    <select name="FILTRO[IDENTIFICACAO][ATIVIDADE]" size="1" class="form">
                                                        <option value="A">Ativos</option>
                                                        <option value="I">Inativos</option>
                                                        <option value="" selected="">Todas</option>
                                                    </select>
                                                </font>
                                            </div>
                                        </td>
                                        <td width="134">
                                            <div align="right">
                                                <font size="2">Sexo:</font>
                                            </div>
                                        </td>
                                        <td width="97">
                                            <div align="left">
                                                <font size="2">
                                                    <select name="FILTRO[IDENTIFICACAO][SEXO]" size="1" class="form" id="sexo">
                                                        <!--<option value="">Ambos</option>-->
                                                        <option value="1">Macho</option>
                                                        <!--<option value="2" >F�mea</option>-->
                                                    </select>
                                                </font>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="22">
                                            <div align="right">
                                                <font size="2">Variedade:</font>
                                            </div>
                                        </td>
                                        <td>
                                            <font size="2">
                                                <select name="FILTRO[IDENTIFICACAO][VARIEDADE]" size="1" class="form" id="variedade">
                                                    <option value="">Todos</option>
                                                    <option value="P">Padrão</option>
                                                    <option value="M">Mocho</option>
                                                </select>
                                            </font>
                                        </td>
                                        <td colspan="4">
                                            <div align="center">
                                                <font size="2">Intervalo de Nasc.:
                                                    Data Inicial:
                                                    <input name="FILTRO[IDENTIFICACAO][DT_NASC][INI]" type="text" class="form" id="dt_nasc_ini" size="10" maxlength="10" style="vertical-align:middle" value="" onkeydown="FormataData('dt_nasc_ini', event);" spellcheck="false" data-ms-editor="true">
                                                    <img class="calendario" src="../../../images/calendarIcon.jpg" onclick="abreCalendario('dt_nasc_ini');" title="Selecione a Data" style="vertical-align:middle">
                                                    Data Final:
                                                    <input name="FILTRO[IDENTIFICACAO][DT_NASC][FIN]" type="text" class="form" id="dt_nasc_fim" size="10" maxlength="10" style="vertical-align:middle" value="" onkeydown="FormataData('dt_nasc_fim', event);" spellcheck="false" data-ms-editor="true">
                                                </font>
                                                <font size="2"><img class="calendario" src="../../../images/calendarIcon.jpg" onclick="abreCalendario('dt_nasc_fim');" title="Selecione a Data" style="vertical-align:middle"></font>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr bgcolor="#0C3A5B">
                        <td>
                            <div align="left"><a href="javascript:expand(2)">
                                    <font color="#FFFFFF">:::Genealogia:::</font>
                                </a></div>
                        </td>
                    </tr>
                    <tr id="e2">
                        <td>
                            <table width="95%" border="0" align="center">

                                <tbody>
                                    <tr>
                                        <td width="343">
                                            <font size="2">Série/RGN/RGD do pai:
                                                <input name="FILTRO[IDENTIFICACAO][PAI][SERIE]" type="text" class="form" id="FILTRO[IDENTIFICACAO][SERIE]" value="" size="4" maxlength="4" spellcheck="false" data-ms-editor="true">
                                                /
                                                <input name="FILTRO[IDENTIFICACAO][PAI][RGN]" type="text" class="form" id="rgdp" value="" size="6" maxlength="16" spellcheck="false" data-ms-editor="true">
                                                /
                                                <input name="FILTRO[IDENTIFICACAO][PAI][RGD]" type="text" class="form" id="rdgp" value="" size="6" maxlength="16" spellcheck="false" data-ms-editor="true">
                                            </font>
                                        </td>
                                        <td width="347">
                                            <font size="2">Série/RGN/RGD da mãe:
                                                <input name="FILTRO[IDENTIFICACAO][MAE][SERIE]" type="text" class="form" id="seriem22" value="" size="4" maxlength="4" spellcheck="false" data-ms-editor="true">
                                                /
                                                <input name="FILTRO[IDENTIFICACAO][MAE][RGN]" type="text" class="form" id="rdgm" value="" size="6" maxlength="16" spellcheck="false" data-ms-editor="true">
                                                /
                                                <input name="FILTRO[IDENTIFICACAO][MAE][RGD]" type="text" class="form" id="rgdp2" value="" size="6" maxlength="16" spellcheck="false" data-ms-editor="true">
                                            </font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr bgcolor="#0C3A5B">
                        <td>
                            <div align="left"><a href="javascript:expand(3)">
                                    <font color="#FFFFFF">:::Filtro
                                        por DEPs:::</font>
                                </a></div>
                        </td>
                    </tr>



                    <tr id="e3" style="display: block;">
                        <td colspan="2" valign="top">
                            <table width="700" border="0" cellpadding="0" cellspacing="0">
                                <tbody>
                                    <tr>
                                        <td width="33%" valign="top" align="center">
                                            <table border="0" align="center">
                                                <tbody>
                                                    <tr bgcolor="#C4C4FF">
                                                        <td width="63" align="right" bgcolor="#E8E8FF">
                                                            <div align="right">&nbsp;</div>
                                                        </td>
                                                        <td width="33" class="min_f">
                                                            <div align="center">
                                                                <font size="2">Min</font>
                                                            </div>
                                                        </td>
                                                        <td width="33" class="min_f">
                                                            <div align="center">
                                                                <font size="2">Max</font>
                                                            </div>
                                                        </td>
                                                        <td width="33" class="min_f">
                                                            <div align="center">
                                                                <font size="2">Acur. Min(%)</font>
                                                            </div>
                                                        </td>
                                                        <td width="33" class="min_f">
                                                            <div align="center">
                                                                <font size="2">Top</font>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="mgt_f">
                                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG" id="id_mgt">
                                                                <font size="2"><a href="#mgt" title="mgt">MGT</a></font>
                                                            </div>
                                                        </td>
                                                        <td class="Min_f">
                                                            <input name="FILTRO[DEP][20][1][MIN]" id="MGT_Min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Max_f">
                                                            <input name="FILTRO[DEP][20][1][MAX]" id="MGT_Max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Acur. Min(%)_f">
                                                            <input name="FILTRO[DEP][20][2][ACC_MIN]" id="MGT_Acur. Min(%)" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td>
                                                            <select name="FILTRO[DEP][20][1][TOP]" size="1" class="form" id="MGT_Top" style="width:55px">
                                                                <option value=""></option>
                                                                <option value="1">
                                                                    0.1% </option>
                                                                <option value="5">
                                                                    0.5% </option>
                                                                <option value="10">
                                                                    1% </option>
                                                                <option value="20">
                                                                    2% </option>
                                                                <option value="30">
                                                                    3% </option>
                                                                <option value="40">
                                                                    4% </option>
                                                                <option value="50">
                                                                    5% </option>
                                                                <option value="60">
                                                                    6% </option>
                                                                <option value="70">
                                                                    7% </option>
                                                                <option value="80">
                                                                    8% </option>
                                                                <option value="90">
                                                                    9% </option>
                                                                <option value="100">
                                                                    10% </option>
                                                                <option value="110">
                                                                    11% </option>
                                                                <option value="120">
                                                                    12% </option>
                                                                <option value="130">
                                                                    13% </option>
                                                                <option value="140">
                                                                    14% </option>
                                                                <option value="150">
                                                                    15% </option>
                                                                <option value="160">
                                                                    16% </option>
                                                                <option value="170">
                                                                    17% </option>
                                                                <option value="180">
                                                                    18% </option>
                                                                <option value="190">
                                                                    19% </option>
                                                                <option value="200">
                                                                    20% </option>
                                                                <option value="210">
                                                                    21% </option>
                                                                <option value="220">
                                                                    22% </option>
                                                                <option value="230">
                                                                    23% </option>
                                                                <option value="240">
                                                                    24% </option>
                                                                <option value="250">
                                                                    25% </option>
                                                                <option value="260">
                                                                    26% </option>
                                                                <option value="270">
                                                                    27% </option>
                                                                <option value="280">
                                                                    28% </option>
                                                                <option value="290">
                                                                    29% </option>
                                                                <option value="300">
                                                                    30% </option>
                                                                <option value="310">
                                                                    31% </option>
                                                                <option value="320">
                                                                    32% </option>
                                                                <option value="330">
                                                                    33% </option>
                                                                <option value="340">
                                                                    34% </option>
                                                                <option value="350">
                                                                    35% </option>
                                                                <option value="360">
                                                                    36% </option>
                                                                <option value="370">
                                                                    37% </option>
                                                                <option value="380">
                                                                    38% </option>
                                                                <option value="390">
                                                                    39% </option>
                                                                <option value="400">
                                                                    40% </option>
                                                                <option value="410">
                                                                    41% </option>
                                                                <option value="420">
                                                                    42% </option>
                                                                <option value="430">
                                                                    43% </option>
                                                                <option value="440">
                                                                    44% </option>
                                                                <option value="450">
                                                                    45% </option>
                                                                <option value="460">
                                                                    46% </option>
                                                                <option value="470">
                                                                    47% </option>
                                                                <option value="480">
                                                                    48% </option>
                                                                <option value="490">
                                                                    49% </option>
                                                                <option value="500">
                                                                    50% </option>
                                                                <option value="510">
                                                                    51% </option>
                                                                <option value="520">
                                                                    52% </option>
                                                                <option value="530">
                                                                    53% </option>
                                                                <option value="540">
                                                                    54% </option>
                                                                <option value="550">
                                                                    55% </option>
                                                                <option value="560">
                                                                    56% </option>
                                                                <option value="570">
                                                                    57% </option>
                                                                <option value="580">
                                                                    58% </option>
                                                                <option value="590">
                                                                    59% </option>
                                                                <option value="600">
                                                                    60% </option>
                                                                <option value="610">
                                                                    61% </option>
                                                                <option value="620">
                                                                    62% </option>
                                                                <option value="630">
                                                                    63% </option>
                                                                <option value="640">
                                                                    64% </option>
                                                                <option value="650">
                                                                    65% </option>
                                                                <option value="660">
                                                                    66% </option>
                                                                <option value="670">
                                                                    67% </option>
                                                                <option value="680">
                                                                    68% </option>
                                                                <option value="690">
                                                                    69% </option>
                                                                <option value="700">
                                                                    70% </option>
                                                                <option value="710">
                                                                    71% </option>
                                                                <option value="720">
                                                                    72% </option>
                                                                <option value="730">
                                                                    73% </option>
                                                                <option value="740">
                                                                    74% </option>
                                                                <option value="750">
                                                                    75% </option>
                                                                <option value="760">
                                                                    76% </option>
                                                                <option value="770">
                                                                    77% </option>
                                                                <option value="780">
                                                                    78% </option>
                                                                <option value="790">
                                                                    79% </option>
                                                                <option value="800">
                                                                    80% </option>
                                                                <option value="810">
                                                                    81% </option>
                                                                <option value="820">
                                                                    82% </option>
                                                                <option value="830">
                                                                    83% </option>
                                                                <option value="840">
                                                                    84% </option>
                                                                <option value="850">
                                                                    85% </option>
                                                                <option value="860">
                                                                    86% </option>
                                                                <option value="870">
                                                                    87% </option>
                                                                <option value="880">
                                                                    88% </option>
                                                                <option value="890">
                                                                    89% </option>
                                                                <option value="900">
                                                                    90% </option>
                                                                <option value="910">
                                                                    91% </option>
                                                                <option value="920">
                                                                    92% </option>
                                                                <option value="930">
                                                                    93% </option>
                                                                <option value="940">
                                                                    94% </option>
                                                                <option value="950">
                                                                    95% </option>
                                                                <option value="960">
                                                                    96% </option>
                                                                <option value="970">
                                                                    97% </option>
                                                                <option value="980">
                                                                    98% </option>
                                                                <option value="990">
                                                                    99% </option>
                                                                <option value="1000">
                                                                    100% </option>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                    <tr class="dipp_f">
                                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG" id="id_dipp">
                                                                <font size="2"><a href="#dipp" title="dipp">DIPP</a></font>
                                                            </div>
                                                        </td>
                                                        <td class="Min_f">
                                                            <input name="FILTRO[DEP][9][1][MIN]" id="DIPP_Min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Max_f">
                                                            <input name="FILTRO[DEP][9][1][MAX]" id="DIPP_Max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Acur. Min(%)_f">
                                                            <input name="FILTRO[DEP][9][2][ACC_MIN]" id="DIPP_Acur. Min(%)" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td>
                                                            <select name="FILTRO[DEP][9][1][TOP]" size="1" class="form" id="DIPP_Top" style="width:55px">
                                                                <option value=""></option>
                                                                <option value="1">
                                                                    0.1% </option>
                                                                <option value="5">
                                                                    0.5% </option>
                                                                <option value="10">
                                                                    1% </option>
                                                                <option value="20">
                                                                    2% </option>
                                                                <option value="30">
                                                                    3% </option>
                                                                <option value="40">
                                                                    4% </option>
                                                                <option value="50">
                                                                    5% </option>
                                                                <option value="60">
                                                                    6% </option>
                                                                <option value="70">
                                                                    7% </option>
                                                                <option value="80">
                                                                    8% </option>
                                                                <option value="90">
                                                                    9% </option>
                                                                <option value="100">
                                                                    10% </option>
                                                                <option value="110">
                                                                    11% </option>
                                                                <option value="120">
                                                                    12% </option>
                                                                <option value="130">
                                                                    13% </option>
                                                                <option value="140">
                                                                    14% </option>
                                                                <option value="150">
                                                                    15% </option>
                                                                <option value="160">
                                                                    16% </option>
                                                                <option value="170">
                                                                    17% </option>
                                                                <option value="180">
                                                                    18% </option>
                                                                <option value="190">
                                                                    19% </option>
                                                                <option value="200">
                                                                    20% </option>
                                                                <option value="210">
                                                                    21% </option>
                                                                <option value="220">
                                                                    22% </option>
                                                                <option value="230">
                                                                    23% </option>
                                                                <option value="240">
                                                                    24% </option>
                                                                <option value="250">
                                                                    25% </option>
                                                                <option value="260">
                                                                    26% </option>
                                                                <option value="270">
                                                                    27% </option>
                                                                <option value="280">
                                                                    28% </option>
                                                                <option value="290">
                                                                    29% </option>
                                                                <option value="300">
                                                                    30% </option>
                                                                <option value="310">
                                                                    31% </option>
                                                                <option value="320">
                                                                    32% </option>
                                                                <option value="330">
                                                                    33% </option>
                                                                <option value="340">
                                                                    34% </option>
                                                                <option value="350">
                                                                    35% </option>
                                                                <option value="360">
                                                                    36% </option>
                                                                <option value="370">
                                                                    37% </option>
                                                                <option value="380">
                                                                    38% </option>
                                                                <option value="390">
                                                                    39% </option>
                                                                <option value="400">
                                                                    40% </option>
                                                                <option value="410">
                                                                    41% </option>
                                                                <option value="420">
                                                                    42% </option>
                                                                <option value="430">
                                                                    43% </option>
                                                                <option value="440">
                                                                    44% </option>
                                                                <option value="450">
                                                                    45% </option>
                                                                <option value="460">
                                                                    46% </option>
                                                                <option value="470">
                                                                    47% </option>
                                                                <option value="480">
                                                                    48% </option>
                                                                <option value="490">
                                                                    49% </option>
                                                                <option value="500">
                                                                    50% </option>
                                                                <option value="510">
                                                                    51% </option>
                                                                <option value="520">
                                                                    52% </option>
                                                                <option value="530">
                                                                    53% </option>
                                                                <option value="540">
                                                                    54% </option>
                                                                <option value="550">
                                                                    55% </option>
                                                                <option value="560">
                                                                    56% </option>
                                                                <option value="570">
                                                                    57% </option>
                                                                <option value="580">
                                                                    58% </option>
                                                                <option value="590">
                                                                    59% </option>
                                                                <option value="600">
                                                                    60% </option>
                                                                <option value="610">
                                                                    61% </option>
                                                                <option value="620">
                                                                    62% </option>
                                                                <option value="630">
                                                                    63% </option>
                                                                <option value="640">
                                                                    64% </option>
                                                                <option value="650">
                                                                    65% </option>
                                                                <option value="660">
                                                                    66% </option>
                                                                <option value="670">
                                                                    67% </option>
                                                                <option value="680">
                                                                    68% </option>
                                                                <option value="690">
                                                                    69% </option>
                                                                <option value="700">
                                                                    70% </option>
                                                                <option value="710">
                                                                    71% </option>
                                                                <option value="720">
                                                                    72% </option>
                                                                <option value="730">
                                                                    73% </option>
                                                                <option value="740">
                                                                    74% </option>
                                                                <option value="750">
                                                                    75% </option>
                                                                <option value="760">
                                                                    76% </option>
                                                                <option value="770">
                                                                    77% </option>
                                                                <option value="780">
                                                                    78% </option>
                                                                <option value="790">
                                                                    79% </option>
                                                                <option value="800">
                                                                    80% </option>
                                                                <option value="810">
                                                                    81% </option>
                                                                <option value="820">
                                                                    82% </option>
                                                                <option value="830">
                                                                    83% </option>
                                                                <option value="840">
                                                                    84% </option>
                                                                <option value="850">
                                                                    85% </option>
                                                                <option value="860">
                                                                    86% </option>
                                                                <option value="870">
                                                                    87% </option>
                                                                <option value="880">
                                                                    88% </option>
                                                                <option value="890">
                                                                    89% </option>
                                                                <option value="900">
                                                                    90% </option>
                                                                <option value="910">
                                                                    91% </option>
                                                                <option value="920">
                                                                    92% </option>
                                                                <option value="930">
                                                                    93% </option>
                                                                <option value="940">
                                                                    94% </option>
                                                                <option value="950">
                                                                    95% </option>
                                                                <option value="960">
                                                                    96% </option>
                                                                <option value="970">
                                                                    97% </option>
                                                                <option value="980">
                                                                    98% </option>
                                                                <option value="990">
                                                                    99% </option>
                                                                <option value="1000">
                                                                    100% </option>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                    <tr class="d3p_f">
                                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG" id="id_d3p">
                                                                <font size="2"><a href="#d3p" title="d3p">D3P</a></font>
                                                            </div>
                                                        </td>
                                                        <td class="Min_f">
                                                            <input name="FILTRO[DEP][17][1][MIN]" id="D3P_Min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Max_f">
                                                            <input name="FILTRO[DEP][17][1][MAX]" id="D3P_Max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Acur. Min(%)_f">
                                                            <input name="FILTRO[DEP][17][2][ACC_MIN]" id="D3P_Acur. Min(%)" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td>
                                                            <select name="FILTRO[DEP][17][1][TOP]" size="1" class="form" id="D3P_Top" style="width:55px">
                                                                <option value=""></option>
                                                                <option value="1">
                                                                    0.1% </option>
                                                                <option value="5">
                                                                    0.5% </option>
                                                                <option value="10">
                                                                    1% </option>
                                                                <option value="20">
                                                                    2% </option>
                                                                <option value="30">
                                                                    3% </option>
                                                                <option value="40">
                                                                    4% </option>
                                                                <option value="50">
                                                                    5% </option>
                                                                <option value="60">
                                                                    6% </option>
                                                                <option value="70">
                                                                    7% </option>
                                                                <option value="80">
                                                                    8% </option>
                                                                <option value="90">
                                                                    9% </option>
                                                                <option value="100">
                                                                    10% </option>
                                                                <option value="110">
                                                                    11% </option>
                                                                <option value="120">
                                                                    12% </option>
                                                                <option value="130">
                                                                    13% </option>
                                                                <option value="140">
                                                                    14% </option>
                                                                <option value="150">
                                                                    15% </option>
                                                                <option value="160">
                                                                    16% </option>
                                                                <option value="170">
                                                                    17% </option>
                                                                <option value="180">
                                                                    18% </option>
                                                                <option value="190">
                                                                    19% </option>
                                                                <option value="200">
                                                                    20% </option>
                                                                <option value="210">
                                                                    21% </option>
                                                                <option value="220">
                                                                    22% </option>
                                                                <option value="230">
                                                                    23% </option>
                                                                <option value="240">
                                                                    24% </option>
                                                                <option value="250">
                                                                    25% </option>
                                                                <option value="260">
                                                                    26% </option>
                                                                <option value="270">
                                                                    27% </option>
                                                                <option value="280">
                                                                    28% </option>
                                                                <option value="290">
                                                                    29% </option>
                                                                <option value="300">
                                                                    30% </option>
                                                                <option value="310">
                                                                    31% </option>
                                                                <option value="320">
                                                                    32% </option>
                                                                <option value="330">
                                                                    33% </option>
                                                                <option value="340">
                                                                    34% </option>
                                                                <option value="350">
                                                                    35% </option>
                                                                <option value="360">
                                                                    36% </option>
                                                                <option value="370">
                                                                    37% </option>
                                                                <option value="380">
                                                                    38% </option>
                                                                <option value="390">
                                                                    39% </option>
                                                                <option value="400">
                                                                    40% </option>
                                                                <option value="410">
                                                                    41% </option>
                                                                <option value="420">
                                                                    42% </option>
                                                                <option value="430">
                                                                    43% </option>
                                                                <option value="440">
                                                                    44% </option>
                                                                <option value="450">
                                                                    45% </option>
                                                                <option value="460">
                                                                    46% </option>
                                                                <option value="470">
                                                                    47% </option>
                                                                <option value="480">
                                                                    48% </option>
                                                                <option value="490">
                                                                    49% </option>
                                                                <option value="500">
                                                                    50% </option>
                                                                <option value="510">
                                                                    51% </option>
                                                                <option value="520">
                                                                    52% </option>
                                                                <option value="530">
                                                                    53% </option>
                                                                <option value="540">
                                                                    54% </option>
                                                                <option value="550">
                                                                    55% </option>
                                                                <option value="560">
                                                                    56% </option>
                                                                <option value="570">
                                                                    57% </option>
                                                                <option value="580">
                                                                    58% </option>
                                                                <option value="590">
                                                                    59% </option>
                                                                <option value="600">
                                                                    60% </option>
                                                                <option value="610">
                                                                    61% </option>
                                                                <option value="620">
                                                                    62% </option>
                                                                <option value="630">
                                                                    63% </option>
                                                                <option value="640">
                                                                    64% </option>
                                                                <option value="650">
                                                                    65% </option>
                                                                <option value="660">
                                                                    66% </option>
                                                                <option value="670">
                                                                    67% </option>
                                                                <option value="680">
                                                                    68% </option>
                                                                <option value="690">
                                                                    69% </option>
                                                                <option value="700">
                                                                    70% </option>
                                                                <option value="710">
                                                                    71% </option>
                                                                <option value="720">
                                                                    72% </option>
                                                                <option value="730">
                                                                    73% </option>
                                                                <option value="740">
                                                                    74% </option>
                                                                <option value="750">
                                                                    75% </option>
                                                                <option value="760">
                                                                    76% </option>
                                                                <option value="770">
                                                                    77% </option>
                                                                <option value="780">
                                                                    78% </option>
                                                                <option value="790">
                                                                    79% </option>
                                                                <option value="800">
                                                                    80% </option>
                                                                <option value="810">
                                                                    81% </option>
                                                                <option value="820">
                                                                    82% </option>
                                                                <option value="830">
                                                                    83% </option>
                                                                <option value="840">
                                                                    84% </option>
                                                                <option value="850">
                                                                    85% </option>
                                                                <option value="860">
                                                                    86% </option>
                                                                <option value="870">
                                                                    87% </option>
                                                                <option value="880">
                                                                    88% </option>
                                                                <option value="890">
                                                                    89% </option>
                                                                <option value="900">
                                                                    90% </option>
                                                                <option value="910">
                                                                    91% </option>
                                                                <option value="920">
                                                                    92% </option>
                                                                <option value="930">
                                                                    93% </option>
                                                                <option value="940">
                                                                    94% </option>
                                                                <option value="950">
                                                                    95% </option>
                                                                <option value="960">
                                                                    96% </option>
                                                                <option value="970">
                                                                    97% </option>
                                                                <option value="980">
                                                                    98% </option>
                                                                <option value="990">
                                                                    99% </option>
                                                                <option value="1000">
                                                                    100% </option>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                    <tr class="dipm_f">
                                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG" id="id_dipm">
                                                                <font size="2"><a href="#dipm" title="dipm">DIPM</a></font>
                                                            </div>
                                                        </td>
                                                        <td class="Min_f">
                                                            <input name="FILTRO[DEP][79][1][MIN]" id="DIPM_Min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Max_f">
                                                            <input name="FILTRO[DEP][79][1][MAX]" id="DIPM_Max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Acur. Min(%)_f">
                                                            <input name="FILTRO[DEP][79][2][ACC_MIN]" id="DIPM_Acur. Min(%)" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td>
                                                            <select name="FILTRO[DEP][79][1][TOP]" size="1" class="form" id="DIPM_Top" style="width:55px">
                                                                <option value=""></option>
                                                                <option value="1">
                                                                    0.1% </option>
                                                                <option value="5">
                                                                    0.5% </option>
                                                                <option value="10">
                                                                    1% </option>
                                                                <option value="20">
                                                                    2% </option>
                                                                <option value="30">
                                                                    3% </option>
                                                                <option value="40">
                                                                    4% </option>
                                                                <option value="50">
                                                                    5% </option>
                                                                <option value="60">
                                                                    6% </option>
                                                                <option value="70">
                                                                    7% </option>
                                                                <option value="80">
                                                                    8% </option>
                                                                <option value="90">
                                                                    9% </option>
                                                                <option value="100">
                                                                    10% </option>
                                                                <option value="110">
                                                                    11% </option>
                                                                <option value="120">
                                                                    12% </option>
                                                                <option value="130">
                                                                    13% </option>
                                                                <option value="140">
                                                                    14% </option>
                                                                <option value="150">
                                                                    15% </option>
                                                                <option value="160">
                                                                    16% </option>
                                                                <option value="170">
                                                                    17% </option>
                                                                <option value="180">
                                                                    18% </option>
                                                                <option value="190">
                                                                    19% </option>
                                                                <option value="200">
                                                                    20% </option>
                                                                <option value="210">
                                                                    21% </option>
                                                                <option value="220">
                                                                    22% </option>
                                                                <option value="230">
                                                                    23% </option>
                                                                <option value="240">
                                                                    24% </option>
                                                                <option value="250">
                                                                    25% </option>
                                                                <option value="260">
                                                                    26% </option>
                                                                <option value="270">
                                                                    27% </option>
                                                                <option value="280">
                                                                    28% </option>
                                                                <option value="290">
                                                                    29% </option>
                                                                <option value="300">
                                                                    30% </option>
                                                                <option value="310">
                                                                    31% </option>
                                                                <option value="320">
                                                                    32% </option>
                                                                <option value="330">
                                                                    33% </option>
                                                                <option value="340">
                                                                    34% </option>
                                                                <option value="350">
                                                                    35% </option>
                                                                <option value="360">
                                                                    36% </option>
                                                                <option value="370">
                                                                    37% </option>
                                                                <option value="380">
                                                                    38% </option>
                                                                <option value="390">
                                                                    39% </option>
                                                                <option value="400">
                                                                    40% </option>
                                                                <option value="410">
                                                                    41% </option>
                                                                <option value="420">
                                                                    42% </option>
                                                                <option value="430">
                                                                    43% </option>
                                                                <option value="440">
                                                                    44% </option>
                                                                <option value="450">
                                                                    45% </option>
                                                                <option value="460">
                                                                    46% </option>
                                                                <option value="470">
                                                                    47% </option>
                                                                <option value="480">
                                                                    48% </option>
                                                                <option value="490">
                                                                    49% </option>
                                                                <option value="500">
                                                                    50% </option>
                                                                <option value="510">
                                                                    51% </option>
                                                                <option value="520">
                                                                    52% </option>
                                                                <option value="530">
                                                                    53% </option>
                                                                <option value="540">
                                                                    54% </option>
                                                                <option value="550">
                                                                    55% </option>
                                                                <option value="560">
                                                                    56% </option>
                                                                <option value="570">
                                                                    57% </option>
                                                                <option value="580">
                                                                    58% </option>
                                                                <option value="590">
                                                                    59% </option>
                                                                <option value="600">
                                                                    60% </option>
                                                                <option value="610">
                                                                    61% </option>
                                                                <option value="620">
                                                                    62% </option>
                                                                <option value="630">
                                                                    63% </option>
                                                                <option value="640">
                                                                    64% </option>
                                                                <option value="650">
                                                                    65% </option>
                                                                <option value="660">
                                                                    66% </option>
                                                                <option value="670">
                                                                    67% </option>
                                                                <option value="680">
                                                                    68% </option>
                                                                <option value="690">
                                                                    69% </option>
                                                                <option value="700">
                                                                    70% </option>
                                                                <option value="710">
                                                                    71% </option>
                                                                <option value="720">
                                                                    72% </option>
                                                                <option value="730">
                                                                    73% </option>
                                                                <option value="740">
                                                                    74% </option>
                                                                <option value="750">
                                                                    75% </option>
                                                                <option value="760">
                                                                    76% </option>
                                                                <option value="770">
                                                                    77% </option>
                                                                <option value="780">
                                                                    78% </option>
                                                                <option value="790">
                                                                    79% </option>
                                                                <option value="800">
                                                                    80% </option>
                                                                <option value="810">
                                                                    81% </option>
                                                                <option value="820">
                                                                    82% </option>
                                                                <option value="830">
                                                                    83% </option>
                                                                <option value="840">
                                                                    84% </option>
                                                                <option value="850">
                                                                    85% </option>
                                                                <option value="860">
                                                                    86% </option>
                                                                <option value="870">
                                                                    87% </option>
                                                                <option value="880">
                                                                    88% </option>
                                                                <option value="890">
                                                                    89% </option>
                                                                <option value="900">
                                                                    90% </option>
                                                                <option value="910">
                                                                    91% </option>
                                                                <option value="920">
                                                                    92% </option>
                                                                <option value="930">
                                                                    93% </option>
                                                                <option value="940">
                                                                    94% </option>
                                                                <option value="950">
                                                                    95% </option>
                                                                <option value="960">
                                                                    96% </option>
                                                                <option value="970">
                                                                    97% </option>
                                                                <option value="980">
                                                                    98% </option>
                                                                <option value="990">
                                                                    99% </option>
                                                                <option value="1000">
                                                                    100% </option>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                    <tr class="mp120_f">
                                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG" id="id_mp120">
                                                                <font size="2"><a href="#mp120" title="mp120">MP120</a></font>
                                                            </div>
                                                        </td>
                                                        <td class="Min_f">
                                                            <input name="FILTRO[DEP][1][1][MIN]" id="MP120_Min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Max_f">
                                                            <input name="FILTRO[DEP][1][1][MAX]" id="MP120_Max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Acur. Min(%)_f">
                                                            <input name="FILTRO[DEP][1][2][ACC_MIN]" id="MP120_Acur. Min(%)" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td>
                                                            <select name="FILTRO[DEP][1][1][TOP]" size="1" class="form" id="MP120_Top" style="width:55px">
                                                                <option value=""></option>
                                                                <option value="1">
                                                                    0.1% </option>
                                                                <option value="5">
                                                                    0.5% </option>
                                                                <option value="10">
                                                                    1% </option>
                                                                <option value="20">
                                                                    2% </option>
                                                                <option value="30">
                                                                    3% </option>
                                                                <option value="40">
                                                                    4% </option>
                                                                <option value="50">
                                                                    5% </option>
                                                                <option value="60">
                                                                    6% </option>
                                                                <option value="70">
                                                                    7% </option>
                                                                <option value="80">
                                                                    8% </option>
                                                                <option value="90">
                                                                    9% </option>
                                                                <option value="100">
                                                                    10% </option>
                                                                <option value="110">
                                                                    11% </option>
                                                                <option value="120">
                                                                    12% </option>
                                                                <option value="130">
                                                                    13% </option>
                                                                <option value="140">
                                                                    14% </option>
                                                                <option value="150">
                                                                    15% </option>
                                                                <option value="160">
                                                                    16% </option>
                                                                <option value="170">
                                                                    17% </option>
                                                                <option value="180">
                                                                    18% </option>
                                                                <option value="190">
                                                                    19% </option>
                                                                <option value="200">
                                                                    20% </option>
                                                                <option value="210">
                                                                    21% </option>
                                                                <option value="220">
                                                                    22% </option>
                                                                <option value="230">
                                                                    23% </option>
                                                                <option value="240">
                                                                    24% </option>
                                                                <option value="250">
                                                                    25% </option>
                                                                <option value="260">
                                                                    26% </option>
                                                                <option value="270">
                                                                    27% </option>
                                                                <option value="280">
                                                                    28% </option>
                                                                <option value="290">
                                                                    29% </option>
                                                                <option value="300">
                                                                    30% </option>
                                                                <option value="310">
                                                                    31% </option>
                                                                <option value="320">
                                                                    32% </option>
                                                                <option value="330">
                                                                    33% </option>
                                                                <option value="340">
                                                                    34% </option>
                                                                <option value="350">
                                                                    35% </option>
                                                                <option value="360">
                                                                    36% </option>
                                                                <option value="370">
                                                                    37% </option>
                                                                <option value="380">
                                                                    38% </option>
                                                                <option value="390">
                                                                    39% </option>
                                                                <option value="400">
                                                                    40% </option>
                                                                <option value="410">
                                                                    41% </option>
                                                                <option value="420">
                                                                    42% </option>
                                                                <option value="430">
                                                                    43% </option>
                                                                <option value="440">
                                                                    44% </option>
                                                                <option value="450">
                                                                    45% </option>
                                                                <option value="460">
                                                                    46% </option>
                                                                <option value="470">
                                                                    47% </option>
                                                                <option value="480">
                                                                    48% </option>
                                                                <option value="490">
                                                                    49% </option>
                                                                <option value="500">
                                                                    50% </option>
                                                                <option value="510">
                                                                    51% </option>
                                                                <option value="520">
                                                                    52% </option>
                                                                <option value="530">
                                                                    53% </option>
                                                                <option value="540">
                                                                    54% </option>
                                                                <option value="550">
                                                                    55% </option>
                                                                <option value="560">
                                                                    56% </option>
                                                                <option value="570">
                                                                    57% </option>
                                                                <option value="580">
                                                                    58% </option>
                                                                <option value="590">
                                                                    59% </option>
                                                                <option value="600">
                                                                    60% </option>
                                                                <option value="610">
                                                                    61% </option>
                                                                <option value="620">
                                                                    62% </option>
                                                                <option value="630">
                                                                    63% </option>
                                                                <option value="640">
                                                                    64% </option>
                                                                <option value="650">
                                                                    65% </option>
                                                                <option value="660">
                                                                    66% </option>
                                                                <option value="670">
                                                                    67% </option>
                                                                <option value="680">
                                                                    68% </option>
                                                                <option value="690">
                                                                    69% </option>
                                                                <option value="700">
                                                                    70% </option>
                                                                <option value="710">
                                                                    71% </option>
                                                                <option value="720">
                                                                    72% </option>
                                                                <option value="730">
                                                                    73% </option>
                                                                <option value="740">
                                                                    74% </option>
                                                                <option value="750">
                                                                    75% </option>
                                                                <option value="760">
                                                                    76% </option>
                                                                <option value="770">
                                                                    77% </option>
                                                                <option value="780">
                                                                    78% </option>
                                                                <option value="790">
                                                                    79% </option>
                                                                <option value="800">
                                                                    80% </option>
                                                                <option value="810">
                                                                    81% </option>
                                                                <option value="820">
                                                                    82% </option>
                                                                <option value="830">
                                                                    83% </option>
                                                                <option value="840">
                                                                    84% </option>
                                                                <option value="850">
                                                                    85% </option>
                                                                <option value="860">
                                                                    86% </option>
                                                                <option value="870">
                                                                    87% </option>
                                                                <option value="880">
                                                                    88% </option>
                                                                <option value="890">
                                                                    89% </option>
                                                                <option value="900">
                                                                    90% </option>
                                                                <option value="910">
                                                                    91% </option>
                                                                <option value="920">
                                                                    92% </option>
                                                                <option value="930">
                                                                    93% </option>
                                                                <option value="940">
                                                                    94% </option>
                                                                <option value="950">
                                                                    95% </option>
                                                                <option value="960">
                                                                    96% </option>
                                                                <option value="970">
                                                                    97% </option>
                                                                <option value="980">
                                                                    98% </option>
                                                                <option value="990">
                                                                    99% </option>
                                                                <option value="1000">
                                                                    100% </option>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                    <tr class="mp210_f">
                                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG" id="id_mp210">
                                                                <font size="2"><a href="#mp210" title="mp210">MP210</a></font>
                                                            </div>
                                                        </td>
                                                        <td class="Min_f">
                                                            <input name="FILTRO[DEP][2][1][MIN]" id="MP210_Min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Max_f">
                                                            <input name="FILTRO[DEP][2][1][MAX]" id="MP210_Max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Acur. Min(%)_f">
                                                            <input name="FILTRO[DEP][2][2][ACC_MIN]" id="MP210_Acur. Min(%)" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td>
                                                            <select name="FILTRO[DEP][2][1][TOP]" size="1" class="form" id="MP210_Top" style="width:55px">
                                                                <option value=""></option>
                                                                <option value="1">
                                                                    0.1% </option>
                                                                <option value="5">
                                                                    0.5% </option>
                                                                <option value="10">
                                                                    1% </option>
                                                                <option value="20">
                                                                    2% </option>
                                                                <option value="30">
                                                                    3% </option>
                                                                <option value="40">
                                                                    4% </option>
                                                                <option value="50">
                                                                    5% </option>
                                                                <option value="60">
                                                                    6% </option>
                                                                <option value="70">
                                                                    7% </option>
                                                                <option value="80">
                                                                    8% </option>
                                                                <option value="90">
                                                                    9% </option>
                                                                <option value="100">
                                                                    10% </option>
                                                                <option value="110">
                                                                    11% </option>
                                                                <option value="120">
                                                                    12% </option>
                                                                <option value="130">
                                                                    13% </option>
                                                                <option value="140">
                                                                    14% </option>
                                                                <option value="150">
                                                                    15% </option>
                                                                <option value="160">
                                                                    16% </option>
                                                                <option value="170">
                                                                    17% </option>
                                                                <option value="180">
                                                                    18% </option>
                                                                <option value="190">
                                                                    19% </option>
                                                                <option value="200">
                                                                    20% </option>
                                                                <option value="210">
                                                                    21% </option>
                                                                <option value="220">
                                                                    22% </option>
                                                                <option value="230">
                                                                    23% </option>
                                                                <option value="240">
                                                                    24% </option>
                                                                <option value="250">
                                                                    25% </option>
                                                                <option value="260">
                                                                    26% </option>
                                                                <option value="270">
                                                                    27% </option>
                                                                <option value="280">
                                                                    28% </option>
                                                                <option value="290">
                                                                    29% </option>
                                                                <option value="300">
                                                                    30% </option>
                                                                <option value="310">
                                                                    31% </option>
                                                                <option value="320">
                                                                    32% </option>
                                                                <option value="330">
                                                                    33% </option>
                                                                <option value="340">
                                                                    34% </option>
                                                                <option value="350">
                                                                    35% </option>
                                                                <option value="360">
                                                                    36% </option>
                                                                <option value="370">
                                                                    37% </option>
                                                                <option value="380">
                                                                    38% </option>
                                                                <option value="390">
                                                                    39% </option>
                                                                <option value="400">
                                                                    40% </option>
                                                                <option value="410">
                                                                    41% </option>
                                                                <option value="420">
                                                                    42% </option>
                                                                <option value="430">
                                                                    43% </option>
                                                                <option value="440">
                                                                    44% </option>
                                                                <option value="450">
                                                                    45% </option>
                                                                <option value="460">
                                                                    46% </option>
                                                                <option value="470">
                                                                    47% </option>
                                                                <option value="480">
                                                                    48% </option>
                                                                <option value="490">
                                                                    49% </option>
                                                                <option value="500">
                                                                    50% </option>
                                                                <option value="510">
                                                                    51% </option>
                                                                <option value="520">
                                                                    52% </option>
                                                                <option value="530">
                                                                    53% </option>
                                                                <option value="540">
                                                                    54% </option>
                                                                <option value="550">
                                                                    55% </option>
                                                                <option value="560">
                                                                    56% </option>
                                                                <option value="570">
                                                                    57% </option>
                                                                <option value="580">
                                                                    58% </option>
                                                                <option value="590">
                                                                    59% </option>
                                                                <option value="600">
                                                                    60% </option>
                                                                <option value="610">
                                                                    61% </option>
                                                                <option value="620">
                                                                    62% </option>
                                                                <option value="630">
                                                                    63% </option>
                                                                <option value="640">
                                                                    64% </option>
                                                                <option value="650">
                                                                    65% </option>
                                                                <option value="660">
                                                                    66% </option>
                                                                <option value="670">
                                                                    67% </option>
                                                                <option value="680">
                                                                    68% </option>
                                                                <option value="690">
                                                                    69% </option>
                                                                <option value="700">
                                                                    70% </option>
                                                                <option value="710">
                                                                    71% </option>
                                                                <option value="720">
                                                                    72% </option>
                                                                <option value="730">
                                                                    73% </option>
                                                                <option value="740">
                                                                    74% </option>
                                                                <option value="750">
                                                                    75% </option>
                                                                <option value="760">
                                                                    76% </option>
                                                                <option value="770">
                                                                    77% </option>
                                                                <option value="780">
                                                                    78% </option>
                                                                <option value="790">
                                                                    79% </option>
                                                                <option value="800">
                                                                    80% </option>
                                                                <option value="810">
                                                                    81% </option>
                                                                <option value="820">
                                                                    82% </option>
                                                                <option value="830">
                                                                    83% </option>
                                                                <option value="840">
                                                                    84% </option>
                                                                <option value="850">
                                                                    85% </option>
                                                                <option value="860">
                                                                    86% </option>
                                                                <option value="870">
                                                                    87% </option>
                                                                <option value="880">
                                                                    88% </option>
                                                                <option value="890">
                                                                    89% </option>
                                                                <option value="900">
                                                                    90% </option>
                                                                <option value="910">
                                                                    91% </option>
                                                                <option value="920">
                                                                    92% </option>
                                                                <option value="930">
                                                                    93% </option>
                                                                <option value="940">
                                                                    94% </option>
                                                                <option value="950">
                                                                    95% </option>
                                                                <option value="960">
                                                                    96% </option>
                                                                <option value="970">
                                                                    97% </option>
                                                                <option value="980">
                                                                    98% </option>
                                                                <option value="990">
                                                                    99% </option>
                                                                <option value="1000">
                                                                    100% </option>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                    <tr class="mtp120_f">
                                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG" id="id_mtp120">
                                                                <font size="2"><a href="#mtp120" title="mtp120">MTP120</a></font>
                                                            </div>
                                                        </td>
                                                        <td class="Min_f">
                                                            <input name="FILTRO[DEP][33][1][MIN]" id="MTP120_Min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Max_f">
                                                            <input name="FILTRO[DEP][33][1][MAX]" id="MTP120_Max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Acur. Min(%)_f">
                                                            <input name="FILTRO[DEP][33][2][ACC_MIN]" id="MTP120_Acur. Min(%)" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td>
                                                            <select name="FILTRO[DEP][33][1][TOP]" size="1" class="form" id="MTP120_Top" style="width:55px">
                                                                <option value=""></option>
                                                                <option value="1">
                                                                    0.1% </option>
                                                                <option value="5">
                                                                    0.5% </option>
                                                                <option value="10">
                                                                    1% </option>
                                                                <option value="20">
                                                                    2% </option>
                                                                <option value="30">
                                                                    3% </option>
                                                                <option value="40">
                                                                    4% </option>
                                                                <option value="50">
                                                                    5% </option>
                                                                <option value="60">
                                                                    6% </option>
                                                                <option value="70">
                                                                    7% </option>
                                                                <option value="80">
                                                                    8% </option>
                                                                <option value="90">
                                                                    9% </option>
                                                                <option value="100">
                                                                    10% </option>
                                                                <option value="110">
                                                                    11% </option>
                                                                <option value="120">
                                                                    12% </option>
                                                                <option value="130">
                                                                    13% </option>
                                                                <option value="140">
                                                                    14% </option>
                                                                <option value="150">
                                                                    15% </option>
                                                                <option value="160">
                                                                    16% </option>
                                                                <option value="170">
                                                                    17% </option>
                                                                <option value="180">
                                                                    18% </option>
                                                                <option value="190">
                                                                    19% </option>
                                                                <option value="200">
                                                                    20% </option>
                                                                <option value="210">
                                                                    21% </option>
                                                                <option value="220">
                                                                    22% </option>
                                                                <option value="230">
                                                                    23% </option>
                                                                <option value="240">
                                                                    24% </option>
                                                                <option value="250">
                                                                    25% </option>
                                                                <option value="260">
                                                                    26% </option>
                                                                <option value="270">
                                                                    27% </option>
                                                                <option value="280">
                                                                    28% </option>
                                                                <option value="290">
                                                                    29% </option>
                                                                <option value="300">
                                                                    30% </option>
                                                                <option value="310">
                                                                    31% </option>
                                                                <option value="320">
                                                                    32% </option>
                                                                <option value="330">
                                                                    33% </option>
                                                                <option value="340">
                                                                    34% </option>
                                                                <option value="350">
                                                                    35% </option>
                                                                <option value="360">
                                                                    36% </option>
                                                                <option value="370">
                                                                    37% </option>
                                                                <option value="380">
                                                                    38% </option>
                                                                <option value="390">
                                                                    39% </option>
                                                                <option value="400">
                                                                    40% </option>
                                                                <option value="410">
                                                                    41% </option>
                                                                <option value="420">
                                                                    42% </option>
                                                                <option value="430">
                                                                    43% </option>
                                                                <option value="440">
                                                                    44% </option>
                                                                <option value="450">
                                                                    45% </option>
                                                                <option value="460">
                                                                    46% </option>
                                                                <option value="470">
                                                                    47% </option>
                                                                <option value="480">
                                                                    48% </option>
                                                                <option value="490">
                                                                    49% </option>
                                                                <option value="500">
                                                                    50% </option>
                                                                <option value="510">
                                                                    51% </option>
                                                                <option value="520">
                                                                    52% </option>
                                                                <option value="530">
                                                                    53% </option>
                                                                <option value="540">
                                                                    54% </option>
                                                                <option value="550">
                                                                    55% </option>
                                                                <option value="560">
                                                                    56% </option>
                                                                <option value="570">
                                                                    57% </option>
                                                                <option value="580">
                                                                    58% </option>
                                                                <option value="590">
                                                                    59% </option>
                                                                <option value="600">
                                                                    60% </option>
                                                                <option value="610">
                                                                    61% </option>
                                                                <option value="620">
                                                                    62% </option>
                                                                <option value="630">
                                                                    63% </option>
                                                                <option value="640">
                                                                    64% </option>
                                                                <option value="650">
                                                                    65% </option>
                                                                <option value="660">
                                                                    66% </option>
                                                                <option value="670">
                                                                    67% </option>
                                                                <option value="680">
                                                                    68% </option>
                                                                <option value="690">
                                                                    69% </option>
                                                                <option value="700">
                                                                    70% </option>
                                                                <option value="710">
                                                                    71% </option>
                                                                <option value="720">
                                                                    72% </option>
                                                                <option value="730">
                                                                    73% </option>
                                                                <option value="740">
                                                                    74% </option>
                                                                <option value="750">
                                                                    75% </option>
                                                                <option value="760">
                                                                    76% </option>
                                                                <option value="770">
                                                                    77% </option>
                                                                <option value="780">
                                                                    78% </option>
                                                                <option value="790">
                                                                    79% </option>
                                                                <option value="800">
                                                                    80% </option>
                                                                <option value="810">
                                                                    81% </option>
                                                                <option value="820">
                                                                    82% </option>
                                                                <option value="830">
                                                                    83% </option>
                                                                <option value="840">
                                                                    84% </option>
                                                                <option value="850">
                                                                    85% </option>
                                                                <option value="860">
                                                                    86% </option>
                                                                <option value="870">
                                                                    87% </option>
                                                                <option value="880">
                                                                    88% </option>
                                                                <option value="890">
                                                                    89% </option>
                                                                <option value="900">
                                                                    90% </option>
                                                                <option value="910">
                                                                    91% </option>
                                                                <option value="920">
                                                                    92% </option>
                                                                <option value="930">
                                                                    93% </option>
                                                                <option value="940">
                                                                    94% </option>
                                                                <option value="950">
                                                                    95% </option>
                                                                <option value="960">
                                                                    96% </option>
                                                                <option value="970">
                                                                    97% </option>
                                                                <option value="980">
                                                                    98% </option>
                                                                <option value="990">
                                                                    99% </option>
                                                                <option value="1000">
                                                                    100% </option>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                    <tr class="mtp210_f">
                                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG" id="id_mtp210">
                                                                <font size="2"><a href="#mtp210" title="mtp210">MTP210</a></font>
                                                            </div>
                                                        </td>
                                                        <td class="Min_f">
                                                            <input name="FILTRO[DEP][34][1][MIN]" id="MTP210_Min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Max_f">
                                                            <input name="FILTRO[DEP][34][1][MAX]" id="MTP210_Max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Acur. Min(%)_f">
                                                            <input name="FILTRO[DEP][34][2][ACC_MIN]" id="MTP210_Acur. Min(%)" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td>
                                                            <select name="FILTRO[DEP][34][1][TOP]" size="1" class="form" id="MTP210_Top" style="width:55px">
                                                                <option value=""></option>
                                                                <option value="1">
                                                                    0.1% </option>
                                                                <option value="5">
                                                                    0.5% </option>
                                                                <option value="10">
                                                                    1% </option>
                                                                <option value="20">
                                                                    2% </option>
                                                                <option value="30">
                                                                    3% </option>
                                                                <option value="40">
                                                                    4% </option>
                                                                <option value="50">
                                                                    5% </option>
                                                                <option value="60">
                                                                    6% </option>
                                                                <option value="70">
                                                                    7% </option>
                                                                <option value="80">
                                                                    8% </option>
                                                                <option value="90">
                                                                    9% </option>
                                                                <option value="100">
                                                                    10% </option>
                                                                <option value="110">
                                                                    11% </option>
                                                                <option value="120">
                                                                    12% </option>
                                                                <option value="130">
                                                                    13% </option>
                                                                <option value="140">
                                                                    14% </option>
                                                                <option value="150">
                                                                    15% </option>
                                                                <option value="160">
                                                                    16% </option>
                                                                <option value="170">
                                                                    17% </option>
                                                                <option value="180">
                                                                    18% </option>
                                                                <option value="190">
                                                                    19% </option>
                                                                <option value="200">
                                                                    20% </option>
                                                                <option value="210">
                                                                    21% </option>
                                                                <option value="220">
                                                                    22% </option>
                                                                <option value="230">
                                                                    23% </option>
                                                                <option value="240">
                                                                    24% </option>
                                                                <option value="250">
                                                                    25% </option>
                                                                <option value="260">
                                                                    26% </option>
                                                                <option value="270">
                                                                    27% </option>
                                                                <option value="280">
                                                                    28% </option>
                                                                <option value="290">
                                                                    29% </option>
                                                                <option value="300">
                                                                    30% </option>
                                                                <option value="310">
                                                                    31% </option>
                                                                <option value="320">
                                                                    32% </option>
                                                                <option value="330">
                                                                    33% </option>
                                                                <option value="340">
                                                                    34% </option>
                                                                <option value="350">
                                                                    35% </option>
                                                                <option value="360">
                                                                    36% </option>
                                                                <option value="370">
                                                                    37% </option>
                                                                <option value="380">
                                                                    38% </option>
                                                                <option value="390">
                                                                    39% </option>
                                                                <option value="400">
                                                                    40% </option>
                                                                <option value="410">
                                                                    41% </option>
                                                                <option value="420">
                                                                    42% </option>
                                                                <option value="430">
                                                                    43% </option>
                                                                <option value="440">
                                                                    44% </option>
                                                                <option value="450">
                                                                    45% </option>
                                                                <option value="460">
                                                                    46% </option>
                                                                <option value="470">
                                                                    47% </option>
                                                                <option value="480">
                                                                    48% </option>
                                                                <option value="490">
                                                                    49% </option>
                                                                <option value="500">
                                                                    50% </option>
                                                                <option value="510">
                                                                    51% </option>
                                                                <option value="520">
                                                                    52% </option>
                                                                <option value="530">
                                                                    53% </option>
                                                                <option value="540">
                                                                    54% </option>
                                                                <option value="550">
                                                                    55% </option>
                                                                <option value="560">
                                                                    56% </option>
                                                                <option value="570">
                                                                    57% </option>
                                                                <option value="580">
                                                                    58% </option>
                                                                <option value="590">
                                                                    59% </option>
                                                                <option value="600">
                                                                    60% </option>
                                                                <option value="610">
                                                                    61% </option>
                                                                <option value="620">
                                                                    62% </option>
                                                                <option value="630">
                                                                    63% </option>
                                                                <option value="640">
                                                                    64% </option>
                                                                <option value="650">
                                                                    65% </option>
                                                                <option value="660">
                                                                    66% </option>
                                                                <option value="670">
                                                                    67% </option>
                                                                <option value="680">
                                                                    68% </option>
                                                                <option value="690">
                                                                    69% </option>
                                                                <option value="700">
                                                                    70% </option>
                                                                <option value="710">
                                                                    71% </option>
                                                                <option value="720">
                                                                    72% </option>
                                                                <option value="730">
                                                                    73% </option>
                                                                <option value="740">
                                                                    74% </option>
                                                                <option value="750">
                                                                    75% </option>
                                                                <option value="760">
                                                                    76% </option>
                                                                <option value="770">
                                                                    77% </option>
                                                                <option value="780">
                                                                    78% </option>
                                                                <option value="790">
                                                                    79% </option>
                                                                <option value="800">
                                                                    80% </option>
                                                                <option value="810">
                                                                    81% </option>
                                                                <option value="820">
                                                                    82% </option>
                                                                <option value="830">
                                                                    83% </option>
                                                                <option value="840">
                                                                    84% </option>
                                                                <option value="850">
                                                                    85% </option>
                                                                <option value="860">
                                                                    86% </option>
                                                                <option value="870">
                                                                    87% </option>
                                                                <option value="880">
                                                                    88% </option>
                                                                <option value="890">
                                                                    89% </option>
                                                                <option value="900">
                                                                    90% </option>
                                                                <option value="910">
                                                                    91% </option>
                                                                <option value="920">
                                                                    92% </option>
                                                                <option value="930">
                                                                    93% </option>
                                                                <option value="940">
                                                                    94% </option>
                                                                <option value="950">
                                                                    95% </option>
                                                                <option value="960">
                                                                    96% </option>
                                                                <option value="970">
                                                                    97% </option>
                                                                <option value="980">
                                                                    98% </option>
                                                                <option value="990">
                                                                    99% </option>
                                                                <option value="1000">
                                                                    100% </option>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                    <tr class="dstay_f">
                                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG" id="id_dstay">
                                                                <font size="2"><a href="#dstay" title="dstay">DSTAY</a></font>
                                                            </div>
                                                        </td>
                                                        <td class="Min_f">
                                                            <input name="FILTRO[DEP][16][1][MIN]" id="DSTAY_Min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Max_f">
                                                            <input name="FILTRO[DEP][16][1][MAX]" id="DSTAY_Max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Acur. Min(%)_f">
                                                            <input name="FILTRO[DEP][16][2][ACC_MIN]" id="DSTAY_Acur. Min(%)" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td>
                                                            <select name="FILTRO[DEP][16][1][TOP]" size="1" class="form" id="DSTAY_Top" style="width:55px">
                                                                <option value=""></option>
                                                                <option value="1">
                                                                    0.1% </option>
                                                                <option value="5">
                                                                    0.5% </option>
                                                                <option value="10">
                                                                    1% </option>
                                                                <option value="20">
                                                                    2% </option>
                                                                <option value="30">
                                                                    3% </option>
                                                                <option value="40">
                                                                    4% </option>
                                                                <option value="50">
                                                                    5% </option>
                                                                <option value="60">
                                                                    6% </option>
                                                                <option value="70">
                                                                    7% </option>
                                                                <option value="80">
                                                                    8% </option>
                                                                <option value="90">
                                                                    9% </option>
                                                                <option value="100">
                                                                    10% </option>
                                                                <option value="110">
                                                                    11% </option>
                                                                <option value="120">
                                                                    12% </option>
                                                                <option value="130">
                                                                    13% </option>
                                                                <option value="140">
                                                                    14% </option>
                                                                <option value="150">
                                                                    15% </option>
                                                                <option value="160">
                                                                    16% </option>
                                                                <option value="170">
                                                                    17% </option>
                                                                <option value="180">
                                                                    18% </option>
                                                                <option value="190">
                                                                    19% </option>
                                                                <option value="200">
                                                                    20% </option>
                                                                <option value="210">
                                                                    21% </option>
                                                                <option value="220">
                                                                    22% </option>
                                                                <option value="230">
                                                                    23% </option>
                                                                <option value="240">
                                                                    24% </option>
                                                                <option value="250">
                                                                    25% </option>
                                                                <option value="260">
                                                                    26% </option>
                                                                <option value="270">
                                                                    27% </option>
                                                                <option value="280">
                                                                    28% </option>
                                                                <option value="290">
                                                                    29% </option>
                                                                <option value="300">
                                                                    30% </option>
                                                                <option value="310">
                                                                    31% </option>
                                                                <option value="320">
                                                                    32% </option>
                                                                <option value="330">
                                                                    33% </option>
                                                                <option value="340">
                                                                    34% </option>
                                                                <option value="350">
                                                                    35% </option>
                                                                <option value="360">
                                                                    36% </option>
                                                                <option value="370">
                                                                    37% </option>
                                                                <option value="380">
                                                                    38% </option>
                                                                <option value="390">
                                                                    39% </option>
                                                                <option value="400">
                                                                    40% </option>
                                                                <option value="410">
                                                                    41% </option>
                                                                <option value="420">
                                                                    42% </option>
                                                                <option value="430">
                                                                    43% </option>
                                                                <option value="440">
                                                                    44% </option>
                                                                <option value="450">
                                                                    45% </option>
                                                                <option value="460">
                                                                    46% </option>
                                                                <option value="470">
                                                                    47% </option>
                                                                <option value="480">
                                                                    48% </option>
                                                                <option value="490">
                                                                    49% </option>
                                                                <option value="500">
                                                                    50% </option>
                                                                <option value="510">
                                                                    51% </option>
                                                                <option value="520">
                                                                    52% </option>
                                                                <option value="530">
                                                                    53% </option>
                                                                <option value="540">
                                                                    54% </option>
                                                                <option value="550">
                                                                    55% </option>
                                                                <option value="560">
                                                                    56% </option>
                                                                <option value="570">
                                                                    57% </option>
                                                                <option value="580">
                                                                    58% </option>
                                                                <option value="590">
                                                                    59% </option>
                                                                <option value="600">
                                                                    60% </option>
                                                                <option value="610">
                                                                    61% </option>
                                                                <option value="620">
                                                                    62% </option>
                                                                <option value="630">
                                                                    63% </option>
                                                                <option value="640">
                                                                    64% </option>
                                                                <option value="650">
                                                                    65% </option>
                                                                <option value="660">
                                                                    66% </option>
                                                                <option value="670">
                                                                    67% </option>
                                                                <option value="680">
                                                                    68% </option>
                                                                <option value="690">
                                                                    69% </option>
                                                                <option value="700">
                                                                    70% </option>
                                                                <option value="710">
                                                                    71% </option>
                                                                <option value="720">
                                                                    72% </option>
                                                                <option value="730">
                                                                    73% </option>
                                                                <option value="740">
                                                                    74% </option>
                                                                <option value="750">
                                                                    75% </option>
                                                                <option value="760">
                                                                    76% </option>
                                                                <option value="770">
                                                                    77% </option>
                                                                <option value="780">
                                                                    78% </option>
                                                                <option value="790">
                                                                    79% </option>
                                                                <option value="800">
                                                                    80% </option>
                                                                <option value="810">
                                                                    81% </option>
                                                                <option value="820">
                                                                    82% </option>
                                                                <option value="830">
                                                                    83% </option>
                                                                <option value="840">
                                                                    84% </option>
                                                                <option value="850">
                                                                    85% </option>
                                                                <option value="860">
                                                                    86% </option>
                                                                <option value="870">
                                                                    87% </option>
                                                                <option value="880">
                                                                    88% </option>
                                                                <option value="890">
                                                                    89% </option>
                                                                <option value="900">
                                                                    90% </option>
                                                                <option value="910">
                                                                    91% </option>
                                                                <option value="920">
                                                                    92% </option>
                                                                <option value="930">
                                                                    93% </option>
                                                                <option value="940">
                                                                    94% </option>
                                                                <option value="950">
                                                                    95% </option>
                                                                <option value="960">
                                                                    96% </option>
                                                                <option value="970">
                                                                    97% </option>
                                                                <option value="980">
                                                                    98% </option>
                                                                <option value="990">
                                                                    99% </option>
                                                                <option value="1000">
                                                                    100% </option>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                    <tr class="dpac_f">
                                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG" id="id_dpac">
                                                                <font size="2"><a href="#dpac" title="dpac">DPAC</a></font>
                                                            </div>
                                                        </td>
                                                        <td class="Min_f">
                                                            <input name="FILTRO[DEP][12][1][MIN]" id="DPAC_Min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Max_f">
                                                            <input name="FILTRO[DEP][12][1][MAX]" id="DPAC_Max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Acur. Min(%)_f">
                                                            <input name="FILTRO[DEP][12][2][ACC_MIN]" id="DPAC_Acur. Min(%)" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td>
                                                            <select name="FILTRO[DEP][12][1][TOP]" size="1" class="form" id="DPAC_Top" style="width:55px">
                                                                <option value=""></option>
                                                                <option value="1">
                                                                    0.1% </option>
                                                                <option value="5">
                                                                    0.5% </option>
                                                                <option value="10">
                                                                    1% </option>
                                                                <option value="20">
                                                                    2% </option>
                                                                <option value="30">
                                                                    3% </option>
                                                                <option value="40">
                                                                    4% </option>
                                                                <option value="50">
                                                                    5% </option>
                                                                <option value="60">
                                                                    6% </option>
                                                                <option value="70">
                                                                    7% </option>
                                                                <option value="80">
                                                                    8% </option>
                                                                <option value="90">
                                                                    9% </option>
                                                                <option value="100">
                                                                    10% </option>
                                                                <option value="110">
                                                                    11% </option>
                                                                <option value="120">
                                                                    12% </option>
                                                                <option value="130">
                                                                    13% </option>
                                                                <option value="140">
                                                                    14% </option>
                                                                <option value="150">
                                                                    15% </option>
                                                                <option value="160">
                                                                    16% </option>
                                                                <option value="170">
                                                                    17% </option>
                                                                <option value="180">
                                                                    18% </option>
                                                                <option value="190">
                                                                    19% </option>
                                                                <option value="200">
                                                                    20% </option>
                                                                <option value="210">
                                                                    21% </option>
                                                                <option value="220">
                                                                    22% </option>
                                                                <option value="230">
                                                                    23% </option>
                                                                <option value="240">
                                                                    24% </option>
                                                                <option value="250">
                                                                    25% </option>
                                                                <option value="260">
                                                                    26% </option>
                                                                <option value="270">
                                                                    27% </option>
                                                                <option value="280">
                                                                    28% </option>
                                                                <option value="290">
                                                                    29% </option>
                                                                <option value="300">
                                                                    30% </option>
                                                                <option value="310">
                                                                    31% </option>
                                                                <option value="320">
                                                                    32% </option>
                                                                <option value="330">
                                                                    33% </option>
                                                                <option value="340">
                                                                    34% </option>
                                                                <option value="350">
                                                                    35% </option>
                                                                <option value="360">
                                                                    36% </option>
                                                                <option value="370">
                                                                    37% </option>
                                                                <option value="380">
                                                                    38% </option>
                                                                <option value="390">
                                                                    39% </option>
                                                                <option value="400">
                                                                    40% </option>
                                                                <option value="410">
                                                                    41% </option>
                                                                <option value="420">
                                                                    42% </option>
                                                                <option value="430">
                                                                    43% </option>
                                                                <option value="440">
                                                                    44% </option>
                                                                <option value="450">
                                                                    45% </option>
                                                                <option value="460">
                                                                    46% </option>
                                                                <option value="470">
                                                                    47% </option>
                                                                <option value="480">
                                                                    48% </option>
                                                                <option value="490">
                                                                    49% </option>
                                                                <option value="500">
                                                                    50% </option>
                                                                <option value="510">
                                                                    51% </option>
                                                                <option value="520">
                                                                    52% </option>
                                                                <option value="530">
                                                                    53% </option>
                                                                <option value="540">
                                                                    54% </option>
                                                                <option value="550">
                                                                    55% </option>
                                                                <option value="560">
                                                                    56% </option>
                                                                <option value="570">
                                                                    57% </option>
                                                                <option value="580">
                                                                    58% </option>
                                                                <option value="590">
                                                                    59% </option>
                                                                <option value="600">
                                                                    60% </option>
                                                                <option value="610">
                                                                    61% </option>
                                                                <option value="620">
                                                                    62% </option>
                                                                <option value="630">
                                                                    63% </option>
                                                                <option value="640">
                                                                    64% </option>
                                                                <option value="650">
                                                                    65% </option>
                                                                <option value="660">
                                                                    66% </option>
                                                                <option value="670">
                                                                    67% </option>
                                                                <option value="680">
                                                                    68% </option>
                                                                <option value="690">
                                                                    69% </option>
                                                                <option value="700">
                                                                    70% </option>
                                                                <option value="710">
                                                                    71% </option>
                                                                <option value="720">
                                                                    72% </option>
                                                                <option value="730">
                                                                    73% </option>
                                                                <option value="740">
                                                                    74% </option>
                                                                <option value="750">
                                                                    75% </option>
                                                                <option value="760">
                                                                    76% </option>
                                                                <option value="770">
                                                                    77% </option>
                                                                <option value="780">
                                                                    78% </option>
                                                                <option value="790">
                                                                    79% </option>
                                                                <option value="800">
                                                                    80% </option>
                                                                <option value="810">
                                                                    81% </option>
                                                                <option value="820">
                                                                    82% </option>
                                                                <option value="830">
                                                                    83% </option>
                                                                <option value="840">
                                                                    84% </option>
                                                                <option value="850">
                                                                    85% </option>
                                                                <option value="860">
                                                                    86% </option>
                                                                <option value="870">
                                                                    87% </option>
                                                                <option value="880">
                                                                    88% </option>
                                                                <option value="890">
                                                                    89% </option>
                                                                <option value="900">
                                                                    90% </option>
                                                                <option value="910">
                                                                    91% </option>
                                                                <option value="920">
                                                                    92% </option>
                                                                <option value="930">
                                                                    93% </option>
                                                                <option value="940">
                                                                    94% </option>
                                                                <option value="950">
                                                                    95% </option>
                                                                <option value="960">
                                                                    96% </option>
                                                                <option value="970">
                                                                    97% </option>
                                                                <option value="980">
                                                                    98% </option>
                                                                <option value="990">
                                                                    99% </option>
                                                                <option value="1000">
                                                                    100% </option>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                    <tr class="dpg_f">
                                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG" id="id_dpg">
                                                                <font size="2"><a href="#dpg" title="dpg">DPG</a></font>
                                                            </div>
                                                        </td>
                                                        <td class="Min_f">
                                                            <input name="FILTRO[DEP][10][1][MIN]" id="DPG_Min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Max_f">
                                                            <input name="FILTRO[DEP][10][1][MAX]" id="DPG_Max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Acur. Min(%)_f">
                                                            <input name="FILTRO[DEP][10][2][ACC_MIN]" id="DPG_Acur. Min(%)" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td>
                                                            <select name="FILTRO[DEP][10][1][TOP]" size="1" class="form" id="DPG_Top" style="width:55px">
                                                                <option value=""></option>
                                                                <option value="1">
                                                                    0.1% </option>
                                                                <option value="5">
                                                                    0.5% </option>
                                                                <option value="10">
                                                                    1% </option>
                                                                <option value="20">
                                                                    2% </option>
                                                                <option value="30">
                                                                    3% </option>
                                                                <option value="40">
                                                                    4% </option>
                                                                <option value="50">
                                                                    5% </option>
                                                                <option value="60">
                                                                    6% </option>
                                                                <option value="70">
                                                                    7% </option>
                                                                <option value="80">
                                                                    8% </option>
                                                                <option value="90">
                                                                    9% </option>
                                                                <option value="100">
                                                                    10% </option>
                                                                <option value="110">
                                                                    11% </option>
                                                                <option value="120">
                                                                    12% </option>
                                                                <option value="130">
                                                                    13% </option>
                                                                <option value="140">
                                                                    14% </option>
                                                                <option value="150">
                                                                    15% </option>
                                                                <option value="160">
                                                                    16% </option>
                                                                <option value="170">
                                                                    17% </option>
                                                                <option value="180">
                                                                    18% </option>
                                                                <option value="190">
                                                                    19% </option>
                                                                <option value="200">
                                                                    20% </option>
                                                                <option value="210">
                                                                    21% </option>
                                                                <option value="220">
                                                                    22% </option>
                                                                <option value="230">
                                                                    23% </option>
                                                                <option value="240">
                                                                    24% </option>
                                                                <option value="250">
                                                                    25% </option>
                                                                <option value="260">
                                                                    26% </option>
                                                                <option value="270">
                                                                    27% </option>
                                                                <option value="280">
                                                                    28% </option>
                                                                <option value="290">
                                                                    29% </option>
                                                                <option value="300">
                                                                    30% </option>
                                                                <option value="310">
                                                                    31% </option>
                                                                <option value="320">
                                                                    32% </option>
                                                                <option value="330">
                                                                    33% </option>
                                                                <option value="340">
                                                                    34% </option>
                                                                <option value="350">
                                                                    35% </option>
                                                                <option value="360">
                                                                    36% </option>
                                                                <option value="370">
                                                                    37% </option>
                                                                <option value="380">
                                                                    38% </option>
                                                                <option value="390">
                                                                    39% </option>
                                                                <option value="400">
                                                                    40% </option>
                                                                <option value="410">
                                                                    41% </option>
                                                                <option value="420">
                                                                    42% </option>
                                                                <option value="430">
                                                                    43% </option>
                                                                <option value="440">
                                                                    44% </option>
                                                                <option value="450">
                                                                    45% </option>
                                                                <option value="460">
                                                                    46% </option>
                                                                <option value="470">
                                                                    47% </option>
                                                                <option value="480">
                                                                    48% </option>
                                                                <option value="490">
                                                                    49% </option>
                                                                <option value="500">
                                                                    50% </option>
                                                                <option value="510">
                                                                    51% </option>
                                                                <option value="520">
                                                                    52% </option>
                                                                <option value="530">
                                                                    53% </option>
                                                                <option value="540">
                                                                    54% </option>
                                                                <option value="550">
                                                                    55% </option>
                                                                <option value="560">
                                                                    56% </option>
                                                                <option value="570">
                                                                    57% </option>
                                                                <option value="580">
                                                                    58% </option>
                                                                <option value="590">
                                                                    59% </option>
                                                                <option value="600">
                                                                    60% </option>
                                                                <option value="610">
                                                                    61% </option>
                                                                <option value="620">
                                                                    62% </option>
                                                                <option value="630">
                                                                    63% </option>
                                                                <option value="640">
                                                                    64% </option>
                                                                <option value="650">
                                                                    65% </option>
                                                                <option value="660">
                                                                    66% </option>
                                                                <option value="670">
                                                                    67% </option>
                                                                <option value="680">
                                                                    68% </option>
                                                                <option value="690">
                                                                    69% </option>
                                                                <option value="700">
                                                                    70% </option>
                                                                <option value="710">
                                                                    71% </option>
                                                                <option value="720">
                                                                    72% </option>
                                                                <option value="730">
                                                                    73% </option>
                                                                <option value="740">
                                                                    74% </option>
                                                                <option value="750">
                                                                    75% </option>
                                                                <option value="760">
                                                                    76% </option>
                                                                <option value="770">
                                                                    77% </option>
                                                                <option value="780">
                                                                    78% </option>
                                                                <option value="790">
                                                                    79% </option>
                                                                <option value="800">
                                                                    80% </option>
                                                                <option value="810">
                                                                    81% </option>
                                                                <option value="820">
                                                                    82% </option>
                                                                <option value="830">
                                                                    83% </option>
                                                                <option value="840">
                                                                    84% </option>
                                                                <option value="850">
                                                                    85% </option>
                                                                <option value="860">
                                                                    86% </option>
                                                                <option value="870">
                                                                    87% </option>
                                                                <option value="880">
                                                                    88% </option>
                                                                <option value="890">
                                                                    89% </option>
                                                                <option value="900">
                                                                    90% </option>
                                                                <option value="910">
                                                                    91% </option>
                                                                <option value="920">
                                                                    92% </option>
                                                                <option value="930">
                                                                    93% </option>
                                                                <option value="940">
                                                                    94% </option>
                                                                <option value="950">
                                                                    95% </option>
                                                                <option value="960">
                                                                    96% </option>
                                                                <option value="970">
                                                                    97% </option>
                                                                <option value="980">
                                                                    98% </option>
                                                                <option value="990">
                                                                    99% </option>
                                                                <option value="1000">
                                                                    100% </option>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                    <tr class="dpn_f">
                                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG" id="id_dpn">
                                                                <font size="2"><a href="#dpn" title="dpn">DPN</a></font>
                                                            </div>
                                                        </td>
                                                        <td class="Min_f">
                                                            <input name="FILTRO[DEP][21][1][MIN]" id="DPN_Min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Max_f">
                                                            <input name="FILTRO[DEP][21][1][MAX]" id="DPN_Max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Acur. Min(%)_f">
                                                            <input name="FILTRO[DEP][21][2][ACC_MIN]" id="DPN_Acur. Min(%)" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td>
                                                            <select name="FILTRO[DEP][21][1][TOP]" size="1" class="form" id="DPN_Top" style="width:55px">
                                                                <option value=""></option>
                                                                <option value="1">
                                                                    0.1% </option>
                                                                <option value="5">
                                                                    0.5% </option>
                                                                <option value="10">
                                                                    1% </option>
                                                                <option value="20">
                                                                    2% </option>
                                                                <option value="30">
                                                                    3% </option>
                                                                <option value="40">
                                                                    4% </option>
                                                                <option value="50">
                                                                    5% </option>
                                                                <option value="60">
                                                                    6% </option>
                                                                <option value="70">
                                                                    7% </option>
                                                                <option value="80">
                                                                    8% </option>
                                                                <option value="90">
                                                                    9% </option>
                                                                <option value="100">
                                                                    10% </option>
                                                                <option value="110">
                                                                    11% </option>
                                                                <option value="120">
                                                                    12% </option>
                                                                <option value="130">
                                                                    13% </option>
                                                                <option value="140">
                                                                    14% </option>
                                                                <option value="150">
                                                                    15% </option>
                                                                <option value="160">
                                                                    16% </option>
                                                                <option value="170">
                                                                    17% </option>
                                                                <option value="180">
                                                                    18% </option>
                                                                <option value="190">
                                                                    19% </option>
                                                                <option value="200">
                                                                    20% </option>
                                                                <option value="210">
                                                                    21% </option>
                                                                <option value="220">
                                                                    22% </option>
                                                                <option value="230">
                                                                    23% </option>
                                                                <option value="240">
                                                                    24% </option>
                                                                <option value="250">
                                                                    25% </option>
                                                                <option value="260">
                                                                    26% </option>
                                                                <option value="270">
                                                                    27% </option>
                                                                <option value="280">
                                                                    28% </option>
                                                                <option value="290">
                                                                    29% </option>
                                                                <option value="300">
                                                                    30% </option>
                                                                <option value="310">
                                                                    31% </option>
                                                                <option value="320">
                                                                    32% </option>
                                                                <option value="330">
                                                                    33% </option>
                                                                <option value="340">
                                                                    34% </option>
                                                                <option value="350">
                                                                    35% </option>
                                                                <option value="360">
                                                                    36% </option>
                                                                <option value="370">
                                                                    37% </option>
                                                                <option value="380">
                                                                    38% </option>
                                                                <option value="390">
                                                                    39% </option>
                                                                <option value="400">
                                                                    40% </option>
                                                                <option value="410">
                                                                    41% </option>
                                                                <option value="420">
                                                                    42% </option>
                                                                <option value="430">
                                                                    43% </option>
                                                                <option value="440">
                                                                    44% </option>
                                                                <option value="450">
                                                                    45% </option>
                                                                <option value="460">
                                                                    46% </option>
                                                                <option value="470">
                                                                    47% </option>
                                                                <option value="480">
                                                                    48% </option>
                                                                <option value="490">
                                                                    49% </option>
                                                                <option value="500">
                                                                    50% </option>
                                                                <option value="510">
                                                                    51% </option>
                                                                <option value="520">
                                                                    52% </option>
                                                                <option value="530">
                                                                    53% </option>
                                                                <option value="540">
                                                                    54% </option>
                                                                <option value="550">
                                                                    55% </option>
                                                                <option value="560">
                                                                    56% </option>
                                                                <option value="570">
                                                                    57% </option>
                                                                <option value="580">
                                                                    58% </option>
                                                                <option value="590">
                                                                    59% </option>
                                                                <option value="600">
                                                                    60% </option>
                                                                <option value="610">
                                                                    61% </option>
                                                                <option value="620">
                                                                    62% </option>
                                                                <option value="630">
                                                                    63% </option>
                                                                <option value="640">
                                                                    64% </option>
                                                                <option value="650">
                                                                    65% </option>
                                                                <option value="660">
                                                                    66% </option>
                                                                <option value="670">
                                                                    67% </option>
                                                                <option value="680">
                                                                    68% </option>
                                                                <option value="690">
                                                                    69% </option>
                                                                <option value="700">
                                                                    70% </option>
                                                                <option value="710">
                                                                    71% </option>
                                                                <option value="720">
                                                                    72% </option>
                                                                <option value="730">
                                                                    73% </option>
                                                                <option value="740">
                                                                    74% </option>
                                                                <option value="750">
                                                                    75% </option>
                                                                <option value="760">
                                                                    76% </option>
                                                                <option value="770">
                                                                    77% </option>
                                                                <option value="780">
                                                                    78% </option>
                                                                <option value="790">
                                                                    79% </option>
                                                                <option value="800">
                                                                    80% </option>
                                                                <option value="810">
                                                                    81% </option>
                                                                <option value="820">
                                                                    82% </option>
                                                                <option value="830">
                                                                    83% </option>
                                                                <option value="840">
                                                                    84% </option>
                                                                <option value="850">
                                                                    85% </option>
                                                                <option value="860">
                                                                    86% </option>
                                                                <option value="870">
                                                                    87% </option>
                                                                <option value="880">
                                                                    88% </option>
                                                                <option value="890">
                                                                    89% </option>
                                                                <option value="900">
                                                                    90% </option>
                                                                <option value="910">
                                                                    91% </option>
                                                                <option value="920">
                                                                    92% </option>
                                                                <option value="930">
                                                                    93% </option>
                                                                <option value="940">
                                                                    94% </option>
                                                                <option value="950">
                                                                    95% </option>
                                                                <option value="960">
                                                                    96% </option>
                                                                <option value="970">
                                                                    97% </option>
                                                                <option value="980">
                                                                    98% </option>
                                                                <option value="990">
                                                                    99% </option>
                                                                <option value="1000">
                                                                    100% </option>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                    <tr class="dp120_f">
                                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG" id="id_dp120">
                                                                <font size="2"><a href="#dp120" title="dp120">DP120</a></font>
                                                            </div>
                                                        </td>
                                                        <td class="Min_f">
                                                            <input name="FILTRO[DEP][3][1][MIN]" id="DP120_Min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Max_f">
                                                            <input name="FILTRO[DEP][3][1][MAX]" id="DP120_Max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Acur. Min(%)_f">
                                                            <input name="FILTRO[DEP][3][2][ACC_MIN]" id="DP120_Acur. Min(%)" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td>
                                                            <select name="FILTRO[DEP][3][1][TOP]" size="1" class="form" id="DP120_Top" style="width:55px">
                                                                <option value=""></option>
                                                                <option value="1">
                                                                    0.1% </option>
                                                                <option value="5">
                                                                    0.5% </option>
                                                                <option value="10">
                                                                    1% </option>
                                                                <option value="20">
                                                                    2% </option>
                                                                <option value="30">
                                                                    3% </option>
                                                                <option value="40">
                                                                    4% </option>
                                                                <option value="50">
                                                                    5% </option>
                                                                <option value="60">
                                                                    6% </option>
                                                                <option value="70">
                                                                    7% </option>
                                                                <option value="80">
                                                                    8% </option>
                                                                <option value="90">
                                                                    9% </option>
                                                                <option value="100">
                                                                    10% </option>
                                                                <option value="110">
                                                                    11% </option>
                                                                <option value="120">
                                                                    12% </option>
                                                                <option value="130">
                                                                    13% </option>
                                                                <option value="140">
                                                                    14% </option>
                                                                <option value="150">
                                                                    15% </option>
                                                                <option value="160">
                                                                    16% </option>
                                                                <option value="170">
                                                                    17% </option>
                                                                <option value="180">
                                                                    18% </option>
                                                                <option value="190">
                                                                    19% </option>
                                                                <option value="200">
                                                                    20% </option>
                                                                <option value="210">
                                                                    21% </option>
                                                                <option value="220">
                                                                    22% </option>
                                                                <option value="230">
                                                                    23% </option>
                                                                <option value="240">
                                                                    24% </option>
                                                                <option value="250">
                                                                    25% </option>
                                                                <option value="260">
                                                                    26% </option>
                                                                <option value="270">
                                                                    27% </option>
                                                                <option value="280">
                                                                    28% </option>
                                                                <option value="290">
                                                                    29% </option>
                                                                <option value="300">
                                                                    30% </option>
                                                                <option value="310">
                                                                    31% </option>
                                                                <option value="320">
                                                                    32% </option>
                                                                <option value="330">
                                                                    33% </option>
                                                                <option value="340">
                                                                    34% </option>
                                                                <option value="350">
                                                                    35% </option>
                                                                <option value="360">
                                                                    36% </option>
                                                                <option value="370">
                                                                    37% </option>
                                                                <option value="380">
                                                                    38% </option>
                                                                <option value="390">
                                                                    39% </option>
                                                                <option value="400">
                                                                    40% </option>
                                                                <option value="410">
                                                                    41% </option>
                                                                <option value="420">
                                                                    42% </option>
                                                                <option value="430">
                                                                    43% </option>
                                                                <option value="440">
                                                                    44% </option>
                                                                <option value="450">
                                                                    45% </option>
                                                                <option value="460">
                                                                    46% </option>
                                                                <option value="470">
                                                                    47% </option>
                                                                <option value="480">
                                                                    48% </option>
                                                                <option value="490">
                                                                    49% </option>
                                                                <option value="500">
                                                                    50% </option>
                                                                <option value="510">
                                                                    51% </option>
                                                                <option value="520">
                                                                    52% </option>
                                                                <option value="530">
                                                                    53% </option>
                                                                <option value="540">
                                                                    54% </option>
                                                                <option value="550">
                                                                    55% </option>
                                                                <option value="560">
                                                                    56% </option>
                                                                <option value="570">
                                                                    57% </option>
                                                                <option value="580">
                                                                    58% </option>
                                                                <option value="590">
                                                                    59% </option>
                                                                <option value="600">
                                                                    60% </option>
                                                                <option value="610">
                                                                    61% </option>
                                                                <option value="620">
                                                                    62% </option>
                                                                <option value="630">
                                                                    63% </option>
                                                                <option value="640">
                                                                    64% </option>
                                                                <option value="650">
                                                                    65% </option>
                                                                <option value="660">
                                                                    66% </option>
                                                                <option value="670">
                                                                    67% </option>
                                                                <option value="680">
                                                                    68% </option>
                                                                <option value="690">
                                                                    69% </option>
                                                                <option value="700">
                                                                    70% </option>
                                                                <option value="710">
                                                                    71% </option>
                                                                <option value="720">
                                                                    72% </option>
                                                                <option value="730">
                                                                    73% </option>
                                                                <option value="740">
                                                                    74% </option>
                                                                <option value="750">
                                                                    75% </option>
                                                                <option value="760">
                                                                    76% </option>
                                                                <option value="770">
                                                                    77% </option>
                                                                <option value="780">
                                                                    78% </option>
                                                                <option value="790">
                                                                    79% </option>
                                                                <option value="800">
                                                                    80% </option>
                                                                <option value="810">
                                                                    81% </option>
                                                                <option value="820">
                                                                    82% </option>
                                                                <option value="830">
                                                                    83% </option>
                                                                <option value="840">
                                                                    84% </option>
                                                                <option value="850">
                                                                    85% </option>
                                                                <option value="860">
                                                                    86% </option>
                                                                <option value="870">
                                                                    87% </option>
                                                                <option value="880">
                                                                    88% </option>
                                                                <option value="890">
                                                                    89% </option>
                                                                <option value="900">
                                                                    90% </option>
                                                                <option value="910">
                                                                    91% </option>
                                                                <option value="920">
                                                                    92% </option>
                                                                <option value="930">
                                                                    93% </option>
                                                                <option value="940">
                                                                    94% </option>
                                                                <option value="950">
                                                                    95% </option>
                                                                <option value="960">
                                                                    96% </option>
                                                                <option value="970">
                                                                    97% </option>
                                                                <option value="980">
                                                                    98% </option>
                                                                <option value="990">
                                                                    99% </option>
                                                                <option value="1000">
                                                                    100% </option>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                        <td width="33%" valign="top" align="center">
                                            <table border="0" align="center">
                                                <tbody>
                                                    <tr bgcolor="#C4C4FF">
                                                        <td width="63" align="right" bgcolor="#E8E8FF">
                                                            <div align="right">&nbsp;</div>
                                                        </td>
                                                        <td width="33" class="min_f">
                                                            <div align="center">
                                                                <font size="2">Min</font>
                                                            </div>
                                                        </td>
                                                        <td width="33" class="min_f">
                                                            <div align="center">
                                                                <font size="2">Max</font>
                                                            </div>
                                                        </td>
                                                        <td width="33" class="min_f">
                                                            <div align="center">
                                                                <font size="2">Acur. Min(%)</font>
                                                            </div>
                                                        </td>
                                                        <td width="33" class="min_f">
                                                            <div align="center">
                                                                <font size="2">Top</font>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="dp210_f">
                                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG" id="id_dp210">
                                                                <font size="2"><a href="#dp210" title="dp210">DP210</a></font>
                                                            </div>
                                                        </td>
                                                        <td class="Min_f">
                                                            <input name="FILTRO[DEP][4][1][MIN]" id="DP210_Min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Max_f">
                                                            <input name="FILTRO[DEP][4][1][MAX]" id="DP210_Max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Acur. Min(%)_f">
                                                            <input name="FILTRO[DEP][4][2][ACC_MIN]" id="DP210_Acur. Min(%)" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td>
                                                            <select name="FILTRO[DEP][4][1][TOP]" size="1" class="form" id="DP210_Top" style="width:55px">
                                                                <option value=""></option>
                                                                <option value="1">
                                                                    0.1% </option>
                                                                <option value="5">
                                                                    0.5% </option>
                                                                <option value="10">
                                                                    1% </option>
                                                                <option value="20">
                                                                    2% </option>
                                                                <option value="30">
                                                                    3% </option>
                                                                <option value="40">
                                                                    4% </option>
                                                                <option value="50">
                                                                    5% </option>
                                                                <option value="60">
                                                                    6% </option>
                                                                <option value="70">
                                                                    7% </option>
                                                                <option value="80">
                                                                    8% </option>
                                                                <option value="90">
                                                                    9% </option>
                                                                <option value="100">
                                                                    10% </option>
                                                                <option value="110">
                                                                    11% </option>
                                                                <option value="120">
                                                                    12% </option>
                                                                <option value="130">
                                                                    13% </option>
                                                                <option value="140">
                                                                    14% </option>
                                                                <option value="150">
                                                                    15% </option>
                                                                <option value="160">
                                                                    16% </option>
                                                                <option value="170">
                                                                    17% </option>
                                                                <option value="180">
                                                                    18% </option>
                                                                <option value="190">
                                                                    19% </option>
                                                                <option value="200">
                                                                    20% </option>
                                                                <option value="210">
                                                                    21% </option>
                                                                <option value="220">
                                                                    22% </option>
                                                                <option value="230">
                                                                    23% </option>
                                                                <option value="240">
                                                                    24% </option>
                                                                <option value="250">
                                                                    25% </option>
                                                                <option value="260">
                                                                    26% </option>
                                                                <option value="270">
                                                                    27% </option>
                                                                <option value="280">
                                                                    28% </option>
                                                                <option value="290">
                                                                    29% </option>
                                                                <option value="300">
                                                                    30% </option>
                                                                <option value="310">
                                                                    31% </option>
                                                                <option value="320">
                                                                    32% </option>
                                                                <option value="330">
                                                                    33% </option>
                                                                <option value="340">
                                                                    34% </option>
                                                                <option value="350">
                                                                    35% </option>
                                                                <option value="360">
                                                                    36% </option>
                                                                <option value="370">
                                                                    37% </option>
                                                                <option value="380">
                                                                    38% </option>
                                                                <option value="390">
                                                                    39% </option>
                                                                <option value="400">
                                                                    40% </option>
                                                                <option value="410">
                                                                    41% </option>
                                                                <option value="420">
                                                                    42% </option>
                                                                <option value="430">
                                                                    43% </option>
                                                                <option value="440">
                                                                    44% </option>
                                                                <option value="450">
                                                                    45% </option>
                                                                <option value="460">
                                                                    46% </option>
                                                                <option value="470">
                                                                    47% </option>
                                                                <option value="480">
                                                                    48% </option>
                                                                <option value="490">
                                                                    49% </option>
                                                                <option value="500">
                                                                    50% </option>
                                                                <option value="510">
                                                                    51% </option>
                                                                <option value="520">
                                                                    52% </option>
                                                                <option value="530">
                                                                    53% </option>
                                                                <option value="540">
                                                                    54% </option>
                                                                <option value="550">
                                                                    55% </option>
                                                                <option value="560">
                                                                    56% </option>
                                                                <option value="570">
                                                                    57% </option>
                                                                <option value="580">
                                                                    58% </option>
                                                                <option value="590">
                                                                    59% </option>
                                                                <option value="600">
                                                                    60% </option>
                                                                <option value="610">
                                                                    61% </option>
                                                                <option value="620">
                                                                    62% </option>
                                                                <option value="630">
                                                                    63% </option>
                                                                <option value="640">
                                                                    64% </option>
                                                                <option value="650">
                                                                    65% </option>
                                                                <option value="660">
                                                                    66% </option>
                                                                <option value="670">
                                                                    67% </option>
                                                                <option value="680">
                                                                    68% </option>
                                                                <option value="690">
                                                                    69% </option>
                                                                <option value="700">
                                                                    70% </option>
                                                                <option value="710">
                                                                    71% </option>
                                                                <option value="720">
                                                                    72% </option>
                                                                <option value="730">
                                                                    73% </option>
                                                                <option value="740">
                                                                    74% </option>
                                                                <option value="750">
                                                                    75% </option>
                                                                <option value="760">
                                                                    76% </option>
                                                                <option value="770">
                                                                    77% </option>
                                                                <option value="780">
                                                                    78% </option>
                                                                <option value="790">
                                                                    79% </option>
                                                                <option value="800">
                                                                    80% </option>
                                                                <option value="810">
                                                                    81% </option>
                                                                <option value="820">
                                                                    82% </option>
                                                                <option value="830">
                                                                    83% </option>
                                                                <option value="840">
                                                                    84% </option>
                                                                <option value="850">
                                                                    85% </option>
                                                                <option value="860">
                                                                    86% </option>
                                                                <option value="870">
                                                                    87% </option>
                                                                <option value="880">
                                                                    88% </option>
                                                                <option value="890">
                                                                    89% </option>
                                                                <option value="900">
                                                                    90% </option>
                                                                <option value="910">
                                                                    91% </option>
                                                                <option value="920">
                                                                    92% </option>
                                                                <option value="930">
                                                                    93% </option>
                                                                <option value="940">
                                                                    94% </option>
                                                                <option value="950">
                                                                    95% </option>
                                                                <option value="960">
                                                                    96% </option>
                                                                <option value="970">
                                                                    97% </option>
                                                                <option value="980">
                                                                    98% </option>
                                                                <option value="990">
                                                                    99% </option>
                                                                <option value="1000">
                                                                    100% </option>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                    <tr class="dp365_f">
                                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG" id="id_dp365">
                                                                <font size="2"><a href="#dp365" title="dp365">DP365</a></font>
                                                            </div>
                                                        </td>
                                                        <td class="Min_f">
                                                            <input name="FILTRO[DEP][5][1][MIN]" id="DP365_Min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Max_f">
                                                            <input name="FILTRO[DEP][5][1][MAX]" id="DP365_Max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Acur. Min(%)_f">
                                                            <input name="FILTRO[DEP][5][2][ACC_MIN]" id="DP365_Acur. Min(%)" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td>
                                                            <select name="FILTRO[DEP][5][1][TOP]" size="1" class="form" id="DP365_Top" style="width:55px">
                                                                <option value=""></option>
                                                                <option value="1">
                                                                    0.1% </option>
                                                                <option value="5">
                                                                    0.5% </option>
                                                                <option value="10">
                                                                    1% </option>
                                                                <option value="20">
                                                                    2% </option>
                                                                <option value="30">
                                                                    3% </option>
                                                                <option value="40">
                                                                    4% </option>
                                                                <option value="50">
                                                                    5% </option>
                                                                <option value="60">
                                                                    6% </option>
                                                                <option value="70">
                                                                    7% </option>
                                                                <option value="80">
                                                                    8% </option>
                                                                <option value="90">
                                                                    9% </option>
                                                                <option value="100">
                                                                    10% </option>
                                                                <option value="110">
                                                                    11% </option>
                                                                <option value="120">
                                                                    12% </option>
                                                                <option value="130">
                                                                    13% </option>
                                                                <option value="140">
                                                                    14% </option>
                                                                <option value="150">
                                                                    15% </option>
                                                                <option value="160">
                                                                    16% </option>
                                                                <option value="170">
                                                                    17% </option>
                                                                <option value="180">
                                                                    18% </option>
                                                                <option value="190">
                                                                    19% </option>
                                                                <option value="200">
                                                                    20% </option>
                                                                <option value="210">
                                                                    21% </option>
                                                                <option value="220">
                                                                    22% </option>
                                                                <option value="230">
                                                                    23% </option>
                                                                <option value="240">
                                                                    24% </option>
                                                                <option value="250">
                                                                    25% </option>
                                                                <option value="260">
                                                                    26% </option>
                                                                <option value="270">
                                                                    27% </option>
                                                                <option value="280">
                                                                    28% </option>
                                                                <option value="290">
                                                                    29% </option>
                                                                <option value="300">
                                                                    30% </option>
                                                                <option value="310">
                                                                    31% </option>
                                                                <option value="320">
                                                                    32% </option>
                                                                <option value="330">
                                                                    33% </option>
                                                                <option value="340">
                                                                    34% </option>
                                                                <option value="350">
                                                                    35% </option>
                                                                <option value="360">
                                                                    36% </option>
                                                                <option value="370">
                                                                    37% </option>
                                                                <option value="380">
                                                                    38% </option>
                                                                <option value="390">
                                                                    39% </option>
                                                                <option value="400">
                                                                    40% </option>
                                                                <option value="410">
                                                                    41% </option>
                                                                <option value="420">
                                                                    42% </option>
                                                                <option value="430">
                                                                    43% </option>
                                                                <option value="440">
                                                                    44% </option>
                                                                <option value="450">
                                                                    45% </option>
                                                                <option value="460">
                                                                    46% </option>
                                                                <option value="470">
                                                                    47% </option>
                                                                <option value="480">
                                                                    48% </option>
                                                                <option value="490">
                                                                    49% </option>
                                                                <option value="500">
                                                                    50% </option>
                                                                <option value="510">
                                                                    51% </option>
                                                                <option value="520">
                                                                    52% </option>
                                                                <option value="530">
                                                                    53% </option>
                                                                <option value="540">
                                                                    54% </option>
                                                                <option value="550">
                                                                    55% </option>
                                                                <option value="560">
                                                                    56% </option>
                                                                <option value="570">
                                                                    57% </option>
                                                                <option value="580">
                                                                    58% </option>
                                                                <option value="590">
                                                                    59% </option>
                                                                <option value="600">
                                                                    60% </option>
                                                                <option value="610">
                                                                    61% </option>
                                                                <option value="620">
                                                                    62% </option>
                                                                <option value="630">
                                                                    63% </option>
                                                                <option value="640">
                                                                    64% </option>
                                                                <option value="650">
                                                                    65% </option>
                                                                <option value="660">
                                                                    66% </option>
                                                                <option value="670">
                                                                    67% </option>
                                                                <option value="680">
                                                                    68% </option>
                                                                <option value="690">
                                                                    69% </option>
                                                                <option value="700">
                                                                    70% </option>
                                                                <option value="710">
                                                                    71% </option>
                                                                <option value="720">
                                                                    72% </option>
                                                                <option value="730">
                                                                    73% </option>
                                                                <option value="740">
                                                                    74% </option>
                                                                <option value="750">
                                                                    75% </option>
                                                                <option value="760">
                                                                    76% </option>
                                                                <option value="770">
                                                                    77% </option>
                                                                <option value="780">
                                                                    78% </option>
                                                                <option value="790">
                                                                    79% </option>
                                                                <option value="800">
                                                                    80% </option>
                                                                <option value="810">
                                                                    81% </option>
                                                                <option value="820">
                                                                    82% </option>
                                                                <option value="830">
                                                                    83% </option>
                                                                <option value="840">
                                                                    84% </option>
                                                                <option value="850">
                                                                    85% </option>
                                                                <option value="860">
                                                                    86% </option>
                                                                <option value="870">
                                                                    87% </option>
                                                                <option value="880">
                                                                    88% </option>
                                                                <option value="890">
                                                                    89% </option>
                                                                <option value="900">
                                                                    90% </option>
                                                                <option value="910">
                                                                    91% </option>
                                                                <option value="920">
                                                                    92% </option>
                                                                <option value="930">
                                                                    93% </option>
                                                                <option value="940">
                                                                    94% </option>
                                                                <option value="950">
                                                                    95% </option>
                                                                <option value="960">
                                                                    96% </option>
                                                                <option value="970">
                                                                    97% </option>
                                                                <option value="980">
                                                                    98% </option>
                                                                <option value="990">
                                                                    99% </option>
                                                                <option value="1000">
                                                                    100% </option>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                    <tr class="dp450_f">
                                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG" id="id_dp450">
                                                                <font size="2"><a href="#dp450" title="dp450">DP450</a></font>
                                                            </div>
                                                        </td>
                                                        <td class="Min_f">
                                                            <input name="FILTRO[DEP][6][1][MIN]" id="DP450_Min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Max_f">
                                                            <input name="FILTRO[DEP][6][1][MAX]" id="DP450_Max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Acur. Min(%)_f">
                                                            <input name="FILTRO[DEP][6][2][ACC_MIN]" id="DP450_Acur. Min(%)" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td>
                                                            <select name="FILTRO[DEP][6][1][TOP]" size="1" class="form" id="DP450_Top" style="width:55px">
                                                                <option value=""></option>
                                                                <option value="1">
                                                                    0.1% </option>
                                                                <option value="5">
                                                                    0.5% </option>
                                                                <option value="10">
                                                                    1% </option>
                                                                <option value="20">
                                                                    2% </option>
                                                                <option value="30">
                                                                    3% </option>
                                                                <option value="40">
                                                                    4% </option>
                                                                <option value="50">
                                                                    5% </option>
                                                                <option value="60">
                                                                    6% </option>
                                                                <option value="70">
                                                                    7% </option>
                                                                <option value="80">
                                                                    8% </option>
                                                                <option value="90">
                                                                    9% </option>
                                                                <option value="100">
                                                                    10% </option>
                                                                <option value="110">
                                                                    11% </option>
                                                                <option value="120">
                                                                    12% </option>
                                                                <option value="130">
                                                                    13% </option>
                                                                <option value="140">
                                                                    14% </option>
                                                                <option value="150">
                                                                    15% </option>
                                                                <option value="160">
                                                                    16% </option>
                                                                <option value="170">
                                                                    17% </option>
                                                                <option value="180">
                                                                    18% </option>
                                                                <option value="190">
                                                                    19% </option>
                                                                <option value="200">
                                                                    20% </option>
                                                                <option value="210">
                                                                    21% </option>
                                                                <option value="220">
                                                                    22% </option>
                                                                <option value="230">
                                                                    23% </option>
                                                                <option value="240">
                                                                    24% </option>
                                                                <option value="250">
                                                                    25% </option>
                                                                <option value="260">
                                                                    26% </option>
                                                                <option value="270">
                                                                    27% </option>
                                                                <option value="280">
                                                                    28% </option>
                                                                <option value="290">
                                                                    29% </option>
                                                                <option value="300">
                                                                    30% </option>
                                                                <option value="310">
                                                                    31% </option>
                                                                <option value="320">
                                                                    32% </option>
                                                                <option value="330">
                                                                    33% </option>
                                                                <option value="340">
                                                                    34% </option>
                                                                <option value="350">
                                                                    35% </option>
                                                                <option value="360">
                                                                    36% </option>
                                                                <option value="370">
                                                                    37% </option>
                                                                <option value="380">
                                                                    38% </option>
                                                                <option value="390">
                                                                    39% </option>
                                                                <option value="400">
                                                                    40% </option>
                                                                <option value="410">
                                                                    41% </option>
                                                                <option value="420">
                                                                    42% </option>
                                                                <option value="430">
                                                                    43% </option>
                                                                <option value="440">
                                                                    44% </option>
                                                                <option value="450">
                                                                    45% </option>
                                                                <option value="460">
                                                                    46% </option>
                                                                <option value="470">
                                                                    47% </option>
                                                                <option value="480">
                                                                    48% </option>
                                                                <option value="490">
                                                                    49% </option>
                                                                <option value="500">
                                                                    50% </option>
                                                                <option value="510">
                                                                    51% </option>
                                                                <option value="520">
                                                                    52% </option>
                                                                <option value="530">
                                                                    53% </option>
                                                                <option value="540">
                                                                    54% </option>
                                                                <option value="550">
                                                                    55% </option>
                                                                <option value="560">
                                                                    56% </option>
                                                                <option value="570">
                                                                    57% </option>
                                                                <option value="580">
                                                                    58% </option>
                                                                <option value="590">
                                                                    59% </option>
                                                                <option value="600">
                                                                    60% </option>
                                                                <option value="610">
                                                                    61% </option>
                                                                <option value="620">
                                                                    62% </option>
                                                                <option value="630">
                                                                    63% </option>
                                                                <option value="640">
                                                                    64% </option>
                                                                <option value="650">
                                                                    65% </option>
                                                                <option value="660">
                                                                    66% </option>
                                                                <option value="670">
                                                                    67% </option>
                                                                <option value="680">
                                                                    68% </option>
                                                                <option value="690">
                                                                    69% </option>
                                                                <option value="700">
                                                                    70% </option>
                                                                <option value="710">
                                                                    71% </option>
                                                                <option value="720">
                                                                    72% </option>
                                                                <option value="730">
                                                                    73% </option>
                                                                <option value="740">
                                                                    74% </option>
                                                                <option value="750">
                                                                    75% </option>
                                                                <option value="760">
                                                                    76% </option>
                                                                <option value="770">
                                                                    77% </option>
                                                                <option value="780">
                                                                    78% </option>
                                                                <option value="790">
                                                                    79% </option>
                                                                <option value="800">
                                                                    80% </option>
                                                                <option value="810">
                                                                    81% </option>
                                                                <option value="820">
                                                                    82% </option>
                                                                <option value="830">
                                                                    83% </option>
                                                                <option value="840">
                                                                    84% </option>
                                                                <option value="850">
                                                                    85% </option>
                                                                <option value="860">
                                                                    86% </option>
                                                                <option value="870">
                                                                    87% </option>
                                                                <option value="880">
                                                                    88% </option>
                                                                <option value="890">
                                                                    89% </option>
                                                                <option value="900">
                                                                    90% </option>
                                                                <option value="910">
                                                                    91% </option>
                                                                <option value="920">
                                                                    92% </option>
                                                                <option value="930">
                                                                    93% </option>
                                                                <option value="940">
                                                                    94% </option>
                                                                <option value="950">
                                                                    95% </option>
                                                                <option value="960">
                                                                    96% </option>
                                                                <option value="970">
                                                                    97% </option>
                                                                <option value="980">
                                                                    98% </option>
                                                                <option value="990">
                                                                    99% </option>
                                                                <option value="1000">
                                                                    100% </option>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                    <tr class="dpav_f">
                                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG" id="id_dpav">
                                                                <font size="2"><a href="#dpav" title="dpav">DPAV</a></font>
                                                            </div>
                                                        </td>
                                                        <td class="Min_f">
                                                            <input name="FILTRO[DEP][11][1][MIN]" id="DPAV_Min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Max_f">
                                                            <input name="FILTRO[DEP][11][1][MAX]" id="DPAV_Max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Acur. Min(%)_f">
                                                            <input name="FILTRO[DEP][11][2][ACC_MIN]" id="DPAV_Acur. Min(%)" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td>
                                                            <select name="FILTRO[DEP][11][1][TOP]" size="1" class="form" id="DPAV_Top" style="width:55px">
                                                                <option value=""></option>
                                                                <option value="1">
                                                                    0.1% </option>
                                                                <option value="5">
                                                                    0.5% </option>
                                                                <option value="10">
                                                                    1% </option>
                                                                <option value="20">
                                                                    2% </option>
                                                                <option value="30">
                                                                    3% </option>
                                                                <option value="40">
                                                                    4% </option>
                                                                <option value="50">
                                                                    5% </option>
                                                                <option value="60">
                                                                    6% </option>
                                                                <option value="70">
                                                                    7% </option>
                                                                <option value="80">
                                                                    8% </option>
                                                                <option value="90">
                                                                    9% </option>
                                                                <option value="100">
                                                                    10% </option>
                                                                <option value="110">
                                                                    11% </option>
                                                                <option value="120">
                                                                    12% </option>
                                                                <option value="130">
                                                                    13% </option>
                                                                <option value="140">
                                                                    14% </option>
                                                                <option value="150">
                                                                    15% </option>
                                                                <option value="160">
                                                                    16% </option>
                                                                <option value="170">
                                                                    17% </option>
                                                                <option value="180">
                                                                    18% </option>
                                                                <option value="190">
                                                                    19% </option>
                                                                <option value="200">
                                                                    20% </option>
                                                                <option value="210">
                                                                    21% </option>
                                                                <option value="220">
                                                                    22% </option>
                                                                <option value="230">
                                                                    23% </option>
                                                                <option value="240">
                                                                    24% </option>
                                                                <option value="250">
                                                                    25% </option>
                                                                <option value="260">
                                                                    26% </option>
                                                                <option value="270">
                                                                    27% </option>
                                                                <option value="280">
                                                                    28% </option>
                                                                <option value="290">
                                                                    29% </option>
                                                                <option value="300">
                                                                    30% </option>
                                                                <option value="310">
                                                                    31% </option>
                                                                <option value="320">
                                                                    32% </option>
                                                                <option value="330">
                                                                    33% </option>
                                                                <option value="340">
                                                                    34% </option>
                                                                <option value="350">
                                                                    35% </option>
                                                                <option value="360">
                                                                    36% </option>
                                                                <option value="370">
                                                                    37% </option>
                                                                <option value="380">
                                                                    38% </option>
                                                                <option value="390">
                                                                    39% </option>
                                                                <option value="400">
                                                                    40% </option>
                                                                <option value="410">
                                                                    41% </option>
                                                                <option value="420">
                                                                    42% </option>
                                                                <option value="430">
                                                                    43% </option>
                                                                <option value="440">
                                                                    44% </option>
                                                                <option value="450">
                                                                    45% </option>
                                                                <option value="460">
                                                                    46% </option>
                                                                <option value="470">
                                                                    47% </option>
                                                                <option value="480">
                                                                    48% </option>
                                                                <option value="490">
                                                                    49% </option>
                                                                <option value="500">
                                                                    50% </option>
                                                                <option value="510">
                                                                    51% </option>
                                                                <option value="520">
                                                                    52% </option>
                                                                <option value="530">
                                                                    53% </option>
                                                                <option value="540">
                                                                    54% </option>
                                                                <option value="550">
                                                                    55% </option>
                                                                <option value="560">
                                                                    56% </option>
                                                                <option value="570">
                                                                    57% </option>
                                                                <option value="580">
                                                                    58% </option>
                                                                <option value="590">
                                                                    59% </option>
                                                                <option value="600">
                                                                    60% </option>
                                                                <option value="610">
                                                                    61% </option>
                                                                <option value="620">
                                                                    62% </option>
                                                                <option value="630">
                                                                    63% </option>
                                                                <option value="640">
                                                                    64% </option>
                                                                <option value="650">
                                                                    65% </option>
                                                                <option value="660">
                                                                    66% </option>
                                                                <option value="670">
                                                                    67% </option>
                                                                <option value="680">
                                                                    68% </option>
                                                                <option value="690">
                                                                    69% </option>
                                                                <option value="700">
                                                                    70% </option>
                                                                <option value="710">
                                                                    71% </option>
                                                                <option value="720">
                                                                    72% </option>
                                                                <option value="730">
                                                                    73% </option>
                                                                <option value="740">
                                                                    74% </option>
                                                                <option value="750">
                                                                    75% </option>
                                                                <option value="760">
                                                                    76% </option>
                                                                <option value="770">
                                                                    77% </option>
                                                                <option value="780">
                                                                    78% </option>
                                                                <option value="790">
                                                                    79% </option>
                                                                <option value="800">
                                                                    80% </option>
                                                                <option value="810">
                                                                    81% </option>
                                                                <option value="820">
                                                                    82% </option>
                                                                <option value="830">
                                                                    83% </option>
                                                                <option value="840">
                                                                    84% </option>
                                                                <option value="850">
                                                                    85% </option>
                                                                <option value="860">
                                                                    86% </option>
                                                                <option value="870">
                                                                    87% </option>
                                                                <option value="880">
                                                                    88% </option>
                                                                <option value="890">
                                                                    89% </option>
                                                                <option value="900">
                                                                    90% </option>
                                                                <option value="910">
                                                                    91% </option>
                                                                <option value="920">
                                                                    92% </option>
                                                                <option value="930">
                                                                    93% </option>
                                                                <option value="940">
                                                                    94% </option>
                                                                <option value="950">
                                                                    95% </option>
                                                                <option value="960">
                                                                    96% </option>
                                                                <option value="970">
                                                                    97% </option>
                                                                <option value="980">
                                                                    98% </option>
                                                                <option value="990">
                                                                    99% </option>
                                                                <option value="1000">
                                                                    100% </option>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                    <tr class="dcar_f">
                                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG" id="id_dcar">
                                                                <font size="2"><a href="#dcar" title="dcar">DCAR</a></font>
                                                            </div>
                                                        </td>
                                                        <td class="Min_f">
                                                            <input name="FILTRO[DEP][77][1][MIN]" id="DCAR_Min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Max_f">
                                                            <input name="FILTRO[DEP][77][1][MAX]" id="DCAR_Max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Acur. Min(%)_f">
                                                            <input name="FILTRO[DEP][77][2][ACC_MIN]" id="DCAR_Acur. Min(%)" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td>
                                                            <select name="FILTRO[DEP][77][1][TOP]" size="1" class="form" id="DCAR_Top" style="width:55px">
                                                                <option value=""></option>
                                                                <option value="1">
                                                                    0.1% </option>
                                                                <option value="5">
                                                                    0.5% </option>
                                                                <option value="10">
                                                                    1% </option>
                                                                <option value="20">
                                                                    2% </option>
                                                                <option value="30">
                                                                    3% </option>
                                                                <option value="40">
                                                                    4% </option>
                                                                <option value="50">
                                                                    5% </option>
                                                                <option value="60">
                                                                    6% </option>
                                                                <option value="70">
                                                                    7% </option>
                                                                <option value="80">
                                                                    8% </option>
                                                                <option value="90">
                                                                    9% </option>
                                                                <option value="100">
                                                                    10% </option>
                                                                <option value="110">
                                                                    11% </option>
                                                                <option value="120">
                                                                    12% </option>
                                                                <option value="130">
                                                                    13% </option>
                                                                <option value="140">
                                                                    14% </option>
                                                                <option value="150">
                                                                    15% </option>
                                                                <option value="160">
                                                                    16% </option>
                                                                <option value="170">
                                                                    17% </option>
                                                                <option value="180">
                                                                    18% </option>
                                                                <option value="190">
                                                                    19% </option>
                                                                <option value="200">
                                                                    20% </option>
                                                                <option value="210">
                                                                    21% </option>
                                                                <option value="220">
                                                                    22% </option>
                                                                <option value="230">
                                                                    23% </option>
                                                                <option value="240">
                                                                    24% </option>
                                                                <option value="250">
                                                                    25% </option>
                                                                <option value="260">
                                                                    26% </option>
                                                                <option value="270">
                                                                    27% </option>
                                                                <option value="280">
                                                                    28% </option>
                                                                <option value="290">
                                                                    29% </option>
                                                                <option value="300">
                                                                    30% </option>
                                                                <option value="310">
                                                                    31% </option>
                                                                <option value="320">
                                                                    32% </option>
                                                                <option value="330">
                                                                    33% </option>
                                                                <option value="340">
                                                                    34% </option>
                                                                <option value="350">
                                                                    35% </option>
                                                                <option value="360">
                                                                    36% </option>
                                                                <option value="370">
                                                                    37% </option>
                                                                <option value="380">
                                                                    38% </option>
                                                                <option value="390">
                                                                    39% </option>
                                                                <option value="400">
                                                                    40% </option>
                                                                <option value="410">
                                                                    41% </option>
                                                                <option value="420">
                                                                    42% </option>
                                                                <option value="430">
                                                                    43% </option>
                                                                <option value="440">
                                                                    44% </option>
                                                                <option value="450">
                                                                    45% </option>
                                                                <option value="460">
                                                                    46% </option>
                                                                <option value="470">
                                                                    47% </option>
                                                                <option value="480">
                                                                    48% </option>
                                                                <option value="490">
                                                                    49% </option>
                                                                <option value="500">
                                                                    50% </option>
                                                                <option value="510">
                                                                    51% </option>
                                                                <option value="520">
                                                                    52% </option>
                                                                <option value="530">
                                                                    53% </option>
                                                                <option value="540">
                                                                    54% </option>
                                                                <option value="550">
                                                                    55% </option>
                                                                <option value="560">
                                                                    56% </option>
                                                                <option value="570">
                                                                    57% </option>
                                                                <option value="580">
                                                                    58% </option>
                                                                <option value="590">
                                                                    59% </option>
                                                                <option value="600">
                                                                    60% </option>
                                                                <option value="610">
                                                                    61% </option>
                                                                <option value="620">
                                                                    62% </option>
                                                                <option value="630">
                                                                    63% </option>
                                                                <option value="640">
                                                                    64% </option>
                                                                <option value="650">
                                                                    65% </option>
                                                                <option value="660">
                                                                    66% </option>
                                                                <option value="670">
                                                                    67% </option>
                                                                <option value="680">
                                                                    68% </option>
                                                                <option value="690">
                                                                    69% </option>
                                                                <option value="700">
                                                                    70% </option>
                                                                <option value="710">
                                                                    71% </option>
                                                                <option value="720">
                                                                    72% </option>
                                                                <option value="730">
                                                                    73% </option>
                                                                <option value="740">
                                                                    74% </option>
                                                                <option value="750">
                                                                    75% </option>
                                                                <option value="760">
                                                                    76% </option>
                                                                <option value="770">
                                                                    77% </option>
                                                                <option value="780">
                                                                    78% </option>
                                                                <option value="790">
                                                                    79% </option>
                                                                <option value="800">
                                                                    80% </option>
                                                                <option value="810">
                                                                    81% </option>
                                                                <option value="820">
                                                                    82% </option>
                                                                <option value="830">
                                                                    83% </option>
                                                                <option value="840">
                                                                    84% </option>
                                                                <option value="850">
                                                                    85% </option>
                                                                <option value="860">
                                                                    86% </option>
                                                                <option value="870">
                                                                    87% </option>
                                                                <option value="880">
                                                                    88% </option>
                                                                <option value="890">
                                                                    89% </option>
                                                                <option value="900">
                                                                    90% </option>
                                                                <option value="910">
                                                                    91% </option>
                                                                <option value="920">
                                                                    92% </option>
                                                                <option value="930">
                                                                    93% </option>
                                                                <option value="940">
                                                                    94% </option>
                                                                <option value="950">
                                                                    95% </option>
                                                                <option value="960">
                                                                    96% </option>
                                                                <option value="970">
                                                                    97% </option>
                                                                <option value="980">
                                                                    98% </option>
                                                                <option value="990">
                                                                    99% </option>
                                                                <option value="1000">
                                                                    100% </option>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                    <tr class="dims_f">
                                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG" id="id_dims">
                                                                <font size="2"><a href="#dims" title="dims">DIMS</a></font>
                                                            </div>
                                                        </td>
                                                        <td class="Min_f">
                                                            <input name="FILTRO[DEP][78][1][MIN]" id="DIMS_Min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Max_f">
                                                            <input name="FILTRO[DEP][78][1][MAX]" id="DIMS_Max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Acur. Min(%)_f">
                                                            <input name="FILTRO[DEP][78][2][ACC_MIN]" id="DIMS_Acur. Min(%)" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td>
                                                            <select name="FILTRO[DEP][78][1][TOP]" size="1" class="form" id="DIMS_Top" style="width:55px">
                                                                <option value=""></option>
                                                                <option value="1">
                                                                    0.1% </option>
                                                                <option value="5">
                                                                    0.5% </option>
                                                                <option value="10">
                                                                    1% </option>
                                                                <option value="20">
                                                                    2% </option>
                                                                <option value="30">
                                                                    3% </option>
                                                                <option value="40">
                                                                    4% </option>
                                                                <option value="50">
                                                                    5% </option>
                                                                <option value="60">
                                                                    6% </option>
                                                                <option value="70">
                                                                    7% </option>
                                                                <option value="80">
                                                                    8% </option>
                                                                <option value="90">
                                                                    9% </option>
                                                                <option value="100">
                                                                    10% </option>
                                                                <option value="110">
                                                                    11% </option>
                                                                <option value="120">
                                                                    12% </option>
                                                                <option value="130">
                                                                    13% </option>
                                                                <option value="140">
                                                                    14% </option>
                                                                <option value="150">
                                                                    15% </option>
                                                                <option value="160">
                                                                    16% </option>
                                                                <option value="170">
                                                                    17% </option>
                                                                <option value="180">
                                                                    18% </option>
                                                                <option value="190">
                                                                    19% </option>
                                                                <option value="200">
                                                                    20% </option>
                                                                <option value="210">
                                                                    21% </option>
                                                                <option value="220">
                                                                    22% </option>
                                                                <option value="230">
                                                                    23% </option>
                                                                <option value="240">
                                                                    24% </option>
                                                                <option value="250">
                                                                    25% </option>
                                                                <option value="260">
                                                                    26% </option>
                                                                <option value="270">
                                                                    27% </option>
                                                                <option value="280">
                                                                    28% </option>
                                                                <option value="290">
                                                                    29% </option>
                                                                <option value="300">
                                                                    30% </option>
                                                                <option value="310">
                                                                    31% </option>
                                                                <option value="320">
                                                                    32% </option>
                                                                <option value="330">
                                                                    33% </option>
                                                                <option value="340">
                                                                    34% </option>
                                                                <option value="350">
                                                                    35% </option>
                                                                <option value="360">
                                                                    36% </option>
                                                                <option value="370">
                                                                    37% </option>
                                                                <option value="380">
                                                                    38% </option>
                                                                <option value="390">
                                                                    39% </option>
                                                                <option value="400">
                                                                    40% </option>
                                                                <option value="410">
                                                                    41% </option>
                                                                <option value="420">
                                                                    42% </option>
                                                                <option value="430">
                                                                    43% </option>
                                                                <option value="440">
                                                                    44% </option>
                                                                <option value="450">
                                                                    45% </option>
                                                                <option value="460">
                                                                    46% </option>
                                                                <option value="470">
                                                                    47% </option>
                                                                <option value="480">
                                                                    48% </option>
                                                                <option value="490">
                                                                    49% </option>
                                                                <option value="500">
                                                                    50% </option>
                                                                <option value="510">
                                                                    51% </option>
                                                                <option value="520">
                                                                    52% </option>
                                                                <option value="530">
                                                                    53% </option>
                                                                <option value="540">
                                                                    54% </option>
                                                                <option value="550">
                                                                    55% </option>
                                                                <option value="560">
                                                                    56% </option>
                                                                <option value="570">
                                                                    57% </option>
                                                                <option value="580">
                                                                    58% </option>
                                                                <option value="590">
                                                                    59% </option>
                                                                <option value="600">
                                                                    60% </option>
                                                                <option value="610">
                                                                    61% </option>
                                                                <option value="620">
                                                                    62% </option>
                                                                <option value="630">
                                                                    63% </option>
                                                                <option value="640">
                                                                    64% </option>
                                                                <option value="650">
                                                                    65% </option>
                                                                <option value="660">
                                                                    66% </option>
                                                                <option value="670">
                                                                    67% </option>
                                                                <option value="680">
                                                                    68% </option>
                                                                <option value="690">
                                                                    69% </option>
                                                                <option value="700">
                                                                    70% </option>
                                                                <option value="710">
                                                                    71% </option>
                                                                <option value="720">
                                                                    72% </option>
                                                                <option value="730">
                                                                    73% </option>
                                                                <option value="740">
                                                                    74% </option>
                                                                <option value="750">
                                                                    75% </option>
                                                                <option value="760">
                                                                    76% </option>
                                                                <option value="770">
                                                                    77% </option>
                                                                <option value="780">
                                                                    78% </option>
                                                                <option value="790">
                                                                    79% </option>
                                                                <option value="800">
                                                                    80% </option>
                                                                <option value="810">
                                                                    81% </option>
                                                                <option value="820">
                                                                    82% </option>
                                                                <option value="830">
                                                                    83% </option>
                                                                <option value="840">
                                                                    84% </option>
                                                                <option value="850">
                                                                    85% </option>
                                                                <option value="860">
                                                                    86% </option>
                                                                <option value="870">
                                                                    87% </option>
                                                                <option value="880">
                                                                    88% </option>
                                                                <option value="890">
                                                                    89% </option>
                                                                <option value="900">
                                                                    90% </option>
                                                                <option value="910">
                                                                    91% </option>
                                                                <option value="920">
                                                                    92% </option>
                                                                <option value="930">
                                                                    93% </option>
                                                                <option value="940">
                                                                    94% </option>
                                                                <option value="950">
                                                                    95% </option>
                                                                <option value="960">
                                                                    96% </option>
                                                                <option value="970">
                                                                    97% </option>
                                                                <option value="980">
                                                                    98% </option>
                                                                <option value="990">
                                                                    99% </option>
                                                                <option value="1000">
                                                                    100% </option>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                    <tr class="dpe365_f">
                                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG" id="id_dpe365">
                                                                <font size="2"><a href="#dpe365" title="dpe365">DPE365</a></font>
                                                            </div>
                                                        </td>
                                                        <td class="Min_f">
                                                            <input name="FILTRO[DEP][7][1][MIN]" id="DPE365_Min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Max_f">
                                                            <input name="FILTRO[DEP][7][1][MAX]" id="DPE365_Max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Acur. Min(%)_f">
                                                            <input name="FILTRO[DEP][7][2][ACC_MIN]" id="DPE365_Acur. Min(%)" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td>
                                                            <select name="FILTRO[DEP][7][1][TOP]" size="1" class="form" id="DPE365_Top" style="width:55px">
                                                                <option value=""></option>
                                                                <option value="1">
                                                                    0.1% </option>
                                                                <option value="5">
                                                                    0.5% </option>
                                                                <option value="10">
                                                                    1% </option>
                                                                <option value="20">
                                                                    2% </option>
                                                                <option value="30">
                                                                    3% </option>
                                                                <option value="40">
                                                                    4% </option>
                                                                <option value="50">
                                                                    5% </option>
                                                                <option value="60">
                                                                    6% </option>
                                                                <option value="70">
                                                                    7% </option>
                                                                <option value="80">
                                                                    8% </option>
                                                                <option value="90">
                                                                    9% </option>
                                                                <option value="100">
                                                                    10% </option>
                                                                <option value="110">
                                                                    11% </option>
                                                                <option value="120">
                                                                    12% </option>
                                                                <option value="130">
                                                                    13% </option>
                                                                <option value="140">
                                                                    14% </option>
                                                                <option value="150">
                                                                    15% </option>
                                                                <option value="160">
                                                                    16% </option>
                                                                <option value="170">
                                                                    17% </option>
                                                                <option value="180">
                                                                    18% </option>
                                                                <option value="190">
                                                                    19% </option>
                                                                <option value="200">
                                                                    20% </option>
                                                                <option value="210">
                                                                    21% </option>
                                                                <option value="220">
                                                                    22% </option>
                                                                <option value="230">
                                                                    23% </option>
                                                                <option value="240">
                                                                    24% </option>
                                                                <option value="250">
                                                                    25% </option>
                                                                <option value="260">
                                                                    26% </option>
                                                                <option value="270">
                                                                    27% </option>
                                                                <option value="280">
                                                                    28% </option>
                                                                <option value="290">
                                                                    29% </option>
                                                                <option value="300">
                                                                    30% </option>
                                                                <option value="310">
                                                                    31% </option>
                                                                <option value="320">
                                                                    32% </option>
                                                                <option value="330">
                                                                    33% </option>
                                                                <option value="340">
                                                                    34% </option>
                                                                <option value="350">
                                                                    35% </option>
                                                                <option value="360">
                                                                    36% </option>
                                                                <option value="370">
                                                                    37% </option>
                                                                <option value="380">
                                                                    38% </option>
                                                                <option value="390">
                                                                    39% </option>
                                                                <option value="400">
                                                                    40% </option>
                                                                <option value="410">
                                                                    41% </option>
                                                                <option value="420">
                                                                    42% </option>
                                                                <option value="430">
                                                                    43% </option>
                                                                <option value="440">
                                                                    44% </option>
                                                                <option value="450">
                                                                    45% </option>
                                                                <option value="460">
                                                                    46% </option>
                                                                <option value="470">
                                                                    47% </option>
                                                                <option value="480">
                                                                    48% </option>
                                                                <option value="490">
                                                                    49% </option>
                                                                <option value="500">
                                                                    50% </option>
                                                                <option value="510">
                                                                    51% </option>
                                                                <option value="520">
                                                                    52% </option>
                                                                <option value="530">
                                                                    53% </option>
                                                                <option value="540">
                                                                    54% </option>
                                                                <option value="550">
                                                                    55% </option>
                                                                <option value="560">
                                                                    56% </option>
                                                                <option value="570">
                                                                    57% </option>
                                                                <option value="580">
                                                                    58% </option>
                                                                <option value="590">
                                                                    59% </option>
                                                                <option value="600">
                                                                    60% </option>
                                                                <option value="610">
                                                                    61% </option>
                                                                <option value="620">
                                                                    62% </option>
                                                                <option value="630">
                                                                    63% </option>
                                                                <option value="640">
                                                                    64% </option>
                                                                <option value="650">
                                                                    65% </option>
                                                                <option value="660">
                                                                    66% </option>
                                                                <option value="670">
                                                                    67% </option>
                                                                <option value="680">
                                                                    68% </option>
                                                                <option value="690">
                                                                    69% </option>
                                                                <option value="700">
                                                                    70% </option>
                                                                <option value="710">
                                                                    71% </option>
                                                                <option value="720">
                                                                    72% </option>
                                                                <option value="730">
                                                                    73% </option>
                                                                <option value="740">
                                                                    74% </option>
                                                                <option value="750">
                                                                    75% </option>
                                                                <option value="760">
                                                                    76% </option>
                                                                <option value="770">
                                                                    77% </option>
                                                                <option value="780">
                                                                    78% </option>
                                                                <option value="790">
                                                                    79% </option>
                                                                <option value="800">
                                                                    80% </option>
                                                                <option value="810">
                                                                    81% </option>
                                                                <option value="820">
                                                                    82% </option>
                                                                <option value="830">
                                                                    83% </option>
                                                                <option value="840">
                                                                    84% </option>
                                                                <option value="850">
                                                                    85% </option>
                                                                <option value="860">
                                                                    86% </option>
                                                                <option value="870">
                                                                    87% </option>
                                                                <option value="880">
                                                                    88% </option>
                                                                <option value="890">
                                                                    89% </option>
                                                                <option value="900">
                                                                    90% </option>
                                                                <option value="910">
                                                                    91% </option>
                                                                <option value="920">
                                                                    92% </option>
                                                                <option value="930">
                                                                    93% </option>
                                                                <option value="940">
                                                                    94% </option>
                                                                <option value="950">
                                                                    95% </option>
                                                                <option value="960">
                                                                    96% </option>
                                                                <option value="970">
                                                                    97% </option>
                                                                <option value="980">
                                                                    98% </option>
                                                                <option value="990">
                                                                    99% </option>
                                                                <option value="1000">
                                                                    100% </option>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                    <tr class="dpe450_f">
                                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG" id="id_dpe450">
                                                                <font size="2"><a href="#dpe450" title="dpe450">DPE450</a></font>
                                                            </div>
                                                        </td>
                                                        <td class="Min_f">
                                                            <input name="FILTRO[DEP][8][1][MIN]" id="DPE450_Min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Max_f">
                                                            <input name="FILTRO[DEP][8][1][MAX]" id="DPE450_Max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Acur. Min(%)_f">
                                                            <input name="FILTRO[DEP][8][2][ACC_MIN]" id="DPE450_Acur. Min(%)" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td>
                                                            <select name="FILTRO[DEP][8][1][TOP]" size="1" class="form" id="DPE450_Top" style="width:55px">
                                                                <option value=""></option>
                                                                <option value="1">
                                                                    0.1% </option>
                                                                <option value="5">
                                                                    0.5% </option>
                                                                <option value="10">
                                                                    1% </option>
                                                                <option value="20">
                                                                    2% </option>
                                                                <option value="30">
                                                                    3% </option>
                                                                <option value="40">
                                                                    4% </option>
                                                                <option value="50">
                                                                    5% </option>
                                                                <option value="60">
                                                                    6% </option>
                                                                <option value="70">
                                                                    7% </option>
                                                                <option value="80">
                                                                    8% </option>
                                                                <option value="90">
                                                                    9% </option>
                                                                <option value="100">
                                                                    10% </option>
                                                                <option value="110">
                                                                    11% </option>
                                                                <option value="120">
                                                                    12% </option>
                                                                <option value="130">
                                                                    13% </option>
                                                                <option value="140">
                                                                    14% </option>
                                                                <option value="150">
                                                                    15% </option>
                                                                <option value="160">
                                                                    16% </option>
                                                                <option value="170">
                                                                    17% </option>
                                                                <option value="180">
                                                                    18% </option>
                                                                <option value="190">
                                                                    19% </option>
                                                                <option value="200">
                                                                    20% </option>
                                                                <option value="210">
                                                                    21% </option>
                                                                <option value="220">
                                                                    22% </option>
                                                                <option value="230">
                                                                    23% </option>
                                                                <option value="240">
                                                                    24% </option>
                                                                <option value="250">
                                                                    25% </option>
                                                                <option value="260">
                                                                    26% </option>
                                                                <option value="270">
                                                                    27% </option>
                                                                <option value="280">
                                                                    28% </option>
                                                                <option value="290">
                                                                    29% </option>
                                                                <option value="300">
                                                                    30% </option>
                                                                <option value="310">
                                                                    31% </option>
                                                                <option value="320">
                                                                    32% </option>
                                                                <option value="330">
                                                                    33% </option>
                                                                <option value="340">
                                                                    34% </option>
                                                                <option value="350">
                                                                    35% </option>
                                                                <option value="360">
                                                                    36% </option>
                                                                <option value="370">
                                                                    37% </option>
                                                                <option value="380">
                                                                    38% </option>
                                                                <option value="390">
                                                                    39% </option>
                                                                <option value="400">
                                                                    40% </option>
                                                                <option value="410">
                                                                    41% </option>
                                                                <option value="420">
                                                                    42% </option>
                                                                <option value="430">
                                                                    43% </option>
                                                                <option value="440">
                                                                    44% </option>
                                                                <option value="450">
                                                                    45% </option>
                                                                <option value="460">
                                                                    46% </option>
                                                                <option value="470">
                                                                    47% </option>
                                                                <option value="480">
                                                                    48% </option>
                                                                <option value="490">
                                                                    49% </option>
                                                                <option value="500">
                                                                    50% </option>
                                                                <option value="510">
                                                                    51% </option>
                                                                <option value="520">
                                                                    52% </option>
                                                                <option value="530">
                                                                    53% </option>
                                                                <option value="540">
                                                                    54% </option>
                                                                <option value="550">
                                                                    55% </option>
                                                                <option value="560">
                                                                    56% </option>
                                                                <option value="570">
                                                                    57% </option>
                                                                <option value="580">
                                                                    58% </option>
                                                                <option value="590">
                                                                    59% </option>
                                                                <option value="600">
                                                                    60% </option>
                                                                <option value="610">
                                                                    61% </option>
                                                                <option value="620">
                                                                    62% </option>
                                                                <option value="630">
                                                                    63% </option>
                                                                <option value="640">
                                                                    64% </option>
                                                                <option value="650">
                                                                    65% </option>
                                                                <option value="660">
                                                                    66% </option>
                                                                <option value="670">
                                                                    67% </option>
                                                                <option value="680">
                                                                    68% </option>
                                                                <option value="690">
                                                                    69% </option>
                                                                <option value="700">
                                                                    70% </option>
                                                                <option value="710">
                                                                    71% </option>
                                                                <option value="720">
                                                                    72% </option>
                                                                <option value="730">
                                                                    73% </option>
                                                                <option value="740">
                                                                    74% </option>
                                                                <option value="750">
                                                                    75% </option>
                                                                <option value="760">
                                                                    76% </option>
                                                                <option value="770">
                                                                    77% </option>
                                                                <option value="780">
                                                                    78% </option>
                                                                <option value="790">
                                                                    79% </option>
                                                                <option value="800">
                                                                    80% </option>
                                                                <option value="810">
                                                                    81% </option>
                                                                <option value="820">
                                                                    82% </option>
                                                                <option value="830">
                                                                    83% </option>
                                                                <option value="840">
                                                                    84% </option>
                                                                <option value="850">
                                                                    85% </option>
                                                                <option value="860">
                                                                    86% </option>
                                                                <option value="870">
                                                                    87% </option>
                                                                <option value="880">
                                                                    88% </option>
                                                                <option value="890">
                                                                    89% </option>
                                                                <option value="900">
                                                                    90% </option>
                                                                <option value="910">
                                                                    91% </option>
                                                                <option value="920">
                                                                    92% </option>
                                                                <option value="930">
                                                                    93% </option>
                                                                <option value="940">
                                                                    94% </option>
                                                                <option value="950">
                                                                    95% </option>
                                                                <option value="960">
                                                                    96% </option>
                                                                <option value="970">
                                                                    97% </option>
                                                                <option value="980">
                                                                    98% </option>
                                                                <option value="990">
                                                                    99% </option>
                                                                <option value="1000">
                                                                    100% </option>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                    <tr class="daol_f">
                                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG" id="id_daol">
                                                                <font size="2"><a href="#daol" title="daol">DAOL</a></font>
                                                            </div>
                                                        </td>
                                                        <td class="Min_f">
                                                            <input name="FILTRO[DEP][13][1][MIN]" id="DAOL_Min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Max_f">
                                                            <input name="FILTRO[DEP][13][1][MAX]" id="DAOL_Max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Acur. Min(%)_f">
                                                            <input name="FILTRO[DEP][13][2][ACC_MIN]" id="DAOL_Acur. Min(%)" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td>
                                                            <select name="FILTRO[DEP][13][1][TOP]" size="1" class="form" id="DAOL_Top" style="width:55px">
                                                                <option value=""></option>
                                                                <option value="1">
                                                                    0.1% </option>
                                                                <option value="5">
                                                                    0.5% </option>
                                                                <option value="10">
                                                                    1% </option>
                                                                <option value="20">
                                                                    2% </option>
                                                                <option value="30">
                                                                    3% </option>
                                                                <option value="40">
                                                                    4% </option>
                                                                <option value="50">
                                                                    5% </option>
                                                                <option value="60">
                                                                    6% </option>
                                                                <option value="70">
                                                                    7% </option>
                                                                <option value="80">
                                                                    8% </option>
                                                                <option value="90">
                                                                    9% </option>
                                                                <option value="100">
                                                                    10% </option>
                                                                <option value="110">
                                                                    11% </option>
                                                                <option value="120">
                                                                    12% </option>
                                                                <option value="130">
                                                                    13% </option>
                                                                <option value="140">
                                                                    14% </option>
                                                                <option value="150">
                                                                    15% </option>
                                                                <option value="160">
                                                                    16% </option>
                                                                <option value="170">
                                                                    17% </option>
                                                                <option value="180">
                                                                    18% </option>
                                                                <option value="190">
                                                                    19% </option>
                                                                <option value="200">
                                                                    20% </option>
                                                                <option value="210">
                                                                    21% </option>
                                                                <option value="220">
                                                                    22% </option>
                                                                <option value="230">
                                                                    23% </option>
                                                                <option value="240">
                                                                    24% </option>
                                                                <option value="250">
                                                                    25% </option>
                                                                <option value="260">
                                                                    26% </option>
                                                                <option value="270">
                                                                    27% </option>
                                                                <option value="280">
                                                                    28% </option>
                                                                <option value="290">
                                                                    29% </option>
                                                                <option value="300">
                                                                    30% </option>
                                                                <option value="310">
                                                                    31% </option>
                                                                <option value="320">
                                                                    32% </option>
                                                                <option value="330">
                                                                    33% </option>
                                                                <option value="340">
                                                                    34% </option>
                                                                <option value="350">
                                                                    35% </option>
                                                                <option value="360">
                                                                    36% </option>
                                                                <option value="370">
                                                                    37% </option>
                                                                <option value="380">
                                                                    38% </option>
                                                                <option value="390">
                                                                    39% </option>
                                                                <option value="400">
                                                                    40% </option>
                                                                <option value="410">
                                                                    41% </option>
                                                                <option value="420">
                                                                    42% </option>
                                                                <option value="430">
                                                                    43% </option>
                                                                <option value="440">
                                                                    44% </option>
                                                                <option value="450">
                                                                    45% </option>
                                                                <option value="460">
                                                                    46% </option>
                                                                <option value="470">
                                                                    47% </option>
                                                                <option value="480">
                                                                    48% </option>
                                                                <option value="490">
                                                                    49% </option>
                                                                <option value="500">
                                                                    50% </option>
                                                                <option value="510">
                                                                    51% </option>
                                                                <option value="520">
                                                                    52% </option>
                                                                <option value="530">
                                                                    53% </option>
                                                                <option value="540">
                                                                    54% </option>
                                                                <option value="550">
                                                                    55% </option>
                                                                <option value="560">
                                                                    56% </option>
                                                                <option value="570">
                                                                    57% </option>
                                                                <option value="580">
                                                                    58% </option>
                                                                <option value="590">
                                                                    59% </option>
                                                                <option value="600">
                                                                    60% </option>
                                                                <option value="610">
                                                                    61% </option>
                                                                <option value="620">
                                                                    62% </option>
                                                                <option value="630">
                                                                    63% </option>
                                                                <option value="640">
                                                                    64% </option>
                                                                <option value="650">
                                                                    65% </option>
                                                                <option value="660">
                                                                    66% </option>
                                                                <option value="670">
                                                                    67% </option>
                                                                <option value="680">
                                                                    68% </option>
                                                                <option value="690">
                                                                    69% </option>
                                                                <option value="700">
                                                                    70% </option>
                                                                <option value="710">
                                                                    71% </option>
                                                                <option value="720">
                                                                    72% </option>
                                                                <option value="730">
                                                                    73% </option>
                                                                <option value="740">
                                                                    74% </option>
                                                                <option value="750">
                                                                    75% </option>
                                                                <option value="760">
                                                                    76% </option>
                                                                <option value="770">
                                                                    77% </option>
                                                                <option value="780">
                                                                    78% </option>
                                                                <option value="790">
                                                                    79% </option>
                                                                <option value="800">
                                                                    80% </option>
                                                                <option value="810">
                                                                    81% </option>
                                                                <option value="820">
                                                                    82% </option>
                                                                <option value="830">
                                                                    83% </option>
                                                                <option value="840">
                                                                    84% </option>
                                                                <option value="850">
                                                                    85% </option>
                                                                <option value="860">
                                                                    86% </option>
                                                                <option value="870">
                                                                    87% </option>
                                                                <option value="880">
                                                                    88% </option>
                                                                <option value="890">
                                                                    89% </option>
                                                                <option value="900">
                                                                    90% </option>
                                                                <option value="910">
                                                                    91% </option>
                                                                <option value="920">
                                                                    92% </option>
                                                                <option value="930">
                                                                    93% </option>
                                                                <option value="940">
                                                                    94% </option>
                                                                <option value="950">
                                                                    95% </option>
                                                                <option value="960">
                                                                    96% </option>
                                                                <option value="970">
                                                                    97% </option>
                                                                <option value="980">
                                                                    98% </option>
                                                                <option value="990">
                                                                    99% </option>
                                                                <option value="1000">
                                                                    100% </option>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                    <tr class="dacab_f">
                                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG" id="id_dacab">
                                                                <font size="2"><a href="#dacab" title="dacab">DACAB</a></font>
                                                            </div>
                                                        </td>
                                                        <td class="Min_f">
                                                            <input name="FILTRO[DEP][31][1][MIN]" id="DACAB_Min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Max_f">
                                                            <input name="FILTRO[DEP][31][1][MAX]" id="DACAB_Max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Acur. Min(%)_f">
                                                            <input name="FILTRO[DEP][31][2][ACC_MIN]" id="DACAB_Acur. Min(%)" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td>
                                                            <select name="FILTRO[DEP][31][1][TOP]" size="1" class="form" id="DACAB_Top" style="width:55px">
                                                                <option value=""></option>
                                                                <option value="1">
                                                                    0.1% </option>
                                                                <option value="5">
                                                                    0.5% </option>
                                                                <option value="10">
                                                                    1% </option>
                                                                <option value="20">
                                                                    2% </option>
                                                                <option value="30">
                                                                    3% </option>
                                                                <option value="40">
                                                                    4% </option>
                                                                <option value="50">
                                                                    5% </option>
                                                                <option value="60">
                                                                    6% </option>
                                                                <option value="70">
                                                                    7% </option>
                                                                <option value="80">
                                                                    8% </option>
                                                                <option value="90">
                                                                    9% </option>
                                                                <option value="100">
                                                                    10% </option>
                                                                <option value="110">
                                                                    11% </option>
                                                                <option value="120">
                                                                    12% </option>
                                                                <option value="130">
                                                                    13% </option>
                                                                <option value="140">
                                                                    14% </option>
                                                                <option value="150">
                                                                    15% </option>
                                                                <option value="160">
                                                                    16% </option>
                                                                <option value="170">
                                                                    17% </option>
                                                                <option value="180">
                                                                    18% </option>
                                                                <option value="190">
                                                                    19% </option>
                                                                <option value="200">
                                                                    20% </option>
                                                                <option value="210">
                                                                    21% </option>
                                                                <option value="220">
                                                                    22% </option>
                                                                <option value="230">
                                                                    23% </option>
                                                                <option value="240">
                                                                    24% </option>
                                                                <option value="250">
                                                                    25% </option>
                                                                <option value="260">
                                                                    26% </option>
                                                                <option value="270">
                                                                    27% </option>
                                                                <option value="280">
                                                                    28% </option>
                                                                <option value="290">
                                                                    29% </option>
                                                                <option value="300">
                                                                    30% </option>
                                                                <option value="310">
                                                                    31% </option>
                                                                <option value="320">
                                                                    32% </option>
                                                                <option value="330">
                                                                    33% </option>
                                                                <option value="340">
                                                                    34% </option>
                                                                <option value="350">
                                                                    35% </option>
                                                                <option value="360">
                                                                    36% </option>
                                                                <option value="370">
                                                                    37% </option>
                                                                <option value="380">
                                                                    38% </option>
                                                                <option value="390">
                                                                    39% </option>
                                                                <option value="400">
                                                                    40% </option>
                                                                <option value="410">
                                                                    41% </option>
                                                                <option value="420">
                                                                    42% </option>
                                                                <option value="430">
                                                                    43% </option>
                                                                <option value="440">
                                                                    44% </option>
                                                                <option value="450">
                                                                    45% </option>
                                                                <option value="460">
                                                                    46% </option>
                                                                <option value="470">
                                                                    47% </option>
                                                                <option value="480">
                                                                    48% </option>
                                                                <option value="490">
                                                                    49% </option>
                                                                <option value="500">
                                                                    50% </option>
                                                                <option value="510">
                                                                    51% </option>
                                                                <option value="520">
                                                                    52% </option>
                                                                <option value="530">
                                                                    53% </option>
                                                                <option value="540">
                                                                    54% </option>
                                                                <option value="550">
                                                                    55% </option>
                                                                <option value="560">
                                                                    56% </option>
                                                                <option value="570">
                                                                    57% </option>
                                                                <option value="580">
                                                                    58% </option>
                                                                <option value="590">
                                                                    59% </option>
                                                                <option value="600">
                                                                    60% </option>
                                                                <option value="610">
                                                                    61% </option>
                                                                <option value="620">
                                                                    62% </option>
                                                                <option value="630">
                                                                    63% </option>
                                                                <option value="640">
                                                                    64% </option>
                                                                <option value="650">
                                                                    65% </option>
                                                                <option value="660">
                                                                    66% </option>
                                                                <option value="670">
                                                                    67% </option>
                                                                <option value="680">
                                                                    68% </option>
                                                                <option value="690">
                                                                    69% </option>
                                                                <option value="700">
                                                                    70% </option>
                                                                <option value="710">
                                                                    71% </option>
                                                                <option value="720">
                                                                    72% </option>
                                                                <option value="730">
                                                                    73% </option>
                                                                <option value="740">
                                                                    74% </option>
                                                                <option value="750">
                                                                    75% </option>
                                                                <option value="760">
                                                                    76% </option>
                                                                <option value="770">
                                                                    77% </option>
                                                                <option value="780">
                                                                    78% </option>
                                                                <option value="790">
                                                                    79% </option>
                                                                <option value="800">
                                                                    80% </option>
                                                                <option value="810">
                                                                    81% </option>
                                                                <option value="820">
                                                                    82% </option>
                                                                <option value="830">
                                                                    83% </option>
                                                                <option value="840">
                                                                    84% </option>
                                                                <option value="850">
                                                                    85% </option>
                                                                <option value="860">
                                                                    86% </option>
                                                                <option value="870">
                                                                    87% </option>
                                                                <option value="880">
                                                                    88% </option>
                                                                <option value="890">
                                                                    89% </option>
                                                                <option value="900">
                                                                    90% </option>
                                                                <option value="910">
                                                                    91% </option>
                                                                <option value="920">
                                                                    92% </option>
                                                                <option value="930">
                                                                    93% </option>
                                                                <option value="940">
                                                                    94% </option>
                                                                <option value="950">
                                                                    95% </option>
                                                                <option value="960">
                                                                    96% </option>
                                                                <option value="970">
                                                                    97% </option>
                                                                <option value="980">
                                                                    98% </option>
                                                                <option value="990">
                                                                    99% </option>
                                                                <option value="1000">
                                                                    100% </option>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                    <tr class="dmar_f">
                                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG" id="id_dmar">
                                                                <font size="2"><a href="#dmar" title="dmar">DMAR</a></font>
                                                            </div>
                                                        </td>
                                                        <td class="Min_f">
                                                            <input name="FILTRO[DEP][48][1][MIN]" id="DMAR_Min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Max_f">
                                                            <input name="FILTRO[DEP][48][1][MAX]" id="DMAR_Max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Acur. Min(%)_f">
                                                            <input name="FILTRO[DEP][48][2][ACC_MIN]" id="DMAR_Acur. Min(%)" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td>
                                                            <select name="FILTRO[DEP][48][1][TOP]" size="1" class="form" id="DMAR_Top" style="width:55px">
                                                                <option value=""></option>
                                                                <option value="1">
                                                                    0.1% </option>
                                                                <option value="5">
                                                                    0.5% </option>
                                                                <option value="10">
                                                                    1% </option>
                                                                <option value="20">
                                                                    2% </option>
                                                                <option value="30">
                                                                    3% </option>
                                                                <option value="40">
                                                                    4% </option>
                                                                <option value="50">
                                                                    5% </option>
                                                                <option value="60">
                                                                    6% </option>
                                                                <option value="70">
                                                                    7% </option>
                                                                <option value="80">
                                                                    8% </option>
                                                                <option value="90">
                                                                    9% </option>
                                                                <option value="100">
                                                                    10% </option>
                                                                <option value="110">
                                                                    11% </option>
                                                                <option value="120">
                                                                    12% </option>
                                                                <option value="130">
                                                                    13% </option>
                                                                <option value="140">
                                                                    14% </option>
                                                                <option value="150">
                                                                    15% </option>
                                                                <option value="160">
                                                                    16% </option>
                                                                <option value="170">
                                                                    17% </option>
                                                                <option value="180">
                                                                    18% </option>
                                                                <option value="190">
                                                                    19% </option>
                                                                <option value="200">
                                                                    20% </option>
                                                                <option value="210">
                                                                    21% </option>
                                                                <option value="220">
                                                                    22% </option>
                                                                <option value="230">
                                                                    23% </option>
                                                                <option value="240">
                                                                    24% </option>
                                                                <option value="250">
                                                                    25% </option>
                                                                <option value="260">
                                                                    26% </option>
                                                                <option value="270">
                                                                    27% </option>
                                                                <option value="280">
                                                                    28% </option>
                                                                <option value="290">
                                                                    29% </option>
                                                                <option value="300">
                                                                    30% </option>
                                                                <option value="310">
                                                                    31% </option>
                                                                <option value="320">
                                                                    32% </option>
                                                                <option value="330">
                                                                    33% </option>
                                                                <option value="340">
                                                                    34% </option>
                                                                <option value="350">
                                                                    35% </option>
                                                                <option value="360">
                                                                    36% </option>
                                                                <option value="370">
                                                                    37% </option>
                                                                <option value="380">
                                                                    38% </option>
                                                                <option value="390">
                                                                    39% </option>
                                                                <option value="400">
                                                                    40% </option>
                                                                <option value="410">
                                                                    41% </option>
                                                                <option value="420">
                                                                    42% </option>
                                                                <option value="430">
                                                                    43% </option>
                                                                <option value="440">
                                                                    44% </option>
                                                                <option value="450">
                                                                    45% </option>
                                                                <option value="460">
                                                                    46% </option>
                                                                <option value="470">
                                                                    47% </option>
                                                                <option value="480">
                                                                    48% </option>
                                                                <option value="490">
                                                                    49% </option>
                                                                <option value="500">
                                                                    50% </option>
                                                                <option value="510">
                                                                    51% </option>
                                                                <option value="520">
                                                                    52% </option>
                                                                <option value="530">
                                                                    53% </option>
                                                                <option value="540">
                                                                    54% </option>
                                                                <option value="550">
                                                                    55% </option>
                                                                <option value="560">
                                                                    56% </option>
                                                                <option value="570">
                                                                    57% </option>
                                                                <option value="580">
                                                                    58% </option>
                                                                <option value="590">
                                                                    59% </option>
                                                                <option value="600">
                                                                    60% </option>
                                                                <option value="610">
                                                                    61% </option>
                                                                <option value="620">
                                                                    62% </option>
                                                                <option value="630">
                                                                    63% </option>
                                                                <option value="640">
                                                                    64% </option>
                                                                <option value="650">
                                                                    65% </option>
                                                                <option value="660">
                                                                    66% </option>
                                                                <option value="670">
                                                                    67% </option>
                                                                <option value="680">
                                                                    68% </option>
                                                                <option value="690">
                                                                    69% </option>
                                                                <option value="700">
                                                                    70% </option>
                                                                <option value="710">
                                                                    71% </option>
                                                                <option value="720">
                                                                    72% </option>
                                                                <option value="730">
                                                                    73% </option>
                                                                <option value="740">
                                                                    74% </option>
                                                                <option value="750">
                                                                    75% </option>
                                                                <option value="760">
                                                                    76% </option>
                                                                <option value="770">
                                                                    77% </option>
                                                                <option value="780">
                                                                    78% </option>
                                                                <option value="790">
                                                                    79% </option>
                                                                <option value="800">
                                                                    80% </option>
                                                                <option value="810">
                                                                    81% </option>
                                                                <option value="820">
                                                                    82% </option>
                                                                <option value="830">
                                                                    83% </option>
                                                                <option value="840">
                                                                    84% </option>
                                                                <option value="850">
                                                                    85% </option>
                                                                <option value="860">
                                                                    86% </option>
                                                                <option value="870">
                                                                    87% </option>
                                                                <option value="880">
                                                                    88% </option>
                                                                <option value="890">
                                                                    89% </option>
                                                                <option value="900">
                                                                    90% </option>
                                                                <option value="910">
                                                                    91% </option>
                                                                <option value="920">
                                                                    92% </option>
                                                                <option value="930">
                                                                    93% </option>
                                                                <option value="940">
                                                                    94% </option>
                                                                <option value="950">
                                                                    95% </option>
                                                                <option value="960">
                                                                    96% </option>
                                                                <option value="970">
                                                                    97% </option>
                                                                <option value="980">
                                                                    98% </option>
                                                                <option value="990">
                                                                    99% </option>
                                                                <option value="1000">
                                                                    100% </option>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                    <tr class="dmac_f">
                                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG" id="id_dmac">
                                                                <font size="2"><a href="#dmac" title="dmac">DMAC</a></font>
                                                            </div>
                                                        </td>
                                                        <td class="Min_f">
                                                            <input name="FILTRO[DEP][76][1][MIN]" id="DMAC_Min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Max_f">
                                                            <input name="FILTRO[DEP][76][1][MAX]" id="DMAC_Max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Acur. Min(%)_f">
                                                            <input name="FILTRO[DEP][76][2][ACC_MIN]" id="DMAC_Acur. Min(%)" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td>
                                                            <select name="FILTRO[DEP][76][1][TOP]" size="1" class="form" id="DMAC_Top" style="width:55px">
                                                                <option value=""></option>
                                                                <option value="1">
                                                                    0.1% </option>
                                                                <option value="5">
                                                                    0.5% </option>
                                                                <option value="10">
                                                                    1% </option>
                                                                <option value="20">
                                                                    2% </option>
                                                                <option value="30">
                                                                    3% </option>
                                                                <option value="40">
                                                                    4% </option>
                                                                <option value="50">
                                                                    5% </option>
                                                                <option value="60">
                                                                    6% </option>
                                                                <option value="70">
                                                                    7% </option>
                                                                <option value="80">
                                                                    8% </option>
                                                                <option value="90">
                                                                    9% </option>
                                                                <option value="100">
                                                                    10% </option>
                                                                <option value="110">
                                                                    11% </option>
                                                                <option value="120">
                                                                    12% </option>
                                                                <option value="130">
                                                                    13% </option>
                                                                <option value="140">
                                                                    14% </option>
                                                                <option value="150">
                                                                    15% </option>
                                                                <option value="160">
                                                                    16% </option>
                                                                <option value="170">
                                                                    17% </option>
                                                                <option value="180">
                                                                    18% </option>
                                                                <option value="190">
                                                                    19% </option>
                                                                <option value="200">
                                                                    20% </option>
                                                                <option value="210">
                                                                    21% </option>
                                                                <option value="220">
                                                                    22% </option>
                                                                <option value="230">
                                                                    23% </option>
                                                                <option value="240">
                                                                    24% </option>
                                                                <option value="250">
                                                                    25% </option>
                                                                <option value="260">
                                                                    26% </option>
                                                                <option value="270">
                                                                    27% </option>
                                                                <option value="280">
                                                                    28% </option>
                                                                <option value="290">
                                                                    29% </option>
                                                                <option value="300">
                                                                    30% </option>
                                                                <option value="310">
                                                                    31% </option>
                                                                <option value="320">
                                                                    32% </option>
                                                                <option value="330">
                                                                    33% </option>
                                                                <option value="340">
                                                                    34% </option>
                                                                <option value="350">
                                                                    35% </option>
                                                                <option value="360">
                                                                    36% </option>
                                                                <option value="370">
                                                                    37% </option>
                                                                <option value="380">
                                                                    38% </option>
                                                                <option value="390">
                                                                    39% </option>
                                                                <option value="400">
                                                                    40% </option>
                                                                <option value="410">
                                                                    41% </option>
                                                                <option value="420">
                                                                    42% </option>
                                                                <option value="430">
                                                                    43% </option>
                                                                <option value="440">
                                                                    44% </option>
                                                                <option value="450">
                                                                    45% </option>
                                                                <option value="460">
                                                                    46% </option>
                                                                <option value="470">
                                                                    47% </option>
                                                                <option value="480">
                                                                    48% </option>
                                                                <option value="490">
                                                                    49% </option>
                                                                <option value="500">
                                                                    50% </option>
                                                                <option value="510">
                                                                    51% </option>
                                                                <option value="520">
                                                                    52% </option>
                                                                <option value="530">
                                                                    53% </option>
                                                                <option value="540">
                                                                    54% </option>
                                                                <option value="550">
                                                                    55% </option>
                                                                <option value="560">
                                                                    56% </option>
                                                                <option value="570">
                                                                    57% </option>
                                                                <option value="580">
                                                                    58% </option>
                                                                <option value="590">
                                                                    59% </option>
                                                                <option value="600">
                                                                    60% </option>
                                                                <option value="610">
                                                                    61% </option>
                                                                <option value="620">
                                                                    62% </option>
                                                                <option value="630">
                                                                    63% </option>
                                                                <option value="640">
                                                                    64% </option>
                                                                <option value="650">
                                                                    65% </option>
                                                                <option value="660">
                                                                    66% </option>
                                                                <option value="670">
                                                                    67% </option>
                                                                <option value="680">
                                                                    68% </option>
                                                                <option value="690">
                                                                    69% </option>
                                                                <option value="700">
                                                                    70% </option>
                                                                <option value="710">
                                                                    71% </option>
                                                                <option value="720">
                                                                    72% </option>
                                                                <option value="730">
                                                                    73% </option>
                                                                <option value="740">
                                                                    74% </option>
                                                                <option value="750">
                                                                    75% </option>
                                                                <option value="760">
                                                                    76% </option>
                                                                <option value="770">
                                                                    77% </option>
                                                                <option value="780">
                                                                    78% </option>
                                                                <option value="790">
                                                                    79% </option>
                                                                <option value="800">
                                                                    80% </option>
                                                                <option value="810">
                                                                    81% </option>
                                                                <option value="820">
                                                                    82% </option>
                                                                <option value="830">
                                                                    83% </option>
                                                                <option value="840">
                                                                    84% </option>
                                                                <option value="850">
                                                                    85% </option>
                                                                <option value="860">
                                                                    86% </option>
                                                                <option value="870">
                                                                    87% </option>
                                                                <option value="880">
                                                                    88% </option>
                                                                <option value="890">
                                                                    89% </option>
                                                                <option value="900">
                                                                    90% </option>
                                                                <option value="910">
                                                                    91% </option>
                                                                <option value="920">
                                                                    92% </option>
                                                                <option value="930">
                                                                    93% </option>
                                                                <option value="940">
                                                                    94% </option>
                                                                <option value="950">
                                                                    95% </option>
                                                                <option value="960">
                                                                    96% </option>
                                                                <option value="970">
                                                                    97% </option>
                                                                <option value="980">
                                                                    98% </option>
                                                                <option value="990">
                                                                    99% </option>
                                                                <option value="1000">
                                                                    100% </option>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                    <tr class="dpcq_f">
                                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG" id="id_dpcq">
                                                                <font size="2"><a href="#dpcq" title="dpcq">DPCQ</a></font>
                                                            </div>
                                                        </td>
                                                        <td class="Min_f">
                                                            <input name="FILTRO[DEP][49][1][MIN]" id="DPCQ_Min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Max_f">
                                                            <input name="FILTRO[DEP][49][1][MAX]" id="DPCQ_Max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Acur. Min(%)_f">
                                                            <input name="FILTRO[DEP][49][2][ACC_MIN]" id="DPCQ_Acur. Min(%)" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td>
                                                            <select name="FILTRO[DEP][49][1][TOP]" size="1" class="form" id="DPCQ_Top" style="width:55px">
                                                                <option value=""></option>
                                                                <option value="1">
                                                                    0.1% </option>
                                                                <option value="5">
                                                                    0.5% </option>
                                                                <option value="10">
                                                                    1% </option>
                                                                <option value="20">
                                                                    2% </option>
                                                                <option value="30">
                                                                    3% </option>
                                                                <option value="40">
                                                                    4% </option>
                                                                <option value="50">
                                                                    5% </option>
                                                                <option value="60">
                                                                    6% </option>
                                                                <option value="70">
                                                                    7% </option>
                                                                <option value="80">
                                                                    8% </option>
                                                                <option value="90">
                                                                    9% </option>
                                                                <option value="100">
                                                                    10% </option>
                                                                <option value="110">
                                                                    11% </option>
                                                                <option value="120">
                                                                    12% </option>
                                                                <option value="130">
                                                                    13% </option>
                                                                <option value="140">
                                                                    14% </option>
                                                                <option value="150">
                                                                    15% </option>
                                                                <option value="160">
                                                                    16% </option>
                                                                <option value="170">
                                                                    17% </option>
                                                                <option value="180">
                                                                    18% </option>
                                                                <option value="190">
                                                                    19% </option>
                                                                <option value="200">
                                                                    20% </option>
                                                                <option value="210">
                                                                    21% </option>
                                                                <option value="220">
                                                                    22% </option>
                                                                <option value="230">
                                                                    23% </option>
                                                                <option value="240">
                                                                    24% </option>
                                                                <option value="250">
                                                                    25% </option>
                                                                <option value="260">
                                                                    26% </option>
                                                                <option value="270">
                                                                    27% </option>
                                                                <option value="280">
                                                                    28% </option>
                                                                <option value="290">
                                                                    29% </option>
                                                                <option value="300">
                                                                    30% </option>
                                                                <option value="310">
                                                                    31% </option>
                                                                <option value="320">
                                                                    32% </option>
                                                                <option value="330">
                                                                    33% </option>
                                                                <option value="340">
                                                                    34% </option>
                                                                <option value="350">
                                                                    35% </option>
                                                                <option value="360">
                                                                    36% </option>
                                                                <option value="370">
                                                                    37% </option>
                                                                <option value="380">
                                                                    38% </option>
                                                                <option value="390">
                                                                    39% </option>
                                                                <option value="400">
                                                                    40% </option>
                                                                <option value="410">
                                                                    41% </option>
                                                                <option value="420">
                                                                    42% </option>
                                                                <option value="430">
                                                                    43% </option>
                                                                <option value="440">
                                                                    44% </option>
                                                                <option value="450">
                                                                    45% </option>
                                                                <option value="460">
                                                                    46% </option>
                                                                <option value="470">
                                                                    47% </option>
                                                                <option value="480">
                                                                    48% </option>
                                                                <option value="490">
                                                                    49% </option>
                                                                <option value="500">
                                                                    50% </option>
                                                                <option value="510">
                                                                    51% </option>
                                                                <option value="520">
                                                                    52% </option>
                                                                <option value="530">
                                                                    53% </option>
                                                                <option value="540">
                                                                    54% </option>
                                                                <option value="550">
                                                                    55% </option>
                                                                <option value="560">
                                                                    56% </option>
                                                                <option value="570">
                                                                    57% </option>
                                                                <option value="580">
                                                                    58% </option>
                                                                <option value="590">
                                                                    59% </option>
                                                                <option value="600">
                                                                    60% </option>
                                                                <option value="610">
                                                                    61% </option>
                                                                <option value="620">
                                                                    62% </option>
                                                                <option value="630">
                                                                    63% </option>
                                                                <option value="640">
                                                                    64% </option>
                                                                <option value="650">
                                                                    65% </option>
                                                                <option value="660">
                                                                    66% </option>
                                                                <option value="670">
                                                                    67% </option>
                                                                <option value="680">
                                                                    68% </option>
                                                                <option value="690">
                                                                    69% </option>
                                                                <option value="700">
                                                                    70% </option>
                                                                <option value="710">
                                                                    71% </option>
                                                                <option value="720">
                                                                    72% </option>
                                                                <option value="730">
                                                                    73% </option>
                                                                <option value="740">
                                                                    74% </option>
                                                                <option value="750">
                                                                    75% </option>
                                                                <option value="760">
                                                                    76% </option>
                                                                <option value="770">
                                                                    77% </option>
                                                                <option value="780">
                                                                    78% </option>
                                                                <option value="790">
                                                                    79% </option>
                                                                <option value="800">
                                                                    80% </option>
                                                                <option value="810">
                                                                    81% </option>
                                                                <option value="820">
                                                                    82% </option>
                                                                <option value="830">
                                                                    83% </option>
                                                                <option value="840">
                                                                    84% </option>
                                                                <option value="850">
                                                                    85% </option>
                                                                <option value="860">
                                                                    86% </option>
                                                                <option value="870">
                                                                    87% </option>
                                                                <option value="880">
                                                                    88% </option>
                                                                <option value="890">
                                                                    89% </option>
                                                                <option value="900">
                                                                    90% </option>
                                                                <option value="910">
                                                                    91% </option>
                                                                <option value="920">
                                                                    92% </option>
                                                                <option value="930">
                                                                    93% </option>
                                                                <option value="940">
                                                                    94% </option>
                                                                <option value="950">
                                                                    95% </option>
                                                                <option value="960">
                                                                    96% </option>
                                                                <option value="970">
                                                                    97% </option>
                                                                <option value="980">
                                                                    98% </option>
                                                                <option value="990">
                                                                    99% </option>
                                                                <option value="1000">
                                                                    100% </option>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                        <td width="33%" valign="top" align="center">
                                            <table border="0" align="center">
                                                <tbody>
                                                    <tr bgcolor="#C4C4FF">
                                                        <td width="63" align="right" bgcolor="#E8E8FF">
                                                            <div align="right">&nbsp;</div>
                                                        </td>
                                                        <td width="33" class="min_f">
                                                            <div align="center">
                                                                <font size="2">Min</font>
                                                            </div>
                                                        </td>
                                                        <td width="33" class="min_f">
                                                            <div align="center">
                                                                <font size="2">Max</font>
                                                            </div>
                                                        </td>
                                                        <td width="33" class="min_f">
                                                            <div align="center">
                                                                <font size="2">Acur. Min(%)</font>
                                                            </div>
                                                        </td>
                                                        <td width="33" class="min_f">
                                                            <div align="center">
                                                                <font size="2">Top</font>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="dppc_f">
                                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG" id="id_dppc">
                                                                <font size="2"><a href="#dppc" title="dppc">DPPC</a></font>
                                                            </div>
                                                        </td>
                                                        <td class="Min_f">
                                                            <input name="FILTRO[DEP][51][1][MIN]" id="DPPC_Min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Max_f">
                                                            <input name="FILTRO[DEP][51][1][MAX]" id="DPPC_Max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Acur. Min(%)_f">
                                                            <input name="FILTRO[DEP][51][2][ACC_MIN]" id="DPPC_Acur. Min(%)" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td>
                                                            <select name="FILTRO[DEP][51][1][TOP]" size="1" class="form" id="DPPC_Top" style="width:55px">
                                                                <option value=""></option>
                                                                <option value="1">
                                                                    0.1% </option>
                                                                <option value="5">
                                                                    0.5% </option>
                                                                <option value="10">
                                                                    1% </option>
                                                                <option value="20">
                                                                    2% </option>
                                                                <option value="30">
                                                                    3% </option>
                                                                <option value="40">
                                                                    4% </option>
                                                                <option value="50">
                                                                    5% </option>
                                                                <option value="60">
                                                                    6% </option>
                                                                <option value="70">
                                                                    7% </option>
                                                                <option value="80">
                                                                    8% </option>
                                                                <option value="90">
                                                                    9% </option>
                                                                <option value="100">
                                                                    10% </option>
                                                                <option value="110">
                                                                    11% </option>
                                                                <option value="120">
                                                                    12% </option>
                                                                <option value="130">
                                                                    13% </option>
                                                                <option value="140">
                                                                    14% </option>
                                                                <option value="150">
                                                                    15% </option>
                                                                <option value="160">
                                                                    16% </option>
                                                                <option value="170">
                                                                    17% </option>
                                                                <option value="180">
                                                                    18% </option>
                                                                <option value="190">
                                                                    19% </option>
                                                                <option value="200">
                                                                    20% </option>
                                                                <option value="210">
                                                                    21% </option>
                                                                <option value="220">
                                                                    22% </option>
                                                                <option value="230">
                                                                    23% </option>
                                                                <option value="240">
                                                                    24% </option>
                                                                <option value="250">
                                                                    25% </option>
                                                                <option value="260">
                                                                    26% </option>
                                                                <option value="270">
                                                                    27% </option>
                                                                <option value="280">
                                                                    28% </option>
                                                                <option value="290">
                                                                    29% </option>
                                                                <option value="300">
                                                                    30% </option>
                                                                <option value="310">
                                                                    31% </option>
                                                                <option value="320">
                                                                    32% </option>
                                                                <option value="330">
                                                                    33% </option>
                                                                <option value="340">
                                                                    34% </option>
                                                                <option value="350">
                                                                    35% </option>
                                                                <option value="360">
                                                                    36% </option>
                                                                <option value="370">
                                                                    37% </option>
                                                                <option value="380">
                                                                    38% </option>
                                                                <option value="390">
                                                                    39% </option>
                                                                <option value="400">
                                                                    40% </option>
                                                                <option value="410">
                                                                    41% </option>
                                                                <option value="420">
                                                                    42% </option>
                                                                <option value="430">
                                                                    43% </option>
                                                                <option value="440">
                                                                    44% </option>
                                                                <option value="450">
                                                                    45% </option>
                                                                <option value="460">
                                                                    46% </option>
                                                                <option value="470">
                                                                    47% </option>
                                                                <option value="480">
                                                                    48% </option>
                                                                <option value="490">
                                                                    49% </option>
                                                                <option value="500">
                                                                    50% </option>
                                                                <option value="510">
                                                                    51% </option>
                                                                <option value="520">
                                                                    52% </option>
                                                                <option value="530">
                                                                    53% </option>
                                                                <option value="540">
                                                                    54% </option>
                                                                <option value="550">
                                                                    55% </option>
                                                                <option value="560">
                                                                    56% </option>
                                                                <option value="570">
                                                                    57% </option>
                                                                <option value="580">
                                                                    58% </option>
                                                                <option value="590">
                                                                    59% </option>
                                                                <option value="600">
                                                                    60% </option>
                                                                <option value="610">
                                                                    61% </option>
                                                                <option value="620">
                                                                    62% </option>
                                                                <option value="630">
                                                                    63% </option>
                                                                <option value="640">
                                                                    64% </option>
                                                                <option value="650">
                                                                    65% </option>
                                                                <option value="660">
                                                                    66% </option>
                                                                <option value="670">
                                                                    67% </option>
                                                                <option value="680">
                                                                    68% </option>
                                                                <option value="690">
                                                                    69% </option>
                                                                <option value="700">
                                                                    70% </option>
                                                                <option value="710">
                                                                    71% </option>
                                                                <option value="720">
                                                                    72% </option>
                                                                <option value="730">
                                                                    73% </option>
                                                                <option value="740">
                                                                    74% </option>
                                                                <option value="750">
                                                                    75% </option>
                                                                <option value="760">
                                                                    76% </option>
                                                                <option value="770">
                                                                    77% </option>
                                                                <option value="780">
                                                                    78% </option>
                                                                <option value="790">
                                                                    79% </option>
                                                                <option value="800">
                                                                    80% </option>
                                                                <option value="810">
                                                                    81% </option>
                                                                <option value="820">
                                                                    82% </option>
                                                                <option value="830">
                                                                    83% </option>
                                                                <option value="840">
                                                                    84% </option>
                                                                <option value="850">
                                                                    85% </option>
                                                                <option value="860">
                                                                    86% </option>
                                                                <option value="870">
                                                                    87% </option>
                                                                <option value="880">
                                                                    88% </option>
                                                                <option value="890">
                                                                    89% </option>
                                                                <option value="900">
                                                                    90% </option>
                                                                <option value="910">
                                                                    91% </option>
                                                                <option value="920">
                                                                    92% </option>
                                                                <option value="930">
                                                                    93% </option>
                                                                <option value="940">
                                                                    94% </option>
                                                                <option value="950">
                                                                    95% </option>
                                                                <option value="960">
                                                                    96% </option>
                                                                <option value="970">
                                                                    97% </option>
                                                                <option value="980">
                                                                    98% </option>
                                                                <option value="990">
                                                                    99% </option>
                                                                <option value="1000">
                                                                    100% </option>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                    <tr class="ded_f">
                                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG" id="id_ded">
                                                                <font size="2"><a href="#ded" title="ded">DED</a></font>
                                                            </div>
                                                        </td>
                                                        <td class="Min_f">
                                                            <input name="FILTRO[DEP][22][1][MIN]" id="DED_Min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Max_f">
                                                            <input name="FILTRO[DEP][22][1][MAX]" id="DED_Max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Acur. Min(%)_f">
                                                            <input name="FILTRO[DEP][22][2][ACC_MIN]" id="DED_Acur. Min(%)" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td>
                                                            <select name="FILTRO[DEP][22][1][TOP]" size="1" class="form" id="DED_Top" style="width:55px">
                                                                <option value=""></option>
                                                                <option value="1">
                                                                    0.1% </option>
                                                                <option value="5">
                                                                    0.5% </option>
                                                                <option value="10">
                                                                    1% </option>
                                                                <option value="20">
                                                                    2% </option>
                                                                <option value="30">
                                                                    3% </option>
                                                                <option value="40">
                                                                    4% </option>
                                                                <option value="50">
                                                                    5% </option>
                                                                <option value="60">
                                                                    6% </option>
                                                                <option value="70">
                                                                    7% </option>
                                                                <option value="80">
                                                                    8% </option>
                                                                <option value="90">
                                                                    9% </option>
                                                                <option value="100">
                                                                    10% </option>
                                                                <option value="110">
                                                                    11% </option>
                                                                <option value="120">
                                                                    12% </option>
                                                                <option value="130">
                                                                    13% </option>
                                                                <option value="140">
                                                                    14% </option>
                                                                <option value="150">
                                                                    15% </option>
                                                                <option value="160">
                                                                    16% </option>
                                                                <option value="170">
                                                                    17% </option>
                                                                <option value="180">
                                                                    18% </option>
                                                                <option value="190">
                                                                    19% </option>
                                                                <option value="200">
                                                                    20% </option>
                                                                <option value="210">
                                                                    21% </option>
                                                                <option value="220">
                                                                    22% </option>
                                                                <option value="230">
                                                                    23% </option>
                                                                <option value="240">
                                                                    24% </option>
                                                                <option value="250">
                                                                    25% </option>
                                                                <option value="260">
                                                                    26% </option>
                                                                <option value="270">
                                                                    27% </option>
                                                                <option value="280">
                                                                    28% </option>
                                                                <option value="290">
                                                                    29% </option>
                                                                <option value="300">
                                                                    30% </option>
                                                                <option value="310">
                                                                    31% </option>
                                                                <option value="320">
                                                                    32% </option>
                                                                <option value="330">
                                                                    33% </option>
                                                                <option value="340">
                                                                    34% </option>
                                                                <option value="350">
                                                                    35% </option>
                                                                <option value="360">
                                                                    36% </option>
                                                                <option value="370">
                                                                    37% </option>
                                                                <option value="380">
                                                                    38% </option>
                                                                <option value="390">
                                                                    39% </option>
                                                                <option value="400">
                                                                    40% </option>
                                                                <option value="410">
                                                                    41% </option>
                                                                <option value="420">
                                                                    42% </option>
                                                                <option value="430">
                                                                    43% </option>
                                                                <option value="440">
                                                                    44% </option>
                                                                <option value="450">
                                                                    45% </option>
                                                                <option value="460">
                                                                    46% </option>
                                                                <option value="470">
                                                                    47% </option>
                                                                <option value="480">
                                                                    48% </option>
                                                                <option value="490">
                                                                    49% </option>
                                                                <option value="500">
                                                                    50% </option>
                                                                <option value="510">
                                                                    51% </option>
                                                                <option value="520">
                                                                    52% </option>
                                                                <option value="530">
                                                                    53% </option>
                                                                <option value="540">
                                                                    54% </option>
                                                                <option value="550">
                                                                    55% </option>
                                                                <option value="560">
                                                                    56% </option>
                                                                <option value="570">
                                                                    57% </option>
                                                                <option value="580">
                                                                    58% </option>
                                                                <option value="590">
                                                                    59% </option>
                                                                <option value="600">
                                                                    60% </option>
                                                                <option value="610">
                                                                    61% </option>
                                                                <option value="620">
                                                                    62% </option>
                                                                <option value="630">
                                                                    63% </option>
                                                                <option value="640">
                                                                    64% </option>
                                                                <option value="650">
                                                                    65% </option>
                                                                <option value="660">
                                                                    66% </option>
                                                                <option value="670">
                                                                    67% </option>
                                                                <option value="680">
                                                                    68% </option>
                                                                <option value="690">
                                                                    69% </option>
                                                                <option value="700">
                                                                    70% </option>
                                                                <option value="710">
                                                                    71% </option>
                                                                <option value="720">
                                                                    72% </option>
                                                                <option value="730">
                                                                    73% </option>
                                                                <option value="740">
                                                                    74% </option>
                                                                <option value="750">
                                                                    75% </option>
                                                                <option value="760">
                                                                    76% </option>
                                                                <option value="770">
                                                                    77% </option>
                                                                <option value="780">
                                                                    78% </option>
                                                                <option value="790">
                                                                    79% </option>
                                                                <option value="800">
                                                                    80% </option>
                                                                <option value="810">
                                                                    81% </option>
                                                                <option value="820">
                                                                    82% </option>
                                                                <option value="830">
                                                                    83% </option>
                                                                <option value="840">
                                                                    84% </option>
                                                                <option value="850">
                                                                    85% </option>
                                                                <option value="860">
                                                                    86% </option>
                                                                <option value="870">
                                                                    87% </option>
                                                                <option value="880">
                                                                    88% </option>
                                                                <option value="890">
                                                                    89% </option>
                                                                <option value="900">
                                                                    90% </option>
                                                                <option value="910">
                                                                    91% </option>
                                                                <option value="920">
                                                                    92% </option>
                                                                <option value="930">
                                                                    93% </option>
                                                                <option value="940">
                                                                    94% </option>
                                                                <option value="950">
                                                                    95% </option>
                                                                <option value="960">
                                                                    96% </option>
                                                                <option value="970">
                                                                    97% </option>
                                                                <option value="980">
                                                                    98% </option>
                                                                <option value="990">
                                                                    99% </option>
                                                                <option value="1000">
                                                                    100% </option>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                    <tr class="dpd_f">
                                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG" id="id_dpd">
                                                                <font size="2"><a href="#dpd" title="dpd">DPD</a></font>
                                                            </div>
                                                        </td>
                                                        <td class="Min_f">
                                                            <input name="FILTRO[DEP][23][1][MIN]" id="DPD_Min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Max_f">
                                                            <input name="FILTRO[DEP][23][1][MAX]" id="DPD_Max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Acur. Min(%)_f">
                                                            <input name="FILTRO[DEP][23][2][ACC_MIN]" id="DPD_Acur. Min(%)" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td>
                                                            <select name="FILTRO[DEP][23][1][TOP]" size="1" class="form" id="DPD_Top" style="width:55px">
                                                                <option value=""></option>
                                                                <option value="1">
                                                                    0.1% </option>
                                                                <option value="5">
                                                                    0.5% </option>
                                                                <option value="10">
                                                                    1% </option>
                                                                <option value="20">
                                                                    2% </option>
                                                                <option value="30">
                                                                    3% </option>
                                                                <option value="40">
                                                                    4% </option>
                                                                <option value="50">
                                                                    5% </option>
                                                                <option value="60">
                                                                    6% </option>
                                                                <option value="70">
                                                                    7% </option>
                                                                <option value="80">
                                                                    8% </option>
                                                                <option value="90">
                                                                    9% </option>
                                                                <option value="100">
                                                                    10% </option>
                                                                <option value="110">
                                                                    11% </option>
                                                                <option value="120">
                                                                    12% </option>
                                                                <option value="130">
                                                                    13% </option>
                                                                <option value="140">
                                                                    14% </option>
                                                                <option value="150">
                                                                    15% </option>
                                                                <option value="160">
                                                                    16% </option>
                                                                <option value="170">
                                                                    17% </option>
                                                                <option value="180">
                                                                    18% </option>
                                                                <option value="190">
                                                                    19% </option>
                                                                <option value="200">
                                                                    20% </option>
                                                                <option value="210">
                                                                    21% </option>
                                                                <option value="220">
                                                                    22% </option>
                                                                <option value="230">
                                                                    23% </option>
                                                                <option value="240">
                                                                    24% </option>
                                                                <option value="250">
                                                                    25% </option>
                                                                <option value="260">
                                                                    26% </option>
                                                                <option value="270">
                                                                    27% </option>
                                                                <option value="280">
                                                                    28% </option>
                                                                <option value="290">
                                                                    29% </option>
                                                                <option value="300">
                                                                    30% </option>
                                                                <option value="310">
                                                                    31% </option>
                                                                <option value="320">
                                                                    32% </option>
                                                                <option value="330">
                                                                    33% </option>
                                                                <option value="340">
                                                                    34% </option>
                                                                <option value="350">
                                                                    35% </option>
                                                                <option value="360">
                                                                    36% </option>
                                                                <option value="370">
                                                                    37% </option>
                                                                <option value="380">
                                                                    38% </option>
                                                                <option value="390">
                                                                    39% </option>
                                                                <option value="400">
                                                                    40% </option>
                                                                <option value="410">
                                                                    41% </option>
                                                                <option value="420">
                                                                    42% </option>
                                                                <option value="430">
                                                                    43% </option>
                                                                <option value="440">
                                                                    44% </option>
                                                                <option value="450">
                                                                    45% </option>
                                                                <option value="460">
                                                                    46% </option>
                                                                <option value="470">
                                                                    47% </option>
                                                                <option value="480">
                                                                    48% </option>
                                                                <option value="490">
                                                                    49% </option>
                                                                <option value="500">
                                                                    50% </option>
                                                                <option value="510">
                                                                    51% </option>
                                                                <option value="520">
                                                                    52% </option>
                                                                <option value="530">
                                                                    53% </option>
                                                                <option value="540">
                                                                    54% </option>
                                                                <option value="550">
                                                                    55% </option>
                                                                <option value="560">
                                                                    56% </option>
                                                                <option value="570">
                                                                    57% </option>
                                                                <option value="580">
                                                                    58% </option>
                                                                <option value="590">
                                                                    59% </option>
                                                                <option value="600">
                                                                    60% </option>
                                                                <option value="610">
                                                                    61% </option>
                                                                <option value="620">
                                                                    62% </option>
                                                                <option value="630">
                                                                    63% </option>
                                                                <option value="640">
                                                                    64% </option>
                                                                <option value="650">
                                                                    65% </option>
                                                                <option value="660">
                                                                    66% </option>
                                                                <option value="670">
                                                                    67% </option>
                                                                <option value="680">
                                                                    68% </option>
                                                                <option value="690">
                                                                    69% </option>
                                                                <option value="700">
                                                                    70% </option>
                                                                <option value="710">
                                                                    71% </option>
                                                                <option value="720">
                                                                    72% </option>
                                                                <option value="730">
                                                                    73% </option>
                                                                <option value="740">
                                                                    74% </option>
                                                                <option value="750">
                                                                    75% </option>
                                                                <option value="760">
                                                                    76% </option>
                                                                <option value="770">
                                                                    77% </option>
                                                                <option value="780">
                                                                    78% </option>
                                                                <option value="790">
                                                                    79% </option>
                                                                <option value="800">
                                                                    80% </option>
                                                                <option value="810">
                                                                    81% </option>
                                                                <option value="820">
                                                                    82% </option>
                                                                <option value="830">
                                                                    83% </option>
                                                                <option value="840">
                                                                    84% </option>
                                                                <option value="850">
                                                                    85% </option>
                                                                <option value="860">
                                                                    86% </option>
                                                                <option value="870">
                                                                    87% </option>
                                                                <option value="880">
                                                                    88% </option>
                                                                <option value="890">
                                                                    89% </option>
                                                                <option value="900">
                                                                    90% </option>
                                                                <option value="910">
                                                                    91% </option>
                                                                <option value="920">
                                                                    92% </option>
                                                                <option value="930">
                                                                    93% </option>
                                                                <option value="940">
                                                                    94% </option>
                                                                <option value="950">
                                                                    95% </option>
                                                                <option value="960">
                                                                    96% </option>
                                                                <option value="970">
                                                                    97% </option>
                                                                <option value="980">
                                                                    98% </option>
                                                                <option value="990">
                                                                    99% </option>
                                                                <option value="1000">
                                                                    100% </option>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                    <tr class="dmd_f">
                                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG" id="id_dmd">
                                                                <font size="2"><a href="#dmd" title="dmd">DMD</a></font>
                                                            </div>
                                                        </td>
                                                        <td class="Min_f">
                                                            <input name="FILTRO[DEP][24][1][MIN]" id="DMD_Min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Max_f">
                                                            <input name="FILTRO[DEP][24][1][MAX]" id="DMD_Max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Acur. Min(%)_f">
                                                            <input name="FILTRO[DEP][24][2][ACC_MIN]" id="DMD_Acur. Min(%)" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td>
                                                            <select name="FILTRO[DEP][24][1][TOP]" size="1" class="form" id="DMD_Top" style="width:55px">
                                                                <option value=""></option>
                                                                <option value="1">
                                                                    0.1% </option>
                                                                <option value="5">
                                                                    0.5% </option>
                                                                <option value="10">
                                                                    1% </option>
                                                                <option value="20">
                                                                    2% </option>
                                                                <option value="30">
                                                                    3% </option>
                                                                <option value="40">
                                                                    4% </option>
                                                                <option value="50">
                                                                    5% </option>
                                                                <option value="60">
                                                                    6% </option>
                                                                <option value="70">
                                                                    7% </option>
                                                                <option value="80">
                                                                    8% </option>
                                                                <option value="90">
                                                                    9% </option>
                                                                <option value="100">
                                                                    10% </option>
                                                                <option value="110">
                                                                    11% </option>
                                                                <option value="120">
                                                                    12% </option>
                                                                <option value="130">
                                                                    13% </option>
                                                                <option value="140">
                                                                    14% </option>
                                                                <option value="150">
                                                                    15% </option>
                                                                <option value="160">
                                                                    16% </option>
                                                                <option value="170">
                                                                    17% </option>
                                                                <option value="180">
                                                                    18% </option>
                                                                <option value="190">
                                                                    19% </option>
                                                                <option value="200">
                                                                    20% </option>
                                                                <option value="210">
                                                                    21% </option>
                                                                <option value="220">
                                                                    22% </option>
                                                                <option value="230">
                                                                    23% </option>
                                                                <option value="240">
                                                                    24% </option>
                                                                <option value="250">
                                                                    25% </option>
                                                                <option value="260">
                                                                    26% </option>
                                                                <option value="270">
                                                                    27% </option>
                                                                <option value="280">
                                                                    28% </option>
                                                                <option value="290">
                                                                    29% </option>
                                                                <option value="300">
                                                                    30% </option>
                                                                <option value="310">
                                                                    31% </option>
                                                                <option value="320">
                                                                    32% </option>
                                                                <option value="330">
                                                                    33% </option>
                                                                <option value="340">
                                                                    34% </option>
                                                                <option value="350">
                                                                    35% </option>
                                                                <option value="360">
                                                                    36% </option>
                                                                <option value="370">
                                                                    37% </option>
                                                                <option value="380">
                                                                    38% </option>
                                                                <option value="390">
                                                                    39% </option>
                                                                <option value="400">
                                                                    40% </option>
                                                                <option value="410">
                                                                    41% </option>
                                                                <option value="420">
                                                                    42% </option>
                                                                <option value="430">
                                                                    43% </option>
                                                                <option value="440">
                                                                    44% </option>
                                                                <option value="450">
                                                                    45% </option>
                                                                <option value="460">
                                                                    46% </option>
                                                                <option value="470">
                                                                    47% </option>
                                                                <option value="480">
                                                                    48% </option>
                                                                <option value="490">
                                                                    49% </option>
                                                                <option value="500">
                                                                    50% </option>
                                                                <option value="510">
                                                                    51% </option>
                                                                <option value="520">
                                                                    52% </option>
                                                                <option value="530">
                                                                    53% </option>
                                                                <option value="540">
                                                                    54% </option>
                                                                <option value="550">
                                                                    55% </option>
                                                                <option value="560">
                                                                    56% </option>
                                                                <option value="570">
                                                                    57% </option>
                                                                <option value="580">
                                                                    58% </option>
                                                                <option value="590">
                                                                    59% </option>
                                                                <option value="600">
                                                                    60% </option>
                                                                <option value="610">
                                                                    61% </option>
                                                                <option value="620">
                                                                    62% </option>
                                                                <option value="630">
                                                                    63% </option>
                                                                <option value="640">
                                                                    64% </option>
                                                                <option value="650">
                                                                    65% </option>
                                                                <option value="660">
                                                                    66% </option>
                                                                <option value="670">
                                                                    67% </option>
                                                                <option value="680">
                                                                    68% </option>
                                                                <option value="690">
                                                                    69% </option>
                                                                <option value="700">
                                                                    70% </option>
                                                                <option value="710">
                                                                    71% </option>
                                                                <option value="720">
                                                                    72% </option>
                                                                <option value="730">
                                                                    73% </option>
                                                                <option value="740">
                                                                    74% </option>
                                                                <option value="750">
                                                                    75% </option>
                                                                <option value="760">
                                                                    76% </option>
                                                                <option value="770">
                                                                    77% </option>
                                                                <option value="780">
                                                                    78% </option>
                                                                <option value="790">
                                                                    79% </option>
                                                                <option value="800">
                                                                    80% </option>
                                                                <option value="810">
                                                                    81% </option>
                                                                <option value="820">
                                                                    82% </option>
                                                                <option value="830">
                                                                    83% </option>
                                                                <option value="840">
                                                                    84% </option>
                                                                <option value="850">
                                                                    85% </option>
                                                                <option value="860">
                                                                    86% </option>
                                                                <option value="870">
                                                                    87% </option>
                                                                <option value="880">
                                                                    88% </option>
                                                                <option value="890">
                                                                    89% </option>
                                                                <option value="900">
                                                                    90% </option>
                                                                <option value="910">
                                                                    91% </option>
                                                                <option value="920">
                                                                    92% </option>
                                                                <option value="930">
                                                                    93% </option>
                                                                <option value="940">
                                                                    94% </option>
                                                                <option value="950">
                                                                    95% </option>
                                                                <option value="960">
                                                                    96% </option>
                                                                <option value="970">
                                                                    97% </option>
                                                                <option value="980">
                                                                    98% </option>
                                                                <option value="990">
                                                                    99% </option>
                                                                <option value="1000">
                                                                    100% </option>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                    <tr class="des_f">
                                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG" id="id_des">
                                                                <font size="2"><a href="#des" title="des">DES</a></font>
                                                            </div>
                                                        </td>
                                                        <td class="Min_f">
                                                            <input name="FILTRO[DEP][26][1][MIN]" id="DES_Min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Max_f">
                                                            <input name="FILTRO[DEP][26][1][MAX]" id="DES_Max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Acur. Min(%)_f">
                                                            <input name="FILTRO[DEP][26][2][ACC_MIN]" id="DES_Acur. Min(%)" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td>
                                                            <select name="FILTRO[DEP][26][1][TOP]" size="1" class="form" id="DES_Top" style="width:55px">
                                                                <option value=""></option>
                                                                <option value="1">
                                                                    0.1% </option>
                                                                <option value="5">
                                                                    0.5% </option>
                                                                <option value="10">
                                                                    1% </option>
                                                                <option value="20">
                                                                    2% </option>
                                                                <option value="30">
                                                                    3% </option>
                                                                <option value="40">
                                                                    4% </option>
                                                                <option value="50">
                                                                    5% </option>
                                                                <option value="60">
                                                                    6% </option>
                                                                <option value="70">
                                                                    7% </option>
                                                                <option value="80">
                                                                    8% </option>
                                                                <option value="90">
                                                                    9% </option>
                                                                <option value="100">
                                                                    10% </option>
                                                                <option value="110">
                                                                    11% </option>
                                                                <option value="120">
                                                                    12% </option>
                                                                <option value="130">
                                                                    13% </option>
                                                                <option value="140">
                                                                    14% </option>
                                                                <option value="150">
                                                                    15% </option>
                                                                <option value="160">
                                                                    16% </option>
                                                                <option value="170">
                                                                    17% </option>
                                                                <option value="180">
                                                                    18% </option>
                                                                <option value="190">
                                                                    19% </option>
                                                                <option value="200">
                                                                    20% </option>
                                                                <option value="210">
                                                                    21% </option>
                                                                <option value="220">
                                                                    22% </option>
                                                                <option value="230">
                                                                    23% </option>
                                                                <option value="240">
                                                                    24% </option>
                                                                <option value="250">
                                                                    25% </option>
                                                                <option value="260">
                                                                    26% </option>
                                                                <option value="270">
                                                                    27% </option>
                                                                <option value="280">
                                                                    28% </option>
                                                                <option value="290">
                                                                    29% </option>
                                                                <option value="300">
                                                                    30% </option>
                                                                <option value="310">
                                                                    31% </option>
                                                                <option value="320">
                                                                    32% </option>
                                                                <option value="330">
                                                                    33% </option>
                                                                <option value="340">
                                                                    34% </option>
                                                                <option value="350">
                                                                    35% </option>
                                                                <option value="360">
                                                                    36% </option>
                                                                <option value="370">
                                                                    37% </option>
                                                                <option value="380">
                                                                    38% </option>
                                                                <option value="390">
                                                                    39% </option>
                                                                <option value="400">
                                                                    40% </option>
                                                                <option value="410">
                                                                    41% </option>
                                                                <option value="420">
                                                                    42% </option>
                                                                <option value="430">
                                                                    43% </option>
                                                                <option value="440">
                                                                    44% </option>
                                                                <option value="450">
                                                                    45% </option>
                                                                <option value="460">
                                                                    46% </option>
                                                                <option value="470">
                                                                    47% </option>
                                                                <option value="480">
                                                                    48% </option>
                                                                <option value="490">
                                                                    49% </option>
                                                                <option value="500">
                                                                    50% </option>
                                                                <option value="510">
                                                                    51% </option>
                                                                <option value="520">
                                                                    52% </option>
                                                                <option value="530">
                                                                    53% </option>
                                                                <option value="540">
                                                                    54% </option>
                                                                <option value="550">
                                                                    55% </option>
                                                                <option value="560">
                                                                    56% </option>
                                                                <option value="570">
                                                                    57% </option>
                                                                <option value="580">
                                                                    58% </option>
                                                                <option value="590">
                                                                    59% </option>
                                                                <option value="600">
                                                                    60% </option>
                                                                <option value="610">
                                                                    61% </option>
                                                                <option value="620">
                                                                    62% </option>
                                                                <option value="630">
                                                                    63% </option>
                                                                <option value="640">
                                                                    64% </option>
                                                                <option value="650">
                                                                    65% </option>
                                                                <option value="660">
                                                                    66% </option>
                                                                <option value="670">
                                                                    67% </option>
                                                                <option value="680">
                                                                    68% </option>
                                                                <option value="690">
                                                                    69% </option>
                                                                <option value="700">
                                                                    70% </option>
                                                                <option value="710">
                                                                    71% </option>
                                                                <option value="720">
                                                                    72% </option>
                                                                <option value="730">
                                                                    73% </option>
                                                                <option value="740">
                                                                    74% </option>
                                                                <option value="750">
                                                                    75% </option>
                                                                <option value="760">
                                                                    76% </option>
                                                                <option value="770">
                                                                    77% </option>
                                                                <option value="780">
                                                                    78% </option>
                                                                <option value="790">
                                                                    79% </option>
                                                                <option value="800">
                                                                    80% </option>
                                                                <option value="810">
                                                                    81% </option>
                                                                <option value="820">
                                                                    82% </option>
                                                                <option value="830">
                                                                    83% </option>
                                                                <option value="840">
                                                                    84% </option>
                                                                <option value="850">
                                                                    85% </option>
                                                                <option value="860">
                                                                    86% </option>
                                                                <option value="870">
                                                                    87% </option>
                                                                <option value="880">
                                                                    88% </option>
                                                                <option value="890">
                                                                    89% </option>
                                                                <option value="900">
                                                                    90% </option>
                                                                <option value="910">
                                                                    91% </option>
                                                                <option value="920">
                                                                    92% </option>
                                                                <option value="930">
                                                                    93% </option>
                                                                <option value="940">
                                                                    94% </option>
                                                                <option value="950">
                                                                    95% </option>
                                                                <option value="960">
                                                                    96% </option>
                                                                <option value="970">
                                                                    97% </option>
                                                                <option value="980">
                                                                    98% </option>
                                                                <option value="990">
                                                                    99% </option>
                                                                <option value="1000">
                                                                    100% </option>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                    <tr class="dps_f">
                                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG" id="id_dps">
                                                                <font size="2"><a href="#dps" title="dps">DPS</a></font>
                                                            </div>
                                                        </td>
                                                        <td class="Min_f">
                                                            <input name="FILTRO[DEP][27][1][MIN]" id="DPS_Min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Max_f">
                                                            <input name="FILTRO[DEP][27][1][MAX]" id="DPS_Max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Acur. Min(%)_f">
                                                            <input name="FILTRO[DEP][27][2][ACC_MIN]" id="DPS_Acur. Min(%)" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td>
                                                            <select name="FILTRO[DEP][27][1][TOP]" size="1" class="form" id="DPS_Top" style="width:55px">
                                                                <option value=""></option>
                                                                <option value="1">
                                                                    0.1% </option>
                                                                <option value="5">
                                                                    0.5% </option>
                                                                <option value="10">
                                                                    1% </option>
                                                                <option value="20">
                                                                    2% </option>
                                                                <option value="30">
                                                                    3% </option>
                                                                <option value="40">
                                                                    4% </option>
                                                                <option value="50">
                                                                    5% </option>
                                                                <option value="60">
                                                                    6% </option>
                                                                <option value="70">
                                                                    7% </option>
                                                                <option value="80">
                                                                    8% </option>
                                                                <option value="90">
                                                                    9% </option>
                                                                <option value="100">
                                                                    10% </option>
                                                                <option value="110">
                                                                    11% </option>
                                                                <option value="120">
                                                                    12% </option>
                                                                <option value="130">
                                                                    13% </option>
                                                                <option value="140">
                                                                    14% </option>
                                                                <option value="150">
                                                                    15% </option>
                                                                <option value="160">
                                                                    16% </option>
                                                                <option value="170">
                                                                    17% </option>
                                                                <option value="180">
                                                                    18% </option>
                                                                <option value="190">
                                                                    19% </option>
                                                                <option value="200">
                                                                    20% </option>
                                                                <option value="210">
                                                                    21% </option>
                                                                <option value="220">
                                                                    22% </option>
                                                                <option value="230">
                                                                    23% </option>
                                                                <option value="240">
                                                                    24% </option>
                                                                <option value="250">
                                                                    25% </option>
                                                                <option value="260">
                                                                    26% </option>
                                                                <option value="270">
                                                                    27% </option>
                                                                <option value="280">
                                                                    28% </option>
                                                                <option value="290">
                                                                    29% </option>
                                                                <option value="300">
                                                                    30% </option>
                                                                <option value="310">
                                                                    31% </option>
                                                                <option value="320">
                                                                    32% </option>
                                                                <option value="330">
                                                                    33% </option>
                                                                <option value="340">
                                                                    34% </option>
                                                                <option value="350">
                                                                    35% </option>
                                                                <option value="360">
                                                                    36% </option>
                                                                <option value="370">
                                                                    37% </option>
                                                                <option value="380">
                                                                    38% </option>
                                                                <option value="390">
                                                                    39% </option>
                                                                <option value="400">
                                                                    40% </option>
                                                                <option value="410">
                                                                    41% </option>
                                                                <option value="420">
                                                                    42% </option>
                                                                <option value="430">
                                                                    43% </option>
                                                                <option value="440">
                                                                    44% </option>
                                                                <option value="450">
                                                                    45% </option>
                                                                <option value="460">
                                                                    46% </option>
                                                                <option value="470">
                                                                    47% </option>
                                                                <option value="480">
                                                                    48% </option>
                                                                <option value="490">
                                                                    49% </option>
                                                                <option value="500">
                                                                    50% </option>
                                                                <option value="510">
                                                                    51% </option>
                                                                <option value="520">
                                                                    52% </option>
                                                                <option value="530">
                                                                    53% </option>
                                                                <option value="540">
                                                                    54% </option>
                                                                <option value="550">
                                                                    55% </option>
                                                                <option value="560">
                                                                    56% </option>
                                                                <option value="570">
                                                                    57% </option>
                                                                <option value="580">
                                                                    58% </option>
                                                                <option value="590">
                                                                    59% </option>
                                                                <option value="600">
                                                                    60% </option>
                                                                <option value="610">
                                                                    61% </option>
                                                                <option value="620">
                                                                    62% </option>
                                                                <option value="630">
                                                                    63% </option>
                                                                <option value="640">
                                                                    64% </option>
                                                                <option value="650">
                                                                    65% </option>
                                                                <option value="660">
                                                                    66% </option>
                                                                <option value="670">
                                                                    67% </option>
                                                                <option value="680">
                                                                    68% </option>
                                                                <option value="690">
                                                                    69% </option>
                                                                <option value="700">
                                                                    70% </option>
                                                                <option value="710">
                                                                    71% </option>
                                                                <option value="720">
                                                                    72% </option>
                                                                <option value="730">
                                                                    73% </option>
                                                                <option value="740">
                                                                    74% </option>
                                                                <option value="750">
                                                                    75% </option>
                                                                <option value="760">
                                                                    76% </option>
                                                                <option value="770">
                                                                    77% </option>
                                                                <option value="780">
                                                                    78% </option>
                                                                <option value="790">
                                                                    79% </option>
                                                                <option value="800">
                                                                    80% </option>
                                                                <option value="810">
                                                                    81% </option>
                                                                <option value="820">
                                                                    82% </option>
                                                                <option value="830">
                                                                    83% </option>
                                                                <option value="840">
                                                                    84% </option>
                                                                <option value="850">
                                                                    85% </option>
                                                                <option value="860">
                                                                    86% </option>
                                                                <option value="870">
                                                                    87% </option>
                                                                <option value="880">
                                                                    88% </option>
                                                                <option value="890">
                                                                    89% </option>
                                                                <option value="900">
                                                                    90% </option>
                                                                <option value="910">
                                                                    91% </option>
                                                                <option value="920">
                                                                    92% </option>
                                                                <option value="930">
                                                                    93% </option>
                                                                <option value="940">
                                                                    94% </option>
                                                                <option value="950">
                                                                    95% </option>
                                                                <option value="960">
                                                                    96% </option>
                                                                <option value="970">
                                                                    97% </option>
                                                                <option value="980">
                                                                    98% </option>
                                                                <option value="990">
                                                                    99% </option>
                                                                <option value="1000">
                                                                    100% </option>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                    <tr class="dms_f">
                                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG" id="id_dms">
                                                                <font size="2"><a href="#dms" title="dms">DMS</a></font>
                                                            </div>
                                                        </td>
                                                        <td class="Min_f">
                                                            <input name="FILTRO[DEP][28][1][MIN]" id="DMS_Min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Max_f">
                                                            <input name="FILTRO[DEP][28][1][MAX]" id="DMS_Max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Acur. Min(%)_f">
                                                            <input name="FILTRO[DEP][28][2][ACC_MIN]" id="DMS_Acur. Min(%)" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td>
                                                            <select name="FILTRO[DEP][28][1][TOP]" size="1" class="form" id="DMS_Top" style="width:55px">
                                                                <option value=""></option>
                                                                <option value="1">
                                                                    0.1% </option>
                                                                <option value="5">
                                                                    0.5% </option>
                                                                <option value="10">
                                                                    1% </option>
                                                                <option value="20">
                                                                    2% </option>
                                                                <option value="30">
                                                                    3% </option>
                                                                <option value="40">
                                                                    4% </option>
                                                                <option value="50">
                                                                    5% </option>
                                                                <option value="60">
                                                                    6% </option>
                                                                <option value="70">
                                                                    7% </option>
                                                                <option value="80">
                                                                    8% </option>
                                                                <option value="90">
                                                                    9% </option>
                                                                <option value="100">
                                                                    10% </option>
                                                                <option value="110">
                                                                    11% </option>
                                                                <option value="120">
                                                                    12% </option>
                                                                <option value="130">
                                                                    13% </option>
                                                                <option value="140">
                                                                    14% </option>
                                                                <option value="150">
                                                                    15% </option>
                                                                <option value="160">
                                                                    16% </option>
                                                                <option value="170">
                                                                    17% </option>
                                                                <option value="180">
                                                                    18% </option>
                                                                <option value="190">
                                                                    19% </option>
                                                                <option value="200">
                                                                    20% </option>
                                                                <option value="210">
                                                                    21% </option>
                                                                <option value="220">
                                                                    22% </option>
                                                                <option value="230">
                                                                    23% </option>
                                                                <option value="240">
                                                                    24% </option>
                                                                <option value="250">
                                                                    25% </option>
                                                                <option value="260">
                                                                    26% </option>
                                                                <option value="270">
                                                                    27% </option>
                                                                <option value="280">
                                                                    28% </option>
                                                                <option value="290">
                                                                    29% </option>
                                                                <option value="300">
                                                                    30% </option>
                                                                <option value="310">
                                                                    31% </option>
                                                                <option value="320">
                                                                    32% </option>
                                                                <option value="330">
                                                                    33% </option>
                                                                <option value="340">
                                                                    34% </option>
                                                                <option value="350">
                                                                    35% </option>
                                                                <option value="360">
                                                                    36% </option>
                                                                <option value="370">
                                                                    37% </option>
                                                                <option value="380">
                                                                    38% </option>
                                                                <option value="390">
                                                                    39% </option>
                                                                <option value="400">
                                                                    40% </option>
                                                                <option value="410">
                                                                    41% </option>
                                                                <option value="420">
                                                                    42% </option>
                                                                <option value="430">
                                                                    43% </option>
                                                                <option value="440">
                                                                    44% </option>
                                                                <option value="450">
                                                                    45% </option>
                                                                <option value="460">
                                                                    46% </option>
                                                                <option value="470">
                                                                    47% </option>
                                                                <option value="480">
                                                                    48% </option>
                                                                <option value="490">
                                                                    49% </option>
                                                                <option value="500">
                                                                    50% </option>
                                                                <option value="510">
                                                                    51% </option>
                                                                <option value="520">
                                                                    52% </option>
                                                                <option value="530">
                                                                    53% </option>
                                                                <option value="540">
                                                                    54% </option>
                                                                <option value="550">
                                                                    55% </option>
                                                                <option value="560">
                                                                    56% </option>
                                                                <option value="570">
                                                                    57% </option>
                                                                <option value="580">
                                                                    58% </option>
                                                                <option value="590">
                                                                    59% </option>
                                                                <option value="600">
                                                                    60% </option>
                                                                <option value="610">
                                                                    61% </option>
                                                                <option value="620">
                                                                    62% </option>
                                                                <option value="630">
                                                                    63% </option>
                                                                <option value="640">
                                                                    64% </option>
                                                                <option value="650">
                                                                    65% </option>
                                                                <option value="660">
                                                                    66% </option>
                                                                <option value="670">
                                                                    67% </option>
                                                                <option value="680">
                                                                    68% </option>
                                                                <option value="690">
                                                                    69% </option>
                                                                <option value="700">
                                                                    70% </option>
                                                                <option value="710">
                                                                    71% </option>
                                                                <option value="720">
                                                                    72% </option>
                                                                <option value="730">
                                                                    73% </option>
                                                                <option value="740">
                                                                    74% </option>
                                                                <option value="750">
                                                                    75% </option>
                                                                <option value="760">
                                                                    76% </option>
                                                                <option value="770">
                                                                    77% </option>
                                                                <option value="780">
                                                                    78% </option>
                                                                <option value="790">
                                                                    79% </option>
                                                                <option value="800">
                                                                    80% </option>
                                                                <option value="810">
                                                                    81% </option>
                                                                <option value="820">
                                                                    82% </option>
                                                                <option value="830">
                                                                    83% </option>
                                                                <option value="840">
                                                                    84% </option>
                                                                <option value="850">
                                                                    85% </option>
                                                                <option value="860">
                                                                    86% </option>
                                                                <option value="870">
                                                                    87% </option>
                                                                <option value="880">
                                                                    88% </option>
                                                                <option value="890">
                                                                    89% </option>
                                                                <option value="900">
                                                                    90% </option>
                                                                <option value="910">
                                                                    91% </option>
                                                                <option value="920">
                                                                    92% </option>
                                                                <option value="930">
                                                                    93% </option>
                                                                <option value="940">
                                                                    94% </option>
                                                                <option value="950">
                                                                    95% </option>
                                                                <option value="960">
                                                                    96% </option>
                                                                <option value="970">
                                                                    97% </option>
                                                                <option value="980">
                                                                    98% </option>
                                                                <option value="990">
                                                                    99% </option>
                                                                <option value="1000">
                                                                    100% </option>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                    <tr class="dalt_f">
                                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG" id="id_dalt">
                                                                <font size="2"><a href="#dalt" title="dalt">DALT</a></font>
                                                            </div>
                                                        </td>
                                                        <td class="Min_f">
                                                            <input name="FILTRO[DEP][29][1][MIN]" id="DALT_Min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Max_f">
                                                            <input name="FILTRO[DEP][29][1][MAX]" id="DALT_Max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Acur. Min(%)_f">
                                                            <input name="FILTRO[DEP][29][2][ACC_MIN]" id="DALT_Acur. Min(%)" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td>
                                                            <select name="FILTRO[DEP][29][1][TOP]" size="1" class="form" id="DALT_Top" style="width:55px">
                                                                <option value=""></option>
                                                                <option value="1">
                                                                    0.1% </option>
                                                                <option value="5">
                                                                    0.5% </option>
                                                                <option value="10">
                                                                    1% </option>
                                                                <option value="20">
                                                                    2% </option>
                                                                <option value="30">
                                                                    3% </option>
                                                                <option value="40">
                                                                    4% </option>
                                                                <option value="50">
                                                                    5% </option>
                                                                <option value="60">
                                                                    6% </option>
                                                                <option value="70">
                                                                    7% </option>
                                                                <option value="80">
                                                                    8% </option>
                                                                <option value="90">
                                                                    9% </option>
                                                                <option value="100">
                                                                    10% </option>
                                                                <option value="110">
                                                                    11% </option>
                                                                <option value="120">
                                                                    12% </option>
                                                                <option value="130">
                                                                    13% </option>
                                                                <option value="140">
                                                                    14% </option>
                                                                <option value="150">
                                                                    15% </option>
                                                                <option value="160">
                                                                    16% </option>
                                                                <option value="170">
                                                                    17% </option>
                                                                <option value="180">
                                                                    18% </option>
                                                                <option value="190">
                                                                    19% </option>
                                                                <option value="200">
                                                                    20% </option>
                                                                <option value="210">
                                                                    21% </option>
                                                                <option value="220">
                                                                    22% </option>
                                                                <option value="230">
                                                                    23% </option>
                                                                <option value="240">
                                                                    24% </option>
                                                                <option value="250">
                                                                    25% </option>
                                                                <option value="260">
                                                                    26% </option>
                                                                <option value="270">
                                                                    27% </option>
                                                                <option value="280">
                                                                    28% </option>
                                                                <option value="290">
                                                                    29% </option>
                                                                <option value="300">
                                                                    30% </option>
                                                                <option value="310">
                                                                    31% </option>
                                                                <option value="320">
                                                                    32% </option>
                                                                <option value="330">
                                                                    33% </option>
                                                                <option value="340">
                                                                    34% </option>
                                                                <option value="350">
                                                                    35% </option>
                                                                <option value="360">
                                                                    36% </option>
                                                                <option value="370">
                                                                    37% </option>
                                                                <option value="380">
                                                                    38% </option>
                                                                <option value="390">
                                                                    39% </option>
                                                                <option value="400">
                                                                    40% </option>
                                                                <option value="410">
                                                                    41% </option>
                                                                <option value="420">
                                                                    42% </option>
                                                                <option value="430">
                                                                    43% </option>
                                                                <option value="440">
                                                                    44% </option>
                                                                <option value="450">
                                                                    45% </option>
                                                                <option value="460">
                                                                    46% </option>
                                                                <option value="470">
                                                                    47% </option>
                                                                <option value="480">
                                                                    48% </option>
                                                                <option value="490">
                                                                    49% </option>
                                                                <option value="500">
                                                                    50% </option>
                                                                <option value="510">
                                                                    51% </option>
                                                                <option value="520">
                                                                    52% </option>
                                                                <option value="530">
                                                                    53% </option>
                                                                <option value="540">
                                                                    54% </option>
                                                                <option value="550">
                                                                    55% </option>
                                                                <option value="560">
                                                                    56% </option>
                                                                <option value="570">
                                                                    57% </option>
                                                                <option value="580">
                                                                    58% </option>
                                                                <option value="590">
                                                                    59% </option>
                                                                <option value="600">
                                                                    60% </option>
                                                                <option value="610">
                                                                    61% </option>
                                                                <option value="620">
                                                                    62% </option>
                                                                <option value="630">
                                                                    63% </option>
                                                                <option value="640">
                                                                    64% </option>
                                                                <option value="650">
                                                                    65% </option>
                                                                <option value="660">
                                                                    66% </option>
                                                                <option value="670">
                                                                    67% </option>
                                                                <option value="680">
                                                                    68% </option>
                                                                <option value="690">
                                                                    69% </option>
                                                                <option value="700">
                                                                    70% </option>
                                                                <option value="710">
                                                                    71% </option>
                                                                <option value="720">
                                                                    72% </option>
                                                                <option value="730">
                                                                    73% </option>
                                                                <option value="740">
                                                                    74% </option>
                                                                <option value="750">
                                                                    75% </option>
                                                                <option value="760">
                                                                    76% </option>
                                                                <option value="770">
                                                                    77% </option>
                                                                <option value="780">
                                                                    78% </option>
                                                                <option value="790">
                                                                    79% </option>
                                                                <option value="800">
                                                                    80% </option>
                                                                <option value="810">
                                                                    81% </option>
                                                                <option value="820">
                                                                    82% </option>
                                                                <option value="830">
                                                                    83% </option>
                                                                <option value="840">
                                                                    84% </option>
                                                                <option value="850">
                                                                    85% </option>
                                                                <option value="860">
                                                                    86% </option>
                                                                <option value="870">
                                                                    87% </option>
                                                                <option value="880">
                                                                    88% </option>
                                                                <option value="890">
                                                                    89% </option>
                                                                <option value="900">
                                                                    90% </option>
                                                                <option value="910">
                                                                    91% </option>
                                                                <option value="920">
                                                                    92% </option>
                                                                <option value="930">
                                                                    93% </option>
                                                                <option value="940">
                                                                    94% </option>
                                                                <option value="950">
                                                                    95% </option>
                                                                <option value="960">
                                                                    96% </option>
                                                                <option value="970">
                                                                    97% </option>
                                                                <option value="980">
                                                                    98% </option>
                                                                <option value="990">
                                                                    99% </option>
                                                                <option value="1000">
                                                                    100% </option>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                    <tr class="dframe_f">
                                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG" id="id_dframe">
                                                                <font size="2"><a href="#dframe" title="dframe">DFRAME</a></font>
                                                            </div>
                                                        </td>
                                                        <td class="Min_f">
                                                            <input name="FILTRO[DEP][82][1][MIN]" id="DFRAME_Min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Max_f">
                                                            <input name="FILTRO[DEP][82][1][MAX]" id="DFRAME_Max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Acur. Min(%)_f">
                                                            <input name="FILTRO[DEP][82][2][ACC_MIN]" id="DFRAME_Acur. Min(%)" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td>
                                                            <select name="FILTRO[DEP][82][1][TOP]" size="1" class="form" id="DFRAME_Top" style="width:55px">
                                                                <option value=""></option>
                                                                <option value="1">
                                                                    0.1% </option>
                                                                <option value="5">
                                                                    0.5% </option>
                                                                <option value="10">
                                                                    1% </option>
                                                                <option value="20">
                                                                    2% </option>
                                                                <option value="30">
                                                                    3% </option>
                                                                <option value="40">
                                                                    4% </option>
                                                                <option value="50">
                                                                    5% </option>
                                                                <option value="60">
                                                                    6% </option>
                                                                <option value="70">
                                                                    7% </option>
                                                                <option value="80">
                                                                    8% </option>
                                                                <option value="90">
                                                                    9% </option>
                                                                <option value="100">
                                                                    10% </option>
                                                                <option value="110">
                                                                    11% </option>
                                                                <option value="120">
                                                                    12% </option>
                                                                <option value="130">
                                                                    13% </option>
                                                                <option value="140">
                                                                    14% </option>
                                                                <option value="150">
                                                                    15% </option>
                                                                <option value="160">
                                                                    16% </option>
                                                                <option value="170">
                                                                    17% </option>
                                                                <option value="180">
                                                                    18% </option>
                                                                <option value="190">
                                                                    19% </option>
                                                                <option value="200">
                                                                    20% </option>
                                                                <option value="210">
                                                                    21% </option>
                                                                <option value="220">
                                                                    22% </option>
                                                                <option value="230">
                                                                    23% </option>
                                                                <option value="240">
                                                                    24% </option>
                                                                <option value="250">
                                                                    25% </option>
                                                                <option value="260">
                                                                    26% </option>
                                                                <option value="270">
                                                                    27% </option>
                                                                <option value="280">
                                                                    28% </option>
                                                                <option value="290">
                                                                    29% </option>
                                                                <option value="300">
                                                                    30% </option>
                                                                <option value="310">
                                                                    31% </option>
                                                                <option value="320">
                                                                    32% </option>
                                                                <option value="330">
                                                                    33% </option>
                                                                <option value="340">
                                                                    34% </option>
                                                                <option value="350">
                                                                    35% </option>
                                                                <option value="360">
                                                                    36% </option>
                                                                <option value="370">
                                                                    37% </option>
                                                                <option value="380">
                                                                    38% </option>
                                                                <option value="390">
                                                                    39% </option>
                                                                <option value="400">
                                                                    40% </option>
                                                                <option value="410">
                                                                    41% </option>
                                                                <option value="420">
                                                                    42% </option>
                                                                <option value="430">
                                                                    43% </option>
                                                                <option value="440">
                                                                    44% </option>
                                                                <option value="450">
                                                                    45% </option>
                                                                <option value="460">
                                                                    46% </option>
                                                                <option value="470">
                                                                    47% </option>
                                                                <option value="480">
                                                                    48% </option>
                                                                <option value="490">
                                                                    49% </option>
                                                                <option value="500">
                                                                    50% </option>
                                                                <option value="510">
                                                                    51% </option>
                                                                <option value="520">
                                                                    52% </option>
                                                                <option value="530">
                                                                    53% </option>
                                                                <option value="540">
                                                                    54% </option>
                                                                <option value="550">
                                                                    55% </option>
                                                                <option value="560">
                                                                    56% </option>
                                                                <option value="570">
                                                                    57% </option>
                                                                <option value="580">
                                                                    58% </option>
                                                                <option value="590">
                                                                    59% </option>
                                                                <option value="600">
                                                                    60% </option>
                                                                <option value="610">
                                                                    61% </option>
                                                                <option value="620">
                                                                    62% </option>
                                                                <option value="630">
                                                                    63% </option>
                                                                <option value="640">
                                                                    64% </option>
                                                                <option value="650">
                                                                    65% </option>
                                                                <option value="660">
                                                                    66% </option>
                                                                <option value="670">
                                                                    67% </option>
                                                                <option value="680">
                                                                    68% </option>
                                                                <option value="690">
                                                                    69% </option>
                                                                <option value="700">
                                                                    70% </option>
                                                                <option value="710">
                                                                    71% </option>
                                                                <option value="720">
                                                                    72% </option>
                                                                <option value="730">
                                                                    73% </option>
                                                                <option value="740">
                                                                    74% </option>
                                                                <option value="750">
                                                                    75% </option>
                                                                <option value="760">
                                                                    76% </option>
                                                                <option value="770">
                                                                    77% </option>
                                                                <option value="780">
                                                                    78% </option>
                                                                <option value="790">
                                                                    79% </option>
                                                                <option value="800">
                                                                    80% </option>
                                                                <option value="810">
                                                                    81% </option>
                                                                <option value="820">
                                                                    82% </option>
                                                                <option value="830">
                                                                    83% </option>
                                                                <option value="840">
                                                                    84% </option>
                                                                <option value="850">
                                                                    85% </option>
                                                                <option value="860">
                                                                    86% </option>
                                                                <option value="870">
                                                                    87% </option>
                                                                <option value="880">
                                                                    88% </option>
                                                                <option value="890">
                                                                    89% </option>
                                                                <option value="900">
                                                                    90% </option>
                                                                <option value="910">
                                                                    91% </option>
                                                                <option value="920">
                                                                    92% </option>
                                                                <option value="930">
                                                                    93% </option>
                                                                <option value="940">
                                                                    94% </option>
                                                                <option value="950">
                                                                    95% </option>
                                                                <option value="960">
                                                                    96% </option>
                                                                <option value="970">
                                                                    97% </option>
                                                                <option value="980">
                                                                    98% </option>
                                                                <option value="990">
                                                                    99% </option>
                                                                <option value="1000">
                                                                    100% </option>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                    <tr class="mgte_cr_f">
                                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG" id="id_mgte_cr">
                                                                <font size="2"><a href="#mgte_cr" title="mgte_cr">MGTe_CR</a></font>
                                                            </div>
                                                        </td>
                                                        <td class="Min_f">
                                                            <input name="FILTRO[DEP][83][1][MIN]" id="MGTe_CR_Min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Max_f">
                                                            <input name="FILTRO[DEP][83][1][MAX]" id="MGTe_CR_Max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Acur. Min(%)_f">
                                                            <input name="FILTRO[DEP][83][2][ACC_MIN]" id="MGTe_CR_Acur. Min(%)" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td>
                                                            <select name="FILTRO[DEP][83][1][TOP]" size="1" class="form" id="MGTe_CR_Top" style="width:55px">
                                                                <option value=""></option>
                                                                <option value="1">
                                                                    0.1% </option>
                                                                <option value="5">
                                                                    0.5% </option>
                                                                <option value="10">
                                                                    1% </option>
                                                                <option value="20">
                                                                    2% </option>
                                                                <option value="30">
                                                                    3% </option>
                                                                <option value="40">
                                                                    4% </option>
                                                                <option value="50">
                                                                    5% </option>
                                                                <option value="60">
                                                                    6% </option>
                                                                <option value="70">
                                                                    7% </option>
                                                                <option value="80">
                                                                    8% </option>
                                                                <option value="90">
                                                                    9% </option>
                                                                <option value="100">
                                                                    10% </option>
                                                                <option value="110">
                                                                    11% </option>
                                                                <option value="120">
                                                                    12% </option>
                                                                <option value="130">
                                                                    13% </option>
                                                                <option value="140">
                                                                    14% </option>
                                                                <option value="150">
                                                                    15% </option>
                                                                <option value="160">
                                                                    16% </option>
                                                                <option value="170">
                                                                    17% </option>
                                                                <option value="180">
                                                                    18% </option>
                                                                <option value="190">
                                                                    19% </option>
                                                                <option value="200">
                                                                    20% </option>
                                                                <option value="210">
                                                                    21% </option>
                                                                <option value="220">
                                                                    22% </option>
                                                                <option value="230">
                                                                    23% </option>
                                                                <option value="240">
                                                                    24% </option>
                                                                <option value="250">
                                                                    25% </option>
                                                                <option value="260">
                                                                    26% </option>
                                                                <option value="270">
                                                                    27% </option>
                                                                <option value="280">
                                                                    28% </option>
                                                                <option value="290">
                                                                    29% </option>
                                                                <option value="300">
                                                                    30% </option>
                                                                <option value="310">
                                                                    31% </option>
                                                                <option value="320">
                                                                    32% </option>
                                                                <option value="330">
                                                                    33% </option>
                                                                <option value="340">
                                                                    34% </option>
                                                                <option value="350">
                                                                    35% </option>
                                                                <option value="360">
                                                                    36% </option>
                                                                <option value="370">
                                                                    37% </option>
                                                                <option value="380">
                                                                    38% </option>
                                                                <option value="390">
                                                                    39% </option>
                                                                <option value="400">
                                                                    40% </option>
                                                                <option value="410">
                                                                    41% </option>
                                                                <option value="420">
                                                                    42% </option>
                                                                <option value="430">
                                                                    43% </option>
                                                                <option value="440">
                                                                    44% </option>
                                                                <option value="450">
                                                                    45% </option>
                                                                <option value="460">
                                                                    46% </option>
                                                                <option value="470">
                                                                    47% </option>
                                                                <option value="480">
                                                                    48% </option>
                                                                <option value="490">
                                                                    49% </option>
                                                                <option value="500">
                                                                    50% </option>
                                                                <option value="510">
                                                                    51% </option>
                                                                <option value="520">
                                                                    52% </option>
                                                                <option value="530">
                                                                    53% </option>
                                                                <option value="540">
                                                                    54% </option>
                                                                <option value="550">
                                                                    55% </option>
                                                                <option value="560">
                                                                    56% </option>
                                                                <option value="570">
                                                                    57% </option>
                                                                <option value="580">
                                                                    58% </option>
                                                                <option value="590">
                                                                    59% </option>
                                                                <option value="600">
                                                                    60% </option>
                                                                <option value="610">
                                                                    61% </option>
                                                                <option value="620">
                                                                    62% </option>
                                                                <option value="630">
                                                                    63% </option>
                                                                <option value="640">
                                                                    64% </option>
                                                                <option value="650">
                                                                    65% </option>
                                                                <option value="660">
                                                                    66% </option>
                                                                <option value="670">
                                                                    67% </option>
                                                                <option value="680">
                                                                    68% </option>
                                                                <option value="690">
                                                                    69% </option>
                                                                <option value="700">
                                                                    70% </option>
                                                                <option value="710">
                                                                    71% </option>
                                                                <option value="720">
                                                                    72% </option>
                                                                <option value="730">
                                                                    73% </option>
                                                                <option value="740">
                                                                    74% </option>
                                                                <option value="750">
                                                                    75% </option>
                                                                <option value="760">
                                                                    76% </option>
                                                                <option value="770">
                                                                    77% </option>
                                                                <option value="780">
                                                                    78% </option>
                                                                <option value="790">
                                                                    79% </option>
                                                                <option value="800">
                                                                    80% </option>
                                                                <option value="810">
                                                                    81% </option>
                                                                <option value="820">
                                                                    82% </option>
                                                                <option value="830">
                                                                    83% </option>
                                                                <option value="840">
                                                                    84% </option>
                                                                <option value="850">
                                                                    85% </option>
                                                                <option value="860">
                                                                    86% </option>
                                                                <option value="870">
                                                                    87% </option>
                                                                <option value="880">
                                                                    88% </option>
                                                                <option value="890">
                                                                    89% </option>
                                                                <option value="900">
                                                                    90% </option>
                                                                <option value="910">
                                                                    91% </option>
                                                                <option value="920">
                                                                    92% </option>
                                                                <option value="930">
                                                                    93% </option>
                                                                <option value="940">
                                                                    94% </option>
                                                                <option value="950">
                                                                    95% </option>
                                                                <option value="960">
                                                                    96% </option>
                                                                <option value="970">
                                                                    97% </option>
                                                                <option value="980">
                                                                    98% </option>
                                                                <option value="990">
                                                                    99% </option>
                                                                <option value="1000">
                                                                    100% </option>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                    <tr class="mgte_re_f">
                                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG" id="id_mgte_re">
                                                                <font size="2"><a href="#mgte_re" title="mgte_re">MGTe_RE</a></font>
                                                            </div>
                                                        </td>
                                                        <td class="Min_f">
                                                            <input name="FILTRO[DEP][84][1][MIN]" id="MGTe_RE_Min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Max_f">
                                                            <input name="FILTRO[DEP][84][1][MAX]" id="MGTe_RE_Max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Acur. Min(%)_f">
                                                            <input name="FILTRO[DEP][84][2][ACC_MIN]" id="MGTe_RE_Acur. Min(%)" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td>
                                                            <select name="FILTRO[DEP][84][1][TOP]" size="1" class="form" id="MGTe_RE_Top" style="width:55px">
                                                                <option value=""></option>
                                                                <option value="1">
                                                                    0.1% </option>
                                                                <option value="5">
                                                                    0.5% </option>
                                                                <option value="10">
                                                                    1% </option>
                                                                <option value="20">
                                                                    2% </option>
                                                                <option value="30">
                                                                    3% </option>
                                                                <option value="40">
                                                                    4% </option>
                                                                <option value="50">
                                                                    5% </option>
                                                                <option value="60">
                                                                    6% </option>
                                                                <option value="70">
                                                                    7% </option>
                                                                <option value="80">
                                                                    8% </option>
                                                                <option value="90">
                                                                    9% </option>
                                                                <option value="100">
                                                                    10% </option>
                                                                <option value="110">
                                                                    11% </option>
                                                                <option value="120">
                                                                    12% </option>
                                                                <option value="130">
                                                                    13% </option>
                                                                <option value="140">
                                                                    14% </option>
                                                                <option value="150">
                                                                    15% </option>
                                                                <option value="160">
                                                                    16% </option>
                                                                <option value="170">
                                                                    17% </option>
                                                                <option value="180">
                                                                    18% </option>
                                                                <option value="190">
                                                                    19% </option>
                                                                <option value="200">
                                                                    20% </option>
                                                                <option value="210">
                                                                    21% </option>
                                                                <option value="220">
                                                                    22% </option>
                                                                <option value="230">
                                                                    23% </option>
                                                                <option value="240">
                                                                    24% </option>
                                                                <option value="250">
                                                                    25% </option>
                                                                <option value="260">
                                                                    26% </option>
                                                                <option value="270">
                                                                    27% </option>
                                                                <option value="280">
                                                                    28% </option>
                                                                <option value="290">
                                                                    29% </option>
                                                                <option value="300">
                                                                    30% </option>
                                                                <option value="310">
                                                                    31% </option>
                                                                <option value="320">
                                                                    32% </option>
                                                                <option value="330">
                                                                    33% </option>
                                                                <option value="340">
                                                                    34% </option>
                                                                <option value="350">
                                                                    35% </option>
                                                                <option value="360">
                                                                    36% </option>
                                                                <option value="370">
                                                                    37% </option>
                                                                <option value="380">
                                                                    38% </option>
                                                                <option value="390">
                                                                    39% </option>
                                                                <option value="400">
                                                                    40% </option>
                                                                <option value="410">
                                                                    41% </option>
                                                                <option value="420">
                                                                    42% </option>
                                                                <option value="430">
                                                                    43% </option>
                                                                <option value="440">
                                                                    44% </option>
                                                                <option value="450">
                                                                    45% </option>
                                                                <option value="460">
                                                                    46% </option>
                                                                <option value="470">
                                                                    47% </option>
                                                                <option value="480">
                                                                    48% </option>
                                                                <option value="490">
                                                                    49% </option>
                                                                <option value="500">
                                                                    50% </option>
                                                                <option value="510">
                                                                    51% </option>
                                                                <option value="520">
                                                                    52% </option>
                                                                <option value="530">
                                                                    53% </option>
                                                                <option value="540">
                                                                    54% </option>
                                                                <option value="550">
                                                                    55% </option>
                                                                <option value="560">
                                                                    56% </option>
                                                                <option value="570">
                                                                    57% </option>
                                                                <option value="580">
                                                                    58% </option>
                                                                <option value="590">
                                                                    59% </option>
                                                                <option value="600">
                                                                    60% </option>
                                                                <option value="610">
                                                                    61% </option>
                                                                <option value="620">
                                                                    62% </option>
                                                                <option value="630">
                                                                    63% </option>
                                                                <option value="640">
                                                                    64% </option>
                                                                <option value="650">
                                                                    65% </option>
                                                                <option value="660">
                                                                    66% </option>
                                                                <option value="670">
                                                                    67% </option>
                                                                <option value="680">
                                                                    68% </option>
                                                                <option value="690">
                                                                    69% </option>
                                                                <option value="700">
                                                                    70% </option>
                                                                <option value="710">
                                                                    71% </option>
                                                                <option value="720">
                                                                    72% </option>
                                                                <option value="730">
                                                                    73% </option>
                                                                <option value="740">
                                                                    74% </option>
                                                                <option value="750">
                                                                    75% </option>
                                                                <option value="760">
                                                                    76% </option>
                                                                <option value="770">
                                                                    77% </option>
                                                                <option value="780">
                                                                    78% </option>
                                                                <option value="790">
                                                                    79% </option>
                                                                <option value="800">
                                                                    80% </option>
                                                                <option value="810">
                                                                    81% </option>
                                                                <option value="820">
                                                                    82% </option>
                                                                <option value="830">
                                                                    83% </option>
                                                                <option value="840">
                                                                    84% </option>
                                                                <option value="850">
                                                                    85% </option>
                                                                <option value="860">
                                                                    86% </option>
                                                                <option value="870">
                                                                    87% </option>
                                                                <option value="880">
                                                                    88% </option>
                                                                <option value="890">
                                                                    89% </option>
                                                                <option value="900">
                                                                    90% </option>
                                                                <option value="910">
                                                                    91% </option>
                                                                <option value="920">
                                                                    92% </option>
                                                                <option value="930">
                                                                    93% </option>
                                                                <option value="940">
                                                                    94% </option>
                                                                <option value="950">
                                                                    95% </option>
                                                                <option value="960">
                                                                    96% </option>
                                                                <option value="970">
                                                                    97% </option>
                                                                <option value="980">
                                                                    98% </option>
                                                                <option value="990">
                                                                    99% </option>
                                                                <option value="1000">
                                                                    100% </option>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                    <tr class="mgte_co_f">
                                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG" id="id_mgte_co">
                                                                <font size="2"><a href="#mgte_co" title="mgte_co">MGTe_CO</a></font>
                                                            </div>
                                                        </td>
                                                        <td class="Min_f">
                                                            <input name="FILTRO[DEP][85][1][MIN]" id="MGTe_CO_Min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Max_f">
                                                            <input name="FILTRO[DEP][85][1][MAX]" id="MGTe_CO_Max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Acur. Min(%)_f">
                                                            <input name="FILTRO[DEP][85][2][ACC_MIN]" id="MGTe_CO_Acur. Min(%)" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td>
                                                            <select name="FILTRO[DEP][85][1][TOP]" size="1" class="form" id="MGTe_CO_Top" style="width:55px">
                                                                <option value=""></option>
                                                                <option value="1">
                                                                    0.1% </option>
                                                                <option value="5">
                                                                    0.5% </option>
                                                                <option value="10">
                                                                    1% </option>
                                                                <option value="20">
                                                                    2% </option>
                                                                <option value="30">
                                                                    3% </option>
                                                                <option value="40">
                                                                    4% </option>
                                                                <option value="50">
                                                                    5% </option>
                                                                <option value="60">
                                                                    6% </option>
                                                                <option value="70">
                                                                    7% </option>
                                                                <option value="80">
                                                                    8% </option>
                                                                <option value="90">
                                                                    9% </option>
                                                                <option value="100">
                                                                    10% </option>
                                                                <option value="110">
                                                                    11% </option>
                                                                <option value="120">
                                                                    12% </option>
                                                                <option value="130">
                                                                    13% </option>
                                                                <option value="140">
                                                                    14% </option>
                                                                <option value="150">
                                                                    15% </option>
                                                                <option value="160">
                                                                    16% </option>
                                                                <option value="170">
                                                                    17% </option>
                                                                <option value="180">
                                                                    18% </option>
                                                                <option value="190">
                                                                    19% </option>
                                                                <option value="200">
                                                                    20% </option>
                                                                <option value="210">
                                                                    21% </option>
                                                                <option value="220">
                                                                    22% </option>
                                                                <option value="230">
                                                                    23% </option>
                                                                <option value="240">
                                                                    24% </option>
                                                                <option value="250">
                                                                    25% </option>
                                                                <option value="260">
                                                                    26% </option>
                                                                <option value="270">
                                                                    27% </option>
                                                                <option value="280">
                                                                    28% </option>
                                                                <option value="290">
                                                                    29% </option>
                                                                <option value="300">
                                                                    30% </option>
                                                                <option value="310">
                                                                    31% </option>
                                                                <option value="320">
                                                                    32% </option>
                                                                <option value="330">
                                                                    33% </option>
                                                                <option value="340">
                                                                    34% </option>
                                                                <option value="350">
                                                                    35% </option>
                                                                <option value="360">
                                                                    36% </option>
                                                                <option value="370">
                                                                    37% </option>
                                                                <option value="380">
                                                                    38% </option>
                                                                <option value="390">
                                                                    39% </option>
                                                                <option value="400">
                                                                    40% </option>
                                                                <option value="410">
                                                                    41% </option>
                                                                <option value="420">
                                                                    42% </option>
                                                                <option value="430">
                                                                    43% </option>
                                                                <option value="440">
                                                                    44% </option>
                                                                <option value="450">
                                                                    45% </option>
                                                                <option value="460">
                                                                    46% </option>
                                                                <option value="470">
                                                                    47% </option>
                                                                <option value="480">
                                                                    48% </option>
                                                                <option value="490">
                                                                    49% </option>
                                                                <option value="500">
                                                                    50% </option>
                                                                <option value="510">
                                                                    51% </option>
                                                                <option value="520">
                                                                    52% </option>
                                                                <option value="530">
                                                                    53% </option>
                                                                <option value="540">
                                                                    54% </option>
                                                                <option value="550">
                                                                    55% </option>
                                                                <option value="560">
                                                                    56% </option>
                                                                <option value="570">
                                                                    57% </option>
                                                                <option value="580">
                                                                    58% </option>
                                                                <option value="590">
                                                                    59% </option>
                                                                <option value="600">
                                                                    60% </option>
                                                                <option value="610">
                                                                    61% </option>
                                                                <option value="620">
                                                                    62% </option>
                                                                <option value="630">
                                                                    63% </option>
                                                                <option value="640">
                                                                    64% </option>
                                                                <option value="650">
                                                                    65% </option>
                                                                <option value="660">
                                                                    66% </option>
                                                                <option value="670">
                                                                    67% </option>
                                                                <option value="680">
                                                                    68% </option>
                                                                <option value="690">
                                                                    69% </option>
                                                                <option value="700">
                                                                    70% </option>
                                                                <option value="710">
                                                                    71% </option>
                                                                <option value="720">
                                                                    72% </option>
                                                                <option value="730">
                                                                    73% </option>
                                                                <option value="740">
                                                                    74% </option>
                                                                <option value="750">
                                                                    75% </option>
                                                                <option value="760">
                                                                    76% </option>
                                                                <option value="770">
                                                                    77% </option>
                                                                <option value="780">
                                                                    78% </option>
                                                                <option value="790">
                                                                    79% </option>
                                                                <option value="800">
                                                                    80% </option>
                                                                <option value="810">
                                                                    81% </option>
                                                                <option value="820">
                                                                    82% </option>
                                                                <option value="830">
                                                                    83% </option>
                                                                <option value="840">
                                                                    84% </option>
                                                                <option value="850">
                                                                    85% </option>
                                                                <option value="860">
                                                                    86% </option>
                                                                <option value="870">
                                                                    87% </option>
                                                                <option value="880">
                                                                    88% </option>
                                                                <option value="890">
                                                                    89% </option>
                                                                <option value="900">
                                                                    90% </option>
                                                                <option value="910">
                                                                    91% </option>
                                                                <option value="920">
                                                                    92% </option>
                                                                <option value="930">
                                                                    93% </option>
                                                                <option value="940">
                                                                    94% </option>
                                                                <option value="950">
                                                                    95% </option>
                                                                <option value="960">
                                                                    96% </option>
                                                                <option value="970">
                                                                    97% </option>
                                                                <option value="980">
                                                                    98% </option>
                                                                <option value="990">
                                                                    99% </option>
                                                                <option value="1000">
                                                                    100% </option>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                    <tr class="mgte_f1_f">
                                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG" id="id_mgte_f1">
                                                                <font size="2"><a href="#mgte_f1" title="mgte_f1">MGTe_F1</a></font>
                                                            </div>
                                                        </td>
                                                        <td class="Min_f">
                                                            <input name="FILTRO[DEP][86][1][MIN]" id="MGTe_F1_Min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Max_f">
                                                            <input name="FILTRO[DEP][86][1][MAX]" id="MGTe_F1_Max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td class="Acur. Min(%)_f">
                                                            <input name="FILTRO[DEP][86][2][ACC_MIN]" id="MGTe_F1_Acur. Min(%)" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true">
                                                        </td>
                                                        <td>
                                                            <select name="FILTRO[DEP][86][1][TOP]" size="1" class="form" id="MGTe_F1_Top" style="width:55px">
                                                                <option value=""></option>
                                                                <option value="1">
                                                                    0.1% </option>
                                                                <option value="5">
                                                                    0.5% </option>
                                                                <option value="10">
                                                                    1% </option>
                                                                <option value="20">
                                                                    2% </option>
                                                                <option value="30">
                                                                    3% </option>
                                                                <option value="40">
                                                                    4% </option>
                                                                <option value="50">
                                                                    5% </option>
                                                                <option value="60">
                                                                    6% </option>
                                                                <option value="70">
                                                                    7% </option>
                                                                <option value="80">
                                                                    8% </option>
                                                                <option value="90">
                                                                    9% </option>
                                                                <option value="100">
                                                                    10% </option>
                                                                <option value="110">
                                                                    11% </option>
                                                                <option value="120">
                                                                    12% </option>
                                                                <option value="130">
                                                                    13% </option>
                                                                <option value="140">
                                                                    14% </option>
                                                                <option value="150">
                                                                    15% </option>
                                                                <option value="160">
                                                                    16% </option>
                                                                <option value="170">
                                                                    17% </option>
                                                                <option value="180">
                                                                    18% </option>
                                                                <option value="190">
                                                                    19% </option>
                                                                <option value="200">
                                                                    20% </option>
                                                                <option value="210">
                                                                    21% </option>
                                                                <option value="220">
                                                                    22% </option>
                                                                <option value="230">
                                                                    23% </option>
                                                                <option value="240">
                                                                    24% </option>
                                                                <option value="250">
                                                                    25% </option>
                                                                <option value="260">
                                                                    26% </option>
                                                                <option value="270">
                                                                    27% </option>
                                                                <option value="280">
                                                                    28% </option>
                                                                <option value="290">
                                                                    29% </option>
                                                                <option value="300">
                                                                    30% </option>
                                                                <option value="310">
                                                                    31% </option>
                                                                <option value="320">
                                                                    32% </option>
                                                                <option value="330">
                                                                    33% </option>
                                                                <option value="340">
                                                                    34% </option>
                                                                <option value="350">
                                                                    35% </option>
                                                                <option value="360">
                                                                    36% </option>
                                                                <option value="370">
                                                                    37% </option>
                                                                <option value="380">
                                                                    38% </option>
                                                                <option value="390">
                                                                    39% </option>
                                                                <option value="400">
                                                                    40% </option>
                                                                <option value="410">
                                                                    41% </option>
                                                                <option value="420">
                                                                    42% </option>
                                                                <option value="430">
                                                                    43% </option>
                                                                <option value="440">
                                                                    44% </option>
                                                                <option value="450">
                                                                    45% </option>
                                                                <option value="460">
                                                                    46% </option>
                                                                <option value="470">
                                                                    47% </option>
                                                                <option value="480">
                                                                    48% </option>
                                                                <option value="490">
                                                                    49% </option>
                                                                <option value="500">
                                                                    50% </option>
                                                                <option value="510">
                                                                    51% </option>
                                                                <option value="520">
                                                                    52% </option>
                                                                <option value="530">
                                                                    53% </option>
                                                                <option value="540">
                                                                    54% </option>
                                                                <option value="550">
                                                                    55% </option>
                                                                <option value="560">
                                                                    56% </option>
                                                                <option value="570">
                                                                    57% </option>
                                                                <option value="580">
                                                                    58% </option>
                                                                <option value="590">
                                                                    59% </option>
                                                                <option value="600">
                                                                    60% </option>
                                                                <option value="610">
                                                                    61% </option>
                                                                <option value="620">
                                                                    62% </option>
                                                                <option value="630">
                                                                    63% </option>
                                                                <option value="640">
                                                                    64% </option>
                                                                <option value="650">
                                                                    65% </option>
                                                                <option value="660">
                                                                    66% </option>
                                                                <option value="670">
                                                                    67% </option>
                                                                <option value="680">
                                                                    68% </option>
                                                                <option value="690">
                                                                    69% </option>
                                                                <option value="700">
                                                                    70% </option>
                                                                <option value="710">
                                                                    71% </option>
                                                                <option value="720">
                                                                    72% </option>
                                                                <option value="730">
                                                                    73% </option>
                                                                <option value="740">
                                                                    74% </option>
                                                                <option value="750">
                                                                    75% </option>
                                                                <option value="760">
                                                                    76% </option>
                                                                <option value="770">
                                                                    77% </option>
                                                                <option value="780">
                                                                    78% </option>
                                                                <option value="790">
                                                                    79% </option>
                                                                <option value="800">
                                                                    80% </option>
                                                                <option value="810">
                                                                    81% </option>
                                                                <option value="820">
                                                                    82% </option>
                                                                <option value="830">
                                                                    83% </option>
                                                                <option value="840">
                                                                    84% </option>
                                                                <option value="850">
                                                                    85% </option>
                                                                <option value="860">
                                                                    86% </option>
                                                                <option value="870">
                                                                    87% </option>
                                                                <option value="880">
                                                                    88% </option>
                                                                <option value="890">
                                                                    89% </option>
                                                                <option value="900">
                                                                    90% </option>
                                                                <option value="910">
                                                                    91% </option>
                                                                <option value="920">
                                                                    92% </option>
                                                                <option value="930">
                                                                    93% </option>
                                                                <option value="940">
                                                                    94% </option>
                                                                <option value="950">
                                                                    95% </option>
                                                                <option value="960">
                                                                    96% </option>
                                                                <option value="970">
                                                                    97% </option>
                                                                <option value="980">
                                                                    98% </option>
                                                                <option value="990">
                                                                    99% </option>
                                                                <option value="1000">
                                                                    100% </option>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>



                    <tr id="e10" style="display:none">
                        <td>
                            <table width="700" border="0" cellpadding="0" cellspacing="0">
                                <tbody>
                                    <tr>
                                        <td width="50%" valign="top" align="right">
                                            <table border="0" align="center">
                                                <tbody>
                                                    <tr bgcolor="#C4C4FF">
                                                        <td width="58" align="right" bgcolor="#E8E8FF">
                                                            <div align="right">&nbsp;</div>
                                                        </td>
                                                        <td width="33" id="min_f_1">
                                                            <div align="center">
                                                                <font size="2">Min</font>
                                                            </div>
                                                        </td>
                                                        <td width="33" id="max_f_1">
                                                            <div align="center">
                                                                <font size="2">Max</font>
                                                            </div>
                                                        </td>
                                                        <td width="41" id="acc_min_f_1">
                                                            <div align="center">
                                                                <font size="2">Acur.<br>
                                                                    Min(%)</font>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr id="MP120-AG">
                                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG">
                                                                <font size="2"><a href="#MP120-AG" title="Maternal 120 dias auxiliada pela genômica">MP120-AG</a></font>
                                                            </div>
                                                        </td>
                                                        <td id="min_f_35"><input name="FILTRO[DEP][35][1][MIN]" id="MP120-AG_min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                                        <td id="max_f_35"><input name="FILTRO[DEP][35][1][MAX]" id="MP120-AG_max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                                        <td id="acc_min_f_35"><input name="FILTRO[DEP][35][2][ACC_MIN]" id="MP120-AG_acc_min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                                    </tr>
                                                    <tr id="DP120-AG">
                                                        <td bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG">
                                                                <font size="2"><a href="#DP120-AG" title="Peso aos 120 dias auxiliada pela genômica">DP120-AG</a></font>
                                                            </div>
                                                        </td>
                                                        <td id="min_f_36"><input name="FILTRO[DEP][36][1][MIN]" id="DP120-AG_min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                                        <td id="max_f_36"><input name="FILTRO[DEP][36][1][MAX]" id="DP120-AG_max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                                        <td id="acc_min_f_36"><input name="FILTRO[DEP][36][2][ACC_MIN]" id="DP120-AG_acc_min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                                    </tr>
                                                    <tr id="DP365-AG">
                                                        <td bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG">
                                                                <font size="2"><a href="#DP365-AG" title="Peso aos 365 dias auxiliada pela genômica">DP365-AG</a></font>
                                                            </div>
                                                        </td>
                                                        <td id="min_f_37"><input name="FILTRO[DEP][37][1][MIN]" id="DP365-AG_min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                                        <td id="max_f_37"><input name="FILTRO[DEP][37][1][MAX]" id="DP365-AG_max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                                        <td id="acc_min_f_37"><input name="FILTRO[DEP][37][2][ACC_MIN]" id="DP365-AG_acc_min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                                    </tr>
                                                    <tr id="DP450-AG">
                                                        <td bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG">
                                                                <font size="2"><a href="#DP450-AG" title="Peso aos 450 dias auxiliada pela genômica">DP450-AG</a></font>
                                                            </div>
                                                        </td>
                                                        <td id="min_f_38"><input name="FILTRO[DEP][38][1][MIN]" id="DP450-AG_min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                                        <td id="max_f_38"><input name="FILTRO[DEP][38][1][MAX]" id="DP450-AG_max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                                        <td id="acc_min_f_38"><input name="FILTRO[DEP][38][2][ACC_MIN]" id="DP450-AG_acc_min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                                    </tr>
                                                    <tr id="DPE365-AG">
                                                        <td height="-2" align="right" bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG">
                                                                <font size="2"><a href="#DPE365-AG" title="Perímetro aos 120 dias auxiliada pela genômica">DPE365-AG</a></font>
                                                            </div>
                                                        </td>
                                                        <td id="min_f_39"><input name="FILTRO[DEP][39][1][MIN]" id="DPE365-AG_min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                                        <td id="max_f_39"><input name="FILTRO[DEP][39][1][MAX]" id="DPE365-AG_max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                                        <td id="acc_min_f_39"><input name="FILTRO[DEP][39][2][ACC_MIN]" id="DPE365-AG_acc_min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                                    </tr>
                                                    <tr id="DPE450-AG">
                                                        <td bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG">
                                                                <font size="2"><a href="#DPE450-AG" title="Perímetro aos 120 dias auxiliada pela genômica">DPE450-AG</a></font>
                                                            </div>
                                                        </td>
                                                        <td id="min_f_40"><input name="FILTRO[DEP][40][1][MIN]" id="DPE450-AG_min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                                        <td id="max_f_40"><input name="FILTRO[DEP][40][1][MAX]" id="DPE450-AG_max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                                        <td id="acc_min_f_40"><input name="FILTRO[DEP][40][2][ACC_MIN]" id="DPE450-AG_acc_min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                        <td>
                                            <table border="0" align="center">
                                                <tbody>
                                                    <tr bgcolor="#C4C4FF">
                                                        <td width="58" align="right" bgcolor="#E8E8FF">
                                                            <div align="right">&nbsp;</div>
                                                        </td>
                                                        <td width="33" id="min_f_1">
                                                            <div align="center">
                                                                <font size="2">Min</font>
                                                            </div>
                                                        </td>
                                                        <td width="33" id="max_f_1">
                                                            <div align="center">
                                                                <font size="2">Max</font>
                                                            </div>
                                                        </td>
                                                        <td width="41" id="acc_min_f_1">
                                                            <div align="center">
                                                                <font size="2">Acur.<br>
                                                                    Min(%)</font>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr id="DIPP-AG">
                                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG">
                                                                <font size="2"><a href="#DIPP-AG" title="Idade ao primeiro parto auxiliada pela genômica">DIPP-AG</a></font>
                                                            </div>
                                                        </td>
                                                        <td id="min_f_42"><input name="FILTRO[DEP][42][1][MIN]" id="DIPP-AG_min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                                        <td id="max_f_42"><input name="FILTRO[DEP][42][1][MAX]" id="DIPP-AG_max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                                        <td id="acc_min_f_42"><input name="FILTRO[DEP][42][2][ACC_MIN]" id="DIPP-AG_acc_min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                                    </tr>
                                                    <tr id="DAOL-AG">
                                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG">
                                                                <font size="2"><a href="#DAOL-AG" title="Área de olho de lombo auxiliada pela genômica">DAOL-AG</a></font>
                                                            </div>
                                                        </td>
                                                        <td id="min_f_41"><input name="FILTRO[DEP][41][1][MIN]" id="DAOL-AG_min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                                        <td id="max_f_41"><input name="FILTRO[DEP][41][1][MAX]" id="DAOL-AG_max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                                        <td id="acc_min_f_41"><input name="FILTRO[DEP][41][2][ACC_MIN]" id="DAOL-AG_acc_min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                                    </tr>
                                                    <tr id="DACAB-AG">
                                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG">
                                                                <font size="2"><a href="#DACAB-AG" title="Acabamento auxiliada pela genômica">DACAB-AG</a></font>
                                                            </div>
                                                        </td>
                                                        <td id="min_f_43"><input name="FILTRO[DEP][43][1][MIN]" id="DACAB-AG_min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                                        <td id="max_f_43"><input name="FILTRO[DEP][43][1][MAX]" id="DACAB-AG_max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                                        <td id="acc_min_f_43"><input name="FILTRO[DEP][43][2][ACC_MIN]" id="DACAB-AG_acc_min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                                    </tr>
                                                    <tr id="DPAC-AG">
                                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG">
                                                                <font size="2"><a href="#DPAC-AG" title="Produtividade acumulada auxiliada pela genômica">DPAC-AG</a></font>
                                                            </div>
                                                        </td>
                                                        <td id="min_f_45"><input name="FILTRO[DEP][45][1][MIN]" id="DPAC-AG_min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                                        <td id="max_f_45"><input name="FILTRO[DEP][45][1][MAX]" id="DPAC-AG_max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                                        <td id="acc_min_f_45"><input name="FILTRO[DEP][45][2][ACC_MIN]" id="DPAC-AG_acc_min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                                    </tr>
                                                    <tr id="D3P-AG">
                                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG">
                                                                <font size="2"><a href="#D3P-AG" title="Parto precoce auxiliada pela genômica">D3P-AG</a></font>
                                                            </div>
                                                        </td>
                                                        <td id="min_f_46"><input name="FILTRO[DEP][46][1][MIN]" id="D3P-AG_min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                                        <td id="max_f_46"><input name="FILTRO[DEP][46][1][MAX]" id="D3P-AG_max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                                        <td id="acc_min_f_46"><input name="FILTRO[DEP][46][2][ACC_MIN]" id="D3P-AG_acc_min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                                    </tr>
                                                    <tr id="DSTAY-AG">
                                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                                            <div align="center" class="DEP_AG">
                                                                <font size="2"><a href="#DSTAY-AG" title="Stayability auxiliada pela genômica">DSTAY-AG</a></font>
                                                            </div>
                                                        </td>
                                                        <td id="min_f_47"><input name="FILTRO[DEP][47][1][MIN]" id="DSTAY-AG_min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                                        <td id="max_f_47"><input name="FILTRO[DEP][47][1][MAX]" id="DSTAY-AG_max" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                                        <td id="acc_min_f_47"><input name="FILTRO[DEP][47][2][ACC_MIN]" id="DSTAY-AG_acc_min" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr bgcolor="#0C3A5B">
                        <td>
                            <div align="left"><a href="javascript:expand(4)">
                                    <font color="#FFFFFF">:::Filtro
                                        por Número de Rebanhos/Filhos:::</font>
                                </a></div>
                        </td>
                    </tr>
                    <tr id="e4">
                        <td colspan="2" align="center">
                            <table width="23%" border="0" align="center">
                                <tbody>
                                    <tr bgcolor="#C4C4FF">
                                        <td height="0" bgcolor="#E8E8FF">
                                            <div align="center">&nbsp;</div>
                                        </td>
                                        <td>
                                            <div align="center">Min</div>
                                        </td>
                                        <td>
                                            <div align="center">Max</div>
                                        </td>
                                        <td height="0" bgcolor="#E8E8FF">
                                            <div align="center">&nbsp;</div>
                                        </td>
                                        <td>
                                            <div align="center">Min</div>
                                        </td>
                                        <td>
                                            <div align="center">Max</div>
                                        </td>
                                        <td height="0" bgcolor="#E8E8FF">
                                            <div align="center">&nbsp;</div>
                                        </td>
                                        <td>
                                            <div align="center">Min</div>
                                        </td>
                                        <td>
                                            <div align="center">Max</div>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                            <div class="DEP_AG">
                                                <font size="2"><a id="d3p" href="#d3p">NF3P</a></font>
                                            </div>
                                        </td>
                                        <td><input name="FILTRO[DEP][17][3][MIN]" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                        <td><input name="FILTRO[DEP][17][3][MAX]" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>

                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                            <div class="DEP_AG">
                                                <font size="2"><a id="mp120" href="#mp120">NN120</a></font>
                                            </div>
                                        </td>
                                        <td><input name="FILTRO[DEP][1][6][MIN]" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                        <td><input name="FILTRO[DEP][1][6][MAX]" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>

                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                            <div class="DEP_AG">
                                                <font size="2"><a id="mp120" href="#mp120">NRN120</a></font>
                                            </div>
                                        </td>
                                        <td><input name="FILTRO[DEP][1][7][MIN]" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                        <td><input name="FILTRO[DEP][1][7][MAX]" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                    </tr>
                                    <tr>
                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                            <div class="DEP_AG">
                                                <font size="2"><a id="dstay" href="#dstay">NFSTAY</a></font>
                                            </div>
                                        </td>
                                        <td><input name="FILTRO[DEP][16][3][MIN]" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                        <td><input name="FILTRO[DEP][16][3][MAX]" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>

                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                            <div class="DEP_AG">
                                                <font size="2"><a id="dp120" href="#dp120">NF120</a></font>
                                            </div>
                                        </td>
                                        <td><input name="FILTRO[DEP][3][3][MIN]" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                        <td><input name="FILTRO[DEP][3][3][MAX]" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>

                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                            <div class="DEP_AG">
                                                <font size="2"><a id="dp120" href="#dp120">NR120</a></font>
                                            </div>
                                        </td>
                                        <td><input name="FILTRO[DEP][3][4][MIN]" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                        <td><input name="FILTRO[DEP][3][4][MAX]" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                    </tr>
                                    <tr>
                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                            <div class="DEP_AG">
                                                <font size="2"><a id="dp210" href="#dp210">NF210</a></font>
                                            </div>
                                        </td>
                                        <td><input name="FILTRO[DEP][4][3][MIN]" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                        <td><input name="FILTRO[DEP][4][3][MAX]" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>

                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                            <div class="DEP_AG">
                                                <font size="2"><a id="dp210" href="#dp210">NR210</a></font>
                                            </div>
                                        </td>
                                        <td><input name="FILTRO[DEP][4][4][MIN]" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                        <td><input name="FILTRO[DEP][4][4][MAX]" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                    </tr>
                                    <tr>
                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                            <div class="DEP_AG">
                                                <font size="2"><a id="dp450" href="#dp450">NF450</a></font>
                                            </div>
                                        </td>
                                        <td><input name="FILTRO[DEP][6][3][MIN]" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                        <td><input name="FILTRO[DEP][6][3][MAX]" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>

                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                            <div class="DEP_AG">
                                                <font size="2"><a id="dp450" href="#dp450">NR450</a></font>
                                            </div>
                                        </td>
                                        <td><input name="FILTRO[DEP][6][4][MIN]" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                        <td><input name="FILTRO[DEP][6][4][MAX]" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                    </tr>
                                    <tr>
                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                            <div class="DEP_AG">
                                                <font size="2"><a id="dacab" href="#dacab">NFUS</a></font>
                                            </div>
                                        </td>
                                        <td><input name="FILTRO[DEP][31][3][MIN]" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                        <td><input name="FILTRO[DEP][31][3][MAX]" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>

                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                            <div class="DEP_AG">
                                                <font size="2"><a id="dacab" href="#dacab">NRUS</a></font>
                                            </div>
                                        </td>
                                        <td><input name="FILTRO[DEP][31][4][MIN]" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                        <td><input name="FILTRO[DEP][31][4][MAX]" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                    </tr>
                                    <tr>
                                        <td height="0" align="right" bgcolor="#E8E8FF">
                                            <div class="DEP_AG">
                                                <font size="2"><a id="des" href="#des">NFSAMS</a></font>
                                            </div>
                                        </td>
                                        <td><input name="FILTRO[DEP][26][3][MIN]" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                        <td><input name="FILTRO[DEP][26][3][MAX]" type="text" class="form" value="" size="2" maxlength="10" spellcheck="false" data-ms-editor="true"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr id="e3">
                        <td colspan="2">
                            <table width="100%" border="0" align="center">
                                <tbody>
                                    <tr>
                                        <td colspan="2">
                                            <div align="center">
                                                <font color="#000066" size="2">Classificar
                                                    por</font>
                                                <select name="FILTRO[CLASSIFICAR]" size="1" class="form" id="FILTRO_CLASSIFICAR">
                                                    <option value=""></option>
                                                    <option value="0">Identificação</option>
                                                    <option value="1">Nome</option>
                                                    <option value="2">Sexo</option>
                                                    <option value="3">Variedade</option>
                                                    <option value="4">Categoria</option>
                                                    <option value="5">Dt Nascto</option>
                                                    <option value="6">Pai</option>
                                                    <option value="7">Mae</option>
                                                    <option value="8">MP120</option>
                                                    <option value="9">MP210</option>
                                                    <option value="10">DP120</option>
                                                    <option value="11">DP210</option>
                                                    <option value="12">DP365</option>
                                                    <option value="13">DP450</option>
                                                    <option value="14">DPE365</option>
                                                    <option value="15">DPE450</option>
                                                    <option value="16">DIPP</option>
                                                    <option value="17">DPG</option>
                                                    <option value="18">DPAV</option>
                                                    <option value="19">DPAC</option>
                                                    <option value="20">DAOL</option>
                                                    <option value="21">DSTAY</option>
                                                    <option value="22">D3P</option>
                                                    <option value="23" selected="">MGT</option>
                                                    <option value="24">DPN</option>
                                                    <option value="25">DED</option>
                                                    <option value="26">DPD</option>
                                                    <option value="27">DMD</option>
                                                    <option value="28">DES</option>
                                                    <option value="29">DPS</option>
                                                    <option value="30">DMS</option>
                                                    <option value="31">DALT</option>
                                                    <option value="32">DACAB</option>
                                                    <option value="33">MTP120</option>
                                                    <option value="34">MTP210</option>
                                                    <option value="35">DMAR</option>
                                                    <option value="36">DPCQ</option>
                                                    <option value="37">DPPC</option>
                                                    <option value="38">DMAC</option>
                                                    <option value="39">DCAR</option>
                                                    <option value="40">DIMS</option>
                                                    <option value="41">DIPM</option>
                                                    <option value="42">DFRAME</option>
                                                    <option value="43">MGTe_CR</option>
                                                    <option value="44">MGTe_RE</option>
                                                    <option value="45">MGTe_CO</option>
                                                    <option value="46">MGTe_F1</option>
                                                </select>
                                                <font color="#000066" size="2">Em Ordem</font>
                                                <select name="FILTRO[ORDEM]" size="1" class="form">
                                                    <option value="Desc">Decrescente</option>
                                                    <option value="Asc">Crescente</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center">
                                            <div align="center">
                                                <font color="#000066" size="2">Numero
                                                    de Animais por Página</font>
                                                <select name="animais_p" size="1" class="form" id="select28">
                                                    <option value="15">15</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                    <option value="200">200</option>
                                                    <option value="500">500</option>
                                                </select>
                                                <input type="hidden" name="inicio" value="0">
                                                <input type="hidden" name="pagina" value="1">
                                                <input type="hidden" name="RC">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div align="right">
                                                <input type="submit" name="Consultar" class="eff" onclick="TestarRaca();" value="Consultar">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                                <input type="reset" class="eff" name="Limpar" value="Limpar">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
            <script>
                ShowHideCampos('SIMPLES');
            </script>
        </form>
    </div>
</div>