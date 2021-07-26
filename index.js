import React, { useState } from "react";
import ReactDOM from "react-dom";

import "./index";
import "./index.php";

function App() {
  document.location.href = "index.php";

  function enviar(evt) {
    console.log("Nombre:", "$nombre");
    console.log("domicilio:", "$domicilio");
    console.log("telefono", "$telefono");
    console.log("nikc", "$nick");
    console.log("password", "$password");
    console.log("tipo de usuario", "$tipo de usuario");

  }

  return (
    <div>
      <h1>************* REGISTRO DE USUARIO   ************</h1>
      <p>
        Nombre:
        <input placeholder="Nombre" />
      </p>

      <p>
        Domicilio:
        <input placeholder="Domicilio" />
      </p>

      <p>
        Telefono:
        <input placeholder="Telefono" />
      </p>
      
      <p>
        Nick:
        <input placeholder="Nick" />
      </p>

      <p>
        Password:
        <input placeholder="Password" />
      </p>

      <p>
        Tipo de usuario:
        <input placeholder="Tipo de usuario " />
      </p>

      <button onClick={enviar}>Registrar</button>
    </div>
  );
}

const rootElement = document.getElementById("root");
ReactDOM.render(<App />, rootElement);
