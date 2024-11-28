import logo from '../../logo.svg';

function Header(props)
{
    // let title = "Hello React";
    // let description = "This is my first React App";
    return(
        <header className="App-header">
        <img src={logo} className="App-logo" alt="logo" />
        <h1>{props.title}</h1>
        <p>{props.description}</p>
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
    )
}

export default Header;