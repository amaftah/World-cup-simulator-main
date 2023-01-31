<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>World Cup Simulator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>


    
    <?php 
        $croatiaPoints = $moroccoPoints = $belgiumPoints = $canadaPoints = 0;

        $morroccoFirstMatchScore = $_POST["morocco1"] ?? 0;
        $morroccoSecondMatchScore = $_POST["morocco2"] ?? 0;
        $morroccoThirdMatchScore = $_POST["morocco3"] ?? 0;


        $croatiaFirstMatchScore = $_POST["croatia1"] ?? 0;
        $croatiaSecondMatchScore = $_POST["croatia2"] ?? 0;
        $croatiaThirdMatchScore = $_POST["croatia3"] ?? 0;

        $belgiumFirstMatchScore = $_POST["belgium1"] ?? 0;
        $belgiumSecondMatchScore = $_POST["belgium2"] ?? 0;
        $belgiumThirdMatchScore = $_POST["belgium3"] ?? 0;

        $canadaFirstMatchScore = $_POST["canada1"] ?? 0;
        $canadaSecondMatchScore = $_POST["canada2"] ?? 0;
        $canadaThirdMatchScore = $_POST["canada3"] ?? 0;

        $moroccoFlag = "./images/morocco.png";
        $croatiaFlag = "./images/Croatia.png";
        $belgiumFlag = "./images/belgium.png";
        $canadaFlag = "./images/canada.jpg";

        $MoroccoGameWins = $MoroccoNullGames = $MoroccoLostGames =  0;
        $CroatiaGameWins = $CroatiaNullGames = $CroatiaLostGames = 0;
        $BelgiumGameWins = $BelgiumNullGames = $BelgiumLostGames =  0;
        $CanadaGameWins = $CanadaNullGames = $CanadaLostGames = 0;

        $MoroccoGoals = $morroccoFirstMatchScore + $morroccoSecondMatchScore + $morroccoThirdMatchScore;
        $CroatiaGoals = $croatiaFirstMatchScore + $croatiaSecondMatchScore + $croatiaThirdMatchScore;
        $BelgiumGoals = $belgiumFirstMatchScore + $belgiumSecondMatchScore + $belgiumThirdMatchScore;
        $CanadaGoals = $canadaFirstMatchScore + $canadaSecondMatchScore + $canadaThirdMatchScore;

        $MoroccoGoalsConceded = $croatiaFirstMatchScore + $belgiumSecondMatchScore + $canadaThirdMatchScore;
        $CroatiaGoalsConceded = $morroccoFirstMatchScore + $canadaSecondMatchScore + $belgiumThirdMatchScore;
        $BelgiumGoalsConceded = $canadaFirstMatchScore + $morroccoSecondMatchScore + $croatiaThirdMatchScore;
        $CanadaGoalsConceded = $belgiumFirstMatchScore + $croatiaSecondMatchScore + $morroccoThirdMatchScore;

        $MoroccoGoalsDiffrence = $MoroccoGoals - $MoroccoGoalsConceded;
        $CroatiaGoalsDiffrence = $CroatiaGoals - $CroatiaGoalsConceded;
        $BelgiumGoalsDiffrence = $BelgiumGoals - $BelgiumGoalsConceded;
        $CanadaGoalsDiffrence = $CanadaGoals - $CanadaGoalsConceded;

        if ($morroccoFirstMatchScore > $croatiaFirstMatchScore) {
            $moroccoPoints += 3;
            $MoroccoGameWins += 1;
            $CroatiaLostGames += 1;
        } elseif ($morroccoFirstMatchScore < $croatiaFirstMatchScore){
            $croatiaPoints += 3;
            $CroatiaGameWins += 1;
            $MoroccoLostGames += 1;
        } else {
            $moroccoPoints += 1;
            $croatiaPoints += 1;
            $MoroccoNullGames += 1;
            $CroatiaNullGames += 1;
        }

        if ($belgiumFirstMatchScore > $canadaFirstMatchScore) {
            $belgiumPoints += 3;
            $BelgiumGameWins += 1;
            $CanadaLostGames += 1;
        } elseif ($belgiumFirstMatchScore < $canadaFirstMatchScore){
            $canadaPoints += 3;
            $CanadaGameWins += 1;
            $BelgiumLostGames += 1;
        } else {
            $belgiumPoints += 1;
            $canadaPoints += 1;
            $CanadaNullGames += 1;
            $BelgiumNullGames += 1;
        }

        if ($belgiumSecondMatchScore > $morroccoSecondMatchScore) {
            $belgiumPoints += 3;
            $BelgiumGameWins += 1;
            $MoroccoLostGames += 1;
        } elseif ($belgiumSecondMatchScore < $morroccoSecondMatchScore){
            $moroccoPoints += 3;
            $MoroccoGameWins += 1;
            $BelgiumLostGames += 1;
        } else {
            $belgiumPoints += 1;
            $moroccoPoints += 1;
            $BelgiumNullGames += 1;
            $MoroccoNullGames += 1;
        }

        if ($croatiaSecondMatchScore > $canadaSecondMatchScore) {
            $croatiaPoints += 3;
            $CroatiaGameWins += 1;
            $CanadaLostGames += 1;
        } elseif ($croatiaSecondMatchScore < $canadaSecondMatchScore){
            $canadaPoints += 3;
            $CanadaGameWins += 1;
            $CroatiaLostGames += 1;
        } else {
            $croatiaPoints += 1;
            $canadaPoints += 1;
            $CroatiaNullGames += 1;
            $CanadaNullGames += 1;
        }

        if ($croatiaThirdMatchScore > $belgiumThirdMatchScore) {
            $croatiaPoints += 3;
            $CroatiaGameWins += 1;
            $BelgiumLostGames += 1;
        } elseif ($croatiaThirdMatchScore < $belgiumThirdMatchScore){
            $belgiumPoints += 3;
            $BelgiumGameWins += 1;
            $CroatiaLostGames += 1;
        } else {
            $croatiaPoints += 1;
            $belgiumPoints += 1;
            $CroatiaNullGames += 1;
            $BelgiumNullGames += 1;
        }

        if ($canadaThirdMatchScore > $morroccoThirdMatchScore) {
            $canadaPoints += 3;
            $CanadaGameWins += 1;
            $MoroccoLostGames += 1;
        } elseif ($canadaThirdMatchScore < $morroccoThirdMatchScore){
            $moroccoPoints += 3;
            $MoroccoGameWins += 1;
            $CanadaLostGames += 1;
        } else {
            $canadaPoints += 1;
            $moroccoPoints += 1;
            $MoroccoNullGames += 1;
            $CanadaNullGames += 1;
        }

        function sortByValue($a, $b) {
            if($b['points'] == $a['points']) {
                    if($b['Goals'] == $a['Goals']) {
                        return $b['GoalsDiffrence'] - $a['GoalsDiffrence'];
                    } 
                return $b['Goals'] - $a['Goals'];
            } 
            return $b['points'] - $a['points'];
        }

        $teams = array(
            array("country"=>"Morocco", "flag"=>$moroccoFlag, "points"=>$moroccoPoints, "Wins"=>$MoroccoGameWins, "Lost"=>$MoroccoLostGames, "Null"=>$MoroccoNullGames, "Goals"=>$MoroccoGoals, "GoalsConceded"=>$MoroccoGoalsConceded, "GoalsDiffrence"=>$MoroccoGoalsDiffrence),
            array("country"=>"Croatia", "flag"=>$croatiaFlag, "points"=>$croatiaPoints, "Wins"=>$CroatiaGameWins, "Lost"=>$CroatiaLostGames, "Null"=>$CroatiaNullGames, "Goals"=>$CroatiaGoals, "GoalsConceded"=>$CroatiaGoalsConceded, "GoalsDiffrence"=>$CroatiaGoalsDiffrence),
            array("country"=>"Belgium", "flag"=>$belgiumFlag, "points"=>$belgiumPoints, "Wins"=>$BelgiumGameWins, "Lost"=>$BelgiumLostGames, "Null"=>$BelgiumNullGames, "Goals"=>$BelgiumGoals, "GoalsConceded"=>$BelgiumGoalsConceded, "GoalsDiffrence"=>$BelgiumGoalsDiffrence),
            array("country"=>"Canada", "flag"=>$canadaFlag, "points"=>$canadaPoints, "Wins"=>$CanadaGameWins, "Lost"=>$CanadaLostGames, "Null"=>$CanadaNullGames, "Goals"=>$CanadaGoals, "GoalsConceded"=>$CanadaGoalsConceded, "GoalsDiffrence"=>$CanadaGoalsDiffrence)
        );
        usort($teams, 'sortByValue');        
    ?>

    <div class="container-fluid">
        <nav class="navbar ">
            <div class="container d-flex">
                <div>
                    <a href="index.php">
                        <img src="./" alt="Logo" width="50">
                    </a>
                </div>
                <div class="align-self-center"> 
                    <h4>World cup Simulator</h4>
                </div>
            </div>
        </nav>
    </div>
    
    <section class="section">
        <div class="container-fluid">
            <div class="row ">
                <form class="col-lg" action="index.php" method="POST">
                    <div class="row">
                        <div class="col border d-flex align-items-center px-2 gap-2">
                            <img src="./images/morocco.png" class="rounded-circle" style="width: 50px">
                            <H3>Morocco</H3>
                        </div>
                        <div class="col bg-secondary-subtle">
                            <h4 class="text-center">First Match Score</h4>
                            <div class="col d-flex px-2 justify-content-center align-items-center">
                                <input type="number" name="morocco1" class="w-25" value="<?php echo $morroccoFirstMatchScore;?>">
                                <span class="fs-1">-</span>
                                <input type="number" name="croatia1" class="w-25" value="<?php echo $croatiaFirstMatchScore;?>">   
                            </div>
                        </div>
                        
                        <div class="col border d-flex justify-content-end align-items-center px-2 gap-2">
                            <H3>Croatia</H3>
                            <img src="./images/Croatia.png" class="rounded-circle" style="width: 50px">
                        </div>
                    </div>

                    <div class="row">
                        
                        <div class="col border d-flex align-items-center px-2 gap-2">
                            <img src="./images/belgium.png" class="rounded-circle" style="width: 50px">
                            <H3>Belgium</H3>
                        </div>

                        <div class="col bg-secondary-subtle">
                            <h4 class="text-center">Second Match Score</h4>
                            <div class="col d-flex justify-content-center align-items-center">
                                <input type="number" name="belgium1" class="w-25" value="<?php echo $belgiumFirstMatchScore;?>">
                                <span class="fs-1">-</span> 
                                <input type="number" name="canada1" class="w-25" value="<?php echo $canadaFirstMatchScore;?>">   
                            </div>
                        </div>
                        
                        <div class="col border d-flex justify-content-end align-items-center px-2 gap-2">
                            <H3>Canada</H3>
                            <img src="./images/canada.jpg" class="rounded-circle" style="width: 50px">
                        </div>
                    </div>

                    <div class="row">
                        
                        <div class="col border d-flex align-items-center px-2 gap-2">
                            <img src="./images/belgium.png" class="rounded-circle" style="width: 50px">
                            <H3>Belgium</H3>
                        </div>

                        <div class="col bg-secondary-subtle">
                            <h4 class="text-center">Third Match Score</h4>
                            <div class="col d-flex justify-content-center align-items-center">
                                <input type="number" name="belgium2" class="w-25" value="<?php echo $belgiumSecondMatchScore;?>">
                                <span class="fs-1">-</span> 
                                <input type="number" name="morocco2" class="w-25" value="<?php echo $morroccoSecondMatchScore;?>">   
                            </div>
                        </div>
                        
                        <div class="col border d-flex justify-content-end align-items-center px-2 gap-2">
                            <H3>Morocco</H3>
                            <img src="./images/morocco.png" class="rounded-circle" style="width: 50px">
                        </div>
                    </div>

                    <div class="row">
                        
                        <div class="col border d-flex align-items-center px-2 gap-2">
                            <img src="./images/Croatia.png" class="rounded-circle" style="width: 50px">
                            <H3>Croatia</H3>
                        </div>

                        <div class="col bg-secondary-subtle">
                            <h4 class="text-center">Fourth Match Score</h4>
                            <div class="col d-flex justify-content-center align-items-center">
                                <input type="number" name="croatia2" class="w-25" value="<?php echo $croatiaSecondMatchScore;?>">
                                <span class="fs-1">-</span> 
                                <input type="number" name="canada2" class="w-25" value="<?php echo $canadaSecondMatchScore;?>">   
                            </div>
                        </div>
                        
                        <div class="col border d-flex justify-content-end align-items-center px-2 gap-2">
                            <H3>Canada</H3>
                            <img src="./images/canada.jpg" class="rounded-circle" style="width: 50px">
                        </div>
                    </div>

                    <div class="row">
                        
                        <div class="col border d-flex align-items-center px-2 gap-2">
                            <img src="./images/Croatia.png" class="rounded-circle" style="width: 50px">
                            <H3>Croatia</H3>
                        </div>

                        
                        <div class="col bg-secondary-subtle">
                            <h4 class="text-center">Fifth Match Score</h4>
                            <div class="col d-flex justify-content-center align-items-center">
                                <input type="number" name="croatia3" class="w-25" value="<?php echo $croatiaThirdMatchScore;?>">
                                <span class="fs-1">-</span> 
                                <input type="number" name="belgium3" class="w-25" value="<?php echo $belgiumThirdMatchScore;?>">   
                            </div>
                        </div>
                        
                        <div class="col border d-flex justify-content-end align-items-center px-2 gap-2">
                            <H3>Belgium</H3>
                            <img src="./images/belgium.png" class="rounded-circle" style="width: 50px">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col border d-flex align-items-center px-2 gap-2">
                            <img src="./images/canada.jpg" class="rounded-circle" style="width: 50px">
                            <H3>Canada</H3>
                        </div>

                        <div class="col bg-secondary-subtle">
                            <h4 class="text-center">Sixth Match Score</h4>
                            <div class="col d-flex justify-content-center align-items-center">
                                <input type="number" Name="canada3" class="w-25" value="<?php echo $canadaThirdMatchScore;?>">
                                <span class="fs-1">-</span> 
                                <input type="number" name="morocco3" class="w-25" value="<?php echo $morroccoThirdMatchScore;?>">   
                            </div>
                        </div>
                        
                        <div class="col border d-flex justify-content-end align-items-center px-2 gap-2">
                            <H3>Morocco</H3>
                            <img src="./images/morocco.png" class="rounded-circle" style="width: 50px">
                        </div>
                    </div>

                    <div class="d-flex justify-content-center py-2">
                        <button class="btn fs-4" type="submit" name="submit" style="background: #56042C; color: white;">>>>> Simulate <<<<</button>
                    </div>
                </form>
                
                <div class="col-lg broder border-warning">
                    <table class="table text-center" style="background: #56042C; color: white;">
                        <thead>
                            <tr>
                            <th scope="col">Selection</th>
                            <th scope="col" data-toggle="tooltip" title="Total Points">Pts</th>
                            <th scope="col" data-toggle="tooltip" title="Games Played">GP</th>
                            <th scope="col" data-toggle="tooltip" title="Game Wins">GW</th>
                            <th scope="col" data-toggle="tooltip" title="Null Games">N</th>
                            <th scope="col" data-toggle="tooltip" title="Lost Games">LG</th>
                            <th scope="col" data-toggle="tooltip" title="Number Of Gaols">NG</th>
                            <th scope="col" data-toggle="tooltip" title="Goals Conceded">GC</th>
                            <th scope="col" data-toggle="tooltip" title="Goals Diffrence">GD</th>
                            </tr>
                        </thead>
                        <tbody style="background: #56042C; color: white;">
                            <?php
                                for($row = 0; $row < count($teams); $row++) {
                                    echo "<tr>";
                                        echo '<th scope="row">' . $row+1 . '</th>';
                                        echo "<td>";
                                            echo '<img src="'. $teams[$row]["flag"] .'" width="80px" class="rounded-circle">';
                                            echo "<h4>" . $teams[$row]["country"] . "</h4>";
                                        echo "</td>";
                                        echo "<td>" . $teams[$row]["points"] . "</td>"; 
                                        echo "<td>3</td>";
                                        echo "<td>" . $teams[$row]["Wins"] . "</td>";
                                        echo "<td>" . $teams[$row]["Null"] . "</td>";
                                        echo "<td>" . $teams[$row]["Lost"] . "</td>";
                                        echo "<td>" . $teams[$row]["Goals"] . "</td>";
                                        echo "<td>" . $teams[$row]["GoalsConceded"] . "</td>";
                                        echo "<td>" . $teams[$row]["GoalsDiffrence"] . "</td>";
                                    echo "</tr>";
                                }
                            ?>          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html> 