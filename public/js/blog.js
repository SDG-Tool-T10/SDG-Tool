/**
 * this function gets the value selected by a user in the SDG dropdown menu
 * and displays only the blogs with the matching SDG
 */
function myFilter() {
    // inputArray give you an array of all the selected filter input.
    let input1 = document.getElementById("filter1").value;
    let input2 = document.getElementById("filter2").value;
    let input3 = document.getElementById("filter3").value;
    let input4 = document.getElementById("filter4").value;
    let inputArray = [input1, input2, input3, input4];

    // blogArray gives you an array of data from one blog
    let activity = document.getElementsByClassName("activities");
    let program = document.getElementsByClassName("program");
    let business_operation = document.getElementsByClassName("businessOperation");
    let sdg = document.getElementsByClassName("blogSDG");

    // arr gives back the amount of blogs
    let blogpost = document.getElementsByClassName("blogPost");

    // contains of arrays with blogs
    let arrayOfBlogs = [];

    // pushes the array from blogpost(HTML collection) into a new array called arrayOfBlogs
    for (let i = 0; i < blogpost.length; i++) {
        arrayOfBlogs.push([sdg[i].innerText.substring(5),
            activity[i].innerText,
            business_operation[i].innerText.substring(20),
            program[i].innerText.substring(9)]);
    }

    console.log(inputArray);

    // loops over all the blogs, checks if the input matches with a blog and sets corresponding style.display
    for (let i = 0; i < arrayOfBlogs.length; i++) {
        let allMatch = true
        for (let j = 0; j < inputArray.length; j++) {
            if (inputArray[j] !== "None") {
                if (arrayOfBlogs[i][j] !== inputArray[j]) {
                    allMatch = false;
                }
            } 
        }
        if (allMatch) {
            blogpost[i].style.display = "block";
        } else {
            blogpost[i].style.display = "none";
        }
    }
}
