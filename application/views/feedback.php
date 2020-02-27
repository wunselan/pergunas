<style media="screen">
.card{
  border:0px;
  border-radius: 0px;
}
body{
  background-color: #343a40;
}
#mu-contact{
  background-color: transparent;
}
.ab{
  background-color: #3bb570;
}

hr{
  margin-top: 0 !important;
  border-top: 1px solid rgba(255, 255, 255, 1);
}
p{
  text-align: center;
  font-size: 14px;
  color: white;
}
.a{
  line-height: 3 !important;
}
input::placeholder{
  font-size: 12px !important;
}
textarea::placeholder{
  font-size: 12px !important;
}
img{
  max-width: 52%;
}
@media screen and (min-width: 992px) {
  .card{
    width: 69% !important;
    height: 100%;
  }

  .ab{
    width: 60% !important;
    float: right;
  }
  .card-body.ac{
    margin-top: 10%;
  }
}
@media screen and (max-width: 992px) {
  .mu-contact-area{
    margin-top: 0% !important;
    padding-bottom: 0%;
  }

  .card{
    width: 347px !important;
    min-width: 50% !important;
    height: 100%;
    margin: 0 auto;
  }

  .ab{
    width: 347px !important;
    margin: 0 auto;
  }
  .card-body.ac{
    margin-top: 0%;
  }
  img{
    max-width: 35%;
  }
  p{
    margin-bottom: 0px;
  }
}
.mu-contact-area{
  margin-top: 8%;
}

</style>
<body>
  <main>
    <section id="mu-contact">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mu-contact-area">
              <div class="row no-gutters">
                <div class="col-lg-5">
                  <div class="card ab">
                    <div class="card-body ac">
                      <img src="/pergunas/application/assets/images/aa.png" alt="" class="img-responsive img-responsive-center wd-200 mg-b-10">
                      <hr>
                      <p>Berilah <strong>Pertanyaan</strong>, <strong>Saran</strong> atau <strong>Kritik</strong> kepada Kami</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-7">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title text-center">Feedback</h5>
                      <div class="input-group mb-3">
                          <div class="input-group-prepend">
                              <span class="input-group-text fa fa-user mu-contact-icon"></span>
                          </div>
                          <input type="text" class="form-control" placeholder="Nama Anda" id="name" name="name" required>
                      </div>
                      <div class="input-group mb-3">
                          <div class="input-group-prepend">
                              <span class="input-group-text fa fa-envelope mu-contact-icon"></span>
                          </div>
                          <input type="email" class="form-control" placeholder="Email" id="email" name="email" required>
                      </div>
                      <div class="input-group mb-3">
                          <div class="input-group-prepend">
                              <span class="input-group-text a fa fa-pencil-square-o mu-contact-icon"></span>
                          </div>
                          <textarea class="form-control" placeholder="Message" id="message" name="message" required></textarea>
                      </div>

                      <div class="center">
                        <button type="submit" class="mu-send-msg-btn"><span>Kirim</span></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</body>
