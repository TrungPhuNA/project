

    let todoArr = [
        "Play Football",
        "Codding",
        "Study TypeScritp"
    ];

    //=================== CASE 1=======================
    // console.log(todoArr);
    // let lenght = todoArr.length; 
    // for (var i = 0; i <= lenght ; i++) {
    //     console.log(todoArr[i]);
    // }


     //=================== CASE 2=======================
     //
    // for(let index in todoArr)
    // {
    //     console.log(index + " : " + todoArr[index]);
    // }


    //=================== CASE 3=======================
    // for(let todo of todoArr)
    // {
    //     console.log(todo);
    // }

    //=================== CASE 3=======================
     let todoObj = {
        id:69,
        name: 'Play Football',
        status: false
    }

    for(let index in todoObj)
    {
        console.log(index + " : " + todoObj[index]);
    }