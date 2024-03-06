let tableHead = document.querySelector(".table-kehoach thead")

function openPopup() {
    document.getElementById("popup-nop").style.display="block"
}
function closePopup() {
    document.getElementById("popup-nop").style.display="none"
    document.querySelector("#labelFile").innerHTML="Bạn chưa chọn file nào"
    let file = document.querySelectorAll("#file");
    file[0].value = null

}
function openPopupnx() {
    document.getElementById("popup-nx").style.display="block"
}
function closePopupnx() {
    document.getElementById("popup-nx").style.display="none"


}
function closePopupUTopic(){
    let updateTopic = document.querySelector(".updateTopic");
    document.getElementById("popup-nop").style.display="none"
    updateTopic.value =""

}


// chọn file
fileChoose = document.querySelector("#file")
fileChoose?.addEventListener("change",function() {
    filename = this.files[0].name;
    document.querySelector("#labelFile").innerHTML=filename
})


//  xem điểm sinh viên do gv hướng dẫn
function openPopupXem() {
    document.getElementById("popup-xem").style.display="block"
    // tableHead.style.position="relative"
}
function closePopupXem() {
    document.getElementById("popup-xem").style.display="none"

}
// gv cho điểm sinh viên