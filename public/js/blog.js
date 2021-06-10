/**
 * this function gets the value selected by a user in the SDG dropdown menu
 * and displays only the blogs with the matching SDG
 */
function myFilter() {
    // All the values of the 4 different input/filter fields
    const input1 = document.getElementById("filter1").value;
    const input2 = document.getElementById("filter2").value;
    const input3 = document.getElementById("filter3").value;
    const input4 = document.getElementById("filter4").value;

    // All the values stored in an array
    const inputArray = [input1, input2, input3, input4];

    // This gets the data from the blogs and stores it in a variable
    const activity = document.getElementsByClassName("activity");
    const program = document.getElementsByClassName("program");
    const business_operation = document.getElementsByClassName("businessOperation");
    const sdg = document.getElementsByClassName("blogSDG");
    // console.log(activity);

    // For every blog, store it into a variable called blogpost (this is an HTML collection)
    const blogposts = document.getElementsByClassName("blogPost");
    // console.log(blogposts);

    // Empty array that will contain all the viewable blogs (so not pending)
    let allApprovedBlogs = [];
    // console.log(allApprovedBlogs);

    // For every blog in blogposts(HTML collection), push data into a new array called allApprovedBlogs (array containing arrays)
    for (let i = 0; i < blogposts.length; i++) {
        allApprovedBlogs.push([
            sdg[i].innerText.substring(5),
            activity[i].innerText.substring(10),
            business_operation[i].innerText.substring(20),
            program[i].innerText.substring(9)]);
    }

    // Loops over all the blogs and checks if the input/filter field matches with a blog and sets corresponding style.display
    for (let i = 0; i < allApprovedBlogs.length; i++) {
        let allMatch = true
        for (let j = 0; j < inputArray.length; j++) {
            if (inputArray[j] !== "None") {
                if (allApprovedBlogs[i][j] !== inputArray[j]) {
                    allMatch = false;
                }
            }
        }
        if (allMatch) {
            blogposts[i].style.display = "block";
        } else {
            blogposts[i].style.display = "none";
        }
    }
}
