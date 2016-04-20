<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Home</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>

<body>
  <!-- Dropdown Structure -->
  <ul id="dropdown1" class="dropdown-content">
    <li><a href="#!">Order List<i class="fa fa-list-ol right"></i></a></li>
    <li >
      <!-- Modal Trigger -->
      <a class="modal-trigger" href="#modal1">Change Password<i class="fa fa-gear right"></i></a>
    </li>
    <li><a href="#!">Logout<i class="fa fa-sign-out right"></i></a></li>
  </ul>
  <ul id="dropdown2" class="dropdown-content">
    <li><a href="#!"><i class="fa fa-cutlery right"></i>Makanan</a></li>
    <li><a href="#!"><i class="fa fa-glass right"></i>Minuman</a></li>
  </ul>

<div class="navbar-fixed">
  <nav class="teal lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"><img class="responsive-img" src="img/carasaSmall.png"></a>
      <ul class="right hide-on-med-and-down">
        <!-- Dropdown Trigger -->
        <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Choose Category<i class="material-icons right">arrow_drop_down</i></a></li>
        <li>
          <form>
            <div class="input-field">
              <input id="search" type="search" required>
              <label for="search"><i class="material-icons">search</i></label>
              <i class="material-icons">close</i>
            </div>
          </form>
        </li>
        <li><a href="#"><i class="material-icons">shopping_cart</i></a></li>
        <!-- Dropdown Trigger -->
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1"><i class="material-icons left">perm_identity</i>Adrian Dinata<i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
      <ul id="nav-mobile" class="teal lighten-3 side-nav">
        <li><a href="#"><i class="material-icons left">dashboard</i>Home</a></li>
        <li>
          <form>
            <div class="input-field">
              <input id="search" type="search" required>
              <label for="search"><i class="material-icons">search</i></label>
              <i class="material-icons">close</i>
            </div>
          </form>
        </li>
        <li><h6>CATEGORY</h6></li>
        <li><a href="#!"><i class="fa fa-cutlery right"></i>Makanan</a></li>
        <li><a href="#!"><i class="fa fa-glass right"></i>Minuman</a></li>
        <li><h6>ADRIAN DINATA</h6></li>
        <li><a href="#"><i class="fa fa-shopping-cart right"></i>Cart</a></li>
        <li><a href="#!">Order List<i class="fa fa-list-ol right"></i></a></li>
        <li >
          <!-- Modal Trigger -->
          <a class="modal-trigger" href="#modal1">Change Password<i class="fa fa-gear right"></i></a>
        </li>
        <li><a href="#!">Logout<i class="fa fa-sign-out right"></i></a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
</div>

  <!-- Modal Reset Password Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4 class="red-text">Change Password</h4>
      <br>
        <form>
          <div class="row">
            <div class="input-field col s6 push-s3">
              <i class="small material-icons prefix">lock_outline</i>
              <input id="password" type="password" class="validate">
              <label for="password">Old Password </label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6 push-s3">
              <i class="small material-icons prefix">lock</i>
              <input id="password" type="password" class="validate">
              <label for="password">New Password </label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6 push-s3">
              <i class="small material-icons prefix">lock</i>
              <input id="password" type="password" class="validate">
              <label for="password">Retype Your New Password </label>
            </div>
          </div>
        </form>
    </div>
    <div class="modal-footer">
      <button class="modal-action modal-close btn waves-effect waves-light" type="submit" name="action">Save
        <i class="material-icons right">system_update_alt</i>
      </button>
    </div>
  </div>

  <!-- Modal Add to Cart Structure -->
  <div id="modal2" class="modal">
    <div class="modal-content">
    <h4 class="red-text">Nasi Goreng</h4>
  
    <div class="row">
      <img class="col s6" src="img/sotoPadang.jpg">
      <form class="col s6">
        <div class="row">
          <div class="input-field">
            <i class="material-icons prefix">mode_edit</i>
            <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
            <label for="icon_prefix2">Catatan (optional)</label>
          </div>
          <div class="input-field">
            <i class="material-icons prefix">queue</i>
            <input value="1" id="icon_prefix" type="text" class="validate">
            <label for="icon_prefix2">Jumlah</label>
          </div>
          <table>
            <tbody>
              <tr>
                <td>Harga Total</td>
                <td>: IDR 18.000</td>
              </tr>
            </tbody>
          </table>
        </div>
      </form>
    </div>

    <div class="row">
      <div class="col s6">
        <table>
          <tbody>
            <tr>
              <td>Kategori</td>
              <td>: Makanan</td>
            </tr>
            <tr>
              <td>Harga Satuan</td>
              <td>: IDR 18.000</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col s6">
        <table>
          <tbody>
            <tr>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>
          <button class="modal-action modal-close btn waves-effect waves-light right" type="submit" name="action">Add to Cart
            <i class="material-icons right">shopping_cart</i>
          </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>


    </div>
<!--     <div class="modal-footer">
      <button class="modal-action modal-close btn waves-effect waves-light" type="submit" name="action">Add to Cart
        <i class="material-icons right">shopping_cart</i>
      </button>
    </div> -->
  </div>

  <div class="container">
    <div class="progress">
      <div class="determinate" style="width: 70%"></div>
    </div>
    <!-- Breadcrumbs Structure-->
        <div class="grey-text col s12">
          <a href="#!"></i>Home</a>
          <span>&nbsp>&nbsp</span>
          <a href="#!">Makanan</a>
          <span>&nbsp>&nbsp</span>
          <a href="#!">Soto Padang</a>
        </div> <h6></h6>

    <div class="row">
      <div class="col s4">
        <div class="card">
          <div class="card-image">
            <img src="img/sotoPadang.jpg">
            <span class="card-title">Soto Padang</span>
          </div>
          <div class="card-content">
            <!-- Modal Trigger -->
            <p>IDR 18.000,-<a class="modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="Add to Cart" href="#modal2"><i class="material-icons right">shopping_cart</i></a></p>
          </div>
        </div>
      </div>
      <div class="col s4">
        <div class="card">
          <div class="card-image">
            <img src="img/sotoPadang.jpg">
            <span class="card-title">Soto Padang</span>
          </div>
          <div class="card-content">
            <!-- Modal Trigger -->
            <p>IDR 18.000,-<a class="modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="Add to Cart" href="#modal2"><i class="material-icons right">shopping_cart</i></a></p>
          </div>
        </div>
      </div>
      <div class="col s4">
        <div class="card">
          <div class="card-image">
            <img src="img/sotoPadang.jpg">
            <span class="card-title">Soto Padang</span>
          </div>
          <div class="card-content">
            <!-- Modal Trigger -->
            <p>IDR 18.000,-<a class="modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="Add to Cart" href="#modal2"><i class="material-icons right">shopping_cart</i></a></p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col s4">
        <div class="card">
          <div class="card-image">
            <img src="img/sotoPadang.jpg">
            <span class="card-title">Soto Padang</span>
          </div>
          <div class="card-content">
            <!-- Modal Trigger -->
            <p>IDR 18.000,-<a class="modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="Add to Cart" href="#modal2"><i class="material-icons right">shopping_cart</i></a></p>
          </div>
        </div>
      </div>
      <div class="col s4">
        <div class="card">
          <div class="card-image">
            <img src="img/sotoPadang.jpg">
            <span class="card-title">Soto Padang</span>
          </div>
          <div class="card-content">
            <!-- Modal Trigger -->
            <p>IDR 18.000,-<a class="modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="Add to Cart" href="#modal2"><i class="material-icons right">shopping_cart</i></a></p>
          </div>
        </div>
      </div>
      <div class="col s4">
        <div class="card">
          <div class="card-image">
            <img src="img/sotoPadang.jpg">
            <span class="card-title">Soto Padang</span>
          </div>
          <div class="card-content">
            <!-- Modal Trigger -->
            <p>IDR 18.000,-<a class="modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="Add to Cart" href="#modal2"><i class="material-icons right">shopping_cart</i></a></p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col s4">
        <div class="card">
          <div class="card-image">
            <img src="img/sotoPadang.jpg">
            <span class="card-title">Soto Padang</span>
          </div>
          <div class="card-content">
            <!-- Modal Trigger -->
            <p>IDR 18.000,-<a class="modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="Add to Cart" href="#modal2"><i class="material-icons right">shopping_cart</i></a></p>
          </div>
        </div>
      </div>
      <div class="col s4">
        <div class="card">
          <div class="card-image">
            <img src="img/sotoPadang.jpg">
            <span class="card-title">Soto Padang</span>
          </div>
          <div class="card-content">
            <!-- Modal Trigger -->
            <p>IDR 18.000,-<a class="modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="Add to Cart" href="#modal2"><i class="material-icons right">shopping_cart</i></a></p>
          </div>
        </div>
      </div>
      <div class="col s4">
        <div class="card">
          <div class="card-image">
            <img src="img/sotoPadang.jpg">
            <span class="card-title">Soto Padang</span>
          </div>
          <div class="card-content">
            <!-- Modal Trigger -->
            <p>IDR 18.000,-<a class="modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="Add to Cart" href="#modal2"><i class="material-icons right">shopping_cart</i></a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="right">
      <ul class="pagination">
        <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
        <li class="active"><a href="#!">1</a></li>
        <li class="waves-effect"><a href="#!">2</a></li>
        <li class="waves-effect"><a href="#!">3</a></li>
        <li class="waves-effect"><a href="#!">4</a></li>
        <li class="waves-effect"><a href="#!">5</a></li>
        <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
      </ul>
    </div>
    <div class="progress">
      <div class="determinate" style="width: 70%"></div>
    </div>
  </div>

    <footer class="page-footer">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Carasa</h5>
            <p class="grey-text text-lighten-4">
              Carasa adalah layanan Catering Rumah Sakit.
              Carasa adalah layanan Catering Rumah Sakit.
              Carasa adalah layanan Catering Rumah Sakit.
            </p>
          </div>
          <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Beli</h5>
            <ul>
              <li><a class="grey-text text-lighten-3" href="#!">Makanan</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Minuman</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        © 2016 Carasa
        <a class="grey-text text-lighten-4 right" href="#!">Badr Interactive</a>
        </div>
      </div>
    </footer>

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script>
     $(document).ready(function(){
      // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
      $('.modal-trigger').leanModal();
      $('#modal1').openModal();
      $('#modal1').closeModal();
  });
  </script>
</body>
</html>
