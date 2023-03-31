<?= $this->extend('Front/layout/main') ?>

<?= $this->section('css') ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<?= $this->endSection() ?>


<?= $this->section('title') ?>
Registro
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <h1 class="title">Registrate Ahora?</h1>
    <h2 class="subtitle">
        Solo debes ingresar algunos datos para comenzar a publicar
    </h2>

    <div class="field">
        <label class="label">Name</label>
        <div class="control">
            <input name="name" class="input" type="text" placeholder="Text input">
        </div>
    </div>

    <div class="field">
        <label class="label">Apellidos</label>
        <div class="control">
            <input name="surname" class="input" type="text" placeholder="Text input">
        </div>
    </div>


    <div class="field">
        <label class="label">Correo</label>
        <div class="control has-icons-left has-icons-right">
            <input name="email" class="input" type="email" placeholder="Email input" value="hello@">
            <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
            </span>
            <span class="icon is-small is-right">
                <i class="fas fa-exclamation-triangle"></i>
            </span>
        </div>
        <!-- <p class="help is-danger">This email is invalid</p> -->
    </div>

    <div class="field">
        <label class="label">Elige tu Pais</label>
        <div class="control">
            <div class="select">
                <select name="id_country">
                    <option disabled selected>Elige un pais</option>

                    <?php foreach ($countries as $v) : ?>
                        <option value="<?= $v->id_country?>"><?=  $v->name?></option>
                    <?php endforeach ?>

                </select>
            </div>
        </div>
    </div>

    <div class="field">
        <label class="label">Contraseña</label>
        <div class="control">
            <input name="password" class="input" type="password" placeholder="Text input">
        </div>
    </div>

    <div class="field">
        <label class="label">Confirmacion de contrasela</label>
        <div class="control">
            <input name="c-password" class="input" type="password" placeholder="Text input">
        </div>
    </div>

    <div class="field is-grouped">
        <div class="control">
            <button class="button is-link">Registrarse</button>
        </div>
    </div>
</section>

<?= $this->endSection() ?>