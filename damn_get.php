<html>
<head>
    <title> Get man get </title>
</head>
<body>

<table>
<?php foreach($_GET as $k => $v): ?>
    <tr>
        <td class="Key"> <?= $k  ?></td>
        <td class="value"> <?=  $v ?></td>
    </tr>
<?php endforeach ; ?>
</table>
</body>

</html>
