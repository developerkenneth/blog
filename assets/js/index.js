
async function getPosts() {
  const url = `http://localhost/blog/api`;
  try {
    const response = await fetch(url);

    if(!response.ok){
      throw new Error(`error code: ${response.status}`);
    }

    const data = await response.json();
    return data;


  } catch (e) {
    console.error(e);
  }

}

const container = document.getElementById("posts-container");
const featuredContainer = document.getElementById("featured-posts");

if (!container || !featuredContainer) {
  console.warn("Missing required DOM elements");
}

async function loadPosts() {
  const posts = await getPosts();

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
          <span>${post.created_at}</span>
        </div>

        <div class="post-body">
          <p>${post. body.substring(0, 80)}...</p>
        </div>

        <span class="read-more">Read More</span>

      </div>
    `;
  });

  container.innerHTML = html;
}


async function openPost(id) {
  const posts = await getPosts();
  const post = posts.find(p => p.id === id);

  if (!container) return;

  if (!post) {
    container.innerHTML = "<p>Post not found</p>";
    return;
  }

  container.innerHTML = `
    <div class="full-post">
      <h2>${post.title}</h2>
      <p>${post.author} | ${post.created_at}</p>
      <p>${post.body}</p>
      <button onclick="loadPosts(); loadFeatured();">← Back</button>
    </div>
  `;
}

async function loadFeatured() {
  const posts = await getPosts();

  if (!featuredContainer) return;

  let html = "";

  posts.slice(0, 3).forEach(post => {
    html += `
      <div class="item">
        <h4>${post.title}</h4>
        <small>${post.created_at}</small>
      </div>
    `;
  });

  featuredContainer.innerHTML = html;
}

const toggle = document.getElementById("menu-toggle");
const navbar = document.querySelector(".navbar");

toggle.addEventListener("click", () => {
  navbar.classList.toggle("active");
});

loadPosts();
loadFeatured();