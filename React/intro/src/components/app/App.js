
import './App.css';
import Header from '../header/Header';
import Nav from '../nav/Nav'
import Power from '../power/Power';
import Article from '../article/Article';
import Footer from '../footer/Footer';

function App() {

  let nav = 
  {
    "Главная" :   "/index",
    "Новости" :   "/new",
    "Магазин" :   "/shop",
    "О нас"   :   "/about",
    "Контакты":   "/contacts",
  }

  return (
    <div className="App">
      <Header title="Hello React" description="This is my first React App. This phrase passed using parameters over 'PROPS'" />
      <Nav navigation={nav} />
      <Power a={2} n={8} />
      <Article />
      <Article />
      <Article />
      <Footer />
    </div>
  );
}

export default App;
