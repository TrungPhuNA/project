
// ================== Có lỗi===============================
// let student  = {
//     name: "Join",
//     courses:["adroid","php","Java"],
//     showInfo:function(){
//         this.courses.forEach(function(s){
//             console.log(`${this.name} là môn ${s}`);
//         });
//     }
// };


// ================== không ===============================

// let student  = {
//     name: "Join",
//     courses:["adroid","php","Java"],
//     showInfo:function(){
//         var _this =  this;
//         this.courses.forEach(function(s){
//             console.log(`${_this.name} là môn ${s}`);
//         });
//     }
// };


// ================== Th 3===============================

// let student  = {
//     name: "Join",
//     courses:["adroid","php","Java"],
//     showInfo:function(){
//         this.courses.forEach(function(s){
//             console.log(`${this.name} là môn ${s}`);
//         }.bind(this))
//     }
// };



// ================== Th 4 ===============================

let student  = {
    name: "Join",
    courses:["adroid","php","Java"],
    showInfo:function(){
        this.courses.forEach(s=>{
            console.log(`${this.name} là môn ${s}`);
        })
    }
};


student.showInfo();