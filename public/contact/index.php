<?php require_once("../includes/header.php") ?>

<section id="contact" class="thrill-bg-white">
    <div class="container py-5">
        <h2 class="display-4 text-uppercase font-weight-bold thrill-blue">
            Contact
        </h2>
        <p class="thrill-gray text-uppercase">Nous contacter pour plus d'information</p>
    </div>
    <?php if ($visible) : ?>
        <?php if ($success) : ?>
            <div class="container">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success lors de l'envoie</strong> <?= $msg ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        <?php else : ?>
            <div class="container">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Erreur lors de l'envoie</strong> <?= $msg ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        <?php endif; ?>
    <?php endif; ?>
    <div class="container mb-5">
        <div class="row">
            <div class="col">
                <div class="mb-5">
                    <p class="thrill-gray text-justify">Vous avez une question, savoir plus amples d’informations ? Remplissez ce formulaire en notifiant l’objet de votre demande et nous vous recontacterons dans les délais les plus rapide.</p>
                </div>
                <div>
                    <h3 class="font pb-5 h2 thrill-gray bold">Informations</h3>
                    <dl class="row pl-5">
                        <dt class="col-sm-4 thrill-blue">Adresse Mail :</dt>
                        <dd class="col-sm-8 thrill-gray">contact@thrillesportclub.fr</dd>

                        <dt class="col-sm-4 thrill-blue">Adresse Postal :</dt>
                        <dd class="col-sm-8 thrill-gray">
                            <p class="mb-0">65 rue de la Croix</p>
                            <p class="mb-0">92000 Nanterre</p>
                        </dd>
                    </dl>
                </div>
            </div>
            <div class="col">
                <h3 class="font pb-5 h2 thrill-gray bold">Formulaire de contact</h3>
                <form action="" method="post">
                    <div class="form-group">
                        <label class="thrill-gray bold-500" for="name">Votre nom (<span class="thrill-blue">*</span>)</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label class="thrill-gray bold-500" for="email">Votre email (<span class="thrill-blue">*</span>)</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label class="thrill-gray bold-500" for="subject">Votre sujet</label>
                        <input type="text" class="form-control" id="subject" name="subject">
                    </div>
                    <div class="form-group">
                        <label class="thrill-gray bold-500" for="message">Votre message (<span class="thrill-blue">*</span>)</label>
                        <textarea class="form-control" id="message" rows="3" name="message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-blue float-right">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
</section>
<?php require_once("../includes/footer.php") ?>