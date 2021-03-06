<!-- MOBILE NAVBAR BLOG -->
<header>  
  <div id="navbar">
    <a href="/" class="logo">
      <img src="/img/logo/logo.svg" alt="logo">
    </a>
    <div class="toggleNav"></div>
  </div>
  <nav class="nav-collapse">
    <ul>
      <li class="liPageLink deactive">
        <a class="aPageLink" href="/">Home</a>
      </li>
      <li class="liPageLink deactive">
        <a class="aPageLink" href="/blog/">Posts</a>
      </li>
      <?php if ( isset($_SESSION['user_type']) && $_SESSION['user_type'] != 'reader' ) : ?>
      <li class="liPageLink deactive">
        <a class="aPageLink" href="/post/create">New&nbsp;Post</a>
      </li>
      <?php endif ?>
      <?php if ( isset($_SESSION["user_id"]) ) : ?>
      <li class="liPageLink <?=$link=="profile"? 'active' : 'deactive' ?>">
        <a class="aPageLink" href="/profile/<?=$_SESSION['user_id']?>">Profilo</a> 
      </li>
      <li class="liPageLink">
        <a class="aPageLink" href="/auth/logout">Logout</a> 
      </li>
      <?php else: ?>
      <li class="liPageLink <?=$link=='signin'? 'active' : 'deactive' ?>">
        <a class="aPageLink" href="/auth/signin/form">Accedi</a> 
      </li>
      <li class="liPageLink <?=$link=='signup'? 'active' : 'deactive' ?>">
        <a class="aPageLink" href="/auth/signup/form">Registrati</a> 
      </li>
      <?php endif ?>
    </ul>
  </nav>
</header>
<!-- END NAVBAR BLOG -->



    







