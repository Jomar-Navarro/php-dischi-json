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
  <link rel="stylesheet" href="assets/css/style.css" />
  <title>PHP Dischi JSON</title>
</head>

<body>
  <div id="app">
    <header class="shadow">
      <div class="container h-100">
        <div class="logo">
          <img src="assets/img/spotify.png" alt="">
        </div>
      </div>
    </header>


    <main>
      <div class="container my-5 text-center">

        <h1 class="text-white">{{ title }}</h1>

        <div class="text-white d-flex justify-content-center">

          <div class="d-flex flex-column mx-2">
            <label class="form-label" for="title">Title</label>
            <input v-model.trim="newDisc.title" class="form-control" type="text" name="title">
          </div>

          <div class="d-flex flex-column mx-2">
            <label class="form-label" for="author">Author</label>
            <input v-model.trim="newDisc.author" class="form-control" type="text" name="author">
          </div>

          <div class="d-flex flex-column mx-2">
            <label class="form-label" for="poster">Poster</label>
            <input v-model.trim="newDisc.poster" class="form-control" type="text" name="poster">
          </div>

          <div class="d-flex flex-column mx-2">
            <label class="form-label" for="year">Year</label>
            <input v-model.trim="newDisc.year" class="form-control" type="text" name="year">
          </div>

          <div class="d-flex flex-column mx-2">
            <label class="form-label" for="genre">Genre</label>
            <input v-model.trim="newDisc.genre" class="form-control" type="text" name="genre">
          </div>

          <div class=" d-flex align-items-end">
            <button @click.stop="addNewDisc" class="btn btn-success ">Aggiungi</button>
          </div>
        </div>

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
    </main>

  </div>

  <script src="js/script.js"></script>
</body>

</html>