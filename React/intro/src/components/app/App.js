
import './App.css';
import Header from '../header/Header';
import Article from '../article/Article';
import Footer from '../footer/Footer';
import Power from '../power/Power';

function App() {
  return (
    <div className="App">
      <Header title="Hello React" description="This is my first React App. This phrase passed using parameters over 'PROPS'" />
      <Power a={2} n={8} />
      <Article />
      <Article />
      <Article />
      <Footer />
    </div>
  );
}

export default App;
