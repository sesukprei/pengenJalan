<ul class="sidebar navbar-nav">
  <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
      <a class="nav-link" href="<?php echo site_url('admin') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Overview</span>
      </a>
  </li>
  <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'products' ? 'active': '' ?>">
      <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">
          <i class="fas fa-fw fa-boxes"></i>
          <span>Home</span>
      </a>
      <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="<?php echo site_url('admin/package/') ?>">Banner Slide</a>
          <a class="dropdown-item" href="<?php echo site_url('admin/keunggulan/') ?>">Keunggulan</a>
          <a class="dropdown-item" href="#">Our Works</a>
      </div>
      <a class="nav-link" href="<?php echo site_url('admin/footer/footerList/') ?>" id="" role="button" data-toggle="" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Footer</span>
      </a>
  </li>

</ul>
