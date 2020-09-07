import "./App.css";
import styled from "styled-components";
import React, { useState } from "react";

const Input = styled.input`
  margin: 16px auto;
  width: 50%;
  height: 20px;
  font-size: 16px;
  padding: 10px;
  border: solid 5px #333;
`;
const Label = styled.label`
  font-size: 26px;
  padding: 5px;
`;

function App() {
  const [competidor, setCompetidor] = useState("");
  const handleCompetidor = (e) => {
    setCompetidor(e.target.value);
  };
  const [tempo, setTempo] = useState("");
  const handleTempo = (e) => {
    setTempo(e.target.value);
  };
  const [items, setItems] = useState([]);
  const handleItems = () => {
    setItems([...items, competidor, tempo]);
  };

  return (
    <div className="App">
      <h1>Página de teste</h1>
      <table width="400" border="1">
        <thead>
          <tr>
            <th>Largada</th>
            <th>Competidor</th>
            <th>Tempo</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>...</td>
            <td>...</td>
          </tr>
          <tr>
            <td>2</td>
            <td>...</td>
            <td>...</td>
          </tr>
          <tr>
            <td>3 </td>
            <td>...</td>
            <td>...</td>
          </tr>
          <tr>
            <td>4 </td>
            <td>...</td>
            <td>...</td>
          </tr>
          <tr>
            <td> 5</td>
            <td>...</td>
            <td>...</td>
          </tr>
          <tr>
            <td>6 </td>
            <td>...</td>
            <td>...</td>
          </tr>
        </tbody>
      </table>

      <div>
        <Label>Competidor*</Label>
        <Input
          type="text"
          value={competidor}
          onChange={handleCompetidor}
          placeholder="Digite um competidor"
        />
        <p>{competidor} </p>
      </div>
      <div>
        <Label>Tempo*</Label>
        <Input
          type="number"
          value={tempo}
          onChange={handleTempo}
          placeholder="Digite um tempo"
        />
        <p>{tempo} </p>
        <br />
        <button onChange={handleItems}>Aperte aqui</button>
      </div>
    </div>
  );
}

export default App;
