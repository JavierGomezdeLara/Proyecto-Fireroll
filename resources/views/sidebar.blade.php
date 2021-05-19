<section class="mb-4">

  <nav role="navigation">
    <div id="menuToggle">
      <!--
    A fake / hidden checkbox is used as click reciever,
    so you can use the :checked selector on it.
    -->
      <input type="checkbox" />

      <!--
    Some spans to act as a hamburger.
    
    They are acting like a real hamburger,
    not that McDonalds stuff.
    -->
      <div class="mb-5">
        <span style="background-color: black;"></span>
        <span style="background-color: black;"></span>
        <span style="background-color: black;"></span>
      </div>


      <!--
    Too bad the menu has to be inside of the button
    but hey, it's pure CSS magic.
    -->
      <div id="menu">
        <h6 class="font-weight-bold mb-3">Filtro</h6>
        <div class="form-check pl-0 mb-3">
          
          <label class="form-check-label small text-uppercase card-link-secondary" for="new">Banners</label>
          <input type="checkbox" class="filled-in mt-3" id="Banners" style="opacity: 1; position: relative; left:45%; width: 15px; height: 15px;">
        </div>
        <div class="form-check pl-0 mb-3">
          <label class="form-check-label small text-uppercase card-link-secondary" for="used">Iconos</label>
          <input type="checkbox" class="filled-in mt-3" id="Iconos" style="opacity: 1; position: relative; left:45%; width: 15px; height: 15px;">
        </div>
        <div class="form-check pl-0 mb-3">
          <label class="form-check-label small text-uppercase card-link-secondary" for="collectible">Arte</label>
          <input type="checkbox" class="filled-in  mt-3" id="Arte" style="opacity: 1; position: relative; left:45%; width: 15px; height: 15px;">
        </div>
        <div class="form-check pl-0 mb-3 pb-1">
          <label class="form-check-label small text-uppercase card-link-secondary" for="renewed">Figuras</label>
          <input type="checkbox" class="filled-in  mt-3" id="Figuras" style="opacity: 1; position: relative; left:45%; width: 15px; height: 15px;">
        </div>
        <div class="form-check pl-0 mb-3 pb-1">
          <label class="form-check-label small text-uppercase card-link-secondary" for="renewed">Manuales</label>
          <input type="checkbox" class="filled-in mt-3" id="Manuales"  style="opacity: 1; position: relative; left:45%; width: 15px; height: 15px;">
        </div>
      </div>
    </div>
  </nav>
</section>

<style>
  #menuToggle {
    display: block;
    position: relative;
    top: 50px;
    left: 50px;

    z-index: 1;

    -webkit-user-select: none;
    user-select: none;
  }

  #menuToggle a {
    text-decoration: none;
    color: #232323;

    transition: color 0.3s ease;
  }

  #menuToggle a:hover {
    color: tomato;
  }


  #menuToggle input {
    display: block;
    width: 40px;
    height: 32px;
    position: absolute;
    top: -7px;
    left: -5px;

    cursor: pointer;

    opacity: 0;
    /* hide this */
    z-index: 2;
    /* and place it over the hamburger */

    -webkit-touch-callout: none;
  }

  /*
 * Just a quick hamburger
 */
  #menuToggle span {
    display: block;
    width: 33px;
    height: 4px;
    margin-bottom: 5px;
    position: relative;

    background: #cdcdcd;
    border-radius: 3px;

    z-index: 1;

    transform-origin: 4px 0px;

    transition: transform 0.5s cubic-bezier(0.77, 0.2, 0.05, 1.0),
      background 0.5s cubic-bezier(0.77, 0.2, 0.05, 1.0),
      opacity 0.55s ease;
  }

  #menuToggle span:first-child {
    transform-origin: 0% 0%;
  }

  #menuToggle span:nth-last-child(2) {
    transform-origin: 0% 100%;
  }

  /* 
 * Transform all the slices of hamburger
 * into a crossmark.
 */
  #menuToggle input:checked~span {
    opacity: 1;
    transform: rotate(45deg) translate(-2px, -1px);
    background: #232323;
  }

  /*
 * But let's hide the middle one.
 */
  #menuToggle input:checked~span:nth-last-child(3) {
    opacity: 0;
    transform: rotate(0deg) scale(0.2, 0.2);
  }

  /*
 * Ohyeah and the last one should go the other direction
 */
  #menuToggle input:checked~span:nth-last-child(2) {
    transform: rotate(-45deg) translate(0, -1px);
  }

  /*
 * Make this absolute positioned
 * at the top left of the screen
 */
  #menu {
    position: absolute;
    width: 300px;
    margin: -100px 0 0 -50px;
    padding: 50px;
    padding-top: 125px;

    background: #ededed;
    list-style-type: none;
    -webkit-font-smoothing: antialiased;
    /* to stop flickering of text in safari */

    transform-origin: 0% 0%;
    transform: translate(-100%, 0);

    transition: transform 0.5s cubic-bezier(0.77, 0.2, 0.05, 1.0);
  }

  /*
 * And let's slide it in from the left
 */
  #menuToggle input:checked~div {
    transform: none;
  }
</style>










<script>
  function myFunction() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }
</script>