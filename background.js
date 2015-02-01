//Javascript thst changes background image every time you refresh or visit the page.

var count = 3;
function change() {
var bg =  Math.ceil( Math.random() * count );
document.body.background = +bg+'.jpg';
}