<x-layout>

<div class="container-fluid bg">
    <div class="container">

        <div class="row vh-100 align-items-center justify-content-center">
            <div class="col-12 col-md-5 d-flex align-items-center">
                <div>
                <h1 class="display-3">Dove siamo</h1>
                <p>Puoi trovarci in: </p> <p><span><i class="bi bi-geo-alt"></i></span> Via dei matti n.0, Molisen't</p>   
                <p><i class="bi bi-telephone-inbound-fill"></i> +09 124 722 567 893</p>             
                </div>
            </div>
            <div class="col-12 col-md-5">
                <form class="shadow rounded py-5 px-4 needs-validation bg-white" action="{{route("contacts.store")}}" method="POST" novalidate="">
                    @csrf
                    <h3 class="mb-5 ">Contattaci!</h3>
                    <div class="form-floating mb-3">
                        <input type="text" name="user" class="form-control" id="name" placeholder="Nome e Cognome" required="">
                        <label for="name">Nome e Cognome</label>
                        <small class="invalid-feedback ps-3">
                            Il campo è obbligatorio
                        </small>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required="">
                        <label for="email">Email</label>
                        <small class="invalid-feedback ps-3">
                            Inserisci un indirizzo mail valido
                        </small>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" name="message" placeholder="Parlaci di te in 255 caratteri" id="message" required=""></textarea>
                        <label for="message">Messaggio</label>
                        <small class="invalid-feedback ps-3">
                            Il campo è obbligatorio
                        </small>
                    </div>
                    <div class="text-center mt-5">
                        <button class="contacts tc-black px-5 py-1 fs-5" type="submit">Invia</button>
                    </div>
                </form>
            </div>
        </div> 
    </div>
</div>
















</x-layout>