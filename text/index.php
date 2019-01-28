<?php

//Teksti vormindamine
$tekst = 'Hello, this is PHP';
echo strtolower($tekst);
echo '<br>';
echo strtoupper($tekst);


//Muuda ainult esitäht suureks
$tekst = 'Hello, this is PHP';
echo ucfirst(strtolower($tekst));


//Teksti pikkus
$tekst = 'Experience is the teacher of fools';
echo strlen($tekst);			//34
echo '<br>';
echo str_word_count($tekst);	//6


//Teksti kärpimine
$tekst = ' 	A woman should soften but not weaken a man   ';
echo "<pre>$tekst</pre>";
echo "<pre>".trim($tekst)."</pre>";
echo "<pre>".ltrim($tekst)."</pre>";
echo "<pre>".rtrim($tekst)."</pre>";

$tekst = 'A woman should soften but not weaken a man';
echo trim($tekst, "A, a, k..n, w");	//oman should soften but not weake

$tekst = '<b>Experience</b> <a href="#">is</a> the teacher <br>of fools';
echo strip_tags($tekst); 	//Experience is the teacher of fools

$tekst = '<b>Experience</b> <a href="#">is</a> the teacher <br>of fools';
echo strip_tags($tekst, '<b>, <br>'); 	//<b>Experience</b> is the teacher <br>of fools


//Tekst kui massiiv
$tekst = 'All thinking men are atheists';
echo $tekst[0]; 				//A
echo '<br>';
echo $tekst[4]; 				//t

//Kui soovid tekstist mingit osa kätte saada, siis kasuta funktsiooni substr()
$tekst = 'All thinking men are atheists';
echo substr($tekst, 3, 5);		//thin
echo '<br>';
echo substr($tekst, 4, -13);	//thinking men
echo '<br>';
echo substr($tekst, -8, 7);		//atheist

//Mõni rida üles, kasutasime sõnade kokkulugemiseks str_word_count() funktsiooni. Sellele funktsioonile lisades parameetrina 1, loetakse sõnad kui massiivi elemendid.
$tekst = 'All thinking men are atheists';
print_r(str_word_count($tekst, 1));		//Array ( [0] => All [1] => thinking [2] => men [3] => are [4] => atheists )

//Sellest massiivist siis mõne sõna väljakutsumiseks paiguta see esmalt muutujasse ja siis määra indeks.
$tekst = 'All thinking men are atheists';
$sona = str_word_count($tekst, 1);
echo $sona[2];							//men

//Andes str_word_count() funktsioonile parameetri 2, määratakse sõna indeks vastava sümboli indeksiga kogu massiivis.
$tekst = 'All thinking men are atheists';
print_r(str_word_count($tekst, 2));
//Array ( [0] => All [4] => thinking [13] => men [17] => are [21] => atheists )


//Tekstist otsimine
//strpos() funktsioon
$tekst = 'Happiness in intelligent people is the rarest thing I know.';
$otsitav = 'in';
$leia_tekstist = strpos($tekst, $otsitav, 0);	//4
echo $leia_tekstist;

//Nihke arvutamisel tuleb siis arvesse võtta juba leitud indeksi väärtust ja otsitava sõna pikkus.
$tekst = 'Happiness in intelligent people is the rarest thing I know.';
$otsitav = 'in';
$nihe = 0;
while($leia_tekstist = strpos($tekst, $otsitav, $nihe)){	//4 10 13 48
    echo $leia_tekstist.'<br>';
    $nihe = $leia_tekstist+strlen($otsitav);
}


//Teksti asendamine

?>