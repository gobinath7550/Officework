/*

AvailableDatatypes in JavaScript

1.Number type
2.String type
3.Boolean type
4.Undefined type
5.Null type
6.function type
7.Object type

*/

//Number Type
{
    let a = 90;
    let b = 70;
    document.getElementById("demo1").innerHTML = a + b;
}

//String tyoe
{
    let a = "java";
    let b = "Script";
    document.getElementById("demo2").innerHTML = a + b;
}

//Boolean type
{
    let a = 5;
    let b = 6;
    document.getElementById("demo3").innerHTML = a < b;
}

//Undefined type
{
    let c; // c variable is undefined
    document.getElementById("demo4").innerHTML = c;
}

//Null type
{
    let a = null; 
    document.getElementById("demo5").innerHTML = a;
    document.getElementById("demo5").innerHTML = "The result doesn't show, because 'a' have null value";
}

//Function type
{
    var a = func();
    document.getElementById("demo6").innerHTML = a;
    function func()
    {
        return 89;
    }
}

//Object type
{
    var car = {
    modal: "BMW X3",
    color: "white",
    doors: 5
    }
    document.getElementById("demo7").innerHTML = car.modal;
}