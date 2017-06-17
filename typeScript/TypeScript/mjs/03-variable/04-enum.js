/**
 *  lưu trữ các con số
 */
var STATUS;
(function (STATUS) {
    STATUS[STATUS["CREATED"] = 0] = "CREATED";
    STATUS[STATUS["PROSESS"] = 1] = "PROSESS";
    STATUS[STATUS["FINISH"] = 990] = "FINISH";
})(STATUS || (STATUS = {}));
;
// let todustatus : STATUS = STATUS.CREATED;
let todustatus = STATUS.PROSESS;
console.log(todustatus);
