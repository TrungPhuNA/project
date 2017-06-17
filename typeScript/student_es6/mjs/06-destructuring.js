

    /**
     * CASE 1
     * @type {[type]}
     */
    let arr = 
    [
        133,
        "ES6",
        false
    ];
    // let id   = arr[0];
    // let name = arr[1];
    // let free = arr[2];
    //  let [id,name,free] = arr ;
    // console.log(id + " : " + name + ' : ' + free);
   

   /**
     * CASE 2
     * @type {[type]}
     */
    
    let obj = {
        id:34,
        name:"ES6",
        free:true
    };
    let {name,id,free ,createby = "admin "} = obj;

    console.log(id + " : " + name + ' : ' + free + " : " + createby);