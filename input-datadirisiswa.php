<?php 
      include('./input-config.php');
      echo "<a href='input-datadiri-tambah.php'>Tambah Data</a>";
      echo "<hr>";
      // READ - Menampilkan data dari database
      $no = 1;
      $tabledata = "";
      $data = mysqli_query($mysqli, " SELECT * FROM datadiri ");
      while($row = mysqli_fetch_array($data)){
            $tabledata .= "
                  <tr>
                        <td>".$row["nis"]."</td>
                        <td>".$row["namalengkap"]."</td>
                        <td>".$row["kelas"]."</td>
                        <td>".$row["kehadiran"]."</td>
                        <td>".$row["tugas"]."</td>
                        <td>".$row["uts"]."</td>
                        <td>".$row["uas"]."</td>
                              <a href='input-datadiri-edit.php?nis=".$row["nis"]."'>Edit</a>
                              &nbsp;-&nbsp;
                              <a href='input-datadiri-hapus.php?nis=".$row["nis"]."' 
                              onclick='return confirm(\"Yakin Dek ?\");'>Hapus</a>
                        </td>
                  </tr>
            ";
            $no++;
      }

      echo "
            <table cellpadding=5 border=1 cellspacing=0>
                  <tr>
                        <th>NIS</th>
                        <th>Nama Lengkap</th>
                        <th>Tanggal Lahir</th>
                        <th>Nilai</th>
                        <th>Aksi</th>
                  </tr>
                  $tabledata
            </table>
      ";
?>