

function  func01(name , age)
{
    return `My name is ${name} : ${age} years old`;
}


var  func02 = function(name , age)
{
    return `My name is ${name} : ${age} years old`;
}


var  func03 = (name , age) =>{
    return `My name is ${name} : ${age} years old`;
} 


var  func04 = (name , age) =>  `My name is ${name} : ${age} years old`;
 
var  func05 = name =>{
    return `My name is ${name}`;
}

var  func06 = () =>{
    return `My name is `;
}
console.log(func06("Phan Trung Phú"));