<?php

$data = [
			["name"=>"Mustofa Kamal","age"=>20],
			["address"=>"Kediri, Jawa Timur, Indonesia"],
			["hobbies"=>["Renang","Ngoding","Ngopi"]],
			["is_married"=>false],
			["list_school"=>
			                ["SDN Ngronggo 5"=>["year_in"=>2006,"year_out"=>2012]],
			                ["Mts Hidayatus Sholihin"=>["year_in"=>2012,"year_out"=>2016]],
			                ["SMK AL-HUDA"=>["year_in"=>2016,"year_out"=>2019]],
			                ["major"=>"TKJ"]],
			["skills"=>["Coding"=>"beginer"]],
			["interest_in_coding"=>true]
		];
			
$data2=json_encode($data);
print_r($data2);
?>
