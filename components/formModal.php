<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-dark" id="exampleModalLabel">Cere o ofertă de preț</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex flex-column">
                <div class="d-flex align-items-start justify-content-center gap-3 p-0 pb-3 p-sm-3">
                    <div class="">
                        <span><i class="fa-solid fa-circle-info fa-circle-info-custom fa-2x"></i></span>
                    </div>
                    <div class="">
                        <p class="form-p">
                            Datele commpletate <strong>NU</strong> vor fi introduse într-o bază de date sau folosite în
                            scopuri de
                            marketing.
                        </p>
                        <a href="/politica-cookie#gdprinfo" target="_blank">Află mai multe
                            despre protecția
                            datelor
                        </a>
                    </div>
                </div>
                <form id="formLucmar" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nume:</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Numar de telefon:</label>
                        <input type="text" class="form-control" name="phone">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label attach-image-label">
                            <span class="attach-file-name">
                                Adaugă imagini (maxim 5)
                            </span>
                            <input type="file" multiple id="image" class="form-control image-input" name="image[]">
                        </label>
                        <div class="attached-images-container"></div>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrierea proiectului (opțional):</label>
                        <textarea name="description" id="description" class="form-control"></textarea>
                    </div>
                    <div class="mb-3 d-flex justify-content-center">
                        <div class="cf-turnstile" data-sitekey="0x4AAAAAAB0yJdAtvLgpwHwA" data-theme="light"></div>
                    </div>
                    <div class="mb-3 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary btn-form-send">
                            <div class="spinner-border spinner-border-sm d-none" role="status"></div>
                            Obține oferta
                        </button>
                    </div>
                </form>

                <div id="toast" class="toast-hidden fs-5 text-white"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Anulează</button>
            </div>
        </div>
    </div>
</div>