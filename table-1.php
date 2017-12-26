<?php include_once("header.php"); ?>

<div class="row">
	<table class="table table-striped">
		<thead class="thead-dark">
			<tr>
				<th class="text-right" style="width: 5%;">#</th>
				<!-- a tooltiphez kell a footerbe a tooltip függvény -->
				<th data-toggle="tooltip" data-html="true" data-placement="bottom"
					title="<strong>kereszt</strong>név</strong>">
					First Name
				</th>
				<th>Last Name</th>
				<!-- kis felbontásban ne látszódjon -->
				<th class="d-none d-md-table-cell">Username</th>
			</tr>
		</thead>
		<tbody>
			<?php for($i=0; $i<=10; $i++) { ?>
				<tr>
					<td class="text-right">1</td>
					<td>Mark</td>
					<td>Otto</td>
					<!-- kis felbontásban ne látszódjon -->
					<td class="d-none d-md-table-cell">@mdo</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div>

<?php include_once("footer.php"); ?>
