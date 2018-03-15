var elem = document.body;
elem.classList.remove("bg-aqua");
elem.classList.add("bg-olive");

var firstP = document.getElementById("first-paragraph");
firstP.classList.remove("bg-lime","gray");
// new version
firstP.classList.add("aqua");

var allIt = document.getElementsByClassName("bg-silver")[0];
  allIt.classList.add("bg-teal");
  allIt.classList.remove("bg-silver");

var quote = document.getElementsByTagName("blockquote")[0];
 quote.classList.add("bg-white");

// // ∕∕exo 2
var myT = document.querySelector("#my-table");
myT.classList.add("bg-purple"); 

// var parag = document.querySelectorAll("p");
// for (var i=0; i<=parag.length; i++) {
// parag[i].classList.add("shadow");
// };

//exo 3
var pre = document.getElementsByTagName("pre")[0];
pre.style.color = "black";
pre.style.backgroundColor = "white";
pre.style.borderTop = "3px solid red";
pre.style.borderBottom = "3px solid red";
document.getElementsByTagName("h3")[0].innerHTML = "<em>Itelic title ! yeah !</em>";
document.getElementsByTagName("h2")[0].innerHTML = "<strong>HTML doens't work !</strong>";

//exo 4
var uList = document.getElementsByTagName("ul")[0];
var item = document.createElement("li");
item.innerHTML = ("Mon meilleur ami est <a href='http://www.google.com'>Google</a>");
uList.appendChild(item);
uList.getElementsByTagName("a")[0].style.color = "white";

//exo 4.1
var oList = document.getElementsByTagName("ol")[0];

for (var i = 0; i <= oList.children.length; i++) {
  oList.removeChild(oList.children[0]);
}

var table = ["Silent Teacher","Code Monkey", "CodeCombat"];
var t;
for (var i=0; i<table.length; i++) {
var olItem = document.createElement("li");
olItem[i] = table[i];
t = document.createTextNode(table[i]);
olItem.appendChild(t);
oList.appendChild(olItem);
}













// select the body
//
// remove the class "bg-aqua"
//
// add the class "bg-olive"
//
// select first-paragraph
//
// remove the classes "bg-lime" and "gray"
//
// add the class "aqua"
//
// select all items that have the class 'bg-silver'
//
// modify all these elements by adding them the class "bg-teal"
//
// modify all these elements by removing them the class "bg-silver"
//
// select all elements of type 'blockquote'
//
// modify all these elements by adding them the class "bg-white"
//
// EXERCISE 2: CSS Selector
//
// with querySelectorselecting the 'my-table' element
//
// add the class "bg-purple"
//
// with querySelectorAllselect all paragraphs in 'container'
//
// modify all these elements by adding them the class 'shadow'
//
// EXERCISE 3
//
// select all elements of type 'pre'
//
// with the property stylechanges the text color
//
// with the property stylechanges the background color throughbackgroundColor
//
// with the property styleadd one border-topof 3px solid red(do not forget that you can access the property of an object thanks to this: ["prop-name"])
//
// with the property styleadd one border-bottomof3px solid red
//
// select the first element of type 'h3'
//
// to move its HTML content <em>Itelic title ! yeah !</em>
//
// selects the first element of type 'h2'
//
// to move its text content by <strong>HTML doens't work !</strong>
//
// EXERCISE 4: Creating Elements
//
// select the first 'ul'
//
// creates an element of type 'li'
//
// add this text Mon meilleur ami est <a href='http://www.google.com'>Google</a>in the 'li'
//
// add this 'li' element in the ul
//
// select the first link in the 'li' previously created
//
// with the property stylechanges the text color of this link
//
// EXERCISE 4: Creating and deleting multiple items
//
// select the first element 'ol'
//
// loop through all the children of the latter through his property children
//
// remove each child from 'ol' thanks to removeChild()
//
// declare in a table the following values: ["Silent Teacher", "Code Monkey", "CodeCombat"]
//
// loop through all the children in the table previously created
//
// for each value of the array creates an element 'li' thanks to document.createElement()
//
// add to each 'li' the current table value
//
// then add each 'li' to the 'ol' element previously selected
//
// Recall
//
// Selectors
//
// document.getElementById ()
// document.getElementsByClassName ()
// document.getElementsByTagName ()
// document.querySelector ()
// document.querySelectorAll ()
// Creating elements
//
// document.createElement ()
// element.appendChild ()
// Handling CSS classes
//
// element.className
// element.classList.remove ()
// element.classList.add ()
// element.classList.toggle ()
// CSS Manipulation
//
// element.style (eg element.style.backgroundColor = "blue")
// Other
//
// element.id
// element.innerHTML
// element.innerText
