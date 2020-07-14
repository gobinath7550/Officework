// var diclarations are globally scoped, var variables can be updated and re-declared within its scope.
var name = "Var-javaScript";
// can't change the constant variable
const name1= "Constant-variable";
document.getElementById("demo").innerHTML = name;
document.getElementById("demo2").innerHTML = name1;
name1 = "const";//The variable name doesn't changed, because it is constant.
document.getElementById("demo2").innerHTML = name1;
function myFunction()
{
    //let variables can be updated but not re-declared and we can't use the let variable outside the function
    let name = "Let-datatype"
    document.getElementById("demo1").innerHTML = name;
}


