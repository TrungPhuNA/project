
let dom = document.getElementById("mContent");


function showinfo(name , frice =  20)
{
    return `Tên khóa học :  <b>${name}</b>, Giá : <b>${frice}</b>`;
}
dom.style.color = '#0174DF';
dom.innerHTML = showinfo("TypeScript",300000);
