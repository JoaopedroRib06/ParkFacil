<?php
    $horas = $_POST['horas']
    $veiculos = $_POST['veiculo']
    if (isset($_POST['lavagem'])) {
        $lavagem = "sim";
    }else{
        $lavagem = "não";
    }
    if ($veiculos=="0") {
        $primeira=10;
        $segunda=6;
    }else{
        $primeira=6;
        $adicional=3;
    }
    $total=$primeira;
    for ($h=2; $h <= $horas ; $h++) { 
        $total=$total + $adicional;
    }
    if ($total > 50) {
        $total = 50;
    }
    if ($lavagem=="sim") {
        $total += 20;
    }
    echo "total à pagar: R$"$total;
?>
