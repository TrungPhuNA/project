"use strict";
class Product {
    constructor(id, name, image, summary, price, canBuy = true) {
        this.id = id;
        this.name = name;
        this.image = image;
        this.summary = summary;
        this.price = price;
        this.canBuy = canBuy;
    }
    get id() {
        return this._id;
    }
    set id(v) {
        this._id = v;
    }
    get name() {
        return this._name;
    }
    set name(v) {
        this._name = v;
    }
    get image() {
        return this._image;
    }
    set image(v) {
        this._image = v;
    }
    get summary() {
        return this._summary;
    }
    set summary(v) {
        this._summary = v;
    }
    get price() {
        return this._price;
    }
    set price(v) {
        this._price = v;
    }
    get canBuy() {
        return this._canBuy;
    }
    set canBuy(v) {
        this._canBuy = v;
    }
}
exports.Product = Product;
