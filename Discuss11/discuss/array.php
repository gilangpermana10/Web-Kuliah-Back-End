<?php
$bike = ['yamaha', 'honda', 'suzuki', 'ducati'];

printf($bika);

$len = count($bike);

for(int $i=0; $i<=$len; $i++){
    printf($bike[$i]).PHP_EOL;
}


$mahasiswa = [
    "nama" => "gilang",
    "kelas" => "12",
    "jurusan" => "rpl"
];

foreach ($mahasiswa as $key => $value) {
    printf($key." : ".$value).PHP_EOL;
}


?>