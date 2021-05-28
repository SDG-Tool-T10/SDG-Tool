/**
 * this function gets the value selected by a user in the SDG dropdown menu
 * and displays only the blogs with the matching SDG
 */
function mySDG() {
    let input = document.getElementById("sdgId").value;
    let blogpost = document.getElementsByClassName("blogPost");
    let arr = Array.prototype.slice.call(blogpost);
    let sdg = document.getElementsByClassName("blogSDG");

    console.log(sdg);
    console.log(input);

    //if the user selected input is equal to an SDG of a blog or multiple blogs, only show those blogs
    //if there is no input ("None), show all blogs.
    //otherwise, if the input does not match the SDG of a blog, then it will not be displayed
    for (let i = 0; i < arr.length; i++) {
        if (input === sdg[i].innerText.substring(5) || input === "None") {
            console.log(sdg[i].innerText.substring(5) + ' do match');
            arr[i].style.display = "block";
        } else {
            console.log(sdg[i].innerText.substring(5) + ' do NOT match');
            arr[i].style.display = "none";
        }
    }
    //if input equals None, the dropdown menu will show "Filter on programs"
    if (input === "None") {
        document.getElementById("sdgId").value = "one";
    }
}

/**
 * this function gets the value selected by a user in the activity dropdown menu
 * and displays only the blogs with the matching activity
 */
function myActivity() {
    let input = document.getElementById("ActivityId").value;
    let blogpost = document.getElementsByClassName("blogPost");
    let arr = Array.prototype.slice.call(blogpost);
    let activity = document.getElementsByClassName("activities");

    //if the user selected input is equal to an activity of a blog or multiple blogs, only show those blogs
    //if there is no input ("None), show all blogs.
    //otherwise, if the input does match the activity of a blog, then it will not be displayed
    for (let i = 0; i < arr.length; i++) {

        if (input === activity[i].innerText.substring(0) || input === "None") {
            console.log(activity[i].innerText.substring(0) + ' do match');
            arr[i].style.display = "block";
        } else {
            console.log(activity[i].innerText.substring(0) + ' do NOT match');
            arr[i].style.display = "none";
        }
    }
    //if input equals None, the dropdown menu will show "Filter on activities"
    if (input === "None") {
        document.getElementById("ActivityId").value = "two";
    }
}

/**
 * this function gets the value selected by a user in the business operation dropdown menu filters over each business operation
 * of all the current blogs and displays only the blogs with the matching business operation
 */
function myBusiness() {
    let input = document.getElementById("BusinessId").value;
    let blogpost = document.getElementsByClassName("blogPost");
    let arr = Array.prototype.slice.call(blogpost);
    let businessOperation = document.getElementsByClassName("businessOperation");

    // console.log(sdgtest);

    //if the user selected input is equal to a business operation of a blog or multiple blogs, only show those blogs
    //if there is no input ("None), show all blogs.
    //otherwise, if the input does match the business operation of a blog, then it will not be displayed
    for (let i = 0; i < arr.length; i++) {

        if (input === businessOperation[i].innerText.substring(20) || input === "None") {
            console.log(businessOperation[i].innerText.substring(20) + ' do match');
            arr[i].style.display = "block";
        } else {
            console.log(businessOperation[i].innerText.substring(20) + ' do NOT match');
            arr[i].style.display = "none";
        }
    }
    //if input equals None, the dropdown menu will show "Filter on Business Operations"
    if (input === "None") {
        document.getElementById("BusinessId").value = "three";
    }
}

/**
 * this function gets the value selected by a user in the program dropdown menu filters over each program of
 * of all current blogs and displays only the blogs with the matching program
 */
function myProgram() {
    let input = document.getElementById("ProgramId").value;
    let blogpost = document.getElementsByClassName("blogPost");
    let arr = Array.prototype.slice.call(blogpost);
    let program = document.getElementsByClassName("program");

    // console.log(program);

    //if the user selected input is equal to a program of a blog or multiple blogs, only show those blogs
    //if there is no input ("None), show all blogs.
    //otherwise, if the input does match the program of a blog, then it will not be displayed
    for (let i = 0; i < arr.length; i++) {

        if (input === program[i].innerText.substring(9) || input === "None") {
            console.log(program[i].innerText.substring(9) + ' do match');
            arr[i].style.display = "block";
        } else {
            console.log(program[i].innerText.substring(9) + ' do NOT match');
            arr[i].style.display = "none";
        }
    }
    //if input equals None, the dropdown menu will show "Filter on programs"
    if (input === "None") {
        document.getElementById("ProgramId").value = "four";
    }
}
