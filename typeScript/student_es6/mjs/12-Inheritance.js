class Person
{
    constructor(code , name, age )
    {
        this.code  = code ;
        this.name  = name ;
        this.age   = age;
    }

    showinfo()
    {
        console.log(this.code + " - " + this.nam + " - " + this.getAge());
    }


    getAge()
    {
        let today = new Date();
        let year = today.getFullYear();
        return year - this.age;
    }


}

class Student extends Person
{
    constructor(code , name, age ,score )
    {
        super(code,name,age);
        this.score = score;
    }

    showinfo()
    {
        super.showinfo();
        console.log(" -- " + this.score);
    }


}
let personObj = new Person("1221050082"," Trung Phú",1994);
personObj.showinfo();


let studentss = new Student("1221050082"," Trung Phú",1994,90);
studentss.showinfo();
