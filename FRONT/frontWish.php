<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Пожелание</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="../css/style.css" />
</head>
<body>
  <div class="container-fluidd">
    <div class="offset-md-4 col-md-4 offset-sm-3 col-sm-6">
      <div class="form-container">
        <h3 class="title">Ваши пожелание</h3>
        <span class="description">Введите данные для желания:</span>
        <form action="../ADMIN/wishAdmin/indexWishback.php" class="form-horizontal" method="post">
          <div class="form-group">
            <input type="text" class="form-control bold-text" name="name" placeholder="Ваше имя..." />
          </div>
          <div class="form-group">
            <input type="text" class="form-control bold-text" name="wish" placeholder="Ваш пожелание..." />
          </div>
          <div class="form-group">
            <input type="datetime-local" class="form-control bold-text" name="time" placeholder="Время назначения..." />
          </div>
          <button class="btn signin">Добавить</button>
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>