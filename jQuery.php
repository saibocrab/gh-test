<?php include_once("header.php"); ?>

<p class="my-test">A scriptek a js/main.js-ben laknak</p>
<p><a href="https://www.w3schools.com/jquery/default.asp">jQuery Tutorial</a></p>
<p><a href="https://github.com/cherryApp/netacademia-jq">jQuery - Ajax példa</a></p>

<hr>

<p class="my-test">1. teszt p elem</p>

<p>2. teszt p elem</p>

<hr>

<p>
	<a id="home" href="index.php">home</a>
</p>
<p>
	<a id="home2" href="index.php" data-myproperty="opacity" data-myvalue="0" data-myspeed="8000">home2</a>
</p>

<hr>

<div id="mysearch" class="row">
	<div class="col-12">
		<div class="input-group">
		<input type="text" class="form-control" placeholder="keresés..." aria-label="keresés">
		<span class="input-group-btn">
			<button class="btn btn-secondary" type="button">
			<i class="fa fa-search"></i>
			</button>
		</span>
		</div>
	</div>
</div>
<div id="mysearchresult">search result</div>

<hr>

<p id="mychain">
	https://loremipsumgenerator.com/<br />
	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
	ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
	laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 
	voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
	cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p>

<hr>

<!-- tábla szűrése -->
<div id="myfilter" class="row">
	<div class="col-12">
		<div class="input-group">
		<input type="text" class="form-control" placeholder="szűrés...">
		<span class="input-group-btn">
			<button class="btn btn-secondary" type="button">
			<i class="fa fa-search"></i>
			</button>
		</span>
		</div>
	</div>
</div>
<div class="row">
	<table id="myfilteredTable" class="table table-striped">
		<thead class="thead-dark">
			<tr>
				<th>Name</th>
				<th>Username</th>
			</tr>
		</thead>
		<tbody>
			<?php $names = array("mark", "joe", "john", "csaba", "laci", "gábor", "péter"); ?>
			<?php foreach($names as $name) { ?>
				<tr>
					<td><?php echo $name; ?></td>
					<td><?php echo $name . rand(); ?></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div>

<?php include_once("footer.php"); ?>