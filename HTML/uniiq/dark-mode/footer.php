 <!-- Mail Button -->
 <div id="connect" class="animation-spin">
            <div class="space">
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
            </div>
            <div class="connect-content d-flex">
                <section>
                    <h3 class="hide4">If you want to contact us?</h3>
                    <!-- <h3 class="hide5">Let's Work Together</h3> -->
                    <p class="hide4">Based in Rajasthan but available in Pan-India. Lets Talk :)</p>
                    <!-- <p class="hide5">Available all around the World.</p> -->
                </section>
                <div class="d-flex mail-btn align-items-center">
                    <div class="animated-btn">
                        <a class="button" href="mailto:themespace@mail.com"><i
                                class="iconoir-mail"></i>lenception@gmail.com</a>
                    </div>
                    <aside class="align-self-center">
                        <!-- <a href="#"><i class="iconoir-dribbble"></i></a> -->
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                        <a href="#"><i class="iconoir-instagram"></i></a>
                    </aside>
                </div>
            </div>
        </div>
        <!-- End Mail Button -->

        <!-- Footer -->
        <footer class="d-flex justify-content-between align-items-center">

            <div class="d-flex">
                <p>© 2024 <a href="">Lenception.</a> All rights reserved </p>
                <p id="hide1">Designed by 
                    <!-- <a href="#">Bootstrap 5</a> -->
                </p>
                <!-- <p id="hide2"><a href="#">T&C applied</a></p> -->
            </div>

            <aside class="d-flex">
                <!-- <p id="hide3"><a href="#">Buy Template</a></p> -->
                <p>T&C applied</p>
            </aside>

        </footer>
        <!-- End Footer -->


    </div>


    <!-- jQuery Frameworks -->
    <script src="../../../ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="../assets/js/aos.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    <script>
        lightbox.option({
            'wrapAround': true,  // Enable looping
            'resizeDuration': 200,  // Animation duration when resizing images
            'fadeDuration': 200,  // Animation duration when changing images
        });
    </script>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper(".values-slider", {
        slidesPerView: 3, /* Adjust how many values are visible at a time */
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 2000, /* Adjust speed of slide */
            disableOnInteraction: false,
        },
        breakpoints: {
            768: { slidesPerView: 3 }, /* 3 slides on tablets */
            1024: { slidesPerView: 4 }, /* 4 slides on desktops */
            480: { slidesPerView: 2 } /* 2 slides on small screens */
        }
    });
</script>




</body>

</html>