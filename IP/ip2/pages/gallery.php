<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/styles.css">
    <link id="favicon" rel="icon" href="..//images/icon.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Pesonal Site</title>
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



    <main>
        <nav class="navbar" style="background: #c0c0c0;">
            <div class="container-fluid">
              <a class="navbar-brand"><h3>Timur Gayazov | Frontend developer</h3></a>
              <form class="d-flex">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-secondary" href="../pages/about.php">About Me</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-secondary" href="../pages/hobbies.php">Hobbies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="../pages/gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="../pages/myprojects.php">My Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../pages/login.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                            </svg>
                        </a>
                      </li>
                  </ul>
              </form>
            </div>
        </nav>

        <div class="gallery_block">
            <div class="slider">
                <div class="slider-line" id="kolvo_img">
                    <img src="../images/image_1.jpg" alt="">
                    <img src="../images/image_2.jpg" alt="">
                    <img src="../images/image_3.jpg" alt="">
                </div>
            </div>
            </div>
            <div class="text-center" style="margin-top: 5px;">
                <button type="button" class="btn last-btn" id="last" style="background-color: #757F9A;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                    </svg> 
                </button>

                <button type="button" class="btn next-btn" id="next" style="background-color: #757F9A;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                    </svg> 
                </button>
            </div>
        </div>
        
    </main>

    <!-- <footer>

    </footer>  -->
  <script src="/examples/vendors/bootstrap-4.1/js/bootstrap.bundle.min.js"></script>
  <script src="../scripts/gallery.js"></script>

</body>
</html>