<div class="section" id='contact'>
   <div class="section-title"><p>Contatti</p></div>
    <form class="contact-form" method='post' action='/home/contact'>
        <div class='contact-message'><?=isset($message) ? $message : '' ?></div> 
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type='text' class="form-control" name='nome' id='nome' placeholder='Nome'>

            <label for="cognome">Cognome</label>
            <input type='text' class="form-control" name='cognome' id='cognome' placeholder='Cognome'>

            <label for="tel">Telefono</label>
            <input type='tel' class="form-control" name='tel' id='tel' placeholder='Telefono'>

            <label for="email">Email&nbsp;*</label>
            <input type='email' class="form-control" name='email' id='email' placeholder='Email' required>

            <label for="testo">Descrivi il lavoro&nbsp;*</label>
            <textarea rows="4" class="form-control" cols="50" name='testo' id='testo' placeholder="Descrivi il lavoro" required></textarea>

            <div class="btn-box text-center">
                <input type="submit" class="btn center-block" id='submit' value="invia">
            </div>
        </div>
    </form> 
</div>




    



     
     
     


