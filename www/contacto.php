<?php include 'componentes/header.php' ?>
 <!-- ======= Contact Section ======= -->
 <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2><span>Contacta con</span> nosotros</h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>
      </div>

      

      <div class="container mt-5">

        

        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="form-row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validate"></div>
            </div>
            <div class="col-md-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Escríbenos algo!" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Tu mensaje ha sido enviado, gracias!</div>
          </div>
          <div class="text-center"><button type="submit">Enviar</button></div>
        </form>

      </div>
    </section><!-- End Contact Section -->


<?php include 'componentes/footer.php' ?>