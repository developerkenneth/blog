const container = document.getElementById("posts-container");
const featuredContainer = document.getElementById("featured-posts");


function getPosts() {
  return JSON.parse(localStorage.getItem("posts")) || [];
}


function loadPosts() {
  const posts = getPosts();

  if (posts.length === 0) {
    container.innerHTML = "<p>No posts yet. Add one!</p>";
    return;
  }

  let html = "";

  posts.forEach(post => {
    html += `
      <div class="post" onclick="openPost(${post.id})">
        <h3>${post.title}</h3>
        <p>${post.author} | ${post.date}</p>
        <p>${post.content.substring(0, 80)}...</p>
        <span class="read-more">Read More</span>
      </div>
    `;
  });

  container.innerHTML = html;
}
window.addEventListener("storage", loadPosts);


function openPost(id) {
  const posts = getPosts();
  const post = posts.find(p => p.id === id);

  container.innerHTML = `
    <div class="full-post">
      <h2>${post.title}</h2>
      <p>${post.author} | ${post.date}</p>
      <p>${post.content}</p>
      <button onclick="loadPosts()">← Back</button>
    </div>
  `;
}


function loadFeatured() {
  const posts = getPosts();

  let html = "";

  posts.slice(0, 3).forEach(post => {
    html += `
      <div class="item">
        <h4>${post.title}</h4>
        <small>${post.date}</small>
      </div>
    `;
  });

  featuredContainer.innerHTML = html;
}


loadPosts();
loadFeatured();