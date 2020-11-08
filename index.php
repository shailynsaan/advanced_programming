<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style media="screen">

    h1{
       position: relative; left:60px; top:270px;
     }
      #calc{
        position: relative; right: -540px; top: 125px;
      }
      #gcd{
        position: relative; left: 840px; top: -150px;
    }
    </style>
    <title>assign_one</title>
  </head>


  <body>

    <h1>Shilyn Joyce P. Sa-an</h1>

      <form class="" method="post" id="calc">
        <h2>Calculator</h2><br>
        Input First Number: <br> <br>
        <input type="number" name="x"> <br><br>
        Input Second Number <br> <br>
        <input type="number" name="y"> <br> <br>
        <input type="submit" name="add" value="+">
        <input type="submit" name="minus" value="-">
        <input type="submit" name="mult" value="*">
        <input type="submit" name="div" value="/"><br> <br>
        <!-- <textarea name="name" rows="1" cols="20"> -->


          <?php
            if(isset($_POST['add'])){
              $x = $_POST ['x'];
              $y = $_POST ['y'];
              $add = $x + $y;
              echo $add;
            }

            if(isset($_POST['minus'])){
              $x = $_POST ['x'];
              $y = $_POST ['y'];
              $minus = $x - $y;
              echo $minus;
            }

            if(isset($_POST['mult'])){
              $x = $_POST ['x'];
              $y = $_POST ['y'];
              $mult = $x * $y;
              echo $mult;
            }

            if(isset($_POST['div'])){
              $x = $_POST ['x'];
              $y = $_POST ['y'];
              $div = $x / $y;
              echo $div;
            }
           ?>

        </textarea>
      </form>

      <form class="form" method="post" id="gcd">
    <h2>Finding GCD</h2><br>
    Input first number:<br><br>
    <input type="number" name="number1"><br><br>
    Input second number:<br><br>
    <input type="number" name="number2"><br><br>
    <input type="submit" name="gcd" value="Submit"><br><br>
    <!-- <textarea name="name" rows="1" cols="20" readonly="readonly"> -->
      <?php
        if (isset($_POST['gcd'])) {
          $number1 = $_POST['number1'];
          $number2 = $_POST['number2'];
          $gcd = $_POST['gcd'];
          if ($number1 > $number2) {
            $temp = $number1;
            $number1 = $number2;
            $number2 = $temp;
          }
          for($i = 1; $i < ($number1+1); $i++ ){
            if ($number1%$i == 0 and $number2%$i == 0)
            $gcd = $i;
          }
          echo $gcd;
        }
       ?>
    </textarea>
  </form>


      </form>



      </form>

  </body>
</html>
