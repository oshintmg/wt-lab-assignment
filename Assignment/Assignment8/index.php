<?php 

$gcesStaffs = [
			"academic" => [
				[
					"name" => "Hari KC",
					"address" => "Kudar",
					"phones" => ["9856011111"],
					"subjects" => ["Micro Processor", "Logic Circuit"]
				],
				[
					"name" => "Sunil Thapa",
					"address" => "Lamachour",
					"phones" => ["9856011111"],
					"subjects" => ["Micro Processor", "Logic Circuit"]
				],
				[
					"name" => "Hari KC",
					"address" => "Kudar",
					"phones" => ["9856011111"],
					"subjects" => ["Micro Processor", "Logic Circuit"]
				]
			],
			"non-academic" => [
				[
					"name" => "Hari KC",
					"address" => "Kudar",
					"phones" => ["9856011111"],
				],
				[
					"name" => "Hari KC",
					"address" => "Kudar",
					"phones" => ["9856011111"],
				],
			]
];
echo '<table border="2px" >';
echo '<tr><th>Faculty</th><th>Name</th> <th>Address</th> <th colspan=2>Phone number</th> <th colspan=2>Subjects</th></tr>';
echo '<tr>';
foreach ($gcesStaffs as $faculty => $details){
    echo '<tr>';
    
        foreach($details as $detail => $datas){
            echo "<td>$faculty</td>";
           foreach($datas as $data => $values){
        
           
            
            if(is_array($values)){
              
            
                foreach($values as $value => $v){
                    // echo "<td>$faculty</td>";
                    echo "<td> $v</td>";
                

                }
            }else {
                // echo "<td >$faculty</td>";

                echo "<td> $values </td>";
            
            }
           }
           echo '</tr>';
    
        
        
    } echo '</tr>';
}
    echo '</table>';