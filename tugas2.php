<?php
$jurusan = [
  [
    "nama" => "RPL",
    "siswa" => [
      ["nama" => "satria", "umur" => "18 tahun","nilai_uas" => 70],
      ["nama" => "fattah", "umur" => "19 tahun","nilai_uas" => 75],
    ],
  ],

  [
    "nama" => "TKJ",
    "siswa" => [
        ["nama" => "shakira", "umur" => "17 tahun","nilai_uas" => 80],
        ["nama" => "marsina", "umur" => "20 tahun","nilai_uas" => 85],
    ],
  ],

  [
    "nama" => "TKR",
    "siswa" => [
        ["nama" => "Raden", "umur" => "16 tahun","nilai_uas" => 60],
        ["nama" => "Fariz", "umur" => "20 tahun","nilai_uas" => 95],
    ]
  ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>
<body>

  <div class="container my-5">
    <h1>Data Siswa</h1>
    <?php foreach($jurusan as $jurusan) { ?>
      <h1><?php echo $jurusan['nama']; ?></h1>
    <table class="table">
      <thead>
        <tr class="<?php echo 'table-secondary'?>">
          <th scope="col">Nama</th>
          <th scope="col">Umur</th>
          <th scope="col">Nilai uas</th>
          <th scope="col">Keterangan</th>
          <th scope="col">Nilai dalam huruf</th>
        </tr>
      </thead>

      <tbody>
      <?php foreach($jurusan["siswa"] as $siswa) { ?>
        <?php if($siswa['nilai_uas'] >= 75){
          echo "<tr class='table-success'>";
        }else{
          echo "<tr class='table-danger'>";
        }
         ?>
          <td ><?=$siswa['nama'];?></td>
          <td><?=$siswa['umur'];?></td>
          <td><?=$siswa['nilai_uas'];?></td>
          <?php if($siswa['nilai_uas'] >= 75) { ?>
            <td style="<?php echo 'background-color : green'?>">lulus</td>
            <?php }else{ ?>
              <td style="<?php echo 'background-color : red'?>">remedial</td>
            <?php } ?>

          <?php if($siswa['nilai_uas'] >= 90) { ?>
            <td style="<?php echo 'background-color : red'?>">A</td>
            <?php }elseif($siswa['nilai_uas'] >= 80 && $siswa['nilai_uas'] <= 90 ){ ?>
              <td style="<?php echo 'background-color : orange'?>">B</td>
            <?php }elseif($siswa['nilai_uas'] <= 75) { ?>
              <td style="<?php echo 'background-color : gray'?>">C</td>
            <?php } ?>
           
        </tr>
        <?php } ?>
      </tbody>
    </table>
    <?php }; ?>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>