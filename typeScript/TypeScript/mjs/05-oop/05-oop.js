// class Task {
//     id:number;
//     name:string;
//     state:string;
//     constructor(id:number,name:string , state:string)
//     {
//         this.id    = id;
//         this.name  = name;
//         this.state = state;
//     },
//     showInfo()
//     {
//         console.log(`${this.id} Tên là : ${this.name} ${this.state}`);
//     }
// }
// let task1 = new Task(19,"Phú","OK");
// console.log(task1.showInfo(19,"Phú","OK"));
/*
enum TaskStake
{
    Create  =  100,
    Active  ,
    Inactive,
    Prosess,
    Finish
}

interface TaskInterface
{
    id:number;
    name:string;
    state?:TaskStake;
}


class TaskServer{
    
   tasks: TaskInterface[];

   constructor(tasks: TaskInterface[])
   {
       this.tasks = tasks;
   }

   getItems()
   {
       return this.tasks;
   }
}
let tasks: TaskInterface[] = [
    {id:1, name:"Codding"},
    {id:2, name:"CS6"},
    {id:2, name:"CS6",state:TaskStake.Active}
];
let tasksObj = new TaskServer(tasks);
console.log(tasksObj.getItems());*/
/**
 * STATIC
 */
var TaskStake;
(function (TaskStake) {
    TaskStake[TaskStake["Create"] = 100] = "Create";
    TaskStake[TaskStake["Active"] = 101] = "Active";
    TaskStake[TaskStake["Inactive"] = 102] = "Inactive";
    TaskStake[TaskStake["Prosess"] = 103] = "Prosess";
    TaskStake[TaskStake["Finish"] = 104] = "Finish";
})(TaskStake || (TaskStake = {}));
class TaskServer {
    constructor(tasks) {
        this.tasks = tasks;
    }
    getItems() {
        return this.tasks;
    }
    static showIteminfo() {
        for (let task of tasks) {
            console.log(` ${TaskServer.username} ${task.name}`);
        }
    }
}
TaskServer.username = "join";
let tasks = [
    { id: 1, name: "Codding" },
    { id: 2, name: "CS6" },
    { id: 2, name: "CS6", state: TaskStake.Active }
];
let tasksObj = new TaskServer(tasks);
console.log(TaskServer.username);
console.log(TaskServer.showIteminfo());
console.log(tasksObj.getItems());
/**
 * Inhertitane
 */
class Course {
    constructor(id, name, sale) {
        this.id = id;
        this.name = name;
        this.sale = sale;
    }
    showCourse() {
        console.log(`${this.id} + ${this.name} + ${this.sale}`);
    }
}
class CourseMobile extends Course {
    constructor(id, name, sale, author) {
        super(id, name, sale);
        this.author = author;
    }
    showCourse() {
        super.showCourse();
        console.log(this.author);
    }
}
var objCourse = new Course(19, "Phan Trung Phú", 1990);
objCourse.showCourse();
var objCourses = new CourseMobile(19, "Phan Trung Phú", 1990, "Name");
objCourses.showCourse();
/**
 *                 Inside    Outsite       Child class
 * public           +            +             +
 * private          +            -             _
 * protected        +            ?             +
 */
/**
 * Abstract
 */
class Laptop {
    keyboard() {
        console.log("Laptop.keyboard");
    }
    chipset() {
        console.log("Laptop.chipset");
    }
}
class LaptopDell extends Laptop {
    keyboard() {
        console.log("LaptopDell.keyboard");
    }
    mainbroard() {
        console.log("LaptopDell.mainbroard");
    }
}
let laptopObj = new LaptopDell();
laptopObj.chipset();
laptopObj.mainbroard();
laptopObj.keyboard();
class Superman {
    constructor(name) {
        this.name = name;
    }
    eat() {
        console.log("Ok");
    }
    sleep() {
        console.log("Ok");
    }
}
let Join = new Superman("Join");
Join.eat();
