<?php

$carros = [
    [
        "id" => 1,
        "modelo" => "Chevrolet Equinox",
        "marca" => "Chevrolet",
        "ano" => 2022,
        "preco_diaria" => 230.00,
        "disponivel" => true,
        "imagem" => "https://garagem360.com.br/wp-content/uploads/2023/08/Equinox.jpg"
    ],
    [
        "id" => 2,
        "modelo" => "Chevrolet S10",
        "marca" => "Chevrolet",
        "ano" => 2021,
        "preco_diaria" => 250.00,
        "disponivel" => false,
        "imagem" => "https://i0.statig.com.br/bancodeimagens/13/7l/go/137lgoyi5y7ux9j26tgi2o1f7.jpg"
    ],
    [
        "id" => 3,
        "modelo" => "Chevrolet Onix",
        "marca" => "Chevrolet",
        "ano" => 2023,
        "preco_diaria" => 120.00,
        "disponivel" => true,
        "imagem" => "https://t.ctcdn.com.br/ttMiIkufJ9iruWRsKnvSbCajM6k=/1200x675/smart/i624421.jpeg"
    ],
    [
        "id" => 4,
        "modelo" => "Tracker",
        "marca" => "Chevrolet",
        "ano" => 2020,
        "preco_diaria" => 180.00,
        "disponivel" => true,
        "imagem" => "https://fotos-jornaldocarro-estadao.nyc3.cdn.digitaloceanspaces.com/uploads/2019/01/16132438/tracker-novo-1160x773.jpg"
    ],
    [
        "id" => 5,
        "modelo" => "Chevrolet Cruze",
        "marca" => "Chevrolet",
        "ano" => 2019,
        "preco_diaria" => 200.00,
        "disponivel" => true,
        "imagem" => "https://www.comprecar.com.br/storage/news/featured/7gvW7Ei7vXEU_zj.jpg"
    ],
    [
        "id" => 6,
        "modelo" => "Chevrolet Spin",
        "marca" => "Chevrolet",
        "ano" => 2021,
        "preco_diaria" => 150.00,
        "disponivel" => true,
        "imagem" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTUBXWawsmrP6Yw6EdN_0RZn1Z1SDuuEK749g&s"
    ]
];

foreach ($carros as $carro) {
    echo "<div style='border: 1px solid #ccc; padding: 10px; margin: 10px;'>";
    echo "<h2>{$carro['modelo']} ({$carro['ano']})</h2>";
    echo "<p><strong>Marca:</strong> {$carro['marca']}</p>";
    echo "<p><strong>Preço da diária:</strong> R$ " . number_format($carro['preco_diaria'], 2, ',', '.') . "</p>";
    echo "<p><strong>Disponível:</strong> " . ($carro['disponivel'] ? "Sim" : "Não") . "</p>";
    echo "<img src='{$carro['imagem']}' alt='{$carro['modelo']}' width='300'>";
    echo "</div>";
}

?>
