<?php
function help(){
echo "Hash Tool Kit - SadCode Official";
echo "Output :";
echo "-hash : generate password hash";
echo "-credit : About Tools";
echo "-bcrpyt : crack bcrypt password with wordlist";
}
$lol = $argv[1];
$zz = $argv[2];
$kk = ['cost' => 10 ];
If($lol = ''){
echo " Usage : file.php -help ";
echo "ex : file.php -hash password";
} else if($lol == '-hash'){
$p1 = md5($zz);
$qq = md4($zz);
$lel = sha1($zz);
$kko = sha256($zz);
$bzz = password_hash($zz,password_default,$kk);
$mmk = sha512($zz);
echo "Rezult For".$zz." is :";
echo "Md5 : ".$p1;
echo "Md4 : ".$qq;
echo "Sha1 : ".$lel;
echo "Sha256 : ".$kko;
echo "Bcrypt : ".$bzz;
} else if ($lol = '-credit'){
echo "Hash Tool kit Powered By SadCode";
} else if ($lol = '-bcrypt'){
echo "In Coming :)";
} else if ($lol = '-help'){
help();
} else {
help();
}
