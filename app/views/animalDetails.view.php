<?php $depsMap = require HELPERS_PATH . 'depsMap.php';

function convertPercentageToDecimal($percentage)
{
    $percentage = $percentage * 100;
    return $percentage;
}

?>
<div id="aba3" class="aba" style="margin-top: 0px; border-top-width: 0px;">
    <div align="center">
        <div>
            <div style="margin-top:10px;text-align:right;height:30px;">
                <span style="font-weight:bold;color:#0055cc; font-size: 12px">Imprimir: &nbsp;</span>

                <button style="cursor:pointer;vertical-align:middle;border:solid 1px #ccc;background:#FFF;margin-right:2px;" title="PDF" onclick="Ger_Ficha.submit();return false;"><i class="fa-regular fa-file-pdf"></i></button>

            </div>
        </div>

        <div align="center">
            <div align="right">

                <form name="Ger_Ficha" id="Ger_Ficha" method="POST" action="/modulo/consulta_ag/ficha_pdf_new.php" target="myNewWin">
                    <input type="hidden" name="CGA" value="1991378">
                    <input type="hidden" name="RC" value="1">
                    <input type="hidden" name="C_DESTAQUE" value="MGT">
                </form>
            </div>
        </div>
        <div id="Ficha_animal" style="margin-top:0px; max-width:800px; width:720px" align="center">
            <style type="text/css" rel="stylesheet" media="all">

            </style>
            <table width="720" border="0" align="center" cellpadding="0" cellspacing="0">
                <tbody>
                    <tr>
                        <td>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                                <tbody>
                                    <tr>
                                        <td colspan="10">
                                            <table width="100%" border="0" id="campo_ocultar">
                                                <tbody>
                                                    <tr>
                                                        <td bgcolor="#006699">
                                                            <div align="center">
                                                                <font color="#FFFFFF" size="-2">
                                                                    3ª AG - <?php
                                                                            //current month / year
                                                                            $month = date('m');
                                                                            $year = date('Y');
                                                                            //current month name
                                                                            $monthName = date('F', mktime(0, 0, 0, $month, 10));
                                                                            //current month name in portuguese
                                                                            $monthNamePt = '';
                                                                            switch ($monthName) {
                                                                                case 'January':
                                                                                    $monthNamePt = 'Jan';
                                                                                    break;
                                                                                case 'February':
                                                                                    $monthNamePt = 'Fev';
                                                                                    break;
                                                                                case 'March':
                                                                                    $monthNamePt = 'Mar';
                                                                                    break;
                                                                                case 'April':
                                                                                    $monthNamePt = 'Abr';
                                                                                    break;
                                                                                case 'May':
                                                                                    $monthNamePt = 'Mai';
                                                                                    break;
                                                                                case 'June':
                                                                                    $monthNamePt = 'Jun';
                                                                                    break;
                                                                                case 'July':
                                                                                    $monthNamePt = 'Jul';
                                                                                    break;
                                                                                case 'August':
                                                                                    $monthNamePt = 'Ago';
                                                                                    break;
                                                                                case 'September':
                                                                                    $monthNamePt = 'Set';
                                                                                    break;
                                                                                case 'October':
                                                                                    $monthNamePt = 'Out';
                                                                                    break;
                                                                                case 'November':
                                                                                    $monthNamePt = 'Nov';
                                                                                    break;
                                                                                case 'December':
                                                                                    $monthNamePt = 'Dez';
                                                                                    break;
                                                                            }

                                                                            echo $monthNamePt . '/' . $year;
                                                                            ?>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="borda_grupo">
                                                <table width="100%" border="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="39%" class="ficha_cabecalho_campo">Nome Animal</td>
                                                            <td width="61%" class="ficha_cabecalho_campo">Proprietário:
                                                                <?php echo $animalDetails['proprietario']; ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="39%" class="ficha_texto_campo"><?php echo $animalDetails['nome']; ?></td>
                                                            <td height="60%" class="ficha_texto_campo">Criador:
                                                                <?php echo $animalDetails['criador']; ?>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table width="100%" border="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="62" class="ficha_cabecalho_campo">Série</td>
                                                            <td width="115" class="ficha_cabecalho_campo">RGN</td>
                                                            <td width="133" class="ficha_cabecalho_campo">RGD</td>
                                                            <td width="124" class="ficha_cabecalho_campo">Raça</td>
                                                            <td width="124" class="ficha_cabecalho_campo">Categoria</td>
                                                            <td width="129" class="ficha_cabecalho_campo">Variedade</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="62" class="ficha_texto_campo"> <?php echo $animalDetails['serie']; ?></td>
                                                            <td width="115" class="ficha_texto_campo"> <?php echo $animalDetails['rgn']; ?></td>
                                                            <td width="133" class="ficha_texto_campo"> <?php echo $animalDetails['rgd']; ?></td>
                                                            <td width="124" class="ficha_texto_campo"> <?php echo $animalDetails['raca']; ?></td>
                                                            <td width="124" class="ficha_texto_campo"> <?php echo $animalDetails['categoria']; ?></td>
                                                            <td width="129" class="ficha_texto_campo"> <?php echo $animalDetails['variedade']; ?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table width="100%" border="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="286" class="ficha_cabecalho_campo">Central</td>
                                                            <td width="300" class="ficha_cabecalho_campo">Reprodução Programada</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="ficha_texto_campo">
                                                                <?php echo $animalDetails['central']; ?>
                                                            </td>
                                                            <td class="ficha_texto_campo">
                                                                <?php echo $animalDetails['rep_prog']; ?>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table width="100%" border="0">
                                                    <tbody>
                                                        <tr class="textinho">
                                                            <td width="162" class="ficha_cabecalho_campo">Sexo</td>
                                                            <td width="176" class="ficha_cabecalho_campo">Situação</td>
                                                            <td width="173" class="ficha_cabecalho_campo">Dt. Nasc.</td>
                                                            <td width="87" class="mgt_texto">MGTe</td>
                                                            <td width="93" class="mgt_texto">TOP</td>
                                                        </tr>
                                                        <tr class="textinho">
                                                            <td class="ficha_texto_campo"><?php echo $animalDetails['sexo']; ?></td>
                                                            <td class="ficha_texto_campo"><?php echo $animalDetails['situacao']; ?></td>
                                                            <td class="ficha_texto_campo"><?php echo $animalDetails['dt_nasc']; ?></td>
                                                            <td width="87" class="mgt_texto">
                                                                <?php echo $animalDetails[$depsMap['mgt']['1']]; ?>
                                                                @
                                                                <?php
                                                                $acc = convertPercentageToDecimal($animalDetails[$depsMap['mgt']['2']]);
                                                                echo $acc;
                                                                ?>
                                                            </td>
                                                            <td width="93" class="mgt_texto">®
                                                                <?php echo $animalDetails[$depsMap['mgt']['3']]; ?>
                                                                %</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>


                                            <div class="borda_grupo" align="left">
                                                <div id="deps_normal">
                                                    <div>
                                                        <table border="0" cellspacing="0" cellpadding="0" width="100%">
                                                            <tbody>
                                                                <tr>
                                                                    <td align="center" id="dipp_f">
                                                                        <table border="0" width="60" cellpadding="0" cellspacing="0" class="borda_dep">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="ficha_cabecalho_campo">DIPP</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td height="17" class="ficha_texto_campo">
                                                                                        <?php echo $animalDetails[$depsMap['dipp']['1']]; ?>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td height="17" class="ficha_texto_campo">
                                                                                        <font color="#0066CC">
                                                                                            <?php
                                                                                            $acc = convertPercentageToDecimal($animalDetails[$depsMap['dipp']['2']]);
                                                                                            echo '@&nbsp;' . $acc;
                                                                                            ?>
                                                                                        </font>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td height="17" class="ficha_texto_campo">
                                                                                        <font color="#FF3333">
                                                                                            <?php echo '®&nbsp;' . $animalDetails[$depsMap['dipp']['3']] . '%'; ?>
                                                                                        </font>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                    <td align="center" id="d3p_f">
                                                                        <table border="0" width="60" cellpadding="0" cellspacing="0" class="borda_dep">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="ficha_cabecalho_campo_dep">D3P</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td height="17" class="ficha_texto_campo_dep">
                                                                                        <?php echo $animalDetails[$depsMap['d3p']['1']]; ?>
                                                                                        &nbsp;</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td height="17" class="ficha_texto_campo_dep">
                                                                                        <font color="#0066CC">
                                                                                            <?php
                                                                                            $acc = convertPercentageToDecimal($animalDetails[$depsMap['d3p']['2']]);
                                                                                            echo '®&nbsp;' . $acc;
                                                                                            ?>
                                                                                        </font>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td height="17" class="ficha_texto_campo_dep">
                                                                                        <font color="#FF3333">

                                                                                            <?php echo '®&nbsp;' . $animalDetails[$depsMap['d3p']['3']] . '%'; ?>

                                                                                        </font>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                    <td align="center" id="dipm_f">
                                                                        <table border="0" width="60" cellpadding="0" cellspacing="0" class="borda_dep">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="ficha_cabecalho_campo">DIPM</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td height="17" class="ficha_texto_campo">
                                                                                        <?php echo $animalDetails[$depsMap['dipm']['1']]; ?>
                                                                                        &nbsp;</td>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td height="17" class="ficha_texto_campo">
                                                                        <font color="#0066CC">
                                                                            <?php
                                                                            $acc = convertPercentageToDecimal($animalDetails[$depsMap['dipm']['2']]);
                                                                            echo '®&nbsp;' . $acc;
                                                                            ?>
                                                                        </font>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td height="17" class="ficha_texto_campo">
                                                                        <font color="#FF3333">
                                                                            <?php echo '®&nbsp;' . $animalDetails[$depsMap['dipm']['3']] . '%'; ?>
                                                                        </font>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                        </td>
                                        <td align="center" id="mp120_f">
                                            <table border="0" width="60" cellpadding="0" cellspacing="0" class="borda_dep">
                                                <tbody>
                                                    <tr>
                                                        <td class="ficha_cabecalho_campo_dep">MP120</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="17" class="ficha_texto_campo_dep">
                                                            <?php echo $animalDetails[$depsMap['mp120']['1']]; ?>
                                                            &nbsp;</td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo_dep">
                                            <font color="#0066CC">
                                                <?php
                                                $acc = convertPercentageToDecimal($animalDetails[$depsMap['mp120']['2']]);
                                                echo '@&nbsp;' . $acc;
                                                ?>
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo_dep">
                                            <font color="#FF3333">
                                                <?php echo '®&nbsp;' . $animalDetails[$depsMap['mp120']['3']] . '%'; ?>
                                            </font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" id="mp210_f">
                            <table border="0" width="60" cellpadding="0" cellspacing="0" class="borda_dep">
                                <tbody>
                                    <tr>
                                        <td class="ficha_cabecalho_campo">MP210</td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <?php echo $animalDetails[$depsMap['mp210']['1']]; ?>
                                            &nbsp;</td>
                        </td>
                    </tr>
                    <tr>
                        <td height="17" class="ficha_texto_campo">
                            <font color="#0066CC">
                                <?php
                                $acc = convertPercentageToDecimal($animalDetails[$depsMap['mp210']['2']]);
                                echo '@&nbsp;' . $acc;
                                ?>
                            </font>
                        </td>
                    </tr>
                    <tr>
                        <td height="17" class="ficha_texto_campo">
                            <font color="#FF3333">
                                <?php echo '®&nbsp;' . $animalDetails[$depsMap['mp210']['3']] . '%'; ?>
                            </font>
                        </td>
                    </tr>
                </tbody>
            </table>
            </td>
            <td align="center" id="mtp120_f">
                <table border="0" width="60" cellpadding="0" cellspacing="0" class="borda_dep">
                    <tbody>
                        <tr>
                            <td class="ficha_cabecalho_campo">MTP120</td>
                        </tr>
                        <tr>
                            <td height="17" class="ficha_texto_campo">
                                <?php echo $animalDetails[$depsMap['mtp120']['1']]; ?>
                                &nbsp;</td>
            </td>
            </tr>
            <tr>
                <td height="17" class="ficha_texto_campo">
                    <font color="#0066CC">
                        <?php
                        $acc = convertPercentageToDecimal($animalDetails[$depsMap['mtp120']['2']]);
                        echo '@&nbsp;' . $acc;
                        ?>
                    </font>
                </td>
            </tr>
            <tr>
                <td height="17" class="ficha_texto_campo">
                    <font color="#FF3333">
                        <?php echo '®&nbsp;' . $animalDetails[$depsMap['mtp120']['3']] . '%'; ?>
                    </font>
                </td>
            </tr>
            </tbody>
            </table>
            </td>
            <td align="center" id="mtp210_f">
                <table border="0" width="60" cellpadding="0" cellspacing="0" class="borda_dep">
                    <tbody>
                        <tr>
                            <td class="ficha_cabecalho_campo">MTP210</td>
                        </tr>
                        <tr>
                            <td height="17" class="ficha_texto_campo">
                                <?php echo $animalDetails[$depsMap['mtp210']['1']]; ?>
                            </td>
                        </tr>
                        <tr>
                            <td height="17" class="ficha_texto_campo">
                                <font color="#0066CC">
                                    <?php
                                    $acc = convertPercentageToDecimal($animalDetails[$depsMap['mtp210']['2']]);
                                    echo '@&nbsp;' . $acc;
                                    ?>
                                </font>
                            </td>
                        </tr>
                        <tr>
                            <td height="17" class="ficha_texto_campo">
                                <font color="#FF3333">
                                    <?php echo '®&nbsp;' . $animalDetails[$depsMap['mtp210']['3']] . '%'; ?>
                                </font>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
            <td align="center" id="dstay_f">
                <table border="0" width="60" cellpadding="0" cellspacing="0" class="borda_dep">
                    <tbody>
                        <tr>
                            <td class="ficha_cabecalho_campo_dep">DSTAY</td>
                        </tr>
                        <tr>
                            <td height="17" class="ficha_texto_campo_dep">
                                <?php echo $animalDetails[$depsMap['dstay']['1']]; ?>
                            </td>
                        </tr>
                        <tr>
                            <td height="17" class="ficha_texto_campo_dep">
                                <font color="#0066CC">
                                    <?php
                                    $acc = convertPercentageToDecimal($animalDetails[$depsMap['dstay']['2']]);
                                    echo '@&nbsp;' . $acc;
                                    ?>
                                </font>
                            </td>
                        </tr>
                        <tr>
                            <td height="17" class="ficha_texto_campo_dep">
                                <font color="#FF3333">
                                    <?php echo '®&nbsp;' . $animalDetails[$depsMap['dstay']['3']] . '%'; ?>
                                </font>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
            <td align="center" id="dpac_f">
                <table border="0" width="60" cellpadding="0" cellspacing="0" class="borda_dep">
                    <tbody>
                        <tr>
                            <td class="ficha_cabecalho_campo">DPAC</td>
                        </tr>
                        <tr>
                            <td height="17" class="ficha_texto_campo">
                                <?php //echo $animalDetails[$depsMap['dpac']['1']]; 
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td height="17" class="ficha_texto_campo">
                                <font color="#0066CC">
                                    <?php
                                    //$acc = convertPercentageToDecimal($animalDetails[$depsMap['dpac']['2']]);
                                    //echo '@&nbsp;' . $acc;
                                    ?>
                                </font>
                            </td>
                        </tr>
                        <tr>
                            <td height="17" class="ficha_texto_campo">
                                <font color="#FF3333">
                                    <?php //echo '®&nbsp;' . $animalDetails[$depsMap['dpac']['3']] . '%'; 
                                    ?>
                                </font>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
            <td align="center" id="dpg_f">
                <table border="0" width="60" cellpadding="0" cellspacing="0" class="borda_dep">
                    <tbody>
                        <tr>
                            <td class="ficha_cabecalho_campo">DPG</td>
                        </tr>
                        <tr>
                            <td height="17" class="ficha_texto_campo">
                                <?php echo $animalDetails[$depsMap['dpg']['1']]; ?>
                            </td>
                        </tr>
                        <tr>
                            <td height="17" class="ficha_texto_campo">
                                <font color="#0066CC">
                                    <?php
                                    $acc = convertPercentageToDecimal($animalDetails[$depsMap['dpg']['2']]);
                                    echo '@&nbsp;' . $acc;
                                    ?>
                                </font>
                            </td>
                        </tr>
                        <tr>
                            <td height="17" class="ficha_texto_campo">
                                <font color="#FF3333">
                                    <?php echo '®&nbsp;' . $animalDetails[$depsMap['dpg']['3']] . '%'; ?>
                                </font>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
            </tr>
            </tbody>
            </table>
        </div>
        <div style="margin-top:4px;">
            <table border="0" cellspacing="0" cellpadding="0" width="100%">
                <tbody>
                    <tr>
                        <td align="center" id="dpn_f">
                            <table border="0" width="60" cellpadding="0" cellspacing="0" class="borda_dep">
                                <tbody>
                                    <tr>
                                        <td class="ficha_cabecalho_campo">DPN</td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <?php echo $animalDetails[$depsMap['dpn']['1']]; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <font color="#0066CC">
                                                <?php
                                                $acc = convertPercentageToDecimal($animalDetails[$depsMap['dpn']['2']]);
                                                echo '@&nbsp;' . $acc;
                                                ?>
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <font color="#FF3333">
                                                <?php echo '®&nbsp;' . $animalDetails[$depsMap['dpn']['3']] . '%'; ?>
                                            </font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" id="dp120_f">
                            <table border="0" width="60" cellpadding="0" cellspacing="0" class="borda_dep">
                                <tbody>
                                    <tr>
                                        <td class="ficha_cabecalho_campo">DP120</td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <?php echo $animalDetails[$depsMap['dp120']['1']]; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <font color="#0066CC">
                                                <?php
                                                $acc = convertPercentageToDecimal($animalDetails[$depsMap['dp120']['2']]);
                                                echo '@&nbsp;' . $acc;
                                                ?>
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <font color="#FF3333">
                                                <?php echo '®&nbsp;' . $animalDetails[$depsMap['dp120']['3']] . '%'; ?>
                                            </font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" id="dp210_f">
                            <table border="0" width="60" cellpadding="0" cellspacing="0" class="borda_dep">
                                <tbody>
                                    <tr>
                                        <td class="ficha_cabecalho_campo_dep">DP210</td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo_dep">
                                            <?php echo $animalDetails[$depsMap['dp210']['1']]; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo_dep">
                                            <font color="#0066CC">
                                                <?php
                                                $acc = convertPercentageToDecimal($animalDetails[$depsMap['dp210']['2']]);
                                                echo '@&nbsp;' . $acc;
                                                ?>
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo_dep">
                                            <font color="#FF3333">
                                                <?php echo '®&nbsp;' . $animalDetails[$depsMap['dp210']['3']] . '%'; ?>
                                            </font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" id="dp365_f">
                            <table border="0" width="60" cellpadding="0" cellspacing="0" class="borda_dep">
                                <tbody>
                                    <tr>
                                        <td class="ficha_cabecalho_campo">DP365</td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <?php echo $animalDetails[$depsMap['dp365']['1']]; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <font color="#0066CC">
                                                <?php
                                                $acc = convertPercentageToDecimal($animalDetails[$depsMap['dp365']['2']]);
                                                echo '@&nbsp;' . $acc;
                                                ?>
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <font color="#FF3333">
                                                <?php echo '®&nbsp;' . $animalDetails[$depsMap['dp365']['3']] . '%'; ?>
                                            </font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" id="dp450_f">
                            <table border="0" width="60" cellpadding="0" cellspacing="0" class="borda_dep">
                                <tbody>
                                    <tr>
                                        <td class="ficha_cabecalho_campo_dep">DP450</td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo_dep">
                                            <?php echo $animalDetails[$depsMap['dp450']['1']]; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo_dep">
                                            <font color="#0066CC">
                                                <?php
                                                $acc = convertPercentageToDecimal($animalDetails[$depsMap['dp450']['2']]);
                                                echo '@&nbsp;' . $acc;
                                                ?>
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo_dep">
                                            <font color="#FF3333">
                                                <?php echo '®&nbsp;' . $animalDetails[$depsMap['dp450']['3']] . '%'; ?>
                                            </font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" id="dpav_f">
                            <table border="0" width="60" cellpadding="0" cellspacing="0" class="borda_dep">
                                <tbody>
                                    <tr>
                                        <td class="ficha_cabecalho_campo">DPAV</td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <?php echo $animalDetails[$depsMap['dpav']['1']]; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <font color="#0066CC">
                                                <?php
                                                $acc = convertPercentageToDecimal($animalDetails[$depsMap['dpav']['2']]);
                                                echo '@&nbsp;' . $acc;
                                                ?>
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <font color="#FF3333">
                                                <?php echo '®&nbsp;' . $animalDetails[$depsMap['dpav']['3']] . '%'; ?>
                                            </font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" id="dcar_f">
                            <table border="0" width="60" cellpadding="0" cellspacing="0" class="borda_dep">
                                <tbody>
                                    <tr>
                                        <td class="ficha_cabecalho_campo">DCAR</td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <?php echo $animalDetails[$depsMap['dcar']['1']]; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <font color="#0066CC">
                                                <?php
                                                $acc = convertPercentageToDecimal($animalDetails[$depsMap['dcar']['2']]);
                                                echo '@&nbsp;' . $acc;
                                                ?>
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <font color="#FF3333">
                                                <?php echo '®&nbsp;' . $animalDetails[$depsMap['dcar']['3']] . '%'; ?>
                                            </font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" id="dims_f">
                            <table border="0" width="60" cellpadding="0" cellspacing="0" class="borda_dep">
                                <tbody>
                                    <tr>
                                        <td class="ficha_cabecalho_campo">DIMS</td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <?php echo $animalDetails[$depsMap['dims']['1']]; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <font color="#0066CC">
                                                <?php
                                                $acc = convertPercentageToDecimal($animalDetails[$depsMap['dims']['2']]);
                                                echo '@&nbsp;' . $acc;
                                                ?>
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <font color="#FF3333">
                                                <?php echo '®&nbsp;' . $animalDetails[$depsMap['dims']['3']] . '%'; ?>
                                            </font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" id="dpe365_f">
                            <table border="0" width="60" cellpadding="0" cellspacing="0" class="borda_dep">
                                <tbody>
                                    <tr>
                                        <td class="ficha_cabecalho_campo_dep">DPE365</td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo_dep">
                                            <?php echo $animalDetails[$depsMap['dpe365']['1']]; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo_dep">
                                            <font color="#0066CC">
                                                <?php
                                                $acc = convertPercentageToDecimal($animalDetails[$depsMap['dpe365']['2']]);
                                                echo '@&nbsp;' . $acc;
                                                ?>
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo_dep">
                                            <font color="#FF3333">
                                                <?php echo '®&nbsp;' . $animalDetails[$depsMap['dpe365']['3']] . '%'; ?>
                                            </font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" id="dpe450_f">
                            <table border="0" width="60" cellpadding="0" cellspacing="0" class="borda_dep">
                                <tbody>
                                    <tr>
                                        <td class="ficha_cabecalho_campo">DPE450</td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <?php echo $animalDetails[$depsMap['dpe450']['1']]; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <font color="#0066CC">
                                                <?php
                                                $acc = convertPercentageToDecimal($animalDetails[$depsMap['dpe450']['2']]);
                                                echo '@&nbsp;' . $acc;
                                                ?>
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <font color="#FF3333">
                                                <?php echo '®&nbsp;' . $animalDetails[$depsMap['dpe450']['3']] . '%'; ?>
                                            </font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div style="margin-top:4px;">
            <table border="0" cellspacing="0" cellpadding="0" width="100%">
                <tbody>
                    <tr>
                        <td align="center" id="daol_f">
                            <table border="0" width="60" cellpadding="0" cellspacing="0" class="borda_dep">
                                <tbody>
                                    <tr>
                                        <td class="ficha_cabecalho_campo_dep">DAOL</td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo_dep">
                                            <?php echo $animalDetails[$depsMap['daol']['1']]; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo_dep">
                                            <font color="#0066CC">
                                                <?php
                                                $acc = convertPercentageToDecimal($animalDetails[$depsMap['daol']['2']]);
                                                echo '@&nbsp;' . $acc;
                                                ?>
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo_dep">
                                            <font color="#FF3333">
                                                <?php echo '®&nbsp;' . $animalDetails[$depsMap['daol']['3']] . '%'; ?>
                                            </font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" id="dacab_f">
                            <table border="0" width="60" cellpadding="0" cellspacing="0" class="borda_dep">
                                <tbody>
                                    <tr>
                                        <td class="ficha_cabecalho_campo_dep">DACAB</td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo_dep">
                                            <?php echo $animalDetails[$depsMap['dacab']['1']]; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo_dep">
                                            <font color="#0066CC">
                                                <?php
                                                $acc = convertPercentageToDecimal($animalDetails[$depsMap['dacab']['2']]);
                                                echo '@&nbsp;' . $acc;
                                                ?>
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo_dep">
                                            <font color="#FF3333">
                                                <?php echo '®&nbsp;' . $animalDetails[$depsMap['dacab']['3']] . '%'; ?>
                                            </font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" id="dmar_f">
                            <table border="0" width="60" cellpadding="0" cellspacing="0" class="borda_dep">
                                <tbody>
                                    <tr>
                                        <td class="ficha_cabecalho_campo">DMAR</td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <?php echo $animalDetails[$depsMap['dmar']['1']]; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <font color="#0066CC">
                                                <?php
                                                $acc = convertPercentageToDecimal($animalDetails[$depsMap['dmar']['2']]);
                                                echo '@&nbsp;' . $acc;
                                                ?>
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <font color="#FF3333">
                                                <?php echo '®&nbsp;' . $animalDetails[$depsMap['dmar']['3']] . '%'; ?>
                                            </font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" id="dmac_f">
                            <table border="0" width="60" cellpadding="0" cellspacing="0" class="borda_dep">
                                <tbody>
                                    <tr>
                                        <td class="ficha_cabecalho_campo">DMAC</td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <?php echo $animalDetails[$depsMap['dmac']['1']]; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <font color="#0066CC">
                                                <?php
                                                $acc = convertPercentageToDecimal($animalDetails[$depsMap['dmac']['2']]);
                                                echo '@&nbsp;' . $acc;
                                                ?>
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <font color="#FF3333">
                                                <?php echo '®&nbsp;' . $animalDetails[$depsMap['dmac']['3']] . '%'; ?>
                                            </font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" id="dpcq_f">
                            <table border="0" width="60" cellpadding="0" cellspacing="0" class="borda_dep">
                                <tbody>
                                    <tr>
                                        <td class="ficha_cabecalho_campo">DPCQ</td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <?php echo $animalDetails[$depsMap['dpcq']['1']]; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <font color="#0066CC">
                                                <?php
                                                $acc = convertPercentageToDecimal($animalDetails[$depsMap['dpcq']['2']]);
                                                echo '@&nbsp;' . $acc;
                                                ?>
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <font color="#FF3333">
                                                <?php echo '®&nbsp;' . $animalDetails[$depsMap['dpcq']['3']] . '%'; ?>
                                            </font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" id="dppc_f">
                            <table border="0" width="60" cellpadding="0" cellspacing="0" class="borda_dep">
                                <tbody>
                                    <tr>
                                        <td class="ficha_cabecalho_campo">DPPC</td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <?php echo $animalDetails[$depsMap['dppc']['1']]; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <font color="#0066CC">
                                                <?php
                                                $acc = convertPercentageToDecimal($animalDetails[$depsMap['dppc']['2']]);
                                                echo '@&nbsp;' . $acc;
                                                ?>
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <font color="#FF3333">
                                                <?php echo '®&nbsp;' . $animalDetails[$depsMap['dppc']['3']] . '%'; ?>
                                            </font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" id="ded_f">
                            <table border="0" width="60" cellpadding="0" cellspacing="0" class="borda_dep">
                                <tbody>
                                    <tr>
                                        <td class="ficha_cabecalho_campo">DED</td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <?php echo $animalDetails[$depsMap['ded']['1']]; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <font color="#0066CC">
                                                <?php
                                                $acc = convertPercentageToDecimal($animalDetails[$depsMap['ded']['2']]);
                                                echo '@&nbsp;' . $acc;
                                                ?>
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <font color="#FF3333">
                                                <?php echo '®&nbsp;' . $animalDetails[$depsMap['ded']['3']] . '%'; ?>
                                            </font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" id="dpd_f">
                            <table border="0" width="60" cellpadding="0" cellspacing="0" class="borda_dep">
                                <tbody>
                                    <tr>
                                        <td class="ficha_cabecalho_campo">DPD</td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <?php echo $animalDetails[$depsMap['dpd']['1']]; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <font color="#0066CC">
                                                <?php
                                                $acc = convertPercentageToDecimal($animalDetails[$depsMap['dpd']['2']]);
                                                echo '@&nbsp;' . $acc;
                                                ?>
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <font color="#FF3333">
                                                <?php echo '®&nbsp;' . $animalDetails[$depsMap['dpd']['3']] . '%'; ?>
                                            </font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" id="dmd_f">
                            <table border="0" width="60" cellpadding="0" cellspacing="0" class="borda_dep">
                                <tbody>
                                    <tr>
                                        <td class="ficha_cabecalho_campo">DMD</td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <?php echo $animalDetails[$depsMap['dmd']['1']]; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <font color="#0066CC">
                                                <?php
                                                $acc = convertPercentageToDecimal($animalDetails[$depsMap['dmd']['2']]);
                                                echo '@&nbsp;' . $acc;
                                                ?>
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <font color="#FF3333">
                                                <?php echo '®&nbsp;' . $animalDetails[$depsMap['dmd']['3']] . '%'; ?>
                                            </font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" id="des_f">
                            <table border="0" width="60" cellpadding="0" cellspacing="0" class="borda_dep">
                                <tbody>
                                    <tr>
                                        <td class="ficha_cabecalho_campo">DES</td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <?php echo $animalDetails[$depsMap['des']['1']]; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <font color="#0066CC">
                                                <?php
                                                $acc = convertPercentageToDecimal($animalDetails[$depsMap['des']['2']]);
                                                echo '@&nbsp;' . $acc;
                                                ?>
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <font color="#FF3333">
                                                <?php echo '®&nbsp;' . $animalDetails[$depsMap['des']['3']] . '%'; ?>
                                            </font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div style="margin-top:4px;">
            <table border="0" cellspacing="0" cellpadding="0" width="100%">
                <tbody>
                    <tr>
                        <td align="center" id="dps_f">
                            <table border="0" width="60" cellpadding="0" cellspacing="0" class="borda_dep">
                                <tbody>
                                    <tr>
                                        <td class="ficha_cabecalho_campo">DPS</td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <?php echo $animalDetails[$depsMap['dps']['1']]; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <font color="#0066CC">
                                                <?php
                                                $acc = convertPercentageToDecimal($animalDetails[$depsMap['dps']['2']]);
                                                echo '@&nbsp;' . $acc;
                                                ?>
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <font color="#FF3333">
                                                <?php echo '®&nbsp;' . $animalDetails[$depsMap['dps']['3']] . '%'; ?>
                                            </font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" id="dms_f">
                            <table border="0" width="60" cellpadding="0" cellspacing="0" class="borda_dep">
                                <tbody>
                                    <tr>
                                        <td class="ficha_cabecalho_campo">DMS</td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <?php echo $animalDetails[$depsMap['dms']['1']]; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <font color="#0066CC">
                                                <?php
                                                $acc = convertPercentageToDecimal($animalDetails[$depsMap['dms']['2']]);
                                                echo '@&nbsp;' . $acc;
                                                ?>
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <font color="#FF3333">
                                                <?php echo '®&nbsp;' . $animalDetails[$depsMap['dms']['3']] . '%'; ?>
                                            </font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" id="dalt_f">
                            <table border="0" width="60" cellpadding="0" cellspacing="0" class="borda_dep">
                                <tbody>
                                    <tr>
                                        <td class="ficha_cabecalho_campo">DALT</td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <?php echo $animalDetails[$depsMap['dalt']['1']]; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <font color="#0066CC">
                                                <?php
                                                $acc = convertPercentageToDecimal($animalDetails[$depsMap['dalt']['2']]);
                                                echo '@&nbsp;' . $acc;
                                                ?>
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <font color="#FF3333">
                                                <?php echo '®&nbsp;' . $animalDetails[$depsMap['dalt']['3']] . '%'; ?>
                                            </font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" id="dframe_f">
                            <table border="0" width="60" cellpadding="0" cellspacing="0" class="borda_dep">
                                <tbody>
                                    <tr>
                                        <td class="ficha_cabecalho_campo">DFRAME</td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <?php echo $animalDetails[$depsMap['dframe']['1']]; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <font color="#0066CC">
                                                <?php
                                                $acc = convertPercentageToDecimal($animalDetails[$depsMap['dframe']['2']]);
                                                echo '@&nbsp;' . $acc;
                                                ?>
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <font color="#FF3333">
                                                <?php echo '®&nbsp;' . $animalDetails[$depsMap['dframe']['3']] . '%'; ?>
                                            </font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" id="mgte_cr_f">
                            <table border="0" width="60" cellpadding="0" cellspacing="0" class="borda_dep">
                                <tbody>
                                    <tr>
                                        <td class="ficha_cabecalho_campo">MGTe_CR</td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <?php echo $animalDetails[$depsMap['mgte_cr']['1']]; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <font color="#0066CC">
                                                <?php
                                                $acc = convertPercentageToDecimal($animalDetails[$depsMap['mgte_cr']['2']]);
                                                echo '@&nbsp;' . $acc;
                                                ?>
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <font color="#FF3333">
                                                <?php echo '®&nbsp;' . $animalDetails[$depsMap['mgte_cr']['3']] . '%'; ?>
                                            </font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" id="mgte_re_f">
                            <table border="0" width="60" cellpadding="0" cellspacing="0" class="borda_dep">
                                <tbody>
                                    <tr>
                                        <td class="ficha_cabecalho_campo">MGTe_RE</td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <?php echo $animalDetails[$depsMap['mgte_re']['1']]; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <font color="#0066CC">
                                                <?php
                                                $acc = convertPercentageToDecimal($animalDetails[$depsMap['mgte_re']['2']]);
                                                echo '@&nbsp;' . $acc;
                                                ?>
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <font color="#FF3333">
                                                <?php echo '®&nbsp;' . $animalDetails[$depsMap['mgte_re']['3']] . '%'; ?>
                                            </font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" id="mgte_co_f">
                            <table border="0" width="60" cellpadding="0" cellspacing="0" class="borda_dep">
                                <tbody>
                                    <tr>
                                        <td class="ficha_cabecalho_campo">MGTe_CO</td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <?php echo $animalDetails[$depsMap['mgte_co']['1']]; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <font color="#0066CC">
                                                <?php
                                                $acc = convertPercentageToDecimal($animalDetails[$depsMap['mgte_co']['2']]);
                                                echo '@&nbsp;' . $acc;
                                                ?>
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <font color="#FF3333">
                                                <?php echo '®&nbsp;' . $animalDetails[$depsMap['mgte_co']['3']] . '%'; ?>
                                            </font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td align="center" id="mgte_f1_f">
                            <table border="0" width="60" cellpadding="0" cellspacing="0" class="borda_dep">
                                <tbody>
                                    <tr>
                                        <td class="ficha_cabecalho_campo">MGTe_F1</td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <?php echo $animalDetails[$depsMap['mgte_f1']['1']]; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <font color="#0066CC">
                                                <?php
                                                $acc = convertPercentageToDecimal($animalDetails[$depsMap['mgte_f1']['2']]);
                                                echo '@&nbsp;' . $acc;
                                                ?>
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="17" class="ficha_texto_campo">
                                            <font color="#FF3333">
                                                <?php echo '®&nbsp;' . $animalDetails[$depsMap['mgte_f1']['3']] . '%'; ?>
                                            </font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="ficha_cabecalho_campo" style="margin-top:5px;">
        <tbody>
            <tr>
                <td width="60%">
                    <font color="#0066CC">@: Acurácia</font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#FF3333">®: TOP</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <font>DEP G: DEP Genômica</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <font>*: DEP com fenótipo incorporado</font>
                </td>
                <td style="text-align:right;background-color:#FFFFFF">
                    <font color="#02314b">Em destaque DEPs que compõe o MGTe / MGT</font>
                </td>
            </tr>
        </tbody>
    </table>
</div>


<div class="borda_grupo">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <tbody>
            <tr>
                <td align="center" id="nf3p_f">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr class="textinho" bgcolor="F5F5F5">
                                <td>
                                    <div align="center">
                                        <font color="#006600" size="1" face="Arial, Helvetica, sans-serif">NF3P: </font>
                                    </div>
                                    <div align="center">
                                        <font color="#000000" size="1" face="Arial, Helvetica, sans-serif">
                                            0 </font>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td align="center" id="nn120_f">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr class="textinho" bgcolor="F5F5F5">
                                <td>
                                    <div align="center">
                                        <font color="#006600" size="1" face="Arial, Helvetica, sans-serif">NN120: </font>
                                    </div>
                                    <div align="center">
                                        <font color="#000000" size="1" face="Arial, Helvetica, sans-serif">
                                            0 </font>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td align="center" id="nrn120_f">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr class="textinho" bgcolor="F5F5F5">
                                <td>
                                    <div align="center">
                                        <font color="#006600" size="1" face="Arial, Helvetica, sans-serif">NRN120: </font>
                                    </div>
                                    <div align="center">
                                        <font color="#000000" size="1" face="Arial, Helvetica, sans-serif">
                                            0 </font>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td align="center" id="nfstay_f">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr class="textinho" bgcolor="F5F5F5">
                                <td>
                                    <div align="center">
                                        <font color="#006600" size="1" face="Arial, Helvetica, sans-serif">NFSTAY: </font>
                                    </div>
                                    <div align="center">
                                        <font color="#000000" size="1" face="Arial, Helvetica, sans-serif">
                                            0 </font>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td align="center" id="nf120_f">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr class="textinho" bgcolor="F5F5F5">
                                <td>
                                    <div align="center">
                                        <font color="#006600" size="1" face="Arial, Helvetica, sans-serif">NF120: </font>
                                    </div>
                                    <div align="center">
                                        <font color="#000000" size="1" face="Arial, Helvetica, sans-serif">
                                            3 </font>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td align="center" id="nr120_f">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr class="textinho" bgcolor="F5F5F5">
                                <td>
                                    <div align="center">
                                        <font color="#006600" size="1" face="Arial, Helvetica, sans-serif">NR120: </font>
                                    </div>
                                    <div align="center">
                                        <font color="#000000" size="1" face="Arial, Helvetica, sans-serif">
                                            1 </font>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td align="center" id="nf210_f">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr class="textinho" bgcolor="F5F5F5">
                                <td>
                                    <div align="center">
                                        <font color="#006600" size="1" face="Arial, Helvetica, sans-serif">NF210: </font>
                                    </div>
                                    <div align="center">
                                        <font color="#000000" size="1" face="Arial, Helvetica, sans-serif">
                                            1 </font>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td align="center" id="nr210_f">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr class="textinho" bgcolor="F5F5F5">
                                <td>
                                    <div align="center">
                                        <font color="#006600" size="1" face="Arial, Helvetica, sans-serif">NR210: </font>
                                    </div>
                                    <div align="center">
                                        <font color="#000000" size="1" face="Arial, Helvetica, sans-serif">
                                            1 </font>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td align="center" id="nf450_f">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr class="textinho" bgcolor="F5F5F5">
                                <td>
                                    <div align="center">
                                        <font color="#006600" size="1" face="Arial, Helvetica, sans-serif">NF450: </font>
                                    </div>
                                    <div align="center">
                                        <font color="#000000" size="1" face="Arial, Helvetica, sans-serif">
                                            0 </font>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td align="center" id="nr450_f">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr class="textinho" bgcolor="F5F5F5">
                                <td>
                                    <div align="center">
                                        <font color="#006600" size="1" face="Arial, Helvetica, sans-serif">NR450: </font>
                                    </div>
                                    <div align="center">
                                        <font color="#000000" size="1" face="Arial, Helvetica, sans-serif">
                                            0 </font>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td align="center" id="nfus_f">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr class="textinho" bgcolor="F5F5F5">
                                <td>
                                    <div align="center">
                                        <font color="#006600" size="1" face="Arial, Helvetica, sans-serif">NFUS: </font>
                                    </div>
                                    <div align="center">
                                        <font color="#000000" size="1" face="Arial, Helvetica, sans-serif">
                                            0 </font>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td align="center" id="nrus_f">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr class="textinho" bgcolor="F5F5F5">
                                <td>
                                    <div align="center">
                                        <font color="#006600" size="1" face="Arial, Helvetica, sans-serif">NRUS: </font>
                                    </div>
                                    <div align="center">
                                        <font color="#000000" size="1" face="Arial, Helvetica, sans-serif">
                                            0 </font>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td align="center" id="nfsams_f">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr class="textinho" bgcolor="F5F5F5">
                                <td>
                                    <div align="center">
                                        <font color="#006600" size="1" face="Arial, Helvetica, sans-serif">NFSAMS: </font>
                                    </div>
                                    <div align="center">
                                        <font color="#000000" size="1" face="Arial, Helvetica, sans-serif">
                                            0 </font>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</div>
</td>
</tr>
</tbody>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tbody>
        <tr>
            <td bgcolor="#006699">
                <div align="center">
                    <font color="#FFFFFF" size='-2'>Genealogia</font>
                </div>
            </td>
        </tr>
        <tr>
            <td align="center">
                <table width="650" border="0" align="center">
                    <tbody>
                        <tr>
                            <td width="205" height="60" rowspan="4">
                                <table width="100%" border="0">
                                    <tbody>
                                        <tr>
                                            <td class="genealogia_texto_campo">MFBN / 336 / ---- <br>
                                                GIM DOS BORGES <br>
                                                MGTe =
                                                17.81 &nbsp;&nbsp;TOP
                                                15 % </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <font size="-2"><br>
                                </font>
                            </td>
                            <td width="200" height="60" rowspan="2">
                                <table width="100%" border="0">
                                    <tbody>
                                        <tr>
                                            <td class="genealogia_texto_campo_m">GRI / 8683 / 8683 <br>
                                                BIG BEN DA S.NICE <br>
                                                MGTe =
                                                12.62
                                                &nbsp;&nbsp;TOP
                                                31 %

                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td width="200" height="60">
                                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                    <tbody>
                                        <tr>
                                            <td class="genealogia_texto_campo_m">---- / 3165 / I3165 <br>
                                                FAJARDO DA GB <br>
                                                MGTe = 9.48 &nbsp;&nbsp;TOP
                                                44 %

                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td width="200" height="60">
                                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                    <tbody>
                                        <tr>
                                            <td class="genealogia_texto_campo_f">---- / ---- / EA516 <br>
                                                COMPORTA DA S.NICE <br>
                                                MGTe =
                                                8.12 &nbsp;&nbsp;TOP
                                                50 %
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td width="200" height="60" rowspan="2">
                                <table width="100%" border="0">
                                    <tbody>
                                        <tr>
                                            <td class="genealogia_texto_campo_f">JHJH / 425 / ---- <br>
                                                MF 425 1646 273 JH <br>
                                                MGTe =
                                                22.34
                                                &nbsp;&nbsp;TOP
                                                6 %
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td width="200" height="60">
                                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                    <tbody>
                                        <tr>
                                            <td class="genealogia_texto_campo_m">---- / A1646 / D7661 <br>
                                                1646 DA M.N. <br>
                                                MGTe =
                                                12.25 &nbsp;&nbsp;TOP
                                                32 %

                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td width="200" height="60">
                                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                    <tbody>
                                        <tr>
                                            <td class="genealogia_texto_campo_f">JHJH / 273 / ---- <br>
                                                IF273PRA1309 <br>
                                                MGTe =
                                                15.69 &nbsp;&nbsp;TOP
                                                21 %

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
    </tbody>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tbody>
        <tr>
            <td bgcolor="#006699">
                <div align="center">
                    <font color="#FFFFFF" size='-2'>DEPs Gráficas</font>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div align="center">
                    <table width="90%" border="0">
                        <tbody>
                            <tr>
                                <td>
                                    <img src="modulo/consulta_priv/dep_mgte.php?C_D3P=0.5&amp;C_DSTAY=47&amp;C_DPE365=76&amp;C_MP120=17&amp;C_DP210=13&amp;C_DP450=20&amp;C_DAOL=4&amp;C_DACAB=31&amp;C_MGTe=15" width="355" height="222">
                                </td>
                                <td><img src="modulo/consulta_ag/images/medalhas.jpg"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </td>
        </tr>
    </tbody>
</table>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
<div class="row justify-content-b">
    <div class="col-10">
    </div>
    <div class="col-2">
        <a href="consulta-de-touros"> <button type="submit" class="btn btn-primary btn-sm">Nova Consulta</button></a>
    </div>
</div>