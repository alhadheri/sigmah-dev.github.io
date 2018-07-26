/* Variables definition */
var multiple = "";
var format_icon_position = "-597px";
var editVarButtons;
var editVarId;
var format_description;

/* Binding element events */
$(document).ready(function(){
	$("#dialog_add_schema").hide();
	$("#dialog_add_variable").hide();
	
	$("#radio_csv").change(function(){
		if($("#radio_csv")[0].checked){
			//$(".tableur").hide();
			disableTableurSection(true);
			$("#radio_ods")[0].checked = false;
			$("#radio_xls")[0].checked = false;
			format_icon_position = "-597px";
			format_description = "Commat-separated values";
		} else {
			$(".tableur").show();
		}
	});
	
	$("#radio_ods").change(function(){
		if($("#radio_ods")[0].checked){
			disableTableurSection(false);
			$(".tableur").show();
			$("#radio_csv")[0].checked = false;
			$("#radio_xls")[0].checked = false;
			format_icon_position = "-75px";
			format_description = "OpenDocument SpreadSheet";
		}
	});

	$("#radio_xls").change(function(){
		if($("#radio_xls")[0].checked){
			disableTableurSection(false);
			$(".tableur").show();
			$("#radio_ods")[0].checked = false;
			$("#radio_csv")[0].checked = false;
			format_icon_position = "-564px";
			format_description = "Microsoft Excel";
		} 
	});
	
	$("#several").change(function(){
		if($("#several")[0].checked){
			$("#unique")[0].checked = false;
			$("#by_line")[0].checked = false;
			$(".nb_sheet").hide();
			multiple = "checked";
		}
	});

	$("#unique").change(function(){
		if($("#unique")[0].checked){
			$("#several")[0].checked = false;
			$("#by_line")[0].checked = false;
			$(".nb_sheet").show();
			multiple = "";
		} 
	});
	
	$("#by_line").change(function(){
		if($("#by_line")[0].checked){
			$("#several")[0].checked = false;
			$("#unique")[0].checked = false;
			$(".nb_sheet").hide();
			multiple = "checked";
		} 
	});
	
	$("#upload").change(function(){
		if($("#upload")[0].checked){
			$("#manually")[0].checked = false;
			$(".upload").show();
		}
	});

	$("#manually").change(function(){
		if($("#manually")[0].checked){
			$("#upload")[0].checked = false;
			$(".upload").hide();
		} 
	});
	
	
	$("#browse_button").click(function(){
		alert("Loading file......");
		$("#browse_field")[0].value = "C://fakepath/file_to_be_imported";
	
	});
	
	$("#create_variable_button").click(function() {
		$("#dialog_add_variable").dialog({ width: '300px' });
	});
	
	
	$( "#dialog_var_db" ).hide();
	$(".upload").hide();
	disableTableurSection(true);
});

function disableTableurSection(display) {
	if(display) {
		$("#several")[0].checked = false;
		$("#unique")[0].checked = false;
		$("#by_line")[0].checked = true;
		$("#by_line")[0].disabled = "disabled";
		$("#several")[0].disabled = "disabled";
		$("#unique")[0].disabled = "disabled";
		$(".tableur")[0].setAttribute("style","color:gray;");
	} else {
		$("#by_line")[0].removeAttribute("disabled");
		$("#several")[0].removeAttribute("disabled");
		$("#unique")[0].removeAttribute("disabled");
		$(".tableur")[0].setAttribute("style", "color:rgb(75, 62, 45);");
	}
}

/* Functions definition */
function changePageFromManually (){
	var type = GetURLParameter("type");
	if(type == "unique"){
		$(".nb_sheet").hide();
	} 
	if(format == "csv"){
		$(".format_spec")[O].innerHTML = "Column number";
	}
	
}

function scanningAction() {
	alert("Scanning......Goes through the file and locate the cell where the prefix is defined");
		window.location = "ManuallyGMTab.html";

}


function savingScheme(){
	var content  = "";
	$( "#dialog_var_db" ).dialog();
	for (var i = 0; i < $("input.var").length; i++) {
		content += '<tr><td>' + i + '</td><td>' + $("input.var")[i].value + '</td><td>' + $("input.content")[i].value + '</td><td>' + $("input.cell")[i].value + '</td><td>1</td></tr>'; 
	}
	$("#database_schema tbody")[0].innerHTML += content;
	
}

function createScheme() {
	$("#dialog_add_schema").dialog({width:'550px', height: '500px'});
}

function addScheme() {
	var variable = $("#input_variable_name")[0].value;
	var schema_name =$("#input_schema_name")[0].value;
	var schema_id = addSchema(schema_name);
	if(typeof schema_id === "undefined") {
		alert("This schema name already exists.");
	} else {
		$("#content_table_schemas_home tbody")[0].innerHTML += '<tr><td><img src="http://demo.sigmah.org/1.1.1/Sigmah/clear.cache.gif" alt="' + format_description + '" title="' + format_description + '" style="width: 16px; height: 16px; background-image: url(http://demo.sigmah.org/1.1.1/Sigmah/C18C262E36AA02F700CC477F30CB85A2.cache.png); background-position: ' + format_icon_position + ' 0px; background-repeat: no-repeat no-repeat;" border="0" role="presentation" class=" x-btn-image">     ' + $("#input_schema_name")[0].value + '</td><td><input type="checkbox" disabled="disabled" ' + multiple + '/></td><td><button type="button" class="home_button">Edit</button></td></tr>'; 
		$("#content_table_variables_home tbody")[0].innerHTML = '<tr><th> Variable </th><th class="format_spec">Sheet:Cell</th><th></th></tr>';
		if( $("#upload")[0].checked) {
			alert("Scanning the file to find the pattern.");
			for(var i = 0; i<5; i++) {
				$("#content_table_variables_home tbody")[0].innerHTML += '<tr id="line_' + i + '"><td>cell_content' + i + '</td><td>C'+ i%2 + '</td><td><button type="button" class="edit_variable_button" onclick="editVariable(' + addVariable("cell_content" + i , 'C'+ i%2  ) + ')">Edit</button></td></tr>'; 
			}
		}
		
		if( $("#radio_csv")[0].checked) {
			$("#content_table_variables_home .format_spec")[0].innerHTML = "Column";
		}
		
		$( "#dialog_add_schema" ).dialog( "close" );
	}
}


function createVariable() {
	var variable_name = $("#input_variable_name")[0].value;
	var cell = $("#input_cell_column")[0].value;
	if( typeof editVarId !== "undefined") {
		updateVariable(editVarId);
		$("#content_table_variables_home tbody tr#line_" + editVarId)[0].innerHTML = '<td>' + variable_name + '</td><td>' + cell + '</td><td><button type="button" class="edit_variable_button" onclick="editVariable(' + editVarId + ')">Edit </button></td>';
	} else {
		var varId = addVariable( variable_name, cell);
		if(typeof varId !== "undefined") {
		$("#content_table_variables_home tbody")[0].innerHTML += '<tr id="line_' + varId +'"><td>' + variable_name + '</td><td>' + cell + '</td><td><button type="button" class="edit_variable_button" onclick="editVariable(' +  varId + ')">Edit </button></td></tr>'; 
		} else {
			alert("This variable name already exists.");
			return;
		}
	}
	$("#dialog_add_variable").dialog("close");
}

function editVariable(id) {
	var varArray = getVariable(id);
	$("#input_variable_name")[0].value = varArray["name"];
	$("#input_cell_column")[0].value = varArray["cc"];
	editVarId = id;
	$("#dialog_add_variable").dialog({ width: '400px' });
}


function checkPattern(){
	var pattern = $("#pattern_def")[0].value
	$(".upload #pattern_examples")[0].innerHTML = pattern.replace("VAR","code") + ", " + pattern.replace("VAR","budget");
}


