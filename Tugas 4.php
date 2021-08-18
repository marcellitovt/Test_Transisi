<?php
    // Buatlah sebuah fungsi dalam PHP, yang apabila dipanggil akan menampilkan tabel
    
      // Function untuk membuat pola
      // Pettern : 
      // 2 black - 2 white - 1 black - 1 white - 1 black - 2 white - 2 black - 1 white 
   
      function pattern($input){
        $color['black']  = [1,2,5,7,10,11];
        $color['white'] = [3,4,6,8,9,12];

        if (in_array($input, $color['black'])) {
          return 'style="background : black; color: white;"';
        } else {
          return 'style="background : white"';
        }
      } 

        $number = 1;
        $v = 1;
        echo "<table>";
        for($i = 0; $i < 8; $i++){
        echo '<tr>';

          // Print angka dan pola
          for($x = 0; $x < 8; $x++){
            echo '<td '.pattern($v).'>';
            echo $number++;
            echo '</td>';

            // Reset pola setelah 12 kali
            if ($v==12) {
              $v = 1;
            } else {
              $v++;
            }
          }
        echo '</tr>';
        }
        echo "</table>";

    ?>
    <!-- Buka dengan web server untuk menampilkan tabel -->
    


