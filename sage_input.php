<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Atora | Archive Management</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .admin-wrapper { max-width: 600px; margin: 100px auto; padding: 40px; background: #fff; border: 0.5px solid #eee; }
        .form-item { margin-bottom: 25px; }
        label { display: block; font-family: 'Montserrat'; font-size: 0.7rem; letter-spacing: 0.2em; color: #999; margin-bottom: 8px; }
        input, textarea, select { width: 100%; padding: 12px; border: 0.5px solid #eee; font-size: 0.9rem; outline: none; }
        input:focus { border-color: var(--accent-color); }
        .btn-submit { background: var(--accent-color); color: #fff; border: none; padding: 15px 40px; font-family: 'Montserrat'; letter-spacing: 0.3em; cursor: pointer; transition: 0.3s; width: 100%; }
        .btn-submit:hover { opacity: 0.8; }
    </style>
</head>
<body>
    <div class="admin-wrapper fade-in">
        <h1 style="font-family:'Montserrat'; font-weight:300; letter-spacing:0.4em; font-size:1.2rem; text-align:center; margin-bottom:40px;">NEW SAGE ROUTE</h1>
        
        <form action="sage_create.php" method="POST">
            <div class="form-item">
                <label>EXPERIENCE TYPE (TAG)</label>
                <select name="experience_type">
                    <option value="Existence">Existence (自己)</option>
                    <option value="Relation">Relation (他者・社会)</option>
                    <option value="Universal">Universal (宇宙・自然)</option>
                </select>
            </div>

            <div class="form-item">
                <label>SAGE NAME (賢人の名)</label>
                <input type="text" name="name" placeholder="例：岡本太郎" required>
            </div>

            <div class="form-item">
                <label>LOCATION NAME (地名・施設名)</label>
                <input type="text" name="location_name" placeholder="例：井戸尻考古館" required>
            </div>

            <div class="form-item">
                <label>LATITUDE (緯度)</label>
                <input type="text" name="lat" placeholder="例：35.885" required>
            </div>

            <div class="form-item">
                <label>LONGITUDE (経度)</label>
                <input type="text" name="lng" placeholder="例：138.286" required>
            </div>

            <div class="form-item">
                <label>STORY DESCRIPTION (説明文)</label>
                <textarea name="description" rows="4" placeholder="その場所が持つ物語を入力してください..." required></textarea>
            </div>

            <div class="form-item">
                <label>RECOMMENDED ROUTE (推奨ルート・行程)</label>
                <textarea name="recommended_route" rows="3" placeholder="例：館内を巡った後、八ヶ岳の麓を歩く"></textarea>
            </div>

            <button type="submit" class="btn-submit">ARCHIVE DATA</button>
        </form>
        
        <p style="text-align:center; margin-top:30px;">
            <a href="read.php" style="font-size:0.6rem; color:#ccc; text-decoration:none; letter-spacing:0.2em;">VIEW MAP</a>
        </p>
    </div>
</body>
</html>