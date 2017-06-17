

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
   public static username :string = "join";
   tasks: TaskInterface[];

   constructor(tasks: TaskInterface[])
   {
       this.tasks = tasks;
   }

   getItems()
   {
       return this.tasks;
   }

   static showIteminfo()
   {
       for(let task of tasks)
       {
           console.log(` ${TaskServer.username} ${task.name}`);
       }
   }
}
let tasks: TaskInterface[] = [
    {id:1, name:"Codding"},
    {id:2, name:"CS6"},
    {id:2, name:"CS6",state:TaskStake.Active}
];
let tasksObj = new TaskServer(tasks);

console.log(TaskServer.username);
console.log(TaskServer.showIteminfo());
console.log(tasksObj.getItems());


/**
 * Inhertitane
 */

class Course{
    
    id:number;
    name:string;
    sale:number;

    constructor(id:number,name:string,sale:number) {
        this.id    = id;
        this.name  = name;
        this.sale  = sale;
    }

    showCourse():void
    {
        console.log(`${this.id} + ${this.name} + ${this.sale}`);
    }
}

class CourseMobile extends Course
{
    author:string;
    constructor(id:number,name:string,sale:number,author:string) 
    {
        super(id,name,sale);
        this.author = author;
    }

    showCourse():void
    {
        super.showCourse();
        console.log(this.author);
    }

}

var objCourse = new Course(19,"Phan Trung Phú",1990);
objCourse.showCourse();

var objCourses = new CourseMobile(19,"Phan Trung Phú",1990,"Name");
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

abstract class Laptop
{
    public keyboard():void
    {
        console.log("Laptop.keyboard");
    }

    public abstract mainbroard():void ;

    public chipset():void
    {
        console.log("Laptop.chipset");
    }

}


class  LaptopDell extends Laptop {
    public keyboard():void
    {
        console.log("LaptopDell.keyboard");
    }
    public  mainbroard():void
    {
         console.log("LaptopDell.mainbroard");
    }
}
let laptopObj : Laptop = new LaptopDell();
laptopObj.chipset();
laptopObj.mainbroard();
laptopObj.keyboard();


/**
 * Interface
 */

interface People
{
    name:string;
    eat():void;
    sleep():void;
}


class Superman implements People {
    name:string;
    constructor(name:string)
    {
        this.name = name;
    }
    eat():void
    {
        console.log("Ok");
    }

    sleep():void
    {
        console.log("Ok");
    }
}

let Join : Superman = new Superman("Join");
Join.eat();