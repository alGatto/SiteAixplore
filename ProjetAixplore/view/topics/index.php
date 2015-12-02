<div class="bwrite">
	<div class="page-header">
		<h1>Je suis la super matiere</h1>
	</div>
	<div>
		<?php foreach($topics as $k => $v){
			
				echo "<li>
						<ul>
							<h2>".$v->name."</h2>
		
						</ul>";
						
			}
			foreach($courses as $key =>$value){
				echo "<li>
						<ul>".$value->name."
						</ul>
					</li>";
		}
		?>
	</div>