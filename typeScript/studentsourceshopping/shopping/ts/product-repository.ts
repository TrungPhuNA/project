import { Product } from "./product";
import { Helpers } from "./libs/helpers";

export class ProductRepository {
	private products: Product[] = [];

	constructor(){
		this.addItem(new Product(100, "bulbasaur", "bulbasaur.png", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, velit.", 69));
        this.addItem(new Product(101, "charmander", "charmander.png", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, velit.", 18));
        this.addItem(new Product(102, "ivysaur", "ivysaur.png", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, velit.", 22));
        this.addItem(new Product(103, "squirtle", "squirtle.png", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, velit.", 65));
        this.addItem(new Product(104, "venusaur", "venusaur.png", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, velit.", 19, false));
	}

	public addItem(product: Product){
		this.products[this.products.length] = product;
	}

	public getItems() : Product[] {
		return this.products;
	}

	public getItemByID(id : number) : Product {
		// Case 01
		let total : number = this.products.length;
		for(let i : number = 0; i < total; i++) {
			if(this.products[i].id == id) return this.products[i];
		}
		return null;

		// Case 02
		// let filter : Product[] = this.products.filter(
		// 	product => product.id == id
		// );

		// if(filter.length > 0) return filter[0];
		// return null;
	}

	public showItemsInHTML() : string {
		let total : number = this.products.length;
		let xhtmlResult: string = "";

		if(total > 0) {
			for(let i  : number = 0; i < total; i++) {
				let currentItem: Product = this.products[i];
				xhtmlResult += `<div class="media product">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="img/characters/${ currentItem.image }" alt="${ currentItem.name }">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">${ currentItem.name }</h4>
                                    <p>${ currentItem.summary }</p>
                                    ${ this.showBuyItemInHTML(currentItem)}
                                </div>
                            </div>`;
			}
		}else {
			xhtmlResult = "Empty product in my shop";
		}
		
		return xhtmlResult;
	}

	private showBuyItemInHTML(product: Product) : string {
		let xhtmlResult: string = "";

		if (product.canBuy == true){
			xhtmlResult = `<input name="quantity-product-${ product.id }" type="number" value="1" min="1">
    						<a data-product="${ product.id }" href="#" class="price"> ${ Helpers.toCurrency(product.price, "USD", "right") } </a>`;
		}else{
			xhtmlResult = `<span class="price">${ Helpers.toCurrency(product.price, "$") }</span>`;
		}
		return xhtmlResult;
	}
}