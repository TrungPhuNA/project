


console.log("OK");


function NoReturn(): void{
    console.log(" No return");
}


function Return(): number{
    return 4;
}


function StringReturn(): string[]{
    return ["a","b"];
}


function AnyReturn(): any{
    return ["a","b"];
}
console.log(AnyReturn());






/**
 * Param
 */

// dday du cac tham so
function showInfo1(name: string , age:number): string
{
    return `Tên bạn là : ${name} , Tuổi : ${age}`;
}

// tham so macc dinh

function showInfo2(name: string = "Trung Phu NA" , age:number = 94): string
{
    return `Tên bạn là : ${name} , Tuổi : ${age}`;
}


// tham so khuyet

function showInfo3(name: string = "Trung Phu NA" , age?:number): string
{
    if(age == null)
    {
        return `Tên bạn là : ${name}`;
    }
    else
    {
        return `Tên bạn là : ${name} , Tuổi : ${age}`;
    }
    
}

// console.log(showInfo3());
// 
// 
// 

function totallog(x: string | any[] , y:(string[] | string)):number
{

    return x.length + y.length;
}

console.log(totallog("ABC",["123"]));
console.log(totallog([1,"ABC","addd"],["123"]));
// console.log(totallog(["ABC","def"],["123"]));
// 
// 
// 
/**
 * res Paramatter
 */

function showStudentInfo(name:string ,...course:string[]) :string
{
    return name + "Stude" + course.join(", ");
}

console.log(showStudentInfo("TrungPhu NA","ES6","OK","Typescript"));



/**
 * type
 */

let  showStudentInfo2 = function(name:string ,age:number) :string
{
    return name + "Stude" + course.join(", ");
}

let showStudentInfo3: (name:string ,age:number) => string =
    function(name,age)
    {
        return `Tên bạn là : ${name} , Tuổi : ${age}`;
    } 

console.log(showStudentInfo3("Phu",23));



/**
 * Arrow Function
 */

let f1 = function(i:number):number
{
    return i*i;
}
let f2 = function(i:number) {return i*i};

let f3 = (i:number) : number => {return i*i}; // arrow function
let f4 = (i:number)  => {return i*i}; // arrow function

let f5 = (i:number)  =>  i*i; // arrow function
console.log(f5(4));


/**
 * Overload
 *
 * 
 */


function abc(x:string):number 
{
    return 100;
}

console.log(abc("abc"));


function funcabc(x:string) : number;
function funcabc(x:number) : string;
function funcabc(x:any) : any
{
    if(typeof x == "string")
    {
        return 100;
    }
    else if(typeof x == "number")
    {
        return "abc";
    }

};
console.log(funcabc(12));