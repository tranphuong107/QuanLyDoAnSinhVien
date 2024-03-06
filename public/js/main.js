const message = document.querySelector("#popup-error");
const theP = document.querySelector("#message");
const handleDk = (e) => {
    let inputs = document.querySelectorAll(".form-control1");
    console.log(inputs);
    for (const input of inputs) {
        if (input.value === "") {
            switch (input.id) {
                case "tendetai":
                    theP.innerHTML = "Hãy điền tên đề tài";
                    break;
                case "nghiencuu":
                    theP.innerHTML = "Hãy chọn hướng nghiên cứu";
                    break;
                case "noidung":
                    theP.innerHTML = "Hãy điền nội dung đề tài";
                    break;
                default:
                    break;
            }
            message.style.display = "block";
            setTimeout(() => {
                message.style.transition = "all .5s;";
                message.style.display = "none";
            }, 3000);
            input.focus();
            break;
        }
    }
};

const handleChoose = () => {
    let file = document.querySelectorAll("#file");
    console.log(file[0].value);
    if (file[0].value === "") {
        message.style.display = "block";
        setTimeout(() => {
            message.style.transition = "all .5s;";
            message.style.display = "none";
        }, 3000);
    }
};

const handleChangePass = (e) => {
    let inputs = document.querySelectorAll(".form-control1");
    let mkmoi = document.querySelector("#mkmoi");
    let nhaplaimk = document.querySelector("#nhaplaimk");

    console.log(nhaplaimk.value);
    for (const input of inputs) {
        if (input.value === "") {
            message.style.display = "block";
            setTimeout(() => {
                message.style.transition = "all .5s;";
                message.style.display = "none";
            }, 3000);
            input.focus();
            break;
        }

        if (mkmoi.value !== nhaplaimk.value) {
            theP.innerHTML = "Vui lòng nhập lại đúng mật khẩu trên";
            message.style.display = "block";
            setTimeout(() => {
                message.style.transition = "all .5s;";
                message.style.display = "none";
            }, 3000);
            nhaplaimk.focus();
        }
    }
};

const handleNx = () => {
    let inputs = document.querySelectorAll(".form-control1");
    console.log(inputs);
    for (const input of inputs) {
        if (input.value === "") {
            message.style.display = "block";
            setTimeout(() => {
                message.style.transition = "all .5s;";
                message.style.display = "none";
            }, 3000);
            input.focus();
            break;
        } else {
            document.getElementById("popup-nx").style.display = "none";
            input.value = "";
        }
    }
};

const myList = document.querySelectorAll(".sidebar ul");
// console.log(myList);
const activeList = () => {
    const list = [...myList];
    for (let i = 0; i < list.length; i++) {
        list[i].addEventListener("click", () => {
            let j = 0;
            while(j<list.length){
                list[j++].classList.remove("active")
            }
            list[i].classList.add("active");
        });
    }
    // console.log(list);
};
// activeList();

//sửa tên đề tài
const handleUTopic = (e) => {
    let updateTopic = document.querySelector(".updateTopic");
    console.log(updateTopic);
        if (updateTopic.value === "") {
            message.style.display = "block";
            setTimeout(() => {
                message.style.transition = "all .5s;";
                message.style.display = "none";
            }, 3000);
            updateTopic.focus();
        }
};
