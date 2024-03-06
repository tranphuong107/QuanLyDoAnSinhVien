iconAdd = document.querySelector(".iconAdd");
formAdd = document.querySelector(".formAdd");
button = document.querySelector(".addTask button");

let inputAdd = [...document.querySelectorAll(".form-control1")];
function handleClickAdd(event) {
    formAdd.insertAdjacentHTML(
        "beforeend",
        ` <div class="row taskAdd">
        <div class="box col-md-5">
            <label for="" class="w-100">Nội dung:</label>
            <input  class="form-control1 w-100"type="text"autocomplete="off" style="font-weight:500;border-radius:3px" >
        </div>
        <div class="box col-md-3">
            <label for="date"class="w-100">Ngày bắt đầu:</label>
            <div class="input-group date" id="datepicker">
                <input type="date" class="form-control1" id="date" style="font-weight:500;border-radius:3px"/>
            </div>
        </div>
        <div class="box col-md-3">
            <label for="date"class="w-100">Ngày kết thúc:</label>
            <div class="input-group date" id="datepicker">
                <input type="date" class="form-control1" id="date" style="font-weight:500;border-radius:3px;min-width: 20px;"/>
            </div>
        </div>
        <div class="box col-md-1" style="width:30px">
            <i class="bi bi-dash-circle iconDelete" onclick="handleClickDelete(event)"></i>
            <i class="bi bi-plus-circle float-end iconAdd" onclick="handleClickAdd(event)"></i>
        </div>
    </div>
</div>`
    );
    iconClick = event.target;
    iconClick.classList.add("eDisabled");

    taskAddE = document.querySelectorAll(".taskAdd");
    inputAddE = formAdd.lastChild;
    inputAdd = [...document.querySelectorAll(".form-control1")];
}
const handleClickDelete = (event) => {
    iconDelete = event.target;
    divDelete = iconDelete.parentNode;
    taskAdd = divDelete.parentNode;
    form = taskAdd.parentNode;
    const lastTask = form.children[form.children.length - 1];
    if (taskAdd === lastTask) {
        const nodePre = form.children[form.children.length - 2];
        nodePre.insertAdjacentHTML(
            "beforeend",
            `<div class="box col-md-1" style="width:70px" >
            <i class="bi bi-plus-circle float-end iconAdd" onclick="handleClickAdd(event)"></i>
            </div>`
        );
    }
    taskAdd.remove()
};

function handleAdd() {
    const message = document.querySelector("#popup-error");
    let inputs = document.querySelectorAll(".form-control1");
    for (const input of inputs) {
        if (input.value === "") {
            console.log(message);
            message.style.display = "block";
            setTimeout(() => {
                message.style.display = "none";
                message.style.transition = "all .5s;";
            }, 3000);
            input.focus();
            break;
        }
    }
}

function menuToggle() {
    const toggleMenu = document.querySelector(".sidebar");
    main = document.querySelector(".main");
    const pageLogo = document.querySelector(".page-logo");
    toggleMenu.classList.toggle("active");
    main.classList.toggle("active");
    pageLogo.classList.toggle("active");
}
