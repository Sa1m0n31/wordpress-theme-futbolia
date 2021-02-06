$(function() {
  
  	let pos = $('#position').find(":selected").text();
    let dataObj = {
    	position: pos
    };
    let urlStr = $('#position').attr('name');
    $.ajax({
			url: urlStr,
            data: {
      			action: "get_position",
                position: pos,
                id: 1
      		},
			type: "POST",
			beforeSend:function(xhr){
				console.log("Processing...");
			},
			success:function(data){
				console.log("Success");
				$(".players-table-insert").html(data);
			}
		});
  
  $('#position').on("change", () => {
    let pos = $('#position').find(":selected").text();
    let dataObj = {
    	position: pos
    };
    let urlStr = $('#position').attr('name');
    $.ajax({
			url: urlStr,
            data: {
      			action: "get_position",
                position: pos,
                id: 1
      		},
			type: "POST",
			beforeSend:function(xhr){
				console.log("Processing...");
			},
			success:function(data){
				console.log("Success");
				$(".players-table-insert").html(data);
			}
		});
  });
});