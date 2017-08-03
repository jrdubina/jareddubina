import React from "react";
import {render} from "react-dom";

class FirstApp extends React.Component{
  render() {
    return (
      <div>
        <h1>Hello!</h1>
      </div>
    );
  }
}

render(<FirstApp/>, window.document.getElementByID("FirstApp"));
