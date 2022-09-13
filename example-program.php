<?php
	function MMM(array $values, int $numValues){
		$choice = "NOEXIT";
		$mean = 0;
		$median = 0;
		$mode = 0;

		while($choice!="EXIT"){
	  		$choice = readline("Type Mean, Median, or Mode to view results, or exit to exit: ");
	  		$choice = strtoupper($choice);

	  		if($choice=="MEAN"){
	  			foreach ($values as $indValues) {
	  				$mean += $indValues;
	  			}
	  			$mean = $mean/$numValues;
	  			echo "The mean of the input values is: ", $mean, "\n";
	  		}
	  		else if($choice=="MEDIAN"){
	  			asort($values);
	  			if($numValues%2==0){
	  				$median = ($values[$numValues/2-1]+$values[$numValues/2])/2;
	  				echo "The median of the input values is: ", $median, "\n";
	  			}
	  			else{
	  			    echo "The median of the input values is: ", $values[$numValues/2], "\n";
	  			}
	  		}
	  		else if($choice=="MODE"){
	  			$mode = 0;
	  			$counter = 0;
	  			$modecounter =0;
	  			
	  			for($i=0;$i<$numValues;$i++){
	  				for($j=0;$j<$numValues;$j++){
	  					if($values[$i]==$values[$j]){
	  						$counter++;
	  					}
	  				}
	  				if($counter>$modecounter){
	  					$mode = $values[$i];
	  					$modecounter = $counter;
	  				}
	  				$counter = 0;
	  			}
	  			if($modecounter<2){
	  				echo "There is no mode, all values are different.";
	  			}
	  			else{
	  				echo "The mode of the input values is: ",$mode,"\n";
	  			}
	  		}
	  		else if($choice == "EXIT"){
	  		    break;
	  		}
	  		else{
	  			echo "Invalid input. Please try again.";
	  		}
		}
	}

  	$gradeArr = [];

  	$numStudents = readline("Enter the number of students in the class: ");
  	for($i = 0; $i<$numStudents; $i++){
  		$grade = readline("Enter the student grade: ");
  		array_push($gradeArr, $grade);
  	}

  	MMM($gradeArr, $numStudents);
?>
