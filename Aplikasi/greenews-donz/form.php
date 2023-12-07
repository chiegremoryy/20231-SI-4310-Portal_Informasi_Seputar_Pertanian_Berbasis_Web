<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Website Ide Bisnis">
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <meta name="author" content="David Sugiarto, Muhammad Arief Hidayatullah">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="desain/GREENEWS_2x-removebg-preview.png" type="image/x-icon">
        <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
        <link rel="stylesheet" type="text/css "href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
        <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
         <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	    <script src="main.js"></script>
        <title>GreeNews - Portal Informasi Seputar Pertanian</title>
    </head>
    <body>
        <style>
            /* First Header Styling */
            header.first-header {
                background-color: rgb(128, 255, 138);
            padding: 30px;
            }
        </style>
    
    <!-- First Header -->
    <header class="first-header">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <!-- ... (your first header content) ... -->
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none" style="margin-right: 20px;">
                  <img src="desain/GREENEWS_2x-removebg-preview.png" alt="Logo" width="90" height="90">
                </a>
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                  <li>
                    <a href="index.html" class="nav-link px-2 link-body-emphasis">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                        <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
                      </svg>
                      <span class="ms-2">Dashboard</span>
                    </a>
                  </li>
                  <li>
                    <a href="tentang.html" class="nav-link px-2 link-body-emphasis">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-person-fill" viewBox="0 0 16 16">
                        <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm2 5.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-.245S4 12 8 12s5 1.755 5 1.755z"/>
                      </svg>
                      <span class="ms-2">About Us</span>
                    </a>
                  </li>
                  <li>
                    <a href="kontak.html" class="nav-link px-2 link-body-emphasis">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-check-fill" viewBox="0 0 16 16">
                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 4.697v4.974A4.491 4.491 0 0 0 12.5 8a4.49 4.49 0 0 0-1.965.45l-.338-.207L16 4.697Z"/>
                        <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686Z"/>
                      </svg>
                      <span class="ms-2">Contact Us</span>
                    </a>
                  </li>
                </ul>
                
        
                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                  <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                </form>
              </div>
            </div>
          </header>
<br/><br/>
<!-- Modal -->
<div id="ReplyModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Reply Question</h4>
      </div>
      <div class="modal-body">
        <form name="frm1" method="post">
            <input type="hidden" id="commentid" name="Rcommentid">
        	<div class="form-group">
        	  <label for="usr">Write your name:</label>
        	  <input type="text" class="form-control" name="Rname" required>
        	</div>
            <div class="form-group">
              <label for="comment">Write your reply:</label>
              <textarea class="form-control" rows="5" name="Rmsg" required></textarea>
            </div>
        	 <input type="button" id="btnreply" name="btnreply" class="btn btn-primary" value="Reply">
      </form>
      </div>
    </div>

  </div>
</div>

<div class="container">

<div class="panel panel-default" style="margin-top:50px">
  <div class="panel-body">
    <h3>Forum Diskusi GreeNews</h3>
    <hr>
    <form name="frm" method="post">
        <input type="hidden" id="commentid" name="Pcommentid" value="0">
	<div class="form-group">
	  <label for="usr">Write your name:</label>
	  <input type="text" class="form-control" name="name" required>
	</div>
    <div class="form-group">
      <label for="comment">Write your question:</label>
      <textarea class="form-control" rows="5" name="msg" required></textarea>
    </div>
	 <input type="button" id="butsave" name="save" class="btn btn-primary" value="Send">
  </form>
  </div>
</div>
  

<div class="panel panel-default">
  <div class="panel-body">
    <h4>Recent questions</h4>           
	<table class="table" id="MyTable" style="background-color: #edfafa; border:0px;border-radius:10px">
	  <tbody id="record">
		
	  </tbody>
	</table>
  </div>
</div>

</div>

<footer class="footer">
        <div class="container">
            <div class="footer-row">
                <div class="footer-col">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="tentang.html">About Us</a></li>
                        <li><a href="#">Our Services</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Affiliate Program</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Get Help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="index.html">Dashboard</a></li>
                        <li><a href="kontak.html">Contact Us</a></li>
                        <li><a href="tentang.html">About Us</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>List Menu</h4>
                    <ul>
                        <li><a href="berita.html">Berita</a></li>
                        <li><a href="tanaman.html">Tanaman</a></li>
                        <li><a href="forum.html">Forum</a></li>
                        <li><a href="kalkulator.html">Kalkulator</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Follow Us</h4>
                    <div class="social-links">
                        <a href="https://ne-np.facebook.com/david.sugiarto.564/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/_da049/"><i class="fab fa-twitter"></i></a>
                        <a href="https://instagram.com/_da049/"><i class="fab fa-instagram"></i></a>
                        <a href="https://daaddimaki04.000webhostapp.com/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="footer-bwh">
        <p style="text-align: center">Copyright &copy; 2023 Gree_News</p>
    </div>   
    
</body>
</html>

<style>

    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    body {
        font-family: Arial, sans-serif;
    }
    


    .menu {
    list-style: none;
    
}

.menu li {
    display: inline;
    margin-right: 50px;
    font-size: 20px;
}

.menu a {
    color: dimgray;
    text-decoration: none;
    font-weight: bold;
}

/* CSS Footer */
.footer {
    background-color: rgb(128, 255, 138);
    padding: 70px 0;
    text-align: center;
}

.footer-row {
    display: flex;
    justify-content: flex-end; /* Menggeser menu-footer ke kanan */
}

.footer-col {
    text-align: left;
    margin-left: 20px; /* Memberi jarak antara kolom menu-footer */
}

.footer h4 {
    font-size: 18px;
    margin-bottom: 15px;
    color: #24262b;
    text-transform: capitalize;
    font-weight: 500;
    position: relative;
}

.footer h4::before {
    content: '';
    position: absolute;
    left: 0;
    bottom: -10px;
    background-color: dimgray;
    height: 2px;
    box-sizing: border-box;
    width: 50px;
}

.footer ul {
    list-style: none;
    padding: 0;
}

.footer li {
    margin-bottom: 10px;
}

.footer a {
    text-decoration: none;
    color: #ffffff;
    font-weight: bold;
}

/*---*/
    .footer-col{
       width: 25%;
       padding: 0 15px;
    }
    .footer-col h4{
        font-size: 18px;
        color: #4CAF50;
        text-transform: capitalize;
        margin-bottom: 35px;
        font-weight: 500;
        position: relative;
    }
    .footer-col h4::before {
    content: '';
    position: absolute;
    left: 18%; /* Menempatkan sisi kiri pseudo-element di tengah parent */
    transform: translateX(-50%); /* Memindahkan pseudo-element kembali sejauh setengah dari lebar sendiri */
    bottom: -10px;
    background-color: #e91e63;
    height: 2px;
    box-sizing: border-box;
    width: 100px;
}
    
    .footer-col ul li:not(:last-child){
        margin-bottom: 10px;
    }
    .footer-col ul li a{
        font-size: 16px;
        text-transform: capitalize;
        color: #ffffff;
        text-decoration: none;
        font-weight: 300;
        color: #4CAF50;
        display: block;
        transition: all 0.3s ease;
    }
    .footer-col ul li a:hover{
        color: dimgray;
        padding-left: 8px;
    }
    .footer-col .social-links a{
        display: inline-block;
        height: 35px;
        width: 35px;
        background-color: #4CAF50;
        margin:0 10px 10px 0;
        text-align: center;
        line-height: 40px;
        border-radius: 50%;
        color: #ffffff;
        transition: all 0.5s ease;
    }
    .footer-col .social-links a:hover{
        color: #ffffff;
        background-color: dimgray;
    }

    .footer-bwh{
        background-color: rgb(128, 255, 138);
    }

/* Menambahkan media query untuk layout responsif */
@media (min-width: 768px) {
    #news .news-list {
        justify-content: space-between;
    }

    #news .news-item {
        width: calc(50% - 10px);
    }

    /* Membuat 4 kolom pada layar yang lebih lebar */
    @media (min-width: 1024px) {
        #news .news-item {
            width: calc(25% - 10px);
        }
    }
}

/* Media query untuk layar seluler */
@media (max-width: 768px) {
    #news .news-item {
        width: 100%;
        margin-right: 0; /* Menghapus margin-right pada seluler */
    }
}

/* Penyesuaian gambar agar responsif */
.news-item img {
    max-width: 100%;
    height: auto;
    margin-bottom: 10px;
}

/* Penyesuaian footer untuk layout responsif */
@media (max-width: 768px) {
    .footer-row {
        flex-direction: column; /* Change to column for a neat layout on smaller screens */
        align-items: center; /* Center items horizontally in the column */
    }

    .footer-col {
        width: 100%;
        height: auto;
        margin-bottom: 20px;
        text-align: center; /* Center text in each column */
    }

    
}

/* Penyesuaian untuk layar berukuran maksimum 768px */
@media (max-width: 768px) {
    .footer-col h4::before {
        width: 100px; /* Ubah lebar pseudo-element untuk layar seluler */
        left: 50%; /* Tetapkan left ke 50% */
        transform: translateX(-50%); /* Tetapkan transform untuk tetap di tengah */
    }
}

</style>   