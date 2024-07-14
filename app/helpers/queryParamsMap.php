<?php

$depsMap = require HELPERS_PATH . 'depsMap.php';

return [
    /** Filter 1 */
    'raca' => [
        '1' => 'Nelore',
        '2' => 'Guzerá',
        '3' => 'Brahman',
        '4' => 'Tabapuã',
        '5' => 'Nelore CL'
    ],
    'central' => [
        '-1' => 'Todas as Centrais',
        '1' => 'ABS',
        '2' => 'Alta Genetics',
        '3' => 'Jacarezinho Genetics',
        '4' => 'Jóia da Índia',
        '5' => 'CRV',
        '6' => 'Cebran',
        '7' => 'Sembra',
        '8' => 'Semex',
        '9' => 'Sersia Brasil',
        '10' => 'VR',
        '11' => 'Bela Vista',
        '12' => 'Nova Índia',
        '13' => 'MSGEN',
        '14' => 'Genex Brasil',
        '15' => 'Araucária Genética Bovina',
        '16' => 'Tairana',
        '17' => 'Axelgen Inseminação Artificial',
        '18' => 'J.D. Hudgins ',
        '19' => 'Yakult',
        '20' => 'Multigenes - Bolívia',
        '21' => 'Naviraí',
        '22' => 'Berrante',
        '23' => 'Maya Genética',
        '24' => 'CSA Genética Bovina LTDA',
        '25' => 'Seleon Biotecnologia',
        '26' => 'Top Bulls Semen Technology',
        '27' => 'Frutab S/A',
        '28' => 'Select Sires do Brasil',
        '29' => 'Premium Gen - Pecuária Sustentável',
        '30' => 'Central Uberaba',
        '31' => 'AG Brasil'
    ],
    'rp' => [
        '-1' => 'Todas as Reproduções Programadas',
        '2024' => 'Participante em: 2024',
        '2023' => 'Participante em: 2023',
        '2022' => 'Participante em: 2022',
        '2021' => 'Participante em: 2021',
        '2020' => 'Participante em: 2020',
        '2019' => 'Participante em: 2019',
        '2018' => 'Participante em: 2018',
        '2017' => 'Participante em: 2017',
        '2016' => 'Participante em: 2016',
        '2015' => 'Participante em: 2015',
        '2014' => 'Participante em: 2014',
        '2013' => 'Participante em: 2013'
    ],
    /** Filter 3 */
    'categoria' => [
        '1' => 'CL',
        '2' => 'LA',
        '3' => 'PA',
        '4' => 'PC',
        '5' => 'PO',
        '6' => 'PI'
    ],
    'variedade' => [
        'P' => 'Padrão',
        'M' => 'Mocho'
    ],
    'situacao' => [
        'A' => 'Ativo',
        'I' => 'Inativo'
    ],

    /** Filter 5 */

    /** Filter 6 */

    /** Filter 7 */
    'classification' => [
        '0' => 'id',
        '1' => 'nome',
        '2' => 'sexo',
        '3' => 'variedade',
        '4' => 'categoria',
        '5' => 'dt_nasc',
        '6' => 'pai_nome',
        '7' => 'mae_nome',
        '8' => $depsMap['mp120']['1'],
        '9' => $depsMap['mp210']['1'],
        '10' => $depsMap['dp120']['1'],
        '11' => $depsMap['dp210']['1'],
        '12' => $depsMap['dp365']['1'],
        '13' => $depsMap['dp450']['1'],
        '14' => $depsMap['dpe365']['1'],    
        '15' => $depsMap['dpe450']['1'],
        '16' => $depsMap['dipp']['1'],
        '17' => $depsMap['dpg']['1'],
        '18' => $depsMap['dpav']['1'],
        '19' => $depsMap['dpac']['1'],
        '20' => $depsMap['daol']['1'],
        '21' => $depsMap['dstay']['1'],
        '22' => $depsMap['d3p']['1'],
        '23' => $depsMap['mgt']['1'],
        '24' => $depsMap['dpn']['1'],
        '25' => $depsMap['ded']['1'],
        '26' => $depsMap['dpd']['1'],
        '27' => $depsMap['dmd']['1'],
        '28' => $depsMap['des']['1'],
        '29' => $depsMap['dps']['1'],
        '30' => $depsMap['dms']['1'],
        '31' => $depsMap['dalt']['1'],
        '32' => $depsMap['dacab']['1'],
        '33' => $depsMap['mtp120']['1'],
        '34' => $depsMap['mtp210']['1'],
        '35' => $depsMap['dmar']['1'],
        '36' => $depsMap['dpcq']['1'],
        '37' => $depsMap['dppc']['1'],
        '38' => $depsMap['dmac']['1'],
        '39' => $depsMap['dcar']['1'],
        '40' => $depsMap['dims']['1'],
        '41' => $depsMap['dipm']['1'],
        '42' => $depsMap['dframe']['1'],
        '43' => $depsMap['mgte_cr']['1'],
        '44' => $depsMap['mgte_re']['1'],
        '45' => $depsMap['mgte_co']['1'],
        '46' => $depsMap['mgte_f1']['1'],
    ],
];

