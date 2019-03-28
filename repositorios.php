<?php

								$qtd_repositorios = 10;

								$url = "https://api.github.com/search/repositories?q=language:php&per_page=".$qtd_repositorios;
								$opts = [
								    'http' => [
								        'method' => 'GET',
								        'header' => [
								                'User-Agent: PHP'
								        ]
								    ]
								];

								$json = file_get_contents($url, false, stream_context_create($opts));
								$obj = json_decode($json);
								$data = (array) $obj;

								#echo "<pre>";
								#var_dump($data);
								#echo "</pre>";


								$xml = json_decode(json_encode($data),true);
								for($i=0; $i<10; $i++)
								{
									echo $xml["items"][$i]["html_url"]; 

									#echo ' <a href="' . $xml["items"][$i]["html_url"] . '/archive/master.zip" download="1.zip">Download repositorio</a>';
									echo "<br>" ;

								}
								#echo $xml["items"][0]["git_url"];
								#echo "<br>";
								#echo $xml["items"][1]["git_url"];
								#	
								
								
						?>
