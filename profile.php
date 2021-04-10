<!DOCTYPE html>
  <html>
    <head>
        <!--datepicker-->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <script src="js/jquery-3.4.1.js"></script>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="css/style.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>profile</title>
    </head>

    <body>
      <!--navbar-->
      <div class="navbar-fixed">
        <nav class="cyan darken-2">
          <div class="container">
            <div class="nav-wrapper">
              <a href="#!" class="brand-logo"><i class="large material-icons">person_pin</i></a>
              <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
              <ul class="right hide-on-med-and-down">
                <li><a href="registrasi.php">Tambah Data</a></li>
                <li><a href="data.php">Lihat Data</a></li>
                <li><a href="login.php">logout</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
          <!--SIDENAV-->
          <ul class="sidenav" id="mobile-nav">
          <li><a href="registrasi.php">Tambah Data</a></li>
          <li><a href="data.php">Lihat Data</a></li>
          <li><a href="login.php">logout</a></li>
          </ul>

          <!--Edit Profile-->
          <section id="box-profile">
            <div class="img-profile">
                <div class="photo" style="background-image: url(assets/img/zeti.jpg);"></div>
            </div>
            <div class="description">
                <h1 id="pName">ZETI AFIFAH</h1>
                <h5 id="pRole">181011401624</h5>
                <a class="waves-effect waves-light btn">Edit</a>
                <a class="waves-effect waves-light btn">Ubah Password</a>
            </div>
            <div class="information">
                <div class="data">
                    <p class="field">Tanggal Lahir</p>
                    <p class="text-gray">09/09/1999</p>
                </div>
                <div class="data">
                    <p class="field">Umur</p>
                    <p class="text-gray">21</p>
                </div>
                <div class="data">
                    <p class="field">Alamat</p>
                    <p class="text-gray">Tangerang Selatan</p>
                </div>
                <div class="data">
                    <p class="field">Nomer Hp</p>
                    <p class="text-gray">085848412132</p>
                </div>
            </div>
        </section>

        <!--Input Data-->
      <form action="" method="post">
      <div class="container mb-5" id="pasien">
	      <h3 align="center" style="margin: 60px 10px 10px 10px;">PROFILE</h3><hr>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="provinsi"><i class="material-icons">add_location</i>Provinsi</label>
              <select class="form-control" name="provinsi" id="provinsi">
                <option value="" disabled selected> Pilih Provinsi</option>
              </select>
            </div>
        
            <div class="form-group">
              <label for="kota"><i class="material-icons">add_location</i>Kabupaten/Kota</label>
              <select class="form-control" name="kota" id="kota">
                <option value="" disabled selected> Pilih Kabupaten/Kota</option>
              </select>
            </div>
  
            <div class="form-group">
              <label for="kecamatan"><i class="material-icons">add_location</i>Kecamatan</label>
              <select class="form-control" name="kecamatan" id="kecamatan">
              <option value="" disabled selected> Pilih Kecamatan</option>
              </select>
            </div>
            <div class="form-group">
              <label for="jenis"><i class="material-icons">local_hospital</i>Jenis Faskes</label>
              <select class="form-control" name="jenis" id="jenis">
              <option value="" disabled selected> Pilih Jenis Faskes</option>
              <option value="Puskesmas" > Puskesmas</option>
              <option value="RSUD" > RSUD</option>
              </select>
            </div>
            <div class="form-group">
              <label for="faskes"><i class="material-icons">local_hospital</i>Nama Faskes</label>
              <select class="form-control" name="faskes" id="faskes">
                <option value="" disabled selected> Pilih Nama Faskes</option>
              </select>
            </div>
            <div class="input-field col s12">
              <textarea id="nik" name="nik" class="materialize-textarea" maxlength="16"></textarea>
              <label for="nik"><i class="material-icons">create</i>NIK</label>
            </div>
            <div class="input-field col s12">
              <textarea id="nama" name="nama" class="materialize-textarea" data-length="120"></textarea>
              <label for="nama"><i class="material-icons">person_pin</i>Nama</label>
            </div>
            <div class="form-group">
              <label for="jk"><i class="material-icons">people_outline</i>Jenis Faskes</label>
              <select class="form-control" name="jk" id="jk">
              <option value="" disabled selected> Pilih Jenis Kelamin</option>
              <option value="Laki Laki" > Laki-Laki</option>
              <option value="Perempuan" > Perempuan</option>
              </select>
            </div>
            <div class="input-field col s6">
              <input id="umur" name="umur" type="number" min="12" max="65" class="validate" required/>
              <label for="umur"><i class="material-icons">perm_identity</i>Umur</label>
            </div>
            <div class="input-field col s6">
              <input id="tanggal" name="tgl_lahir" type="text" class="form-control datepicker"  required/>
              <label for="tanggal"><i class="material-icons">today</i>Tanggal Lahir</label>
            </div>
            <div class="input-field col s12">
              <textarea id="no_hp" name="no_hp" class="materialize-textarea" data-length="120"></textarea>
              <label for="no_hp"><i class="material-icons">account_box</i>No Hp</label>
            </div>
            <div class="input-field col s12">
              <textarea id="alamat" name="alamat" class="materialize-textarea" data-length="120"></textarea>
              <label for="alamat"><i class="material-icons">add_location</i>Alamat</label>
            </div>
            <button type="submit" name="submit" class="waves-effect waves-light btn">Save</button>
          </div>
        </div>
      </div>
      </form>

      <!--Ubah Password-->
        <form action="" method="post">
        <div class="container mb-5" id="pasien">
	    <h3 align="center" style="margin: 60px 10px 10px 10px;">UBAH PASSWORD</h3><hr>
            <div class="row">
                <div class="input-field col s6">
                    <input id="password" name="password" type="password"  class="validate" required/>
                    <label for="password"><i class="material-icons">lock_open</i>Password lama</label>
                </div>
                <div class="input-field col s6">
                    <input id="password2" name="password2" type="password"  class="validate" required/>
                    <label for="password2"><i class="material-icons">lock_outline</i>Password Baru</label>
                </div>
                <div class="input-field col s6">
                    <input id="password3" name="password3" type="password"  class="validate" required/>
                    <label for="password3"><i class="material-icons">lock_outline</i>Konfirmasi</label>
                </div>
                <button type="submit" name="submit" class="waves-effect waves-light btn">Save</button>
                
            </div>
        </div>
        </form>

       
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
          <script>
           const sideNav = document.querySelectorAll('.sidenav');
           M.Sidenav.init(sideNav);

           function showMenu(){
                var menu = document.getElementById("menu");
                var box = document.getElemetById("box-profile");

                if(menu.style.display === "block"){
                    menu.style.display = "none";
                    box.style.paddingTop = "0px";
                }else{
                    menu.style.display === "block";
                    box.style.paddingTop = "125px";
                    
                }
            }

            $(function(){
            $(".datepicker").datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true,
                todayHighlight: true,
            });
        });
          </script>
    </body>
  </html>