import logo from './logo.svg';
import './App.css';
import Article from './article/Article'

function App() {
  return (
    <div className="App">
      <header className="App-header">
        <img src={logo} className="App-logo" alt="logo" />
        <h1>Hello React</h1>
        <p>
          Edit <code>src/App.js</code> and save to reload.
        </p>
        <a
          className="App-link"
          href="https://reactjs.org"
          target="_blank"
          rel="noopener noreferrer"
        >
          Learn React
        </a>
      </header>
      <Article />
      <Article />
      <Article />
      <Article />
      <Article />
      <Article />
    </div>
  );
}

export default App;
