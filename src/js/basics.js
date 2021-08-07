// This is a comment in JavaScript
/**
 * You can also create multi-line comments using slash and asterisks
 */
/*
This is also a comment
*/

var variable; // Variable naming is dynamic, therefore no need for a type declaration. Instead we use `var`.

new_variable = 5; // You can also just directly declare variables on runtime like this.

// Integers and floats are of the same type: Number. Therefore, you can easily mix and match decimals with integers such as:
var number = 1;
var another_number = -141.01;

var new_number = number - another_number; // This results to 142.01

var numberObject = new Number(142.01); // Creates a new wrapper object vs primitive values like new_number
console.log( new_number );
console.log( numberObject );

console.log( new_number.toExponential() );
console.log( numberObject.toExponential() );

console.log( typeof new_number );
console.log( typeof numberObject );

var notNumberObject = new Number("not a number");
console.log( notNumberObject ); // Throws a NaN
console.log( typeof notNumberObject );
console.log( typeof notNumberObject.valueOf() );

console.log( "asdasd" * 123 );

var emptyString = "";
var stringObject = new String("I am your father.");
var myString = "Strings can be declared using quotes like this" + ' or single quotes like this.'  + ` or string literals which can interpolate results like the one before ${new_number}. To escape backticks add \\ like so: \` ` + emptyString + "\n Strings can also be added in new lines";

var stringNew = `${new_number*another_number} 
<div></div>
asdfasdfasdf
`;
console.log( stringNew );

console.log( myString );
console.log( stringObject );
console.log( "Length of myString: " + myString.length );
console.log( "Length of stringObject: " + stringObject.length );

// This results to: 
/*
    Strings can be declared using quotes like this or single quotes like this. or string literals which can interpolate results like the one before 142.01
    Strings can also be added in new lines
 */

var moreStringLiterals = `
    Literals can be multiline.
    You can also interpolate syntaxes like: ${new_variable * 5}
Tabs also matter.
`

console.log( moreStringLiterals );

// Booleans are like any other programming language.
var booleanValue = false;

console.log( !booleanValue );

// null and undefined are used for abscence of value.
var undefinedValue;
var nullValue =  null;
console.log( undefinedValue );
console.log( nullValue );
console.log( typeof undefinedValue );
console.log( typeof nullValue );


// Arrays are an ordered list of values. By order, we mean it has indexes.

var a = [];                         // no elements
var b = new Array();                // equivalent to a
var c = [ , , , ,];                     // 4 elements, all undefined.
var d = new Array(4);               // equivalent to c
var e = ["the", 1, true, []];           // 3 elements of different types
var f = new Array("the", 1, true);  // equivalent to e

console.log( a );
console.log( b );
console.log( c );
console.log( d );
console.log( e );
console.log( f );

console.log( "" );

// Reading and writing values
var a = ["white"];    // Start with a one-element array
var b = a[0];         // b => "white"

console.log( b );

var c = a[100];       // c => undefined (no error)
console.log( c );

a[1] = 3.14;          // a => ["white", 3.14]
var i = 2;
a[i] = 3;             // a => ["white", 3.14, 3]
a[i + 1] = "rabbit";  // a => ["white", 3.14, 3, "rabbit"]
a[a[i]] = a[0];       // a => ["white", 3.14, 3, "white"]
// a[3] = a[0]
var d = a.length;     // d => 4

console.log( a );

// Array manipulation

var a = ["follow", "the", "white", "rabbit"];
console.log( a );
var b = a.pop();             // a => ["follow", "the", "white"]
                             // b => "rabbit"

var c = a.push("RABBIT");    // a => ["follow", "the", "white", "RABBIT"]
                             // c => 4 (new length)

var d = a.shift();           // a => ["the", "white", "RABBIT"]
                             // d => "follow"

var e = a.unshift("FOLLOW"); // a => ["FOLLOW", "the", "white", "RABBIT"]
                             // e => 4 (new length)

var f = a.splice(2, 1);       // a => ["FOLLOW", "the", "RABBIT"]
                              // f => "white"
                              
var g = a.splice(1, 2, "ME"); // a => ["FOLLOW", "ME"]
                              // g => ["the", "RABBIT"]

console.log( a );
console.log( b );
console.log( c );
console.log( d );
console.log( e );
console.log( f );
console.log( g );

// Operators
var a = 6 + 4;                    // a => 10
var b = -a;                       // b => -10
var c = 6 - 4;                    // c => 2
var d = 1, e = ++d;    // e=d+1           // d and e are both 2
var f = 1, g = f++;    // g=f, f+1           // f is 2, g is 1
var h = 7, i = --h;               // h and i are both 6
var j = 7, k = j--;               // j is 6, k is 7
var l = 3 * 3                     // l => 9
var m = 10 / 3                    // m => 3.3333333333333335
var n = 10 % 3                    // n => 1
var o = "Dodge" + " " + "this."   // o => "Dodge this.";

// console.log( a );
// console.log( b );
// console.log( c );
// console.log( d );
// console.log( e );
// console.log( f );
// console.log( g );
// console.log( h );
// console.log( i );
// console.log( j );
// console.log( k );
// console.log( l );
// console.log( m );
// console.log( n );
// console.log( o );

// Equality
var a = "2" == 2;    // a => true
var b = "2" != 2;    // b => false
// Strict equality
var c = "2" === 2;   // c => false
var d = "2" !== 2;   // d => true

// Comparisons
var a = 2 > 2;          // a => false
var b = 2 <= 2;         // b => true
var c = "2" >= 2;       // c => true
var d = 2 < 2;          // d => false
var e = 2 <= 2;         // e => true
var f = 'abcsa' < 'defasd'   // f => true

// Logical
var a = true && false;  // a => false
var b = true || false;  // b => true
var c = !true;          // c => false

// Bitwise
var a = 42 & 2   // a =>          2  (AND)
var b =  7 | 2   // b =>          2  (OR)
var c =  7 ^ 2   // c =>          7  (XOR)
var d = ~8       // d =>         -7  (NOT)
var e =  1 << 3  // e =>          8  (Shift left)
var f =  8 >> 2  // f =>          2  (Shift right)
var g = -1 >>  2 // g =>         -1
var h = -1 >>> 2 // h => 1073741823  (Shift right with zero fill)

// Assignments
var a = 1, b = 0;
a += b    // a = a + b
a -= b    // a = a - b
a *= b    // a = a * b
a /= b    // a = a / b
a %= b    // a = a % b
a <<= b   // a = a << b
a >>= b   // a = a >> b
a >>>= b  // a = a >>> b
a &= b    // a = a & b
a |= b    // a = a | b
a ^= b    // a = a ^ b

// in Operator
var a = [1,9,4];
var b = (2 in a);          // b => true
var c = (9 in a);          // c => false
var d = (length in a);     // d => true

// Types
var a = 3;
var b = typeof a;   // b => "number"
var c = "";
var d = typeof c;   // d => "string"
var e = true;
var f = typeof e;   // f => "boolean"

// Explicit Type Conversion
// to Number
var a = Number("10");         // a => 10
var b = Number(false);        // b =>  0
var c = parseInt("10", 10);   // c => 10
var d = parseInt(10.2);       // d => 10
var e = parseFloat("10.2");   // e => 10.2 10 => 10.0
// to String
var a = String(false);        // a => "false"
var b = String(10);           // b => "10"
var c = String(10.2);         // c => "10.2"
var d = (10).toString();      // d => "10"
// to Boolean
var a = Boolean(10);          // a => true
var b = Boolean(0);           // b => false
var c = Boolean(0.3);         // c => true
var d = Boolean("true");      // d => true

// Implicit
// to Number
var a = +"10";            // a => 10
var b = "10" >> 0;        // b => 10
var c = "10" * 1;         // c => 10
var d = ~~"10";           // d => 10
var e = "2" * "5";        // e => 10 (both strings converts to number)
// to String
var a = 10 + "10";             // a => "1010"
var b = "10" + "10";           // b => "1010"
var c = 10 + " agents";        // c => "10 agents"
var d = 10 + 10 + " agents";   // d => "20 agents"
// to Boolean
var a = !!'morpheus';     // a => true
var b = !!'';             // b => false
var c = !!'0';            // c => true
var d = !!'1';            // d => true


// if Statements
username=null;
bulletCount="1";
if (username == null) {  // if username is null or undefined,
    username = "Trinity";  // define it
}
if (bulletCount === 1) {
    bulletCount += ' bullet';
} else {
    bulletCount += ' bullets';
}
console.log( bulletCount );
var user = (name == null) ? 'default user' : name;

// switch Statements

var quote;
var characterName = "Smith";
switch (characterName) {
  case 'Smith':
    quote = 'Goodbye, Mr. Anderson...';
    break;
  case 'Neo':
    quote = 'I know kung fu.';
    break;
  default:
    quote = 'What is the Matrix?';
    break;
}
console.log( quote );


function doSomething(){
    // Doing something;
}

// loops
for (var i = 0; i < 10; i++) {
    doSomething();
}

var count = 0;
while (count < 10) {
    doSomething();
    count++;
}

var count = 100;
do {
    doSomething();
} while (--count > 0);

// for in loops
var a = [123, 456, 789];
for (var i in a) {      // DO NOT use with arrays
  doSomething(a[i]);
}
// NOTE: Because of performance issues and in order to avoid "bugs" and "strange behaviours", use classic for loops instead of for..in with arrays.

// Function Declaration
function functionName(var1, var2, var3) { // no variable types
    /*
      Some code here
    */
    return var1 + ", " + var2 + ", " + var3;
}

console.log( functionName(1,2,451) );

// Which can also be written as
functionNameShorthand = (var1, var2, var3) => {
    return var1 + ", " + var2 + ", " + var3;
}

console.log( functionNameShorthand(1,2,451+'asd') );

function useArgs(var1, var2, var3) {
    var a = arguments.length;       // array containing all the arguments
    var result = "";
    for (var i = 0; i < a; i++) {
      result += " " + arguments[i];
    }
    return result;
}
var b = useArgs("Déjà", "vu");    // b => " Déjà vu", var3 = undefined

// Variable Scopes
var firstname = "Andy";             // not in a function => variable is global
console.log( firstname );

function fullName() {
  var lastName = "WACHOWSKI";   // inside a function => variable is local
  firstname = "new name";
  return firstname + ' ' + lastName; // can access global variable "name"
}
console.log(fullName());
console.log(firstname);

// Commenting next line for code execution
// var a = lastName;        // ReferenceError lastName is not defined
                            // can not access local variable "lastName"

// Don't forget var
// If you ommit the var keyword inside a function, the variable is automatically considered global. 
// It can have serious side effects. It's considered bad practice, you shouldn't use this.

var i = 1;
function foo() {
  var i = 3;
}
foo();
var a = i;        // a => 1
var i = 1;
function foo() {
  i = 3;          // no var keyword !!! :-(
  j = 4;          // no var keyword !!! :-(
}
foo();
var a = i;        // a => 3
var b = j;        // b => 4


// Classes
class Car {
    constructor(name, year) {
      this.name = name;
      this.year = year;
    }
    age() {
        let date = new Date();
        return date.getFullYear() - this.year;
    }
}
  
let myCar = new Car("Ford", 2014);
console.log( `My car is a ${myCar.name} and it is ${myCar.age()} years old.`)



let objects = {
    numberHere: 14,
    test: function(){
        return "Hello world.";
    },
    employees: [
        {
            'firstName' : "Jan",
            'lastName' : "Dayanan",
            'jobDescription' : "Full-stack Developer"
        },
        {
            'firstName' : "John",
            'lastName' : "Doe",
            'jobDescription' : "SysOps"
        },
    ]
};

objects.employees.forEach(el => {
  console.log( el.firstName );
});

console.log(objects);

let jsonString = `
{
    "employees":[
      {"firstName":"John", "lastName":"Doe"},
      {"firstName":"Anna", "lastName":"Smith"},
      {"firstName":"Peter", "lastName":"Jones"}
    ]
    }
`;

console.log( JSON.parse( jsonString ) );

// HTML manipulation
document.getElementById("test_element").innerHTML = "My car is a " + myCar.name;

var elements = document.getElementsByClassName("greetings");
elements[0].innerHTML = "Test greetings";

console.log( elements );

