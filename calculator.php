<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Calculator</title>
  </head>
  <body>
    <div class="mt-4 p-5 bg-primary text-white rounded">
        <center><h1>Calculator</h1></center>
        <hr>
        <p>
            <form>
                <div class="mb-3 mt-3">
                  <label for="num1" class="form-label">First Number:</label>
                  <input type="text" class="form-control" name="num1" placeholder="Enter First Number" name="num1">
                </div>
                <div class="mb-3">
                  <label for="num2" class="form-label">Second Number:</label>
                  <input type="text" class="form-control" name="num2" placeholder="Enter Second Number" name="num2">
                </div>
                <div>
                    <select name="operator">
                        <option >None</option>
                        <option >Add</option>
                        <option>Subtract</option>
                        <option>Multiply</option>
                        <option>Divide</option>
                      </select>
                </div>
                
                <button type="submit" name ="submit" value ="submit"class="btn btn-primary">Calculate</button>
              </form>
        </p>
      </div>
      <p>The answer is:</p>
    <?php
     if(isset($_GET['submit'])){

      $result1= $_GET['num1'];
      $result2= $_GET['num2'];
      $operator= $_GET['operator'];
      switch($operator){
        case "None":
          echo"Kindly select a method";
          break;

          case "Add":
            echo $result1 + $result2;
            break;

            case "Subtract":
              echo $result1 - $result2;
              break;

              case "Multiply":
                echo $result1 * $result2;
                break;

                case "Divide":
                  echo $result1 / $result2;
                  


      }
     }
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>