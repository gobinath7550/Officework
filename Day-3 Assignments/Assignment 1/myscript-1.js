/*Various methods in console object
assert() 
log()
error()
warn()
clear()
time() and timeEnd()
table()
count()
group()
groupEnd()
groupCollapsed()
info()
trace()
custom console logs
*/
var string = ["a", "b", "c"]
//Write a message to the console, only if the first argument is false
console.assert(document.getElementById("demo"), "You have no element with ID 'demo'");

//The console.clear() method clears the console
function myFunction() {
  console.clear();
}

//Outputs an error message to the console
console.error("This is the error message");

/*Creates a new inline group in the console. 
This indents following console messages by an additional level, until console.groupEnd() is called*/
console.group();

/*Creates a new inline group in the console.
However, the new group is created collapsed.
The user will need to use the disclosure button to expand it. */
console.groupCollapsed();

//Outputs an informational message to the console
console.info("Hello world!");

//Outputs a message to the console
console.log("This is the log message!");

//Exits the current inline group in the console
console.groupEnd();
console.groupEnd();

//Displays tabular data as a table
console.table(string);

//Starts a timer 
console.time();

for (i = 0; i < 100; i++) {
  //Logs the number of times that this particular call to count() has been called
console.count();
}

//Stops a timer
console.timeEnd();

//Outputs a stack trace to the console
function myfun(){
  myOtherFunction();
}
function myOtherFunction() {
  console.trace();
}

//Outputs a warning message to the console
console.warn("This is the warning message");

