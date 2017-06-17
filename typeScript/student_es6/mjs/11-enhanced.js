
/** =============Property Shorthand ============= */
// function getCourse(name, price , free)
// {
//     return {
//         name,
//         price,
//         free
//     }
// }


/** =============Computed Property Names ============= */



// console.log(getCourse("PHP",19000000,true));
function getCourse(name, price , free)
{
    return {
        name,
        price,
        free,
        showinfo:function()
        {
            console.log(`${name + price + free}`);
        },
        showinfo2:function()
        {
            console.log(`${name + price + free}`);
        },
        showinfo3:function(string)
        {
            console.log(`${name + price + free + string}`);
        }
    }
}


var myCource = getCourse("PHP",19000000,true);
myCource.showinfo();
myCource.showinfo2();
myCource.showinfo3("_____");
console.log(myCource);
/** =============Method Properties ============= */

let propPrice = "SUPPORT_";
let bootstrapSupport = 
{
    [propPrice + "chome"] :true,
    [propPrice + "i"]: true,
    [propPrice + "friefox"]:false
}
console.log(bootstrapSupport);