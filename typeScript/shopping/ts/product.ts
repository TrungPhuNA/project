class Product  {
    
    private _id:number ;
    private _name:string ;
    private _image:string;
    private _summary:string;
    private _price:number;
    private _canbuy:boolean;
    public get id() : number {
        return this._id;
    }

    public set id(v : number) {
        this._id = v;
    }

    public get name() : string {
        return this._name;
    }

    public set name(v : string) {
        this._name = v;
    }

     public get image() : string {
        return this._image;
    }

    public set image(v : string) {
        this._image = v;
    }

    public get summary() : string {
        return this._summary;
    }

    public set summary(v : string) {
        this._summary = v;
    }

    public get price() : number {
        return this._price;
    }

    public set price(v : number) {
        this._price = v;
    }

    public get canbuy() : boolean {
        return this._canbuy;
    }

    public set canbuy(v : boolean) {
        this._canbuy = v;
    }



    constructor(argument) {
        // code...
    }
}