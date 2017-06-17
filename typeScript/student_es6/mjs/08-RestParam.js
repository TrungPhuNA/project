

    function caculate(action , ...values)
    {
        let result = 0;
        console.log(values)
        switch(action)
        {
            case "+":
                for(let value of values ) result += value;
                break;
            case "-":
                for(let value of values ) result -= value;
                result += values[0];
                break;
        }
        return result ;
    }

    console.log(caculate("-",4,4));