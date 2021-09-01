<style type="text/css">
	

html{
	scroll-behavior: smooth;
}

*{ margin:  0 ;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Montserrat', sans-serif;

}

.nav_style{

	background-color: #6B5B95 !important;
}

.nav_style a{
	color: white;
}

.main_header{
	width: 100%;
	height: 450px;
}

.rightside h1{
	font-size: 3rem;
}

.corona_rot img{
	animation: gocorona 5s linear infinite;
}

@keyframes gocorona{
                0% {transform: rotate(0);}
                50%{ transform: rotate(360deg); }
}

.leftside img{
      animation: heartbeat 5s linear infinite;
}


@keyframes heartbeat{
                0% {transform: scale(0.75);}
                20%{ transform: scale(1); }
                40% {transform: scale(0.75);}
                60% {transform: scale(0.75);}
                80% {transform: scale(1);}
                100% {transform: scale(0.75);}
}

.corona_update{
	margin: 0 0 30px 0;
}

.corona_update  h3{
	color: #ff7675;
	
}

.corona_update  h1{
	font-size: 2rem;
	text-align: center;
}	


.about_corona{
	margin: 20px 0 20px 0;
}

h3{
	color: orange;
	font-size: 40px;

}

.sub_section{
	background-color: #fbfafd;
}

.footer_style{
	background-color: #a29bfe !important;
}

.footer_style p{
	margin-bottom: 0;
}

#myBtn {
	display: none;
	position: fixed;
	bottom: 30px;
	right: 40px;
	z-index: 99;
	border: none;
	outline: none;
	background-color: #00A8FF;
	color:white;
	cursor: pointer;
	padding: 10px;
	border-radius: 10px;
}


#myBtn:hover{
	background: #606060;

}



@media(max-width:  768px){

	.main_header{height:  700px;
		text-align: center;
	}
.main_header h1{
	text-align: center;
	padding: 0;
	width: 100%;
	font-size: 30px;
}
 .count_style{
  	display: inline !important ;
  }

 .count_style p{
 	text-align: center;
 }
}








</style>