

<section class="section is-small login">


  <!-- la bannière qui indique si la connexion Admin est faite ou pas -->
  <?php if(isset($_SESSION['msg'])): ?>
    <div class="notification <?= $_SESSION['color'] ?>">
      <?= $_SESSION['msg'] ?>
  </div>
  <?php endif; ?>

  <!-- <p class='title is-size-3-mobile is-size-1-tablet has-text-centered'>Espace Admin</p> -->

  

  <div class="container form <?php if(isset($class)) echo $class; ?> <?php if(isset($_SESSION['pseudo']))echo 'is-hidden'; ?>">
    <form action="/grafiz-site/admin/login" method="POST">
      
      <!-- ******* NOM ********** -->
      <div class="field">
        <p class="control has-icons-left">
          <input class="input" type="text" name="pseudo" placeholder="Name" required>
          <span class="icon is-small is-left">
            <i class="fas fa-envelope"></i>
          </span>
          
        </p>
      </div>
      
      <!-- ******* PASSWORD ********** -->
      <div class="field">
        <p class="control has-icons-left">
          <input class="input" type="password" name="pass" placeholder="Password" required>
          <span class="icon is-small is-left">
            <i class="fas fa-lock"></i>
          </span>
        </p>
      </div>
      <!-- ******* CONNEXION ********** -->
      <div class="field submit">
        <div class="control">
          <input type='submit' class="button is-success is-fullwidth" value="Connexion">
        </div>

  
</div>
      
    </form>
    
  </div>

  <!-- ******* DECONNEXION ********** -->
  <div class="container logout is-block">
      
         <a href='/grafiz-site/admin/logout'>
          <input type="button" class="button is-danger is-fullwidth logout" value= "Déconnexion">
         </a>
   

</section>



<?php if(isset($_SESSION['contacts'])): ?>

<section class="section contact">
  <div class="container">
    <?php foreach($_SESSION['contacts'] as $contacts => $value): ?>
        <article class="message">
          <div class="message-header has-text-black" style="background-color: <?= $value->getColor(); ?>">
            <ul class="has-text-black">
              <li>date : <span><?= $value->getDateCreation(); ?></span></li>
              <li>id : <span><?= $value->getId(); ?></span></li>
              <li>nom : <span><?= $value->getNom(); ?></span></li>
              <li>email : <span><?= $value->getEmail(); ?></span></li>
              <li>sujet : <span><?= $value->getSujet(); ?></span></li>
            </ul>
          <a href='/grafiz-site/admin/delete/<?= $value->getId(); ?>'>
            <button class="delete is-medium" aria-label="delete"></button>
          </a>
          </div>
      
          <div class="message-body"><?= $value->getMessage(); ?></div>
        </article>
    <?php endforeach; ?>
  </div>
</section>
<?php endif; ?>


<!-- ******* TABLE ********** -->
<!-- <section class="section">
  <div class="columns is-centered has-text-centered">
    <div class="column is-10">
      <table class="table is-bordered is-striped">
        <thead>
          <tr>
            <th>id</th>
            <th>nom</th>
            <th>email</th>
            <th>sujet</th>
            <th>message</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>1</th>
            <td>jean</td>
            <td>jean@hotmail.com</td>
            <td>logotype</td>
            <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam dolorem recusandae ducimus veritatis commodi eaque at totam dignissimos numquam fugit! Ex est non facilis quo nam, recusandae harum magni nisi.</td>
          </tr>
          <tr>
            <th>2</th>
            <td>marie</td>
            <td>marie@hotmail.com</td>
            <td>carte de visites</td>
            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet odit autem mollitia aspernatur nisi porro itaque ratione, ipsum similique totam sapiente. Nemo cupiditate enim inventore eum sed similique ipsum suscipit, autem maxime, tempore et placeat, alias voluptatum dignissimos. Voluptatem explicabo mollitia delectus reprehenderit quaerat cupiditate. Voluptate, consequuntur culpa, iusto ab vitae unde suscipit quas saepe a doloribus maiores? Enim cum commodi velit vero expedita numquam quod necessitatibus incidunt dicta rerum. Incidunt voluptates possimus aut est quidem sit libero magnam, consequuntur odit nobis enim accusamus. Delectus suscipit tempora esse. Provident, quidem atque nesciunt sit voluptate incidunt quos doloribus nisi rerum similique!</td>
          </tr>
          <tr>
            <th>3</th>
            <td>luc</td>
            <td>luc@hotmail.com</td>
            <td>illustration</td>
            <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam dolorem recusandae ducimus veritatis commodi eaque at totam dignissimos numquam fugit! Ex est non facilis quo nam, recusandae harum magni nisi.</td>
          </tr>
          <tr>
            <th>4</th>
            <td>marie</td>
            <td>marie@hotmail.com</td>
            <td>carte de visites</td>
            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet odit autem mollitia aspernatur nisi porro itaque ratione, ipsum similique totam sapiente. Nemo cupiditate enim inventore eum sed similique ipsum suscipit, autem maxime, tempore et placeat, alias voluptatum dignissimos. Voluptatem explicabo mollitia delectus reprehenderit quaerat cupiditate. Voluptate, consequuntur culpa, iusto ab vitae unde suscipit quas saepe a doloribus maiores? Enim cum commodi velit vero expedita numquam quod necessitatibus incidunt dicta rerum. Incidunt voluptates possimus aut est quidem sit libero magnam, consequuntur odit nobis enim accusamus. Delectus suscipit tempora esse. Provident, quidem atque nesciunt sit voluptate incidunt quos doloribus nisi rerum similique!</td>
          </tr>
        </tbody>
      </table>
      
    </div>
  </div>
</section> -->















