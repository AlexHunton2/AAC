<header>
      <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
          <a href="?p=home" class="navbar-brand d-flex align-items-center">
            <svg width="1em" height="1em" viewBox="0 0 18 18" class="bi bi-gear-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 0 0-5.86 2.929 2.929 0 0 0 0 5.858z"/>
          </svg>
            <strong>Web Arduino Control</strong>
          </a>
          <form action="" method="get" class="my-2 my-md-0 mr-md-3">
            <?php //Yeah I know this is in statc. What about it? Whatcha gonna do? You ain't going do anthing, punk.
              if (array_key_exists('user_entity', $_SESSION)) {
                $user = unserialize($_SESSION['user_entity']);
                $username = $user->getUsername();
                echo '<a class="p-2 text-light">' . $username . '</a>';
              } 
            ?>
            <button class="btn btn-light" name="p" type="submit" value="logout">Logout</button>
          </nav>
        </div>
      </div>
</header>