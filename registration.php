<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        .width{
            width: 50%;
        }
    </style>
</head>
<body>

<div class="container width">
    <h2></h2>
<!--    <div class="col-md-3"></div>-->
<!--    <div class="col-md-6">-->
        <form class="form-horizontal" action="register.php" method="post" enctype="multipart/form-data">
            <div class="form-group ">
                <label for="name">Enter your name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
            </div>
            <div class="form-group">
                <label for="email" >Enter your email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>


            <div class="form-group">
                <label for="password" >Enter your password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
            </div>

            <div class="form-group">
                <label for="address" >Enter your Address:</label>
                <input type="text" class="form-control address" id="address" placeholder="Enter address" name="address">
            </div>

            <div class="form-group">
                <label for="mobile" >Enter your mobile:</label>
                <input type="text" class="form-control" id="mobile" placeholder="Enter address" name="mobile">
            </div>

            <div class="form-group">
               <table>
                   <tr>
                       <td><label for="optradio">Select your gender : </label></td>
                       <td> <label class="radio-inline">
                    <input type="radio" name="optradio" value="male"> Male
                </label>
                  </td>
                  <td>
                <label class="radio-inline">
                     <input type="radio" name="optradio" value="female">Female
                </label> 
                  </td>
                   </tr>
               </table>
                
               
                
            </div>

            <div class="form-group">
               <table>
                   <tr>
                       <td><label for="hobby" >Choose your hobbies:</label></td>
                       <td>
                           <div class="checkbox-inline">
                    <label><input type="checkbox" name="hobby[]" value="Cricket">Cricket1</label>
                </div>
                <div class="checkbox-inline">
                    <label><input type="checkbox" name="hobby[]"  value="Singing">Singing</label>
                </div>
                <div class="checkbox-inline">
                    <label><input type="checkbox" name="hobby[]" value="Dancing" >Dancing</label>
                </div>
                       </td>
                   </tr>
               </table>
                
                
            </div>

            <div class="form-group">
               <table>
                   <tr>
                       <td> <label for="mobile" >Choose your profile pic:</label></td>
                       <td> <input type="file" class="form-control" id="image"  name="image"></td>
                   </tr>
               </table>
               
               
            </div>

            <div class="form-group">
                <label for="" >Choose your Date of birth:</label>
               <table>
                   <tr>
                       <td><select class="form-control" id="date" name="day">
                    <option >Day</option>
                    <?php
                        for($i=1;$i<30;$i++){
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>
                  </td>
                      
                  <td>
                       <select class="form-control" id="month" name="month">
                    <option >Month</option>
                    <?php
                    for($i=1;$i<12;$i++){
                        echo "<option value='$i'>$i</option>";
                    }
                    ?>
                </select>
                  </td>
                  
                  <td>
                    <select class="form-control" id="year" name="year">
                    <option >Year</option>";
                    <option value='2000'>2000</option>
                    <option value='2001'>2001</option>
                    <option value='2002'>2002</option>
                    <option value='2003'>2003</option>
                    <option value='2004'>2004</option>
                    <option value='2005'>2005</option>
                    <option value='2006'>2006</option>
                    <option value='2007'>2007</option>
                    <option value='2008'>2008</option>
                    <option value='2009'>2009</option>
                    <option value='2010'>2010</option>
                    <option value='2011'>2011</option>
                    <option value='2012'>2012</option>
                    <option value='2013'>2013</option>
                    <option value='2014'>2014</option>
                    <option value='2015'>2015</option>
                    <option value='2016'>2016</option>
                    <option value='2017'>2017</option>
                </select>
                      
                  </td>
                   </tr>
               </table>
                
            </div>

            <div class="form-group pull-right ">
                <button type="submit" class="btn btn-success" name="register">Register me</button>
                <button type="submit"  class="btn btn-danger" name="Reset">Reset</button>
            </div>
        </form>
<!--    </div>-->

</div>

</body>
</html>