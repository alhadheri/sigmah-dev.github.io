var variables = new Array();
var schemas = [{ "name" : "Schema1" }];

function GetURLParameter(sParam)
{
    var sPageURL = window.location.search.substring(1);
    var sURLVariables = sPageURL.split('&');
    for (var i = 0; i < sURLVariables.length; i++) 
    {
       var sParameterName = sURLVariables[i].split('=');
       if (sParameterName[0] == sParam) 
       {
        return sParameterName[1];
       }
    }
}


function addVariable(variableName, cell_Column){
	var var_id = variables.length;
	for(var i = 0; i< var_id ; i++){
		if(variables[i]["name"] == variableName) {
			return;
		}
	}
	variables[var_id] = { "name": variableName, "cc" : cell_Column};
	return var_id;
}

function  getVariable(variable_id) {
	return variables[variable_id];
}

function updateVariable(variableId, variableName, cell_Column) {
	var variable = variables[variableId];
	variable["name"] = variableName;
	variable["cc"] = cell_Column;
}



function removeA(arr,arguments){
	for(x in arr) {
		if(arr[x] == arguments) {
			arr.splice(x, 1);
		}
	}
}


function addSchema(name) {
	var schema_id = schemas.length;
	for(var i = 0; i< schema_id ; i++){
		if(schemas[i]["name"] == name) {
			return;
		}
	}
	schemas[schema_id] = { "name": name};
	return schema_id;
}