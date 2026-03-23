const posts = getPosts();
const container = document.getElementById("posts-container");

posts.forEach(post => {
  container.innerHTML += `
    <div class="post">
      <h2>${post.title}</h2>
      <p>${post.author} | ${post.date}</p>
      <a href="post.html?id=${post.id}">Read More</a>
    </div>
  `;
});