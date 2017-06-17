
// import  {Product} from "./product";

class ProductRepository {
    
    private products : Product[] = [];
    constructor(argument) {
        
    }

    public addItem(product:Product)
    {

    }

    getItems() : Product[]
    {
        return [];
    }

    getItemById(id : number) : Product
    {
        return new Product();
        // return [];
    }
    public showItemsInHTML() : string 
    {
        return "ABC";
    }
}