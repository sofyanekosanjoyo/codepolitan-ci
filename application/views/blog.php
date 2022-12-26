<?php $this->load->view('partials/header'); ?>

        <!-- Page Header-->
        <header class="masthead" style="background-image: url('<?= base_url(); ?>/assets/assets/img/home-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Selamat Datang</h1>
                            <span class="subheading">Website diary Sofyan Eko Sanjoyo</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">

                <!-- Searching-->
                <form action="">
                    <input type="text" name="find">
                    <button type="submit">Cari</button>
                </form>

                    <!-- Post preview-->
                    <?php foreach ($blogs as $key => $blog): ?>
                    <div class="post-preview">
                        <a href="<?= site_url('blog/detail/' . $blog['url']); ?>">
                            <h2 class="post-title"><?= $blog['title']; ?></h2>
                        </a>
                            <p class="post-meta">
                                Posted on <?= $blog['date']; ?>

                                <a href="<?= site_url('blog/edit/'.$blog['id']); ?>">Edit</a>
                                <a href="<?= site_url('blog/delete/'.$blog['id']); ?>">Delete</a>
                            </p>
                            <?= $blog['content']; ?>
                        
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <?php endforeach;  ?>

                </div>
            </div>
        </div>
        
<?php $this->load->view('partials/footer'); ?>
