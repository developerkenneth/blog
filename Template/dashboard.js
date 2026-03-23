const posts = getPosts();
const container = document.getElementById("user-posts");

posts.forEach(post => {
  container.innerHTML += `
    <div class="post">
      <h3>${post.title}</h3>
      <button>Edit</button>
      <button>Delete</button>
    </div>
  `;
});