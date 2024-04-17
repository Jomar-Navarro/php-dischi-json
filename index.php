<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js" integrity="sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <!-- Css -->
  <link rel="stylesheet" href="css/style.css" />
  <title>PHP Dischi JSON</title>
</head>

<body>
  <div id="app">
    <div class="container my-5 text-center">
      <h1 class="text-white">{{ title }}</h1>
      <div class="d-flex flex-wrap justify-content-center">
        <div v-for="(item,index) in lista_disc" :key="index" class="card m-4 d-flex justify-content-center align-items-center" style="width: 18rem">
          <img :src="item.poster" class="card-img-top p-3" alt="item.poster" />
          <div class="card-body text-white">
            <h5 class="card-title">{{ item.title }}</h5>
            <h6 class="card-subtitle mb-2">{{ item.author }}</h6>
            <h6 class="card-subtitle mb-2">{{ item.year }}</h6>
            <p class="card-text">{{ item.genre }}</p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <script src="js/script.js"></script>
</body>

</html>