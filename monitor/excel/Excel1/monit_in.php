<?


if ($jaz_vib == 'свод')

	{
		for ( $i=1; $i<=11; $i++) 
			{ 
			
						echo $i, "-кл.";
						$jazik=$jaz_vib;

						$pro='1_четверть';

						$request= mysql_query("SELECT SUM(pater) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND    raion='$raion' and oblast='$oblast'  "); 	$row=mysql_fetch_array($request);     //  
						$mon7[$i]=$row['sum'];

						$request= mysql_query("SELECT SUM(chetir) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND    raion='$raion' and oblast='$oblast'   ");  	$row=mysql_fetch_array($request);
						$mon8[$i]=$row['sum'];	

						$request= mysql_query("SELECT SUM(tri) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND    raion='$raion' and oblast='$oblast'   ");   	$row=mysql_fetch_array($request);
						$mon9[$i]=$row['sum'];		

						$request= mysql_query("SELECT SUM(dva) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND    raion='$raion' and oblast='$oblast'   "); 	$row=mysql_fetch_array($request);
						$mon10[$i]=$row['sum'];	

						$mon6[$i]=$mon10[$i]+$mon9[$i]+$mon8[$i]+$mon7[$i];

						if ($mon6[$i] > 0 )	{ 
						$mon11[$i]=round(($mon7[$i]+$mon8[$i])/$mon6[$i]*100, 2);  
						$mon12[$i]=round(($mon7[$i]+$mon8[$i]+$mon9[$i])/$mon6[$i]*100, 2);} else  { 
						$mon11[$i]=0; $mon12[$i]=0; }


						//2

						// $mon13[$i]=$i; $mon14[$i]=$i; $mon15[$i]=$i; $mon16[$i]=$i; $mon17[$i]=$i; $mon18[$i]=$i; $mon19[$i]=$i; $mon20[$i]=$i;


						$pro='2_четверть';

						$request= mysql_query("SELECT SUM(pater) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro'  AND raion='$raion' and oblast='$oblast'  "); 	$row=mysql_fetch_array($request);     //  
						$mon15[$i]=$row['sum'];

						$request= mysql_query("SELECT SUM(chetir) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro'  AND raion='$raion' and oblast='$oblast'   ");  	$row=mysql_fetch_array($request);
						$mon16[$i]=$row['sum'];	

						$request= mysql_query("SELECT SUM(tri) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro'  AND raion='$raion' and oblast='$oblast'   ");   	$row=mysql_fetch_array($request);
						$mon17[$i]=$row['sum'];		

						$request= mysql_query("SELECT SUM(dva) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro'  AND raion='$raion' and oblast='$oblast'   "); 	$row=mysql_fetch_array($request);
						$mon18[$i]=$row['sum'];	

						$mon14[$i]=$mon15[$i]+$mon16[$i]+$mon17[$i]+$mon18[$i];

						if ($mon14[$i] > 0 )	{ 
						$mon19[$i]=round(($mon15[$i]+$mon16[$i])/$mon14[$i]*100, 2);  
						$mon20[$i]=round(($mon15[$i]+$mon16[$i]+$mon17[$i])/$mon14[$i]*100, 2);} else  { 
						$mon19[$i]=0; $mon20[$i]=0; }


						//3  $mon22[$i]=$i; $mon23[$i]=$i; $mon24[$i]=$i; $mon25[$i]=$i; $mon26[$i]=$i; $mon27[$i]=$i; $mon28[$i]=$i;

						$pro='3_четверть';

						$request= mysql_query("SELECT SUM(pater) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro'  AND raion='$raion' and oblast='$oblast'  "); 	$row=mysql_fetch_array($request);     //  
						$mon23[$i]=$row['sum'];

						$request= mysql_query("SELECT SUM(chetir) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro'  AND raion='$raion' and oblast='$oblast'   ");  	$row=mysql_fetch_array($request);
						$mon24[$i]=$row['sum'];	

						$request= mysql_query("SELECT SUM(tri) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro'  AND raion='$raion' and oblast='$oblast'   ");   	$row=mysql_fetch_array($request);
						$mon25[$i]=$row['sum'];		

						$request= mysql_query("SELECT SUM(dva) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro'  AND raion='$raion' and oblast='$oblast'   "); 	$row=mysql_fetch_array($request);
						$mon26[$i]=$row['sum'];	

						$mon22[$i]=$mon23[$i]+$mon24[$i]+$mon25[$i]+$mon26[$i];

						if ($mon22[$i] > 0 )	{ 
						$mon27[$i]=round(($mon23[$i]+$mon24[$i])/$mon22[$i]*100, 2);  
						$mon28[$i]=round(($mon23[$i]+$mon24[$i]+$mon25[$i])/$mon22[$i]*100, 2);} else  { 
						$mon27[$i]=0; $mon28[$i]=0; }




						// $mon30[$i]=$i; $mon31[$i]=$i; $mon32[$i]=$i; $mon33[$i]=$i; $mon34[$i]=$i; $mon35[$i]=$i $mon36[$i]=$i;

						$pro='4_четверть';

						$request= mysql_query("SELECT SUM(pater) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND    raion='$raion' and oblast='$oblast'  "); 	$row=mysql_fetch_array($request);     //  
						$mon31[$i]=$row['sum'];

						$request= mysql_query("SELECT SUM(chetir) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND    raion='$raion' and oblast='$oblast'   ");  	$row=mysql_fetch_array($request);
						$mon32[$i]=$row['sum'];	

						$request= mysql_query("SELECT SUM(tri) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND    raion='$raion' and oblast='$oblast'   ");   	$row=mysql_fetch_array($request);
						$mon33[$i]=$row['sum'];		

						$request= mysql_query("SELECT SUM(dva) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND    raion='$raion' and oblast='$oblast'   "); 	$row=mysql_fetch_array($request);
						$mon34[$i]=$row['sum'];	

						$mon30[$i]=$mon31[$i]+$mon32[$i]+$mon33[$i]+$mon34[$i];

						if ($mon30[$i] > 0 )	{ 
						$mon35[$i]=round(($mon31[$i]+$mon32[$i])/$mon30[$i]*100, 2);  
						$mon36[$i]=round(($mon31[$i]+$mon32[$i]+$mon33[$i])/$mon30[$i]*100, 2);} else  { 
						$mon35[$i]=0; $mon36[$i]=0; }





						//  $mon38[$i]=$i; $mon39[$i]=$i; $mon40[$i]=$i; $mon41[$i]=$i; $mon42[$i]=$i; $mon43[$i]=$i; $mon44[$i]=$i;

						$pro='годовая';

						$request= mysql_query("SELECT SUM(pater) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND    raion='$raion' and oblast='$oblast'  "); 	$row=mysql_fetch_array($request);     //  
						$mon39[$i]=$row['sum'];

						$request= mysql_query("SELECT SUM(chetir) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND    raion='$raion' and oblast='$oblast'   ");  	$row=mysql_fetch_array($request);
						$mon40[$i]=$row['sum'];	

						$request= mysql_query("SELECT SUM(tri) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND    raion='$raion' and oblast='$oblast'   ");   	$row=mysql_fetch_array($request);
						$mon41[$i]=$row['sum'];		

						$request= mysql_query("SELECT SUM(dva) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND    raion='$raion' and oblast='$oblast'   "); 	$row=mysql_fetch_array($request);
						$mon42[$i]=$row['sum'];	

						$mon38[$i]=$mon39[$i]+$mon40[$i]+$mon41[$i]+$mon42[$i];

						if ($mon38[$i] > 0 )	{ 
						$mon43[$i]=round(($mon39[$i]+$mon40[$i])/$mon38[$i]*100, 2);  
						$mon44[$i]=round(($mon39[$i]+$mon40[$i]+$mon41[$i])/$mon38[$i]*100, 2);} else  { 
						$mon43[$i]=0; $mon44[$i]=0; }



						//  $mon46[$i]=$i; $mon47[$i]=$i; $mon48[$i]=$i; $mon49[$i]=$i; $mon50[$i]=$i; $mon51[$i]=$i; $mon52[$i]=$i;

						$pro='экзаменационная';

						$request= mysql_query("SELECT SUM(pater) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND    raion='$raion' and oblast='$oblast'  "); 	$row=mysql_fetch_array($request);     //  
						$mon47[$i]=$row['sum'];

						$request= mysql_query("SELECT SUM(chetir) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND    raion='$raion' and oblast='$oblast'   ");  	$row=mysql_fetch_array($request);
						$mon48[$i]=$row['sum'];	

						$request= mysql_query("SELECT SUM(tri) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND    raion='$raion' and oblast='$oblast'   ");   	$row=mysql_fetch_array($request);
						$mon49[$i]=$row['sum'];		

						$request= mysql_query("SELECT SUM(dva) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND    raion='$raion' and oblast='$oblast'   "); 	$row=mysql_fetch_array($request);
						$mon50[$i]=$row['sum'];	

						$mon46[$i]=$mon47[$i]+$mon48[$i]+$mon49[$i]+$mon50[$i];

						if ($mon46[$i] > 0 )	{ 
						$mon51[$i]=round(($mon47[$i]+$mon48[$i])/$mon46[$i]*100, 2);  
						$mon52[$i]=round(($mon47[$i]+$mon48[$i]+$mon49[$i])/$mon46[$i]*100, 2);} else  { 
						$mon51[$i]=0; $mon52[$i]=0; }





						//  $mon54[$i]=$i; $mon55[$i]=$i; $mon56[$i]=$i; $mon57[$i]=$i; $mon58[$i]=$i; $mon59[$i]=$i; $mon60[$i]=$i;


						$pro='ЕНТ';

						$request= mysql_query("SELECT SUM(pater) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND    raion='$raion' and oblast='$oblast'  "); 	$row=mysql_fetch_array($request);     //  
						$mon55[$i]=$row['sum'];

						$request= mysql_query("SELECT SUM(chetir) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND    raion='$raion' and oblast='$oblast'   ");  	$row=mysql_fetch_array($request);
						$mon56[$i]=$row['sum'];	

						$request= mysql_query("SELECT SUM(tri) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND    raion='$raion' and oblast='$oblast'   ");   	$row=mysql_fetch_array($request);
						$mon57[$i]=$row['sum'];		

						$request= mysql_query("SELECT SUM(dva) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND    raion='$raion' and oblast='$oblast'   "); 	$row=mysql_fetch_array($request);
						$mon58[$i]=$row['sum'];	

						$mon54[$i]=$mon55[$i]+$mon56[$i]+$mon57[$i]+$mon58[$i];

						if ($mon54[$i] > 0 )	{ 
						$mon59[$i]=round(($mon55[$i]+$mon56[$i])/$mon54[$i]*100, 2);  
						$mon60[$i]=round(($mon55[$i]+$mon56[$i]+$mon57[$i])/$mon54[$i]*100, 2);} else  { 
						$mon59[$i]=0; $mon60[$i]=0; }


						//  $mon62[$i]=$i; $mon63[$i]=$i; $mon64[$i]=$i; $mon65[$i]=$i; $mon66[$i]=$i; $mon67[$i]=$i; $mon68[$i]=$i;

						$pro='итоговая';

						$request= mysql_query("SELECT SUM(pater) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND    raion='$raion' and oblast='$oblast'  "); 	$row=mysql_fetch_array($request);     //  
						$mon63[$i]=$row['sum'];

						$request= mysql_query("SELECT SUM(chetir) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND    raion='$raion' and oblast='$oblast'   ");  	$row=mysql_fetch_array($request);
						$mon64[$i]=$row['sum'];	

						$request= mysql_query("SELECT SUM(tri) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND    raion='$raion' and oblast='$oblast'   ");   	$row=mysql_fetch_array($request);
						$mon65[$i]=$row['sum'];		

						$request= mysql_query("SELECT SUM(dva) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND    raion='$raion' and oblast='$oblast'   "); 	$row=mysql_fetch_array($request);
						$mon66[$i]=$row['sum'];	

						$mon62[$i]=$mon63[$i]+$mon64[$i]+$mon65[$i]+$mon66[$i];

						if ($mon62[$i] > 0 )	{ 
						$mon67[$i]=round(($mon63[$i]+$mon64[$i])/$mon62[$i]*100, 2);  
						$mon68[$i]=round(($mon63[$i]+$mon64[$i]+$mon65[$i])/$mon62[$i]*100, 2);} else  { 
						$mon67[$i]=0; $mon68[$i]=0; }


			}		

	}

else

	{
	
	
			for ( $i=1; $i<=11; $i++) 
			{ 
			
						echo $i, "-кл.";
						$jazik=$jaz_vib;

						$pro='1_четверть';

						$request= mysql_query("SELECT SUM(pater) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND   jaz='$jazik' AND raion='$raion' and oblast='$oblast'  "); 	$row=mysql_fetch_array($request);     //  
						$mon7[$i]=$row['sum'];

						$request= mysql_query("SELECT SUM(chetir) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND   jaz='$jazik' AND raion='$raion' and oblast='$oblast'   ");  	$row=mysql_fetch_array($request);
						$mon8[$i]=$row['sum'];	

						$request= mysql_query("SELECT SUM(tri) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND   jaz='$jazik' AND raion='$raion' and oblast='$oblast'   ");   	$row=mysql_fetch_array($request);
						$mon9[$i]=$row['sum'];		

						$request= mysql_query("SELECT SUM(dva) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND   jaz='$jazik' AND raion='$raion' and oblast='$oblast'   "); 	$row=mysql_fetch_array($request);
						$mon10[$i]=$row['sum'];	

						$mon6[$i]=$mon10[$i]+$mon9[$i]+$mon8[$i]+$mon7[$i];

						if ($mon6[$i] > 0 )	{ 
						$mon11[$i]=round(($mon7[$i]+$mon8[$i])/$mon6[$i]*100, 2);  
						$mon12[$i]=round(($mon7[$i]+$mon8[$i]+$mon9[$i])/$mon6[$i]*100, 2);} else  { 
						$mon11[$i]=0; $mon12[$i]=0; }


						//2

						// $mon13[$i]=$i; $mon14[$i]=$i; $mon15[$i]=$i; $mon16[$i]=$i; $mon17[$i]=$i; $mon18[$i]=$i; $mon19[$i]=$i; $mon20[$i]=$i;


						$pro='2_четверть';

						$request= mysql_query("SELECT SUM(pater) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND   jaz='$jazik' AND raion='$raion' and oblast='$oblast'  "); 	$row=mysql_fetch_array($request);     //  
						$mon15[$i]=$row['sum'];

						$request= mysql_query("SELECT SUM(chetir) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND   jaz='$jazik' AND raion='$raion' and oblast='$oblast'   ");  	$row=mysql_fetch_array($request);
						$mon16[$i]=$row['sum'];	

						$request= mysql_query("SELECT SUM(tri) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND   jaz='$jazik' AND raion='$raion' and oblast='$oblast'   ");   	$row=mysql_fetch_array($request);
						$mon17[$i]=$row['sum'];		

						$request= mysql_query("SELECT SUM(dva) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND   jaz='$jazik' AND raion='$raion' and oblast='$oblast'   "); 	$row=mysql_fetch_array($request);
						$mon18[$i]=$row['sum'];	

						$mon14[$i]=$mon15[$i]+$mon16[$i]+$mon17[$i]+$mon18[$i];

						if ($mon14[$i] > 0 )	{ 
						$mon19[$i]=round(($mon15[$i]+$mon16[$i])/$mon14[$i]*100, 2);  
						$mon20[$i]=round(($mon15[$i]+$mon16[$i]+$mon17[$i])/$mon14[$i]*100, 2);} else  { 
						$mon19[$i]=0; $mon20[$i]=0; }


						//3  $mon22[$i]=$i; $mon23[$i]=$i; $mon24[$i]=$i; $mon25[$i]=$i; $mon26[$i]=$i; $mon27[$i]=$i; $mon28[$i]=$i;

						$pro='3_четверть';

						$request= mysql_query("SELECT SUM(pater) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND   jaz='$jazik' AND raion='$raion' and oblast='$oblast'  "); 	$row=mysql_fetch_array($request);     //  
						$mon23[$i]=$row['sum'];

						$request= mysql_query("SELECT SUM(chetir) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND   jaz='$jazik' AND raion='$raion' and oblast='$oblast'   ");  	$row=mysql_fetch_array($request);
						$mon24[$i]=$row['sum'];	

						$request= mysql_query("SELECT SUM(tri) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND   jaz='$jazik' AND raion='$raion' and oblast='$oblast'   ");   	$row=mysql_fetch_array($request);
						$mon25[$i]=$row['sum'];		

						$request= mysql_query("SELECT SUM(dva) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND   jaz='$jazik' AND raion='$raion' and oblast='$oblast'   "); 	$row=mysql_fetch_array($request);
						$mon26[$i]=$row['sum'];	

						$mon22[$i]=$mon23[$i]+$mon24[$i]+$mon25[$i]+$mon26[$i];

						if ($mon22[$i] > 0 )	{ 
						$mon27[$i]=round(($mon23[$i]+$mon24[$i])/$mon22[$i]*100, 2);  
						$mon28[$i]=round(($mon23[$i]+$mon24[$i]+$mon25[$i])/$mon22[$i]*100, 2);} else  { 
						$mon27[$i]=0; $mon28[$i]=0; }




						// $mon30[$i]=$i; $mon31[$i]=$i; $mon32[$i]=$i; $mon33[$i]=$i; $mon34[$i]=$i; $mon35[$i]=$i $mon36[$i]=$i;

						$pro='4_четверть';

						$request= mysql_query("SELECT SUM(pater) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND   jaz='$jazik' AND raion='$raion' and oblast='$oblast'  "); 	$row=mysql_fetch_array($request);     //  
						$mon31[$i]=$row['sum'];

						$request= mysql_query("SELECT SUM(chetir) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND   jaz='$jazik' AND raion='$raion' and oblast='$oblast'   ");  	$row=mysql_fetch_array($request);
						$mon32[$i]=$row['sum'];	

						$request= mysql_query("SELECT SUM(tri) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND   jaz='$jazik' AND raion='$raion' and oblast='$oblast'   ");   	$row=mysql_fetch_array($request);
						$mon33[$i]=$row['sum'];		

						$request= mysql_query("SELECT SUM(dva) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND   jaz='$jazik' AND raion='$raion' and oblast='$oblast'   "); 	$row=mysql_fetch_array($request);
						$mon34[$i]=$row['sum'];	

						$mon30[$i]=$mon31[$i]+$mon32[$i]+$mon33[$i]+$mon34[$i];

						if ($mon30[$i] > 0 )	{ 
						$mon35[$i]=round(($mon31[$i]+$mon32[$i])/$mon30[$i]*100, 2);  
						$mon36[$i]=round(($mon31[$i]+$mon32[$i]+$mon33[$i])/$mon30[$i]*100, 2);} else  { 
						$mon35[$i]=0; $mon36[$i]=0; }





						//  $mon38[$i]=$i; $mon39[$i]=$i; $mon40[$i]=$i; $mon41[$i]=$i; $mon42[$i]=$i; $mon43[$i]=$i; $mon44[$i]=$i;

						$pro='годовая';

						$request= mysql_query("SELECT SUM(pater) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND   jaz='$jazik' AND raion='$raion' and oblast='$oblast'  "); 	$row=mysql_fetch_array($request);     //  
						$mon39[$i]=$row['sum'];

						$request= mysql_query("SELECT SUM(chetir) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND   jaz='$jazik' AND raion='$raion' and oblast='$oblast'   ");  	$row=mysql_fetch_array($request);
						$mon40[$i]=$row['sum'];	

						$request= mysql_query("SELECT SUM(tri) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND   jaz='$jazik' AND raion='$raion' and oblast='$oblast'   ");   	$row=mysql_fetch_array($request);
						$mon41[$i]=$row['sum'];		

						$request= mysql_query("SELECT SUM(dva) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND   jaz='$jazik' AND raion='$raion' and oblast='$oblast'   "); 	$row=mysql_fetch_array($request);
						$mon42[$i]=$row['sum'];	

						$mon38[$i]=$mon39[$i]+$mon40[$i]+$mon41[$i]+$mon42[$i];

						if ($mon38[$i] > 0 )	{ 
						$mon43[$i]=round(($mon39[$i]+$mon40[$i])/$mon38[$i]*100, 2);  
						$mon44[$i]=round(($mon39[$i]+$mon40[$i]+$mon41[$i])/$mon38[$i]*100, 2);} else  { 
						$mon43[$i]=0; $mon44[$i]=0; }



						//  $mon46[$i]=$i; $mon47[$i]=$i; $mon48[$i]=$i; $mon49[$i]=$i; $mon50[$i]=$i; $mon51[$i]=$i; $mon52[$i]=$i;

						$pro='экзаменационная';

						$request= mysql_query("SELECT SUM(pater) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND   jaz='$jazik' AND raion='$raion' and oblast='$oblast'  "); 	$row=mysql_fetch_array($request);     //  
						$mon47[$i]=$row['sum'];

						$request= mysql_query("SELECT SUM(chetir) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND   jaz='$jazik' AND raion='$raion' and oblast='$oblast'   ");  	$row=mysql_fetch_array($request);
						$mon48[$i]=$row['sum'];	

						$request= mysql_query("SELECT SUM(tri) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND   jaz='$jazik' AND raion='$raion' and oblast='$oblast'   ");   	$row=mysql_fetch_array($request);
						$mon49[$i]=$row['sum'];		

						$request= mysql_query("SELECT SUM(dva) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND   jaz='$jazik' AND raion='$raion' and oblast='$oblast'   "); 	$row=mysql_fetch_array($request);
						$mon50[$i]=$row['sum'];	

						$mon46[$i]=$mon47[$i]+$mon48[$i]+$mon49[$i]+$mon50[$i];

						if ($mon46[$i] > 0 )	{ 
						$mon51[$i]=round(($mon47[$i]+$mon48[$i])/$mon46[$i]*100, 2);  
						$mon52[$i]=round(($mon47[$i]+$mon48[$i]+$mon49[$i])/$mon46[$i]*100, 2);} else  { 
						$mon51[$i]=0; $mon52[$i]=0; }





						//  $mon54[$i]=$i; $mon55[$i]=$i; $mon56[$i]=$i; $mon57[$i]=$i; $mon58[$i]=$i; $mon59[$i]=$i; $mon60[$i]=$i;


						$pro='ЕНТ';

						$request= mysql_query("SELECT SUM(pater) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND   jaz='$jazik' AND raion='$raion' and oblast='$oblast'  "); 	$row=mysql_fetch_array($request);     //  
						$mon55[$i]=$row['sum'];

						$request= mysql_query("SELECT SUM(chetir) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND   jaz='$jazik' AND raion='$raion' and oblast='$oblast'   ");  	$row=mysql_fetch_array($request);
						$mon56[$i]=$row['sum'];	

						$request= mysql_query("SELECT SUM(tri) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND   jaz='$jazik' AND raion='$raion' and oblast='$oblast'   ");   	$row=mysql_fetch_array($request);
						$mon57[$i]=$row['sum'];		

						$request= mysql_query("SELECT SUM(dva) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND   jaz='$jazik' AND raion='$raion' and oblast='$oblast'   "); 	$row=mysql_fetch_array($request);
						$mon58[$i]=$row['sum'];	

						$mon54[$i]=$mon55[$i]+$mon56[$i]+$mon57[$i]+$mon58[$i];

						if ($mon54[$i] > 0 )	{ 
						$mon59[$i]=round(($mon55[$i]+$mon56[$i])/$mon54[$i]*100, 2);  
						$mon60[$i]=round(($mon55[$i]+$mon56[$i]+$mon57[$i])/$mon54[$i]*100, 2);} else  { 
						$mon59[$i]=0; $mon60[$i]=0; }


						//  $mon62[$i]=$i; $mon63[$i]=$i; $mon64[$i]=$i; $mon65[$i]=$i; $mon66[$i]=$i; $mon67[$i]=$i; $mon68[$i]=$i;

						$pro='итоговая';

						$request= mysql_query("SELECT SUM(pater) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND   jaz='$jazik' AND raion='$raion' and oblast='$oblast'  "); 	$row=mysql_fetch_array($request);     //  
						$mon63[$i]=$row['sum'];

						$request= mysql_query("SELECT SUM(chetir) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND   jaz='$jazik' AND raion='$raion' and oblast='$oblast'   ");  	$row=mysql_fetch_array($request);
						$mon64[$i]=$row['sum'];	

						$request= mysql_query("SELECT SUM(tri) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND   jaz='$jazik' AND raion='$raion' and oblast='$oblast'   ");   	$row=mysql_fetch_array($request);
						$mon65[$i]=$row['sum'];		

						$request= mysql_query("SELECT SUM(dva) as sum FROM monitor2012 WHERE predmet='$predmet' AND   klass='$i' AND chetvert='$pro' AND   jaz='$jazik' AND raion='$raion' and oblast='$oblast'   "); 	$row=mysql_fetch_array($request);
						$mon66[$i]=$row['sum'];	

						$mon62[$i]=$mon63[$i]+$mon64[$i]+$mon65[$i]+$mon66[$i];

						if ($mon62[$i] > 0 )	{ 
						$mon67[$i]=round(($mon63[$i]+$mon64[$i])/$mon62[$i]*100, 2);  
						$mon68[$i]=round(($mon63[$i]+$mon64[$i]+$mon65[$i])/$mon62[$i]*100, 2);} else  { 
						$mon67[$i]=0; $mon68[$i]=0; }


			}
	
	
	
	}


?>