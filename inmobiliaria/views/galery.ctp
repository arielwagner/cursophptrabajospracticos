<div class="sectionBody">
	<div id="sectionGalery">
		<div>
			<h3>Casas y Countries</h3>
		</div>
		<div class="tableContext">
			<table>
				<tr>
				    <table>
				    	<?php foreach(InmobiliariaController::getListScaparate() as $row) { ?>
					    <tr>
						    <td>
							    <div id="sectionGallerieBox1">
								    <p><?php echo $row[0]; ?></p>
								    <br>
								    <p><?php echo $row[1]; ?></p>
								    <br>
								    <p style="font-weight: bold; text-align: right;"><?php echo $row[2]; ?></p>
							    </div>
						    </td>
						    <td>
						    	<div id="sectionGallerieBox2">
						    		<?php
						    			if($row[3] == '')
						    			{
						    				echo '<img src="scaparate/nohouse.jpg" />';
						    			}
						    			else
						    			{
						    				echo '<img src="scaparate/'.$row[3].'" />';
						    			}
						    		?>
						    	</div>
						    </td>
					    </tr>
					    <?php } ?>
				    </table>
				</tr>			
			</table>			
		</div>		
	</div>
</div>