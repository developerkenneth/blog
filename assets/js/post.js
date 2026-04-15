// Current URL: https://example.com
const urlParams = new URLSearchParams(window.location.search);
let id = urlParams.get('id');

function displayPost (post){
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
            <img class="indian" src="./assets/img/indian.webp" alt="" srcset=""></a>
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
    document.querySelector("body").innerHTML= postContent;
}
async function fetchPost(id) {
    // url to the api endpoint
    const url = `http://localhost/blog/api/?id=${id}`;
    try {

        const response = await fetch(url);

        if (!response.ok) {
            throw new Error(`Error code found : ${response.status}`)
        }
        const data = await response.json();
        displayPost(data.post);

    } catch (e) {

        console.error(e);

    }
}
if (id) {

    id  = parseInt(id);
    fetchPost(id);
}




