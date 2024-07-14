<tr class="result-table-hd  me-1">
    <td bgcolor="#FFFFFF">
        <div align="center">
            <font color="#000000" size="-2">
                <?php echo htmlspecialchars($currentIndex); ?> </font>
            <font size="-2">&nbsp;</font>
        </div>
    </td>
    <td bgcolor="#FFFFFF">
        <div align="left">
            <font color="#000000" size="-2"> <a href="#" onclick="ficha_animal(2416390,1);">
                    <?php echo htmlspecialchars($animal['nome'] ?? 'nome não localizado'); ?> </a> </font>
        </div>
    </td>
    <td bgcolor="#FFFFFF" height="21">
        <div align="center">
            <font color="#000000" size="-2">
                <?php echo htmlspecialchars($animal['serie'] ?? ''); ?> </font>
        </div>
    </td>
    <td bgcolor="#FFFFFF" height="21">
        <div align="center">
            <font color="#000000" size="-2">
                <?php echo htmlspecialchars($animal['rgn'] ?? ''); ?> </font>
        </div>
    </td>
    <td bgcolor="#FFFFFF" height="21">
        <div align="center">
            <font color="#000000" size="-2">
                <?php echo htmlspecialchars($animal['rgd'] ?? ''); ?> </font>
        </div>
    </td>
    <td bgcolor="#FFFFFF">
        <div align="center">
            <font color="#000000" size="-2">
                <?php
                echo htmlspecialchars($dt_nasc ?? '');
                ?> </font>
        </div>
    </td>
    <td bgcolor="#FFFFFF">
        <div align="center">
            <font color="#000000" size="-2">
                <?php echo htmlspecialchars($animal['mgte'] ?? ''); ?> </font>
        </div>
    </td>
    <td bgcolor="#FFFFFF">
        <div align="center">
            <font color="#000000" size="-2">
                <?php echo htmlspecialchars($top ?? ''); ?> </font>
        </div>
    </td>
    <td bgcolor="#FFFFFF">
        <div align="center">
            <font color="#000000" size="-2">
                M </font>
        </div>
    </td>
    <td bgcolor="#FFFFFF">
        <div align="center">
            <font color="#000000" size="-2">
                <?php echo htmlspecialchars($animal['raca'] ?? ''); ?> </font>
        </div>
    </td>
    <td bgcolor="#FFFFFF">
        <div align="center">
            <font color="#000000" size="-2">
                <?php echo htmlspecialchars($animal['categoria'] ?? ''); ?> </font>
        </div>
    </td>
    <td bgcolor="#FFFFFF">
        <div align="center">
            <font color="#000000" size="-2">&nbsp;
                <?php echo htmlspecialchars($variedade ?? ''); ?> </font>
        </div>
    </td>
    <td bgcolor="#FFFFFF">
        <div align="center">
            <font color="#000000" size="-2">&nbsp;</font>
            <font color="#000000" size="1" face="Arial, Helvetica, sans-serif">
                <?php echo htmlspecialchars($animal['nf120'] ?? ''); ?> </font>
        </div>
    </td>
    <td bgcolor="#FFFFFF">
        <div align="center">
            <font color="#000000" size="-2">&nbsp;</font>
            <font color="#000000" size="1" face="Arial, Helvetica, sans-serif">
                <?php echo htmlspecialchars($animal['nr120'] ?? ''); ?> </font>
        </div>
    </td>
    <td bgcolor="#FFFFFF">
        <div align="center">
            <font color="#000000" size="-2">&nbsp;</font>
            <font color="#000000" size="1" face="Arial, Helvetica, sans-serif">
                <?php echo htmlspecialchars($animal['nf450'] ?? ''); ?> </font>
        </div>
    </td>
    <td bgcolor="#FFFFFF">
        <div align="center">
            <font color="#000000" size="-2">&nbsp;</font>
            <font color="#000000" size="1" face="Arial, Helvetica, sans-serif">
                <?php echo htmlspecialchars($animal['nr450'] ?? ''); ?> </font>
        </div>
    </td>
</tr>