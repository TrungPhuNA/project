class Student
{
    constructor(code , name, age )
    {
        this.code  = code ;
        this.name  = name ;
        this.age   = age;
    }

    showinfo()
    {
        return this.code + " - " + this.nam + " - " + this.getAge();
    }


    getAge()
    {
        let today = new Date();
        let year = today.getFullYear();
        return year - this.age;
    }


}

let obj = new Student("SV001","Phan Trung Phú" ,1994);
console.log(obj.showinfo());