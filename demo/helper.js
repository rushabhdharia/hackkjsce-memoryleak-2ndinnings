var count=0;
var id_p_list = [];

$(document).ready(function(){
	console.log("Document Loaded");

	// event binder for input_pl
	// event => keydown.
	$("#input_pl").keydown(function(e){
		if(e.keyCode == 13){
			console.log("Enter key has been pressed");
			e.preventDefault();
		}
	});

	// event binder for dropdown
	$("#dropdownmenu a").click(function(e){
		console.log(e.currentTarget.name);
		e.preventDefault();
		handle_db_entry(e.currentTarget.name);
	});

	// event binder for mark_all_complete
	$("#mark_all_complete").click(function(e){
		e.preventDefault();
		clearAll();
	});

	// event binder for check button
	// dynamically created btn dont' respond to pre-init listeners
	$(document).on('click', '#check_button', handle_check_button);

	// get ajax existing data from table
	init_list();
});


function init_list(){
	$.ajax({
		type:'GET',
		url: '../php_utils/getData.php',
		dataType : 'json',
		success:handle_success_data,
		error: handle_error
	});
}

function handle_error(){
	alert("Error");
}

function handle_success_data(data){
	// console.log(data);
	$.each(data, function(i, item){
		// console.log(i , '==>', item);
		updateTable(item.id, item.task, item.plevel, 1);
		count = item.id;
		id_p_list.push([item.id, item.plevel]);
	});
}

function handle_db_entry(priority){
	console.log("handle db entry function called");
	var input_pl_text = $("#input_pl").val();
	console.log(input_pl_text);
	if(input_pl_text.length == 0){
		alert("Enter input text");
	}else{
		console.log("inside handle_db_entry");
		var status = 1;
		var form_Data = {
			task:input_pl_text,
			plevel:priority
		};
		// updateTable(count ,input_pl_text, priority, status);
		$.ajax({
			type:"POST",
			url:'../php_utils/putData.php',
			data: form_Data,
			dataType: 'text',
			success: handle_put_success,
			error: handle_error,
		})
	} 
}

function handle_put_success(data){
	console.log(data);
	reset();
	init_list();

}

function updateTable(id1, input_pl_text, priority, status){
	var table_body = $("#table_body");
	var newelement = "";
	var btn_class;
	newelement += "<tr id="+ id1 +">";
	var th_head;
	switch(priority){
		// console.log(priority);
		case '1':
			console.log("here");
			th_head = "<th class='bg-success'>";
			btn_class = 'bg-success';
			break;
		case '2':
			th_head = "<th class='bg-warning'>";
			btn_class = 'bg-warning';
			break;
		case '3':
			th_head = "<th class='bg-danger'>";
			btn_class = 'bg-danger';
			break;
	}
	newelement += th_head;
	newelement += input_pl_text;
	newelement += "</th>";
	newelement += th_head;
	newelement += "<button class=\'btn "+btn_class+"\' name=\'"+id1+"\' id='check_button'><i class=\'fa fa-check-circle-o\'></i></button>";
	newelement += "</th>";
	table_body.append(newelement);
	$("#input_pl").val("");
}

function reset(){
	count = 0;
	$("#table_body").empty();
}


function clearAll(){
	$.ajax({
		type:"POST",
		data:{},
		url:"../php_utils/clear.php",
		success: function(data){
			reset();
			init_list();
		},
		error: handle_error,
	});
}


function handle_check_button(e){
	var primary_id = e.currentTarget.name;
	console.log( "primary_id : " , primary_id);
	var datanew = {id:String(primary_id)};
	$.ajax({
		type:"POST",
		data:datanew,
		url:'../php_utils/removeitem.php',
		dataType:'text',
		success:handle_put_success,
		error:handle_error,
	});
}