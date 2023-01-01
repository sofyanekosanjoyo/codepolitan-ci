<?php $this->load->view('partials/header'); ?>

    <!-- Page Header-->
    <header class="masthead" style="background-image: url('<?= base_url(); ?>/assets/assets/img/contact-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="page-heading">
                        <h2>Tambah Artikel Baru</h2>
                        <span class="subheading">Silahkan tulis artikel anda.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <h1>Form Tambah Artikel</h1>

                <div class="alert alert-danger mb-2">
                    <?= validation_errors(); ?>
                </div>

                <?= form_open_multipart(); ?>
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <?= form_input('title', set_value('title'), 'class="form-control mb-2" id="title"'); ?>
                    </div>
                    <div class="form-group">
                        <label for="url">URL</label>
                        <?= form_input('url', set_value('url'), 'class="form-control mb-2" id="url"'); ?>
                    </div>
                    <div class="form-group">
                        <label for="content">Konten</label>
                        <?= form_textarea('content', set_value('content'), 'class="form-control mb-2" id="content"'); ?>
                    </div>
                    <div class="form-group">
                        <label for="cover">Cover</label>
                        <?= form_upload('cover', set_value('cover'), 'class="form-control mb-2" id="cover"'); ?>
                    </div>
                    <button class="btn btn-primary" type="submit">Simpan Artikel</button>
                </form>

            </div>
        </div>
    </div>
                
    <?php $this->load->view('partials/footer'); ?>