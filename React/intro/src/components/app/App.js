
import './App.css';
import Header from '../header/Header';
import Nav from '../nav/Nav'
import Power from '../power/Power';
import Switch from '../switch/Switch';
import Article from '../article/Article';
import Footer from '../footer/Footer';
import data from '../article/db.json';

function App() {

  let nav = 
  {
    "Главная" :   "/index",
    "Новости" :   "/new",
    "Магазин" :   "/shop",
    "О нас"   :   "/about",
    "Контакты":   "/contacts",
  }

  let db = data;

  return (
    <div className="App">
      <Header title="Hello React" description="This is my first React App. This phrase passed using parameters over 'PROPS'" />
      <Nav navigation={nav} />
      <Switch />
      <Power a={2} n={8} />
      <Article db={db}/>
      <Footer year="2024" />
    </div>
  );
}

export default App;
