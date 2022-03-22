<?php include 'templates/head.html';?>

  <body class="body-page">
    <div class="page">
        <?php include 'templates/header.html';?>
        <main class="main">
            <section class="main__presentation">
                <div class="main-title">Contacter Formateurs Associés</div>
                <div class="main-subtitle">Sous-titre</div>
                <div class="main__contact-form">
                    <div class="o-form-group-layout o-form-group-layout--standard">
                        <div class="o-form-group ">
                            <label class="o-form-group__label" for="formValidationnameId">Name</label>
                            <div class="o-form-group__controls">
                                <input class="c-input" type="email" value="John Doe" id="formValidationnameId" />
                            </div>
                        </div>
                        <div class="o-form-group ">
                            <label class="o-form-group__label" for="formValidationEmailId">Email address</label>
                            <div class="o-form-group__controls">
                                <input class="c-input" type="email" value="user@name.com" id="formValidationEmailId" />
                            </div>
                        </div>
                        
                        <div class="o-form-group ">
                            <label class="o-form-group__label" for="textareaId">Message</label>
                            <textarea class="c-textarea" rows="5" id="textareaId"></textarea>
                        </div>
                        <div class="o-form-group">
                            <input class="c-button c-button--primary" type="submit" value="Envoyer" />
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <?php include 'templates/footer.html';?>
  </div>
</body>
</html>