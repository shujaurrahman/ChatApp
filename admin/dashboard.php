<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>*{
        --bs-link-color: #212529;
        --bs-nav-pills-link-active-bg: #212529;
    }
        .section {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 80vh;
            margin: 0;
        }

        .nav-pills {
            flex-direction: column;
            position: fixed;
            left: 30px;
            top: 30%;
            transform: translateY(-50%);
        }

        .nav-link {
            text-align: left;
            width: 100%;
           
        }

        .tab-content {
            margin-left: 200px; 
            margin-right: 10px;

        }

    </style>
  </head>
  <body>
    <nav class="bg-body-tertiary">
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link" href="#"><button type="button" class="btn btn-outline-dark">Chat</button></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><button type="button" class="btn btn-outline-dark">Logout</button></a>
            </li>
        </ul>
    </nav>
    <div class="section ">
        <div class="d-flex align-items-start">
            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="nav-link " id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</button>
                <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Querries</button>
                <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>
            </div>
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">Home Area</div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">Quries Area</div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">Setting Area</div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
