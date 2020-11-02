

<section class="section is-medium login">


  <!-- <hr>  -->
  
  <p class='title is-size-2-mobile is-size-1-tablet has-text-centered'>Espace Admin</p>

  

  <div class="container form <?php if(isset($class)) echo $class; ?>">
    <form action="#" method="POST">
      
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
      <!-- ******* BUTTON ********** -->
      <!-- <div class="field is-grouped">
        <p class="control">
          <button class="button is-primary" type="submit">Connexion</button>
        </p>
        <p class="control">
          <button class="button is-danger">Déconnexion</button>
        </p>
      </div> -->

      <div class="buttons">
        <button class="button is-success is-fullwidth">Connexion</button>
        <button class="button is-danger is-fullwidth">Déconnexion</button>
  
</div>
      
    </form>
  </div>
  
</section>





<section class="section contact">
  <div class="container">
    <?php
      $i = 1;
      while ($i <= 4) { ?>
        <article class="message is-dark">
          <div class="message-header">
            <ul>
              <li>id : <span>1</span></li>
              <li>nom : <span>Jean</span></li>
              <li>email : <span>Jean917@hotmail.com</span></li>
              <li>sujet : <span>création de logotype pour une marque de voiture</span></li>
            </ul>
          <button class="delete is-small" aria-label="delete"></button>
          </div>
      
          <div class="message-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id dolore culpa, facere fugiat voluptas voluptatem doloremque eos totam, ipsum dolorum, aperiam vitae nemo facilis dolor nesciunt quae reiciendis iusto? Minima delectus ex, laborum, dolore nobis incidunt rem iusto itaque asperiores molestiae quaerat dolorem adipisci similique ratione neque tempora eum quia.
          </div>
        </article>
        <?php 
        $i++;
        } ?>
    
  </div>
</section>


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















