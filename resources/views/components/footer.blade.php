<footer class="py-5 bg-dark">
    <div id="parte1" class="text-light">
      <div id="masInfo">
        <h3><b>Mas informacion</b></h3>
        <ul>
          <li>
            <img src="img/twitter20x20.png" height="20px" width="20px" /> Twiter
          </li>
          <li>
            <img src="img/github20x20.png" height="20px" width="20px" />
            <a href="https://github.com/ascenso-a-cabo/ascenso-a-cabo" class="text-white text-decoration-none">GitHub</a>
          </li>
          <li>
            <img src="img/linkedin20x20.png" height="20px" width="20px" />
            <a href="linkedin.com/in/daniel-f-valcarce" class="text-white text-decoration-none">Linkedin</a>
          </li>
        </ul>
      </div>
      <div id="logo">
        <img src="img/logoSinFondo.png" alt="" />
      </div>
      <div id="recursos">
        <h3><b>Recursos</b></h3>
        <ul>
          <li><a href="https://allmylinks.com/dvalcarce93" class="text-white text-decoration-none">Contacto</a></li>
          <li><a href="{{ route('agradecimientos') }}" class="text-white text-decoration-none">Agradecimientos</a></li>
          <li><a href="https://news.google.com/" class="text-white text-decoration-none">Noticias</a></li>
        </ul>
      </div>
    </div>
    <div id="parte2" class="text-light">
      <div id="esp">
        <img src="img/espana90x90.png" alt="" height="90px" width="90px" />
        <p>© 2022-2023 ascensoacabo.com</p>
      </div>
      <div id="tyc">
        <a href="" class="link-light">Terminos y condicones</a>
        <a href="" class="link-light">Informacion legal</a>
        <a href="" class="link-light">Privacidad</a>
      </div>
      <div id="rss">
        <img src="img/apple-logo40x40.png" alt="" height="40px" width="40px" />
        <img src="img/google-play40x40.png" alt="" height="40px" width="40px" />
        <img src="img/facebook40x40.png" alt="" height="40px" width="40px" />
        <img src="img/logotipo-de-instagram40x40.png" alt="" height="40px" width="40px"/>
        <img src="img/gorjeo40x40.png" alt="" height="40px" width="40px" />
      </div>
    </div>
</footer>
<style>

footer{
    height: fit-content;
    width: 100%;
    background-color: rgb(231, 228, 228);
    display: flex;
    flex-direction: column;
    align-items: center;
    font-family: Comfortaa, arial;
}

#parte1{
    width: 90%;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-around;
    border-top: solid;
    border-bottom: solid;
    border-color: gray;
}

li{
    margin: 10%;
}

li:hover{
    text-decoration: underline;
    cursor: pointer;
}

#parte2{
    width: 90%;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
}

#tyc{
    width: 50%;
    display: flex;
    flex-direction: row;
    justify-content: space-around;
}

#tyc > a {
    color: black;
}
#rss{
    display: flex;
    flex-direction: row;
}

#masInfo > ul{
    list-style: none;
}

@media only screen and (max-width: 600px) {
#parte1, #parte2 {
  flex-direction: column;
  align-items: center;
}

#tyc {
  width: 100%;
}

#tyc > a {
  margin-bottom: 10px;
}

#rss {
  justify-content: center;
}
}
</style>