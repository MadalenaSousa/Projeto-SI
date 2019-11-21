<?php
$str = "dbname=postgres user=postgres password=postgres host=localhost port=5432";
$connection = pg_connect($str);

if (!$connection) {
    die("Erro na ligacao");
}
echo "Ligacao estabelecida!";

$resultados = pg_query($connection, "select * from account_user") or die;
$resultados = pg_fetch_all($resultados);

foreach($resultados as $linha)
{
    print $linha['nome'] . "<br />";
}

pg_close($connection);
?>