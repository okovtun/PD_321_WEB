import male from './icons/male.png';
import female from './icons/female.png';

import './Acticle.css';

function Article(props) {
    console.log(props.db);
    // if(props.db["people"][0].pol == "male")icon = male;
    // else icon=female;
    console.log(2 === "2");
    return (
        //{console.log("Hello")}
        <div className='app'>
            {
                Object.keys(props.db["people"]).map(item => {
                    let icon = props.db["people"][item].pol === "male" ? male : female;
                    //console.log(item);
                    return (
                    <div className="card" key={item}>
                        <img src={props.db["people"][item].photo} alt="" />
                        <div className="name">
                            {props.db["people"][item].name + ' ' + props.db["people"][item].surname}
                        </div>

                        <div className="pol">
                            <img src={icon} alt="" />
                        </div>

                        <div className="age">
                            {props.db["people"][item].age}
                        </div>
                    </div>
                    )
                })
            }
        </div>
    );
}

export default Article;