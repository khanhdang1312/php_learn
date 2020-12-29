function check(){
	var check=[];
	var check_1;
	var array_1=[3,4,2,4,25,2,4];
	var array_2=[3,4,42,25,32,13,2,1];
	for (var i=0;i<array_1.leng+1;i++){
		for(var j=0;j<array_2.length+1;j++){
			if(array_1[i]!=array_2[j]){
				return array_2[j];
				check_1=array_2[j];
			}
			else{

			}
		}
	}
}