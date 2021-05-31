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
    let businessoperation = document.getElementsByClassName("businessOperation");
    let sdg = document.getElementsByClassName("blogSDG");

    // arr gives back the amount of blogs
    let blogpost = document.getElementsByClassName("blogPost");
    let arr = Array.prototype.slice.call(blogpost);

    // contains of arrays with blogs
    let ArrayOfBlogs = [];

    for (let i = 0; i < blogpost.length; i++) {
        ArrayOfBlogs.push([sdg[i].innerText.substring(5),
            activity[i].innerText,
            businessoperation[i].innerText.substring(20),
            program[i].innerText.substring(9)]);
    }

    let filteredArray = inputArray.filter(function(currentElement){
        if (currentElement !== "None"){
            return true
        }
    })

    // console.log(ArrayOfBlogs[0])
    // console.log(inputArray)

    for (let i = 0; i < ArrayOfBlogs.length; i++){
        if (ArrayOfBlogs[i].includes(filteredArray)){
            console.log(ArrayOfBlogs[i])
        }
    }

    // for (let i = 0; i < inputArray.length; i++){
    //     if (inputArray[i] !== "None"){
    //         // console.log(inputArray[i]);
    //         for (let j = 0; j < ArrayOfBlogs.length; j++){
    //             console.log(ArrayOfBlogs[j].includes(filteredArray))
    //             // console.log(inputArray);
    //         }
    //     } else {
    //         // console.log(inputArray[i]);
    //     }
    // }
}


//
//
// /**
//  * this function gets the value selected by a user in the activity dropdown menu
//  * and displays only the blogs with the matching activity
//  */
// function myActivity() {
//     let input = document.getElementById("ActivityId").value;
//     let blogpost = document.getElementsByClassName("blogPost");
//     let arr = Array.prototype.slice.call(blogpost);
//     let activity = document.getElementsByClassName("activities");
//
//     //if the user selected input is equal to an activity of a blog or multiple blogs, only show those blogs
//     //if there is no input ("None), show all blogs.
//     //otherwise, if the input does match the activity of a blog, then it will not be displayed
//     for (let i = 0; i < arr.length; i++) {
//         if (input === activity[i].innerText.substring(0) || input === "None") {
//             console.log(activity[i].innerText.substring(0) + ' do match');
//             arr[i].style.display = "block";
//         } else {
//             console.log(activity[i].innerText.substring(0) + ' do NOT match');
//             arr[i].style.display = "none";
//         }
//     }
//     //if input equals None, the dropdown menu will show "Filter on activities"
//     if (input === "None") {
//         document.getElementById("ActivityId").value = "two";
//     }
// }
//
// /**
//  * this function gets the value selected by a user in the business operation dropdown menu filters over each business operation
//  * of all the current blogs and displays only the blogs with the matching business operation
//  */
// function myBusiness() {
//     let input = document.getElementById("BusinessId").value;
//     let blogpost = document.getElementsByClassName("blogPost");
//     let arr = Array.prototype.slice.call(blogpost);
//     let businessOperation = document.getElementsByClassName("businessOperation");
//
//     // console.log(sdgtest);
//
//     //if the user selected input is equal to a business operation of a blog or multiple blogs, only show those blogs
//     //if there is no input ("None), show all blogs.
//     //otherwise, if the input does match the business operation of a blog, then it will not be displayed
//     for (let i = 0; i < arr.length; i++) {
//
//         if (input === businessOperation[i].innerText.substring(20) || input === "None") {
//             console.log(businessOperation[i].innerText.substring(20) + ' do match');
//             arr[i].style.display = "block";
//         } else {
//             console.log(businessOperation[i].innerText.substring(20) + ' do NOT match');
//             arr[i].style.display = "none";
//         }
//     }
//     //if input equals None, the dropdown menu will show "Filter on Business Operations"
//     if (input === "None") {
//         document.getElementById("BusinessId").value = "three";
//     }
// }
//
// /**
//  * this function gets the value selected by a user in the program dropdown menu filters over each program of
//  * of all current blogs and displays only the blogs with the matching program
//  */
// function myProgram() {
//     let input = document.getElementById("ProgramId").value;
//     let blogpost = document.getElementsByClassName("blogPost");
//     let arr = Array.prototype.slice.call(blogpost);
//     let program = document.getElementsByClassName("program");
//
//     // console.log(program);
//
//     //if the user selected input is equal to a program of a blog or multiple blogs, only show those blogs
//     //if there is no input ("None), show all blogs.
//     //otherwise, if the input does match the program of a blog, then it will not be displayed
//     for (let i = 0; i < arr.length; i++) {
//
//         if (input === program[i].innerText.substring(9) || input === "None") {
//             console.log(program[i].innerText.substring(9) + ' do match');
//             arr[i].style.display = "block";
//         } else {
//             console.log(program[i].innerText.substring(9) + ' do NOT match');
//             arr[i].style.display = "none";
//         }
//     }
//     //if input equals None, the dropdown menu will show "Filter on programs"
//     if (input === "None") {
//         document.getElementById("ProgramId").value = "four";
//     }
// }
