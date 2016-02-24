$(document).ready(function(){
	console.log("ik wordt ingeladen");
	$('#btnBewaarPopup').click(function(){
			console.log("klik btnBewaar");
			var selected = [];
			$('#checkboxes input:checked').each(function() {
    		selected.push($(this).attr('value'));
    		console.log(selected);
		});

		$.ajax({
			type: "POST",
			url: "backend/postSelection.php",
			data: {
				speler1: selected[0],
				speler2: selected[1],
				speler3: selected[2],
				speler4: selected[3],
				speler5: selected[4],
				speler6: selected[5],
				speler7: selected[6],
				speler8: selected[7],
				speler9: selected[8],
				speler10: selected[9],
				speler11: selected[10],
				speler12: selected[11],
				speler13: selected[12],
				speler14: selected[13],
				speler15: selected[14],
				speler16: selected[15],
				speler17: selected[16],
				speler18: selected[17],
				speler19: selected[18],
				speler20: selected[19],
				speler21: selected[20],
				speler22: selected[21],
				speler23: selected[22]
			},
				//selected,
			success: function(data) {
				console.log(data);
				//alert(data[1]);
			},
			error: function(data){
				alert("fail");
			}
		});

		//$.post('backend/postSelection.php',selected);
		//{
			//speler1: selected[0],
			//speler2: selected[1],
			//speler3: selected[2],
			//speler4: selected[3],
			//speler5: selected[4],
			//speler6: selected[5],
			//speler7: selected[6],
			//speler8: selected[7],
			//speler9: selected[8],
			//speler10: selected[9],
			//speler11: selected[10],
			//speler12: selected[11],
			//speler13: selected[12],
			//speler14: selected[13],
			//speler15: selected[14],
			//speler16: selected[15],
			//speler17: selected[16],
			//speler18: selected[17],
			//speler19: selected[18],
			//speler20: selected[19],
			//speler21: selected[20],
			//speler22: selected[21],
			//speler23: selected[22]
		//});

		
		$('#btnBewaar').hide();
		alert("Uw selectie is succesvol verzonden");

		$.ajax({
		type: 'GET',
      	url: 'http://goudenduivels.sporzalb.be/selectiemaker/backend/statistics.php',           	//the script to call to get data
      	data: '',                        	//you can insert url argumnets here to pass to api.php for example "id=5&parent=6"
      	dataType: 'json',                	//data format      
      	success: function(data)          	//on recieve of reply
      	{
			//console.log(data);
			// 			console.log(data[0].id);
			console.log(data[0].totaal);


			var statistics = [];



			for(i = 1; i < data.length; i++){
				statistics.push(data[i]/parseInt(data[0].totaal));
			}

			console.log(statistics);





      		
      		//console.log("Totaal aantal inzendingen: " + data[0]['totaal']);
            //
      		//console.log(data[1][0]['aantal']);
      		//console.log(data[1][1]['aantal']);
      		//console.log(data[1][2]['aantal']);
            //
      		//var a = (data[1][0]['aantal'])/(data[0]['totaal']);
      		//var b = (data[1][1]['aantal'])/(data[0]['totaal']);
      		//var c = (data[1][2]['aantal'])/(data[0]['totaal']);
        	//
        	//console.log(data[1][0]['naam'] + ' ' + (Math.round(a*100)));
        	//console.log(data[1][1]['naam'] + ' ' + (Math.round(b*100)));
        	//console.log(data[1][2]['naam'] + ' ' + (Math.round(c*100)));

        	//var percentageTobyAlderweireld = Math.round(a*100));
        	//var percentageDivockOrigi = Math.round(b*100));
        	//var percentageLaurentDepoitre = Math.round(c*100));

        	//apend values to output (popup)	
      	} 
    });	
	});
});