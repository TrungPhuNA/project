
    let eml = document.getElementById("mContent");
    eml.style.color = '#0174DF';

    /* ghi chú
    let name  = "TypeScript";
    let price = "100$";
    eml.innerHTML = `<div>Họ Tên <b>${name}</b> <i style="color: red">${price}</i></div>`;

     */
    let todo = {
        id:69,
        name: 'Play Football',
        status: false
    }

    eml.innerHTML = `<div class="todo-id-${todo.id}">
                        <i class="${todo.status == true ? "hidden" : ""} glyphicon glyphicon-ok"></i>
                        <span class="name">${todo.name}</span>
                    </div>`;