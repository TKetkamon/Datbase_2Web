<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lesson 1</title>
  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <div class="container p-5 my-5 bg-dark text-white">
    <h1>Database show data on Web : Lesson 1</h1>
    <p>6401102053105 MS.Ketkamon Phromplaikaew</p>
  </div>

  <?php
  require "connect.php";
  $query = "SELECT
               tb_section.*
            FROM
               tb_section
            ORDER BY
               tb_section.SECT_ID DESC";
  $statement = $pdo->prepare($query);
  $statement->execute();
  $results = $statement->fetchAll(PDO::FETCH_ASSOC);

  ?>

  <div class="container mt-3">
    <h2>Section Data</h2>
    <p>แสดงข้อมูลทั้งหมดโดยเรียงจาก SECT_ID จากมากไปหาน้อย</p>

    <div class="btn-group my-2">
      <a href="http://localhost/datbase_2web/" class="btn btn-outline-dark">กลับไปยังหน้าหลัก</a>
      <a href="http://localhost/datbase_2web/lesson2.php/index.php" class="btn btn-outline-dark">Lesson 2 : แสดงข้อมูลเฉพาะ SECT_TELEPHONE และ SECT_NAME
        โดยเรียงจาก SECT_NAME จาก A-Z</a>
      <a href="http://localhost/datbase_2web/lesson3.php/index.php" class="btn btn-outline-dark">Lesson 3 : แสดงข้อมูลทั้งหมด โดยเลือกเฉพาะที่ SECT_TELEPHONE
        มีเลข 12 และเรียงข้อมูลจาก SECT_NAME จาก Z-A</a> 
    </div>

    <br><br>
    
    <table class="table">
      <thead class="table-dark">
        <tr>
          <th>SECT_ID</th>
          <th>SECT_NAME</th>
          <th>SECT_BUILDING_NAME</th>
          <th>SECT_TELEPHONE</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($results as $row) { ?>
          <tr>
            <td>
              <?php echo $row['SECT_ID']; ?>
            </td>
            <td>
              <?php echo $row['SECT_NAME']; ?>
            </td>
            <td>
              <?php echo $row['SECT_BUILDING_NAME']; ?>
            </td>
            <td>
              <?php echo $row['SECT_TELEPHONE']; ?>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>

  </div>
</body>

</html>