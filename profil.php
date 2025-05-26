<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profil Instagram</title>
  <style>
    body {
      font-family: sans-serif;
      margin: 0;
      padding: 0;
      background: #fafafa;
    }

    .header {
      display: flex;
      align-items: center;
      padding: 20px;
      background: white;
      border-bottom: 1px solid #dbdbdb;
    }

    .profile-pic {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      margin-right: 40px;
      background: url('user.jpg') center/cover no-repeat;
    }

    .profile-info {
      flex: 1;
    }

    .username {
      font-size: 24px;
      font-weight: bold;
    }

    .bio {
      margin-top: 10px;
      color: #555;
    }

    .stats {
      display: flex;
      gap: 30px;
      margin-top: 15px;
    }

    .stats div {
      font-size: 16px;
    }

    .gallery {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
      gap: 5px;
      padding: 10px;
    }

    .gallery img {
      width: 100%;
      height: 150px;
      object-fit: cover;
    }
  </style>
</head>
<body>

  <div class="header">
    <div class="profile-pic"></div>
    <div class="profile-info">
      <div class="username">nom_utilisateur</div>
      <div class="stats">
        <div><strong>34</strong> posts</div>
        <div><strong>1050</strong> abonnés</div>
        <div><strong>500</strong> abonnements</div>
      </div>
      <div class="bio">
        🎓 Étudiant en informatique<br>
        💻 Développeur web<br>
        📍 Antananarivo, Madagascar
      </div>
    </div>
  </div>

  <div class="gallery">
    <img src="img1.jpg" alt="Post 1">
    <img src="img2.jpg" alt="Post 2">
    <img src="img3.jpg" alt="Post 3">
    <img src="img4.jpg" alt="Post 4">
    <img src="img5.jpg" alt="Post 5">
    <img src="img6.jpg" alt="Post 6">
  </div>

</body>
</html>