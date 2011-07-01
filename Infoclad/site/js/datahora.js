
		mydate = new Date();
		myday = mydate.getDay();
		mymonth = mydate.getMonth();
		myweekday= mydate.getDate();
		weekday= myweekday; 
		
		if(myday == 0)
		day = " Domingo, " 
		
		else if(myday == 1)
		day = " Segunda - Feira, " 
		
		else if(myday == 2)
		day = " Terça - Feira, " 
		
		else if(myday == 3)
		day = " Quarta - Feira, " 
		
		else if(myday == 4)
		day = " Quinta - Feira, " 
		
		else if(myday == 5)
		day = " Sexta - Feira, " 
		
		else if(myday == 6)
		day = " Sábado, " 
		
		if(mymonth == 0)
		month = "Janeiro " 
		
		else if(mymonth ==1)
		month = "Fevereiro " 
		
		else if(mymonth ==2)
		month = "Março " 
		
		else if(mymonth ==3)
		month = "Abril " 
		
		else if(mymonth ==4)
		month = "Maio " 
		
		else if(mymonth ==5)
		month = "Junho " 
		
		else if(mymonth ==6)
		month = "Julho " 
		
		else if(mymonth ==7)
		month = "Agosto " 
		
		else if(mymonth ==8)
		month = "Setembro " 
		
		else if(mymonth ==9)
		month = "Outubro " 
		
		else if(mymonth ==10)
		month = "Novembro " 
		
		else if(mymonth ==11)
		month = "Dezembro " 
		
		document.write(","+ day);
		document.write(myweekday+" de "+month+ "</font>");
