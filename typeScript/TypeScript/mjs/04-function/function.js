console.log("OK");
function NoReturn() {
    console.log(" No return");
}
function Return() {
    return 4;
}
function StringReturn() {
    return ["a", "b"];
}
function AnyReturn() {
    return ["a", "b"];
}
console.log(AnyReturn());
/**
 * Param
 */
// dday du cac tham so
function showInfo1(name, age) {
    return `Tên bạn là : ${name} , Tuổi : ${age}`;
}
// tham so macc dinh
function showInfo2(name = "Trung Phu NA", age = 94) {
    return `Tên bạn là : ${name} , Tuổi : ${age}`;
}
// tham so khuyet
function showInfo3(name = "Trung Phu NA", age) {
    if (age == null) {
        return `Tên bạn là : ${name}`;
    }
    else {
        return `Tên bạn là : ${name} , Tuổi : ${age}`;
    }
}
// console.log(showInfo3());
// 
// 
// 
function totallog(x, y) {
    return x.length + y.length;
}
console.log(totallog("ABC", ["123"]));
console.log(totallog([1, "ABC", "addd"], ["123"]));
// console.log(totallog(["ABC","def"],["123"]));
// 
// 
// 
/**
 * res Paramatter
 */
function showStudentInfo(name, ...course) {
    return name + "Stude" + course.join(", ");
}
console.log(showStudentInfo("TrungPhu NA", "ES6", "OK", "Typescript"));
/**
 * type
 */
let showStudentInfo2 = function (name, age) {
    return name + "Stude" + course.join(", ");
};
let showStudentInfo3 = function (name, age) {
    return `Tên bạn là : ${name} , Tuổi : ${age}`;
};
console.log(showStudentInfo3("Phu", 23));
/**
 * Arrow Function
 */
let f1 = function (i) {
    return i * i;
};
let f2 = function (i) { return i * i; };
let f3 = (i) => { return i * i; }; // arrow function
let f4 = (i) => { return i * i; }; // arrow function
let f5 = (i) => i * i; // arrow function
console.log(f5(4));
/**
 * Overload
 *
 *
 */
function abc(x) {
    return 100;
}
console.log(abc("abc"));
function funcabc(x) {
    if (typeof x == "string") {
        return 100;
    }
    else if (typeof x == "number") {
        return "abc";
    }
}
;
console.log(funcabc(12));
