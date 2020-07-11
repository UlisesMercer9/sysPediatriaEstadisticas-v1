//$("#state").change(event => {
	//$.get(`towns/${event.target.value}`, function(res, sta){
		//$("#town").empty();
		//res.forEach(element => {
			//$("#town").append(`<option value=${element.id}> ${element.name} </option>`);
		//});
	//});
//});

$("#state").change(function(event){
	$.get("towns/"+event.target.value+"",function(response,state){
		console.log(response);
	});
});