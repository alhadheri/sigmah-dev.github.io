var fieldsArray = ["Code (Details)",  "Budget ( Details ) ", "Question ( Default root phase ) ", "Start date (Details) ", "End date ( Details)" ];
var varsArray = ["code", "question", "budget_all", "choice"];
var schemasArray = ["Schema1", "Schema2", "Schema3", "Schema4"];
var fields = ["Planned budget", "Received budget", "Spent budget" ];
/* Indicated if an identification key has been defined */
var key = false;

$(document).ready(function(){
	reloadSelects();
	reloadSchemas()
	$( "#dialog_add_schema" ).hide();
	$( "#dialog_add_association" ).hide();
	$( "#dialog_warn_id" ).hide();
});
function addModelScheme() {
	
	$("#content_table_schemas tbody")[0].innerHTML += '<tr><td>' + 	$("select#select_schema")[0].value + '</td></tr>';
	removeA(schemasArray, $("select#select_schema")[0].value);
	reloadSchemas();
	$( "#dialog_add_schema" ).dialog("close");
}

function popup_add(){
	$( "#dialog_add_schema" ).dialog();
}

function createAssociation() {
	$( "#dialog_add_association" ).dialog();
}

function saveAssociation() {
	var keyIcon = "";
	var variable = "";
	if ( typeof $("#select_variable")[0] !== 'undefined') {
		variable = $("#select_variable")[0].value;
	}
	var field = $("#select_field")[0].value;
	removeA(fieldsArray, field);
	removeA(varsArray, variable);
	if($('input[type="checkbox"]')[0].checked) {
		keyIcon = '<img src="img/clear.cache.gif" title="identification key" style="width: 16px; height: 16px; background-image: url(img/C18C262E36AA02F700CC477F30CB85A2.cache.png); background-position: -436px 0px; background-repeat: no-repeat no-repeat;" border="0" role="presentation" class=" x-btn-image">';
		key = true;
		var  id_key_input = $("#id_key input")[0];
		if(typeof id_key_input !== 'undefined'){
			id_key_input.checked = false;
			id_key_input.setAttribute("disabled" , "disabled");
			id_key_input.style.color = "gray";
		} 
		
	}
	$("#right_section .content_table_home tbody")[0].innerHTML += '<tr><td>' + keyIcon + '</td><td><label>' + field + '</label></td><td>' + variable + '</td><td><button type="button" class="home_button">Edit</button></td></tr>';
	$( "#dialog_add_association" ).dialog("close");
	$("#table_budget_fields")[0].innerHTML = "";
	reloadSelects();
}

/* Reloads the drop down lists for the field and the variables
	if one of them is empty, the button to add an association is disabled */
function reloadSelects() {
	if((fieldsArray.length == 0) || (varsArray.length == 0)){
		$("#button_add_variable")[0].setAttribute("disabled" , "disabled");
		$("#button_add_variable")[0].onclick = undefined;
	} else {
		$("#select_field")[0].innerHTML = "";
		for(x  in fieldsArray){
			var onclickFunction = "disableKey()";
			if(x < 2) {
				onclickFunction = "enableKey()"
			}
			if(fieldsArray[x]){
				$("#select_field")[0].innerHTML += '<option value="' + fieldsArray[x] + '" onclick="' + onclickFunction + '">' + fieldsArray[x] + '</option>';
			}
		} 
		var  variableDropDown = $("#select_variable")[0];
		if(typeof variableDropDown !== 'undefined') {
			variableDropDown.innerHTML = "";
			for(x  in varsArray){
				if(varsArray[x]){
					variableDropDown.innerHTML += '<option value="' + varsArray[x] + '">' + varsArray[x] + '</option>';
				}
			} 
		}
	}
}

function reloadSchemas(){
	if(schemasArray.length == 0){
		$("#button_add_schema")[0].setAttribute("disabled" , "disabled");
		$("#button_add_schema")[0].onclick = undefined;
	} else {
		$("#select_schema")[0].innerHTML = "";
		for(x  in schemasArray){
			if(schemasArray[x]){
				$("#select_schema")[0].innerHTML += '<option value="' + schemasArray[x] + '" >' + schemasArray[x] + '</option>';
			}
		} 
	}
}

// Disables the key identification checkbox when the selected flexible element
// cannot be an identification key 
function disableKey() {
	var selectBox = $("select#select_field")[0];
	var selectedValue = selectBox.options[selectBox.selectedIndex].value;
	var divKey = $("div#id_key")[0];
	divKey.innerHTML = '<input type="checkbox" /><label>  Identification Key </label><br/><span class="explications"></span>';
	
	// If the budget flexible element is selected, add all its field
	if(selectBox.value.indexOf("Budget") != -1 ) {
		variablesList = selectVariables();
		var budgetFields = "";
		for(var i = 0; i < fields.length; i++){
			budgetFields += '<tr><td><span>' + fields[i] + ': </span></td><td>' + variablesList + '</td></tr>';
			budgetFields += '<tr><td colspan="2"><input type="checkbox" /><label>  Identification Key </label><br/><span class="explications"></span></td></tr>';
		}
		$("#table_budget_fields")[0].innerHTML = budgetFields;
		$("#variable_input_field")[0].innerHTML = "";
		divKey.innerHTML = "";
	} else {
		$("#variable_input_field")[0].innerHTML = '<tr id="variable_input_field"><td><label>Variable : </label></td><td><select id="select_variable">'
					 + '</select></td></tr>';
		var  variableDropDown = $("#select_variable")[0];
		if(typeof variableDropDown !== 'undefined') {
			variableDropDown.innerHTML = "";
			for(x  in varsArray){
				if(varsArray[x]){
					variableDropDown.innerHTML += '<option value="' + varsArray[x] + '">' + varsArray[x] + '</option>';
				}
			} 
		}
		$("#table_budget_fields")[0].innerHTML = "";
		divKey.innerHTML = '<input type="checkbox" /><label>  Identification Key </label><br/><span class="explications"></span>';
		
		if(selectBox.selectedIndex < 2) {
			$("#id_key input")[0].removeAttribute("disabled");
			$("#id_key label")[0].style.color = "black";
			$("#id_key span.explications")[0].innerHTML = "";
		
		} else {
			var varField = $("#variable_input_field")[0];
			if(varField.innerHTML == "") {
				varField.innerHTML = '<tr id="variable_input_field"><td><label>Variable : </label></td><td><select id="select_variable">'
							 + '</select></td></tr>';
				reloadSelects();
			}
			$("#id_key input")[0].checked = false;
			$("#id_key input")[0].setAttribute("disabled" , "disabled");
			$("#id_key label")[0].style.color = "gray";
			$("#id_key span.explications")[0].innerHTML = "Only text fields (text and numbers) are allowed to be the identification key";
		}
	}
}

//Returns a select html element with all the variables 
function selectVariables() {
	var result = "<select>";
	for (var i = 0; i < varsArray.length; i++) {
		result += "<option>" + varsArray[i] + "</option>";
	}
	return result += "</select>";
}
