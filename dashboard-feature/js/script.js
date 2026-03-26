// USERS DATA
const users = [
  { name: "John Doe", email: "john@gmail.com"},
  { name: "Ezema Olisaemeka", email: "ezema@gmail.com" },
  { name: "Okoro Valentine", email: "okoro@gmail.com"},
  { name: "Chuka Matthias", email: "chuka@gmail.com"},
  { name: "Anthony Justin", email: "anthony@gmail.com"},
  { name: "Jack Bauer", email: "jack@gmail.com"},
];

// DASHBOARD
const totalUsers = document.getElementById("totalUsers");
if (totalUsers) {
  totalUsers.innerText = users.length;
}

// USERS PAGE
const table = document.getElementById("userTable");
if (table) {
  users.forEach(user => {
    table.innerHTML += `
      <tr>
        <td>${user.name}</td>
        <td>${user.email}</td>
      </tr>
    `;
  });
}