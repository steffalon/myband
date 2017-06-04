<nav>
  <ul>
    <li><a href="?page=home">CarTek</a></li>
      {if $navBarLogout == true }
          <li class="setright"><a href="?page=home&logout">Logout</a></li>
          <li class="setrightMini"><a href="?page=dashboard"><i class="fa fa-tachometer" aria-hidden="true"></i></a></li>
      {else}
          <li class="setright"><a href="?page=login">Login</a></li>
      {/if}
  </ul>
</nav>
