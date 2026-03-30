function getPosts() {
  return JSON.parse(localStorage.getItem("posts")) || [];
}

const container = document.getElementById("posts-container");
const featuredContainer = document.getElementById("featured-posts");

if (!container || !featuredContainer) {
  console.warn("Missing required DOM elements");
}

function loadPosts() {
  const posts = getPosts();

  if (!container) return;

  if (posts.length === 0) {
    container.innerHTML = "<p>No posts yet. Add one!</p>";
    return;
  }

  let html = "";

  posts.forEach(post => {
    html += `
      <div class="post" onclick="openPost(${post.id})">

        <div class="post-header">
          <h3>${post.title}</h3>
        </div>

        <div class="post-meta">
          <span>${post.author}</span>
          <span>${post.date}</span>
        </div>

        <div class="post-body">
          <p>${post.content.substring(0, 80)}...</p>
        </div>

        <span class="read-more">Read More</span>

      </div>
    `;
  });

  container.innerHTML = html;
}


function openPost(id) {
  const posts = getPosts();
  const post = posts.find(p => p.id === id);

  if (!container) return;

  if (!post) {
    container.innerHTML = "<p>Post not found</p>";
    return;
  }

  container.innerHTML = `
    <div class="full-post">
      <h2>${post.title}</h2>
      <p>${post.author} | ${post.date}</p>
      <p>${post.content}</p>
      <button onclick="loadPosts(); loadFeatured();">← Back</button>
    </div>
  `;
}

function loadFeatured() {
  const posts = getPosts();

  if (!featuredContainer) return;

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