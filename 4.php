<? php

int $i;
int $f;
int $b;

for ($i=1;$i<=$n;i++){
	if ($i %% 3 == 0 and $i %% 5 == 0){
	echo "FooBar";

	}elseif($i %% 3 == 0) {
		echo "Foo";
	}elseif($i %% 5 == 0) {
		echo "Bar";
	}
     }
?>
