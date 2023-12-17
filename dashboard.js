function showContentBox() {
    var contentBox = document.getElementById("contentContainer");
    contentBox.innerHTML = "<div class='user-content-box'><h2>" + document.getElementById("title").value + "</h2><p>" + document.getElementById("content").value + "</p><p>Genre: " + document.getElementById("genre").value + "</p></div>";
    contentBox.style.display = "block";
}

document.addEventListener("DOMContentLoaded", function () {
    var modal = document.getElementById("myModal");

    var enterButton = document.getElementById("enterButton");

    modal.style.display = "block";
    button.style.display = "none"
    enterButton.onclick = function() {
        modal.style.display = "none"
        button.style.display = "block"
    }
});

var button = document.getElementById("writebutton");

button.addEventListener("scroll", function() {
  this.style.position = "fixed";
  this.style.bottom = "0";
  this.style.right = "0";
});

var write = document.getElementById("writepop");

button.onclick = function(){
    write.style.display = "block"
    if (write.style.display = "block") {
         writebutton.style.display = "none"   
    }
    else {
        button.style.display = "button"
    }

};
document.getElementById("noteForm").addEventListener("submit", function (event) {
    event.preventDefault();
    showContentBox();
    addNote();
});