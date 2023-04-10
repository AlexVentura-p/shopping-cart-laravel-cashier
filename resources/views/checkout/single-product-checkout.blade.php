<main>
    <form action="" method="post">
        @csrf
        <input id="card-holder-name" type="text">
 
        <!-- Stripe Elements Placeholder -->
        <div id="card-element"></div>
        
        <button id="card-button">
            Process Payment
        </button>
    </form>
</main>