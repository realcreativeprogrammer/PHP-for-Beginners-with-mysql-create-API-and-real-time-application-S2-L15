<?php
for($x=1;$x<=10;$x++){

    echo 'the number is '.$x.' <br>';
    if($x == 5){
        break;
    }
}
echo '----------------------<br>';

for($x=1;$x<=10;$x++){

    if($x == 5){
        continue;
    }
    echo 'the number is '.$x.' <br>';

}
?>