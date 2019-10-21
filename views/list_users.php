<div class="container">
  <div class="row">


    <div class="tab-pane active" id="list">
      <br />
      <p>+Adicionar usuário</p>
      <br />
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Senha</th>
              <th>Email</th>
              <th>Tipo</th>
              <th>Opções</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($users as $user) { ?>
              <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['username']; ?></td>
                <td><?php echo $user['password']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td><?php echo $user['type']; ?></td>

                <td>
                  <span class="glyphicon glyphicon-edit"></span><a href="?pag=cadgru"> editar</a>
                  <span class="glyphicon glyphicon-trash"></span>del

                </td>
              </tr>

            <?php } ?>
          </tbody>
        </table>
      </div>

    </div>

  </div>