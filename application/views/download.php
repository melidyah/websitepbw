<!DOCTYPE html>
<html>
<table style="width:100%">
<tr>
  <th>Nama</th>
  <th>Komentar</th>
  <th>Waktu</th>
</tr>
<?php
foreach ($data as $data) {
              		echo '

              		<tr>
              			<td>'.$data['name'].'</td>
              			<td>'.$data['comment'].'</td>
              			<td>'.$data['date'].'</td>
              		</tr>
              		';
              	}

    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=hasil-export.xls");
?>
</table>
</html>
