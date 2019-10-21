{include 'templates/header.tpl'}

<div class="container-fluid">
    <article class="row bg-secondary">
        <div class="bg-dark col-sm-8 offset-sm-1 col-lg-10 offset-lg-1 py-5">
            <form action="verificarLogin" method="POST" class="col-md-4 offset-md-4 mt-4">
                
                <h1>{$Titulo}</h1>

        <div class="form-group">
            <label>Usuario (email)</label>
            <input type="email" name="username" id="username" class="form-control" placeholder="Ingrese email">
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
        </div>
        <div class = "">
            <h1>{$Message}</h1>
        </div>
    </article>
</div>

{include 'templates/footer.tpl'}
