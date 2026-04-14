import { showNotification } from "./app.js";
const back = document.querySelector("#back");


const displayError = document.querySelector(".error");
async function sendData(data) {

    try {
        const response = await fetch("http://localhost/blog/api/", {
            body: JSON.stringify(data),
            method: "PUT",
            headers : {
                "Content-Type" : "application/json"
            }

        });
        if (!response.ok) {
            throw new Error(`error: ${response.status}`);
        }

        const result = await response.json();
        console.log(result)


    } catch (e) {
        console.error(e);
    }


}

form.addEventListener("submit", (e) => {
    e.preventDefault();
    let error = false;
    const form = document.querySelector("#form");
    const formData = new FormData(form);

    const category = formData.get("category");
    const status = formData.get("status");
    const title = formData.get("title");
    const body = formData.get("body");
    const id = formData.get("id");
    const featuredImage = formData.get("featured_image");

    if (category.length < 1 || status.length < 1 || body.length < 1 || title.length < 1) {
        displayError.textContent = "all fields aside featured image are required";
        error = true;
    }

    if (error === false) {

        const data = {
            title: title,
            status : status,
            body : body,
            category : category,
            id : id
        };
        // sending form to back end
        sendData(data);
    
    }


});

