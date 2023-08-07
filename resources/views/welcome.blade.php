<!DOCTYPE html>
<html lang="en">
  <head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>USTP CONeXT</title>
    <link rel="stylesheet" type="text/css" href="/css/index.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <style>
    #btn-back-to-top {
      position: fixed;
      bottom: 20px;
      right: 20px;
      display: none;
      border-radius: 50%;
      width: 50px;
      height: 50px;
      background-color: transparent;
      color: #0275d8;
    }

    .mybg {
      background-color: #044556;
    }
    .mybg-1 {
      background-color: rgb(29, 29, 29);
    }
    .text-color {
      color: #aeb2b3;
    }
    .fa-solid {
      font-size: 48px;
      display: block;
      margin: 0 auto;
      margin-bottom: 15px;
    }
    .img-fluid {
      max-width: 90%;
    }
    .pl-50 {
      padding-left: 50px;
    }
    .mr-20 {
      margin-right: 20px;
    }
    @media (max-width: 767.98px) {
      .hide-on-sm {
        display: none;
      }
      .admin-card {
        margin-bottom: 15px;
      }
      .mb-sm-4 {
        margin-bottom: 1.5rem;
      }
      .icons-container {
        background-color: gray
      }

      .relative {
      position: relative;
    }

  
    }
  </style>

  <body>
    <!--NAVBAR-->

    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top mybg">
      <div class="container">
        <a class="navbar-brand text-light" href="#">USTP CONeXT</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="menubar"
        >
          <span class="navbar-toggler"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link text-color" href="#about">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-color" href="#faq">FAQ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-color" href="#administrators"
                >Administrators</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link text-color" href="/login"
                >login</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!--GET CONNECTED-->

    <section class="text-dark text-center text-sm-start p-5 mybg align-top">
      <div class="container">
        <div
          class="d-sm-flex align-items-center justify-content-between text-light"
        >
          <div>
            <h1>Get Connected to The Next Generation</h1>
            <p class="lead my-4">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit
              doloribus iusto commodi corrupti praesentium repellat eius, atque,
              quod nihil tempore inventore tempora error, assumenda numquam
              consectetur. Optio quae voluptates sunt!
            </p>
            <button
              class="btn btn-light btn-lg fw-bold"
              data-bs-toggle="modal"
              data-bs-target="#Connect"
            >
              Connect With Us!
            </button>
          </div>
         
          <img src="{{ asset('images/header-img.png') }}" alt="" class="w-50 d-none d-sm-block hide-on-sm" />
        </div>
      </div>
    </section>

    <!--SUBSCRIPTION-->

    <section class="bg-dark">
      <div class="container">
        <div class="row pt-5 pb-5">
          <div class="col-sm-6">
            <h2 class="text-white fw-bold mb-3 text-center text-sm-start">
              Sign Up for Constant Notification
            </h2>
          </div>
          <div class="col-sm-6">
            <div
              class="input-group mb-3 mybg d-flex justify-content-center justify-content-sm-end"
            >
              <input
                type="text"
                class="form-control"
                placeholder="Enter your email"
                aria-label="Enter your email"
                aria-describedby="button-addon2"
              />
              <button
                class="btn btn-outline-secondary bg-primary text-light"
                type="button"
                id="button-addon2"
              >
                Subscribe
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--VIRTUAL BOXES-->

    <section>
      <div class="container mt-5">
        <div class="row">
          <div class="col-md-4 mb-md-4 mb-sm-4">
            <div class="card text-center mb-3 mybg-1" style="height: 100%">
              <div class="card-body">
                <i
                  class="fa-solid fa-laptop text-light"
                  style="font-size: 64px"
                ></i>
                <h5 class="card-title text-light">Virtual</h5>
                <p class="card-text text-light">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Voluptas voluptatem repellendus unde veniam eius quia
                  inventore amet dicta? Incidunt, cumque.
                </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-md-4 mb-sm-4">
            <div
              class="card text-center mb-3 mybg-1"
              style="height: 100%"
            >
              <div class="card-body">
                <i
                  class="fa-solid fa-user text-light"
                  style="font-size: 64px"
                ></i>
                <h5 class="card-title text-light">Virtual</h5>
                <p class="card-text text-light">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Voluptas voluptatem repellendus unde veniam eius quia
                  inventore amet dicta? Incidunt, cumque.
                </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-md-4 mb-sm-4">
            <div class="card text-center mb-3 mybg-1" style="height: 100%">
              <div class="card-body">
                <i
                  class="fa-solid fa-users text-light"
                  style="font-size: 64px"
                ></i>
                <h5 class="card-title text-light">Virtual</h5>
                <p class="card-text text-light">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Voluptas voluptatem repellendus unde veniam eius quia
                  inventore amet dicta? Incidunt, cumque.
                </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--IMAGES-->

    <section id="about" class="text-dark text-sm-start p-5">
      <div class="container">
        <div class="row bg-light p-5">
          <div class="col-sm-6">
            <h1 class="text-primary">
              Let's Turn Your
              <span class="text-warning"><strong>IDEAS</strong></span> Into a
              Solution
            </h1>
            <p class="lead my-4 text-primary">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum
              accusamus tempore minus iure earum numquam commodi harum, qui
              obcaecati optio eligendi. Qui, laboriosam illum esse natus rerum
              accusantium tempora omnis?
            </p>
            <button
              class="btn btn-light btn-lg fw-bold d-block mx-auto"
              data-bs-toggle="modal"
              data-bs-target="#Connect"
              style="transition: 0.3s ease-in-out;"
              onMouseOver="this.style.scale= 1.2"
              onMouseOut="this.style.scale= 1"
            >
              Connect With Us!
            </button>
          </div>
          <div
            class="col-sm-6 d-flex justify-content-center align-items-center"
          >
            <img
              src="/images/idea.jpg"
              alt=""
              class="img-fluid d-none d-sm-block hide-on-sm"
            />
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row p-5 mt-5">
          <div
            class="col-sm-6 d-flex justify-content-center align-items-center"
          >
            <img
              src="/images/success.jpg"
              alt=""
              class="img-fluid d-none d-sm-block hide-on-sm"
            />
          </div>
          <div class="col-sm-6">
            <h1 class="text-primary">
              Your <span class="text-warning"><strong>SUCCESS</strong></span> Is
              Our Focus
            </h1>
            <p class="lead my-4 text-primary">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum
              accusamus tempore minus iure earum numquam commodi harum, qui
              obcaecati optio eligendi. Qui, laboriosam illum esse natus rerum
              accusantium tempora omnis?
            </p>
            <button
              class="btn btn-light btn-lg fw-bold d-block mx-auto"
              id="faq"
              data-bs-toggle="modal"
              data-bs-target="#Connect"
              style="transition: 0.3s ease-in-out;"
              onMouseOver="this.style.scale= 1.2"
              onMouseOut="this.style.scale= 1"
            >
              Connect With Us!
            </button>
          </div>
        </div>
      </div>
    </section>

    <!--ACCORDION-->

    <section>
      <div class="container mb-5">
        <div class="row">
          <div class="col">
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h1 class="text-center">FREQUENTLY ASKED QUESTIONS</h1>
                <h2 class="accordion-header">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseOne"
                    aria-expanded="false"
                    aria-controls="flush-collapseOne"
                  >
                    What kind of IDEAS are you looking for?
                  </button>
                </h2>
                <div
                  id="flush-collapseOne"
                  class="accordion-collapse collapse"
                  data-bs-parent="#accordionFlushExample"
                >
                  <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, aliquid. Ducimus hic, labore neque molestiae ea fuga similique doloribus eos. Assumenda, nulla autem. Sit ducimus ipsum veritatis officia, modi provident?</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseTwo"
                    aria-expanded="false"
                    aria-controls="flush-collapseTwo"
                  >
                    Do you finance a Project?
                  </button>
                </h2>
                <div
                  id="flush-collapseTwo"
                  class="accordion-collapse collapse"
                  data-bs-parent="#accordionFlushExample"
                >
                  <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, at labore. Eos blanditiis corrupti reprehenderit officiis quasi enim vel voluptas! Corrupti ullam ducimus optio illo perspiciatis vero officiis deleniti error.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseThree"
                    aria-expanded="false"
                    aria-controls="flush-collapseThree"
                  >
                    Can I earn money if I join?
                  </button>
                </h2>
                <div
                  id="flush-collapseThree"
                  class="accordion-collapse collapse"
                  data-bs-parent="#accordionFlushExample"
                >
                  <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt fugit natus dolor excepturi tempora explicabo nesciunt omnis, cum, cupiditate, adipisci perspiciatis exercitationem praesentium officiis. Quo corporis at eum cum quaerat.
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--ADMIN-->

    <section id="administrators" class="bg-primary pt-5 pb-5">
      <div class="container mt-5">
        <div class="row pb-5">
          <div class="col-sm-12 text-center text-light">
            <h2>The Administrators</h2>
            <p>
              Our administrators are experts in the field of business and
              technologies with 5 years of experience
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-3 mb-sm-4">
            <div class="card text-center bg-light" style="height: 100%">
              <div class="card-body">
                <img
                  src="https://cdn.britannica.com/70/129770-050-AEBE1EB9/Robert-Downey-Jr-2008.jpg"
                  class=" rounded-circle"
                  alt=""
                  style="height: 35%; width: 60%; object-fit: cover"
                />
                <h4 class="card-title mt-3">Dong Bajolo</h4>
                <p class="card-text" style="margin-bottom: 3rem">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Voluptas voluptatem repellendus unde veniam eius quia
                  inventore amet dicta? Incidunt, cumque.
                </p>
                <div class="icons-container" style="display: flex; gap: .5rem; justify-content: center">
                <i class="fab fa-twitter"></i>&nbsp;
                <i class="fab fa-facebook-f"></i>&nbsp;
                <i class="fab fa-instagram"></i>&nbsp;
                <i class="fab fa-linkedin-in"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-3 mb-sm-4">
            <div class="card text-center bg-light" style="height: 100%">
              <div class="card-body">
              <img
                  src="https://superstarsbio.com/wp-content/uploads/2019/04/Robert-Downey-Jr.-Smile.jpg"
                  class=" rounded-circle"
                  alt=""
                  style="height: 35%; width: 60%; object-fit: cover"
                />
                <h4 class="card-title mt-3">Ding Bajolo</h4>
                <p class="card-text" style="margin-bottom: 3rem">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Voluptas voluptatem repellendus unde veniam eius quia
                  inventore amet dicta? Incidunt, cumque.
                </p>
                <div class="icons-container" style="display: flex; gap: .5rem; justify-content: center">
                <i class="fab fa-twitter"></i>&nbsp;
                <i class="fab fa-facebook-f"></i>&nbsp;
                <i class="fab fa-instagram"></i>&nbsp;
                <i class="fab fa-linkedin-in"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-3 mb-sm-4">
            <div class="card text-center bg-light" style="height: 100%">
              <div class="card-body">
              <img
                  src="https://www.koimoi.com/wp-content/new-galleries/2023/07/robert-downey-jr-says-he-was-fearful-of-his-mcu-character-iron-man-dulling-his-acting-prowess-002.jpg"
                  class=" rounded-circle"
                  alt=""
                  style="height: 35%; width: 60%; object-fit: cover"
                />
                <h4 class="card-title mt-3">Doy Bajolo</h4>
                <p class="card-text" style="margin-bottom: 3rem">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Voluptas voluptatem repellendus unde veniam eius quia
                  inventore amet dicta? Incidunt, cumque.
                </p>
                <div class="icons-container" style="display: flex; gap: .5rem; justify-content: center">
                <i class="fab fa-twitter"></i>&nbsp;
                <i class="fab fa-facebook-f"></i>&nbsp;
                <i class="fab fa-instagram"></i>&nbsp;
                <i class="fab fa-linkedin-in"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-3 mb-sm-4">
            <div class="card text-center bg-light" style="height: 100%">
              <div class="card-body">
              <img
                  src="https://i.insider.com/6368f63cc81699001894b38d?width=700"
                  class=" rounded-circle"
                  alt=""
                  style="height: 35%; width: 60%; object-fit: cover"
                />
                <h4 class="card-title mt-3">Dang Bajolo</h4>
                <p class="card-text" style="margin-bottom: 3rem">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Voluptas voluptatem repellendus unde veniam eius quia
                  inventore amet dicta? Incidunt, cumque.
                </p>
                <div class="icons-container" style="display: flex; gap: .5rem; justify-content: center">
                <i class="fab fa-twitter"></i>&nbsp;
                <i class="fab fa-facebook-f"></i>&nbsp;
                <i class="fab fa-instagram"></i>&nbsp;
                <i class="fab fa-linkedin-in"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!--REGISTER-->
   
        <form id="registrationForm"  method="post" action="{{ route('submit.form') }}">
        @csrf <!-- Add the CSRF token -->
        <div class="modal fade" id="Connect" tabindex="-1" aria-labelledby="ConnectModalLabel" aria-hidden="true">
            <div class="modal-dialog" >
                <div class="modal-content" >
                    <div class="modal-header">
                        <h5 class="modal-title" id="ConnectModalLabel">Registration Form</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5 class="mb-3">Fill out this form to join: <span style="color: transparent;">ERIC JOHN GWAPO</span></h5>
                        <div class="mb-3">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firstName" name="firstName" required />
                        </div>
                        <div class="mb-3">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastName" name="lastName" required />
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required />
                        </div>
                      
                        <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" id="password" name="password" required />
                    <small class="form-text text-muted"></small>
                    </div>
                        <div class="mb-3">
                    <label for="confirmPassword" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required />
                    </div>
                    <div style="display: flex; justify-content: center">
                    <div type="button" id="togglePassword">Show Password</div>
                  </div>
                    </div>
                    <div style="display: flex; justify-content: center; padding: 0 1rem 0 1rem; text-align: center; margin-bottom: 2rem">
                    <div id="passwordValidationResult"></div>
                  </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      
                        <button type="submit" id="submitBtn" name="submitBtn" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>


    <!--FOOTER-->

    <section class="mybg">
      <div class="container">
        <div class="row pt-5 pb-5">
          <p class="text-white text-center">Copyright © 2023</p>
          <div style="background-color: gray; position: relative; " onclick="scrollToTop()">
      <div  style="display: flex; align-items: center; justify-content: center; font-size: 3rem; position: absolute; bottom: -2rem; left: 85rem; width: 6rem; height: 6rem; border-radius: 50%; border: 2px solid #2596be; color: #2596be; cursor: pointer">&#8593;</div>
    </div>
        </div>
       
      </div>
    </section>

    <!--SCROLL BUTTON-->

    <button
      type="button"
      class="btn btn-primary btn-floating btn-lg"
      id="btn-back-to-top"
    >
      <i class="fas fa-arrow-up fw-bolder"></i>
    </button>

    <script src="{{ asset('js/functions.js') }}"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
    
  </body>
</html>