var positive = "*Positive values only allowed";
var numerical = "*Numerical values only";
var len = "*Invalid length";
var required = "*Required field";
var success="";
var greaterZero="*Should be greater than 0";


// name validation
function name_validation(a){
     var val = a.trim();
     if (!val) {
         return required;
     }
}