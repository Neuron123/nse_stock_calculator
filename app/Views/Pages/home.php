<div class="container">
<h1>Welcome to the Nse Stock calculator</h1>
<p>My name is <b>Top Pick</b>, my job is to help you 
know whether you are making a profit or loss, when selling 
 a security.

 <p>Using the original principal amount plus the transactional charges(broker and tax), i give 
     you the minimum amount of price ,<br /> you should sell your stock.</p>


<div class="row">
<div class="col">
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/en/b/b1/Nairobi_Securities_Exchange_%28logo%29.png" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">
    

       <form action="/form_calculator/" method="post">
       <?= csrf_field() ?>
            <label>Enter buying price per share </label>
            <input type="number" step="0.01" min=0 name="price" class="form-control" placeholder="Price of one share" />
           <br />
           <label>Enter size/amount bought </label>
           <input type="number" min = "100" name="amt" class="form-control" placeholder="How much have you bought"/>
            <input type="submit" value="Calculate" />
       </form>
    </p>
  </div>
 </div>
</div>

<div class="col">
<img src="https://t3.ftcdn.net/jpg/03/08/75/78/360_F_308757827_dOZcUbKva7OAhaaQKjOZyn0c5Y0wCx9f.jpg" alt="===" style="width:60%;" />

</div>

<div class="col">

<div class="card text-center">
  <div class="card-header">
    Result
  </div>
  <div class="card-body">
    <!-- <h5 class="card-title">Here is the result</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
    <a href="#" class="btn btn-primary"> <?= esc($newprice) ?> </a>
  </div>
  <div class="card-footer text-muted">
    You should sell at this price(lowest)
  </div>
</div>

</div>

</div>

</div>