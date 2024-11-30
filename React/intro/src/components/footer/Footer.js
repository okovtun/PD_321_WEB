import React from 'react';

class Footer extends React.Component
{
    render()
    {

        let a= 2;
        console.log(a);
        return(
            
            <footer style={{backgroundColor: "#323232", color:"aliceblue", padding:"25px"}}>
            smallCamelStyle {a}
            <p>Copyright &#169; - {this.props.year}</p>
        </footer>
    );
}
}

export default Footer;