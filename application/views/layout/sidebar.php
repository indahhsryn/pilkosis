<?php
$page = @$_GET['page'];
if($page = 'Dashboard'){
  $dashboard ='active';
}
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="" class="brand-link">
    <span class="brand-text font-weight-light">
      <h2 style="text-align: center;">PILKOSIS</h2>
    </span>
  </a>
  <br>
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item" <?= $this->uri->segment(1) == 'Dashboard' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>>
        <a href="<?= base_url('/Dashboard') ?>" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
          </p>
        </a>
      </li>
      <li class="nav-item" >
      <?php if ($this->session->userdata('is_active') == 1) { ?>
        <a href="<?= site_url('/Pilkosis')?>" class="nav-link">
          <i class="nav-icon fas fa-clock"></i>
          <p>
            Pilkosis
          </p>
        </a>
      </li>
      <?php } ?>
      <li class="nav-item" <?= $this->uri->segment(1) == 'Paslon' ? 'class="active"' : '' ?>>
        <?php if ($this->session->userdata('is_active') == 1) { ?>
          <a href="<?= site_url('/Paslon') ?>" class="nav-link">
            <i class="nav-icon fas fa-user-plus"></i>
            <p>
              Input Paslon
            </p>
          </a>
      </li>
    <?php } ?>
    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-users"></i>
        <p>
          Paslon
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
      <?php if ($this->session->userdata('is_active') == 2) { ?>
        <li class="nav-item">
          <a href="<?= site_url('/Data_Paslon') ?>" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Kandidat</p>
          </a>
        </li>
        <?php } ?>
        <?php if ($this->session->userdata('is_active') == 2) { ?>
        <li class="nav-item">
          <a href="<?= site_url('/Votting/pilih') ?>" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Vote</p>
          </a>
        </li>
        <?php } ?>
        <?php if ($this->session->userdata('is_active') == 1) { ?>
          <li class="nav-item">
            <a href="<?= site_url('/Votting') ?>" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Data Pemilih</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= site_url('/User') ?>" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Data User</p>
            </a>
          </li>
        <?php } ?>
      </ul>
    </li>
    <li class="nav-item" <?= $this->uri->segment(1) == 'Suara' ? 'class="active"' : '' ?>>
      <?php if ($this->session->userdata('is_active') == 1) { ?>
        <a href="<?= site_url('/Suara') ?>" class="nav-link">
          <i class="nav-icon fas fa-chart-bar"></i>
          <p>
            Hasil Suara
          </p>
        </a>
    </li>
  <?php } ?>
  <li class="nav-item" <?= $this->uri->segment(1) == 'Laporan' ? 'class="active"' : '' ?>>
    <?php if ($this->session->userdata('is_active') == 1) { ?>
      <a href="<?= site_url('/Laporan') ?>" class="nav-link">
        <i class="nav-icon fas fa-book"></i>
        <p>
          Laporan
        </p>
      </a>
  </li>
<?php } ?>
<li class="nav-item has-treeview">
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-question-circle"></i>
    <p>
      Bantuan
      <i class="fas fa-angle-left right"></i>
    </p>
  </a>
  
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="<?= site_url('/Help') ?>" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Panduan Pilkosis</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="<?= site_url('/Help/chat') ?>" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Konsultasi</p>
      </a>
    </li>
  </ul>
</li>

<li class="nav-item has-treeview">
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-comments"></i>
    <p>
      FeedBack
      <i class="fas fa-angle-left right"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
    <?php if ($this->session->userdata('is_active') == 2) { ?>
      <a href="<?= site_url('/FeedBack') ?>" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>FeedBack Aplikasi</p>
      </a>
    </li>
    <?php } ?>
    <?php if ($this->session->userdata('is_active') == 1) { ?>
      <li class="nav-item">
        <a href="<?= site_url('/FeedBack/data') ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Data FeedBack</p>
        </a>
      </li>
    <?php } ?>
  </ul>
</li>
<li class="nav-item has-treeview">
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-info-circle"></i>
    <p>
      Informasi
      <i class="fas fa-angle-left right"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="<?= site_url('/Landing') ?>" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Informasi Aplikasi</p>
      </a>
    </li>
    <?php if ($this->session->userdata('is_active') == 1) { ?>
    <li class="nav-item">
      <a href="<?= site_url('/Landing/Alamat')?>" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Input Alamat</p>
      </a>
    </li>
    <?php } ?>
    <li class="nav-item">
      <a href="<?= site_url('/Landing/info')?>" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Informasi Sekolah</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="<?= site_url('/Dashboard/warning')?>" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p> Pemberitahuan </p>
      </a>
    </li>
  </ul>
</li>
<li class="nav-item" <?= $this->uri->segment(1) == 'Login/profile' ? 'class="active"' : '' ?>>
  <a href="<?= site_url('/Login/profile') ?>" class="nav-link">
    <i class="nav-icon fas fa-user-cog"></i>
    <p>
      My Profile
    </p>
  </a>
</li>
<li class="nav-item" <?= $this->uri->segment(1) == '' ? 'class="active"' : '' ?>>
  <a href="#modalLogout" data-toggle="modal" class="nav-link">
    <i class="nav-icon fas fa-sign-out-alt"></i>
    <p>
      Logout
    </p>
  </a>
</li>
    </ul>
  </nav>
</aside>
<div class="modal fade" id="modalLogout">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-tile">Warning!</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">Yakin Anda Akan Keluar?</div>
      <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-danger" href="<?= site_url('/Login/logout')?>">Logout</a>
        </div>
    </div>
  </div>
</div>