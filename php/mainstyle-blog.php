<?php
  header("Content-Type: text/css; charset: UTF-8");
?>
* {
    margin: 0;
    padding: 0;
    color: #707070;
    font-family: "Open Sans", sans-serif;
    font-display: fallback;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }
  
body h1 {
  font-size: 48px;
  font-weight: 400;
  line-height: 160%;
  margin-bottom: 30px;
}
body h2, body h3, body h4, body h5, body h6 {
  font-weight: 700;
  line-height: 160%;
}
body p, body span {
  font-size: 18px;
  font-weight: 400;
  line-height: 140%;
}
body.no_scroll {
  overflow: hidden;
  overflow-y: hidden;
}
body.no-scroll {
  overflow: hidden;
}
body .img-responsive {
  display: block;
  max-width: 100%;
}
body .content {
  width: 95%;
  max-width: 1280px;
  margin: 0 auto;
}
body .content:before {
  display: table;
  content: "";
  clear: both;
}
body .content:after {
  display: table;
  content: " ";
  clear: both;
}
body a {
  cursor: pointer;
  text-decoration: none;
}
body a:hover {
  text-decoration: none;
}
body a:focus {
  text-decoration: none;
}

.cafe_index {
  background-image: url("im/fondo-taza.jpg");
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  padding: 230px 0;
}
.cafe_index h1 {
  font-size: 48px;
  font-weight: 700;
  line-height: 160%;
  margin-bottom: 30px;
  color: #fff;
}
.cafe_index p {
  font-size: 18px;
  font-weight: 400;
  line-height: 160%;
  margin-bottom: 50px;
  color: #fff;
  width: 100%;
  max-width: 600px;
}
.cafe_index .btns {
  width: 100%;
  max-width: 600px;
  display: flex;
  justify-content: space-evenly;
}
.cafe_index .btns a {
  border: 1px solid #fff;
  color: #fff;
  font-size: 16px;
  font-weight: 600;
  padding: 15px 20px;
  border-radius: 10px;
}
.cafe_index .btns a:hover {
  border: 1px solid #fff;
  background-color: #fff;
  color: #000;
}

html, body {
  height: 100%;
}
/*Estilo de ste.css*/
header{
    position:fixed ;
    width: 100%;
    top: 0;
    right: 0;
    z-index: 1000;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 18px 100px;
    transition: 0.5s linear;
    background: var(--text-color);
    text-align: center;
}

.logo img{
    width: 60px;
}

.navbar{
    display: flex;
}
.navbar a{
    padding: 8px 17px;
    color: var(--bg-color);
    font-size: 1rem;
    text-transform: uppercase;
    font-weight: 500;

}
.navbar a:hover{
    background: var(--main-color);
    border-radius: 0.2rem;
    transition: 0.2s all linear;
}

.header-icon {
    font-size: 22px;
    cursor: pointer;
    z-index: 10000;
    display: flex;
    column-gap: 0.8rem;
}
.header-icon .bx{
    color: var(--bg-color);
}

.header-icon .bx{
    color: var(--main-color);
}
#menu-icon{
    color: var(--bg-color);
    font-size: 24px;
    z-index: 100001;
    cursor: pointer;
    display: none;
}

.heading {
    text-align: center;
}
.heading h2{
    color: #f1f1f1;
    font-size: 1.8rem;
    text-transform: uppercase;
}

.products-container {
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(280px,auto));
    gap: 1.5 rem;
    margin: 2rem;
}
.products-container .box{
    position: relative;
    padding: 10px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    border-radius: 0.5rem;
    box-shadow: var(--box-shadow);
}

.products-container img{
    width: 100%;
    height: 250px;
    object-fit: contain;
    object-position: center;
    padding: 20px;
    background: #f1f1f1;
    border-radius: 00.5rem;
}

.products-container .box h3{
    color: #f1f1f1;
    font-size: 1rem;
    font-weight: 600;
    text-transform: uppercase;
    margin: 0.5rem 0 0.5rem;
}
.products-container .box .content{
    display: flex;
    align-items: center;
    justify-content: space-around;
}

.products-container .box .content span{
    padding: 0 1 rem;
    color: var(--bg-color);
    background:var(--main-color) ;
    border-radius: 4px;
    font-weight: 500;
}

.products-container .box .content a{
    
    padding: 0 1 rem;
    color: #f1f1f1;
    border :2px solid var(--main-color);
    border-radius: 4px;
    font-weight: 500;
    text-transform: uppercase;
}
.products-container .box .content a:hover{
    background-color: var(--main-color);
    color: var(--bg-color);
    transition: 0.2s all linear;
}


.home{
    width: 100%;
    color: #fff;
    min-height: 100vh;
    background: url(img/bg.png);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(17rem,auto));
    align-items: center;
    gap: 1.5rem;
}

.home-text h1{
    font-size: 3.4rem;
    color: #ae6018;
    text-transform: uppercase;
    letter-spacing: 1px;

}

.home-text p{
    font-size: 0,938rem;
    color: #8a6f4d;
    margin: 0.5rem 0 1.4rem;

    
}

.btn{
    padding: 10px 40px;
    border-radius: 0.3rem;
    background-position: var(--main-color);
    color: var(--bg-color);
    font-weight: 500;
}

.btn:hover{
    background: #8a6f4d;
}

.footer{

    padding: 20PX;
    text-align: center;
    background: #8a6f4d;
    color: #f1f1f1;
}

/*Estilo del carrito*/
.main_carrito {
  background-image: url("im/fondo-taza.png") !important;
  position: relative;
  z-index: 1;
  height: 100%;
}
.main_carrito .carrito {
  margin-top: 80px;
  padding: 40px;
}
.main_carrito .carrito .body_carrito {
  display: flex;
  gap: 80px;
}
.main_carrito .carrito .body_carrito .catalago_productos {
  width: 100%;
  max-width: 70%;
}
.main_carrito .carrito .body_carrito .catalago_productos h2 {
  color: #fff;
  font-size: 28px;
  padding-bottom: 30px;
  border-bottom: 1px solid #fff;
}
.main_carrito .carrito .body_carrito .catalago_productos .item_productos {
  display: grid;
  grid-template-columns: 1fr;
}
.main_carrito .carrito .body_carrito .catalago_productos .item_productos .producto {
  padding: 50px 0;
  display: flex;
  justify-content: space-evenly;
  border-bottom: 1px solid #fff;
  position: relative;
  z-index: 1;
}
.main_carrito .carrito .body_carrito .catalago_productos .item_productos .producto::before {
  content: "";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #b37639;
  opacity: 0.65;
  z-index: -1;
}
.main_carrito .carrito .body_carrito .catalago_productos .item_productos .producto .image_producto {
  width: 100%;
  display: block;
  margin: auto 20px auto;
}
.main_carrito .carrito .body_carrito .catalago_productos .item_productos .producto .image_producto img {
  width: 100%;
  display: block;
  margin: auto;
}
.main_carrito .carrito .body_carrito .catalago_productos .item_productos .producto .descripcion_producto {
  width: 100%;
  margin-left: 50px;
  display: block;
  margin: auto 0px auto 50px;
}
.main_carrito .carrito .body_carrito .catalago_productos .item_productos .producto .descripcion_producto h3 {
  color: #fff;
  font-size: 20px;
}
.main_carrito .carrito .body_carrito .catalago_productos .item_productos .producto .descripcion_producto p {
  color: #fff;
  font-size: 18px;
}
.main_carrito .carrito .body_carrito .catalago_productos .item_productos .producto .cantidad_producto {
  display: block;
  margin: auto;
  width: 100%;
  max-width: 70px;
}
.main_carrito .carrito .body_carrito .catalago_productos .item_productos .producto .cantidad_producto p {
  margin: auto;
  font-size: 18px;
  font-weight: 700;
  text-align: center;
  color: #fff;
  border: 1px solid #fff;
  padding: 15px;
}

.main_carrito .carrito .body_carrito .catalago_productos .item_productos .producto .precio_producto {
  width: 100%;
  display: block;
  margin: auto;
}
.main_carrito .carrito .body_carrito .catalago_productos .item_productos .producto .precio_producto p {
  color: #fff;
  font-size: 20px;
  font-weight: 400;
  text-align: center;
}
.main_carrito .carrito .body_carrito .catalago_precios {
  width: 100%;
  max-width: 30%;
}
.main_carrito .carrito .body_carrito .catalago_precios h2 {
  color: #fff;
  font-size: 28px;
  padding-bottom: 30px;
  text-align: center;
  border-bottom: 1px solid #fff;
}
.main_carrito .carrito .body_carrito .catalago_precios .sub_total {
  padding: 50px 0;
  border-bottom: 1px solid #fff;
  display: grid;
  grid-template-columns: 1fr 1fr;
}
.main_carrito .carrito .body_carrito .catalago_precios .sub_total label {
  color: #fff;
  font-size: 20px;
  font-weight: 700;
}
.main_carrito .carrito .body_carrito .catalago_precios .sub_total p {
  color: #fff;
  font-size: 18px;
  font-weight: 400;
}
.main_carrito .carrito .body_carrito .catalago_precios .total_precio {
  margin: 30px 0;
  display: grid;
  grid-template-columns: 1fr 1fr;
}
.main_carrito .carrito .body_carrito .catalago_precios .total_precio label {
  color: #fff;
  font-size: 20px;
  font-weight: 700;
}
.main_carrito .carrito .body_carrito .catalago_precios .total_precio p {
  color: #fff;
  font-size: 18px;
  font-weight: 400;
}
<!-- .main_carrito .carrito .body_carrito .catalago_precios .fin_compra button {
  padding: 20px 50px;
  display: block;
  margin: auto;
  background-color: #b37639;
  border: 1px solid #fff;
  border-radius: 50px;
}
.main_carrito .carrito .body_carrito .catalago_precios .fin_compra button:hover {
  background-color: #7e460d;
}
.main_carrito .carrito .body_carrito .catalago_precios .fin_compra button a {
  color: #fff;
  font-size: 18px;
}
.main_carrito .carrito .body_carrito .catalago_precios .fin_compra button a:hover {
  color: #b37639;
} -->