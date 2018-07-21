@include('layout.master')
@include('layout.nav')
    <div class="form">
        <form action="/insert" method="POST">
            {{ csrf_field() }}
         <div class="input">
           <label>Nume:</label>
           <input type="text" name="nume" id="nume" placeholder="Introduceți numele...">
         </div>
         <br>
         <div class="input">
           <label>Prenume:</label>
           <input type="text" name="prenume" placeholder="Introduceți prenumele...">
         </div>
         <br>
         <div class="input">
          <label>Țara:</label>
          <input type="text" name="tara" placeholder="Introduceți țara...">
         </div>
         <br>
         <div class="input">
           <label>Oraș:</label>
           <input type="text" name="oras" placeholder="Introduceți orașul...">
         </div>
         <br>
         <div class="input">
           <label>Adresa:</label>
           <input type="text" name="adresa" placeholder="Introduceți adresa...">
         </div>
         <br>
         <div class="input">
          <label>Telefon:</label>
          <input type="text" name="telefon" placeholder="Introduceți numărul...">
         </div>
         <br>
         <div class="input">
           <label>Data inceput:</label>
           <input id="date" type="date1" name="date1" value="2018-05-06">
         </div>
         <br>
         <div class="input">
          <label>Data sfarsit:</label>
          <input id="date" type="date2" name="date2" value="2018-05-06">
         </div>
         <br>
         <div class="input">
          <label>Număr persoane:</label>
          <input type="number" name="numar_pers" min="1" max="10">
         </div>
         <br>
         <input onclick="window.location.href = '/home';" type="submit" id="submit" value="Confirmă">
        </form>
    </div>