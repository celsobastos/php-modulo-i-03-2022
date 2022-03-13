<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
    <style>
        table {
            width: 70%;
        }
        table td, table tr {
            border: 1px solid #000;
            padding: 0;
            margin: 0;
        }
    </style>
</head>
<body>
    <form action="salva.php" method="POST">

        Produto: <select name="produto" id="">
            <option value="1">Camiseta</option>
            <option value="2">Calça</option>
            <option value="3">Bermuda</option>
            <option value="4">Jaqueta</option>
        </select>
        <button>Adicionar no carrinho</button>
        <table>
            <tr>
                <th>Codigo</td>
                <th>Produto</td>
                <th>preco</td>
            </tr>
        <?php
        $file = 'carrinho.txt';
        $recupera_carrinho = file_get_contents("./$file", true);
        $carrinho = (array) json_decode($recupera_carrinho);
        $linha = '';
        foreach ($carrinho as $keylist => $produto) {
            $linha .= '<tr>';
            $linha .= '<td>' . $produto->id . '</td>';
            $linha .= '<td>' . $produto->produto . '</td>';
            $linha .= '<td>' . $produto->preco . '</td>';
            $linha .= '</tr>';
        }
        echo $linha;
        ?>
        </table>
    </form>
</body>
</html>