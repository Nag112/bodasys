<style>
    #notfound {
  position: relative;
  color:#fff;
  height: 60vh;
}
.category-header-area{
  background-color: #242B2E;
}
#notfound .notfound {
  position: absolute;
  left: 50%;
  color:#fff;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}

.notfound {
  max-width: 520px;
  width: 100%;
  color:#fff;
  text-align: center;
  line-height: 1.4;
}

.notfound .notfound-404 {
  height: 190px;
  color:#fff;
}

.notfound .notfound-404 h1 {

  font-size: 146px;
  color:#fff;
  font-weight: 700;
  margin: 0px;
 
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
  color:#fff;
  text-transform: uppercase;
}

.notfound p {
  color:#fff;
  font-weight: 300;
}

.notfound a {

  display: inline-block;
  /* padding: 12px 30px; */
  font-weight: 700;
  /* background-color: #122179; */
color:#fff;
  /* border-radius: 40px; */
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
			<h2 class="my-1">Oops! Page Not Found</h2>
			<p class="my-2">Sorry but the page you are looking for does not exist, have been removed, name changed or is temporarily unavailable</p>
			<a href="<?php echo site_url(); ?>"><u>back to home</u></a>
		</div>
	</div>
</section>