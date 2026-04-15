import { showNotification } from "./app.js";
const back = document.querySelector("#back");
back.addEventListener("click", function(){
    history.back();
});
const displayError = document.querySelector(".error");
async function sendData(data) {

    try {
        const response = await fetch("http://localhost/blog/api/", {
            body: data,
            method: "POST",

        });
        if (!response.ok) {
            throw new Error(`error: ${response.status}`);
        }

        const result = await response.json();
        showNotification(result.success);


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
    const featuredImage = formData.get("featured_image");

    if (category.length < 1 || status.length < 1 || body.length < 1 || title.length < 1) {
        displayError.textContent = "all fields aside featured image are required";
        error = true;
    }

    if (error === false) {
        // sending form to back end
        sendData(formData);
    
    }


});

