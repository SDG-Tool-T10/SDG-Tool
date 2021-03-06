window.addEventListener('load', getTitles);
window.addEventListener('load', myFilter);
let allApprovedBlogs = []
let titles = [];
// For every blog, store it into a variable called blogpost (this is an HTML collection)
const blogposts = document.getElementsByClassName("blogPost");

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
    const input5 = document.getElementById("filter5").value;
    // All the values stored in an array
    const inputArray = [input1, input2, input3, input4, input5];
    const filteredInputArray = inputArray.filter(input => input !== "None");
    // This gets the data from the blogs and stores it in a variable
    const activities = document.getElementsByClassName("activity");
    const programs = document.getElementsByClassName("program");
    const business_operations = document.getElementsByClassName("businessOperation");
    const sdgs = document.getElementsByClassName("blogSDG");
    const research_groups = document.getElementsByClassName("researchGroup");
    const blogTitle = document.getElementsByClassName("blogTitle");

    // blogposts array into an array with objects because you can't use .innerText and .substring on a HTML collection
    Array.from(blogposts).forEach(function (blogpost, index) {
        let blog = {
            sdg: sdgs[index].innerText,
            activity: activities[index].innerText,
            business_operation: business_operations[index].innerText,
            program: programs[index].innerText,
            research_group: research_groups[index].innerText,
            title: blogTitle[index].innerText
        }
        allApprovedBlogs.push(blog);
    });
    // Loops over all the blogs and checks if the input/filter field matches with a blog and sets corresponding style
    allApprovedBlogs.forEach(function (blog, index) {
        let allMatch = true;
        filteredInputArray.forEach(function (input) {
            if (!Object.values(blog).includes(input)) {
                allMatch = false;
            }
        })
        if (allMatch) {
            blogposts[index].style.display = "block"
        } else {
            blogposts[index].style.display = "none"
        }
    });
}

/**
 * Get all the titles from the blogs
 */
function getTitles() {
    let titlesElement = document.querySelectorAll('.blogs .title');
    for (let i = 0; i < titlesElement.length; i++) {
        titles.push(titlesElement[i].innerText);
    }
    // console.log(titles);
}

/**
 * Check if the blog title includes the input text
 * TODO: work together with the select filter
 */
function textFilter() {
    let input = document.querySelector('#textFilter').value.toLowerCase();
    // console.log(input);
    // console.log(allApprovedBlogs);
    for (let i = 0; i < allApprovedBlogs.length; i++) {
        // console.log(allApprovedBlogs[i]['title']);
        if (!allApprovedBlogs[i]['title'].toLowerCase().includes(input)) {
            blogposts[i].style.display = "none";
        } else {
            blogposts[i].style.display = "block";
        }
    }
}
