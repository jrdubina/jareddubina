import React from "react";
 import ReactDOM from 'react-dom';

class FirstApp extends React.Component {
  render() {
    return (
      <div>
        <h1>Hello!</h1>
      </div>
    );
  }
}

ReactDOM.render(<FirstApp/>, window.document.getElementById("FirstApp"));
