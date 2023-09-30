<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona z piosenkami</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="{{asset('css/style.css')}}" rel="stylesheet"/>
    <style>

    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Nazwa zespołu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Tekst</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Informacje o piosence</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">QR kod zespołu</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Tryb wyświetlania</a>
                  </li>
              </ul>
            </div>
          </div>

    </nav>

    <!-- Główna treść strony -->
    <div class="container mt-2">
        <div class="song-text">
            <h1>"Hej z góry z góry"</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra purus eget est tincidunt, non consectetur libero dapibus. Nullam malesuada vulputate metus, eu varius risus eleifend ac. Vivamus eget orci non arcu mattis consectetur. Sed ac libero vitae ligula egestas tempus. Nulla facilisi. In tristique id justo ac vulputate. Proin iaculis efficitur ultrices. Fusce hendrerit bibendum quam, quis auctor nulla rhoncus ut.
            </p>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra purus eget est tincidunt, non consectetur libero dapibus. Nullam malesuada vulputate metus, eu varius risus eleifend ac. Vivamus eget orci non arcu mattis consectetur. Sed ac libero vitae ligula egestas tempus. Nulla facilisi. In tristique id justo ac vulputate. Proin iaculis efficitur ultrices. Fusce hendrerit bibendum quam, quis auctor nulla rhoncus ut.
            </p>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra purus eget est tincidunt, non consectetur libero dapibus. Nullam malesuada vulputate metus, eu varius risus eleifend ac. Vivamus eget orci non arcu mattis consectetur. Sed ac libero vitae ligula egestas tempus. Nulla facilisi. In tristique id justo ac vulputate. Proin iaculis efficitur ultrices. Fusce hendrerit bibendum quam, quis auctor nulla rhoncus ut.
            </p>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra purus eget est tincidunt, non consectetur libero dapibus. Nullam malesuada vulputate metus, eu varius risus eleifend ac. Vivamus eget orci non arcu mattis consectetur. Sed ac libero vitae ligula egestas tempus. Nulla facilisi. In tristique id justo ac vulputate. Proin iaculis efficitur ultrices. Fusce hendrerit bibendum quam, quis auctor nulla rhoncus ut.
            </p>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra purus eget est tincidunt, non consectetur libero dapibus. Nullam malesuada vulputate metus, eu varius risus eleifend ac. Vivamus eget orci non arcu mattis consectetur. Sed ac libero vitae ligula egestas tempus. Nulla facilisi. In tristique id justo ac vulputate. Proin iaculis efficitur ultrices. Fusce hendrerit bibendum quam, quis auctor nulla rhoncus ut.
            </p>
        </div>
    </div>

    <!-- Przyciski przewijania -->
    <div class="scroll-button">
        <div class="row">
            <div class="col-4"><button class="btn btn-primary" onclick="scrollToTop()"><</button></div>
            <div class="col-4"><button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#songModal">...</button></div>
            <div class="col-4"><button class="btn btn-primary" onclick="scrollToBottom()">></button></div>
        </div>



    </div>

    <!-- Modal z wyborem piosenek -->
    <div class="modal fade" id="songModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Wybierz piosenkę</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- W tym miejscu możesz dodać formularz z wyborem piosenki -->
                    <form>
                        <div class="mb-3">
                            <label for="songSelect" class="form-label">Wybierz piosenkę:</label>
                            <select class="form-select" id="songSelect">
                                <option value="song1">Piosenka 1</option>
                                <option value="song2">Piosenka 2</option>
                                <option value="song3">Piosenka 3</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zamknij</button>
                    <button type="button" class="btn btn-primary">Zapisz</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
        // Funkcja przewijania do góry
        function scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        // Funkcja przewijania w dół
        function scrollToBottom() {
            window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' });
        }
    </script>
</body>
</html>
