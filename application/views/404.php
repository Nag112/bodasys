<style>
    #notfound {
  position: relative;
  height: 80vh;
}
.category-header-area{
  background-color: #171a1d;
}
#notfound .notfound {
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}

.notfound {
  max-width: 520px;
  width: 100%;
  text-align: center;
  line-height: 1.4;
}

.notfound .notfound-404 {
  height: 190px;
}

.notfound .notfound-404 h1 {

  font-size: 146px;
  font-weight: 700;
  margin: 0px;
  color: #fff;
}

.notfound .notfound-404 h1>img{
  display: inline-block;
  width: 100px;
  height: 100px;
  background-size: cover;
  -webkit-transform: scale(1.4);
      -ms-transform: scale(1.4);
          transform: scale(1.4);
  z-index: -1;
}

.notfound h2 {

  font-size: 22px;
  font-weight: 700;
  margin: 0;
  text-transform: uppercase;
  color: #fff;
}

.notfound p {

  color: #fff;
  font-weight: 300;
}

.notfound a {

  display: inline-block;
  padding: 12px 30px;
  font-weight: 700;
  background-color: #122179;
  color: #fff;
  border-radius: 40px;
  text-decoration: none;
  -webkit-transition: 0.2s all;
  transition: 0.2s all;
}

.notfound a:hover {
  opacity: 0.8;
}

@media only screen and (max-width: 767px) {
  .notfound .notfound-404 {
    height: 115px;
  }
  .notfound .notfound-404 h1 {
    font-size: 86px;
  }
  .notfound .notfound-404 h1>img {
    width: 80px;
    height: 80px;
  }
}
</style>
<section class="category-header-area">
<div id="notfound">
		<div class="notfound">
			<div class="notfound-404">
				<h1>4<img alt="0" src="<?= base_url('assets/images/icon/emoji.png')?>"/>4</h1>
			</div>
			<h2>Oops! Page Not Be Found</h2>
			<p>Sorry but the page you are looking for does not exist, have been removed, name changed or is temporarily unavailable</p>
			<a href="<?php echo site_url(); ?>">back to home</a>
		</div>
	</div>
</section>