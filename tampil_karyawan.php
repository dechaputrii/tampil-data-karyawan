<h2>Data Karyawan</h2>
<table border="1">
    <tr>
	<th>NO</th>
	<th>NAME</th>
	<th>TITLE</th>
	<th>SALARY</th>
    <?php
    include 'koneksi.php';
    $karyawan = mysqli_query($koneksi, "SELECT * from employee");
    $no=1;
    foreach ($karyawan as $row){
        echo "<tr>
           
	    <td>".$row['id_employee']."</td>
            <td>".$row['name_employee']."</td>
	    <td>".$row['title']."</td>
            <td>".$row['salary']."</td>
              </tr>";
        $no++;
    }
    ?>
</table>