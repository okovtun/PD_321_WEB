import './Nav.css';

function Nav(props)
{
    return(
        <nav>
            <ul>
                {
                        Object.keys(props.navigation).map(elem =>
                            <li key={elem}><a href={props.navigation[elem]}>{elem}</a></li>
                            //  VirtualDOM
                        )
                }
           </ul>
        </nav>
    )
}

export default Nav;