function Power(props)
{
    let a = props.a;
    let n = props.n;
    let N=1;
    for(let i = 0; i<n; i++)
    {
        N = N*a;
    }

    return(
        <h3>{a}<sup>{n}</sup> = {N};</h3>
    )
}

export default Power;