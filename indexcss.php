<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
html{
    scroll-behavior: smooth;
}
*{
    font-family: 'Poppins',sans-serif;
}

.container2{
    max-width: 1700px;
    width: 100%;
    padding: 0px 50px;
}

.carousel-inner{
    justify-content: center;
    align-items: center;
    transition: 1.2s ease all;
}

body{
    justify-content: center;
    align-items: center;
    display: flex;
    background-image: url(img/homebg.png);
    background-attachment: fixed;
    background-size: cover;
}

img{
    border-radius: 10px;
    position: relative;
}
#cupang:hover, #cupang2:hover, #guppy:hover, #guppy2:hover{
    transform: scale(1.02);
    transition: all 0.3s;
    background: linear-gradient(135deg, #4FD3C4, #488FB1);
}

article{
    font-size: medium;
    padding-bottom: 5%;
    max-width: 550px;
    width: 100%;
    font-weight: 400;
}

article img{
    width:100%;
    height: 60%;
}
#content{
    display: flex;
    flex-wrap: wrap;
}

a{
    color: white;
    text-decoration: none;
}

aside{
    width: 25%;
    height: 75%;
    float: right;
    color: #ffff;
}
aside label{
    font-weight: 700;
    font-size: large;
}
footer a{
    text-decoration: none;
    color: white;
    font-weight: 500;
}



#cupang, #cupang2, #guppy, #guppy2{
    max-width: 500px;
    width: 100%;
    height: auto;
    background: #488FB1;
    color: #ffff;
    margin: 10px 10px;
    border-radius: 10px;
}
.a{
    padding-left: 5px;
    font-weight: 700;
    font-size: 20px;
}

#cupang a, #cupang2 a, #guppy a, #guppy2 a{
    color: #ffff;
    text-decoration: none;
}
#cupang p, #cupang2 p, #guppy p, #guppy2 p{
    padding: 10px;
}
button{
    position: fixed;
    left: 5px;
    top: 20px;
    width: 35px;
    height: 35px;
    z-index: 100000;
    cursor: pointer;
    opacity: 100%;
    transition: background-color 0.2s;
}
</style>