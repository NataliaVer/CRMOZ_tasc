<template>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #eaeff3;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">API ZohoCRM</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <router-link to="/accounts" class="nav-link">Accounts</router-link>
        </li>
        <li class="nav-item">
            <router-link to="/deals" class="nav-link">Deals</router-link>
        </li>
      </ul>
      <span class="navbar-text">
        Use Zoho for your comfort
      </span>
    </div>
  </div>
</nav>
</template>

<script>
export default {
    name: "Navbar",
}
</script>