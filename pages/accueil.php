<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Instagram - Accueil</title>
  <style>
    * {
      margin: 0; padding: 0;
      box-sizing: border-box;
      font-family: system-ui, sans-serif;
    }

    body {
      background-color: #fafafa;
    }

    .navbar {
      background-color: #fff;
      border-bottom: 1px solid #dbdbdb;
      padding: 10px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .navbar .logo {
      font-weight: bold;
      font-size: 24px;
    }

    .navbar input[type="text"] {
      padding: 5px 10px;
      border: 1px solid #dbdbdb;
      border-radius: 5px;
    }

    .navbar .menu {
      display: flex;
      gap: 15px;
    }

    .main {
      display: flex;
      justify-content: center;
      padding: 20px;
    }

    .feed {
      width: 500px;
    }

    .post {
      background-color: #fff;
      border: 1px solid #dbdbdb;
      margin-bottom: 20px;
      border-radius: 5px;
    }

    .post .header {
      padding: 10px;
      display: flex;
      align-items: center;
      gap: 10px;
      font-weight: bold;
    }

    .post .image {
      width: 100%;
      height: 400px;
      background-color: #eee;
    }

    .post .actions {
      padding: 10px;
      display: flex;
      gap: 10px;
    }

    .post .caption {
      padding: 0 10px 10px;
    }

    .sidebar {
      margin-left: 50px;
      width: 300px;
    }

    .sidebar .profile {
      background-color: #fff;
      padding: 15px;
      border: 1px solid #dbdbdb;
      border-radius: 5px;
      text-align: center;
    }
  
    .comments {
      padding: 0 10px 10px;
    }
    .comment {
      font-size: 14px;
      margin-bottom: 5px;
    }
    .comment-form {
      display: flex;
      gap: 10px;
      margin-top: 10px;
    }
    .comment-form input[type="text"] {
      flex: 1;
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    .comment-form button {
      background-color: #0095f6;
      color: white;
      border: none;
      padding: 5px 10px;
      border-radius: 4px;
      cursor: pointer;
    }

  </style>
</head>
<body>

  <div class="navbar">
    <div class="logo">Instagram</div>
    <input type="text" placeholder="Rechercher..." />
    <div class="menu">
      <span>🏠</span>
      <span>💬</span>
      <span>➕</span>
      <span>❤️</span>
      <span>👤</span>
    </div>
  </div>

  <div class="main">
    <div class="feed">
      <div class="post">
        <div class="header">
          <img src="https://via.placeholder.com/32" alt="user" />
          utilisateur1
        </div>
        <div class="image"></div>
        <div class="actions">❤️ 💬 🔄</div>
        <div class="caption"><strong>utilisateur1</strong> Voici une belle photo !</div>

<div class="comments">
  <div class="comment"><strong>alice</strong> Trop beau 😍</div>
  <div class="comment"><strong>bob</strong> J'adore cette photo !</div>
  <form class="comment-form" method="post" action="#">
    <input type="text" name="commentaire" placeholder="Ajouter un commentaire..." />
    <button type="submit">Publier</button>
  </form>
</div>

      </div>

      <div class="post">
        <div class="header">
          <img src="https://via.placeholder.com/32" alt="user" />
          utilisateur2
        </div>
        <div class="image"></div>
        <div class="actions">❤️ 💬 🔄</div>
        <div class="caption"><strong>utilisateur2</strong> Une autre publication !</div>

<div class="comments">
  <div class="comment"><strong>alice</strong> Trop beau 😍</div>
  <div class="comment"><strong>bob</strong> J'adore cette photo !</div>
  <form class="comment-form" method="post" action="#">
    <input type="text" name="commentaire" placeholder="Ajouter un commentaire..." />
    <button type="submit">Publier</button>
  </form>
</div>

      </div>
    </div>

    <div class="sidebar">
      <div class="profile">
        <img src="https://via.placeholder.com/64" alt="profile" style="border-radius:50%;" />
        <p><strong>Mon Profil</strong></p>
        <p>@monusername</p>
      </div>
    </div>
  </div>

</body>
</html>