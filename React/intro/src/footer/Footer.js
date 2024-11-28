function Footer()
{
    let a= 2;
    console.log(a);
    return(

        <footer style={{backgroundColor: "#323232", color:"aliceblue", padding:"25px"}}>
            smallCamelStyle {a}
            <p>Copyright &#169;</p>
        </footer>
    );
}

export default Footer;