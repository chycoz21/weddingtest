<?php
$data = array(
//zero value
		'nul' => 'nol',
		//form 1-9
		'ten' =>
		array(
				array('','satu', 'dua', 'tiga', 'empat', 'lima', 'enam', 'tujuh', 'delapan', 'sembilan'),
				array('','satu', 'dua', 'tiga', 'empat', 'lima', 'enam', 'tujuh', 'delapan', 'sembilan'),
		),
		//from 10-19
		'a20' =>
		array('sepuluh', 'sebelas', 'dua belas', 'tiga belas', 'empat belas', 'lima belas', 'enam belas', 'tujuh belas', 'delapan belas', 'sembilan belas'),
		//from 20-90
		'tens' =>
		array(2=>'dua puluh', 'tiga puluh', 'empat puluh', 'lima puluh', 'enam puluh', 'tujuh puluh', 'delapan puluh', 'sembilan puluh'),
		//from 100-900
		'hundred' =>
		array('','seratus', 'dua ratus', 'tiga ratus', 'empat ratus', 'lima ratus', 'enam ratus', 'tujuh ratus', 'delapan ratus', 'sembilan ratus'),
		//units
		'unit' =>
		array( // Units
				array('sen', 'sen', 'sen',	 1),
				array('rupiah'   ,'rupiahs'   ,'rupiahs'    ,0),
				array('ribu', 'ribu', 'ribu'     ,1),
				array('juta' ,'juta','juta' ,0),
				array('miliar', 'miliar', 'miliar',0),
		)
);