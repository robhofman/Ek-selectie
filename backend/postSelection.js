var statistics = [];
var totaalAantalInzendingen;

$(document).ready(function(){
	$('#btnHidden').click(function(){
			var selected = [];
			$('#checkboxes input:checked').each(function() {
    		selected.push($(this).attr('value'));
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
			success: function(data) {

			},
			error: function(data){
				alert("fail");
			},
			async: false
		});

		$.ajax({
		type: 'GET',
      	url: 'http://goudenduivels.sporzalb.be/selectiemaker/backend/statistics.php',           	//the script to call to get data
      	data: '',                        	//you can insert url argumnets here to pass to api.php for example "id=5&parent=6"
      	dataType: 'json',                	//data format      
      	success: function(data)          	//on recieve of reply
      	{
			for(i = 1; i < data.length; i++){
				var obj = {};

				obj.spelernaam = data[i].naam;
				obj.percentage = (Math.round((parseInt(data[i].aantal))/(parseInt(data[0].totaal))*100));

				statistics.push(obj);
			}
            totaalAantalInzendingen = data[0].totaal;

		},
			async: false
    });	
	});
});