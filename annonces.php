<link rel="stylesheet" href="stayl.css"
<script src=


<?php
	$db=mysqli_connect("localhost","root","","authentication");
	$sql="SELECT Titre FROM deposer";
	$result=mysqli_query($db,$sql);
	$datas=array();
	if(mysqli_num_rows($result)>0){
		while($row=mysqli_fetch_assoc($result)){
					$datas[]=$row;

		}
	}

	
	
?>	
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="stole.css">
		<script src="javazscript.js"></script>
</head>
		
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Expand/Collapse data table with filter buttons CSS &amp; JS based - Materialized design</h1><hr>
		</div>
	</div>
	
	<div class="alert alert-block" id="track-app-cont">
		
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-6">
				<h4>Recently Played Data</h4>
			</div>
				
			<div class="col-md-6 col-sm-6 col-xs-6">
				<div class="quick-actions pull-right">
					<button type="button" class="btn btn-xs btn-primary" title="Indian">Ind</button>
					<button type="button" class="btn btn-xs btn-success" title="German">Ger</button>
					<button type="button" class="btn btn-xs btn-warning" title="Russian">Rus</button>
					<button type="button" class="btn btn-xs btn-info" title="English">Eng</button>
					<button type="button" class="btn btn-xs btn-danger" title="All types">ALL</button>
				</div>
			</div>
				
			<div class="col-md-12">
				<div class="table-responsive">
					<table class="table table-striped"> 
						<thead> 
							<tr> 
								<th></th> 
								<th><label>Id</label></th> 
								<th><label>Track Name</label></th> 
								<th><label>Movie</label></th> 
								<th><label data-title="Singer" data-breakpoints="xs">Singer</label></th> 
								<th><label data-title="Length" data-breakpoints="xs">Length</label></th> 
								<th><label data-title="Time" data-breakpoints="xs">Time</label></th> 
								<th><label data-title="Type" data-breakpoints="xs">Type</label></th> 
								<th><label>Awards Won</label></th> 
							</tr>
						</thead> 
						<tbody> 
							<tr> 
								<td><span class="badge blue">E</span></td> 
								<td><a href="javascript:void(0);">#251</a></td> 
								<td><span title="The Beach Boys – Surf's Up">The Beach Boys.</span></td> 
								<td>Surf's Up</td> 
								<td>John Doe</td> 
								<td>10:05</td> 
								<td>01:15 AM</td> 
								<td><button type="button" class="btn btn-xs btn-success">Accéder à l'annonce</button></td> 
								<td>12</td> 
							</tr> 
							<tr> 
								<td><span class="badge blue">E</span></td> 
								<td><a href="javascript:void(0);">#169</a></td> 
								<td><span title="Bob Dylan – Masters of War">Bob Dylan</span></td> 
								<td>Masters of War</td> 
								<td>John Doe</td> 
								<td>10:05</td> 
								<td>01:15 AM</td> 
								<td><button type="button" class="btn btn-xs btn-warning">Web</button></td> 
								<td>11</td> 
							</tr> 
							<tr> 
								<td><span class="badge orange">H</span></td> 
								<td><a href="javascript:void(0);">#169</a></td> 
								<td><span title="Aanewala Pal – Prince of Bollywood">Aanewala Pal</span></td> 
								<td>Prince of Bollywood</td> 
								<td>John Doe</td> 
								<td>10:05</td> 
								<td>01:15 AM</td> 
								<td><button type="button" class="btn btn-xs btn-info">Mobile</button></td> 
								<td>17</td> 
							</tr>
							<tr> 
								<td><span class="badge blue">E</span></td> 
								<td><a href="javascript:void(0);">#169</a></td> 
								<td><span title="Johnny Cash – I Still Miss Someone">Johnny Cash</span></td> 
								<td><table>
    <?php foreach($datas[0] as $data): ?>
    <tr>
        <td><a href="https://twitter.com/mrdogra007/" target="_blank"><?php echo  $data; ?></a></td>
    </tr>
    <?php endforeach; ?>
</table></td> 
								<td>John Doe</td> 
								<td>10:05</td> 
								<td>01:15 AM</td> 
								<td><button type="button" class="btn btn-xs btn-info">Mobile</button></td> 
								<td>9</td> 
							</tr> 
							<tr> 
								<td><span class="badge orange">H</span></td> 
								<td><a href="javascript:void(0);">#169</a></td> 
								<td><span title="Rang Barse Bheege Chunarwali – King Of Romance">Rang Barse</span></td> 
								<td>King Of Romance</td> 
								<td>John Doe</td> 
								<td>10:05</td> 
								<td>01:15 AM</td> 
								<td><button type="button" class="btn btn-xs btn-info">Mobile</button></td> 
								<td>15</td> 
							</tr>
							<tr> 
								<td><span class="badge blue">E</span></td> 
								<td><a href="javascript:void(0);">#251</a></td> 
								<td><span title=>The Beach Boys.</span></td> 
								<td>Surf's Up</td> 
								<td>John Doe</td> 
								<td>10:05</td> 
								<td>01:15 AM</td> 
								<td><button type="button" class="btn btn-xs btn-success">Radio</button></td> 
								<td>12</td> 
							</tr> 
							<tr> 
								<td><span class="badge blue">E</span></td> 
								<td><a href="javascript:void(0);">#169</a></td> 
								<td><span title="Bob Dylan – Masters of War">Bob Dylan</span></td> 
								<td>Masters of War</td> 
								<td>John Doe</td> 
								<td>10:05</td> 
								<td>01:15 AM</td> 
								<td><button type="button" class="btn btn-xs btn-warning">Web</button></td> 
								<td>11</td> 
							</tr> 
							<tr> 
								<td><span class="badge orange">H</span></td> 
								<td><a href="javascript:void(0);">#169</a></td> 
								
								<td><span title="Aanewala Pal – Prince of Bollywood">Aanewala Pal</span></td> 
								<td>Prince of Bollywood</td> 
								<td>John Doe</td> 
								<td>10:05</td> 
								<td>01:15 AM</td> 
								<td><button type="button" class="btn btn-xs btn-info">Mobile</button></td> 
								<td>17</td> 
							</tr>
							<tr> 
								<td><span class="badge blue">E</span></td> 
								<td><a href="javascript:void(0);">#169</a></td> 
								<td><span title="Johnny Cash – I Still Miss Someone">Johnny Cash</span></td> 
								<td>I Still Miss Someone</td> 
								<td>John Doe</td> 
								<td>10:05</td> 
								<td>01:15 AM</td> 
								<td><button type="button" class="btn btn-xs btn-info">Mobile</button></td> 
								<td>9</td> 
							</tr> 
							<tr> 
								<td><span class="badge orange">H</span></td> 
								<td><a href="javascript:void(0);">#169</a></td> 
								<td><span title="Rang Barse Bheege Chunarwali – King Of Romance">Rang Barse</span></td> 
								<td>King Of Romance</td> 
								<td>John Doe</td> 
								<td>10:05</td> 
								<td>01:15 AM</td> 
								<td><button type="button" class="btn btn-xs btn-info">Mobile</button></td> 
								<td>15</td> 
							</tr>
						</tbody>  
					</table>
				</div>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12">
			<p style="font-style: italic; color: #2196f3; font-size: 18px; text-align: center; margin-top: 50px; margin-bottom: 20px;">Follow me on Twitter: <a href="https://twitter.com/mrdogra007/" target="_blank"><?php echo  $data; ?></a></p>
		</div>
	</div>
</div>