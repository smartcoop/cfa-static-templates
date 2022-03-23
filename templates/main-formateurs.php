<section class="main__presentation">
    <div class="main-title">Les formateur·trices de Formateurs Associés</div>

    <div class="main__presentation-txt">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in ullamcorper tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Duis eget varius nisl, et eleifend est. In condimentum, arcu eget ornare aliquam,
        urna quam luctus quam, ut vestibulum nulla turpis ultricies lectus. Nunc gravida gravida feugiat. Quisque pellentesque libero in massa fringilla, vel gravida ex ultricies. Proin in mi dolor. Fusce mollis neque tellus, vel malesuada nibh malesuada
        vitae. Curabitur sed ultrices nulla. Donec vulputate quis lorem ut ultricies. Nulla vestibulum suscipit aliquet. Aliquam dictum justo posuere, iaculis orci quis, viverra enim. Vivamus nec leo et est hendrerit tempus. Aliquam viverra dapibus elit.
        Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse sit amet aliquet ligula, id consequat lectus.
    </div>
</section>
<section class="section__training-search">
    <?php include 'templates/components/trainer-search.html';?>
</section>

<section class="section__trainer-list">
    <div class="section__label">
        <h2>Tous les formateurs</h2>
    </div>
    <div class="trainer-list">
        <!-- Boucle sur tous les formateurs order par RANDOM-->
        <?php include 'templates/components/trainer-list.php';?>
    </div>
    <?php include 'templates/components/pager.html';?>
</section>