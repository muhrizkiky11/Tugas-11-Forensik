<form method="post">
Ketik Jumlah Objek :
<input type="number" name="n"><br>
Ketik Jumlah Urutan :
<input type="number" name="r"><br>
<input type="submit" name="bHitung" value="Hitung Permutasi">
</form>
<?php
function hitungfaktorial($F) {
	$F=$F;
	$f=1;
	for ($x=1;$x<=$F;$x++) {
		$f=$f*$x;
	}
	return $f;
}
if (isset($_POST['bHitung'])) {
	$n=$_POST['n'];
	$r=$_POST['r'];
	$a=hitungfaktorial($n);
	$b=$n-$r;
	$c=hitungfaktorial($b);
	$permutasi=$a/$c;
	echo 'Permutasi Dari Jumlah '.$n.' Objek daengan Urutan Sebanyak '.$r.' adalah :'.$permutasi;
}
?>
