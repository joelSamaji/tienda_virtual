
<?php headerAdmin($data); ?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa-solid fa-gauge"></i><?= $data['page_title']; ?></h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
          <li class="breadcrumb-item"><a href="#">Blank Page</a></li>
        </ul>
      </div>
      <div class="row">
          <div class="col-md-12">
              <div class="tile">
                  <div class="tile-body">Create a beautiful dashboard</div>
          </div>
        </div>
      </div>
    </main>
    
<?php footerAdmin(); ?>