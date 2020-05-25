<?php 
// CSV Movie
$filename="movies/movies.csv";

// 1) read the csv file in $data array 
$handle = fopen($filename, 'r');

$result = [];
while(!feof($handle)) {     
   $result[] = (fgetcsv($handle, 1000, ",")); // ";" csv file delimiter ( by default ",")
}

// 2) Remove first item from array
array_shift($result);
// 3) Check For form $_POST variables

// 4) craete empty $result array

// 5) Loop throught $data array with foreach and: 
//    - create an $studios array with Movie Companies (Lead Studio in the list) name from $data array
//    - create an array of movie Genre
//    - create an array of movie Year
//    - filter $data array according Selects from POST and put filtered items in empty $result array
$studios = [];
$movieGenre = [];
$movieYear = [];
$filterRezult = $result;

foreach($result as $key) {
        if(!in_array($key[2],$studios)) {
            array_push($studios,$key[2]);
        }
        if(!in_array($key[1],$movieGenre)) {
            array_push($movieGenre,$key[1]);
        }
        if(!in_array($key[7],$movieYear)) {
            array_push($movieYear,$key[7]);
        }
}

if(isset($_POST['submit'])) {    
    $filterRezult = []; 
    foreach($result as $key) {      
        if(isset($_POST['genre']) && !empty($_POST['genre'])) {
            
            $selectedGenre = $_POST['genre'];        
            $genre = $key[1];

            if($selectedGenre == $genre){        
                $filterRezult[] = $key;   
            }        
        }
        
        if(isset($_POST["studio"]) && !empty($_POST["studio"])) {
        
            $selectedStudio = $_POST["studio"];        
            $studio = $key[2];
              
            if($selectedStudio == $studio){        
                $filterRezult[] = $key;
                 
            }        
        }

        if(isset($_POST['years']) && !empty($_POST['years'])) {
    
            $selectedYear = $_POST['years'];        
            $year = $key[7];
    
            if($selectedYear == $year){        
                $filterRezult[] = $key;        
            }
        }
        
    }
    if (empty($filterRezult)) {
        $filterRezult = $result;
    }
    
}

sort($studios);  
sort($movieGenre);  
sort($movieYear); 

// 6) Output $result array in HTML table below : 
//    - when you first load the page output all data from movies.csv file
//    - if you select dropdowns in filter form, movies should be filtered based on selection by genre, studio or year

// Check your result
fclose($handle);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Movie FIlter</h1>
        <form class="form-inline" method="POST">
            <label class="my-1 mr-2" >Genre: </label>
            <select class="custom-select my-1 mr-sm-2" name="genre">
                <option selected>Choose...</option>
                <!-- List Companies from CSV File here -->
                <?php if(isset($movieGenre)):?>
                    <!--  -->
                    <?php foreach($movieGenre as $name):?>
                        <option value=<?php echo $name;?> > <?php echo $name;?> </option>
                    <?php endforeach;?>
                <?php endif;?>
            </select>
            <label class="my-1 mr-2" >Company Production: </label>
            <select class="custom-select my-1 mr-sm-2" name="studio">
                <option selected>Choose...</option>
                <!-- List Companies from CSV File here -->
                <?php if(isset($studios)):?>
                    <!--  -->
                    <?php foreach($studios as $name):?>
                        <option value=<?php echo "\"".$name."\"";?> > <?php echo $name;?> </option>
                    <?php endforeach;?>
                <?php endif;?>
            </select>
            <label class="my-1 mr-2" >Years: </label>
            <select class="custom-select my-1 mr-sm-2" name="years">
                <option selected>Choose...</option>
                <!-- List Years from CSV file here -->
                <?php if(isset($movieYear)):?>
                    <!--  -->
                    <?php foreach($movieYear as $name):?>
                        <option value=<?php echo $name;?> > <?php echo $name;?> </option>
                    <?php endforeach;?>
                <?php endif;?>
            </select>
            <button type="submit" class="btn btn-primary my-1" name="submit">Submit</button>
        </form>
 
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Film</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Lead Studio</th>
                    <th scope="col">Year</th>
                </tr>
            </thead>
            <tbody>
                <!-- Write Your Foreach here! -->
                <?php foreach($filterRezult as $line):?>
                    <tr>
                        <td><?php echo $line[0]?></td>
                        <td><?php echo $line[1]?></td>
                        <td><?php echo $line[2]?></td>
                        <td><?php echo $line[7]?></td>
                    </tr>
                <?php endforeach;?>
 
            </tbody>
        </table>
    </div>
</body>

</html>