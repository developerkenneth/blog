const params = new URLSearchParams(window.location.search);
const id = params.get("id");

const posts = getPosts();
const post = posts.find(p => p.id == id);

const container = document.getElementById("post-content");

if (post) {
  container.innerHTML = `
    <h2>${post.title}</h2>
    <p>${post.author} | ${post.date}</p>
    <p>${post.content}</p>
  `;
} else {
  container.innerHTML = "<p>Post not found</p>";
}