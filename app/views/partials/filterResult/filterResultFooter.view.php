<table border="0" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
    <tbody>
        <tr>
            <td colspan="2" align="center" style="font-size: 12px">Total de Animais Selecionados:
                <?php
                echo htmlspecialchars($countResultsFinal);
                ?>
            </td>
        </tr>
        <tr>
            <td width="250" align="center">
                <div class="row mt-1">
                    <?php
                    if ($success) {
                        echo
                        '<div class="col-2 m-0"  onclick="">
                            <a href="#" id="first-page" onclick=""><i class="fas fa-angle-double-left"></i></a>
                        </div>
                        <div class="col-2 px-0" onclick="">
                            <a href="#" id="previous-page" onclick=""><i class="fas fa-angle-left"></i></a>
                        </div>';
                    }
                    ?>
                    <div class="col-4 px-0" id="pagina" align="center" style="font-size: 12px">
                        <label for="page">Pag. </label>
                        <?php
                        if ($success) {
                            echo htmlspecialchars($currentPage) . ' / ' .  htmlspecialchars($numberPages);
                        } else {
                            echo '0 / 0';
                        }
                        ?>
                    </div>
                    <?php
                    if ($success) {
                        echo
                        '<div class="col-2 px-0" onclick="">
                            <a href="#" onclick="" id="next-page"><i class="fas fa-angle-right"></i></a>
                        </div>
                        <div class="col-2 px-0"  onclick="">
                            <a href="#" onclick="" id="last-page"><i class="fas fa-angle-double-right"></i></a>
                        </div>';
                    }
                    ?>

                </div>
            </td>
            <!-- <td width="417">
                <font size="1" face="Verdana, Arial, Helvetica, sans-serif"><font color="#164650"> <strong>Ir para&nbsp;</strong></font>
                </font>
                <font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                    <font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                        <input name="ir_para" id="id_ir_para" type="text" size="3" style="border: 1px solid #164650; font-family:verdana; font-size:10px; color: #0081d7;" spellcheck="false" data-ms-editor="true">
                    </font> <span onclick="ir('id_ir_para');"> <img src="modulo/prec_teste/images/seta.gif" alt="Ir Para" width="12" style="vertical-align:middle; cursor:pointer" height="18"></span>
                </font>
            </td> -->
        </tr>
    </tbody>
</table>

