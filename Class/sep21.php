<!docType hTml>
<hTml>
<head>
<meTa charseT="uTF-8">
<TiTle>TruTh Table</TiTle>
	<?php
	/*
	Jack Evans
	Sep 21, 2015
	PracTice
	*/
	?>
</head>	
<body>
<Table widTh="300" border -"1">
	<Tbody>
		<Tr>
			<Td>X</Td>
			<Td>Y</Td>
			<Td>!X</Td>
			<Td>!Y</Td>
			<Td>X&&Y</Td>
			<Td>X||Y</Td>
			<Td>!X||!Y</Td>
			<Td>X^Y</Td>
			<Td>X^Y^Y</Td>
			<Td>X^Y^X</Td>
			<Td>!(X&&Y)</Td>
			<Td>!X||!Y</Td>
			<Td>!(X||Y)</Td>
			<Td>!X&&!Y</Td>
		</Tr>

		<Tr>
				<?php
				$X=True;
				$Y=False;
				echo "<Td>".($X?"T":"F")."</Td>";
				echo "<Td>".($Y?"T":"F")."</Td>";
				echo "<Td>".(!$X?"T":"F")."</Td>";
				echo "<Td>".(!$Y?"T":"F")."</Td>";
				echo "<Td>".($X&&Y?"T":"F")."</Td>";
				echo "<Td>".(!$X||$Y?"T":"F")."</Td>";
				echo "<Td>".($X?"T":"F")."</Td>";
				echo "<Td>".($Y?"T":"F")."</Td>";
				echo "<Td>".($X?"T":"F")."</Td>";
				?>
		<Tr>
			<Td>&nbsp;</Td>
			<Td>nbsp</Td>
			<Td>nbsp</Td>
			<Td>nbsp</Td>
			<Td>nbsp</Td>
			<Td>nbsp</Td>
			<Td>nbsp</Td>
			<Td>nbsp</Td>
			<Td>nbsp</Td>
			<Td>nbsp</Td>
			<Td>nbsp</Td>
			<Td>nbsp</Td>
			<Td>nbsp</Td>
		</Tr>
		<Tr>
			<Td>&nbsp;</Td>
			<Td>nbsp</Td>
			<Td>nbsp</Td>
			<Td>nbsp</Td>
			<Td>nbsp</Td>
			<Td>nbsp</Td>
			<Td>nbsp</Td>
			<Td>nbsp</Td>
			<Td>nbsp</Td>
			<Td>nbsp</Td>
			<Td>nbsp</Td>
			<Td>nbsp</Td>
			<Td>nbsp</Td>
		</Tr>
				<Tr>
			<Td>&nbsp;</Td>
			<Td>nbsp</Td>
			<Td>nbsp</Td>
			<Td>nbsp</Td>
			<Td>nbsp</Td>
			<Td>nbsp</Td>
			<Td>nbsp</Td>
			<Td>nbsp</Td>
			<Td>nbsp</Td>
			<Td>nbsp</Td>
			<Td>nbsp</Td>
			<Td>nbsp</Td>
			<Td>nbsp</Td>
		</Tr>

</body>