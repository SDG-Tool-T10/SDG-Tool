function myFunction() {
    let input = document.getElementById("sdgId").value;
    let blogpost = document.getElementsByClassName("blogPost");
    let arr = Array.prototype.slice.call(blogpost);
    let sdgtest = document.getElementsByClassName("blogSDG");

    for (let i = 0; i < arr.length; i++) {
        if (input === sdgtest[i].innerText.substring(5) || input === "None") {
            console.log(sdgtest[i].innerText.substring(5) + ' do match');
            arr[i].style.display = "block";
        } else {
            console.log(sdgtest[i].innerText.substring(5) + ' do NOT match');
            arr[i].style.display = "none";
        }
    }
}
