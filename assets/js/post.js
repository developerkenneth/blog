// Current URL: https://example.com
const urlParams = new URLSearchParams(window.location.search);
let id = urlParams.get('id');

// Add a temporary loading UI immediately
document.body.innerHTML = `<p style="text-align:center">Loading...</p>`;

function displayPost(post) {
    const postContent = `
        <section id="post">

        <div class="container">
            <header>
                <button class="ret">Blog ></button> <button class="rer">Category</button>
                <h1 class="title">${post.title}</h1>

                <img class="blogroom" src="images/blog room.jpg" alt="">
        </div>
        </header>

        <div class="another">
            <img class="indian" src="./assets/img/indian.webp" alt="">
            <h1 class="Camello">${post.author}</h1>
            <h1 class="Camello2">Content Writer, Digital Dreams</h1>
            <p>
            <h1 class="Camello3">${post.created_at}</h1>
            </p>

            <p class="about">
                ${post.body}
            </p>
  
        </div>
    </section>
    `;

    document.querySelector("body").innerHTML = postContent;
}

// Show error or not found
function showMessage(message) {
    document.body.innerHTML = `<p style="text-align:center">${message}</p>`;
}

async function fetchPost(id) {
    const url = `http://localhost/blog/api/?id=${id}`;

    try {
         await new Promise(resolve => setTimeout(resolve, 2000));
        const response = await fetch(url);

        if (!response.ok) {
            throw new Error(`Error code: ${response.status}`);
        }

        const data = await response.json();

        // check if post exists
        if (!data.post) {
            showMessage("Post not found");
            return;
        }

        displayPost(data.post);

    } catch (e) {
        console.error(e);
        showMessage("Post not found");
    }
}

// MAIN LOGIC
if (!id) {
    showMessage("Post not found");
} else {
    id = parseInt(id);

    if (isNaN(id)) {
        showMessage("Post not found");
    } else {
        fetchPost(id);
    }
}