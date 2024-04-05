<style>
/* Googlefont Poppins CDN Link */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box ;
  font-family: 'Poppins', sans-serif !important;
}
.sidebar{
  position: fixed !important;
  height: 100% !important;
  width: 240px !important;
  background: #0A2558 !important;
  transition: all 0.5s ease !important;
}
.sidebar.active{
  width: 60px !important;
}
.sidebar .logo-details{
  height: 80px  !important;
  display: flex !important;
  align-items: center !important;
}
.sidebar .logo-details i{
  font-size: 28px !important;
  font-weight: 500 !important;
  color: #fff !important;
  min-width: 60px !important;
  text-align: center !important;
}
.sidebar .logo-details .logo_name{
  color: #fff !important;
  font-size: 24px !important;
  font-weight: 500 !important;
}
.sidebar .side-nav{
  margin-top: 10px !important;
  left:0 !important;
  padding:0 !important;
}
.sidebar .side-nav li{
  position: relative !important;
  list-style: none !important;
  height: 50px !important;
}
.sidebar .side-nav li a{
  height: 100% !important;
  width: 100% !important;
  display: flex !important;
  align-items: center !important;
  text-decoration: none !important;
  transition: all 0.4s ease !important;
}
.sidebar .side-nav li a.active{
  background: #081D45 !important;
}
.sidebar .side-nav li a:hover{
  background: #081D45 !important;
}
.sidebar .side-nav li i{
  min-width: 60px !important;
  text-align: center !important;
  font-size: 18px !important;
  color: #fff !important;
}
.sidebar .side-nav li a .links_name{
  color: #fff !important;
  font-size: 15px !important;
  font-weight: 400 !important;
  white-space: nowrap !important;
}
.sidebar .side-nav .log_out{
  position: absolute !important;
  bottom: 0 !important;
  width: 100% !important;
}
.home-section{
  position: relative !important;
  background: #f5f5f5 !important;
  min-height: 100vh !important;
  width: calc(100% - 240px) !important;
  left: 240px !important;
  transition: all 0.5s ease !important;
}
.sidebar.active ~ .home-section{
  width: calc(100% - 60px) !important;
  left: 60px !important;
}
.home-section nav{
  display: flex !important;
  justify-content: space-between !important;
  height: 80px !important;
  background: #fff !important;
  display: flex !important;
  align-items: center !important;
  position: fixed !important;
  width: calc(100% - 240px) !important;
  left: 240px !important;
  z-index: 100 !important;
  padding: 0 20px !important;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1) !important;
  transition: all 0.5s ease !important;
}
.sidebar.active ~ .home-section nav{
  left: 60px !important;
  width: calc(100% - 60px) !important;
}
.home-section nav .sidebar-button{
  display: flex !important;
  align-items: center !important;
  font-size: 24px !important;
  font-weight: 500 !important;
}
nav .sidebar-button i{
  font-size: 35px !important;
  margin-right: 10px !important;
}

.home-section nav .profile-details{
  display: flex;
  align-items: center;
  background: #F5F6FA;

  border: 2px solid #EFEEF1;
  border-radius: 6px;
  height: 50px;
  min-width: 190px;
  padding: 0 15px 0 2px;
}
nav .profile-details img{
  height: 40px;
  width: 40px;
  border-radius: 6px;
  object-fit: cover;
}
nav .profile-details .admin_name{
  font-size: 15px;
  font-weight: 500;
  color: #333;
  margin: 0 10px;
  white-space: nowrap;
}
nav .profile-details i{
  font-size: 25px;
  color: #333;
}
.home-section .home-content{
  position: relative !important;
  padding-top: 104px !important;
}
.home-content .overview-boxes{
  display: flex !important;
  align-items: center !important;
  justify-content: space-between !important;
  flex-wrap: wrap !important;
  padding: 0 20px !important;
  margin-bottom: 26px !important;
}
.overview-boxes .box{
  display: flex !important;
  align-items: center !important;
  justify-content: center !important;
  width: calc(100% / 4 - 15px) !important;
  background: #fff;
  padding: 15px 14px;
  border-radius: 12px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.1);
}
.overview-boxes .box-topic{
  font-size: 20px;
  font-weight: 500;
}
.number{
  display: inline-block;
  font-size: 35px;
  margin-top: -6px;
  font-weight: 500;
}
.home-content .box .indicator{
  display: flex;
  align-items: center;
}
.home-content .box .indicator i{
  height: 20px;
  width: 20px;
  background: #8FDACB;
  line-height: 20px;
  text-align: center;
  border-radius: 50%;
  color: #fff;
  font-size: 20px;
  margin-right: 5px;
}
.box .indicator i.down{
  background: #e87d88;
}
.home-content .box .indicator .text{
  font-size: 12px;
}
.cart{
  display: inline-block;
  font-size: 32px;
  height: 50px;
  width: 50px;
  background: #cce5ff;
  line-height: 50px;
  text-align: center;
  color: #66b0ff;
  border-radius: 12px;
  margin: -15px 0 0 6px;
}

.cart.four{
   color: #e05260;
   background: #f7d4d7;
 }
.home-content .total-order{
  font-size: 20px;
  font-weight: 500;
}
.home-content .users-boxes{
  display: flex !important;
  justify-content: space-between !important;
  /* padding: 0 20px; */
}

/* left box */
.home-content .users-boxes .recent-users{
  width: 65% !important;
  background: #fff;
  padding: 20px 30px;
  margin: 0 20px;
  border-radius: 12px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}
.home-content .users-boxes .users-details{
  display: flex !important;
  align-items: center;
  justify-content: space-between !important;
}
.userss-boxes .box .title{
  font-size: 24px;
  font-weight: 500;
  /* margin-bottom: 10px; */
}
.users-boxes .users-details li.topic{
  font-size: 20px;
  font-weight: 500;
}
.users-boxes .users-details li{
  list-style: none;
  margin: 8px 0;
}
.users-boxes .users-details li a{
  font-size: 18px;
  color: #333;
  font-size: 400;
  text-decoration: none;
}
.users-boxes .box .button{
  width: 100%;
  display: flex !important;
  justify-content: flex-end !important;
}
.users-boxes .box .button a{
  color: #fff;
  background: #0A2558;
  padding: 4px 12px;
  font-size: 15px;
  font-weight: 400;
  border-radius: 4px;
  text-decoration: none;
  transition: all 0.3s ease;
}
.userss-boxes .box .button a:hover{
  background:  #0d3073;
}

/* Right box */
.home-content .users-boxes .available-computers{
  width: 35% !important;
  background: #fff;
  padding: 20px 30px !important;
  margin: 0 20px 0 0;
  border-radius: 12px !important;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}
.users-boxes .available-computers li{
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin: 10px 0;
}
.users-boxes .available-computers li a img{
  height: 40px;
  width: 40px;
  object-fit: cover;
  border-radius: 12px;
  margin-right: 10px;
  background: #333;
}
.users-boxes .available-computers li a{
  display: flex;
  align-items: center;
  text-decoration: none;
}
.users-boxes .available-computers li .product,
.price{
  font-size: 17px;
  font-weight: 400;
  color: #333;
}
.plane{
    width: 800px;
    padding: 10px;
    margin-left: 100px;
    overflow-y: scroll;
    overflow-x: scroll;
    height: fit-content;
    max-height: 60.4vh;
}
ol{
    list-style: none;
    padding: 0;
    margin: 0;
}
.seats{

    display: flex !important;
    flex-direction: row !important;
    flex-wrap: nowrap !important;
    justify-content: flex-start !important;
}
.seat{
    display: flex !important;
    flex: 0 0 10% !important;
    padding: 20px;
    position: relative !important;
}
.seat label{
    display: block !important;
    position: relative !important;
    width: 100%;
    text-align: center;
    font-size: 14px;
    font-weight: bolder;
    line-height: 1.5rem;
    padding: 4px 0;
    background: #0A2558;
    border-radius: 5px;
    color: white;
}
.assigned-seat label{
    display: block !important;
    position: relative !important;
    width: 100%;
    text-align: center;
    font-size: 14px;
    font-weight: bolder;
    line-height: 1.5rem;
    padding: 4px 0;
    background: #E3DDDC;
    border-radius: 5px;
    color: white;
}
.seat label:hover{
    cursor: pointer;
    box-shadow: 0 0 0px 2px green;
}
.seat input{
    position: absolute;
}
.seat input:checked + label{
    background: #eff2ef;
}

.Available{
    background-color: #0A2558!important;
}
.assigned{
    background-color: #E3DDDC!important;
}
.computer-table{
    overflow-y: scroll;
    height: 600px;
  }
  .computer-table  table{
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  .computer-table  td,.computer-table  th {
    padding: 8px;
    text-align:center;
  }
 .computer-table  th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    color: black;
  }

/********** Scroll********/
/* width */
::-webkit-scrollbar {
    width: 5px;
  }

  /* Track */
  ::-webkit-scrollbar-track {
    background: #f1f1f1;
  }

  /* Handle */
  ::-webkit-scrollbar-thumb {
    background: #888;
  }

  /* Handle on hover */
  ::-webkit-scrollbar-thumb:hover {
    background: #555;
  }
  ::-webkit-scrollbar:horizontal{
    height: 10px;

  }
  ::-webkit-scrollbar-thumb:horizontal{
          background: #888;
          border-radius: 10px;
  }

/* Responsive Media Query */
@media (max-width: 1240px) {
  .sidebar{
    width: 60px;
  }
  .sidebar.active{
    width: 220px;
  }
  .home-section{
    width: calc(100% - 60px) !important;
    left: 60px !important;
  }
  .sidebar.active ~ .home-section{
    left: 220px !important;
    width: calc(100% - 220px) !important;
    overflow: hidden !important;
  }
  .home-section nav{
    width: calc(100% - 60px) !important;
    left: 60px !important;
  }
  .sidebar.active ~ .home-section nav{
    width: calc(100% - 220px) !important;
    left: 220px !important
  }
}
@media (max-width: 1150px) {
  .home-content .sales-boxes{
    flex-direction: column;
  }
  .home-content .sales-boxes .box{
    width: 100%;
    overflow-x: scroll;
    margin-bottom: 30px;
  }
  .home-content .sales-boxes .available-computers{
    margin: 0;
  }
}
@media (max-width: 1000px) {
  .overview-boxes .box{
    width: calc(100% / 2 - 15px);
    margin-bottom: 15px;
  }
}
@media (max-width: 700px) {
  nav .sidebar-button .dashboard,
  nav .profile-details .admin_name,
  nav .profile-details i{
    display: none;
  }
  .home-section nav .profile-details{
    height: 50px;
    min-width: 40px;
  }
  .home-content .sales-boxes .sales-details{
    width: 560px;
  }
}
@media (max-width: 550px) {
  .overview-boxes .box{
    width: 100%;
    margin-bottom: 15px;
  }
  .sidebar.active ~ .home-section nav .profile-details{
    display: none;
  }
}
@media (max-width: 400px) {
  .sidebar{
    width: 0;
  }
  .sidebar.active{
    width: 60px;
  }
  .home-section{
    width: 100%;
    left: 0;
  }
  .sidebar.active ~ .home-section{
    left: 60px;
    width: calc(100% - 60px);
  }
  .home-section nav{
    width: 100%;
    left: 0;
  }
  .sidebar.active ~ .home-section nav{
    left: 60px;
    width: calc(100% - 60px);
  }
}
</style>
